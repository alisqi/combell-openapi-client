<?php

namespace Combell\Client\Model;

class AdditionalValidationAttribute
{
    /**
     * Additional validation attribute field name.
     *
     * @var string
     */
    protected $name;
    /**
     * Additional validation attribute field value.
     *
     * @var string
     */
    protected $value;
    /**
     * Additional validation attribute field name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Additional validation attribute field name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Additional validation attribute field value.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Additional validation attribute field value.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->value = $value;
        return $this;
    }
}