<?php

namespace Combell\Client\Endpoint;

class DeleteCatchAll extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    protected $email_address;
    /**
     *
     *
     * @param string $domainName Mail zone domain name.
     * @param string $emailAddress E-mail address to which all e-mails are sent to inexistent mailboxes or aliases.
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
        return str_replace(array('{domain_name}', '{email_address}'), array($this->domain_name, $this->email_address), '/mailzones/{domainName}/catchall/{emailAddress}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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
