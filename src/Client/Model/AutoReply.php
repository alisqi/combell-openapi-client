<?php

namespace Combell\Client\Model;

class AutoReply
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
     * Enabled
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Subject
     *
     * @var string
     */
    protected $subject;
    /**
     * Message
     *
     * @var string
     */
    protected $message;
    /**
     * Enabled
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Enabled
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Subject
     *
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }
    /**
     * Subject
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * Message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Message
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}