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
class LinuxSiteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Combell\\Client\\Model\\LinuxSite';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Combell\\Client\\Model\\LinuxSite';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Combell\Client\Model\LinuxSite();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('path', $data)) {
            $object->setPath($data['path']);
        }
        if (\array_key_exists('host_headers', $data)) {
            $values = array();
            foreach ($data['host_headers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Combell\\Client\\Model\\HostHeader', 'json', $context);
            }
            $object->setHostHeaders($values);
        }
        if (\array_key_exists('ssl_enabled', $data)) {
            $object->setSslEnabled($data['ssl_enabled']);
        }
        if (\array_key_exists('https_redirect_enabled', $data)) {
            $object->setHttpsRedirectEnabled($data['https_redirect_enabled']);
        }
        if (\array_key_exists('http2_enabled', $data)) {
            $object->setHttp2Enabled($data['http2_enabled']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getPath()) {
            $data['path'] = $object->getPath();
        }
        if (null !== $object->getHostHeaders()) {
            $values = array();
            foreach ($object->getHostHeaders() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['host_headers'] = $values;
        }
        if (null !== $object->getSslEnabled()) {
            $data['ssl_enabled'] = $object->getSslEnabled();
        }
        if (null !== $object->getHttpsRedirectEnabled()) {
            $data['https_redirect_enabled'] = $object->getHttpsRedirectEnabled();
        }
        if (null !== $object->getHttp2Enabled()) {
            $data['http2_enabled'] = $object->getHttp2Enabled();
        }
        return $data;
    }
}