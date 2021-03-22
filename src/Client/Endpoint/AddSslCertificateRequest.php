<?php

namespace Combell\Client\Endpoint;

class AddSslCertificateRequest extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    /**
    * Executing this method causes the purchase of a paying product.<br />
    Log on to our website to see your current (renewal) prices or contact our Sales department.<br />
    Please note that promotional pricing does not apply for purchases made through our API.
    *
    * @param null|\Combell\Client\Model\CreateSslCertificateRequest $requestBody
    */
    public function __construct(?\Combell\Client\Model\CreateSslCertificateRequest $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Combell\Client\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/sslcertificaterequests';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Combell\Client\Model\CreateSslCertificateRequest) {
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
        if (201 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}
