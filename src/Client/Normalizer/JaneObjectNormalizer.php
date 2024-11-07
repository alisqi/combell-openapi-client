<?php

namespace Combell\Client\Normalizer;

use Combell\Client\Runtime\Normalizer\CheckArray;
use Combell\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \Combell\Client\Model\Account::class => \Combell\Client\Normalizer\AccountNormalizer::class,
            
            \Combell\Client\Model\CreateAccount::class => \Combell\Client\Normalizer\CreateAccountNormalizer::class,
            
            \Combell\Client\Model\ValidationErrorMessage::class => \Combell\Client\Normalizer\ValidationErrorMessageNormalizer::class,
            
            \Combell\Client\Model\BadRequestResponse::class => \Combell\Client\Normalizer\BadRequestResponseNormalizer::class,
            
            \Combell\Client\Model\Servicepack::class => \Combell\Client\Normalizer\ServicepackNormalizer::class,
            
            \Combell\Client\Model\Addon::class => \Combell\Client\Normalizer\AddonNormalizer::class,
            
            \Combell\Client\Model\AccountDetail::class => \Combell\Client\Normalizer\AccountDetailNormalizer::class,
            
            \Combell\Client\Model\DnsRecord::class => \Combell\Client\Normalizer\DnsRecordNormalizer::class,
            
            \Combell\Client\Model\Domain::class => \Combell\Client\Normalizer\DomainNormalizer::class,
            
            \Combell\Client\Model\NameServer::class => \Combell\Client\Normalizer\NameServerNormalizer::class,
            
            \Combell\Client\Model\Registrant::class => \Combell\Client\Normalizer\RegistrantNormalizer::class,
            
            \Combell\Client\Model\DomainDetail::class => \Combell\Client\Normalizer\DomainDetailNormalizer::class,
            
            \Combell\Client\Model\ExtraField::class => \Combell\Client\Normalizer\ExtraFieldNormalizer::class,
            
            \Combell\Client\Model\RegistrantInput::class => \Combell\Client\Normalizer\RegistrantInputNormalizer::class,
            
            \Combell\Client\Model\RegisterDomain::class => \Combell\Client\Normalizer\RegisterDomainNormalizer::class,
            
            \Combell\Client\Model\TransferDomain::class => \Combell\Client\Normalizer\TransferDomainNormalizer::class,
            
            \Combell\Client\Model\EditNameServers::class => \Combell\Client\Normalizer\EditNameServersNormalizer::class,
            
            \Combell\Client\Model\EditDomainWillRenewRequest::class => \Combell\Client\Normalizer\EditDomainWillRenewRequestNormalizer::class,
            
            \Combell\Client\Model\LinuxHosting::class => \Combell\Client\Normalizer\LinuxHostingNormalizer::class,
            
            \Combell\Client\Model\HostHeader::class => \Combell\Client\Normalizer\HostHeaderNormalizer::class,
            
            \Combell\Client\Model\LinuxSite::class => \Combell\Client\Normalizer\LinuxSiteNormalizer::class,
            
            \Combell\Client\Model\LinuxHostingDetail::class => \Combell\Client\Normalizer\LinuxHostingDetailNormalizer::class,
            
            \Combell\Client\Model\PhpVersion::class => \Combell\Client\Normalizer\PhpVersionNormalizer::class,
            
            \Combell\Client\Model\GzipConfig::class => \Combell\Client\Normalizer\GzipConfigNormalizer::class,
            
            \Combell\Client\Model\AddSubsiteRequest::class => \Combell\Client\Normalizer\AddSubsiteRequestNormalizer::class,
            
            \Combell\Client\Model\AddHostHeaderRequest::class => \Combell\Client\Normalizer\AddHostHeaderRequestNormalizer::class,
            
            \Combell\Client\Model\Http2Configuration::class => \Combell\Client\Normalizer\Http2ConfigurationNormalizer::class,
            
            \Combell\Client\Model\FtpConfiguration::class => \Combell\Client\Normalizer\FtpConfigurationNormalizer::class,
            
            \Combell\Client\Model\LetsEncryptConfig::class => \Combell\Client\Normalizer\LetsEncryptConfigNormalizer::class,
            
            \Combell\Client\Model\AutoRedirectConfig::class => \Combell\Client\Normalizer\AutoRedirectConfigNormalizer::class,
            
            \Combell\Client\Model\UpdatePhpMemoryLimitRequest::class => \Combell\Client\Normalizer\UpdatePhpMemoryLimitRequestNormalizer::class,
            
            \Combell\Client\Model\UpdatePhpAPcuRequest::class => \Combell\Client\Normalizer\UpdatePhpAPcuRequestNormalizer::class,
            
            \Combell\Client\Model\ScheduledTask::class => \Combell\Client\Normalizer\ScheduledTaskNormalizer::class,
            
            \Combell\Client\Model\SshKey::class => \Combell\Client\Normalizer\SshKeyNormalizer::class,
            
            \Combell\Client\Model\AddSshKeyRequest::class => \Combell\Client\Normalizer\AddSshKeyRequestNormalizer::class,
            
            \Combell\Client\Model\SshConfiguration::class => \Combell\Client\Normalizer\SshConfigurationNormalizer::class,
            
            \Combell\Client\Model\Mailbox::class => \Combell\Client\Normalizer\MailboxNormalizer::class,
            
            \Combell\Client\Model\CreateMailboxRequest::class => \Combell\Client\Normalizer\CreateMailboxRequestNormalizer::class,
            
            \Combell\Client\Model\AutoReply::class => \Combell\Client\Normalizer\AutoReplyNormalizer::class,
            
            \Combell\Client\Model\AutoForward::class => \Combell\Client\Normalizer\AutoForwardNormalizer::class,
            
            \Combell\Client\Model\MailboxDetail::class => \Combell\Client\Normalizer\MailboxDetailNormalizer::class,
            
            \Combell\Client\Model\UpdateMailboxPasswordRequest::class => \Combell\Client\Normalizer\UpdateMailboxPasswordRequestNormalizer::class,
            
            \Combell\Client\Model\MailZoneAccount::class => \Combell\Client\Normalizer\MailZoneAccountNormalizer::class,
            
            \Combell\Client\Model\Alias::class => \Combell\Client\Normalizer\AliasNormalizer::class,
            
            \Combell\Client\Model\AntiSpam::class => \Combell\Client\Normalizer\AntiSpamNormalizer::class,
            
            \Combell\Client\Model\CatchAll::class => \Combell\Client\Normalizer\CatchAllNormalizer::class,
            
            \Combell\Client\Model\SmtpDomain::class => \Combell\Client\Normalizer\SmtpDomainNormalizer::class,
            
            \Combell\Client\Model\MailZone::class => \Combell\Client\Normalizer\MailZoneNormalizer::class,
            
            \Combell\Client\Model\CreateCatchAllRequest::class => \Combell\Client\Normalizer\CreateCatchAllRequestNormalizer::class,
            
            \Combell\Client\Model\UpdateAntiSpamRequest::class => \Combell\Client\Normalizer\UpdateAntiSpamRequestNormalizer::class,
            
            \Combell\Client\Model\CreateAliasRequest::class => \Combell\Client\Normalizer\CreateAliasRequestNormalizer::class,
            
            \Combell\Client\Model\UpdateAliasRequest::class => \Combell\Client\Normalizer\UpdateAliasRequestNormalizer::class,
            
            \Combell\Client\Model\CreateSmtpDomainRequest::class => \Combell\Client\Normalizer\CreateSmtpDomainRequestNormalizer::class,
            
            \Combell\Client\Model\UpdateSmtpDomainRequest::class => \Combell\Client\Normalizer\UpdateSmtpDomainRequestNormalizer::class,
            
            \Combell\Client\Model\MySqlDatabase::class => \Combell\Client\Normalizer\MySqlDatabaseNormalizer::class,
            
            \Combell\Client\Model\CreateMySqlDatabase::class => \Combell\Client\Normalizer\CreateMySqlDatabaseNormalizer::class,
            
            \Combell\Client\Model\MySqlUser::class => \Combell\Client\Normalizer\MySqlUserNormalizer::class,
            
            \Combell\Client\Model\CreateMySqlUser::class => \Combell\Client\Normalizer\CreateMySqlUserNormalizer::class,
            
            \Combell\Client\Model\UpdateUserStatusRequest::class => \Combell\Client\Normalizer\UpdateUserStatusRequestNormalizer::class,
            
            \Combell\Client\Model\UpdateUserPasswordRequest::class => \Combell\Client\Normalizer\UpdateUserPasswordRequestNormalizer::class,
            
            \Combell\Client\Model\CompletionEstimation::class => \Combell\Client\Normalizer\CompletionEstimationNormalizer::class,
            
            \Combell\Client\Model\ProvisioningJobInfo::class => \Combell\Client\Normalizer\ProvisioningJobInfoNormalizer::class,
            
            \Combell\Client\Model\ProvisioningJobCompletion::class => \Combell\Client\Normalizer\ProvisioningJobCompletionNormalizer::class,
            
            \Combell\Client\Model\SshKeyDetail::class => \Combell\Client\Normalizer\SshKeyDetailNormalizer::class,
            
            \Combell\Client\Model\SslCertificateRequest::class => \Combell\Client\Normalizer\SslCertificateRequestNormalizer::class,
            
            \Combell\Client\Model\AdditionalValidationAttribute::class => \Combell\Client\Normalizer\AdditionalValidationAttributeNormalizer::class,
            
            \Combell\Client\Model\CreateSslCertificateRequest::class => \Combell\Client\Normalizer\CreateSslCertificateRequestNormalizer::class,
            
            \Combell\Client\Model\SslSubjectAltName::class => \Combell\Client\Normalizer\SslSubjectAltNameNormalizer::class,
            
            \Combell\Client\Model\SslCertificateRequestValidation::class => \Combell\Client\Normalizer\SslCertificateRequestValidationNormalizer::class,
            
            \Combell\Client\Model\SslCertificateRequestDetail::class => \Combell\Client\Normalizer\SslCertificateRequestDetailNormalizer::class,
            
            \Combell\Client\Model\SslCertificate::class => \Combell\Client\Normalizer\SslCertificateNormalizer::class,
            
            \Combell\Client\Model\SslCertificateDetail::class => \Combell\Client\Normalizer\SslCertificateDetailNormalizer::class,
            
            \Combell\Client\Model\WindowsHosting::class => \Combell\Client\Normalizer\WindowsHostingNormalizer::class,
            
            \Combell\Client\Model\ApplicationPool::class => \Combell\Client\Normalizer\ApplicationPoolNormalizer::class,
            
            \Combell\Client\Model\SiteBinding::class => \Combell\Client\Normalizer\SiteBindingNormalizer::class,
            
            \Combell\Client\Model\WindowsSite::class => \Combell\Client\Normalizer\WindowsSiteNormalizer::class,
            
            \Combell\Client\Model\WindowsHostingDetail::class => \Combell\Client\Normalizer\WindowsHostingDetailNormalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \Combell\Client\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [
                
                \Combell\Client\Model\Account::class => false,
                \Combell\Client\Model\CreateAccount::class => false,
                \Combell\Client\Model\ValidationErrorMessage::class => false,
                \Combell\Client\Model\BadRequestResponse::class => false,
                \Combell\Client\Model\Servicepack::class => false,
                \Combell\Client\Model\Addon::class => false,
                \Combell\Client\Model\AccountDetail::class => false,
                \Combell\Client\Model\DnsRecord::class => false,
                \Combell\Client\Model\Domain::class => false,
                \Combell\Client\Model\NameServer::class => false,
                \Combell\Client\Model\Registrant::class => false,
                \Combell\Client\Model\DomainDetail::class => false,
                \Combell\Client\Model\ExtraField::class => false,
                \Combell\Client\Model\RegistrantInput::class => false,
                \Combell\Client\Model\RegisterDomain::class => false,
                \Combell\Client\Model\TransferDomain::class => false,
                \Combell\Client\Model\EditNameServers::class => false,
                \Combell\Client\Model\EditDomainWillRenewRequest::class => false,
                \Combell\Client\Model\LinuxHosting::class => false,
                \Combell\Client\Model\HostHeader::class => false,
                \Combell\Client\Model\LinuxSite::class => false,
                \Combell\Client\Model\LinuxHostingDetail::class => false,
                \Combell\Client\Model\PhpVersion::class => false,
                \Combell\Client\Model\GzipConfig::class => false,
                \Combell\Client\Model\AddSubsiteRequest::class => false,
                \Combell\Client\Model\AddHostHeaderRequest::class => false,
                \Combell\Client\Model\Http2Configuration::class => false,
                \Combell\Client\Model\FtpConfiguration::class => false,
                \Combell\Client\Model\LetsEncryptConfig::class => false,
                \Combell\Client\Model\AutoRedirectConfig::class => false,
                \Combell\Client\Model\UpdatePhpMemoryLimitRequest::class => false,
                \Combell\Client\Model\UpdatePhpAPcuRequest::class => false,
                \Combell\Client\Model\ScheduledTask::class => false,
                \Combell\Client\Model\SshKey::class => false,
                \Combell\Client\Model\AddSshKeyRequest::class => false,
                \Combell\Client\Model\SshConfiguration::class => false,
                \Combell\Client\Model\Mailbox::class => false,
                \Combell\Client\Model\CreateMailboxRequest::class => false,
                \Combell\Client\Model\AutoReply::class => false,
                \Combell\Client\Model\AutoForward::class => false,
                \Combell\Client\Model\MailboxDetail::class => false,
                \Combell\Client\Model\UpdateMailboxPasswordRequest::class => false,
                \Combell\Client\Model\MailZoneAccount::class => false,
                \Combell\Client\Model\Alias::class => false,
                \Combell\Client\Model\AntiSpam::class => false,
                \Combell\Client\Model\CatchAll::class => false,
                \Combell\Client\Model\SmtpDomain::class => false,
                \Combell\Client\Model\MailZone::class => false,
                \Combell\Client\Model\CreateCatchAllRequest::class => false,
                \Combell\Client\Model\UpdateAntiSpamRequest::class => false,
                \Combell\Client\Model\CreateAliasRequest::class => false,
                \Combell\Client\Model\UpdateAliasRequest::class => false,
                \Combell\Client\Model\CreateSmtpDomainRequest::class => false,
                \Combell\Client\Model\UpdateSmtpDomainRequest::class => false,
                \Combell\Client\Model\MySqlDatabase::class => false,
                \Combell\Client\Model\CreateMySqlDatabase::class => false,
                \Combell\Client\Model\MySqlUser::class => false,
                \Combell\Client\Model\CreateMySqlUser::class => false,
                \Combell\Client\Model\UpdateUserStatusRequest::class => false,
                \Combell\Client\Model\UpdateUserPasswordRequest::class => false,
                \Combell\Client\Model\CompletionEstimation::class => false,
                \Combell\Client\Model\ProvisioningJobInfo::class => false,
                \Combell\Client\Model\ProvisioningJobCompletion::class => false,
                \Combell\Client\Model\SshKeyDetail::class => false,
                \Combell\Client\Model\SslCertificateRequest::class => false,
                \Combell\Client\Model\AdditionalValidationAttribute::class => false,
                \Combell\Client\Model\CreateSslCertificateRequest::class => false,
                \Combell\Client\Model\SslSubjectAltName::class => false,
                \Combell\Client\Model\SslCertificateRequestValidation::class => false,
                \Combell\Client\Model\SslCertificateRequestDetail::class => false,
                \Combell\Client\Model\SslCertificate::class => false,
                \Combell\Client\Model\SslCertificateDetail::class => false,
                \Combell\Client\Model\WindowsHosting::class => false,
                \Combell\Client\Model\ApplicationPool::class => false,
                \Combell\Client\Model\SiteBinding::class => false,
                \Combell\Client\Model\WindowsSite::class => false,
                \Combell\Client\Model\WindowsHostingDetail::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \Combell\Client\Model\Account::class => \Combell\Client\Normalizer\AccountNormalizer::class,
            
            \Combell\Client\Model\CreateAccount::class => \Combell\Client\Normalizer\CreateAccountNormalizer::class,
            
            \Combell\Client\Model\ValidationErrorMessage::class => \Combell\Client\Normalizer\ValidationErrorMessageNormalizer::class,
            
            \Combell\Client\Model\BadRequestResponse::class => \Combell\Client\Normalizer\BadRequestResponseNormalizer::class,
            
            \Combell\Client\Model\Servicepack::class => \Combell\Client\Normalizer\ServicepackNormalizer::class,
            
            \Combell\Client\Model\Addon::class => \Combell\Client\Normalizer\AddonNormalizer::class,
            
            \Combell\Client\Model\AccountDetail::class => \Combell\Client\Normalizer\AccountDetailNormalizer::class,
            
            \Combell\Client\Model\DnsRecord::class => \Combell\Client\Normalizer\DnsRecordNormalizer::class,
            
            \Combell\Client\Model\Domain::class => \Combell\Client\Normalizer\DomainNormalizer::class,
            
            \Combell\Client\Model\NameServer::class => \Combell\Client\Normalizer\NameServerNormalizer::class,
            
            \Combell\Client\Model\Registrant::class => \Combell\Client\Normalizer\RegistrantNormalizer::class,
            
            \Combell\Client\Model\DomainDetail::class => \Combell\Client\Normalizer\DomainDetailNormalizer::class,
            
            \Combell\Client\Model\ExtraField::class => \Combell\Client\Normalizer\ExtraFieldNormalizer::class,
            
            \Combell\Client\Model\RegistrantInput::class => \Combell\Client\Normalizer\RegistrantInputNormalizer::class,
            
            \Combell\Client\Model\RegisterDomain::class => \Combell\Client\Normalizer\RegisterDomainNormalizer::class,
            
            \Combell\Client\Model\TransferDomain::class => \Combell\Client\Normalizer\TransferDomainNormalizer::class,
            
            \Combell\Client\Model\EditNameServers::class => \Combell\Client\Normalizer\EditNameServersNormalizer::class,
            
            \Combell\Client\Model\EditDomainWillRenewRequest::class => \Combell\Client\Normalizer\EditDomainWillRenewRequestNormalizer::class,
            
            \Combell\Client\Model\LinuxHosting::class => \Combell\Client\Normalizer\LinuxHostingNormalizer::class,
            
            \Combell\Client\Model\HostHeader::class => \Combell\Client\Normalizer\HostHeaderNormalizer::class,
            
            \Combell\Client\Model\LinuxSite::class => \Combell\Client\Normalizer\LinuxSiteNormalizer::class,
            
            \Combell\Client\Model\LinuxHostingDetail::class => \Combell\Client\Normalizer\LinuxHostingDetailNormalizer::class,
            
            \Combell\Client\Model\PhpVersion::class => \Combell\Client\Normalizer\PhpVersionNormalizer::class,
            
            \Combell\Client\Model\GzipConfig::class => \Combell\Client\Normalizer\GzipConfigNormalizer::class,
            
            \Combell\Client\Model\AddSubsiteRequest::class => \Combell\Client\Normalizer\AddSubsiteRequestNormalizer::class,
            
            \Combell\Client\Model\AddHostHeaderRequest::class => \Combell\Client\Normalizer\AddHostHeaderRequestNormalizer::class,
            
            \Combell\Client\Model\Http2Configuration::class => \Combell\Client\Normalizer\Http2ConfigurationNormalizer::class,
            
            \Combell\Client\Model\FtpConfiguration::class => \Combell\Client\Normalizer\FtpConfigurationNormalizer::class,
            
            \Combell\Client\Model\LetsEncryptConfig::class => \Combell\Client\Normalizer\LetsEncryptConfigNormalizer::class,
            
            \Combell\Client\Model\AutoRedirectConfig::class => \Combell\Client\Normalizer\AutoRedirectConfigNormalizer::class,
            
            \Combell\Client\Model\UpdatePhpMemoryLimitRequest::class => \Combell\Client\Normalizer\UpdatePhpMemoryLimitRequestNormalizer::class,
            
            \Combell\Client\Model\UpdatePhpAPcuRequest::class => \Combell\Client\Normalizer\UpdatePhpAPcuRequestNormalizer::class,
            
            \Combell\Client\Model\ScheduledTask::class => \Combell\Client\Normalizer\ScheduledTaskNormalizer::class,
            
            \Combell\Client\Model\SshKey::class => \Combell\Client\Normalizer\SshKeyNormalizer::class,
            
            \Combell\Client\Model\AddSshKeyRequest::class => \Combell\Client\Normalizer\AddSshKeyRequestNormalizer::class,
            
            \Combell\Client\Model\SshConfiguration::class => \Combell\Client\Normalizer\SshConfigurationNormalizer::class,
            
            \Combell\Client\Model\Mailbox::class => \Combell\Client\Normalizer\MailboxNormalizer::class,
            
            \Combell\Client\Model\CreateMailboxRequest::class => \Combell\Client\Normalizer\CreateMailboxRequestNormalizer::class,
            
            \Combell\Client\Model\AutoReply::class => \Combell\Client\Normalizer\AutoReplyNormalizer::class,
            
            \Combell\Client\Model\AutoForward::class => \Combell\Client\Normalizer\AutoForwardNormalizer::class,
            
            \Combell\Client\Model\MailboxDetail::class => \Combell\Client\Normalizer\MailboxDetailNormalizer::class,
            
            \Combell\Client\Model\UpdateMailboxPasswordRequest::class => \Combell\Client\Normalizer\UpdateMailboxPasswordRequestNormalizer::class,
            
            \Combell\Client\Model\MailZoneAccount::class => \Combell\Client\Normalizer\MailZoneAccountNormalizer::class,
            
            \Combell\Client\Model\Alias::class => \Combell\Client\Normalizer\AliasNormalizer::class,
            
            \Combell\Client\Model\AntiSpam::class => \Combell\Client\Normalizer\AntiSpamNormalizer::class,
            
            \Combell\Client\Model\CatchAll::class => \Combell\Client\Normalizer\CatchAllNormalizer::class,
            
            \Combell\Client\Model\SmtpDomain::class => \Combell\Client\Normalizer\SmtpDomainNormalizer::class,
            
            \Combell\Client\Model\MailZone::class => \Combell\Client\Normalizer\MailZoneNormalizer::class,
            
            \Combell\Client\Model\CreateCatchAllRequest::class => \Combell\Client\Normalizer\CreateCatchAllRequestNormalizer::class,
            
            \Combell\Client\Model\UpdateAntiSpamRequest::class => \Combell\Client\Normalizer\UpdateAntiSpamRequestNormalizer::class,
            
            \Combell\Client\Model\CreateAliasRequest::class => \Combell\Client\Normalizer\CreateAliasRequestNormalizer::class,
            
            \Combell\Client\Model\UpdateAliasRequest::class => \Combell\Client\Normalizer\UpdateAliasRequestNormalizer::class,
            
            \Combell\Client\Model\CreateSmtpDomainRequest::class => \Combell\Client\Normalizer\CreateSmtpDomainRequestNormalizer::class,
            
            \Combell\Client\Model\UpdateSmtpDomainRequest::class => \Combell\Client\Normalizer\UpdateSmtpDomainRequestNormalizer::class,
            
            \Combell\Client\Model\MySqlDatabase::class => \Combell\Client\Normalizer\MySqlDatabaseNormalizer::class,
            
            \Combell\Client\Model\CreateMySqlDatabase::class => \Combell\Client\Normalizer\CreateMySqlDatabaseNormalizer::class,
            
            \Combell\Client\Model\MySqlUser::class => \Combell\Client\Normalizer\MySqlUserNormalizer::class,
            
            \Combell\Client\Model\CreateMySqlUser::class => \Combell\Client\Normalizer\CreateMySqlUserNormalizer::class,
            
            \Combell\Client\Model\UpdateUserStatusRequest::class => \Combell\Client\Normalizer\UpdateUserStatusRequestNormalizer::class,
            
            \Combell\Client\Model\UpdateUserPasswordRequest::class => \Combell\Client\Normalizer\UpdateUserPasswordRequestNormalizer::class,
            
            \Combell\Client\Model\CompletionEstimation::class => \Combell\Client\Normalizer\CompletionEstimationNormalizer::class,
            
            \Combell\Client\Model\ProvisioningJobInfo::class => \Combell\Client\Normalizer\ProvisioningJobInfoNormalizer::class,
            
            \Combell\Client\Model\ProvisioningJobCompletion::class => \Combell\Client\Normalizer\ProvisioningJobCompletionNormalizer::class,
            
            \Combell\Client\Model\SshKeyDetail::class => \Combell\Client\Normalizer\SshKeyDetailNormalizer::class,
            
            \Combell\Client\Model\SslCertificateRequest::class => \Combell\Client\Normalizer\SslCertificateRequestNormalizer::class,
            
            \Combell\Client\Model\AdditionalValidationAttribute::class => \Combell\Client\Normalizer\AdditionalValidationAttributeNormalizer::class,
            
            \Combell\Client\Model\CreateSslCertificateRequest::class => \Combell\Client\Normalizer\CreateSslCertificateRequestNormalizer::class,
            
            \Combell\Client\Model\SslSubjectAltName::class => \Combell\Client\Normalizer\SslSubjectAltNameNormalizer::class,
            
            \Combell\Client\Model\SslCertificateRequestValidation::class => \Combell\Client\Normalizer\SslCertificateRequestValidationNormalizer::class,
            
            \Combell\Client\Model\SslCertificateRequestDetail::class => \Combell\Client\Normalizer\SslCertificateRequestDetailNormalizer::class,
            
            \Combell\Client\Model\SslCertificate::class => \Combell\Client\Normalizer\SslCertificateNormalizer::class,
            
            \Combell\Client\Model\SslCertificateDetail::class => \Combell\Client\Normalizer\SslCertificateDetailNormalizer::class,
            
            \Combell\Client\Model\WindowsHosting::class => \Combell\Client\Normalizer\WindowsHostingNormalizer::class,
            
            \Combell\Client\Model\ApplicationPool::class => \Combell\Client\Normalizer\ApplicationPoolNormalizer::class,
            
            \Combell\Client\Model\SiteBinding::class => \Combell\Client\Normalizer\SiteBindingNormalizer::class,
            
            \Combell\Client\Model\WindowsSite::class => \Combell\Client\Normalizer\WindowsSiteNormalizer::class,
            
            \Combell\Client\Model\WindowsHostingDetail::class => \Combell\Client\Normalizer\WindowsHostingDetailNormalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \Combell\Client\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [
                
                \Combell\Client\Model\Account::class => false,
                \Combell\Client\Model\CreateAccount::class => false,
                \Combell\Client\Model\ValidationErrorMessage::class => false,
                \Combell\Client\Model\BadRequestResponse::class => false,
                \Combell\Client\Model\Servicepack::class => false,
                \Combell\Client\Model\Addon::class => false,
                \Combell\Client\Model\AccountDetail::class => false,
                \Combell\Client\Model\DnsRecord::class => false,
                \Combell\Client\Model\Domain::class => false,
                \Combell\Client\Model\NameServer::class => false,
                \Combell\Client\Model\Registrant::class => false,
                \Combell\Client\Model\DomainDetail::class => false,
                \Combell\Client\Model\ExtraField::class => false,
                \Combell\Client\Model\RegistrantInput::class => false,
                \Combell\Client\Model\RegisterDomain::class => false,
                \Combell\Client\Model\TransferDomain::class => false,
                \Combell\Client\Model\EditNameServers::class => false,
                \Combell\Client\Model\EditDomainWillRenewRequest::class => false,
                \Combell\Client\Model\LinuxHosting::class => false,
                \Combell\Client\Model\HostHeader::class => false,
                \Combell\Client\Model\LinuxSite::class => false,
                \Combell\Client\Model\LinuxHostingDetail::class => false,
                \Combell\Client\Model\PhpVersion::class => false,
                \Combell\Client\Model\GzipConfig::class => false,
                \Combell\Client\Model\AddSubsiteRequest::class => false,
                \Combell\Client\Model\AddHostHeaderRequest::class => false,
                \Combell\Client\Model\Http2Configuration::class => false,
                \Combell\Client\Model\FtpConfiguration::class => false,
                \Combell\Client\Model\LetsEncryptConfig::class => false,
                \Combell\Client\Model\AutoRedirectConfig::class => false,
                \Combell\Client\Model\UpdatePhpMemoryLimitRequest::class => false,
                \Combell\Client\Model\UpdatePhpAPcuRequest::class => false,
                \Combell\Client\Model\ScheduledTask::class => false,
                \Combell\Client\Model\SshKey::class => false,
                \Combell\Client\Model\AddSshKeyRequest::class => false,
                \Combell\Client\Model\SshConfiguration::class => false,
                \Combell\Client\Model\Mailbox::class => false,
                \Combell\Client\Model\CreateMailboxRequest::class => false,
                \Combell\Client\Model\AutoReply::class => false,
                \Combell\Client\Model\AutoForward::class => false,
                \Combell\Client\Model\MailboxDetail::class => false,
                \Combell\Client\Model\UpdateMailboxPasswordRequest::class => false,
                \Combell\Client\Model\MailZoneAccount::class => false,
                \Combell\Client\Model\Alias::class => false,
                \Combell\Client\Model\AntiSpam::class => false,
                \Combell\Client\Model\CatchAll::class => false,
                \Combell\Client\Model\SmtpDomain::class => false,
                \Combell\Client\Model\MailZone::class => false,
                \Combell\Client\Model\CreateCatchAllRequest::class => false,
                \Combell\Client\Model\UpdateAntiSpamRequest::class => false,
                \Combell\Client\Model\CreateAliasRequest::class => false,
                \Combell\Client\Model\UpdateAliasRequest::class => false,
                \Combell\Client\Model\CreateSmtpDomainRequest::class => false,
                \Combell\Client\Model\UpdateSmtpDomainRequest::class => false,
                \Combell\Client\Model\MySqlDatabase::class => false,
                \Combell\Client\Model\CreateMySqlDatabase::class => false,
                \Combell\Client\Model\MySqlUser::class => false,
                \Combell\Client\Model\CreateMySqlUser::class => false,
                \Combell\Client\Model\UpdateUserStatusRequest::class => false,
                \Combell\Client\Model\UpdateUserPasswordRequest::class => false,
                \Combell\Client\Model\CompletionEstimation::class => false,
                \Combell\Client\Model\ProvisioningJobInfo::class => false,
                \Combell\Client\Model\ProvisioningJobCompletion::class => false,
                \Combell\Client\Model\SshKeyDetail::class => false,
                \Combell\Client\Model\SslCertificateRequest::class => false,
                \Combell\Client\Model\AdditionalValidationAttribute::class => false,
                \Combell\Client\Model\CreateSslCertificateRequest::class => false,
                \Combell\Client\Model\SslSubjectAltName::class => false,
                \Combell\Client\Model\SslCertificateRequestValidation::class => false,
                \Combell\Client\Model\SslCertificateRequestDetail::class => false,
                \Combell\Client\Model\SslCertificate::class => false,
                \Combell\Client\Model\SslCertificateDetail::class => false,
                \Combell\Client\Model\WindowsHosting::class => false,
                \Combell\Client\Model\ApplicationPool::class => false,
                \Combell\Client\Model\SiteBinding::class => false,
                \Combell\Client\Model\WindowsSite::class => false,
                \Combell\Client\Model\WindowsHostingDetail::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
}