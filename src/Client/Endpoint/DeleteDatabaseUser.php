<?php

namespace Combell\Client\Endpoint;

class DeleteDatabaseUser extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    use \Combell\Client\Runtime\Client\EndpointTrait;
    protected $database_name;
    protected $user_name;
    /**
     * The deletion of a mysql user is allowed for users with read_only rights.
     *
     * @param string $databaseName Name of the database.
     * @param string $userName Name of the user.
     */
    public function __construct(string $databaseName, string $userName)
    {
        $this->database_name = $databaseName;
        $this->user_name = $userName;
    }
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{database_name}', '{user_name}'), array($this->database_name, $this->user_name), '/mysqldatabases/{databaseName}/users/{userName}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\DeleteDatabaseUserBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Combell\Client\Exception\DeleteDatabaseUserBadRequestException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
