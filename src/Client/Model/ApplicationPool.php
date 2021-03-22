<?php

namespace Combell\Client\Model;

class ApplicationPool
{
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
     * @var string[]
     */
    protected $installedNetCoreRuntimes;
    /**
     * The active runtime for the hosting account.
     *
     * @return string
     */
    public function getRuntime() : string
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
    public function setRuntime(string $runtime) : self
    {
        $this->runtime = $runtime;
        return $this;
    }
    /**
     * The active pipeline mode for the hosting account.
     *
     * @return string
     */
    public function getPipelineMode() : string
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
    public function setPipelineMode(string $pipelineMode) : self
    {
        $this->pipelineMode = $pipelineMode;
        return $this;
    }
    /**
     * The installed .NET Core runtimes for the hosting account.
     *
     * @return string[]
     */
    public function getInstalledNetCoreRuntimes() : array
    {
        return $this->installedNetCoreRuntimes;
    }
    /**
     * The installed .NET Core runtimes for the hosting account.
     *
     * @param string[] $installedNetCoreRuntimes
     *
     * @return self
     */
    public function setInstalledNetCoreRuntimes(array $installedNetCoreRuntimes) : self
    {
        $this->installedNetCoreRuntimes = $installedNetCoreRuntimes;
        return $this;
    }
}
