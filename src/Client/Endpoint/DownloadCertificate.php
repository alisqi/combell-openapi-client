<?php

namespace Combell\Client\Endpoint;

class DownloadCertificate extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $sha1_fingerprint;
    /**
    * Returns the certifcate as binary data with the content-type and the filename information in the response headers.
    *
    * @param string $sha1Fingerprint The SHA-1 fingerprint of the certificate.
    * @param array $queryParameters {
    *     @var string $file_format The file format of the returned file stream:
    <ul><li>PFX: Also known as PKCS #12, is a single, password protected certificate archive that contains the entire certificate chain plus the matching private key.</li></ul>
    *     @var string $password The password used to protect the certificate file.<br />
    * }
    */
    public function __construct(string $sha1Fingerprint, array $queryParameters = [])
    {
        $this->sha1_fingerprint = $sha1Fingerprint;
        $this->queryParameters = $queryParameters;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{sha1_fingerprint}'], [$this->sha1_fingerprint], '/sslcertificates/{sha1Fingerprint}/download');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['file_format', 'password']);
        $optionsResolver->setRequired(['file_format', 'password']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('file_format', ['string']);
        $optionsResolver->addAllowedTypes('password', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\DownloadCertificateBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Combell\Client\Exception\DownloadCertificateBadRequestException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}