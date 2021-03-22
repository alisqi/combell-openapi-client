<?php

namespace Combell\Client\Endpoint;

class ConfigureAlias extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    protected $email_address;
    /**
     *
     *
     * @param string $domainName Mail zone domain name.
     * @param string $emailAddress Alias e-mail address.
     * @param null|\Combell\Client\Model\UpdateAliasRequest $requestBody
     */
    public function __construct(string $domainName, string $emailAddress, ?\Combell\Client\Model\UpdateAliasRequest $requestBody = null)
    {
        $this->domain_name = $domainName;
        $this->email_address = $emailAddress;
        $this->body = $requestBody;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{domain_name}', '{email_address}'), array($this->domain_name, $this->email_address), '/mailzones/{domainName}/aliases/{emailAddress}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Combell\Client\Model\UpdateAliasRequest) {
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
     * @throws \Combell\Client\Exception\ConfigureAliasBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (202 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Combell\Client\Exception\ConfigureAliasBadRequestException($serializer->deserialize($body, 'Combell\\Client\\Model\\BadRequestResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}
