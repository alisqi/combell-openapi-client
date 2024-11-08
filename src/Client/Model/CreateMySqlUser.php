<?php

namespace Combell\Client\Model;

class CreateMySqlUser
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
    * User name<br />
    User names have to adhere to following rules:<br /><ul><li>Between 2-14 characters.</li><li>Must be a mix of letters and/or digits.</li><li>Must be lower cased.</li><li>Cannot contain spaces.</li></ul>
    *
    * @var string
    */
    protected $name;
    /**
    * The password for the database user.<br />
    Passwords have to adhere to following rules:<br /><ul><li>Between 8-20 characters.</li><li>Must be a mix of letters and digits.</li><li>Must contain at least one digit (0-9).</li><li>Must contain at least one letter (a-z).</li><li>Cannot contain spaces.</li><li>Cannot contain characters: * € $ & + } { ' " \ </li></ul>
    *
    * @var string
    */
    protected $password;
    /**
    * User name<br />
    User names have to adhere to following rules:<br /><ul><li>Between 2-14 characters.</li><li>Must be a mix of letters and/or digits.</li><li>Must be lower cased.</li><li>Cannot contain spaces.</li></ul>
    *
    * @return string
    */
    public function getName(): string
    {
        return $this->name;
    }
    /**
    * User name<br />
    User names have to adhere to following rules:<br /><ul><li>Between 2-14 characters.</li><li>Must be a mix of letters and/or digits.</li><li>Must be lower cased.</li><li>Cannot contain spaces.</li></ul>
    *
    * @param string $name
    *
    * @return self
    */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
    * The password for the database user.<br />
    Passwords have to adhere to following rules:<br /><ul><li>Between 8-20 characters.</li><li>Must be a mix of letters and digits.</li><li>Must contain at least one digit (0-9).</li><li>Must contain at least one letter (a-z).</li><li>Cannot contain spaces.</li><li>Cannot contain characters: * € $ & + } { ' " \ </li></ul>
    *
    * @return string
    */
    public function getPassword(): string
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
    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
}