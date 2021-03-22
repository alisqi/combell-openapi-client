<?php

namespace Combell\Client\Model;

class SiteBinding
{
    /**
     * The protocol of the site binding.
     *
     * @var string
     */
    protected $protocol;
    /**
     * The host name of the site binding.
     *
     * @var string
     */
    protected $hostName;
    /**
     * The IP address of the site binding.
     *
     * @var string
     */
    protected $ipAddress;
    /**
     * The port of the site binding.
     *
     * @var int
     */
    protected $port;
    /**
     * The certificate thumbprint of the site binding.
     *
     * @var string
     */
    protected $certThumbprint;
    /**
     * Indicates whether ssl is enabled for the binding.
     *
     * @var bool
     */
    protected $sslEnabled;
    /**
     * The protocol of the site binding.
     *
     * @return string
     */
    public function getProtocol() : string
    {
        return $this->protocol;
    }
    /**
     * The protocol of the site binding.
     *
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol) : self
    {
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * The host name of the site binding.
     *
     * @return string
     */
    public function getHostName() : string
    {
        return $this->hostName;
    }
    /**
     * The host name of the site binding.
     *
     * @param string $hostName
     *
     * @return self
     */
    public function setHostName(string $hostName) : self
    {
        $this->hostName = $hostName;
        return $this;
    }
    /**
     * The IP address of the site binding.
     *
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress;
    }
    /**
     * The IP address of the site binding.
     *
     * @param string $ipAddress
     *
     * @return self
     */
    public function setIpAddress(string $ipAddress) : self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }
    /**
     * The port of the site binding.
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }
    /**
     * The port of the site binding.
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port) : self
    {
        $this->port = $port;
        return $this;
    }
    /**
     * The certificate thumbprint of the site binding.
     *
     * @return string
     */
    public function getCertThumbprint() : string
    {
        return $this->certThumbprint;
    }
    /**
     * The certificate thumbprint of the site binding.
     *
     * @param string $certThumbprint
     *
     * @return self
     */
    public function setCertThumbprint(string $certThumbprint) : self
    {
        $this->certThumbprint = $certThumbprint;
        return $this;
    }
    /**
     * Indicates whether ssl is enabled for the binding.
     *
     * @return bool
     */
    public function getSslEnabled() : bool
    {
        return $this->sslEnabled;
    }
    /**
     * Indicates whether ssl is enabled for the binding.
     *
     * @param bool $sslEnabled
     *
     * @return self
     */
    public function setSslEnabled(bool $sslEnabled) : self
    {
        $this->sslEnabled = $sslEnabled;
        return $this;
    }
}