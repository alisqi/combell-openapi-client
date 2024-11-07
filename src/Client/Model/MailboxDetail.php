<?php

namespace Combell\Client\Model;

class MailboxDetail
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
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * Login to connect with the mailbox
     *
     * @var string
     */
    protected $login;
    /**
     * Maximum size in MB
     *
     * @var int
     */
    protected $maxSize;
    /**
     * Used size in MB
     *
     * @var int
     */
    protected $actualSize;
    /**
     * 
     *
     * @var AutoReply
     */
    protected $autoReply;
    /**
     * 
     *
     * @var AutoForward
     */
    protected $autoForward;
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
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
     * Login to connect with the mailbox
     *
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }
    /**
     * Login to connect with the mailbox
     *
     * @param string $login
     *
     * @return self
     */
    public function setLogin(string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;
        return $this;
    }
    /**
     * Maximum size in MB
     *
     * @return int
     */
    public function getMaxSize(): int
    {
        return $this->maxSize;
    }
    /**
     * Maximum size in MB
     *
     * @param int $maxSize
     *
     * @return self
     */
    public function setMaxSize(int $maxSize): self
    {
        $this->initialized['maxSize'] = true;
        $this->maxSize = $maxSize;
        return $this;
    }
    /**
     * Used size in MB
     *
     * @return int
     */
    public function getActualSize(): int
    {
        return $this->actualSize;
    }
    /**
     * Used size in MB
     *
     * @param int $actualSize
     *
     * @return self
     */
    public function setActualSize(int $actualSize): self
    {
        $this->initialized['actualSize'] = true;
        $this->actualSize = $actualSize;
        return $this;
    }
    /**
     * 
     *
     * @return AutoReply
     */
    public function getAutoReply(): AutoReply
    {
        return $this->autoReply;
    }
    /**
     * 
     *
     * @param AutoReply $autoReply
     *
     * @return self
     */
    public function setAutoReply(AutoReply $autoReply): self
    {
        $this->initialized['autoReply'] = true;
        $this->autoReply = $autoReply;
        return $this;
    }
    /**
     * 
     *
     * @return AutoForward
     */
    public function getAutoForward(): AutoForward
    {
        return $this->autoForward;
    }
    /**
     * 
     *
     * @param AutoForward $autoForward
     *
     * @return self
     */
    public function setAutoForward(AutoForward $autoForward): self
    {
        $this->initialized['autoForward'] = true;
        $this->autoForward = $autoForward;
        return $this;
    }
}