<?php

namespace Combell\Client\Model;

class CreateCatchAllRequest
{
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
    public function getEmailAddress() : string
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
    public function setEmailAddress(string $emailAddress) : self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }
}