<?php

namespace Combell\Client\Exception;

class DeleteSshKeyBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}