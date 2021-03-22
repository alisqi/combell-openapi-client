<?php

namespace Combell\Client\Exception;

class DeleteMailboxBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}