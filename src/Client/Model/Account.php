<?php

namespace Combell\Client\Model;

class Account
{
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
     * The servicepack id that defines the account.
     *
     * @var int
     */
    protected $servicepackId;
    /**
     * The id of the account
     *
     * @return int
     */
    public function getId() : int
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
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Identifier for the account
     *
     * @return string
     */
    public function getIdentifier() : string
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
    public function setIdentifier(string $identifier) : self
    {
        $this->identifier = $identifier;
        return $this;
    }
    /**
     * The servicepack id that defines the account.
     *
     * @return int
     */
    public function getServicepackId() : int
    {
        return $this->servicepackId;
    }
    /**
     * The servicepack id that defines the account.
     *
     * @param int $servicepackId
     *
     * @return self
     */
    public function setServicepackId(int $servicepackId) : self
    {
        $this->servicepackId = $servicepackId;
        return $this;
    }
}
