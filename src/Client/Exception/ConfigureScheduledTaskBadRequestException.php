<?php

namespace Combell\Client\Exception;

class ConfigureScheduledTaskBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}