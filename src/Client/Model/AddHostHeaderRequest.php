<?php

namespace Combell\Client\Model;

class AddHostHeaderRequest
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
     * Host header domain name (e.g. alias.be or alias.site.be).
     *
     * @var string
     */
    protected $domainName;
    /**
     * Host header domain name (e.g. alias.be or alias.site.be).
     *
     * @return string
     */
    public function getDomainName(): string
    {
        return $this->domainName;
    }
    /**
     * Host header domain name (e.g. alias.be or alias.site.be).
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
}