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
    class SslCertificateRequestDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\SslCertificateRequestDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\SslCertificateRequestDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\SslCertificateRequestDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('certificate_type', $data)) {
                $object->setCertificateType($data['certificate_type']);
            }
            if (\array_key_exists('validation_level', $data)) {
                $object->setValidationLevel($data['validation_level']);
            }
            if (\array_key_exists('vendor', $data)) {
                $object->setVendor($data['vendor']);
            }
            if (\array_key_exists('common_name', $data)) {
                $object->setCommonName($data['common_name']);
            }
            if (\array_key_exists('order_code', $data)) {
                $object->setOrderCode($data['order_code']);
            }
            if (\array_key_exists('subject_alt_names', $data)) {
                $values = [];
                foreach ($data['subject_alt_names'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\SslSubjectAltName::class, 'json', $context);
                }
                $object->setSubjectAltNames($values);
            }
            if (\array_key_exists('validations', $data)) {
                $values_1 = [];
                foreach ($data['validations'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Combell\Client\Model\SslCertificateRequestValidation::class, 'json', $context);
                }
                $object->setValidations($values_1);
            }
            if (\array_key_exists('provider_portal_url', $data)) {
                $object->setProviderPortalUrl($data['provider_portal_url']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('certificateType') && null !== $object->getCertificateType()) {
                $data['certificate_type'] = $object->getCertificateType();
            }
            if ($object->isInitialized('validationLevel') && null !== $object->getValidationLevel()) {
                $data['validation_level'] = $object->getValidationLevel();
            }
            if ($object->isInitialized('vendor') && null !== $object->getVendor()) {
                $data['vendor'] = $object->getVendor();
            }
            if ($object->isInitialized('commonName') && null !== $object->getCommonName()) {
                $data['common_name'] = $object->getCommonName();
            }
            if ($object->isInitialized('orderCode') && null !== $object->getOrderCode()) {
                $data['order_code'] = $object->getOrderCode();
            }
            if ($object->isInitialized('subjectAltNames') && null !== $object->getSubjectAltNames()) {
                $values = [];
                foreach ($object->getSubjectAltNames() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['subject_alt_names'] = $values;
            }
            if ($object->isInitialized('validations') && null !== $object->getValidations()) {
                $values_1 = [];
                foreach ($object->getValidations() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['validations'] = $values_1;
            }
            if ($object->isInitialized('providerPortalUrl') && null !== $object->getProviderPortalUrl()) {
                $data['provider_portal_url'] = $object->getProviderPortalUrl();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\SslCertificateRequestDetail::class => false];
        }
    }
} else {
    class SslCertificateRequestDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\SslCertificateRequestDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\SslCertificateRequestDetail::class;
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
            $object = new \Combell\Client\Model\SslCertificateRequestDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('certificate_type', $data)) {
                $object->setCertificateType($data['certificate_type']);
            }
            if (\array_key_exists('validation_level', $data)) {
                $object->setValidationLevel($data['validation_level']);
            }
            if (\array_key_exists('vendor', $data)) {
                $object->setVendor($data['vendor']);
            }
            if (\array_key_exists('common_name', $data)) {
                $object->setCommonName($data['common_name']);
            }
            if (\array_key_exists('order_code', $data)) {
                $object->setOrderCode($data['order_code']);
            }
            if (\array_key_exists('subject_alt_names', $data)) {
                $values = [];
                foreach ($data['subject_alt_names'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\SslSubjectAltName::class, 'json', $context);
                }
                $object->setSubjectAltNames($values);
            }
            if (\array_key_exists('validations', $data)) {
                $values_1 = [];
                foreach ($data['validations'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Combell\Client\Model\SslCertificateRequestValidation::class, 'json', $context);
                }
                $object->setValidations($values_1);
            }
            if (\array_key_exists('provider_portal_url', $data)) {
                $object->setProviderPortalUrl($data['provider_portal_url']);
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
            if ($object->isInitialized('certificateType') && null !== $object->getCertificateType()) {
                $data['certificate_type'] = $object->getCertificateType();
            }
            if ($object->isInitialized('validationLevel') && null !== $object->getValidationLevel()) {
                $data['validation_level'] = $object->getValidationLevel();
            }
            if ($object->isInitialized('vendor') && null !== $object->getVendor()) {
                $data['vendor'] = $object->getVendor();
            }
            if ($object->isInitialized('commonName') && null !== $object->getCommonName()) {
                $data['common_name'] = $object->getCommonName();
            }
            if ($object->isInitialized('orderCode') && null !== $object->getOrderCode()) {
                $data['order_code'] = $object->getOrderCode();
            }
            if ($object->isInitialized('subjectAltNames') && null !== $object->getSubjectAltNames()) {
                $values = [];
                foreach ($object->getSubjectAltNames() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['subject_alt_names'] = $values;
            }
            if ($object->isInitialized('validations') && null !== $object->getValidations()) {
                $values_1 = [];
                foreach ($object->getValidations() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['validations'] = $values_1;
            }
            if ($object->isInitialized('providerPortalUrl') && null !== $object->getProviderPortalUrl()) {
                $data['provider_portal_url'] = $object->getProviderPortalUrl();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\SslCertificateRequestDetail::class => false];
        }
    }
}