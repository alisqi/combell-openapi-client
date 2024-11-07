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
    class LinuxSiteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\LinuxSite::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\LinuxSite::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\LinuxSite();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('path', $data)) {
                $object->setPath($data['path']);
            }
            if (\array_key_exists('host_headers', $data)) {
                $values = [];
                foreach ($data['host_headers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\HostHeader::class, 'json', $context);
                }
                $object->setHostHeaders($values);
            }
            if (\array_key_exists('ssl_enabled', $data)) {
                $object->setSslEnabled($data['ssl_enabled']);
            }
            if (\array_key_exists('https_redirect_enabled', $data)) {
                $object->setHttpsRedirectEnabled($data['https_redirect_enabled']);
            }
            if (\array_key_exists('http2_enabled', $data)) {
                $object->setHttp2Enabled($data['http2_enabled']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('path') && null !== $object->getPath()) {
                $data['path'] = $object->getPath();
            }
            if ($object->isInitialized('hostHeaders') && null !== $object->getHostHeaders()) {
                $values = [];
                foreach ($object->getHostHeaders() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['host_headers'] = $values;
            }
            if ($object->isInitialized('sslEnabled') && null !== $object->getSslEnabled()) {
                $data['ssl_enabled'] = $object->getSslEnabled();
            }
            if ($object->isInitialized('httpsRedirectEnabled') && null !== $object->getHttpsRedirectEnabled()) {
                $data['https_redirect_enabled'] = $object->getHttpsRedirectEnabled();
            }
            if ($object->isInitialized('http2Enabled') && null !== $object->getHttp2Enabled()) {
                $data['http2_enabled'] = $object->getHttp2Enabled();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\LinuxSite::class => false];
        }
    }
} else {
    class LinuxSiteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\LinuxSite::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\LinuxSite::class;
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
            $object = new \Combell\Client\Model\LinuxSite();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('path', $data)) {
                $object->setPath($data['path']);
            }
            if (\array_key_exists('host_headers', $data)) {
                $values = [];
                foreach ($data['host_headers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Combell\Client\Model\HostHeader::class, 'json', $context);
                }
                $object->setHostHeaders($values);
            }
            if (\array_key_exists('ssl_enabled', $data)) {
                $object->setSslEnabled($data['ssl_enabled']);
            }
            if (\array_key_exists('https_redirect_enabled', $data)) {
                $object->setHttpsRedirectEnabled($data['https_redirect_enabled']);
            }
            if (\array_key_exists('http2_enabled', $data)) {
                $object->setHttp2Enabled($data['http2_enabled']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('path') && null !== $object->getPath()) {
                $data['path'] = $object->getPath();
            }
            if ($object->isInitialized('hostHeaders') && null !== $object->getHostHeaders()) {
                $values = [];
                foreach ($object->getHostHeaders() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['host_headers'] = $values;
            }
            if ($object->isInitialized('sslEnabled') && null !== $object->getSslEnabled()) {
                $data['ssl_enabled'] = $object->getSslEnabled();
            }
            if ($object->isInitialized('httpsRedirectEnabled') && null !== $object->getHttpsRedirectEnabled()) {
                $data['https_redirect_enabled'] = $object->getHttpsRedirectEnabled();
            }
            if ($object->isInitialized('http2Enabled') && null !== $object->getHttp2Enabled()) {
                $data['http2_enabled'] = $object->getHttp2Enabled();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\LinuxSite::class => false];
        }
    }
}