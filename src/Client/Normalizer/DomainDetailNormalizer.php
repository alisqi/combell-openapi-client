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
    class DomainDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\DomainDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\DomainDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\DomainDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('domain_name', $data)) {
                $object->setDomainName($data['domain_name']);
            }
            if (\array_key_exists('expiration_date', $data)) {
                $object->setExpirationDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expiration_date']));
            }
            if (\array_key_exists('will_renew', $data)) {
                $object->setWillRenew($data['will_renew']);
            }
            if (\array_key_exists('name_servers', $data)) {
                $values = [];
                foreach ($data['name_servers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\NameServer::class, 'json', $context);
                }
                $object->setNameServers($values);
            }
            if (\array_key_exists('registrant', $data)) {
                $object->setRegistrant($this->denormalizer->denormalize($data['registrant'], \Combell\Client\Model\Registrant::class, 'json', $context));
            }
            if (\array_key_exists('can_toggle_renew', $data)) {
                $object->setCanToggleRenew($data['can_toggle_renew']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('domainName') && null !== $object->getDomainName()) {
                $data['domain_name'] = $object->getDomainName();
            }
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expiration_date'] = $object->getExpirationDate()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('willRenew') && null !== $object->getWillRenew()) {
                $data['will_renew'] = $object->getWillRenew();
            }
            if ($object->isInitialized('nameServers') && null !== $object->getNameServers()) {
                $values = [];
                foreach ($object->getNameServers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['name_servers'] = $values;
            }
            if ($object->isInitialized('registrant') && null !== $object->getRegistrant()) {
                $data['registrant'] = $this->normalizer->normalize($object->getRegistrant(), 'json', $context);
            }
            if ($object->isInitialized('canToggleRenew') && null !== $object->getCanToggleRenew()) {
                $data['can_toggle_renew'] = $object->getCanToggleRenew();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\DomainDetail::class => false];
        }
    }
} else {
    class DomainDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\DomainDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\DomainDetail::class;
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
            $object = new \Combell\Client\Model\DomainDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('domain_name', $data)) {
                $object->setDomainName($data['domain_name']);
            }
            if (\array_key_exists('expiration_date', $data)) {
                $object->setExpirationDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expiration_date']));
            }
            if (\array_key_exists('will_renew', $data)) {
                $object->setWillRenew($data['will_renew']);
            }
            if (\array_key_exists('name_servers', $data)) {
                $values = [];
                foreach ($data['name_servers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\NameServer::class, 'json', $context);
                }
                $object->setNameServers($values);
            }
            if (\array_key_exists('registrant', $data)) {
                $object->setRegistrant($this->denormalizer->denormalize($data['registrant'], \Combell\Client\Model\Registrant::class, 'json', $context));
            }
            if (\array_key_exists('can_toggle_renew', $data)) {
                $object->setCanToggleRenew($data['can_toggle_renew']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('domainName') && null !== $object->getDomainName()) {
                $data['domain_name'] = $object->getDomainName();
            }
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expiration_date'] = $object->getExpirationDate()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('willRenew') && null !== $object->getWillRenew()) {
                $data['will_renew'] = $object->getWillRenew();
            }
            if ($object->isInitialized('nameServers') && null !== $object->getNameServers()) {
                $values = [];
                foreach ($object->getNameServers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['name_servers'] = $values;
            }
            if ($object->isInitialized('registrant') && null !== $object->getRegistrant()) {
                $data['registrant'] = $this->normalizer->normalize($object->getRegistrant(), 'json', $context);
            }
            if ($object->isInitialized('canToggleRenew') && null !== $object->getCanToggleRenew()) {
                $data['can_toggle_renew'] = $object->getCanToggleRenew();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\DomainDetail::class => false];
        }
    }
}