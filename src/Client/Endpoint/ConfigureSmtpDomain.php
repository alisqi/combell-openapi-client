<?php

namespace Combell\Client\Endpoint;

class ConfigureSmtpDomain extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    protected $hostname;
    /**
     * 
     *
     * @param string $domainName Mail zone domain name.
     * @param string $hostname Smtp domain name.
     * @param null|\Combell\Client\Model\UpdateSmtpDomainRequest $requestBody 
     */
    public function __construct(string $domainName, string $hostname, ?\Combell\Client\Model\UpdateSmtpDomainRequest $requestBody = null)
    {
        $this->domain_name = $domainName;
        $this->hostname = $hostname;
        $this->body = $requestBody;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{domain_name}', '{hostname}'], [$this->domain_name, $this->hostname], '/mailzones/{domainName}/smtpdomains/{hostname}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Combell\Client\Model\UpdateSmtpDomainRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\ConfigureSmtpDomainBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Combell\Client\Exception\ConfigureSmtpDomainBadRequestException($serializer->deserialize($body, 'Combell\Client\Model\BadRequestResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}