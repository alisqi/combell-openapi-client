<?php

namespace Combell\Client\Model;

class Mailbox
{
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
    public function getName() : string
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
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Maximum size in MB
     *
     * @return int
     */
    public function getMaxSize() : int
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
    public function setMaxSize(int $maxSize) : self
    {
        $this->maxSize = $maxSize;
        return $this;
    }
    /**
     * Used size in MB
     *
     * @return int
     */
    public function getActualSize() : int
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
    public function setActualSize(int $actualSize) : self
    {
        $this->actualSize = $actualSize;
        return $this;
    }
}