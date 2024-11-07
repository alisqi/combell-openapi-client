<?php

namespace Combell\Client\Model;

class UpdateAntiSpamRequest
{
    /**
     * Types of anti-spam scanning
     *
     * @var string
     */
    protected $type;
    /**
     * Types of anti-spam scanning
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Types of anti-spam scanning
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
