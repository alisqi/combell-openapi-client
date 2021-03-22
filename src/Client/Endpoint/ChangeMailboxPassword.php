<?php

namespace Combell\Client\Endpoint;

class ChangeMailboxPassword extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $mailbox_name;
    /**
     * 
     *
     * @param string $mailboxName Mailbox name.
     * @param null|\Combell\Client\Model\UpdateMailboxPasswordRequest $requestBody 
     */
    public function __construct(string $mailboxName, ?\Combell\Client\Model\UpdateMailboxPasswordRequest $requestBody = null)
    {
        $this->mailbox_name = $mailboxName;
        $this->body = $requestBody;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{mailbox_name}'), array($this->mailbox_name), '/mailboxes/{mailboxName}/password');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Combell\Client\Model\UpdateMailboxPasswordRequest) {
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