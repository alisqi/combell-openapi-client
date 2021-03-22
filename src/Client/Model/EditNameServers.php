<?php

namespace Combell\Client\Model;

class EditNameServers
{
    /**
     * The domain name to register.
     *
     * @var string
     */
    protected $domainName;
    /**
     * List of name servers.
     *
     * @var string[]
     */
    protected $nameServers;
    /**
     * The domain name to register.
     *
     * @return string
     */
    public function getDomainName() : string
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
    public function setDomainName(string $domainName) : self
    {
        $this->domainName = $domainName;
        return $this;
    }
    /**
     * List of name servers.
     *
     * @return string[]
     */
    public function getNameServers() : array
    {
        return $this->nameServers;
    }
    /**
     * List of name servers.
     *
     * @param string[] $nameServers
     *
     * @return self
     */
    public function setNameServers(array $nameServers) : self
    {
        $this->nameServers = $nameServers;
        return $this;
    }
}