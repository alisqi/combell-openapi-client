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

class MailZoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Combell\\Client\\Model\\MailZone';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Combell\\Client\\Model\\MailZone';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Combell\Client\Model\MailZone();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
        }
        if (\array_key_exists('available_accounts', $data)) {
            $values = array();
            foreach ($data['available_accounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Combell\\Client\\Model\\MailZoneAccount', 'json', $context);
            }
            $object->setAvailableAccounts($values);
        }
        if (\array_key_exists('aliases', $data)) {
            $values_1 = array();
            foreach ($data['aliases'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Combell\\Client\\Model\\Alias', 'json', $context);
            }
            $object->setAliases($values_1);
        }
        if (\array_key_exists('anti_spam', $data)) {
            $object->setAntiSpam($this->denormalizer->denormalize($data['anti_spam'], 'Combell\\Client\\Model\\AntiSpam', 'json', $context));
        }
        if (\array_key_exists('catch_all', $data)) {
            $object->setCatchAll($this->denormalizer->denormalize($data['catch_all'], 'Combell\\Client\\Model\\CatchAll', 'json', $context));
        }
        if (\array_key_exists('smtp_domains', $data)) {
            $values_2 = array();
            foreach ($data['smtp_domains'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Combell\\Client\\Model\\SmtpDomain', 'json', $context);
            }
            $object->setSmtpDomains($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getEnabled()) {
            $data['enabled'] = $object->getEnabled();
        }
        if (null !== $object->getAvailableAccounts()) {
            $values = array();
            foreach ($object->getAvailableAccounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['available_accounts'] = $values;
        }
        if (null !== $object->getAliases()) {
            $values_1 = array();
            foreach ($object->getAliases() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['aliases'] = $values_1;
        }
        if (null !== $object->getAntiSpam()) {
            $data['anti_spam'] = $this->normalizer->normalize($object->getAntiSpam(), 'json', $context);
        }
        if (null !== $object->getCatchAll()) {
            $data['catch_all'] = $this->normalizer->normalize($object->getCatchAll(), 'json', $context);
        }
        if (null !== $object->getSmtpDomains()) {
            $values_2 = array();
            foreach ($object->getSmtpDomains() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['smtp_domains'] = $values_2;
        }
        return $data;
    }
}
