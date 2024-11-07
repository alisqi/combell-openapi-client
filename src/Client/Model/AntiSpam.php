<?php

namespace Combell\Client\Model;

class AntiSpam
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
     * Allowed types of anti-spam scanning for this mail zone
     *
     * @var list<string>
     */
    protected $allowedTypes;
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
    /**
     * Allowed types of anti-spam scanning for this mail zone
     *
     * @return list<string>
     */
    public function getAllowedTypes(): array
    {
        return $this->allowedTypes;
    }
    /**
     * Allowed types of anti-spam scanning for this mail zone
     *
     * @param list<string> $allowedTypes
     *
     * @return self
     */
    public function setAllowedTypes(array $allowedTypes): self
    {
        $this->initialized['allowedTypes'] = true;
        $this->allowedTypes = $allowedTypes;
        return $this;
    }
}