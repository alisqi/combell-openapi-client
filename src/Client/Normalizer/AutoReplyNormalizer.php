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
    class AutoReplyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\AutoReply::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\AutoReply::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\AutoReply();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('enabled', $data)) {
                $object->setEnabled($data['enabled']);
            }
            if (\array_key_exists('subject', $data)) {
                $object->setSubject($data['subject']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('enabled') && null !== $object->getEnabled()) {
                $data['enabled'] = $object->getEnabled();
            }
            if ($object->isInitialized('subject') && null !== $object->getSubject()) {
                $data['subject'] = $object->getSubject();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['message'] = $object->getMessage();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\AutoReply::class => false];
        }
    }
} else {
    class AutoReplyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\AutoReply::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\AutoReply::class;
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
            $object = new \Combell\Client\Model\AutoReply();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('enabled', $data)) {
                $object->setEnabled($data['enabled']);
            }
            if (\array_key_exists('subject', $data)) {
                $object->setSubject($data['subject']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('enabled') && null !== $object->getEnabled()) {
                $data['enabled'] = $object->getEnabled();
            }
            if ($object->isInitialized('subject') && null !== $object->getSubject()) {
                $data['subject'] = $object->getSubject();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['message'] = $object->getMessage();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\AutoReply::class => false];
        }
    }
}