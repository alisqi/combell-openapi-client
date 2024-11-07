<?php

namespace Combell\Client\Model;

class PhpVersion
{
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
        $this->version = $version;
        return $this;
    }
}
