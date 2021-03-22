<?php

namespace Combell\Client\Endpoint;

class DeleteDatabase extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $database_name;
    /**
     * 
     *
     * @param string $databaseName Name of the database.
     */
    public function __construct(string $databaseName)
    {
        $this->database_name = $databaseName;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{database_name}'), array($this->database_name), '/mysqldatabases/{databaseName}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\DeleteDatabaseBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Combell\Client\Exception\DeleteDatabaseBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}