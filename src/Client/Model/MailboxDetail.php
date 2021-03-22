<?php

namespace Combell\Client\Model;

class MailboxDetail
{
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
    public function getName() : string
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
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Login to connect with the mailbox
     *
     * @return string
     */
    public function getLogin() : string
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
    public function setLogin(string $login) : self
    {
        $this->login = $login;
        return $this;
    }
    /**
     * Maximum size in MB
     *
     * @return int
     */
    public function getMaxSize() : int
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
    public function setMaxSize(int $maxSize) : self
    {
        $this->maxSize = $maxSize;
        return $this;
    }
    /**
     * Used size in MB
     *
     * @return int
     */
    public function getActualSize() : int
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
    public function setActualSize(int $actualSize) : self
    {
        $this->actualSize = $actualSize;
        return $this;
    }
    /**
     *
     *
     * @return AutoReply
     */
    public function getAutoReply() : AutoReply
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
    public function setAutoReply(AutoReply $autoReply) : self
    {
        $this->autoReply = $autoReply;
        return $this;
    }
    /**
     *
     *
     * @return AutoForward
     */
    public function getAutoForward() : AutoForward
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
    public function setAutoForward(AutoForward $autoForward) : self
    {
        $this->autoForward = $autoForward;
        return $this;
    }
}
