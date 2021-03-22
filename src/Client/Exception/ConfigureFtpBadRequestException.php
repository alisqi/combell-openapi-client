<?php

namespace Combell\Client\Exception;

class ConfigureFtpBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}
