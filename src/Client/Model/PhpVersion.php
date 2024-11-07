<?php

namespace Combell\Client\Model;

class PhpVersion
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
     * Php version
     *
     * @var string
     */
    protected $version;
    /**
     * Php version
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * Php version
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}