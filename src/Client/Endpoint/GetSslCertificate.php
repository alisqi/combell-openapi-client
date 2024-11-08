<?php

namespace Combell\Client\Endpoint;

class GetSslCertificate extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $sha1_fingerprint;
    /**
     * 
     *
     * @param string $sha1Fingerprint The SHA-1 fingerprint of the certificate.
     */
    public function __construct(string $sha1Fingerprint)
    {
        $this->sha1_fingerprint = $sha1Fingerprint;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{sha1_fingerprint}'], [$this->sha1_fingerprint], '/sslcertificates/{sha1Fingerprint}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Combell\Client\Model\SslCertificateDetail
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Combell\Client\Model\SslCertificateDetail', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}