<?php

namespace Combell\Client\Endpoint;

class DeleteSmtpDomain extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
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
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{domain_name}', '{hostname}'], [$this->domain_name, $this->hostname], '/mailzones/{domainName}/smtpdomains/{hostname}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\DeleteSmtpDomainBadRequestException
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
            throw new \Combell\Client\Exception\DeleteSmtpDomainBadRequestException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}