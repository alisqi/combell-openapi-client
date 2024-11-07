<?php

namespace Combell\Client\Model;

class CatchAll
{
    /**
     * E-mail addresses to which all e-mails are sent to inexistent mailboxes or aliases
     *
     * @var string[]
     */
    protected $emailAddresses;
    /**
     * E-mail addresses to which all e-mails are sent to inexistent mailboxes or aliases
     *
     * @return string[]
     */
    public function getEmailAddresses(): array
    {
        return $this->emailAddresses;
    }
    /**
     * E-mail addresses to which all e-mails are sent to inexistent mailboxes or aliases
     *
     * @param string[] $emailAddresses
     *
     * @return self
     */
    public function setEmailAddresses(array $emailAddresses): self
    {
        $this->emailAddresses = $emailAddresses;
        return $this;
    }
}
