<?php

namespace Combell\Client\Model;

class UpdateAntiSpamRequest
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}