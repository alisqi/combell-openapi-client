<?php

namespace Combell\Client\Exception;

class VerifySslCertificateRequestDomainValidationsGoneException extends GoneException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('The resource existed in the past, but is no longer available.');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}