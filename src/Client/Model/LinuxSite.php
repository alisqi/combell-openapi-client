<?php

namespace Combell\Client\Model;

class LinuxSite
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
     * The name of the website.
     *
     * @var string
     */
    protected $name;
    /**
     * The path of the website.
     *
     * @var string
     */
    protected $path;
    /**
     * Host headers for the website.
     *
     * @var list<HostHeader>
     */
    protected $hostHeaders;
    /**
     * Indicates whether ssl is enabled for the website.
     *
     * @var bool
     */
    protected $sslEnabled;
    /**
     * Indicates whether automatic https redirection is enabled for the website.
     *
     * @var bool
     */
    protected $httpsRedirectEnabled;
    /**
     * Indicates whether http/2 protocol is enabled for the website.
     *
     * @var bool
     */
    protected $http2Enabled;
    /**
     * The name of the website.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the website.
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
     * The path of the website.
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
    /**
     * The path of the website.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * Host headers for the website.
     *
     * @return list<HostHeader>
     */
    public function getHostHeaders(): array
    {
        return $this->hostHeaders;
    }
    /**
     * Host headers for the website.
     *
     * @param list<HostHeader> $hostHeaders
     *
     * @return self
     */
    public function setHostHeaders(array $hostHeaders): self
    {
        $this->initialized['hostHeaders'] = true;
        $this->hostHeaders = $hostHeaders;
        return $this;
    }
    /**
     * Indicates whether ssl is enabled for the website.
     *
     * @return bool
     */
    public function getSslEnabled(): bool
    {
        return $this->sslEnabled;
    }
    /**
     * Indicates whether ssl is enabled for the website.
     *
     * @param bool $sslEnabled
     *
     * @return self
     */
    public function setSslEnabled(bool $sslEnabled): self
    {
        $this->initialized['sslEnabled'] = true;
        $this->sslEnabled = $sslEnabled;
        return $this;
    }
    /**
     * Indicates whether automatic https redirection is enabled for the website.
     *
     * @return bool
     */
    public function getHttpsRedirectEnabled(): bool
    {
        return $this->httpsRedirectEnabled;
    }
    /**
     * Indicates whether automatic https redirection is enabled for the website.
     *
     * @param bool $httpsRedirectEnabled
     *
     * @return self
     */
    public function setHttpsRedirectEnabled(bool $httpsRedirectEnabled): self
    {
        $this->initialized['httpsRedirectEnabled'] = true;
        $this->httpsRedirectEnabled = $httpsRedirectEnabled;
        return $this;
    }
    /**
     * Indicates whether http/2 protocol is enabled for the website.
     *
     * @return bool
     */
    public function getHttp2Enabled(): bool
    {
        return $this->http2Enabled;
    }
    /**
     * Indicates whether http/2 protocol is enabled for the website.
     *
     * @param bool $http2Enabled
     *
     * @return self
     */
    public function setHttp2Enabled(bool $http2Enabled): self
    {
        $this->initialized['http2Enabled'] = true;
        $this->http2Enabled = $http2Enabled;
        return $this;
    }
}