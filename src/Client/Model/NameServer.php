<?php

namespace Combell\Client\Model;

class NameServer
{
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
        $this->ip = $ip;
        return $this;
    }
}
