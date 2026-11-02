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
class TaskTemplateResourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('taskTemplateId', $data)) {
            $object->taskTemplateId = $data['taskTemplateId'];
            unset($data['taskTemplateId']);
        }
        if (\array_key_exists('lastStartDate', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastStartDate']);
            if (false === $date) {
                if (is_string($data['lastStartDate']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['lastStartDate'])) {
                    try {
                        $date = new \DateTime($data['lastStartDate']);
                    } catch (\Exception) {
                        throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Normalizer\InvalidDateException($data['lastStartDate'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Normalizer\InvalidDateException($data['lastStartDate'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->lastStartDate = $date;
            unset($data['lastStartDate']);
        }
        if (\array_key_exists('identityId', $data)) {
            $object->identityId = $data['identityId'];
            unset($data['identityId']);
        }
        if (\array_key_exists('projectId', $data) && $data['projectId'] !== null) {
            $object->projectId = $data['projectId'];
            unset($data['projectId']);
        }
        elseif (\array_key_exists('projectId', $data)) {
            $object->projectId = null;
            unset($data['projectId']);
        }
        if (\array_key_exists('taskType', $data)) {
            $object->taskType = $data['taskType'];
            unset($data['taskType']);
        }
        if (\array_key_exists('paramsTemplate', $data)) {
            $values = new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\JsonObject();
            foreach ($data['paramsTemplate'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->paramsTemplate = $values;
            unset($data['paramsTemplate']);
        }
        if (\array_key_exists('schedule', $data)) {
            $object->schedule = $data['schedule'];
            unset($data['schedule']);
        }
        if (\array_key_exists('active', $data)) {
            $object->active = $data['active'];
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
        if (array_key_exists('taskTemplateId', get_object_vars($data)) && null !== ($data->taskTemplateId ?? null)) {
            $dataArray['taskTemplateId'] = $data->taskTemplateId;
        }
        if (array_key_exists('lastStartDate', get_object_vars($data)) && null !== ($data->lastStartDate ?? null)) {
            $dataArray['lastStartDate'] = $data->lastStartDate->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('identityId', get_object_vars($data)) && null !== ($data->identityId ?? null)) {
            $dataArray['identityId'] = $data->identityId;
        }
        if (array_key_exists('projectId', get_object_vars($data)) && null !== ($data->projectId ?? null)) {
            $dataArray['projectId'] = $data->projectId;
        }
        if (array_key_exists('taskType', get_object_vars($data)) && null !== ($data->taskType ?? null)) {
            $dataArray['taskType'] = $data->taskType;
        }
        if (array_key_exists('paramsTemplate', get_object_vars($data)) && null !== ($data->paramsTemplate ?? null)) {
            $values = new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\JsonObject();
            foreach ($data->paramsTemplate as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['paramsTemplate'] = $values;
        }
        if (array_key_exists('schedule', get_object_vars($data)) && null !== ($data->schedule ?? null)) {
            $dataArray['schedule'] = $data->schedule;
        }
        if (array_key_exists('active', get_object_vars($data)) && null !== ($data->active ?? null)) {
            $dataArray['active'] = $data->active;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource::class => false];
    }
}