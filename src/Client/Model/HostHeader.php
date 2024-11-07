<?php

namespace Combell\Client\Model;

class HostHeader
{
    /**
     * The name of the host header.
     *
     * @var string
     */
    protected $name;
    /**
     * Indicates if the host header is applied on the web server.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * The name of the host header.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the host header.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Indicates if the host header is applied on the web server.
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Indicates if the host header is applied on the web server.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }
}
