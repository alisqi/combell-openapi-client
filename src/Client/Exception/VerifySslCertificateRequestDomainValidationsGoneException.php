<?php

namespace Combell\Client\Exception;

class VerifySslCertificateRequestDomainValidationsGoneException extends GoneException
{
    public function __construct()
    {
        parent::__construct('The resource existed in the past, but is no longer available.');
    }
}
