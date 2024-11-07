<?php

namespace Combell\Client\Model;

class MailZoneAccount
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
     * Mail zone account id, use this value to create a mailbox
     *
     * @var int
     */
    protected $accountId;
    /**
     * Size of mailbox(es) in MB
     *
     * @var int
     */
    protected $size;
    /**
     * Mail zone account id, use this value to create a mailbox
     *
     * @return int
     */
    public function getAccountId(): int
    {
        return $this->accountId;
    }
    /**
     * Mail zone account id, use this value to create a mailbox
     *
     * @param int $accountId
     *
     * @return self
     */
    public function setAccountId(int $accountId): self
    {
        $this->initialized['accountId'] = true;
        $this->accountId = $accountId;
        return $this;
    }
    /**
     * Size of mailbox(es) in MB
     *
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
    /**
     * Size of mailbox(es) in MB
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
}