<?php

namespace Combell\Client\Model;

class CreateAliasRequest
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
     * The alias e-mail
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * The alias destination e-mail addresses
     *
     * @var list<string>
     */
    protected $destinations;
    /**
     * The alias e-mail
     *
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
    /**
     * The alias e-mail
     *
     * @param string $emailAddress
     *
     * @return self
     */
    public function setEmailAddress(string $emailAddress): self
    {
        $this->initialized['emailAddress'] = true;
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * The alias destination e-mail addresses
     *
     * @return list<string>
     */
    public function getDestinations(): array
    {
        return $this->destinations;
    }
    /**
     * The alias destination e-mail addresses
     *
     * @param list<string> $destinations
     *
     * @return self
     */
    public function setDestinations(array $destinations): self
    {
        $this->initialized['destinations'] = true;
        $this->destinations = $destinations;
        return $this;
    }
}