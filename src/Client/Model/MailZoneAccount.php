<?php

namespace Combell\Client\Model;

class MailZoneAccount
{
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
    public function getAccountId() : int
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
    public function setAccountId(int $accountId) : self
    {
        $this->accountId = $accountId;
        return $this;
    }
    /**
     * Size of mailbox(es) in MB
     *
     * @return int
     */
    public function getSize() : int
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
    public function setSize(int $size) : self
    {
        $this->size = $size;
        return $this;
    }
}