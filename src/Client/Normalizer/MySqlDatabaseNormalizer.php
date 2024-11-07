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
    class MySqlDatabaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\MySqlDatabase::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\MySqlDatabase::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\MySqlDatabase();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('hostname', $data)) {
                $object->setHostname($data['hostname']);
            }
            if (\array_key_exists('user_count', $data)) {
                $object->setUserCount($data['user_count']);
            }
            if (\array_key_exists('max_size', $data)) {
                $object->setMaxSize($data['max_size']);
            }
            if (\array_key_exists('actual_size', $data)) {
                $object->setActualSize($data['actual_size']);
            }
            if (\array_key_exists('account_id', $data)) {
                $object->setAccountId($data['account_id']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
                $data['hostname'] = $object->getHostname();
            }
            if ($object->isInitialized('userCount') && null !== $object->getUserCount()) {
                $data['user_count'] = $object->getUserCount();
            }
            if ($object->isInitialized('maxSize') && null !== $object->getMaxSize()) {
                $data['max_size'] = $object->getMaxSize();
            }
            if ($object->isInitialized('actualSize') && null !== $object->getActualSize()) {
                $data['actual_size'] = $object->getActualSize();
            }
            if ($object->isInitialized('accountId') && null !== $object->getAccountId()) {
                $data['account_id'] = $object->getAccountId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\MySqlDatabase::class => false];
        }
    }
} else {
    class MySqlDatabaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\MySqlDatabase::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\MySqlDatabase::class;
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
            $object = new \Combell\Client\Model\MySqlDatabase();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('hostname', $data)) {
                $object->setHostname($data['hostname']);
            }
            if (\array_key_exists('user_count', $data)) {
                $object->setUserCount($data['user_count']);
            }
            if (\array_key_exists('max_size', $data)) {
                $object->setMaxSize($data['max_size']);
            }
            if (\array_key_exists('actual_size', $data)) {
                $object->setActualSize($data['actual_size']);
            }
            if (\array_key_exists('account_id', $data)) {
                $object->setAccountId($data['account_id']);
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
            if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
                $data['hostname'] = $object->getHostname();
            }
            if ($object->isInitialized('userCount') && null !== $object->getUserCount()) {
                $data['user_count'] = $object->getUserCount();
            }
            if ($object->isInitialized('maxSize') && null !== $object->getMaxSize()) {
                $data['max_size'] = $object->getMaxSize();
            }
            if ($object->isInitialized('actualSize') && null !== $object->getActualSize()) {
                $data['actual_size'] = $object->getActualSize();
            }
            if ($object->isInitialized('accountId') && null !== $object->getAccountId()) {
                $data['account_id'] = $object->getAccountId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\MySqlDatabase::class => false];
        }
    }
}