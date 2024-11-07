<?php

namespace Combell\Client\Endpoint;

class DeleteDnsByDomainNameRecordByRecordId extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    use \Combell\Client\Runtime\Client\EndpointTrait;
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
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{domain_name}', '{record_id}'), array($this->domain_name, $this->record_id), '/dns/{domainName}/records/{recordId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
