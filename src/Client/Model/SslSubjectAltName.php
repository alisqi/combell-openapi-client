<?php

namespace Combell\Client\Model;

class SslSubjectAltName
{
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
        $this->value = $value;
        return $this;
    }
}
