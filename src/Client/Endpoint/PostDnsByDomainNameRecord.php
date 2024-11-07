<?php

namespace Combell\Client\Endpoint;

class PostDnsByDomainNameRecord extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    use \Combell\Client\Runtime\Client\EndpointTrait;
    protected $domain_name;
    /**
     *
     *
     * @param string $domainName The domain name.
     * @param null|\Combell\Client\Model\DnsRecord $requestBody
     */
    public function __construct(string $domainName, ?\Combell\Client\Model\DnsRecord $requestBody = null)
    {
        $this->domain_name = $domainName;
        $this->body = $requestBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{domain_name}'), array($this->domain_name), '/dns/{domainName}/records');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Combell\Client\Model\DnsRecord) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
