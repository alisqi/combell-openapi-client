<?php

namespace Combell\Client\Model;

class CreateSmtpDomainRequest
{
    /**
     * The smtp domain name
     *
     * @var string
     */
    protected $hostname;
    /**
     * The smtp domain name
     *
     * @return string
     */
    public function getHostname() : string
    {
        return $this->hostname;
    }
    /**
     * The smtp domain name
     *
     * @param string $hostname
     *
     * @return self
     */
    public function setHostname(string $hostname) : self
    {
        $this->hostname = $hostname;
        return $this;
    }
}
