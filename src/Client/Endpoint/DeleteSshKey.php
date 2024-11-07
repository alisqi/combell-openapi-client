<?php

namespace Combell\Client\Endpoint;

class DeleteSshKey extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    protected $fingerprint;
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $fingerprint Fingerprint of public key.
     */
    public function __construct(string $domainName, string $fingerprint)
    {
        $this->domain_name = $domainName;
        $this->fingerprint = $fingerprint;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{domain_name}', '{fingerprint}'], [$this->domain_name, $this->fingerprint], '/linuxhostings/{domainName}/ssh/keys/{fingerprint}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\DeleteSshKeyBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Combell\Client\Exception\DeleteSshKeyBadRequestException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}