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

class SslCertificateDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Combell\\Client\\Model\\SslCertificateDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Combell\\Client\\Model\\SslCertificateDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Combell\Client\Model\SslCertificateDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sha1_fingerprint', $data)) {
            $object->setSha1Fingerprint($data['sha1_fingerprint']);
        }
        if (\array_key_exists('common_name', $data)) {
            $object->setCommonName($data['common_name']);
        }
        if (\array_key_exists('expires_after', $data)) {
            $object->setExpiresAfter(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['expires_after']));
        }
        if (\array_key_exists('validation_level', $data)) {
            $object->setValidationLevel($data['validation_level']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('subject_alt_names', $data)) {
            $values = array();
            foreach ($data['subject_alt_names'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Combell\\Client\\Model\\SslSubjectAltName', 'json', $context);
            }
            $object->setSubjectAltNames($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSha1Fingerprint()) {
            $data['sha1_fingerprint'] = $object->getSha1Fingerprint();
        }
        if (null !== $object->getCommonName()) {
            $data['common_name'] = $object->getCommonName();
        }
        if (null !== $object->getExpiresAfter()) {
            $data['expires_after'] = $object->getExpiresAfter()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getValidationLevel()) {
            $data['validation_level'] = $object->getValidationLevel();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getSubjectAltNames()) {
            $values = array();
            foreach ($object->getSubjectAltNames() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['subject_alt_names'] = $values;
        }
        return $data;
    }
}
