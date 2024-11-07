<?php

namespace Combell\Client\Model;

class WindowsHostingDetail
{
    /**
     * Domain name for the Windows hosting account.
     *
     * @var string
     */
    protected $domainName;
    /**
     * Id of Windows hosting service package.
     *
     * @var int
     */
    protected $servicepackId;
    /**
     * Maximum webspace size in MB
     *
     * @var int
     */
    protected $maxSize;
    /**
     * Used webspace size in MB
     *
     * @var int
     */
    protected $actualSize;
    /**
     * Windows hosting IP address
     *
     * @var string
     */
    protected $ip;
    /**
     * Type of the hosting IP address (dedicated or shared)
     *
     * @var string
     */
    protected $ipType;
    /**
     * Ftp username
     *
     * @var string
     */
    protected $ftpUsername;
    /**
     * The application pool for the hosting account.
     *
     * @var ApplicationPool
     */
    protected $applicationPool;
    /**
     * A list of websites on the hosting account.
     *
     * @var WindowsSite[]
     */
    protected $sites;
    /**
     * A list of mssql databases linked to the hosting account.<br />
     *
     * @var string[]
     */
    protected $mssqlDatabaseNames;
    /**
     * Domain name for the Windows hosting account.
     *
     * @return string
     */
    public function getDomainName(): string
    {
        return $this->domainName;
    }
    /**
     * Domain name for the Windows hosting account.
     *
     * @param string $domainName
     *
     * @return self
     */
    public function setDomainName(string $domainName): self
    {
        $this->domainName = $domainName;
        return $this;
    }
    /**
     * Id of Windows hosting service package.
     *
     * @return int
     */
    public function getServicepackId(): int
    {
        return $this->servicepackId;
    }
    /**
     * Id of Windows hosting service package.
     *
     * @param int $servicepackId
     *
     * @return self
     */
    public function setServicepackId(int $servicepackId): self
    {
        $this->servicepackId = $servicepackId;
        return $this;
    }
    /**
     * Maximum webspace size in MB
     *
     * @return int
     */
    public function getMaxSize(): int
    {
        return $this->maxSize;
    }
    /**
     * Maximum webspace size in MB
     *
     * @param int $maxSize
     *
     * @return self
     */
    public function setMaxSize(int $maxSize): self
    {
        $this->maxSize = $maxSize;
        return $this;
    }
    /**
     * Used webspace size in MB
     *
     * @return int
     */
    public function getActualSize(): int
    {
        return $this->actualSize;
    }
    /**
     * Used webspace size in MB
     *
     * @param int $actualSize
     *
     * @return self
     */
    public function setActualSize(int $actualSize): self
    {
        $this->actualSize = $actualSize;
        return $this;
    }
    /**
     * Windows hosting IP address
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * Windows hosting IP address
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip): self
    {
        $this->ip = $ip;
        return $this;
    }
    /**
     * Type of the hosting IP address (dedicated or shared)
     *
     * @return string
     */
    public function getIpType(): string
    {
        return $this->ipType;
    }
    /**
     * Type of the hosting IP address (dedicated or shared)
     *
     * @param string $ipType
     *
     * @return self
     */
    public function setIpType(string $ipType): self
    {
        $this->ipType = $ipType;
        return $this;
    }
    /**
     * Ftp username
     *
     * @return string
     */
    public function getFtpUsername(): string
    {
        return $this->ftpUsername;
    }
    /**
     * Ftp username
     *
     * @param string $ftpUsername
     *
     * @return self
     */
    public function setFtpUsername(string $ftpUsername): self
    {
        $this->ftpUsername = $ftpUsername;
        return $this;
    }
    /**
     * The application pool for the hosting account.
     *
     * @return ApplicationPool
     */
    public function getApplicationPool(): ApplicationPool
    {
        return $this->applicationPool;
    }
    /**
     * The application pool for the hosting account.
     *
     * @param ApplicationPool $applicationPool
     *
     * @return self
     */
    public function setApplicationPool(ApplicationPool $applicationPool): self
    {
        $this->applicationPool = $applicationPool;
        return $this;
    }
    /**
     * A list of websites on the hosting account.
     *
     * @return WindowsSite[]
     */
    public function getSites(): array
    {
        return $this->sites;
    }
    /**
     * A list of websites on the hosting account.
     *
     * @param WindowsSite[] $sites
     *
     * @return self
     */
    public function setSites(array $sites): self
    {
        $this->sites = $sites;
        return $this;
    }
    /**
     * A list of mssql databases linked to the hosting account.<br />
     *
     * @return string[]
     */
    public function getMssqlDatabaseNames(): array
    {
        return $this->mssqlDatabaseNames;
    }
    /**
     * A list of mssql databases linked to the hosting account.<br />
     *
     * @param string[] $mssqlDatabaseNames
     *
     * @return self
     */
    public function setMssqlDatabaseNames(array $mssqlDatabaseNames): self
    {
        $this->mssqlDatabaseNames = $mssqlDatabaseNames;
        return $this;
    }
}
