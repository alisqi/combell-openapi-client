<?php

namespace Combell\Client\Exception;

class DeleteSmtpDomainBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}
