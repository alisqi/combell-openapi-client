<?php

namespace Combell\Client\Model;

class WindowsSite
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
     * The name of the website.
     *
     * @var string
     */
    protected $name;
    /**
     * The path of the website.
     *
     * @var string
     */
    protected $path;
    /**
     * The bindings for the website.
     *
     * @var list<SiteBinding>
     */
    protected $bindings;
    /**
     * The name of the website.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the website.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The path of the website.
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
    /**
     * The path of the website.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * The bindings for the website.
     *
     * @return list<SiteBinding>
     */
    public function getBindings(): array
    {
        return $this->bindings;
    }
    /**
     * The bindings for the website.
     *
     * @param list<SiteBinding> $bindings
     *
     * @return self
     */
    public function setBindings(array $bindings): self
    {
        $this->initialized['bindings'] = true;
        $this->bindings = $bindings;
        return $this;
    }
}