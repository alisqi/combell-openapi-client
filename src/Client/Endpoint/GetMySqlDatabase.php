<?php

namespace Combell\Client\Endpoint;

class GetMySqlDatabase extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $database_name;
    /**
     * 
     *
     * @param string $databaseName 
     */
    public function __construct(string $databaseName)
    {
        $this->database_name = $databaseName;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{database_name}'], [$this->database_name], '/mysqldatabases/{databaseName}');
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
     * @return null|\Combell\Client\Model\MySqlDatabase
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Combell\Client\Model\MySqlDatabase', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}