<?php

namespace Combell\Client\Endpoint;

class GetDnsByDomainNameRecords extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    use \Combell\Client\Runtime\Client\EndpointTrait;
    protected $domain_name;
    /**
     *
     *
     * @param string $domainName The domain name.
     * @param array $queryParameters {
     *     @var int $skip The number of items to skip in the resultset.
     *     @var int $take The number of items to return in the resultset. The returned count can be equal or less than this number.
     *     @var string $type Filters records matching the type. Most other filters only apply when this filter is specified.
     *     @var string $record_name Filters records matching the record name. This filter only applies to lookups of A, CNAME, TXT, ALIAS and TLSA records.
     *     @var string $service Filters records for the service. This filter only applies to lookups of SRV records.
     * }
     */
    public function __construct(string $domainName, array $queryParameters = array())
    {
        $this->domain_name = $domainName;
        $this->queryParameters = $queryParameters;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{domain_name}'), array($this->domain_name), '/dns/{domainName}/records');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('skip', 'take', 'type', 'record_name', 'service'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('skip', array('int'));
        $optionsResolver->setAllowedTypes('take', array('int'));
        $optionsResolver->setAllowedTypes('type', array('string', 'null'));
        $optionsResolver->setAllowedTypes('record_name', array('string', 'null'));
        $optionsResolver->setAllowedTypes('service', array('string', 'null'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Combell\Client\Model\DnsRecord[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Combell\\Client\\Model\\DnsRecord[]', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
