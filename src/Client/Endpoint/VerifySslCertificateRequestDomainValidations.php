<?php

namespace Combell\Client\Endpoint;

class VerifySslCertificateRequestDomainValidations extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    protected $id;
    /**
     *
     *
     * @param int $id The id of the certificate request.
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/sslcertificaterequests/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Combell\Client\Exception\VerifySslCertificateRequestDomainValidationsGoneException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (202 === $status) {
            return null;
        }
        if (303 === $status) {
            return null;
        }
        if (410 === $status) {
            throw new \Combell\Client\Exception\VerifySslCertificateRequestDomainValidationsGoneException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}
