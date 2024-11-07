<?php

namespace Combell\Client\Endpoint;

class CreateMySqlUser extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    use \Combell\Client\Runtime\Client\EndpointTrait;
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
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{database_name}'), array($this->database_name), '/mysqldatabases/{databaseName}/users');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Combell\Client\Model\CreateMySqlUser) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\CreateMySqlUserBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (202 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Combell\Client\Exception\CreateMySqlUserBadRequestException($serializer->deserialize($body, 'Combell\\Client\\Model\\BadRequestResponse', 'json'));
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
