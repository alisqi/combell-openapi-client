<?php

namespace Combell\Client\Endpoint;

class ChangeLetsEncrypt extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    protected $hostname;
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $hostname Specific hostname.
     * @param null|\Combell\Client\Model\LetsEncryptConfig $requestBody 
     */
    public function __construct(string $domainName, string $hostname, ?\Combell\Client\Model\LetsEncryptConfig $requestBody = null)
    {
        $this->domain_name = $domainName;
        $this->hostname = $hostname;
        $this->body = $requestBody;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{domain_name}', '{hostname}'), array($this->domain_name, $this->hostname), '/linuxhostings/{domainName}/sslsettings/{hostname}/letsencrypt');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Combell\Client\Model\LetsEncryptConfig) {
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
        if (204 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}