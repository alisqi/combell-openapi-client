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
class AccountDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Combell\\Client\\Model\\AccountDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Combell\\Client\\Model\\AccountDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Combell\Client\Model\AccountDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('identifier', $data)) {
            $object->setIdentifier($data['identifier']);
        }
        if (\array_key_exists('servicepack', $data)) {
            $object->setServicepack($this->denormalizer->denormalize($data['servicepack'], 'Combell\\Client\\Model\\Servicepack', 'json', $context));
        }
        if (\array_key_exists('addons', $data)) {
            $values = array();
            foreach ($data['addons'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Combell\\Client\\Model\\Addon', 'json', $context);
            }
            $object->setAddons($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIdentifier()) {
            $data['identifier'] = $object->getIdentifier();
        }
        if (null !== $object->getServicepack()) {
            $data['servicepack'] = $this->normalizer->normalize($object->getServicepack(), 'json', $context);
        }
        if (null !== $object->getAddons()) {
            $values = array();
            foreach ($object->getAddons() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['addons'] = $values;
        }
        return $data;
    }
}