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

class ApplicationPoolNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Combell\\Client\\Model\\ApplicationPool';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Combell\\Client\\Model\\ApplicationPool';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Combell\Client\Model\ApplicationPool();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('runtime', $data)) {
            $object->setRuntime($data['runtime']);
        }
        if (\array_key_exists('pipeline_mode', $data)) {
            $object->setPipelineMode($data['pipeline_mode']);
        }
        if (\array_key_exists('installed_net_core_runtimes', $data)) {
            $values = array();
            foreach ($data['installed_net_core_runtimes'] as $value) {
                $values[] = $value;
            }
            $object->setInstalledNetCoreRuntimes($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRuntime()) {
            $data['runtime'] = $object->getRuntime();
        }
        if (null !== $object->getPipelineMode()) {
            $data['pipeline_mode'] = $object->getPipelineMode();
        }
        if (null !== $object->getInstalledNetCoreRuntimes()) {
            $values = array();
            foreach ($object->getInstalledNetCoreRuntimes() as $value) {
                $values[] = $value;
            }
            $data['installed_net_core_runtimes'] = $values;
        }
        return $data;
    }
}
