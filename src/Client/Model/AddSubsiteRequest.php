<?php

namespace Combell\Client\Model;

class AddSubsiteRequest
{
    /**
     * Subsite domain name (e.g. alias.be or subsite.site.be).
     *
     * @var string
     */
    protected $domainName;
    /**
    * Folder location for the subsite (when empty we use /subsites/site (e.g. /subsites/subsite.site.be)<br />
    The path MUST pre-exist on the server. It WILL NOT be created automatically.
    *
    * @var string
    */
    protected $path;
    /**
     * Subsite domain name (e.g. alias.be or subsite.site.be).
     *
     * @return string
     */
    public function getDomainName() : string
    {
        return $this->domainName;
    }
    /**
     * Subsite domain name (e.g. alias.be or subsite.site.be).
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
    * Folder location for the subsite (when empty we use /subsites/site (e.g. /subsites/subsite.site.be)<br />
    The path MUST pre-exist on the server. It WILL NOT be created automatically.
    *
    * @return string
    */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
    * Folder location for the subsite (when empty we use /subsites/site (e.g. /subsites/subsite.site.be)<br />
    The path MUST pre-exist on the server. It WILL NOT be created automatically.
    *
    * @param string $path
    *
    * @return self
    */
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }
}