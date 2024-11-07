<?php

namespace Combell\Client\Model;

class UpdatePhpMemoryLimitRequest
{
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
        $this->memoryLimit = $memoryLimit;
        return $this;
    }
}
