<?php

namespace Combell\Client\Endpoint;

class DeleteAlias extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    protected $email_address;
    /**
     *
     *
     * @param string $domainName Mail zone domain name.
     * @param string $emailAddress Alias e-mail address.
     */
    public function __construct(string $domainName, string $emailAddress)
    {
        $this->domain_name = $domainName;
        $this->email_address = $emailAddress;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{domain_name}', '{email_address}'), array($this->domain_name, $this->email_address), '/mailzones/{domainName}/aliases/{emailAddress}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\DeleteAliasBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Combell\Client\Exception\DeleteAliasBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}
