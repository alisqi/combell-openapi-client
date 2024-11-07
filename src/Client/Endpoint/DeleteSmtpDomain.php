<?php

namespace Combell\Client\Endpoint;

class DeleteSmtpDomain extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    use \Combell\Client\Runtime\Client\EndpointTrait;
    protected $domain_name;
    protected $hostname;
    /**
     *
     *
     * @param string $domainName Mail zone domain name.
     * @param string $hostname Smtp domain name.
     */
    public function __construct(string $domainName, string $hostname)
    {
        $this->domain_name = $domainName;
        $this->hostname = $hostname;
    }
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{domain_name}', '{hostname}'), array($this->domain_name, $this->hostname), '/mailzones/{domainName}/smtpdomains/{hostname}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\DeleteSmtpDomainBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Combell\Client\Exception\DeleteSmtpDomainBadRequestException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
