<?php

namespace Combell\Client\Endpoint;

class GetRecords extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $domain_name;
    /**
     * 
     *
     * @param string $domainName The domain name.
     * @param array $queryParameters {
     *     @var int $skip The number of items to skip in the resultset.
     *     @var int $take The number of items to return in the resultset. The returned count can be equal or less than this number.
     *     @var string $type Filters records matching the type. Most other filters only apply when this filter is specified.
     *     @var string $record_name Filters records matching the record name. This filter only applies to lookups of A, AAAA, CAA, CNAME, MX, TXT, SRV, ALIAS and TLSA records.
     *     @var string $service Filters records for the service. This filter only applies to lookups of SRV records.
     * }
     */
    public function __construct(string $domainName, array $queryParameters = [])
    {
        $this->domain_name = $domainName;
        $this->queryParameters = $queryParameters;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{domain_name}'], [$this->domain_name], '/dns/{domainName}/records');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['skip', 'take', 'type', 'record_name', 'service']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('skip', ['int']);
        $optionsResolver->addAllowedTypes('take', ['int']);
        $optionsResolver->addAllowedTypes('type', ['string', 'null']);
        $optionsResolver->addAllowedTypes('record_name', ['string', 'null']);
        $optionsResolver->addAllowedTypes('service', ['string', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Combell\Client\Model\DnsRecord[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Combell\Client\Model\DnsRecord[]', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}