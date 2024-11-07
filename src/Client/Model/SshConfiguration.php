<?php

namespace Combell\Client\Model;

class SshConfiguration
{
    /**
     * Enable or disable SSH.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Enable or disable SSH.
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Enable or disable SSH.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }
}
