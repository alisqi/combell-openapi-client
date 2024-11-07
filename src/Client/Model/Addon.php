<?php

namespace Combell\Client\Model;

class Addon
{
    /**
     * The id of the addon
     *
     * @var int
     */
    protected $id;
    /**
     * The name of the addon
     *
     * @var string
     */
    protected $name;
    /**
     * The id of the addon
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * The id of the addon
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
     * The name of the addon
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the addon
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
