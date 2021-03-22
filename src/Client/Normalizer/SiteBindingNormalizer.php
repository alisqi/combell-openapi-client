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

class SiteBindingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Combell\\Client\\Model\\SiteBinding';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Combell\\Client\\Model\\SiteBinding';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Combell\Client\Model\SiteBinding();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('protocol', $data)) {
            $object->setProtocol($data['protocol']);
        }
        if (\array_key_exists('host_name', $data)) {
            $object->setHostName($data['host_name']);
        }
        if (\array_key_exists('ip_address', $data)) {
            $object->setIpAddress($data['ip_address']);
        }
        if (\array_key_exists('port', $data)) {
            $object->setPort($data['port']);
        }
        if (\array_key_exists('cert_thumbprint', $data)) {
            $object->setCertThumbprint($data['cert_thumbprint']);
        }
        if (\array_key_exists('ssl_enabled', $data)) {
            $object->setSslEnabled($data['ssl_enabled']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getProtocol()) {
            $data['protocol'] = $object->getProtocol();
        }
        if (null !== $object->getHostName()) {
            $data['host_name'] = $object->getHostName();
        }
        if (null !== $object->getIpAddress()) {
            $data['ip_address'] = $object->getIpAddress();
        }
        if (null !== $object->getPort()) {
            $data['port'] = $object->getPort();
        }
        if (null !== $object->getCertThumbprint()) {
            $data['cert_thumbprint'] = $object->getCertThumbprint();
        }
        if (null !== $object->getSslEnabled()) {
            $data['ssl_enabled'] = $object->getSslEnabled();
        }
        return $data;
    }
}
