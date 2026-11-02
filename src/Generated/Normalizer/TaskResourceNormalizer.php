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
        $object = new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('taskId', $data)) {
            $object->taskId = $data['taskId'];
            unset($data['taskId']);
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
        if (\array_key_exists('taskStatus', $data)) {
            $object->taskStatus = $data['taskStatus'];
            unset($data['taskStatus']);
        }
        if (\array_key_exists('params', $data) && $data['params'] !== null) {
            $values = new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\JsonObject();
            foreach ($data['params'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->params = $values;
            unset($data['params']);
        }
        elseif (\array_key_exists('params', $data)) {
            $object->params = null;
            unset($data['params']);
        }
        if (\array_key_exists('notBefore', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['notBefore']);
            if (false === $date) {
                if (is_string($data['notBefore']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['notBefore'])) {
                    try {
                        $date = new \DateTime($data['notBefore']);
                    } catch (\Exception) {
                        throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Normalizer\InvalidDateException($data['notBefore'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Normalizer\InvalidDateException($data['notBefore'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->notBefore = $date;
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
        $dataArray['taskId'] = $data->taskId;
        $dataArray['identityId'] = $data->identityId;
        if (array_key_exists('projectId', get_object_vars($data)) && null !== ($data->projectId ?? null)) {
            $dataArray['projectId'] = $data->projectId;
        }
        $dataArray['taskType'] = $data->taskType;
        $dataArray['taskStatus'] = $data->taskStatus;
        if (array_key_exists('params', get_object_vars($data)) && null !== ($data->params ?? null)) {
            $values = new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\JsonObject();
            foreach ($data->params as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['params'] = $values;
        }
        if (array_key_exists('notBefore', get_object_vars($data)) && null !== ($data->notBefore ?? null)) {
            $dataArray['notBefore'] = $data->notBefore->format('Y-m-d\TH:i:sP');
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
        return [\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource::class => false];
    }
}