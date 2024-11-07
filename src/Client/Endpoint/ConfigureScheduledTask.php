<?php

namespace Combell\Client\Endpoint;

class ConfigureScheduledTask extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    protected $scheduled_task_id;
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $scheduledTaskId Id of the scheduled task.
     * @param null|\Combell\Client\Model\ScheduledTask $requestBody 
     */
    public function __construct(string $domainName, string $scheduledTaskId, ?\Combell\Client\Model\ScheduledTask $requestBody = null)
    {
        $this->domain_name = $domainName;
        $this->scheduled_task_id = $scheduledTaskId;
        $this->body = $requestBody;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{domain_name}', '{scheduled_task_id}'], [$this->domain_name, $this->scheduled_task_id], '/linuxhostings/{domainName}/scheduledtasks/{scheduledTaskId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Combell\Client\Model\ScheduledTask) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\ConfigureScheduledTaskBadRequestException
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
        if (400 === $status) {
            throw new \Combell\Client\Exception\ConfigureScheduledTaskBadRequestException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}