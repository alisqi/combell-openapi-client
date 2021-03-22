<?php

namespace Combell\Client\Exception;

class ConfigureSshBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}