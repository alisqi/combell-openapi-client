<?php

namespace Combell\Client\Endpoint;

class CreateHostHeader extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    protected $site_name;
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $siteName Name of the site on the linux hosting.
     * @param null|\Combell\Client\Model\AddHostHeaderRequest $requestBody 
     */
    public function __construct(string $domainName, string $siteName, ?\Combell\Client\Model\AddHostHeaderRequest $requestBody = null)
    {
        $this->domain_name = $domainName;
        $this->site_name = $siteName;
        $this->body = $requestBody;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{domain_name}', '{site_name}'], [$this->domain_name, $this->site_name], '/linuxhostings/{domainName}/sites/{siteName}/hostheaders');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Combell\Client\Model\AddHostHeaderRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}