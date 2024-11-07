<?php

namespace Combell\Client\Model;

class MySqlDatabase
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
     * Database name
     *
     * @var string
     */
    protected $name;
    /**
     * Hostname
     *
     * @var string
     */
    protected $hostname;
    /**
     * The number of users.
     *
     * @var int
     */
    protected $userCount;
    /**
     * The maximim size in MB for the database.
     *
     * @var int
     */
    protected $maxSize;
    /**
     * The actual size in MB for the database.
     *
     * @var int
     */
    protected $actualSize;
    /**
     * The account id for the database.
     *
     * @var int
     */
    protected $accountId;
    /**
     * Database name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Database name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Hostname
     *
     * @return string
     */
    public function getHostname(): string
    {
        return $this->hostname;
    }
    /**
     * Hostname
     *
     * @param string $hostname
     *
     * @return self
     */
    public function setHostname(string $hostname): self
    {
        $this->initialized['hostname'] = true;
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * The number of users.
     *
     * @return int
     */
    public function getUserCount(): int
    {
        return $this->userCount;
    }
    /**
     * The number of users.
     *
     * @param int $userCount
     *
     * @return self
     */
    public function setUserCount(int $userCount): self
    {
        $this->initialized['userCount'] = true;
        $this->userCount = $userCount;
        return $this;
    }
    /**
     * The maximim size in MB for the database.
     *
     * @return int
     */
    public function getMaxSize(): int
    {
        return $this->maxSize;
    }
    /**
     * The maximim size in MB for the database.
     *
     * @param int $maxSize
     *
     * @return self
     */
    public function setMaxSize(int $maxSize): self
    {
        $this->initialized['maxSize'] = true;
        $this->maxSize = $maxSize;
        return $this;
    }
    /**
     * The actual size in MB for the database.
     *
     * @return int
     */
    public function getActualSize(): int
    {
        return $this->actualSize;
    }
    /**
     * The actual size in MB for the database.
     *
     * @param int $actualSize
     *
     * @return self
     */
    public function setActualSize(int $actualSize): self
    {
        $this->initialized['actualSize'] = true;
        $this->actualSize = $actualSize;
        return $this;
    }
    /**
     * The account id for the database.
     *
     * @return int
     */
    public function getAccountId(): int
    {
        return $this->accountId;
    }
    /**
     * The account id for the database.
     *
     * @param int $accountId
     *
     * @return self
     */
    public function setAccountId(int $accountId): self
    {
        $this->initialized['accountId'] = true;
        $this->accountId = $accountId;
        return $this;
    }
}