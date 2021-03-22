<?php

namespace Combell\Client\Endpoint;

class GetScheduledTask extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    protected $scheduled_task_id;
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $scheduledTaskId Id of the scheduled task.
     */
    public function __construct(string $domainName, string $scheduledTaskId)
    {
        $this->domain_name = $domainName;
        $this->scheduled_task_id = $scheduledTaskId;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{domain_name}', '{scheduled_task_id}'), array($this->domain_name, $this->scheduled_task_id), '/linuxhostings/{domainName}/scheduledtasks/{scheduledTaskId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Combell\Client\Model\ScheduledTask
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Combell\\Client\\Model\\ScheduledTask', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}