<?php

namespace Combell\Client\Model;

class Addon
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
        $this->initialized['id'] = true;
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
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}