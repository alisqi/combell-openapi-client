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

class SshKeyDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Combell\\Client\\Model\\SshKeyDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Combell\\Client\\Model\\SshKeyDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Combell\Client\Model\SshKeyDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('fingerprint', $data)) {
            $object->setFingerprint($data['fingerprint']);
        }
        if (\array_key_exists('public_key', $data)) {
            $object->setPublicKey($data['public_key']);
        }
        if (\array_key_exists('linux_hostings', $data)) {
            $values = array();
            foreach ($data['linux_hostings'] as $value) {
                $values[] = $value;
            }
            $object->setLinuxHostings($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFingerprint()) {
            $data['fingerprint'] = $object->getFingerprint();
        }
        if (null !== $object->getPublicKey()) {
            $data['public_key'] = $object->getPublicKey();
        }
        if (null !== $object->getLinuxHostings()) {
            $values = array();
            foreach ($object->getLinuxHostings() as $value) {
                $values[] = $value;
            }
            $data['linux_hostings'] = $values;
        }
        return $data;
    }
}
