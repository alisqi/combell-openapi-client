<?php

namespace Combell\Client\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Combell\Client\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MailboxDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Combell\\Client\\Model\\MailboxDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Combell\\Client\\Model\\MailboxDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
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
            $object->setAutoReply($this->denormalizer->denormalize($data['auto_reply'], 'Combell\\Client\\Model\\AutoReply', 'json', $context));
        }
        if (\array_key_exists('auto_forward', $data)) {
            $object->setAutoForward($this->denormalizer->denormalize($data['auto_forward'], 'Combell\\Client\\Model\\AutoForward', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getLogin()) {
            $data['login'] = $object->getLogin();
        }
        if (null !== $object->getMaxSize()) {
            $data['max_size'] = $object->getMaxSize();
        }
        if (null !== $object->getActualSize()) {
            $data['actual_size'] = $object->getActualSize();
        }
        if (null !== $object->getAutoReply()) {
            $data['auto_reply'] = $this->normalizer->normalize($object->getAutoReply(), 'json', $context);
        }
        if (null !== $object->getAutoForward()) {
            $data['auto_forward'] = $this->normalizer->normalize($object->getAutoForward(), 'json', $context);
        }
        return $data;
    }
}
