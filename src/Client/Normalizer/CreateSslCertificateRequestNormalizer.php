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
class CreateSslCertificateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Combell\\Client\\Model\\CreateSslCertificateRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Combell\\Client\\Model\\CreateSslCertificateRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Combell\Client\Model\CreateSslCertificateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('csr', $data)) {
            $object->setCsr($data['csr']);
        }
        if (\array_key_exists('certificate_type', $data)) {
            $object->setCertificateType($data['certificate_type']);
        }
        if (\array_key_exists('validation_level', $data)) {
            $object->setValidationLevel($data['validation_level']);
        }
        if (\array_key_exists('additional_validation_attributes', $data)) {
            $values = array();
            foreach ($data['additional_validation_attributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Combell\\Client\\Model\\AdditionalValidationAttribute', 'json', $context);
            }
            $object->setAdditionalValidationAttributes($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCsr()) {
            $data['csr'] = $object->getCsr();
        }
        if (null !== $object->getCertificateType()) {
            $data['certificate_type'] = $object->getCertificateType();
        }
        if (null !== $object->getValidationLevel()) {
            $data['validation_level'] = $object->getValidationLevel();
        }
        if (null !== $object->getAdditionalValidationAttributes()) {
            $values = array();
            foreach ($object->getAdditionalValidationAttributes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['additional_validation_attributes'] = $values;
        }
        return $data;
    }
}