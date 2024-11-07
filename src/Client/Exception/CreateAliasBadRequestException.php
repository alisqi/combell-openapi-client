<?php

namespace Combell\Client\Exception;

class CreateAliasBadRequestException extends BadRequestException
{
    /**
     * @var \Combell\Client\Model\BadRequestResponse
     */
    private $badRequestResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Combell\Client\Model\BadRequestResponse $badRequestResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->badRequestResponse = $badRequestResponse;
        $this->response = $response;
    }
    public function getBadRequestResponse(): \Combell\Client\Model\BadRequestResponse
    {
        return $this->badRequestResponse;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}