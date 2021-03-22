<?php

namespace Combell\Client\Model;

class UpdateSmtpDomainRequest
{
    /**
     * Enabled
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Enabled
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Enabled
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