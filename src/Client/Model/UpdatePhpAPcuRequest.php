<?php

namespace Combell\Client\Model;

class UpdatePhpAPcuRequest
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
     * The APcu size.
     *
     * @var int
     */
    protected $apcuSize;
    /**
     * Enables or disables APC.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * The APcu size.
     *
     * @return int
     */
    public function getApcuSize(): int
    {
        return $this->apcuSize;
    }
    /**
     * The APcu size.
     *
     * @param int $apcuSize
     *
     * @return self
     */
    public function setApcuSize(int $apcuSize): self
    {
        $this->initialized['apcuSize'] = true;
        $this->apcuSize = $apcuSize;
        return $this;
    }
    /**
     * Enables or disables APC.
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Enables or disables APC.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
}