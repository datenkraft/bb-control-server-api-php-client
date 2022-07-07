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
class TaskTemplateResourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\TaskTemplateResource';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\TaskTemplateResource';
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
        $object = new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('taskTemplateId', $data)) {
            $object->setTaskTemplateId($data['taskTemplateId']);
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
        if (\array_key_exists('paramsTemplate', $data)) {
            $object->setParamsTemplate($data['paramsTemplate']);
        }
        if (\array_key_exists('params', $data) && $data['params'] !== null) {
            $object->setParams($data['params']);
        }
        elseif (\array_key_exists('params', $data) && $data['params'] === null) {
            $object->setParams(null);
        }
        if (\array_key_exists('lastStartDate', $data)) {
            $object->setLastStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastStartDate']));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['taskTemplateId'] = $object->getTaskTemplateId();
        $data['identityId'] = $object->getIdentityId();
        if (null !== $object->getProjectId()) {
            $data['projectId'] = $object->getProjectId();
        }
        $data['taskType'] = $object->getTaskType();
        $data['paramsTemplate'] = $object->getParamsTemplate();
        if (null !== $object->getParams()) {
            $data['params'] = $object->getParams();
        }
        $data['lastStartDate'] = $object->getLastStartDate()->format('Y-m-d\\TH:i:sP');
        return $data;
    }
}