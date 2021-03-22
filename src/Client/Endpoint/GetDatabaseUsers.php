<?php

namespace Combell\Client\Endpoint;

class GetDatabaseUsers extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
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
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{database_name}'), array($this->database_name), '/mysqldatabases/{databaseName}/users');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Combell\Client\Model\MySqlUser[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Combell\\Client\\Model\\MySqlUser[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}