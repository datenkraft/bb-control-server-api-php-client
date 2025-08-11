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
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuditLog::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuditLogCollection::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthPermissionResource::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthPermissionRolePaginatedCollection::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthPermissionRoleResource::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleCollection::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleIdentityPaginatedCollection::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleIdentityResource::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleResource::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\BaseTaskTemplateResource::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\Collection::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\CollectionPagination::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\Error::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorReferencesItem::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\GetAuthPermissionCollectionResponse::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\Information::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\InformationResponse::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\NewAuthRoleResource::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PatchTaskTemplateResource::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PostTaskTemplateResource::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResourceCollection::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResourceCollection::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateTaskResource::class => false,
            \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\UpdateTaskResource::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}