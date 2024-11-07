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
    class DnsRecordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\DnsRecord::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\DnsRecord::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\DnsRecord();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('record_name', $data)) {
                $object->setRecordName($data['record_name']);
            }
            if (\array_key_exists('ttl', $data)) {
                $object->setTtl($data['ttl']);
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($data['content']);
            }
            if (\array_key_exists('priority', $data)) {
                $object->setPriority($data['priority']);
            }
            if (\array_key_exists('service', $data)) {
                $object->setService($data['service']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($data['weight']);
            }
            if (\array_key_exists('target', $data)) {
                $object->setTarget($data['target']);
            }
            if (\array_key_exists('protocol', $data)) {
                $object->setProtocol($data['protocol']);
            }
            if (\array_key_exists('port', $data)) {
                $object->setPort($data['port']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('recordName') && null !== $object->getRecordName()) {
                $data['record_name'] = $object->getRecordName();
            }
            if ($object->isInitialized('ttl') && null !== $object->getTtl()) {
                $data['ttl'] = $object->getTtl();
            }
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $data['content'] = $object->getContent();
            }
            if ($object->isInitialized('priority') && null !== $object->getPriority()) {
                $data['priority'] = $object->getPriority();
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['service'] = $object->getService();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $object->getWeight();
            }
            if ($object->isInitialized('target') && null !== $object->getTarget()) {
                $data['target'] = $object->getTarget();
            }
            if ($object->isInitialized('protocol') && null !== $object->getProtocol()) {
                $data['protocol'] = $object->getProtocol();
            }
            if ($object->isInitialized('port') && null !== $object->getPort()) {
                $data['port'] = $object->getPort();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\DnsRecord::class => false];
        }
    }
} else {
    class DnsRecordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\DnsRecord::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\DnsRecord::class;
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
            $object = new \Combell\Client\Model\DnsRecord();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('record_name', $data)) {
                $object->setRecordName($data['record_name']);
            }
            if (\array_key_exists('ttl', $data)) {
                $object->setTtl($data['ttl']);
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($data['content']);
            }
            if (\array_key_exists('priority', $data)) {
                $object->setPriority($data['priority']);
            }
            if (\array_key_exists('service', $data)) {
                $object->setService($data['service']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($data['weight']);
            }
            if (\array_key_exists('target', $data)) {
                $object->setTarget($data['target']);
            }
            if (\array_key_exists('protocol', $data)) {
                $object->setProtocol($data['protocol']);
            }
            if (\array_key_exists('port', $data)) {
                $object->setPort($data['port']);
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
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('recordName') && null !== $object->getRecordName()) {
                $data['record_name'] = $object->getRecordName();
            }
            if ($object->isInitialized('ttl') && null !== $object->getTtl()) {
                $data['ttl'] = $object->getTtl();
            }
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $data['content'] = $object->getContent();
            }
            if ($object->isInitialized('priority') && null !== $object->getPriority()) {
                $data['priority'] = $object->getPriority();
            }
            if ($object->isInitialized('service') && null !== $object->getService()) {
                $data['service'] = $object->getService();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $object->getWeight();
            }
            if ($object->isInitialized('target') && null !== $object->getTarget()) {
                $data['target'] = $object->getTarget();
            }
            if ($object->isInitialized('protocol') && null !== $object->getProtocol()) {
                $data['protocol'] = $object->getProtocol();
            }
            if ($object->isInitialized('port') && null !== $object->getPort()) {
                $data['port'] = $object->getPort();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\DnsRecord::class => false];
        }
    }
}