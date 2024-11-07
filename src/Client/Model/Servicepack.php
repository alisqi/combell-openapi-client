<?php

namespace Combell\Client\Model;

class Servicepack
{
    /**
     * The id of the service pack
     *
     * @var int
     */
    protected $id;
    /**
     * The name of the service pack
     *
     * @var string
     */
    protected $name;
    /**
     * The id of the service pack
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * The id of the service pack
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The name of the service pack
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the service pack
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
}
