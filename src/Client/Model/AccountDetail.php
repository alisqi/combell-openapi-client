<?php

namespace Combell\Client\Model;

class AccountDetail
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
     * The id of the account
     *
     * @var int
     */
    protected $id;
    /**
     * Identifier for the account
     *
     * @var string
     */
    protected $identifier;
    /**
     * Servicepack information.
     *
     * @var Servicepack
     */
    protected $servicepack;
    /**
     * A list of addons applied to the account.
     *
     * @var list<Addon>
     */
    protected $addons;
    /**
     * The id of the account
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * The id of the account
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Identifier for the account
     *
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }
    /**
     * Identifier for the account
     *
     * @param string $identifier
     *
     * @return self
     */
    public function setIdentifier(string $identifier): self
    {
        $this->initialized['identifier'] = true;
        $this->identifier = $identifier;
        return $this;
    }
    /**
     * Servicepack information.
     *
     * @return Servicepack
     */
    public function getServicepack(): Servicepack
    {
        return $this->servicepack;
    }
    /**
     * Servicepack information.
     *
     * @param Servicepack $servicepack
     *
     * @return self
     */
    public function setServicepack(Servicepack $servicepack): self
    {
        $this->initialized['servicepack'] = true;
        $this->servicepack = $servicepack;
        return $this;
    }
    /**
     * A list of addons applied to the account.
     *
     * @return list<Addon>
     */
    public function getAddons(): array
    {
        return $this->addons;
    }
    /**
     * A list of addons applied to the account.
     *
     * @param list<Addon> $addons
     *
     * @return self
     */
    public function setAddons(array $addons): self
    {
        $this->initialized['addons'] = true;
        $this->addons = $addons;
        return $this;
    }
}