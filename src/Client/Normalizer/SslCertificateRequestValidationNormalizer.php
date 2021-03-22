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

class SslCertificateRequestValidationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Combell\\Client\\Model\\SslCertificateRequestValidation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Combell\\Client\\Model\\SslCertificateRequestValidation';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Combell\Client\Model\SslCertificateRequestValidation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dns_name', $data)) {
            $object->setDnsName($data['dns_name']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('auto_validated', $data)) {
            $object->setAutoValidated($data['auto_validated']);
        }
        if (\array_key_exists('email_addresses', $data)) {
            $values = array();
            foreach ($data['email_addresses'] as $value) {
                $values[] = $value;
            }
            $object->setEmailAddresses($values);
        }
        if (\array_key_exists('cname_validation_name', $data)) {
            $object->setCnameValidationName($data['cname_validation_name']);
        }
        if (\array_key_exists('cname_validation_content', $data)) {
            $object->setCnameValidationContent($data['cname_validation_content']);
        }
        if (\array_key_exists('file_validation_url_http', $data)) {
            $object->setFileValidationUrlHttp($data['file_validation_url_http']);
        }
        if (\array_key_exists('file_validation_url_https', $data)) {
            $object->setFileValidationUrlHttps($data['file_validation_url_https']);
        }
        if (\array_key_exists('file_validation_content', $data)) {
            $values_1 = array();
            foreach ($data['file_validation_content'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFileValidationContent($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDnsName()) {
            $data['dns_name'] = $object->getDnsName();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getAutoValidated()) {
            $data['auto_validated'] = $object->getAutoValidated();
        }
        if (null !== $object->getEmailAddresses()) {
            $values = array();
            foreach ($object->getEmailAddresses() as $value) {
                $values[] = $value;
            }
            $data['email_addresses'] = $values;
        }
        if (null !== $object->getCnameValidationName()) {
            $data['cname_validation_name'] = $object->getCnameValidationName();
        }
        if (null !== $object->getCnameValidationContent()) {
            $data['cname_validation_content'] = $object->getCnameValidationContent();
        }
        if (null !== $object->getFileValidationUrlHttp()) {
            $data['file_validation_url_http'] = $object->getFileValidationUrlHttp();
        }
        if (null !== $object->getFileValidationUrlHttps()) {
            $data['file_validation_url_https'] = $object->getFileValidationUrlHttps();
        }
        if (null !== $object->getFileValidationContent()) {
            $values_1 = array();
            foreach ($object->getFileValidationContent() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['file_validation_content'] = $values_1;
        }
        return $data;
    }
}
