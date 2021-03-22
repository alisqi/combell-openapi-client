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

class RegisterDomainNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Combell\\Client\\Model\\RegisterDomain';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Combell\\Client\\Model\\RegisterDomain';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Combell\Client\Model\RegisterDomain();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('domain_name', $data)) {
            $object->setDomainName($data['domain_name']);
        }
        if (\array_key_exists('name_servers', $data)) {
            $values = array();
            foreach ($data['name_servers'] as $value) {
                $values[] = $value;
            }
            $object->setNameServers($values);
        }
        if (\array_key_exists('registrant', $data)) {
            $object->setRegistrant($this->denormalizer->denormalize($data['registrant'], 'Combell\\Client\\Model\\RegistrantInput', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDomainName()) {
            $data['domain_name'] = $object->getDomainName();
        }
        if (null !== $object->getNameServers()) {
            $values = array();
            foreach ($object->getNameServers() as $value) {
                $values[] = $value;
            }
            $data['name_servers'] = $values;
        }
        if (null !== $object->getRegistrant()) {
            $data['registrant'] = $this->normalizer->normalize($object->getRegistrant(), 'json', $context);
        }
        return $data;
    }
}
