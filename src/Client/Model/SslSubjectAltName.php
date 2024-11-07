<?php

namespace Combell\Client\Model;

class SslSubjectAltName
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
    * The type of the alt name:
    <ul><li>Dns</li><li>Ip</li></ul>
    *
    * @var string
    */
    protected $type;
    /**
     * The value of the alt name.
     *
     * @var string
     */
    protected $value;
    /**
    * The type of the alt name:
    <ul><li>Dns</li><li>Ip</li></ul>
    *
    * @return string
    */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * The type of the alt name:
    <ul><li>Dns</li><li>Ip</li></ul>
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The value of the alt name.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * The value of the alt name.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}