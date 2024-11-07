<?php

namespace Combell\Client\Endpoint;

class DownloadCertificate extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    use \Combell\Client\Runtime\Client\EndpointTrait;
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
    public function __construct(string $sha1Fingerprint, array $queryParameters = array())
    {
        $this->sha1_fingerprint = $sha1Fingerprint;
        $this->queryParameters = $queryParameters;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{sha1_fingerprint}'), array($this->sha1_fingerprint), '/sslcertificates/{sha1Fingerprint}/download');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('file_format', 'password'));
        $optionsResolver->setRequired(array('file_format', 'password'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('file_format', array('string'));
        $optionsResolver->setAllowedTypes('password', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\DownloadCertificateBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Combell\Client\Exception\DownloadCertificateBadRequestException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
