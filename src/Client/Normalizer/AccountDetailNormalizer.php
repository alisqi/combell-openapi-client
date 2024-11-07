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
    class AccountDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\AccountDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\AccountDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\AccountDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('identifier', $data)) {
                $object->setIdentifier($data['identifier']);
            }
            if (\array_key_exists('servicepack', $data)) {
                $object->setServicepack($this->denormalizer->denormalize($data['servicepack'], \Combell\Client\Model\Servicepack::class, 'json', $context));
            }
            if (\array_key_exists('addons', $data)) {
                $values = [];
                foreach ($data['addons'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\Addon::class, 'json', $context);
                }
                $object->setAddons($values);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('identifier') && null !== $object->getIdentifier()) {
                $data['identifier'] = $object->getIdentifier();
            }
            if ($object->isInitialized('servicepack') && null !== $object->getServicepack()) {
                $data['servicepack'] = $this->normalizer->normalize($object->getServicepack(), 'json', $context);
            }
            if ($object->isInitialized('addons') && null !== $object->getAddons()) {
                $values = [];
                foreach ($object->getAddons() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['addons'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\AccountDetail::class => false];
        }
    }
} else {
    class AccountDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\AccountDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\AccountDetail::class;
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
            $object = new \Combell\Client\Model\AccountDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('identifier', $data)) {
                $object->setIdentifier($data['identifier']);
            }
            if (\array_key_exists('servicepack', $data)) {
                $object->setServicepack($this->denormalizer->denormalize($data['servicepack'], \Combell\Client\Model\Servicepack::class, 'json', $context));
            }
            if (\array_key_exists('addons', $data)) {
                $values = [];
                foreach ($data['addons'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\Addon::class, 'json', $context);
                }
                $object->setAddons($values);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('identifier') && null !== $object->getIdentifier()) {
                $data['identifier'] = $object->getIdentifier();
            }
            if ($object->isInitialized('servicepack') && null !== $object->getServicepack()) {
                $data['servicepack'] = $this->normalizer->normalize($object->getServicepack(), 'json', $context);
            }
            if ($object->isInitialized('addons') && null !== $object->getAddons()) {
                $values = [];
                foreach ($object->getAddons() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['addons'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\AccountDetail::class => false];
        }
    }
}