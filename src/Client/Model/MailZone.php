<?php

namespace Combell\Client\Model;

class MailZone
{
    /**
     *
     *
     * @var string
     */
    protected $name;
    /**
     * Indicates whether the mail zone is enabled.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * List of mail zone accounts with their mailbox size.
     *
     * @var MailZoneAccount[]
     */
    protected $availableAccounts;
    /**
    * List of aliases on the mail zone<br />
    An alias is an e-mail address (alias) that automatically forwards received e-mails to another e-mail address (destination).
    *
    * @var Alias[]
    */
    protected $aliases;
    /**
     *
     *
     * @var AntiSpam
     */
    protected $antiSpam;
    /**
     *
     *
     * @var CatchAll
     */
    protected $catchAll;
    /**
    * List of extra smtp domains on the mail zone<br />
    SMTP domain names allow you to link multiple domain names to a single e-mail address.<br />
    E-mails sent to an SMTP domain will be caught by the respective e-mail address on the main domain name.
    *
    * @var SmtpDomain[]
    */
    protected $smtpDomains;
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
        $this->name = $name;
        return $this;
    }
    /**
     * Indicates whether the mail zone is enabled.
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Indicates whether the mail zone is enabled.
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
    /**
     * List of mail zone accounts with their mailbox size.
     *
     * @return MailZoneAccount[]
     */
    public function getAvailableAccounts(): array
    {
        return $this->availableAccounts;
    }
    /**
     * List of mail zone accounts with their mailbox size.
     *
     * @param MailZoneAccount[] $availableAccounts
     *
     * @return self
     */
    public function setAvailableAccounts(array $availableAccounts): self
    {
        $this->availableAccounts = $availableAccounts;
        return $this;
    }
    /**
    * List of aliases on the mail zone<br />
    An alias is an e-mail address (alias) that automatically forwards received e-mails to another e-mail address (destination).
    *
    * @return Alias[]
    */
    public function getAliases(): array
    {
        return $this->aliases;
    }
    /**
    * List of aliases on the mail zone<br />
    An alias is an e-mail address (alias) that automatically forwards received e-mails to another e-mail address (destination).
    *
    * @param Alias[] $aliases
    *
    * @return self
    */
    public function setAliases(array $aliases): self
    {
        $this->aliases = $aliases;
        return $this;
    }
    /**
     *
     *
     * @return AntiSpam
     */
    public function getAntiSpam(): AntiSpam
    {
        return $this->antiSpam;
    }
    /**
     *
     *
     * @param AntiSpam $antiSpam
     *
     * @return self
     */
    public function setAntiSpam(AntiSpam $antiSpam): self
    {
        $this->antiSpam = $antiSpam;
        return $this;
    }
    /**
     *
     *
     * @return CatchAll
     */
    public function getCatchAll(): CatchAll
    {
        return $this->catchAll;
    }
    /**
     *
     *
     * @param CatchAll $catchAll
     *
     * @return self
     */
    public function setCatchAll(CatchAll $catchAll): self
    {
        $this->catchAll = $catchAll;
        return $this;
    }
    /**
    * List of extra smtp domains on the mail zone<br />
    SMTP domain names allow you to link multiple domain names to a single e-mail address.<br />
    E-mails sent to an SMTP domain will be caught by the respective e-mail address on the main domain name.
    *
    * @return SmtpDomain[]
    */
    public function getSmtpDomains(): array
    {
        return $this->smtpDomains;
    }
    /**
    * List of extra smtp domains on the mail zone<br />
    SMTP domain names allow you to link multiple domain names to a single e-mail address.<br />
    E-mails sent to an SMTP domain will be caught by the respective e-mail address on the main domain name.
    *
    * @param SmtpDomain[] $smtpDomains
    *
    * @return self
    */
    public function setSmtpDomains(array $smtpDomains): self
    {
        $this->smtpDomains = $smtpDomains;
        return $this;
    }
}
