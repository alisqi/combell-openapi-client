<?php

namespace Combell\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Combell\Client\Runtime\Normalizer\CheckArray;
use Combell\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class WindowsHostingDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\WindowsHostingDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\WindowsHostingDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\WindowsHostingDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('domain_name', $data)) {
                $object->setDomainName($data['domain_name']);
            }
            if (\array_key_exists('servicepack_id', $data)) {
                $object->setServicepackId($data['servicepack_id']);
            }
            if (\array_key_exists('max_size', $data)) {
                $object->setMaxSize($data['max_size']);
            }
            if (\array_key_exists('actual_size', $data)) {
                $object->setActualSize($data['actual_size']);
            }
            if (\array_key_exists('ip', $data)) {
                $object->setIp($data['ip']);
            }
            if (\array_key_exists('ip_type', $data)) {
                $object->setIpType($data['ip_type']);
            }
            if (\array_key_exists('ftp_username', $data)) {
                $object->setFtpUsername($data['ftp_username']);
            }
            if (\array_key_exists('application_pool', $data)) {
                $object->setApplicationPool($this->denormalizer->denormalize($data['application_pool'], \Combell\Client\Model\ApplicationPool::class, 'json', $context));
            }
            if (\array_key_exists('sites', $data)) {
                $values = [];
                foreach ($data['sites'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\WindowsSite::class, 'json', $context);
                }
                $object->setSites($values);
            }
            if (\array_key_exists('mssql_database_names', $data)) {
                $values_1 = [];
                foreach ($data['mssql_database_names'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setMssqlDatabaseNames($values_1);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('domainName') && null !== $object->getDomainName()) {
                $data['domain_name'] = $object->getDomainName();
            }
            if ($object->isInitialized('servicepackId') && null !== $object->getServicepackId()) {
                $data['servicepack_id'] = $object->getServicepackId();
            }
            if ($object->isInitialized('maxSize') && null !== $object->getMaxSize()) {
                $data['max_size'] = $object->getMaxSize();
            }
            if ($object->isInitialized('actualSize') && null !== $object->getActualSize()) {
                $data['actual_size'] = $object->getActualSize();
            }
            if ($object->isInitialized('ip') && null !== $object->getIp()) {
                $data['ip'] = $object->getIp();
            }
            if ($object->isInitialized('ipType') && null !== $object->getIpType()) {
                $data['ip_type'] = $object->getIpType();
            }
            if ($object->isInitialized('ftpUsername') && null !== $object->getFtpUsername()) {
                $data['ftp_username'] = $object->getFtpUsername();
            }
            if ($object->isInitialized('applicationPool') && null !== $object->getApplicationPool()) {
                $data['application_pool'] = $this->normalizer->normalize($object->getApplicationPool(), 'json', $context);
            }
            if ($object->isInitialized('sites') && null !== $object->getSites()) {
                $values = [];
                foreach ($object->getSites() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['sites'] = $values;
            }
            if ($object->isInitialized('mssqlDatabaseNames') && null !== $object->getMssqlDatabaseNames()) {
                $values_1 = [];
                foreach ($object->getMssqlDatabaseNames() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['mssql_database_names'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\WindowsHostingDetail::class => false];
        }
    }
} else {
    class WindowsHostingDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\WindowsHostingDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\WindowsHostingDetail::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\WindowsHostingDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('domain_name', $data)) {
                $object->setDomainName($data['domain_name']);
            }
            if (\array_key_exists('servicepack_id', $data)) {
                $object->setServicepackId($data['servicepack_id']);
            }
            if (\array_key_exists('max_size', $data)) {
                $object->setMaxSize($data['max_size']);
            }
            if (\array_key_exists('actual_size', $data)) {
                $object->setActualSize($data['actual_size']);
            }
            if (\array_key_exists('ip', $data)) {
                $object->setIp($data['ip']);
            }
            if (\array_key_exists('ip_type', $data)) {
                $object->setIpType($data['ip_type']);
            }
            if (\array_key_exists('ftp_username', $data)) {
                $object->setFtpUsername($data['ftp_username']);
            }
            if (\array_key_exists('application_pool', $data)) {
                $object->setApplicationPool($this->denormalizer->denormalize($data['application_pool'], \Combell\Client\Model\ApplicationPool::class, 'json', $context));
            }
            if (\array_key_exists('sites', $data)) {
                $values = [];
                foreach ($data['sites'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\WindowsSite::class, 'json', $context);
                }
                $object->setSites($values);
            }
            if (\array_key_exists('mssql_database_names', $data)) {
                $values_1 = [];
                foreach ($data['mssql_database_names'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setMssqlDatabaseNames($values_1);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('domainName') && null !== $object->getDomainName()) {
                $data['domain_name'] = $object->getDomainName();
            }
            if ($object->isInitialized('servicepackId') && null !== $object->getServicepackId()) {
                $data['servicepack_id'] = $object->getServicepackId();
            }
            if ($object->isInitialized('maxSize') && null !== $object->getMaxSize()) {
                $data['max_size'] = $object->getMaxSize();
            }
            if ($object->isInitialized('actualSize') && null !== $object->getActualSize()) {
                $data['actual_size'] = $object->getActualSize();
            }
            if ($object->isInitialized('ip') && null !== $object->getIp()) {
                $data['ip'] = $object->getIp();
            }
            if ($object->isInitialized('ipType') && null !== $object->getIpType()) {
                $data['ip_type'] = $object->getIpType();
            }
            if ($object->isInitialized('ftpUsername') && null !== $object->getFtpUsername()) {
                $data['ftp_username'] = $object->getFtpUsername();
            }
            if ($object->isInitialized('applicationPool') && null !== $object->getApplicationPool()) {
                $data['application_pool'] = $this->normalizer->normalize($object->getApplicationPool(), 'json', $context);
            }
            if ($object->isInitialized('sites') && null !== $object->getSites()) {
                $values = [];
                foreach ($object->getSites() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['sites'] = $values;
            }
            if ($object->isInitialized('mssqlDatabaseNames') && null !== $object->getMssqlDatabaseNames()) {
                $values_1 = [];
                foreach ($object->getMssqlDatabaseNames() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['mssql_database_names'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\WindowsHostingDetail::class => false];
        }
    }
}