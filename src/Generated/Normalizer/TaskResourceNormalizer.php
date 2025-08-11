<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            unset($data['taskId']);
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
        if (\array_key_exists('taskStatus', $data)) {
            $object->setTaskStatus($data['taskStatus']);
            unset($data['taskStatus']);
        }
        if (\array_key_exists('params', $data) && $data['params'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['params'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setParams($values);
            unset($data['params']);
        }
        elseif (\array_key_exists('params', $data) && $data['params'] === null) {
            $object->setParams(null);
        }
        if (\array_key_exists('notBefore', $data)) {
            $object->setNotBefore(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['notBefore']));
            unset($data['notBefore']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['taskId'] = $data->getTaskId();
        $dataArray['identityId'] = $data->getIdentityId();
        if ($data->isInitialized('projectId') && null !== $data->getProjectId()) {
            $dataArray['projectId'] = $data->getProjectId();
        }
        $dataArray['taskType'] = $data->getTaskType();
        $dataArray['taskStatus'] = $data->getTaskStatus();
        if ($data->isInitialized('params') && null !== $data->getParams()) {
            $values = [];
            foreach ($data->getParams() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['params'] = $values;
        }
        if ($data->isInitialized('notBefore') && null !== $data->getNotBefore()) {
            $dataArray['notBefore'] = $data->getNotBefore()?->format('Y-m-d\TH:i:sP');
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource::class => false];
    }
}