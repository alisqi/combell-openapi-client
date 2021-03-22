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

class DomainDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Combell\\Client\\Model\\DomainDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Combell\\Client\\Model\\DomainDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Combell\Client\Model\DomainDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('domain_name', $data)) {
            $object->setDomainName($data['domain_name']);
        }
        if (\array_key_exists('expiration_date', $data)) {
            $object->setExpirationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['expiration_date']));
        }
        if (\array_key_exists('will_renew', $data)) {
            $object->setWillRenew($data['will_renew']);
        }
        if (\array_key_exists('name_servers', $data)) {
            $values = array();
            foreach ($data['name_servers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Combell\\Client\\Model\\NameServer', 'json', $context);
            }
            $object->setNameServers($values);
        }
        if (\array_key_exists('registrant', $data)) {
            $object->setRegistrant($this->denormalizer->denormalize($data['registrant'], 'Combell\\Client\\Model\\Registrant', 'json', $context));
        }
        if (\array_key_exists('can_toggle_renew', $data)) {
            $object->setCanToggleRenew($data['can_toggle_renew']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDomainName()) {
            $data['domain_name'] = $object->getDomainName();
        }
        if (null !== $object->getExpirationDate()) {
            $data['expiration_date'] = $object->getExpirationDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getWillRenew()) {
            $data['will_renew'] = $object->getWillRenew();
        }
        if (null !== $object->getNameServers()) {
            $values = array();
            foreach ($object->getNameServers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['name_servers'] = $values;
        }
        if (null !== $object->getRegistrant()) {
            $data['registrant'] = $this->normalizer->normalize($object->getRegistrant(), 'json', $context);
        }
        if (null !== $object->getCanToggleRenew()) {
            $data['can_toggle_renew'] = $object->getCanToggleRenew();
        }
        return $data;
    }
}
