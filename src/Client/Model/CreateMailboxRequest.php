<?php

namespace Combell\Client\Model;

class CreateMailboxRequest
{
    /**
     * E-mail address
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * Mail zone account id
     *
     * @var int
     */
    protected $accountId;
    /**
    * The password for the mailbox.<br />
    Passwords have to adhere to following rules:<br /><ul><li>Between 8-20 characters.</li><li>Must be a mix of letters and digits.</li><li>Must contain at least one digit (0-9).</li><li>Must contain at least one letter (a-z).</li><li>Cannot contain spaces.</li><li>Cannot contain characters: * € $ & + } { ' " \ </li></ul>
    *
    * @var string
    */
    protected $password;
    /**
     * E-mail address
     *
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->emailAddress;
    }
    /**
     * E-mail address
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
    /**
     * Mail zone account id
     *
     * @return int
     */
    public function getAccountId() : int
    {
        return $this->accountId;
    }
    /**
     * Mail zone account id
     *
     * @param int $accountId
     *
     * @return self
     */
    public function setAccountId(int $accountId) : self
    {
        $this->accountId = $accountId;
        return $this;
    }
    /**
    * The password for the mailbox.<br />
    Passwords have to adhere to following rules:<br /><ul><li>Between 8-20 characters.</li><li>Must be a mix of letters and digits.</li><li>Must contain at least one digit (0-9).</li><li>Must contain at least one letter (a-z).</li><li>Cannot contain spaces.</li><li>Cannot contain characters: * € $ & + } { ' " \ </li></ul>
    *
    * @return string
    */
    public function getPassword() : string
    {
        return $this->password;
    }
    /**
    * The password for the mailbox.<br />
    Passwords have to adhere to following rules:<br /><ul><li>Between 8-20 characters.</li><li>Must be a mix of letters and digits.</li><li>Must contain at least one digit (0-9).</li><li>Must contain at least one letter (a-z).</li><li>Cannot contain spaces.</li><li>Cannot contain characters: * € $ & + } { ' " \ </li></ul>
    *
    * @param string $password
    *
    * @return self
    */
    public function setPassword(string $password) : self
    {
        $this->password = $password;
        return $this;
    }
}
