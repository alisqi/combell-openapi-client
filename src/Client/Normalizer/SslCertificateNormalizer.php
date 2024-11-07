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
    class SslCertificateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\SslCertificate::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\SslCertificate::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\SslCertificate();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sha1_fingerprint', $data)) {
                $object->setSha1Fingerprint($data['sha1_fingerprint']);
            }
            if (\array_key_exists('common_name', $data)) {
                $object->setCommonName($data['common_name']);
            }
            if (\array_key_exists('expires_after', $data)) {
                $object->setExpiresAfter(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expires_after']));
            }
            if (\array_key_exists('validation_level', $data)) {
                $object->setValidationLevel($data['validation_level']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('sha1Fingerprint') && null !== $object->getSha1Fingerprint()) {
                $data['sha1_fingerprint'] = $object->getSha1Fingerprint();
            }
            if ($object->isInitialized('commonName') && null !== $object->getCommonName()) {
                $data['common_name'] = $object->getCommonName();
            }
            if ($object->isInitialized('expiresAfter') && null !== $object->getExpiresAfter()) {
                $data['expires_after'] = $object->getExpiresAfter()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('validationLevel') && null !== $object->getValidationLevel()) {
                $data['validation_level'] = $object->getValidationLevel();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\SslCertificate::class => false];
        }
    }
} else {
    class SslCertificateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\SslCertificate::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\SslCertificate::class;
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
            $object = new \Combell\Client\Model\SslCertificate();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sha1_fingerprint', $data)) {
                $object->setSha1Fingerprint($data['sha1_fingerprint']);
            }
            if (\array_key_exists('common_name', $data)) {
                $object->setCommonName($data['common_name']);
            }
            if (\array_key_exists('expires_after', $data)) {
                $object->setExpiresAfter(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expires_after']));
            }
            if (\array_key_exists('validation_level', $data)) {
                $object->setValidationLevel($data['validation_level']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('sha1Fingerprint') && null !== $object->getSha1Fingerprint()) {
                $data['sha1_fingerprint'] = $object->getSha1Fingerprint();
            }
            if ($object->isInitialized('commonName') && null !== $object->getCommonName()) {
                $data['common_name'] = $object->getCommonName();
            }
            if ($object->isInitialized('expiresAfter') && null !== $object->getExpiresAfter()) {
                $data['expires_after'] = $object->getExpiresAfter()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('validationLevel') && null !== $object->getValidationLevel()) {
                $data['validation_level'] = $object->getValidationLevel();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\SslCertificate::class => false];
        }
    }
}