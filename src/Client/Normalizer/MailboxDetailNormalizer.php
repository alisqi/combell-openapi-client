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
    class MailboxDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\MailboxDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\MailboxDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Combell\Client\Model\MailboxDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('login', $data)) {
                $object->setLogin($data['login']);
            }
            if (\array_key_exists('max_size', $data)) {
                $object->setMaxSize($data['max_size']);
            }
            if (\array_key_exists('actual_size', $data)) {
                $object->setActualSize($data['actual_size']);
            }
            if (\array_key_exists('auto_reply', $data)) {
                $object->setAutoReply($this->denormalizer->denormalize($data['auto_reply'], \Combell\Client\Model\AutoReply::class, 'json', $context));
            }
            if (\array_key_exists('auto_forward', $data)) {
                $object->setAutoForward($this->denormalizer->denormalize($data['auto_forward'], \Combell\Client\Model\AutoForward::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('login') && null !== $object->getLogin()) {
                $data['login'] = $object->getLogin();
            }
            if ($object->isInitialized('maxSize') && null !== $object->getMaxSize()) {
                $data['max_size'] = $object->getMaxSize();
            }
            if ($object->isInitialized('actualSize') && null !== $object->getActualSize()) {
                $data['actual_size'] = $object->getActualSize();
            }
            if ($object->isInitialized('autoReply') && null !== $object->getAutoReply()) {
                $data['auto_reply'] = $this->normalizer->normalize($object->getAutoReply(), 'json', $context);
            }
            if ($object->isInitialized('autoForward') && null !== $object->getAutoForward()) {
                $data['auto_forward'] = $this->normalizer->normalize($object->getAutoForward(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\MailboxDetail::class => false];
        }
    }
} else {
    class MailboxDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Combell\Client\Model\MailboxDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Combell\Client\Model\MailboxDetail::class;
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
            $object = new \Combell\Client\Model\MailboxDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('login', $data)) {
                $object->setLogin($data['login']);
            }
            if (\array_key_exists('max_size', $data)) {
                $object->setMaxSize($data['max_size']);
            }
            if (\array_key_exists('actual_size', $data)) {
                $object->setActualSize($data['actual_size']);
            }
            if (\array_key_exists('auto_reply', $data)) {
                $object->setAutoReply($this->denormalizer->denormalize($data['auto_reply'], \Combell\Client\Model\AutoReply::class, 'json', $context));
            }
            if (\array_key_exists('auto_forward', $data)) {
                $object->setAutoForward($this->denormalizer->denormalize($data['auto_forward'], \Combell\Client\Model\AutoForward::class, 'json', $context));
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
            if ($object->isInitialized('login') && null !== $object->getLogin()) {
                $data['login'] = $object->getLogin();
            }
            if ($object->isInitialized('maxSize') && null !== $object->getMaxSize()) {
                $data['max_size'] = $object->getMaxSize();
            }
            if ($object->isInitialized('actualSize') && null !== $object->getActualSize()) {
                $data['actual_size'] = $object->getActualSize();
            }
            if ($object->isInitialized('autoReply') && null !== $object->getAutoReply()) {
                $data['auto_reply'] = $this->normalizer->normalize($object->getAutoReply(), 'json', $context);
            }
            if ($object->isInitialized('autoForward') && null !== $object->getAutoForward()) {
                $data['auto_forward'] = $this->normalizer->normalize($object->getAutoForward(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Combell\Client\Model\MailboxDetail::class => false];
        }
    }
}