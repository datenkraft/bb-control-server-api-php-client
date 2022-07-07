<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TaskResourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\TaskResource';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\TaskResource';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('taskId', $data)) {
            $object->setTaskId($data['taskId']);
        }
        if (\array_key_exists('identityId', $data)) {
            $object->setIdentityId($data['identityId']);
        }
        if (\array_key_exists('projectId', $data) && $data['projectId'] !== null) {
            $object->setProjectId($data['projectId']);
        }
        elseif (\array_key_exists('projectId', $data) && $data['projectId'] === null) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('taskType', $data)) {
            $object->setTaskType($data['taskType']);
        }
        if (\array_key_exists('taskStatus', $data)) {
            $object->setTaskStatus($data['taskStatus']);
        }
        if (\array_key_exists('params', $data) && $data['params'] !== null) {
            $object->setParams($data['params']);
        }
        elseif (\array_key_exists('params', $data) && $data['params'] === null) {
            $object->setParams(null);
        }
        if (\array_key_exists('notBefore', $data)) {
            $object->setNotBefore(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['notBefore']));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['taskId'] = $object->getTaskId();
        $data['identityId'] = $object->getIdentityId();
        if (null !== $object->getProjectId()) {
            $data['projectId'] = $object->getProjectId();
        }
        $data['taskType'] = $object->getTaskType();
        $data['taskStatus'] = $object->getTaskStatus();
        if (null !== $object->getParams()) {
            $data['params'] = $object->getParams();
        }
        if (null !== $object->getNotBefore()) {
            $data['notBefore'] = $object->getNotBefore()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}