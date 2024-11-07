<?php

namespace Combell\Client\Model;

class ApplicationPool
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
     * The active runtime for the hosting account.
     *
     * @var string
     */
    protected $runtime;
    /**
     * The active pipeline mode for the hosting account.
     *
     * @var string
     */
    protected $pipelineMode;
    /**
     * The installed .NET Core runtimes for the hosting account.
     *
     * @var list<string>
     */
    protected $installedNetCoreRuntimes;
    /**
     * The active runtime for the hosting account.
     *
     * @return string
     */
    public function getRuntime(): string
    {
        return $this->runtime;
    }
    /**
     * The active runtime for the hosting account.
     *
     * @param string $runtime
     *
     * @return self
     */
    public function setRuntime(string $runtime): self
    {
        $this->initialized['runtime'] = true;
        $this->runtime = $runtime;
        return $this;
    }
    /**
     * The active pipeline mode for the hosting account.
     *
     * @return string
     */
    public function getPipelineMode(): string
    {
        return $this->pipelineMode;
    }
    /**
     * The active pipeline mode for the hosting account.
     *
     * @param string $pipelineMode
     *
     * @return self
     */
    public function setPipelineMode(string $pipelineMode): self
    {
        $this->initialized['pipelineMode'] = true;
        $this->pipelineMode = $pipelineMode;
        return $this;
    }
    /**
     * The installed .NET Core runtimes for the hosting account.
     *
     * @return list<string>
     */
    public function getInstalledNetCoreRuntimes(): array
    {
        return $this->installedNetCoreRuntimes;
    }
    /**
     * The installed .NET Core runtimes for the hosting account.
     *
     * @param list<string> $installedNetCoreRuntimes
     *
     * @return self
     */
    public function setInstalledNetCoreRuntimes(array $installedNetCoreRuntimes): self
    {
        $this->initialized['installedNetCoreRuntimes'] = true;
        $this->installedNetCoreRuntimes = $installedNetCoreRuntimes;
        return $this;
    }
}