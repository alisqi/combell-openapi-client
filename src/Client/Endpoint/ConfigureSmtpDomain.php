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
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{domain_name}', '{hostname}'), array($this->domain_name, $this->hostname), '/mailzones/{domainName}/smtpdomains/{hostname}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Combell\Client\Model\UpdateSmtpDomainRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\ConfigureSmtpDomainBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (202 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Combell\Client\Exception\ConfigureSmtpDomainBadRequestException($serializer->deserialize($body, 'Combell\\Client\\Model\\BadRequestResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}
