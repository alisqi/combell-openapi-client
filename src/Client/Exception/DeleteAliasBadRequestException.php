<?php

namespace Combell\Client\Exception;

class DeleteAliasBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}