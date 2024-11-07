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
    class SshKeyDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\SshKeyDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\SshKeyDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\SshKeyDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fingerprint', $data)) {
                $object->setFingerprint($data['fingerprint']);
            }
            if (\array_key_exists('public_key', $data)) {
                $object->setPublicKey($data['public_key']);
            }
            if (\array_key_exists('linux_hostings', $data)) {
                $values = [];
                foreach ($data['linux_hostings'] as $value) {
                    $values[] = $value;
                }
                $object->setLinuxHostings($values);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('fingerprint') && null !== $object->getFingerprint()) {
                $data['fingerprint'] = $object->getFingerprint();
            }
            if ($object->isInitialized('publicKey') && null !== $object->getPublicKey()) {
                $data['public_key'] = $object->getPublicKey();
            }
            if ($object->isInitialized('linuxHostings') && null !== $object->getLinuxHostings()) {
                $values = [];
                foreach ($object->getLinuxHostings() as $value) {
                    $values[] = $value;
                }
                $data['linux_hostings'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\SshKeyDetail::class => false];
        }
    }
} else {
    class SshKeyDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\SshKeyDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\SshKeyDetail::class;
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
            $object = new \Combell\Client\Model\SshKeyDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fingerprint', $data)) {
                $object->setFingerprint($data['fingerprint']);
            }
            if (\array_key_exists('public_key', $data)) {
                $object->setPublicKey($data['public_key']);
            }
            if (\array_key_exists('linux_hostings', $data)) {
                $values = [];
                foreach ($data['linux_hostings'] as $value) {
                    $values[] = $value;
                }
                $object->setLinuxHostings($values);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('fingerprint') && null !== $object->getFingerprint()) {
                $data['fingerprint'] = $object->getFingerprint();
            }
            if ($object->isInitialized('publicKey') && null !== $object->getPublicKey()) {
                $data['public_key'] = $object->getPublicKey();
            }
            if ($object->isInitialized('linuxHostings') && null !== $object->getLinuxHostings()) {
                $values = [];
                foreach ($object->getLinuxHostings() as $value) {
                    $values[] = $value;
                }
                $data['linux_hostings'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\SshKeyDetail::class => false];
        }
    }
}