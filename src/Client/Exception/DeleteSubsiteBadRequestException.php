<?php

namespace Combell\Client\Exception;

class DeleteSubsiteBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Bad Request');
    }
}
