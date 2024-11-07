<?php

namespace Combell\Client\Model;

class CompletionEstimation
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
    * The estimated time when the job should be finished.<br />
    Unexpected delays can always occur.<br />
    The value is subject to change during the provisioning.
    *
    * @var \DateTime
    */
    protected $estimate;
    /**
    * The estimated time when the job should be finished.<br />
    Unexpected delays can always occur.<br />
    The value is subject to change during the provisioning.
    *
    * @return \DateTime
    */
    public function getEstimate(): \DateTime
    {
        return $this->estimate;
    }
    /**
    * The estimated time when the job should be finished.<br />
    Unexpected delays can always occur.<br />
    The value is subject to change during the provisioning.
    *
    * @param \DateTime $estimate
    *
    * @return self
    */
    public function setEstimate(\DateTime $estimate): self
    {
        $this->initialized['estimate'] = true;
        $this->estimate = $estimate;
        return $this;
    }
}