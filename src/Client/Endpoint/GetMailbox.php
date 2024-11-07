<?php

namespace Combell\Client\Endpoint;

class GetMailbox extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    use \Combell\Client\Runtime\Client\EndpointTrait;
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
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{mailbox_name}'), array($this->mailbox_name), '/mailboxes/{mailboxName}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Combell\Client\Model\MailboxDetail
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Combell\\Client\\Model\\MailboxDetail', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
