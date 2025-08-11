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
class PatchTaskTemplateResourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PatchTaskTemplateResource::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PatchTaskTemplateResource::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PatchTaskTemplateResource();
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
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
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
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
        if ($data->isInitialized('projectId') && null !== $data->getProjectId()) {
            $dataArray['projectId'] = $data->getProjectId();
        }
        if ($data->isInitialized('taskType') && null !== $data->getTaskType()) {
            $dataArray['taskType'] = $data->getTaskType();
        }
        if ($data->isInitialized('paramsTemplate') && null !== $data->getParamsTemplate()) {
            $values = [];
            foreach ($data->getParamsTemplate() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['paramsTemplate'] = $values;
        }
        if ($data->isInitialized('schedule') && null !== $data->getSchedule()) {
            $dataArray['schedule'] = $data->getSchedule();
        }
        if ($data->isInitialized('active') && null !== $data->getActive()) {
            $dataArray['active'] = $data->getActive();
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
        return [\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PatchTaskTemplateResource::class => false];
    }
}