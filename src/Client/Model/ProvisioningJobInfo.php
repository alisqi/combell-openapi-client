<?php

namespace Combell\Client\Model;

class ProvisioningJobInfo
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
     * The id of the job.
     *
     * @var string
     */
    protected $id;
    /**
     * Current job status
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var CompletionEstimation
     */
    protected $completion;
    /**
     * The id of the job.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The id of the job.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Current job status
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Current job status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return CompletionEstimation
     */
    public function getCompletion(): CompletionEstimation
    {
        return $this->completion;
    }
    /**
     * 
     *
     * @param CompletionEstimation $completion
     *
     * @return self
     */
    public function setCompletion(CompletionEstimation $completion): self
    {
        $this->initialized['completion'] = true;
        $this->completion = $completion;
        return $this;
    }
}