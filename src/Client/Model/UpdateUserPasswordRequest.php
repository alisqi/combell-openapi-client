<?php

namespace Combell\Client\Model;

class UpdateUserPasswordRequest
{
    /**
    * The password for the database user.<br />
    Passwords have to adhere to following rules:<br /><ul><li>Between 8-20 characters.</li><li>Must be a mix of letters and digits.</li><li>Must contain at least one digit (0-9).</li><li>Must contain at least one letter (a-z).</li><li>Cannot contain spaces.</li><li>Cannot contain characters: * € $ & + } { ' " \ </li></ul>
    *
    * @var string
    */
    protected $password;
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
