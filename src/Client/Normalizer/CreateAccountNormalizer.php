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
    class CreateAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\CreateAccount::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\CreateAccount::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\CreateAccount();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('identifier', $data)) {
                $object->setIdentifier($data['identifier']);
            }
            if (\array_key_exists('servicepack_id', $data)) {
                $object->setServicepackId($data['servicepack_id']);
            }
            if (\array_key_exists('ftp_password', $data)) {
                $object->setFtpPassword($data['ftp_password']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('identifier') && null !== $object->getIdentifier()) {
                $data['identifier'] = $object->getIdentifier();
            }
            if ($object->isInitialized('servicepackId') && null !== $object->getServicepackId()) {
                $data['servicepack_id'] = $object->getServicepackId();
            }
            if ($object->isInitialized('ftpPassword') && null !== $object->getFtpPassword()) {
                $data['ftp_password'] = $object->getFtpPassword();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\CreateAccount::class => false];
        }
    }
} else {
    class CreateAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\CreateAccount::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\CreateAccount::class;
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
            $object = new \Combell\Client\Model\CreateAccount();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('identifier', $data)) {
                $object->setIdentifier($data['identifier']);
            }
            if (\array_key_exists('servicepack_id', $data)) {
                $object->setServicepackId($data['servicepack_id']);
            }
            if (\array_key_exists('ftp_password', $data)) {
                $object->setFtpPassword($data['ftp_password']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('identifier') && null !== $object->getIdentifier()) {
                $data['identifier'] = $object->getIdentifier();
            }
            if ($object->isInitialized('servicepackId') && null !== $object->getServicepackId()) {
                $data['servicepack_id'] = $object->getServicepackId();
            }
            if ($object->isInitialized('ftpPassword') && null !== $object->getFtpPassword()) {
                $data['ftp_password'] = $object->getFtpPassword();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\CreateAccount::class => false];
        }
    }
}