<?php

namespace Combell\Client\Model;

class MySqlUser
{
    /**
     * User name
     *
     * @var string
     */
    protected $name;
    /**
     * User rights
     *
     * @var string
     */
    protected $rights;
    /**
     * User status
     *
     * @var bool
     */
    protected $enabled;
    /**
     * User name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * User name
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
     * User rights
     *
     * @return string
     */
    public function getRights(): string
    {
        return $this->rights;
    }
    /**
     * User rights
     *
     * @param string $rights
     *
     * @return self
     */
    public function setRights(string $rights): self
    {
        $this->rights = $rights;
        return $this;
    }
    /**
     * User status
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * User status
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
