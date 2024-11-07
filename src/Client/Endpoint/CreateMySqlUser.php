<?php

namespace Combell\Client\Endpoint;

class CreateMySqlUser extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $database_name;
    /**
     * The creation of a new mysql user will result in a user with read_only rights.
     *
     * @param string $databaseName Name of the database.
     * @param null|\Combell\Client\Model\CreateMySqlUser $requestBody 
     */
    public function __construct(string $databaseName, ?\Combell\Client\Model\CreateMySqlUser $requestBody = null)
    {
        $this->database_name = $databaseName;
        $this->body = $requestBody;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{database_name}'], [$this->database_name], '/mysqldatabases/{databaseName}/users');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Combell\Client\Model\CreateMySqlUser) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\CreateMySqlUserBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Combell\Client\Exception\CreateMySqlUserBadRequestException($serializer->deserialize($body, 'Combell\Client\Model\BadRequestResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}