<?php

namespace Combell\Client\Endpoint;

class EditRecord extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    protected $record_id;
    /**
     * 
     *
     * @param string $domainName The domain name.
     * @param string $recordId The id of the record.
     * @param null|\Combell\Client\Model\DnsRecord $requestBody 
     */
    public function __construct(string $domainName, string $recordId, ?\Combell\Client\Model\DnsRecord $requestBody = null)
    {
        $this->domain_name = $domainName;
        $this->record_id = $recordId;
        $this->body = $requestBody;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{domain_name}', '{record_id}'], [$this->domain_name, $this->record_id], '/dns/{domainName}/records/{recordId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Combell\Client\Model\DnsRecord) {
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
        if (200 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}