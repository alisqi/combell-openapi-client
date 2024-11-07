<?php

namespace Combell\Client\Endpoint;

class GetAccounts extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $skip The number of items to skip in the resultset.
     *     @var int $take The number of items to return in the resultset. The returned count can be equal or less than this number.
     *     @var string $asset_type Filters the list, returning only accounts containing the specified asset type.
     *     @var string $identifier Return only accounts, matching the specified identifier.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/accounts';
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
        $optionsResolver->setDefined(['skip', 'take', 'asset_type', 'identifier']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('skip', ['int']);
        $optionsResolver->addAllowedTypes('take', ['int']);
        $optionsResolver->addAllowedTypes('asset_type', ['string']);
        $optionsResolver->addAllowedTypes('identifier', ['string', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Combell\Client\Model\Account[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Combell\Client\Model\Account[]', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}