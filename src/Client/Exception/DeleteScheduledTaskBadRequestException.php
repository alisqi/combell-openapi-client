<?php

namespace Combell\Client\Exception;

class DeleteScheduledTaskBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}