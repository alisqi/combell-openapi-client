<?php

namespace Combell\Client\Endpoint;

class GetDnsByDomainNameRecordByRecordId extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    protected $record_id;
    /**
     * 
     *
     * @param string $domainName The domain name.
     * @param string $recordId The id of the record.
     */
    public function __construct(string $domainName, string $recordId)
    {
        $this->domain_name = $domainName;
        $this->record_id = $recordId;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{domain_name}', '{record_id}'), array($this->domain_name, $this->record_id), '/dns/{domainName}/records/{recordId}');
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
     * @return null|\Combell\Client\Model\DnsRecord
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Combell\\Client\\Model\\DnsRecord', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}