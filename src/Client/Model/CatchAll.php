<?php

namespace Combell\Client\Model;

class CatchAll
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
     * E-mail addresses to which all e-mails are sent to inexistent mailboxes or aliases
     *
     * @var list<string>
     */
    protected $emailAddresses;
    /**
     * E-mail addresses to which all e-mails are sent to inexistent mailboxes or aliases
     *
     * @return list<string>
     */
    public function getEmailAddresses(): array
    {
        return $this->emailAddresses;
    }
    /**
     * E-mail addresses to which all e-mails are sent to inexistent mailboxes or aliases
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
}