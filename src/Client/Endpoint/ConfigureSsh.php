<?php

namespace Combell\Client\Endpoint;

class ConfigureSsh extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param null|\Combell\Client\Model\SshConfiguration $requestBody 
     */
    public function __construct(string $domainName, ?\Combell\Client\Model\SshConfiguration $requestBody = null)
    {
        $this->domain_name = $domainName;
        $this->body = $requestBody;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{domain_name}'), array($this->domain_name), '/linuxhostings/{domainName}/ssh/configuration');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Combell\Client\Model\SshConfiguration) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\ConfigureSshBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Combell\Client\Exception\ConfigureSshBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}