<?php

namespace Combell\Client\Model;

class Http2Configuration
{
    /**
     * Enable or disable HTTP/2.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Enable or disable HTTP/2.
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Enable or disable HTTP/2.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
}