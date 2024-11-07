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
    class SiteBindingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\SiteBinding::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\SiteBinding::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\SiteBinding();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('protocol', $data)) {
                $object->setProtocol($data['protocol']);
            }
            if (\array_key_exists('host_name', $data)) {
                $object->setHostName($data['host_name']);
            }
            if (\array_key_exists('ip_address', $data)) {
                $object->setIpAddress($data['ip_address']);
            }
            if (\array_key_exists('port', $data)) {
                $object->setPort($data['port']);
            }
            if (\array_key_exists('cert_thumbprint', $data)) {
                $object->setCertThumbprint($data['cert_thumbprint']);
            }
            if (\array_key_exists('ssl_enabled', $data)) {
                $object->setSslEnabled($data['ssl_enabled']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('protocol') && null !== $object->getProtocol()) {
                $data['protocol'] = $object->getProtocol();
            }
            if ($object->isInitialized('hostName') && null !== $object->getHostName()) {
                $data['host_name'] = $object->getHostName();
            }
            if ($object->isInitialized('ipAddress') && null !== $object->getIpAddress()) {
                $data['ip_address'] = $object->getIpAddress();
            }
            if ($object->isInitialized('port') && null !== $object->getPort()) {
                $data['port'] = $object->getPort();
            }
            if ($object->isInitialized('certThumbprint') && null !== $object->getCertThumbprint()) {
                $data['cert_thumbprint'] = $object->getCertThumbprint();
            }
            if ($object->isInitialized('sslEnabled') && null !== $object->getSslEnabled()) {
                $data['ssl_enabled'] = $object->getSslEnabled();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\SiteBinding::class => false];
        }
    }
} else {
    class SiteBindingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\SiteBinding::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\SiteBinding::class;
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
            $object = new \Combell\Client\Model\SiteBinding();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('protocol', $data)) {
                $object->setProtocol($data['protocol']);
            }
            if (\array_key_exists('host_name', $data)) {
                $object->setHostName($data['host_name']);
            }
            if (\array_key_exists('ip_address', $data)) {
                $object->setIpAddress($data['ip_address']);
            }
            if (\array_key_exists('port', $data)) {
                $object->setPort($data['port']);
            }
            if (\array_key_exists('cert_thumbprint', $data)) {
                $object->setCertThumbprint($data['cert_thumbprint']);
            }
            if (\array_key_exists('ssl_enabled', $data)) {
                $object->setSslEnabled($data['ssl_enabled']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('protocol') && null !== $object->getProtocol()) {
                $data['protocol'] = $object->getProtocol();
            }
            if ($object->isInitialized('hostName') && null !== $object->getHostName()) {
                $data['host_name'] = $object->getHostName();
            }
            if ($object->isInitialized('ipAddress') && null !== $object->getIpAddress()) {
                $data['ip_address'] = $object->getIpAddress();
            }
            if ($object->isInitialized('port') && null !== $object->getPort()) {
                $data['port'] = $object->getPort();
            }
            if ($object->isInitialized('certThumbprint') && null !== $object->getCertThumbprint()) {
                $data['cert_thumbprint'] = $object->getCertThumbprint();
            }
            if ($object->isInitialized('sslEnabled') && null !== $object->getSslEnabled()) {
                $data['ssl_enabled'] = $object->getSslEnabled();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\SiteBinding::class => false];
        }
    }
}