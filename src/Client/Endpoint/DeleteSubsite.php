<?php

namespace Combell\Client\Endpoint;

class DeleteSubsite extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    protected $site_name;
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $siteName Name of the site on the linux hosting.
     */
    public function __construct(string $domainName, string $siteName)
    {
        $this->domain_name = $domainName;
        $this->site_name = $siteName;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{domain_name}', '{site_name}'], [$this->domain_name, $this->site_name], '/linuxhostings/{domainName}/subsites/{siteName}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\DeleteSubsiteBadRequestException
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
            throw new \Combell\Client\Exception\DeleteSubsiteBadRequestException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}