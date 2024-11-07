<?php

namespace Combell\Client\Model;

class SmtpDomain
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
     * The smtp domain name
     *
     * @var string
     */
    protected $hostname;
    /**
     * Enabled
     *
     * @var bool
     */
    protected $enabled;
    /**
     * The smtp domain name
     *
     * @return string
     */
    public function getHostname(): string
    {
        return $this->hostname;
    }
    /**
     * The smtp domain name
     *
     * @param string $hostname
     *
     * @return self
     */
    public function setHostname(string $hostname): self
    {
        $this->initialized['hostname'] = true;
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * Enabled
     *
     * @return bool
     */
    public function getEnabled(): bool
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
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
}