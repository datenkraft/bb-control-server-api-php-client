<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\TaskTemplateResource';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
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
            unset($data['taskTemplateId']);
        }
        if (\array_key_exists('identityId', $data)) {
            $object->setIdentityId($data['identityId']);
            unset($data['identityId']);
        }
        if (\array_key_exists('projectId', $data) && $data['projectId'] !== null) {
            $object->setProjectId($data['projectId']);
            unset($data['projectId']);
        }
        elseif (\array_key_exists('projectId', $data) && $data['projectId'] === null) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('taskType', $data)) {
            $object->setTaskType($data['taskType']);
            unset($data['taskType']);
        }
        if (\array_key_exists('paramsTemplate', $data)) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['paramsTemplate'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setParamsTemplate($values);
            unset($data['paramsTemplate']);
        }
        if (\array_key_exists('schedule', $data)) {
            $object->setSchedule($data['schedule']);
            unset($data['schedule']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        if (\array_key_exists('lastStartDate', $data)) {
            $object->setLastStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastStartDate']));
            unset($data['lastStartDate']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
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
        if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
            $data['projectId'] = $object->getProjectId();
        }
        $data['taskType'] = $object->getTaskType();
        $values = array();
        foreach ($object->getParamsTemplate() as $key => $value) {
            $values[$key] = $value;
        }
        $data['paramsTemplate'] = $values;
        $data['schedule'] = $object->getSchedule();
        $data['active'] = $object->getActive();
        $data['lastStartDate'] = $object->getLastStartDate()->format('Y-m-d\\TH:i:sP');
        foreach ($object as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_1;
            }
        }
        return $data;
    }
}