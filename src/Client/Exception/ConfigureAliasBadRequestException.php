<?php

namespace Combell\Client\Exception;

class ConfigureAliasBadRequestException extends BadRequestException
{
    private $badRequestResponse;
    public function __construct(\Combell\Client\Model\BadRequestResponse $badRequestResponse)
    {
        parent::__construct('Bad Request', 400);
        $this->badRequestResponse = $badRequestResponse;
    }
    public function getBadRequestResponse()
    {
        return $this->badRequestResponse;
    }
}