<?php

namespace Combell\Client\Exception;

class DownloadCertificateBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid file_format or invalid password');
    }
}