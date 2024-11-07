<?php

namespace Combell\Client\Endpoint;

class DeleteSubsite extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    use \Combell\Client\Runtime\Client\EndpointTrait;
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
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{domain_name}', '{site_name}'), array($this->domain_name, $this->site_name), '/linuxhostings/{domainName}/subsites/{siteName}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\DeleteSubsiteBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Combell\Client\Exception\DeleteSubsiteBadRequestException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
