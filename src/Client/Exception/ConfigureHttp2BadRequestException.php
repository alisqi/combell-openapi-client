<?php

namespace Combell\Client\Exception;

class ConfigureHttp2BadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}
