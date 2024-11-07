<?php

namespace Combell\Client\Model;

class DomainDetail
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
     * The domain name
     *
     * @var string
     */
    protected $domainName;
    /**
     * Expiration date of the domain
     *
     * @var \DateTime
     */
    protected $expirationDate;
    /**
    * Indication of renewal.<br />
    No value indicates that the renewal state could not be determined at the moment.
    *
    * @var bool
    */
    protected $willRenew;
    /**
     * Nameservers of the domain
     *
     * @var list<NameServer>
     */
    protected $nameServers;
    /**
     * 
     *
     * @var Registrant
     */
    protected $registrant;
    /**
     * Indication if the domain renew state can be changed.
     *
     * @var bool
     */
    protected $canToggleRenew;
    /**
     * The domain name
     *
     * @return string
     */
    public function getDomainName(): string
    {
        return $this->domainName;
    }
    /**
     * The domain name
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
     * Expiration date of the domain
     *
     * @return \DateTime
     */
    public function getExpirationDate(): \DateTime
    {
        return $this->expirationDate;
    }
    /**
     * Expiration date of the domain
     *
     * @param \DateTime $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(\DateTime $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
    * Indication of renewal.<br />
    No value indicates that the renewal state could not be determined at the moment.
    *
    * @return bool
    */
    public function getWillRenew(): bool
    {
        return $this->willRenew;
    }
    /**
    * Indication of renewal.<br />
    No value indicates that the renewal state could not be determined at the moment.
    *
    * @param bool $willRenew
    *
    * @return self
    */
    public function setWillRenew(bool $willRenew): self
    {
        $this->initialized['willRenew'] = true;
        $this->willRenew = $willRenew;
        return $this;
    }
    /**
     * Nameservers of the domain
     *
     * @return list<NameServer>
     */
    public function getNameServers(): array
    {
        return $this->nameServers;
    }
    /**
     * Nameservers of the domain
     *
     * @param list<NameServer> $nameServers
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
     * @return Registrant
     */
    public function getRegistrant(): Registrant
    {
        return $this->registrant;
    }
    /**
     * 
     *
     * @param Registrant $registrant
     *
     * @return self
     */
    public function setRegistrant(Registrant $registrant): self
    {
        $this->initialized['registrant'] = true;
        $this->registrant = $registrant;
        return $this;
    }
    /**
     * Indication if the domain renew state can be changed.
     *
     * @return bool
     */
    public function getCanToggleRenew(): bool
    {
        return $this->canToggleRenew;
    }
    /**
     * Indication if the domain renew state can be changed.
     *
     * @param bool $canToggleRenew
     *
     * @return self
     */
    public function setCanToggleRenew(bool $canToggleRenew): self
    {
        $this->initialized['canToggleRenew'] = true;
        $this->canToggleRenew = $canToggleRenew;
        return $this;
    }
}