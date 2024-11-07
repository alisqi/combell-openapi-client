<?php

namespace Combell\Client\Model;

class EditDomainWillRenewRequest
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
    public function getWillRenew(): bool
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
    public function setWillRenew(bool $willRenew): self
    {
        $this->initialized['willRenew'] = true;
        $this->willRenew = $willRenew;
        return $this;
    }
}