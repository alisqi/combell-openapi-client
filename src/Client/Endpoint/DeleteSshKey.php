<?php

namespace Combell\Client\Endpoint;

class DeleteSshKey extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    use \Combell\Client\Runtime\Client\EndpointTrait;
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
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{domain_name}', '{fingerprint}'), array($this->domain_name, $this->fingerprint), '/linuxhostings/{domainName}/ssh/keys/{fingerprint}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\DeleteSshKeyBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Combell\Client\Exception\DeleteSshKeyBadRequestException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
