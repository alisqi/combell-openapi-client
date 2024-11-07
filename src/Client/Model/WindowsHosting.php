<?php

namespace Combell\Client\Model;

class WindowsHosting
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
}
