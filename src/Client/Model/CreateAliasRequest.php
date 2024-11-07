<?php

namespace Combell\Client\Model;

class CreateAliasRequest
{
    /**
     * The alias e-mail
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * The alias destination e-mail addresses
     *
     * @var string[]
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
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * The alias destination e-mail addresses
     *
     * @return string[]
     */
    public function getDestinations(): array
    {
        return $this->destinations;
    }
    /**
     * The alias destination e-mail addresses
     *
     * @param string[] $destinations
     *
     * @return self
     */
    public function setDestinations(array $destinations): self
    {
        $this->destinations = $destinations;
        return $this;
    }
}
