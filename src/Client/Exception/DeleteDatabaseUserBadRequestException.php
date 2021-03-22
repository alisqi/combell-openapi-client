<?php

namespace Combell\Client\Exception;

class DeleteDatabaseUserBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}