<?php

namespace Combell\Client\Model;

class UpdatePhpMemoryLimitRequest
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
     * The php memory limit
     *
     * @var int
     */
    protected $memoryLimit;
    /**
     * The php memory limit
     *
     * @return int
     */
    public function getMemoryLimit(): int
    {
        return $this->memoryLimit;
    }
    /**
     * The php memory limit
     *
     * @param int $memoryLimit
     *
     * @return self
     */
    public function setMemoryLimit(int $memoryLimit): self
    {
        $this->initialized['memoryLimit'] = true;
        $this->memoryLimit = $memoryLimit;
        return $this;
    }
}