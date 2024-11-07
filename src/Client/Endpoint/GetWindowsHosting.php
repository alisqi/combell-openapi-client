<?php

namespace Combell\Client\Endpoint;

class GetWindowsHosting extends \Combell\Client\Runtime\Client\BaseEndpoint implements \Combell\Client\Runtime\Client\Endpoint
{
    use \Combell\Client\Runtime\Client\EndpointTrait;
    protected $domain_name;
    /**
     *
     *
     * @param string $domainName The Windows hosting domain name.
     */
    public function __construct(string $domainName)
    {
        $this->domain_name = $domainName;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{domain_name}'), array($this->domain_name), '/windowshostings/{domainName}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Combell\Client\Model\WindowsHostingDetail
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Combell\\Client\\Model\\WindowsHostingDetail', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
