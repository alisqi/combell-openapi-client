<?php

namespace Combell\Client\Model;

class NameServer
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
     * Nameserver name
     *
     * @var string
     */
    protected $name;
    /**
     * Nameserver ip
     *
     * @var string
     */
    protected $ip;
    /**
     * Nameserver name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Nameserver name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Nameserver ip
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * Nameserver ip
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip): self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
}