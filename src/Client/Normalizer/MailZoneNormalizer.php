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
    class MailZoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\MailZone::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\MailZone::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\MailZone();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('enabled', $data)) {
                $object->setEnabled($data['enabled']);
            }
            if (\array_key_exists('available_accounts', $data)) {
                $values = [];
                foreach ($data['available_accounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\MailZoneAccount::class, 'json', $context);
                }
                $object->setAvailableAccounts($values);
            }
            if (\array_key_exists('aliases', $data)) {
                $values_1 = [];
                foreach ($data['aliases'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Combell\Client\Model\Alias::class, 'json', $context);
                }
                $object->setAliases($values_1);
            }
            if (\array_key_exists('anti_spam', $data)) {
                $object->setAntiSpam($this->denormalizer->denormalize($data['anti_spam'], \Combell\Client\Model\AntiSpam::class, 'json', $context));
            }
            if (\array_key_exists('catch_all', $data)) {
                $object->setCatchAll($this->denormalizer->denormalize($data['catch_all'], \Combell\Client\Model\CatchAll::class, 'json', $context));
            }
            if (\array_key_exists('smtp_domains', $data)) {
                $values_2 = [];
                foreach ($data['smtp_domains'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Combell\Client\Model\SmtpDomain::class, 'json', $context);
                }
                $object->setSmtpDomains($values_2);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('enabled') && null !== $object->getEnabled()) {
                $data['enabled'] = $object->getEnabled();
            }
            if ($object->isInitialized('availableAccounts') && null !== $object->getAvailableAccounts()) {
                $values = [];
                foreach ($object->getAvailableAccounts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['available_accounts'] = $values;
            }
            if ($object->isInitialized('aliases') && null !== $object->getAliases()) {
                $values_1 = [];
                foreach ($object->getAliases() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['aliases'] = $values_1;
            }
            if ($object->isInitialized('antiSpam') && null !== $object->getAntiSpam()) {
                $data['anti_spam'] = $this->normalizer->normalize($object->getAntiSpam(), 'json', $context);
            }
            if ($object->isInitialized('catchAll') && null !== $object->getCatchAll()) {
                $data['catch_all'] = $this->normalizer->normalize($object->getCatchAll(), 'json', $context);
            }
            if ($object->isInitialized('smtpDomains') && null !== $object->getSmtpDomains()) {
                $values_2 = [];
                foreach ($object->getSmtpDomains() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['smtp_domains'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\MailZone::class => false];
        }
    }
} else {
    class MailZoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\MailZone::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\MailZone::class;
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
            $object = new \Combell\Client\Model\MailZone();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('enabled', $data)) {
                $object->setEnabled($data['enabled']);
            }
            if (\array_key_exists('available_accounts', $data)) {
                $values = [];
                foreach ($data['available_accounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\MailZoneAccount::class, 'json', $context);
                }
                $object->setAvailableAccounts($values);
            }
            if (\array_key_exists('aliases', $data)) {
                $values_1 = [];
                foreach ($data['aliases'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Combell\Client\Model\Alias::class, 'json', $context);
                }
                $object->setAliases($values_1);
            }
            if (\array_key_exists('anti_spam', $data)) {
                $object->setAntiSpam($this->denormalizer->denormalize($data['anti_spam'], \Combell\Client\Model\AntiSpam::class, 'json', $context));
            }
            if (\array_key_exists('catch_all', $data)) {
                $object->setCatchAll($this->denormalizer->denormalize($data['catch_all'], \Combell\Client\Model\CatchAll::class, 'json', $context));
            }
            if (\array_key_exists('smtp_domains', $data)) {
                $values_2 = [];
                foreach ($data['smtp_domains'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Combell\Client\Model\SmtpDomain::class, 'json', $context);
                }
                $object->setSmtpDomains($values_2);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('enabled') && null !== $object->getEnabled()) {
                $data['enabled'] = $object->getEnabled();
            }
            if ($object->isInitialized('availableAccounts') && null !== $object->getAvailableAccounts()) {
                $values = [];
                foreach ($object->getAvailableAccounts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['available_accounts'] = $values;
            }
            if ($object->isInitialized('aliases') && null !== $object->getAliases()) {
                $values_1 = [];
                foreach ($object->getAliases() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['aliases'] = $values_1;
            }
            if ($object->isInitialized('antiSpam') && null !== $object->getAntiSpam()) {
                $data['anti_spam'] = $this->normalizer->normalize($object->getAntiSpam(), 'json', $context);
            }
            if ($object->isInitialized('catchAll') && null !== $object->getCatchAll()) {
                $data['catch_all'] = $this->normalizer->normalize($object->getCatchAll(), 'json', $context);
            }
            if ($object->isInitialized('smtpDomains') && null !== $object->getSmtpDomains()) {
                $values_2 = [];
                foreach ($object->getSmtpDomains() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['smtp_domains'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\MailZone::class => false];
        }
    }
}