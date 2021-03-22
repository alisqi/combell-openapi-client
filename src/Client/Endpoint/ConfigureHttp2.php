<?php

namespace Combell\Client\Endpoint;

class ConfigureHttp2 extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    protected $site_name;
    /**
    *
    *
    * @param string $domainName Linux hosting domain name.
    * @param string $siteName Site name where HTTP/2 should be configured.<br />
    For HTTP/2 to work correctly, the site must have ssl enabled.
    * @param null|\Combell\Client\Model\Http2Configuration $requestBody
    */
    public function __construct(string $domainName, string $siteName, ?\Combell\Client\Model\Http2Configuration $requestBody = null)
    {
        $this->domain_name = $domainName;
        $this->site_name = $siteName;
        $this->body = $requestBody;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{domain_name}', '{site_name}'), array($this->domain_name, $this->site_name), '/linuxhostings/{domainName}/sites/{siteName}/http2/configuration');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Combell\Client\Model\Http2Configuration) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\ConfigureHttp2BadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Combell\Client\Exception\ConfigureHttp2BadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}
