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
class WindowsHostingDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Combell\\Client\\Model\\WindowsHostingDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Combell\\Client\\Model\\WindowsHostingDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Combell\Client\Model\WindowsHostingDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('domain_name', $data)) {
            $object->setDomainName($data['domain_name']);
        }
        if (\array_key_exists('servicepack_id', $data)) {
            $object->setServicepackId($data['servicepack_id']);
        }
        if (\array_key_exists('max_size', $data)) {
            $object->setMaxSize($data['max_size']);
        }
        if (\array_key_exists('actual_size', $data)) {
            $object->setActualSize($data['actual_size']);
        }
        if (\array_key_exists('ip', $data)) {
            $object->setIp($data['ip']);
        }
        if (\array_key_exists('ip_type', $data)) {
            $object->setIpType($data['ip_type']);
        }
        if (\array_key_exists('ftp_username', $data)) {
            $object->setFtpUsername($data['ftp_username']);
        }
        if (\array_key_exists('application_pool', $data)) {
            $object->setApplicationPool($this->denormalizer->denormalize($data['application_pool'], 'Combell\\Client\\Model\\ApplicationPool', 'json', $context));
        }
        if (\array_key_exists('sites', $data)) {
            $values = array();
            foreach ($data['sites'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Combell\\Client\\Model\\WindowsSite', 'json', $context);
            }
            $object->setSites($values);
        }
        if (\array_key_exists('mssql_database_names', $data)) {
            $values_1 = array();
            foreach ($data['mssql_database_names'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setMssqlDatabaseNames($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDomainName()) {
            $data['domain_name'] = $object->getDomainName();
        }
        if (null !== $object->getServicepackId()) {
            $data['servicepack_id'] = $object->getServicepackId();
        }
        if (null !== $object->getMaxSize()) {
            $data['max_size'] = $object->getMaxSize();
        }
        if (null !== $object->getActualSize()) {
            $data['actual_size'] = $object->getActualSize();
        }
        if (null !== $object->getIp()) {
            $data['ip'] = $object->getIp();
        }
        if (null !== $object->getIpType()) {
            $data['ip_type'] = $object->getIpType();
        }
        if (null !== $object->getFtpUsername()) {
            $data['ftp_username'] = $object->getFtpUsername();
        }
        if (null !== $object->getApplicationPool()) {
            $data['application_pool'] = $this->normalizer->normalize($object->getApplicationPool(), 'json', $context);
        }
        if (null !== $object->getSites()) {
            $values = array();
            foreach ($object->getSites() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['sites'] = $values;
        }
        if (null !== $object->getMssqlDatabaseNames()) {
            $values_1 = array();
            foreach ($object->getMssqlDatabaseNames() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['mssql_database_names'] = $values_1;
        }
        return $data;
    }
}