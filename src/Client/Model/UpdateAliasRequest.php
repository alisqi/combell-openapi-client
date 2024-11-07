<?php

namespace Combell\Client\Model;

class UpdateAliasRequest
{
    /**
     * The alias destination e-mail addresses
     *
     * @var string[]
     */
    protected $destinations;
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
