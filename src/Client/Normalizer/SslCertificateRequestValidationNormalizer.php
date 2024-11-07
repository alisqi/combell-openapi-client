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
    class SslCertificateRequestValidationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\SslCertificateRequestValidation::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\SslCertificateRequestValidation::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\SslCertificateRequestValidation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dns_name', $data)) {
                $object->setDnsName($data['dns_name']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('auto_validated', $data)) {
                $object->setAutoValidated($data['auto_validated']);
            }
            if (\array_key_exists('email_addresses', $data)) {
                $values = [];
                foreach ($data['email_addresses'] as $value) {
                    $values[] = $value;
                }
                $object->setEmailAddresses($values);
            }
            if (\array_key_exists('cname_validation_name', $data)) {
                $object->setCnameValidationName($data['cname_validation_name']);
            }
            if (\array_key_exists('cname_validation_content', $data)) {
                $object->setCnameValidationContent($data['cname_validation_content']);
            }
            if (\array_key_exists('file_validation_url_http', $data)) {
                $object->setFileValidationUrlHttp($data['file_validation_url_http']);
            }
            if (\array_key_exists('file_validation_url_https', $data)) {
                $object->setFileValidationUrlHttps($data['file_validation_url_https']);
            }
            if (\array_key_exists('file_validation_content', $data)) {
                $values_1 = [];
                foreach ($data['file_validation_content'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setFileValidationContent($values_1);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('dnsName') && null !== $object->getDnsName()) {
                $data['dns_name'] = $object->getDnsName();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('autoValidated') && null !== $object->getAutoValidated()) {
                $data['auto_validated'] = $object->getAutoValidated();
            }
            if ($object->isInitialized('emailAddresses') && null !== $object->getEmailAddresses()) {
                $values = [];
                foreach ($object->getEmailAddresses() as $value) {
                    $values[] = $value;
                }
                $data['email_addresses'] = $values;
            }
            if ($object->isInitialized('cnameValidationName') && null !== $object->getCnameValidationName()) {
                $data['cname_validation_name'] = $object->getCnameValidationName();
            }
            if ($object->isInitialized('cnameValidationContent') && null !== $object->getCnameValidationContent()) {
                $data['cname_validation_content'] = $object->getCnameValidationContent();
            }
            if ($object->isInitialized('fileValidationUrlHttp') && null !== $object->getFileValidationUrlHttp()) {
                $data['file_validation_url_http'] = $object->getFileValidationUrlHttp();
            }
            if ($object->isInitialized('fileValidationUrlHttps') && null !== $object->getFileValidationUrlHttps()) {
                $data['file_validation_url_https'] = $object->getFileValidationUrlHttps();
            }
            if ($object->isInitialized('fileValidationContent') && null !== $object->getFileValidationContent()) {
                $values_1 = [];
                foreach ($object->getFileValidationContent() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['file_validation_content'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\SslCertificateRequestValidation::class => false];
        }
    }
} else {
    class SslCertificateRequestValidationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\SslCertificateRequestValidation::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\SslCertificateRequestValidation::class;
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
            $object = new \Combell\Client\Model\SslCertificateRequestValidation();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dns_name', $data)) {
                $object->setDnsName($data['dns_name']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('auto_validated', $data)) {
                $object->setAutoValidated($data['auto_validated']);
            }
            if (\array_key_exists('email_addresses', $data)) {
                $values = [];
                foreach ($data['email_addresses'] as $value) {
                    $values[] = $value;
                }
                $object->setEmailAddresses($values);
            }
            if (\array_key_exists('cname_validation_name', $data)) {
                $object->setCnameValidationName($data['cname_validation_name']);
            }
            if (\array_key_exists('cname_validation_content', $data)) {
                $object->setCnameValidationContent($data['cname_validation_content']);
            }
            if (\array_key_exists('file_validation_url_http', $data)) {
                $object->setFileValidationUrlHttp($data['file_validation_url_http']);
            }
            if (\array_key_exists('file_validation_url_https', $data)) {
                $object->setFileValidationUrlHttps($data['file_validation_url_https']);
            }
            if (\array_key_exists('file_validation_content', $data)) {
                $values_1 = [];
                foreach ($data['file_validation_content'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setFileValidationContent($values_1);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('dnsName') && null !== $object->getDnsName()) {
                $data['dns_name'] = $object->getDnsName();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('autoValidated') && null !== $object->getAutoValidated()) {
                $data['auto_validated'] = $object->getAutoValidated();
            }
            if ($object->isInitialized('emailAddresses') && null !== $object->getEmailAddresses()) {
                $values = [];
                foreach ($object->getEmailAddresses() as $value) {
                    $values[] = $value;
                }
                $data['email_addresses'] = $values;
            }
            if ($object->isInitialized('cnameValidationName') && null !== $object->getCnameValidationName()) {
                $data['cname_validation_name'] = $object->getCnameValidationName();
            }
            if ($object->isInitialized('cnameValidationContent') && null !== $object->getCnameValidationContent()) {
                $data['cname_validation_content'] = $object->getCnameValidationContent();
            }
            if ($object->isInitialized('fileValidationUrlHttp') && null !== $object->getFileValidationUrlHttp()) {
                $data['file_validation_url_http'] = $object->getFileValidationUrlHttp();
            }
            if ($object->isInitialized('fileValidationUrlHttps') && null !== $object->getFileValidationUrlHttps()) {
                $data['file_validation_url_https'] = $object->getFileValidationUrlHttps();
            }
            if ($object->isInitialized('fileValidationContent') && null !== $object->getFileValidationContent()) {
                $values_1 = [];
                foreach ($object->getFileValidationContent() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['file_validation_content'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\SslCertificateRequestValidation::class => false];
        }
    }
}