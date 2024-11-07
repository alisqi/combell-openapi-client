<?php

namespace Combell\Client\Model;

class WindowsHostingDetail
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
     * @var list<WindowsSite>
     */
    protected $sites;
    /**
     * A list of mssql databases linked to the hosting account.<br />
     *
     * @var list<string>
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
        $this->initialized['domainName'] = true;
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
        $this->initialized['servicepackId'] = true;
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
        $this->initialized['maxSize'] = true;
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
        $this->initialized['actualSize'] = true;
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
        $this->initialized['ip'] = true;
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
        $this->initialized['ipType'] = true;
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
        $this->initialized['ftpUsername'] = true;
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
        $this->initialized['applicationPool'] = true;
        $this->applicationPool = $applicationPool;
        return $this;
    }
    /**
     * A list of websites on the hosting account.
     *
     * @return list<WindowsSite>
     */
    public function getSites(): array
    {
        return $this->sites;
    }
    /**
     * A list of websites on the hosting account.
     *
     * @param list<WindowsSite> $sites
     *
     * @return self
     */
    public function setSites(array $sites): self
    {
        $this->initialized['sites'] = true;
        $this->sites = $sites;
        return $this;
    }
    /**
     * A list of mssql databases linked to the hosting account.<br />
     *
     * @return list<string>
     */
    public function getMssqlDatabaseNames(): array
    {
        return $this->mssqlDatabaseNames;
    }
    /**
     * A list of mssql databases linked to the hosting account.<br />
     *
     * @param list<string> $mssqlDatabaseNames
     *
     * @return self
     */
    public function setMssqlDatabaseNames(array $mssqlDatabaseNames): self
    {
        $this->initialized['mssqlDatabaseNames'] = true;
        $this->mssqlDatabaseNames = $mssqlDatabaseNames;
        return $this;
    }
}