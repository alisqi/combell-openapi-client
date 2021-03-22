<?php

namespace Combell\Client\Endpoint;

class ChangeDatabaseUserPassword extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $database_name;
    protected $user_name;
    /**
     * 
     *
     * @param string $databaseName Name of the database.
     * @param string $userName Name of the user.
     * @param null|\Combell\Client\Model\UpdateUserPasswordRequest $requestBody 
     */
    public function __construct(string $databaseName, string $userName, ?\Combell\Client\Model\UpdateUserPasswordRequest $requestBody = null)
    {
        $this->database_name = $databaseName;
        $this->user_name = $userName;
        $this->body = $requestBody;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{database_name}', '{user_name}'), array($this->database_name, $this->user_name), '/mysqldatabases/{databaseName}/users/{userName}/password');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Combell\Client\Model\UpdateUserPasswordRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}