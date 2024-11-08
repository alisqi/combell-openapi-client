<?php

namespace Combell\Client\Model;

class Mailbox
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
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * Maximum size in MB
     *
     * @var int
     */
    protected $maxSize;
    /**
     * Used size in MB
     *
     * @var int
     */
    protected $actualSize;
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
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
     * Maximum size in MB
     *
     * @return int
     */
    public function getMaxSize(): int
    {
        return $this->maxSize;
    }
    /**
     * Maximum size in MB
     *
     * @param int $maxSize
     *
     * @return self
     */
    public function setMaxSize(int $maxSize): self
    {
        $this->initialized['maxSize'] = true;
        $this->maxSize = $maxSize;
        return $this;
    }
    /**
     * Used size in MB
     *
     * @return int
     */
    public function getActualSize(): int
    {
        return $this->actualSize;
    }
    /**
     * Used size in MB
     *
     * @param int $actualSize
     *
     * @return self
     */
    public function setActualSize(int $actualSize): self
    {
        $this->initialized['actualSize'] = true;
        $this->actualSize = $actualSize;
        return $this;
    }
}