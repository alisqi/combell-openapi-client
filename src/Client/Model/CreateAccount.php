<?php

namespace Combell\Client\Model;

class CreateAccount
{
    /**
    * An identifier for the account.<br />
    Should be a domain name for hosting accounts.
    *
    * @var string
    */
    protected $identifier;
    /**
     * The servicepack id that defines the account.
     *
     * @var int
     */
    protected $servicepackId;
    /**
    * Ftp password for the account.<br />
    Applies only if the servicepack contains hosting.<br />
    Passwords have to adhere to following rules:<br /><ul><li>Between 8-20 characters.</li><li>Must be a mix of letters and digits.</li><li>Must contain at least one digit (0-9).</li><li>Must contain at least one letter (a-z).</li><li>Cannot contain spaces.</li><li>Cannot contain characters: * € $ & + } { ' " \ </li></ul>
    *
    * @var string
    */
    protected $ftpPassword;
    /**
    * An identifier for the account.<br />
    Should be a domain name for hosting accounts.
    *
    * @return string
    */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }
    /**
    * An identifier for the account.<br />
    Should be a domain name for hosting accounts.
    *
    * @param string $identifier
    *
    * @return self
    */
    public function setIdentifier(string $identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }
    /**
     * The servicepack id that defines the account.
     *
     * @return int
     */
    public function getServicepackId(): int
    {
        return $this->servicepackId;
    }
    /**
     * The servicepack id that defines the account.
     *
     * @param int $servicepackId
     *
     * @return self
     */
    public function setServicepackId(int $servicepackId): self
    {
        $this->servicepackId = $servicepackId;
        return $this;
    }
    /**
    * Ftp password for the account.<br />
    Applies only if the servicepack contains hosting.<br />
    Passwords have to adhere to following rules:<br /><ul><li>Between 8-20 characters.</li><li>Must be a mix of letters and digits.</li><li>Must contain at least one digit (0-9).</li><li>Must contain at least one letter (a-z).</li><li>Cannot contain spaces.</li><li>Cannot contain characters: * € $ & + } { ' " \ </li></ul>
    *
    * @return string
    */
    public function getFtpPassword(): string
    {
        return $this->ftpPassword;
    }
    /**
    * Ftp password for the account.<br />
    Applies only if the servicepack contains hosting.<br />
    Passwords have to adhere to following rules:<br /><ul><li>Between 8-20 characters.</li><li>Must be a mix of letters and digits.</li><li>Must contain at least one digit (0-9).</li><li>Must contain at least one letter (a-z).</li><li>Cannot contain spaces.</li><li>Cannot contain characters: * € $ & + } { ' " \ </li></ul>
    *
    * @param string $ftpPassword
    *
    * @return self
    */
    public function setFtpPassword(string $ftpPassword): self
    {
        $this->ftpPassword = $ftpPassword;
        return $this;
    }
}
