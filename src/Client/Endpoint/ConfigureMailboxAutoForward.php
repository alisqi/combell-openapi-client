<?php

namespace Combell\Client\Endpoint;

class ConfigureMailboxAutoForward extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $mailbox_name;
    /**
     * 
     *
     * @param string $mailboxName Mailbox name.
     * @param null|\Combell\Client\Model\AutoForward $requestBody 
     */
    public function __construct(string $mailboxName, ?\Combell\Client\Model\AutoForward $requestBody = null)
    {
        $this->mailbox_name = $mailboxName;
        $this->body = $requestBody;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{mailbox_name}'], [$this->mailbox_name], '/mailboxes/{mailboxName}/autoforward');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Combell\Client\Model\AutoForward) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}