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
    class RegistrantInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\RegistrantInput::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\RegistrantInput::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\RegistrantInput();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('first_name', $data)) {
                $object->setFirstName($data['first_name']);
            }
            if (\array_key_exists('last_name', $data)) {
                $object->setLastName($data['last_name']);
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($data['address']);
            }
            if (\array_key_exists('postal_code', $data)) {
                $object->setPostalCode($data['postal_code']);
            }
            if (\array_key_exists('city', $data)) {
                $object->setCity($data['city']);
            }
            if (\array_key_exists('country_code', $data)) {
                $object->setCountryCode($data['country_code']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
            }
            if (\array_key_exists('fax', $data)) {
                $object->setFax($data['fax']);
            }
            if (\array_key_exists('phone', $data)) {
                $object->setPhone($data['phone']);
            }
            if (\array_key_exists('language_code', $data)) {
                $object->setLanguageCode($data['language_code']);
            }
            if (\array_key_exists('company_name', $data)) {
                $object->setCompanyName($data['company_name']);
            }
            if (\array_key_exists('enterprise_number', $data)) {
                $object->setEnterpriseNumber($data['enterprise_number']);
            }
            if (\array_key_exists('extra_fields', $data)) {
                $values = [];
                foreach ($data['extra_fields'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\ExtraField::class, 'json', $context);
                }
                $object->setExtraFields($values);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['first_name'] = $object->getFirstName();
            }
            if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
                $data['last_name'] = $object->getLastName();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $object->getAddress();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postal_code'] = $object->getPostalCode();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['country_code'] = $object->getCountryCode();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('fax') && null !== $object->getFax()) {
                $data['fax'] = $object->getFax();
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['phone'] = $object->getPhone();
            }
            if ($object->isInitialized('languageCode') && null !== $object->getLanguageCode()) {
                $data['language_code'] = $object->getLanguageCode();
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['company_name'] = $object->getCompanyName();
            }
            if ($object->isInitialized('enterpriseNumber') && null !== $object->getEnterpriseNumber()) {
                $data['enterprise_number'] = $object->getEnterpriseNumber();
            }
            if ($object->isInitialized('extraFields') && null !== $object->getExtraFields()) {
                $values = [];
                foreach ($object->getExtraFields() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['extra_fields'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\RegistrantInput::class => false];
        }
    }
} else {
    class RegistrantInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\RegistrantInput::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\RegistrantInput::class;
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
            $object = new \Combell\Client\Model\RegistrantInput();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('first_name', $data)) {
                $object->setFirstName($data['first_name']);
            }
            if (\array_key_exists('last_name', $data)) {
                $object->setLastName($data['last_name']);
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($data['address']);
            }
            if (\array_key_exists('postal_code', $data)) {
                $object->setPostalCode($data['postal_code']);
            }
            if (\array_key_exists('city', $data)) {
                $object->setCity($data['city']);
            }
            if (\array_key_exists('country_code', $data)) {
                $object->setCountryCode($data['country_code']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
            }
            if (\array_key_exists('fax', $data)) {
                $object->setFax($data['fax']);
            }
            if (\array_key_exists('phone', $data)) {
                $object->setPhone($data['phone']);
            }
            if (\array_key_exists('language_code', $data)) {
                $object->setLanguageCode($data['language_code']);
            }
            if (\array_key_exists('company_name', $data)) {
                $object->setCompanyName($data['company_name']);
            }
            if (\array_key_exists('enterprise_number', $data)) {
                $object->setEnterpriseNumber($data['enterprise_number']);
            }
            if (\array_key_exists('extra_fields', $data)) {
                $values = [];
                foreach ($data['extra_fields'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\ExtraField::class, 'json', $context);
                }
                $object->setExtraFields($values);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['first_name'] = $object->getFirstName();
            }
            if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
                $data['last_name'] = $object->getLastName();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $object->getAddress();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postal_code'] = $object->getPostalCode();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['country_code'] = $object->getCountryCode();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('fax') && null !== $object->getFax()) {
                $data['fax'] = $object->getFax();
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['phone'] = $object->getPhone();
            }
            if ($object->isInitialized('languageCode') && null !== $object->getLanguageCode()) {
                $data['language_code'] = $object->getLanguageCode();
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['company_name'] = $object->getCompanyName();
            }
            if ($object->isInitialized('enterpriseNumber') && null !== $object->getEnterpriseNumber()) {
                $data['enterprise_number'] = $object->getEnterpriseNumber();
            }
            if ($object->isInitialized('extraFields') && null !== $object->getExtraFields()) {
                $values = [];
                foreach ($object->getExtraFields() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['extra_fields'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\RegistrantInput::class => false];
        }
    }
}