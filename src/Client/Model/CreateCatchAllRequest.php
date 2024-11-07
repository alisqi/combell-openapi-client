<?php

namespace Combell\Client\Model;

class CreateCatchAllRequest
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
     * E-mail address to which all e-mails are sent to inexistent mailboxes or aliases
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * E-mail address to which all e-mails are sent to inexistent mailboxes or aliases
     *
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
    /**
     * E-mail address to which all e-mails are sent to inexistent mailboxes or aliases
     *
     * @param string $emailAddress
     *
     * @return self
     */
    public function setEmailAddress(string $emailAddress): self
    {
        $this->initialized['emailAddress'] = true;
        $this->emailAddress = $emailAddress;
        return $this;
    }
}