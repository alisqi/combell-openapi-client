<?php

namespace Combell\Client\Model;

class ExtraField
{
    /**
     * Registrant extra field name.
     *
     * @var string
     */
    protected $name;
    /**
     * Registrant extra field value.
     *
     * @var string
     */
    protected $value;
    /**
     * Registrant extra field name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Registrant extra field name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Registrant extra field value.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Registrant extra field value.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
