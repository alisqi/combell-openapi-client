<?php

namespace Combell\Client\Model;

class AntiSpam
{
    /**
     * Types of anti-spam scanning
     *
     * @var string
     */
    protected $type;
    /**
     * Allowed types of anti-spam scanning for this mail zone
     *
     * @var string[]
     */
    protected $allowedTypes;
    /**
     * Types of anti-spam scanning
     *
     * @return string
     */
    public function getType() : string
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
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Allowed types of anti-spam scanning for this mail zone
     *
     * @return string[]
     */
    public function getAllowedTypes() : array
    {
        return $this->allowedTypes;
    }
    /**
     * Allowed types of anti-spam scanning for this mail zone
     *
     * @param string[] $allowedTypes
     *
     * @return self
     */
    public function setAllowedTypes(array $allowedTypes) : self
    {
        $this->allowedTypes = $allowedTypes;
        return $this;
    }
}