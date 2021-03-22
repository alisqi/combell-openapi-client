<?php

namespace Combell\Client\Model;

class CreateMySqlDatabase
{
    /**
    * The name for the database. This will be prefixed during provisioning.
    The provided name during creation will be different from the provisioned database name.
    *
    * @var string
    */
    protected $databaseName;
    /**
     * The id of the account on which to create the database.
     *
     * @var int
     */
    protected $accountId;
    /**
    * The password for the database user.<br />
    Passwords have to adhere to following rules:<br /><ul><li>Between 8-20 characters.</li><li>Must be a mix of letters and digits.</li><li>Must contain at least one digit (0-9).</li><li>Must contain at least one letter (a-z).</li><li>Cannot contain spaces.</li><li>Cannot contain characters: * € $ & + } { ' " \ </li></ul>
    *
    * @var string
    */
    protected $password;
    /**
    * The name for the database. This will be prefixed during provisioning.
    The provided name during creation will be different from the provisioned database name.
    *
    * @return string
    */
    public function getDatabaseName() : string
    {
        return $this->databaseName;
    }
    /**
    * The name for the database. This will be prefixed during provisioning.
    The provided name during creation will be different from the provisioned database name.
    *
    * @param string $databaseName
    *
    * @return self
    */
    public function setDatabaseName(string $databaseName) : self
    {
        $this->databaseName = $databaseName;
        return $this;
    }
    /**
     * The id of the account on which to create the database.
     *
     * @return int
     */
    public function getAccountId() : int
    {
        return $this->accountId;
    }
    /**
     * The id of the account on which to create the database.
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
    * The password for the database user.<br />
    Passwords have to adhere to following rules:<br /><ul><li>Between 8-20 characters.</li><li>Must be a mix of letters and digits.</li><li>Must contain at least one digit (0-9).</li><li>Must contain at least one letter (a-z).</li><li>Cannot contain spaces.</li><li>Cannot contain characters: * € $ & + } { ' " \ </li></ul>
    *
    * @return string
    */
    public function getPassword() : string
    {
        return $this->password;
    }
    /**
    * The password for the database user.<br />
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