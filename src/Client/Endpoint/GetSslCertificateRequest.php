<?php

namespace Combell\Client\Endpoint;

class GetSslCertificateRequest extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param int $id The id of the certificate request.
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/sslcertificaterequests/{id}');
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
     * @throws \Combell\Client\Exception\GetSslCertificateRequestGoneException
     *
     * @return null|\Combell\Client\Model\SslCertificateRequestDetail
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Combell\Client\Model\SslCertificateRequestDetail', 'json');
        }
        if (303 === $status) {
            return null;
        }
        if (410 === $status) {
            throw new \Combell\Client\Exception\GetSslCertificateRequestGoneException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}