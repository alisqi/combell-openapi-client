<?php

namespace Combell\Client\Model;

class RegisterDomain
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
    * The domain name to register.<br />
    Only pass the domain part and the tld.<br /><i>For abc.com, abc is the domain part, com is the tld.</i>
    *
    * @var string
    */
    protected $domainName;
    /**
     * List of name servers. When empty, the registation will be done on default name servers.
     *
     * @var list<string>
     */
    protected $nameServers;
    /**
     * 
     *
     * @var RegistrantInput
     */
    protected $registrant;
    /**
    * The domain name to register.<br />
    Only pass the domain part and the tld.<br /><i>For abc.com, abc is the domain part, com is the tld.</i>
    *
    * @return string
    */
    public function getDomainName(): string
    {
        return $this->domainName;
    }
    /**
    * The domain name to register.<br />
    Only pass the domain part and the tld.<br /><i>For abc.com, abc is the domain part, com is the tld.</i>
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
     * List of name servers. When empty, the registation will be done on default name servers.
     *
     * @return list<string>
     */
    public function getNameServers(): array
    {
        return $this->nameServers;
    }
    /**
     * List of name servers. When empty, the registation will be done on default name servers.
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
    /**
     * 
     *
     * @return RegistrantInput
     */
    public function getRegistrant(): RegistrantInput
    {
        return $this->registrant;
    }
    /**
     * 
     *
     * @param RegistrantInput $registrant
     *
     * @return self
     */
    public function setRegistrant(RegistrantInput $registrant): self
    {
        $this->initialized['registrant'] = true;
        $this->registrant = $registrant;
        return $this;
    }
}