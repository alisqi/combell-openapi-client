<?php

namespace Combell\Client\Exception;

class GoneException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 410);
    }
}