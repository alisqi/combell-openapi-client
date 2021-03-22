<?php

namespace Combell\Client\Normalizer;

use Combell\Client\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('Combell\\Client\\Model\\Account' => 'Combell\\Client\\Normalizer\\AccountNormalizer', 'Combell\\Client\\Model\\CreateAccount' => 'Combell\\Client\\Normalizer\\CreateAccountNormalizer', 'Combell\\Client\\Model\\ValidationErrorMessage' => 'Combell\\Client\\Normalizer\\ValidationErrorMessageNormalizer', 'Combell\\Client\\Model\\BadRequestResponse' => 'Combell\\Client\\Normalizer\\BadRequestResponseNormalizer', 'Combell\\Client\\Model\\Servicepack' => 'Combell\\Client\\Normalizer\\ServicepackNormalizer', 'Combell\\Client\\Model\\Addon' => 'Combell\\Client\\Normalizer\\AddonNormalizer', 'Combell\\Client\\Model\\AccountDetail' => 'Combell\\Client\\Normalizer\\AccountDetailNormalizer', 'Combell\\Client\\Model\\DnsRecord' => 'Combell\\Client\\Normalizer\\DnsRecordNormalizer', 'Combell\\Client\\Model\\Domain' => 'Combell\\Client\\Normalizer\\DomainNormalizer', 'Combell\\Client\\Model\\NameServer' => 'Combell\\Client\\Normalizer\\NameServerNormalizer', 'Combell\\Client\\Model\\Registrant' => 'Combell\\Client\\Normalizer\\RegistrantNormalizer', 'Combell\\Client\\Model\\DomainDetail' => 'Combell\\Client\\Normalizer\\DomainDetailNormalizer', 'Combell\\Client\\Model\\ExtraField' => 'Combell\\Client\\Normalizer\\ExtraFieldNormalizer', 'Combell\\Client\\Model\\RegistrantInput' => 'Combell\\Client\\Normalizer\\RegistrantInputNormalizer', 'Combell\\Client\\Model\\RegisterDomain' => 'Combell\\Client\\Normalizer\\RegisterDomainNormalizer', 'Combell\\Client\\Model\\EditNameServers' => 'Combell\\Client\\Normalizer\\EditNameServersNormalizer', 'Combell\\Client\\Model\\EditDomainWillRenewRequest' => 'Combell\\Client\\Normalizer\\EditDomainWillRenewRequestNormalizer', 'Combell\\Client\\Model\\LinuxHosting' => 'Combell\\Client\\Normalizer\\LinuxHostingNormalizer', 'Combell\\Client\\Model\\HostHeader' => 'Combell\\Client\\Normalizer\\HostHeaderNormalizer', 'Combell\\Client\\Model\\LinuxSite' => 'Combell\\Client\\Normalizer\\LinuxSiteNormalizer', 'Combell\\Client\\Model\\LinuxHostingDetail' => 'Combell\\Client\\Normalizer\\LinuxHostingDetailNormalizer', 'Combell\\Client\\Model\\PhpVersion' => 'Combell\\Client\\Normalizer\\PhpVersionNormalizer', 'Combell\\Client\\Model\\GzipConfig' => 'Combell\\Client\\Normalizer\\GzipConfigNormalizer', 'Combell\\Client\\Model\\AddSubsiteRequest' => 'Combell\\Client\\Normalizer\\AddSubsiteRequestNormalizer', 'Combell\\Client\\Model\\AddHostHeaderRequest' => 'Combell\\Client\\Normalizer\\AddHostHeaderRequestNormalizer', 'Combell\\Client\\Model\\Http2Configuration' => 'Combell\\Client\\Normalizer\\Http2ConfigurationNormalizer', 'Combell\\Client\\Model\\FtpConfiguration' => 'Combell\\Client\\Normalizer\\FtpConfigurationNormalizer', 'Combell\\Client\\Model\\LetsEncryptConfig' => 'Combell\\Client\\Normalizer\\LetsEncryptConfigNormalizer', 'Combell\\Client\\Model\\AutoRedirectConfig' => 'Combell\\Client\\Normalizer\\AutoRedirectConfigNormalizer', 'Combell\\Client\\Model\\UpdatePhpMemoryLimitRequest' => 'Combell\\Client\\Normalizer\\UpdatePhpMemoryLimitRequestNormalizer', 'Combell\\Client\\Model\\UpdatePhpAPcuRequest' => 'Combell\\Client\\Normalizer\\UpdatePhpAPcuRequestNormalizer', 'Combell\\Client\\Model\\ScheduledTask' => 'Combell\\Client\\Normalizer\\ScheduledTaskNormalizer', 'Combell\\Client\\Model\\SshKey' => 'Combell\\Client\\Normalizer\\SshKeyNormalizer', 'Combell\\Client\\Model\\AddSshKeyRequest' => 'Combell\\Client\\Normalizer\\AddSshKeyRequestNormalizer', 'Combell\\Client\\Model\\SshConfiguration' => 'Combell\\Client\\Normalizer\\SshConfigurationNormalizer', 'Combell\\Client\\Model\\Mailbox' => 'Combell\\Client\\Normalizer\\MailboxNormalizer', 'Combell\\Client\\Model\\CreateMailboxRequest' => 'Combell\\Client\\Normalizer\\CreateMailboxRequestNormalizer', 'Combell\\Client\\Model\\AutoReply' => 'Combell\\Client\\Normalizer\\AutoReplyNormalizer', 'Combell\\Client\\Model\\AutoForward' => 'Combell\\Client\\Normalizer\\AutoForwardNormalizer', 'Combell\\Client\\Model\\MailboxDetail' => 'Combell\\Client\\Normalizer\\MailboxDetailNormalizer', 'Combell\\Client\\Model\\UpdateMailboxPasswordRequest' => 'Combell\\Client\\Normalizer\\UpdateMailboxPasswordRequestNormalizer', 'Combell\\Client\\Model\\MailZoneAccount' => 'Combell\\Client\\Normalizer\\MailZoneAccountNormalizer', 'Combell\\Client\\Model\\Alias' => 'Combell\\Client\\Normalizer\\AliasNormalizer', 'Combell\\Client\\Model\\AntiSpam' => 'Combell\\Client\\Normalizer\\AntiSpamNormalizer', 'Combell\\Client\\Model\\CatchAll' => 'Combell\\Client\\Normalizer\\CatchAllNormalizer', 'Combell\\Client\\Model\\SmtpDomain' => 'Combell\\Client\\Normalizer\\SmtpDomainNormalizer', 'Combell\\Client\\Model\\MailZone' => 'Combell\\Client\\Normalizer\\MailZoneNormalizer', 'Combell\\Client\\Model\\CreateCatchAllRequest' => 'Combell\\Client\\Normalizer\\CreateCatchAllRequestNormalizer', 'Combell\\Client\\Model\\UpdateAntiSpamRequest' => 'Combell\\Client\\Normalizer\\UpdateAntiSpamRequestNormalizer', 'Combell\\Client\\Model\\CreateAliasRequest' => 'Combell\\Client\\Normalizer\\CreateAliasRequestNormalizer', 'Combell\\Client\\Model\\UpdateAliasRequest' => 'Combell\\Client\\Normalizer\\UpdateAliasRequestNormalizer', 'Combell\\Client\\Model\\CreateSmtpDomainRequest' => 'Combell\\Client\\Normalizer\\CreateSmtpDomainRequestNormalizer', 'Combell\\Client\\Model\\UpdateSmtpDomainRequest' => 'Combell\\Client\\Normalizer\\UpdateSmtpDomainRequestNormalizer', 'Combell\\Client\\Model\\MySqlDatabase' => 'Combell\\Client\\Normalizer\\MySqlDatabaseNormalizer', 'Combell\\Client\\Model\\CreateMySqlDatabase' => 'Combell\\Client\\Normalizer\\CreateMySqlDatabaseNormalizer', 'Combell\\Client\\Model\\MySqlUser' => 'Combell\\Client\\Normalizer\\MySqlUserNormalizer', 'Combell\\Client\\Model\\CreateMySqlUser' => 'Combell\\Client\\Normalizer\\CreateMySqlUserNormalizer', 'Combell\\Client\\Model\\UpdateUserStatusRequest' => 'Combell\\Client\\Normalizer\\UpdateUserStatusRequestNormalizer', 'Combell\\Client\\Model\\UpdateUserPasswordRequest' => 'Combell\\Client\\Normalizer\\UpdateUserPasswordRequestNormalizer', 'Combell\\Client\\Model\\CompletionEstimation' => 'Combell\\Client\\Normalizer\\CompletionEstimationNormalizer', 'Combell\\Client\\Model\\ProvisioningJobInfo' => 'Combell\\Client\\Normalizer\\ProvisioningJobInfoNormalizer', 'Combell\\Client\\Model\\ProvisioningJobCompletion' => 'Combell\\Client\\Normalizer\\ProvisioningJobCompletionNormalizer', 'Combell\\Client\\Model\\SshKeyDetail' => 'Combell\\Client\\Normalizer\\SshKeyDetailNormalizer', 'Combell\\Client\\Model\\SslCertificateRequest' => 'Combell\\Client\\Normalizer\\SslCertificateRequestNormalizer', 'Combell\\Client\\Model\\AdditionalValidationAttribute' => 'Combell\\Client\\Normalizer\\AdditionalValidationAttributeNormalizer', 'Combell\\Client\\Model\\CreateSslCertificateRequest' => 'Combell\\Client\\Normalizer\\CreateSslCertificateRequestNormalizer', 'Combell\\Client\\Model\\SslSubjectAltName' => 'Combell\\Client\\Normalizer\\SslSubjectAltNameNormalizer', 'Combell\\Client\\Model\\SslCertificateRequestValidation' => 'Combell\\Client\\Normalizer\\SslCertificateRequestValidationNormalizer', 'Combell\\Client\\Model\\SslCertificateRequestDetail' => 'Combell\\Client\\Normalizer\\SslCertificateRequestDetailNormalizer', 'Combell\\Client\\Model\\SslCertificate' => 'Combell\\Client\\Normalizer\\SslCertificateNormalizer', 'Combell\\Client\\Model\\SslCertificateDetail' => 'Combell\\Client\\Normalizer\\SslCertificateDetailNormalizer', 'Combell\\Client\\Model\\WindowsHosting' => 'Combell\\Client\\Normalizer\\WindowsHostingNormalizer', 'Combell\\Client\\Model\\ApplicationPool' => 'Combell\\Client\\Normalizer\\ApplicationPoolNormalizer', 'Combell\\Client\\Model\\SiteBinding' => 'Combell\\Client\\Normalizer\\SiteBindingNormalizer', 'Combell\\Client\\Model\\WindowsSite' => 'Combell\\Client\\Normalizer\\WindowsSiteNormalizer', 'Combell\\Client\\Model\\WindowsHostingDetail' => 'Combell\\Client\\Normalizer\\WindowsHostingDetailNormalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\Combell\\Client\\Runtime\\Normalizer\\ReferenceNormalizer');
    protected $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
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
}
