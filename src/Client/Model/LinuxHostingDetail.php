<?php

namespace Combell\Client\Model;

class LinuxHostingDetail
{
    /**
     * Domain name for the Linux hosting account.
     *
     * @var string
     */
    protected $domainName;
    /**
     * Id of Linux hosting service package.
     *
     * @var int
     */
    protected $servicepackId;
    /**
    * Maximum webspace size in MB<br />
    Use max_size instead.
    *
    * @deprecated
    *
    * @var int
    */
    protected $maxWebspaceSize;
    /**
     * Maximum webspace size in MB
     *
     * @var int
     */
    protected $maxSize;
    /**
    * Used webspace size in MB<br />
    Use actual_size instead.
    *
    * @deprecated
    *
    * @var int
    */
    protected $webspaceUsage;
    /**
     * Used webspace size in MB
     *
     * @var int
     */
    protected $actualSize;
    /**
     * Linux hosting IP address
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
     * Indicates whether ftp is enabled for the hosting account.
     *
     * @var bool
     */
    protected $ftpEnabled;
    /**
     * Ftp username
     *
     * @var string
     */
    protected $ftpUsername;
    /**
     * Ssh host of the linux hosting account
     *
     * @var string
     */
    protected $sshHost;
    /**
     * Ssh username
     *
     * @var string
     */
    protected $sshUsername;
    /**
     * The active php version for the hosting account.
     *
     * @var string
     */
    protected $phpVersion;
    /**
     * A list of websites on the hosting account.
     *
     * @var LinuxSite[]
     */
    protected $sites;
    /**
    * A list of mysql databases linked to the hosting account.<br />
    Details of the database can be read using the mysql database detail.
    *
    * @var string[]
    */
    protected $mysqlDatabaseNames;
    /**
     * Domain name for the Linux hosting account.
     *
     * @return string
     */
    public function getDomainName() : string
    {
        return $this->domainName;
    }
    /**
     * Domain name for the Linux hosting account.
     *
     * @param string $domainName
     *
     * @return self
     */
    public function setDomainName(string $domainName) : self
    {
        $this->domainName = $domainName;
        return $this;
    }
    /**
     * Id of Linux hosting service package.
     *
     * @return int
     */
    public function getServicepackId() : int
    {
        return $this->servicepackId;
    }
    /**
     * Id of Linux hosting service package.
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
    /**
    * Maximum webspace size in MB<br />
    Use max_size instead.
    *
    * @deprecated
    *
    * @return int
    */
    public function getMaxWebspaceSize() : int
    {
        return $this->maxWebspaceSize;
    }
    /**
    * Maximum webspace size in MB<br />
    Use max_size instead.
    *
    * @param int $maxWebspaceSize
    *
    * @deprecated
    *
    * @return self
    */
    public function setMaxWebspaceSize(int $maxWebspaceSize) : self
    {
        $this->maxWebspaceSize = $maxWebspaceSize;
        return $this;
    }
    /**
     * Maximum webspace size in MB
     *
     * @return int
     */
    public function getMaxSize() : int
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
    public function setMaxSize(int $maxSize) : self
    {
        $this->maxSize = $maxSize;
        return $this;
    }
    /**
    * Used webspace size in MB<br />
    Use actual_size instead.
    *
    * @deprecated
    *
    * @return int
    */
    public function getWebspaceUsage() : int
    {
        return $this->webspaceUsage;
    }
    /**
    * Used webspace size in MB<br />
    Use actual_size instead.
    *
    * @param int $webspaceUsage
    *
    * @deprecated
    *
    * @return self
    */
    public function setWebspaceUsage(int $webspaceUsage) : self
    {
        $this->webspaceUsage = $webspaceUsage;
        return $this;
    }
    /**
     * Used webspace size in MB
     *
     * @return int
     */
    public function getActualSize() : int
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
    public function setActualSize(int $actualSize) : self
    {
        $this->actualSize = $actualSize;
        return $this;
    }
    /**
     * Linux hosting IP address
     *
     * @return string
     */
    public function getIp() : string
    {
        return $this->ip;
    }
    /**
     * Linux hosting IP address
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip) : self
    {
        $this->ip = $ip;
        return $this;
    }
    /**
     * Type of the hosting IP address (dedicated or shared)
     *
     * @return string
     */
    public function getIpType() : string
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
    public function setIpType(string $ipType) : self
    {
        $this->ipType = $ipType;
        return $this;
    }
    /**
     * Indicates whether ftp is enabled for the hosting account.
     *
     * @return bool
     */
    public function getFtpEnabled() : bool
    {
        return $this->ftpEnabled;
    }
    /**
     * Indicates whether ftp is enabled for the hosting account.
     *
     * @param bool $ftpEnabled
     *
     * @return self
     */
    public function setFtpEnabled(bool $ftpEnabled) : self
    {
        $this->ftpEnabled = $ftpEnabled;
        return $this;
    }
    /**
     * Ftp username
     *
     * @return string
     */
    public function getFtpUsername() : string
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
    public function setFtpUsername(string $ftpUsername) : self
    {
        $this->ftpUsername = $ftpUsername;
        return $this;
    }
    /**
     * Ssh host of the linux hosting account
     *
     * @return string
     */
    public function getSshHost() : string
    {
        return $this->sshHost;
    }
    /**
     * Ssh host of the linux hosting account
     *
     * @param string $sshHost
     *
     * @return self
     */
    public function setSshHost(string $sshHost) : self
    {
        $this->sshHost = $sshHost;
        return $this;
    }
    /**
     * Ssh username
     *
     * @return string
     */
    public function getSshUsername() : string
    {
        return $this->sshUsername;
    }
    /**
     * Ssh username
     *
     * @param string $sshUsername
     *
     * @return self
     */
    public function setSshUsername(string $sshUsername) : self
    {
        $this->sshUsername = $sshUsername;
        return $this;
    }
    /**
     * The active php version for the hosting account.
     *
     * @return string
     */
    public function getPhpVersion() : string
    {
        return $this->phpVersion;
    }
    /**
     * The active php version for the hosting account.
     *
     * @param string $phpVersion
     *
     * @return self
     */
    public function setPhpVersion(string $phpVersion) : self
    {
        $this->phpVersion = $phpVersion;
        return $this;
    }
    /**
     * A list of websites on the hosting account.
     *
     * @return LinuxSite[]
     */
    public function getSites() : array
    {
        return $this->sites;
    }
    /**
     * A list of websites on the hosting account.
     *
     * @param LinuxSite[] $sites
     *
     * @return self
     */
    public function setSites(array $sites) : self
    {
        $this->sites = $sites;
        return $this;
    }
    /**
    * A list of mysql databases linked to the hosting account.<br />
    Details of the database can be read using the mysql database detail.
    *
    * @return string[]
    */
    public function getMysqlDatabaseNames() : array
    {
        return $this->mysqlDatabaseNames;
    }
    /**
    * A list of mysql databases linked to the hosting account.<br />
    Details of the database can be read using the mysql database detail.
    *
    * @param string[] $mysqlDatabaseNames
    *
    * @return self
    */
    public function setMysqlDatabaseNames(array $mysqlDatabaseNames) : self
    {
        $this->mysqlDatabaseNames = $mysqlDatabaseNames;
        return $this;
    }
}
