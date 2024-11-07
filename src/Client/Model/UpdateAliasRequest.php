<?php

namespace Combell\Client\Model;

class UpdateAliasRequest
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
     * The alias destination e-mail addresses
     *
     * @var list<string>
     */
    protected $destinations;
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