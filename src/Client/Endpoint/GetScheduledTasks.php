<?php

namespace Combell\Client\Endpoint;

class GetScheduledTasks extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    /**
     * Manage scheduled tasks which are also manageable via the control panel.
     *
     * @param string $domainName Linux hosting domain name.
     */
    public function __construct(string $domainName)
    {
        $this->domain_name = $domainName;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{domain_name}'], [$this->domain_name], '/linuxhostings/{domainName}/scheduledtasks');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Combell\Client\Model\ScheduledTask[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Combell\Client\Model\ScheduledTask[]', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}