<?php

namespace Combell\Client\Endpoint;

class GetProvisioningjobByJobId extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $job_id;
    /**
    * Provisioning failures may occur. Contact support in the event of a failure or wait for error resolution.<br />
    Do NOT retry provisioning until the job reports finished or cancelled.
    *
    * @param string $jobId 
    */
    public function __construct(string $jobId)
    {
        $this->job_id = $jobId;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{job_id}'), array($this->job_id), '/provisioningjobs/{jobId}');
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
     * @return null|\Combell\Client\Model\ProvisioningJobInfo|\Combell\Client\Model\ProvisioningJobCompletion
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Combell\\Client\\Model\\ProvisioningJobInfo', 'json');
        }
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Combell\\Client\\Model\\ProvisioningJobCompletion', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}