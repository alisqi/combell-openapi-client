<?php

namespace Combell\Client\Model;

class AutoForward
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
     * Enabled
     *
     * @var bool
     */
    protected $enabled;
    /**
     * E-mail addresses to which e-mails are forwarded
     *
     * @var list<string>
     */
    protected $emailAddresses;
    /**
     * Copy to myself
     *
     * @var bool
     */
    protected $copyToMyself;
    /**
     * Enabled
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Enabled
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * E-mail addresses to which e-mails are forwarded
     *
     * @return list<string>
     */
    public function getEmailAddresses(): array
    {
        return $this->emailAddresses;
    }
    /**
     * E-mail addresses to which e-mails are forwarded
     *
     * @param list<string> $emailAddresses
     *
     * @return self
     */
    public function setEmailAddresses(array $emailAddresses): self
    {
        $this->initialized['emailAddresses'] = true;
        $this->emailAddresses = $emailAddresses;
        return $this;
    }
    /**
     * Copy to myself
     *
     * @return bool
     */
    public function getCopyToMyself(): bool
    {
        return $this->copyToMyself;
    }
    /**
     * Copy to myself
     *
     * @param bool $copyToMyself
     *
     * @return self
     */
    public function setCopyToMyself(bool $copyToMyself): self
    {
        $this->initialized['copyToMyself'] = true;
        $this->copyToMyself = $copyToMyself;
        return $this;
    }
}