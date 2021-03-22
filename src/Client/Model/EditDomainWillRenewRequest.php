<?php

namespace Combell\Client\Model;

class EditDomainWillRenewRequest
{
    /**
     * Indication of renewal.
     *
     * @var bool
     */
    protected $willRenew;
    /**
     * Indication of renewal.
     *
     * @return bool
     */
    public function getWillRenew() : bool
    {
        return $this->willRenew;
    }
    /**
     * Indication of renewal.
     *
     * @param bool $willRenew
     *
     * @return self
     */
    public function setWillRenew(bool $willRenew) : self
    {
        $this->willRenew = $willRenew;
        return $this;
    }
}
