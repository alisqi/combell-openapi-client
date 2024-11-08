<?php

namespace Combell\Client\Endpoint;

class ChangeDatabaseUserStatus extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $database_name;
    protected $user_name;
    /**
     * 
     *
     * @param string $databaseName Name of the database.
     * @param string $userName Name of the user.
     * @param null|\Combell\Client\Model\UpdateUserStatusRequest $requestBody 
     */
    public function __construct(string $databaseName, string $userName, ?\Combell\Client\Model\UpdateUserStatusRequest $requestBody = null)
    {
        $this->database_name = $databaseName;
        $this->user_name = $userName;
        $this->body = $requestBody;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{database_name}', '{user_name}'], [$this->database_name, $this->user_name], '/mysqldatabases/{databaseName}/users/{userName}/status');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Combell\Client\Model\UpdateUserStatusRequest) {
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
        if (204 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}