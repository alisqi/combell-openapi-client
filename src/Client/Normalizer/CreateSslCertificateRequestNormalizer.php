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
    class CreateSslCertificateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\CreateSslCertificateRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\CreateSslCertificateRequest::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\CreateSslCertificateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('csr', $data)) {
                $object->setCsr($data['csr']);
            }
            if (\array_key_exists('certificate_type', $data)) {
                $object->setCertificateType($data['certificate_type']);
            }
            if (\array_key_exists('validation_level', $data)) {
                $object->setValidationLevel($data['validation_level']);
            }
            if (\array_key_exists('additional_validation_attributes', $data)) {
                $values = [];
                foreach ($data['additional_validation_attributes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\AdditionalValidationAttribute::class, 'json', $context);
                }
                $object->setAdditionalValidationAttributes($values);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('csr') && null !== $object->getCsr()) {
                $data['csr'] = $object->getCsr();
            }
            if ($object->isInitialized('certificateType') && null !== $object->getCertificateType()) {
                $data['certificate_type'] = $object->getCertificateType();
            }
            if ($object->isInitialized('validationLevel') && null !== $object->getValidationLevel()) {
                $data['validation_level'] = $object->getValidationLevel();
            }
            if ($object->isInitialized('additionalValidationAttributes') && null !== $object->getAdditionalValidationAttributes()) {
                $values = [];
                foreach ($object->getAdditionalValidationAttributes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['additional_validation_attributes'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\CreateSslCertificateRequest::class => false];
        }
    }
} else {
    class CreateSslCertificateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\CreateSslCertificateRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\CreateSslCertificateRequest::class;
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
            $object = new \Combell\Client\Model\CreateSslCertificateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('csr', $data)) {
                $object->setCsr($data['csr']);
            }
            if (\array_key_exists('certificate_type', $data)) {
                $object->setCertificateType($data['certificate_type']);
            }
            if (\array_key_exists('validation_level', $data)) {
                $object->setValidationLevel($data['validation_level']);
            }
            if (\array_key_exists('additional_validation_attributes', $data)) {
                $values = [];
                foreach ($data['additional_validation_attributes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\AdditionalValidationAttribute::class, 'json', $context);
                }
                $object->setAdditionalValidationAttributes($values);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('csr') && null !== $object->getCsr()) {
                $data['csr'] = $object->getCsr();
            }
            if ($object->isInitialized('certificateType') && null !== $object->getCertificateType()) {
                $data['certificate_type'] = $object->getCertificateType();
            }
            if ($object->isInitialized('validationLevel') && null !== $object->getValidationLevel()) {
                $data['validation_level'] = $object->getValidationLevel();
            }
            if ($object->isInitialized('additionalValidationAttributes') && null !== $object->getAdditionalValidationAttributes()) {
                $values = [];
                foreach ($object->getAdditionalValidationAttributes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['additional_validation_attributes'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\CreateSslCertificateRequest::class => false];
        }
    }
}