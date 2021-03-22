<?php

namespace Combell\Client\Endpoint;

class DeleteMailbox extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $mailbox_name;
    /**
     * 
     *
     * @param string $mailboxName Mailbox name.
     */
    public function __construct(string $mailboxName)
    {
        $this->mailbox_name = $mailboxName;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{mailbox_name}'), array($this->mailbox_name), '/mailboxes/{mailboxName}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\DeleteMailboxBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Combell\Client\Exception\DeleteMailboxBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}