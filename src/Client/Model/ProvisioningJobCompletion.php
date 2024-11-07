<?php

namespace Combell\Client\Model;

class ProvisioningJobCompletion
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
     * Links to the created resource(s).
     *
     * @var list<string>
     */
    protected $resourceLinks;
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
     * Links to the created resource(s).
     *
     * @return list<string>
     */
    public function getResourceLinks(): array
    {
        return $this->resourceLinks;
    }
    /**
     * Links to the created resource(s).
     *
     * @param list<string> $resourceLinks
     *
     * @return self
     */
    public function setResourceLinks(array $resourceLinks): self
    {
        $this->initialized['resourceLinks'] = true;
        $this->resourceLinks = $resourceLinks;
        return $this;
    }
}