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
    class ApplicationPoolNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\ApplicationPool::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\ApplicationPool::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\ApplicationPool();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('runtime', $data)) {
                $object->setRuntime($data['runtime']);
            }
            if (\array_key_exists('pipeline_mode', $data)) {
                $object->setPipelineMode($data['pipeline_mode']);
            }
            if (\array_key_exists('installed_net_core_runtimes', $data)) {
                $values = [];
                foreach ($data['installed_net_core_runtimes'] as $value) {
                    $values[] = $value;
                }
                $object->setInstalledNetCoreRuntimes($values);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('runtime') && null !== $object->getRuntime()) {
                $data['runtime'] = $object->getRuntime();
            }
            if ($object->isInitialized('pipelineMode') && null !== $object->getPipelineMode()) {
                $data['pipeline_mode'] = $object->getPipelineMode();
            }
            if ($object->isInitialized('installedNetCoreRuntimes') && null !== $object->getInstalledNetCoreRuntimes()) {
                $values = [];
                foreach ($object->getInstalledNetCoreRuntimes() as $value) {
                    $values[] = $value;
                }
                $data['installed_net_core_runtimes'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\ApplicationPool::class => false];
        }
    }
} else {
    class ApplicationPoolNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\ApplicationPool::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\ApplicationPool::class;
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
            $object = new \Combell\Client\Model\ApplicationPool();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('runtime', $data)) {
                $object->setRuntime($data['runtime']);
            }
            if (\array_key_exists('pipeline_mode', $data)) {
                $object->setPipelineMode($data['pipeline_mode']);
            }
            if (\array_key_exists('installed_net_core_runtimes', $data)) {
                $values = [];
                foreach ($data['installed_net_core_runtimes'] as $value) {
                    $values[] = $value;
                }
                $object->setInstalledNetCoreRuntimes($values);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('runtime') && null !== $object->getRuntime()) {
                $data['runtime'] = $object->getRuntime();
            }
            if ($object->isInitialized('pipelineMode') && null !== $object->getPipelineMode()) {
                $data['pipeline_mode'] = $object->getPipelineMode();
            }
            if ($object->isInitialized('installedNetCoreRuntimes') && null !== $object->getInstalledNetCoreRuntimes()) {
                $values = [];
                foreach ($object->getInstalledNetCoreRuntimes() as $value) {
                    $values[] = $value;
                }
                $data['installed_net_core_runtimes'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\ApplicationPool::class => false];
        }
    }
}