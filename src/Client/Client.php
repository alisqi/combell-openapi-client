<?php

namespace Combell\Client;

class Client extends \Combell\Client\Runtime\Client\Client
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $skip The number of items to skip in the resultset.
     *     @var int $take The number of items to return in the resultset. The returned count can be equal or less than this number.
     *     @var string $asset_type Filters the list, returning only accounts containing the specified asset type.
     *     @var string $identifier Return only accounts, matching the specified identifier.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\Account[]|\Psr\Http\Message\ResponseInterface
     */
    public function getAccounts(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetAccounts($queryParameters), $fetch);
    }
    /**
     * The creation of an account requires some background processing. There is no instant feedback of the creation status.
     *
     * @param null|\Combell\Client\Model\CreateAccount $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\CreateAccountBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createAccount(?\Combell\Client\Model\CreateAccount $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\CreateAccount($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $accountId The id of the account.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\AccountDetail|\Psr\Http\Message\ResponseInterface
     */
    public function getAccount(int $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetAccount($accountId), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName The domain name.
     * @param array $queryParameters {
     *     @var int $skip The number of items to skip in the resultset.
     *     @var int $take The number of items to return in the resultset. The returned count can be equal or less than this number.
     *     @var string $type Filters records matching the type. Most other filters only apply when this filter is specified.
     *     @var string $record_name Filters records matching the record name. This filter only applies to lookups of A, CNAME, TXT, ALIAS and TLSA records.
     *     @var string $service Filters records for the service. This filter only applies to lookups of SRV records.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\DnsRecord[]|\Psr\Http\Message\ResponseInterface
     */
    public function getDnsByDomainNameRecords(string $domainName, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetDnsByDomainNameRecords($domainName, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName The domain name.
     * @param null|\Combell\Client\Model\DnsRecord $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postDnsByDomainNameRecord(string $domainName, ?\Combell\Client\Model\DnsRecord $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\PostDnsByDomainNameRecord($domainName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName The domain name.
     * @param string $recordId The id of the record.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDnsByDomainNameRecordByRecordId(string $domainName, string $recordId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\DeleteDnsByDomainNameRecordByRecordId($domainName, $recordId), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName The domain name.
     * @param string $recordId The id of the record.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\DnsRecord|\Psr\Http\Message\ResponseInterface
     */
    public function getDnsByDomainNameRecordByRecordId(string $domainName, string $recordId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetDnsByDomainNameRecordByRecordId($domainName, $recordId), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName The domain name.
     * @param string $recordId The id of the record.
     * @param null|\Combell\Client\Model\DnsRecord $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putDnsByDomainNameRecordByRecordId(string $domainName, string $recordId, ?\Combell\Client\Model\DnsRecord $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\PutDnsByDomainNameRecordByRecordId($domainName, $recordId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $skip The number of items to skip in the resultset.
     *     @var int $take The number of items to return in the resultset. The returned count can be equal or less than this number.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\Domain[]|\Psr\Http\Message\ResponseInterface
     */
    public function domains(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\Domains($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName The domain name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\DomainDetail|\Psr\Http\Message\ResponseInterface
     */
    public function getDomainByDomainName(string $domainName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetDomainByDomainName($domainName), $fetch);
    }
    /**
     * Registers an available domain.<br />Domain names with extension '.ca' are only available for registrants with country code 'CA'.
     *
     * @param null|\Combell\Client\Model\RegisterDomain $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postDomainsRegistration(?\Combell\Client\Model\RegisterDomain $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\PostDomainsRegistration($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName The domain name
     * @param null|\Combell\Client\Model\EditNameServers $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putDomainsByDomainNameNameserver(string $domainName, ?\Combell\Client\Model\EditNameServers $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\PutDomainsByDomainNameNameserver($domainName, $requestBody), $fetch);
    }
    /**
    * Allowed if can_toggle_renew is true on the domain detail:<br /><ul><li>If there are no unpaid invoices for the domain name anymore.</li><li>If the renewal won't start within 1 month.</li></ul>
    Allowed if the requesting user has the finance role.
    *
    * @param string $domainName The domain name
    * @param null|\Combell\Client\Model\EditDomainWillRenewRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function configureDomain(string $domainName, ?\Combell\Client\Model\EditDomainWillRenewRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ConfigureDomain($domainName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $skip The number of items to skip in the resultset.
     *     @var int $take The number of items to return in the resultset. The returned count can be equal or less than this number.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\LinuxHosting[]|\Psr\Http\Message\ResponseInterface
     */
    public function getLinuxHostings(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetLinuxHostings($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName The Linux hosting domain name.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\LinuxHostingDetail|\Psr\Http\Message\ResponseInterface
     */
    public function getLinuxHosting(string $domainName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetLinuxHosting($domainName), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\PhpVersion[]|\Psr\Http\Message\ResponseInterface
     */
    public function getAvailablePhpVersions(string $domainName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetAvailablePhpVersions($domainName), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param null|\Combell\Client\Model\PhpVersion $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function changePhpVersion(string $domainName, ?\Combell\Client\Model\PhpVersion $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ChangePhpVersion($domainName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name
     * @param null|\Combell\Client\Model\GzipConfig $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function changeGzipCompression(string $domainName, ?\Combell\Client\Model\GzipConfig $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ChangeGzipCompression($domainName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param null|\Combell\Client\Model\AddSubsiteRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createSubsite(string $domainName, ?\Combell\Client\Model\AddSubsiteRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\CreateSubsite($domainName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $siteName Name of the site on the linux hosting.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\DeleteSubsiteBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSubsite(string $domainName, string $siteName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\DeleteSubsite($domainName, $siteName), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $siteName Name of the site on the linux hosting.
     * @param null|\Combell\Client\Model\AddHostHeaderRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createHostHeader(string $domainName, string $siteName, ?\Combell\Client\Model\AddHostHeaderRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\CreateHostHeader($domainName, $siteName, $requestBody), $fetch);
    }
    /**
    * 
    *
    * @param string $domainName Linux hosting domain name.
    * @param string $siteName Site name where HTTP/2 should be configured.<br />
    For HTTP/2 to work correctly, the site must have ssl enabled.
    * @param null|\Combell\Client\Model\Http2Configuration $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Combell\Client\Exception\ConfigureHttp2BadRequestException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function configureHttp2(string $domainName, string $siteName, ?\Combell\Client\Model\Http2Configuration $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ConfigureHttp2($domainName, $siteName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param null|\Combell\Client\Model\FtpConfiguration $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\ConfigureFtpBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configureFtp(string $domainName, ?\Combell\Client\Model\FtpConfiguration $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ConfigureFtp($domainName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $hostname Specific hostname.
     * @param null|\Combell\Client\Model\LetsEncryptConfig $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function changeLetsEncrypt(string $domainName, string $hostname, ?\Combell\Client\Model\LetsEncryptConfig $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ChangeLetsEncrypt($domainName, $hostname, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $hostname Specific hostname.
     * @param null|\Combell\Client\Model\AutoRedirectConfig $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function changeAutoRedirect(string $domainName, string $hostname, ?\Combell\Client\Model\AutoRedirectConfig $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ChangeAutoRedirect($domainName, $hostname, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param null|\Combell\Client\Model\UpdatePhpMemoryLimitRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function changePhpMemoryLimit(string $domainName, ?\Combell\Client\Model\UpdatePhpMemoryLimitRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ChangePhpMemoryLimit($domainName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name
     * @param null|\Combell\Client\Model\UpdatePhpAPcuRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function changeApcu(string $domainName, ?\Combell\Client\Model\UpdatePhpAPcuRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ChangeApcu($domainName, $requestBody), $fetch);
    }
    /**
     * Manage scheduled tasks which are also manageable via the control panel.
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\ScheduledTask[]|\Psr\Http\Message\ResponseInterface
     */
    public function getScheduledTasks(string $domainName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetScheduledTasks($domainName), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param null|\Combell\Client\Model\ScheduledTask $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addScheduledTasks(string $domainName, ?\Combell\Client\Model\ScheduledTask $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\AddScheduledTasks($domainName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $scheduledTaskId Id of the scheduled task.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\DeleteScheduledTaskBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteScheduledTask(string $domainName, string $scheduledTaskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\DeleteScheduledTask($domainName, $scheduledTaskId), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $scheduledTaskId Id of the scheduled task.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\ScheduledTask|\Psr\Http\Message\ResponseInterface
     */
    public function getScheduledTask(string $domainName, string $scheduledTaskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetScheduledTask($domainName, $scheduledTaskId), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $scheduledTaskId Id of the scheduled task.
     * @param null|\Combell\Client\Model\ScheduledTask $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\ConfigureScheduledTaskBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configureScheduledTask(string $domainName, string $scheduledTaskId, ?\Combell\Client\Model\ScheduledTask $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ConfigureScheduledTask($domainName, $scheduledTaskId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\SshKey[]|\Psr\Http\Message\ResponseInterface
     */
    public function getSshKeys(string $domainName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetSshKeys($domainName), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param null|\Combell\Client\Model\AddSshKeyRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addSshKey(string $domainName, ?\Combell\Client\Model\AddSshKeyRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\AddSshKey($domainName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param null|\Combell\Client\Model\SshConfiguration $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\ConfigureSshBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configureSsh(string $domainName, ?\Combell\Client\Model\SshConfiguration $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ConfigureSsh($domainName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Linux hosting domain name.
     * @param string $fingerprint Fingerprint of public key.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\DeleteSshKeyBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSshKey(string $domainName, string $fingerprint, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\DeleteSshKey($domainName, $fingerprint), $fetch);
    }
    /**
     * Currently only supports getting the mailboxes filtered by domain name.
     *
     * @param array $queryParameters {
     *     @var string $domain_name Obligated domain name for getting mailboxes.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\Mailbox[]|\Psr\Http\Message\ResponseInterface
     */
    public function getMailboxes(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetMailboxes($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param null|\Combell\Client\Model\CreateMailboxRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createMailbox(?\Combell\Client\Model\CreateMailboxRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\CreateMailbox($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $mailboxName Mailbox name.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\DeleteMailboxBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteMailbox(string $mailboxName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\DeleteMailbox($mailboxName), $fetch);
    }
    /**
     * 
     *
     * @param string $mailboxName Mailbox name.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\MailboxDetail|\Psr\Http\Message\ResponseInterface
     */
    public function getMailbox(string $mailboxName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetMailbox($mailboxName), $fetch);
    }
    /**
     * 
     *
     * @param string $mailboxName Mailbox name.
     * @param null|\Combell\Client\Model\UpdateMailboxPasswordRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function changeMailboxPassword(string $mailboxName, ?\Combell\Client\Model\UpdateMailboxPasswordRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ChangeMailboxPassword($mailboxName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $mailboxName Mailbox name.
     * @param null|\Combell\Client\Model\AutoReply $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configureMailboxAutoReply(string $mailboxName, ?\Combell\Client\Model\AutoReply $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ConfigureMailboxAutoReply($mailboxName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $mailboxName Mailbox name.
     * @param null|\Combell\Client\Model\AutoForward $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configureMailboxAutoForward(string $mailboxName, ?\Combell\Client\Model\AutoForward $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ConfigureMailboxAutoForward($mailboxName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Mail zone domain name.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\MailZone|\Psr\Http\Message\ResponseInterface
     */
    public function getMailZone(string $domainName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetMailZone($domainName), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Mail zone domain name.
     * @param null|\Combell\Client\Model\CreateCatchAllRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createCatchAll(string $domainName, ?\Combell\Client\Model\CreateCatchAllRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\CreateCatchAll($domainName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Mail zone domain name.
     * @param string $emailAddress E-mail address to which all e-mails are sent to inexistent mailboxes or aliases.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCatchAll(string $domainName, string $emailAddress, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\DeleteCatchAll($domainName, $emailAddress), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Mail zone domain name.
     * @param null|\Combell\Client\Model\UpdateAntiSpamRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configureAntiSpam(string $domainName, ?\Combell\Client\Model\UpdateAntiSpamRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ConfigureAntiSpam($domainName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Mail zone domain name.
     * @param null|\Combell\Client\Model\CreateAliasRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\CreateAliasBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createAlias(string $domainName, ?\Combell\Client\Model\CreateAliasRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\CreateAlias($domainName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Mail zone domain name.
     * @param string $emailAddress Alias e-mail address.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\DeleteAliasBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAlias(string $domainName, string $emailAddress, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\DeleteAlias($domainName, $emailAddress), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Mail zone domain name.
     * @param string $emailAddress Alias e-mail address.
     * @param null|\Combell\Client\Model\UpdateAliasRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\ConfigureAliasBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configureAlias(string $domainName, string $emailAddress, ?\Combell\Client\Model\UpdateAliasRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ConfigureAlias($domainName, $emailAddress, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Mail zone domain name.
     * @param null|\Combell\Client\Model\CreateSmtpDomainRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\CreateSmtpDomainBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createSmtpDomain(string $domainName, ?\Combell\Client\Model\CreateSmtpDomainRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\CreateSmtpDomain($domainName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Mail zone domain name.
     * @param string $hostname Smtp domain name.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\DeleteSmtpDomainBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSmtpDomain(string $domainName, string $hostname, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\DeleteSmtpDomain($domainName, $hostname), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Mail zone domain name.
     * @param string $hostname Smtp domain name.
     * @param null|\Combell\Client\Model\UpdateSmtpDomainRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\ConfigureSmtpDomainBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function configureSmtpDomain(string $domainName, string $hostname, ?\Combell\Client\Model\UpdateSmtpDomainRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ConfigureSmtpDomain($domainName, $hostname, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $skip The number of items to skip in the resultset.
     *     @var int $take The number of items to return in the resultset. The returned count can be equal or less than this number.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\MySqlDatabase[]|\Psr\Http\Message\ResponseInterface
     */
    public function getMySqlDatabases(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetMySqlDatabases($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param null|\Combell\Client\Model\CreateMySqlDatabase $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\CreateMySqlDatabaseBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createMySqlDatabase(?\Combell\Client\Model\CreateMySqlDatabase $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\CreateMySqlDatabase($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $databaseName Name of the database.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\DeleteDatabaseBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDatabase(string $databaseName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\DeleteDatabase($databaseName), $fetch);
    }
    /**
     * 
     *
     * @param string $databaseName 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\MySqlDatabase|\Psr\Http\Message\ResponseInterface
     */
    public function getMySqlDatabase(string $databaseName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetMySqlDatabase($databaseName), $fetch);
    }
    /**
     * 
     *
     * @param string $databaseName Name of the database.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\MySqlUser[]|\Psr\Http\Message\ResponseInterface
     */
    public function getDatabaseUsers(string $databaseName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetDatabaseUsers($databaseName), $fetch);
    }
    /**
     * The creation of a new mysql user will result in a user with read_only rights.
     *
     * @param string $databaseName Name of the database.
     * @param null|\Combell\Client\Model\CreateMySqlUser $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\CreateMySqlUserBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createMySqlUser(string $databaseName, ?\Combell\Client\Model\CreateMySqlUser $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\CreateMySqlUser($databaseName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $databaseName Name of the database.
     * @param string $userName Name of the user.
     * @param null|\Combell\Client\Model\UpdateUserStatusRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function changeDatabaseUserStatus(string $databaseName, string $userName, ?\Combell\Client\Model\UpdateUserStatusRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ChangeDatabaseUserStatus($databaseName, $userName, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $databaseName Name of the database.
     * @param string $userName Name of the user.
     * @param null|\Combell\Client\Model\UpdateUserPasswordRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function changeDatabaseUserPassword(string $databaseName, string $userName, ?\Combell\Client\Model\UpdateUserPasswordRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\ChangeDatabaseUserPassword($databaseName, $userName, $requestBody), $fetch);
    }
    /**
     * The deletion of a mysql user is allowed for users with read_only rights.
     *
     * @param string $databaseName Name of the database.
     * @param string $userName Name of the user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\DeleteDatabaseUserBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDatabaseUser(string $databaseName, string $userName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\DeleteDatabaseUser($databaseName, $userName), $fetch);
    }
    /**
    * Provisioning failures may occur. Contact support in the event of a failure or wait for error resolution.<br />
    Do NOT retry provisioning until the job reports finished or cancelled.
    *
    * @param string $jobId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Combell\Client\Model\ProvisioningJobInfo|\Combell\Client\Model\ProvisioningJobCompletion|\Psr\Http\Message\ResponseInterface
    */
    public function getProvisioningjobByJobId(string $jobId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetProvisioningjobByJobId($jobId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\Servicepack[]|\Psr\Http\Message\ResponseInterface
     */
    public function servicepacks(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\Servicepacks(), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $skip The number of items to skip in the resultset.
     *     @var int $take The number of items to return in the resultset. The returned count can be equal or less than this number.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\SshKeyDetail[]|\Psr\Http\Message\ResponseInterface
     */
    public function getAllSshKeys(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetAllSshKeys($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $skip The number of items to skip in the resultset.
     *     @var int $take The number of items to return in the resultset. The returned count can be equal or less than this number.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\SslCertificateRequest[]|\Psr\Http\Message\ResponseInterface
     */
    public function getSslCertificateRequests(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetSslCertificateRequests($queryParameters), $fetch);
    }
    /**
    * Executing this method causes the purchase of a paying product.<br />
    Log on to our website to see your current (renewal) prices or contact our Sales department.<br />
    Please note that promotional pricing does not apply for purchases made through our API.
    *
    * @param null|\Combell\Client\Model\CreateSslCertificateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function addSslCertificateRequest(?\Combell\Client\Model\CreateSslCertificateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\AddSslCertificateRequest($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id The id of the certificate request.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\GetSslCertificateRequestGoneException
     *
     * @return null|\Combell\Client\Model\SslCertificateRequestDetail|\Psr\Http\Message\ResponseInterface
     */
    public function getSslCertificateRequest(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetSslCertificateRequest($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id The id of the certificate request.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Combell\Client\Exception\VerifySslCertificateRequestDomainValidationsGoneException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function verifySslCertificateRequestDomainValidations(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\VerifySslCertificateRequestDomainValidations($id), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $skip The number of items to skip in the resultset.
     *     @var int $take The number of items to return in the resultset. The returned count can be equal or less than this number.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\SslCertificate[]|\Psr\Http\Message\ResponseInterface
     */
    public function getSslCertificates(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetSslCertificates($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $sha1Fingerprint The SHA-1 fingerprint of the certificate.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\SslCertificateDetail|\Psr\Http\Message\ResponseInterface
     */
    public function getSslCertificate(string $sha1Fingerprint, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetSslCertificate($sha1Fingerprint), $fetch);
    }
    /**
    * Returns the certifcate as binary data with the content-type and the filename information in the response headers.
    *
    * @param string $sha1Fingerprint The SHA-1 fingerprint of the certificate.
    * @param array $queryParameters {
    *     @var string $file_format The file format of the returned file stream:
    <ul><li>PFX: Also known as PKCS #12, is a single, password protected certificate archive that contains the entire certificate chain plus the matching private key.</li></ul>
    *     @var string $password The password used to protect the certificate file.<br />
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Combell\Client\Exception\DownloadCertificateBadRequestException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function downloadCertificate(string $sha1Fingerprint, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\DownloadCertificate($sha1Fingerprint, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $skip The number of items to skip in the resultset.
     *     @var int $take The number of items to return in the resultset. The returned count can be equal or less than this number.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\WindowsHosting[]|\Psr\Http\Message\ResponseInterface
     */
    public function getWindowsHostings(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetWindowsHostings($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName The Windows hosting domain name.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Combell\Client\Model\WindowsHostingDetail|\Psr\Http\Message\ResponseInterface
     */
    public function getWindowsHosting(string $domainName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Combell\Client\Endpoint\GetWindowsHosting($domainName), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('/v2');
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Combell\Client\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}