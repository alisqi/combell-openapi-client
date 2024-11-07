<?php

namespace Combell\Client\Model;

class FtpConfiguration
{
    /**
     * Enable or disable FTP.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Enable or disable FTP.
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Enable or disable FTP.
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
