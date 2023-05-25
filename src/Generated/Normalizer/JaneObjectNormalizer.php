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
    protected $normalizers = array('Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\TaskTemplateResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\TaskTemplateResourceNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\TaskTemplateTaskResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\TaskTemplateTaskResourceNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\TaskResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\TaskResourceNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\UpdateTaskResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\UpdateTaskResourceNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\AuditLogCollection' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\AuditLogCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\AuditLog' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\AuditLogNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\AuthPermissionResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\AuthPermissionResourceNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\AuthRoleResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\AuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\NewAuthRoleResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\NewAuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\AuthPermissionRoleResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\AuthPermissionRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\AuthRoleIdentityResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\AuthRoleIdentityResourceNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\Collection' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\CollectionNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\CollectionPagination' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\CollectionPaginationNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\ErrorResponse' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\ErrorResponseNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\InformationResponse' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\InformationResponseNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\Information' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\InformationNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\Error' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\ErrorNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
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
}