<?php

namespace Combell\Client\Exception;

class DeleteDatabaseBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}