<?php

namespace Combell\Client\Model;

class EditNameServers
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
     * The domain name to register.
     *
     * @var string
     */
    protected $domainName;
    /**
     * List of name servers.
     *
     * @var list<string>
     */
    protected $nameServers;
    /**
     * The domain name to register.
     *
     * @return string
     */
    public function getDomainName(): string
    {
        return $this->domainName;
    }
    /**
     * The domain name to register.
     *
     * @param string $domainName
     *
     * @return self
     */
    public function setDomainName(string $domainName): self
    {
        $this->initialized['domainName'] = true;
        $this->domainName = $domainName;
        return $this;
    }
    /**
     * List of name servers.
     *
     * @return list<string>
     */
    public function getNameServers(): array
    {
        return $this->nameServers;
    }
    /**
     * List of name servers.
     *
     * @param list<string> $nameServers
     *
     * @return self
     */
    public function setNameServers(array $nameServers): self
    {
        $this->initialized['nameServers'] = true;
        $this->nameServers = $nameServers;
        return $this;
    }
}