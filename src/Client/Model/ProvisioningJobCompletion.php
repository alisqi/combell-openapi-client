<?php

namespace Combell\Client\Model;

class ProvisioningJobCompletion
{
    /**
     * The id of the job.
     *
     * @var string
     */
    protected $id;
    /**
     * Links to the created resource(s).
     *
     * @var string[]
     */
    protected $resourceLinks;
    /**
     * The id of the job.
     *
     * @return string
     */
    public function getId() : string
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
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Links to the created resource(s).
     *
     * @return string[]
     */
    public function getResourceLinks() : array
    {
        return $this->resourceLinks;
    }
    /**
     * Links to the created resource(s).
     *
     * @param string[] $resourceLinks
     *
     * @return self
     */
    public function setResourceLinks(array $resourceLinks) : self
    {
        $this->resourceLinks = $resourceLinks;
        return $this;
    }
}
