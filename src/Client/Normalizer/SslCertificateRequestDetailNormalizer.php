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
class SslCertificateRequestDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Combell\\Client\\Model\\SslCertificateRequestDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Combell\\Client\\Model\\SslCertificateRequestDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Combell\Client\Model\SslCertificateRequestDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('certificate_type', $data)) {
            $object->setCertificateType($data['certificate_type']);
        }
        if (\array_key_exists('validation_level', $data)) {
            $object->setValidationLevel($data['validation_level']);
        }
        if (\array_key_exists('vendor', $data)) {
            $object->setVendor($data['vendor']);
        }
        if (\array_key_exists('common_name', $data)) {
            $object->setCommonName($data['common_name']);
        }
        if (\array_key_exists('order_code', $data)) {
            $object->setOrderCode($data['order_code']);
        }
        if (\array_key_exists('subject_alt_names', $data)) {
            $values = array();
            foreach ($data['subject_alt_names'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Combell\\Client\\Model\\SslSubjectAltName', 'json', $context);
            }
            $object->setSubjectAltNames($values);
        }
        if (\array_key_exists('validations', $data)) {
            $values_1 = array();
            foreach ($data['validations'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Combell\\Client\\Model\\SslCertificateRequestValidation', 'json', $context);
            }
            $object->setValidations($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getCertificateType()) {
            $data['certificate_type'] = $object->getCertificateType();
        }
        if (null !== $object->getValidationLevel()) {
            $data['validation_level'] = $object->getValidationLevel();
        }
        if (null !== $object->getVendor()) {
            $data['vendor'] = $object->getVendor();
        }
        if (null !== $object->getCommonName()) {
            $data['common_name'] = $object->getCommonName();
        }
        if (null !== $object->getOrderCode()) {
            $data['order_code'] = $object->getOrderCode();
        }
        if (null !== $object->getSubjectAltNames()) {
            $values = array();
            foreach ($object->getSubjectAltNames() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['subject_alt_names'] = $values;
        }
        if (null !== $object->getValidations()) {
            $values_1 = array();
            foreach ($object->getValidations() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['validations'] = $values_1;
        }
        return $data;
    }
}