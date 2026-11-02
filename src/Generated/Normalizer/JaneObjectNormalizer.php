<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer;

use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuditLog::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuditLogNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuditLogCollection::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuditLogCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthPermissionResource::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthPermissionResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthPermissionRolePaginatedCollection::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthPermissionRoleResource::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleCollection::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthRoleCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleIdentityPaginatedCollection::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleIdentityResource::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleResource::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\BaseTaskTemplateResource::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\BaseTaskTemplateResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\Collection::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\CollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\CollectionPagination::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\CollectionPaginationNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\Error::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\ErrorNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorReferencesItem::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\ErrorReferencesItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\ErrorResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\GetAuthPermissionCollectionResponse::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\Information::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\InformationNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\InformationResponse::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\InformationResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\NewAuthRoleResource::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\NewAuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PatchTaskTemplateResource::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\PatchTaskTemplateResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PostTaskTemplateResource::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\PostTaskTemplateResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\TaskResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResourceCollection::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\TaskResourceCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\TaskTemplateResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResourceCollection::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\TaskTemplateResourceCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateTaskResource::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\TaskTemplateTaskResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\UpdateTaskResource::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\UpdateTaskResourceNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = match ($normalizerClass) {
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuditLogNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuditLogNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuditLogCollectionNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuditLogCollectionNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthPermissionResourceNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthPermissionResourceNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthRoleCollectionNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthRoleCollectionNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthRoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\AuthRoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\BaseTaskTemplateResourceNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\BaseTaskTemplateResourceNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\CollectionNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\CollectionNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\CollectionPaginationNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\CollectionPaginationNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\ErrorNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\ErrorNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\ErrorReferencesItemNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\ErrorReferencesItemNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\ErrorResponseNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\ErrorResponseNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\InformationNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\InformationNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\InformationResponseNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\InformationResponseNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\NewAuthRoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\NewAuthRoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\PatchTaskTemplateResourceNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\PatchTaskTemplateResourceNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\PostTaskTemplateResourceNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\PostTaskTemplateResourceNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\TaskResourceNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\TaskResourceNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\TaskResourceCollectionNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\TaskResourceCollectionNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\TaskTemplateResourceNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\TaskTemplateResourceNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\TaskTemplateResourceCollectionNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\TaskTemplateResourceCollectionNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\TaskTemplateTaskResourceNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\TaskTemplateTaskResourceNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\UpdateTaskResourceNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\UpdateTaskResourceNormalizer(),
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Normalizer\ReferenceNormalizer::class => new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Normalizer\ReferenceNormalizer(),
            default => throw new \InvalidArgumentException('Unknown normalizer class: ' . $normalizerClass),
        };
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface) {
            $normalizer->setNormalizer($this->normalizer);
        }
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface) {
            $normalizer->setDenormalizer($this->denormalizer);
        }
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}