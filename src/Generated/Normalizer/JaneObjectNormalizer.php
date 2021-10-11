<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer;

use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\ErrorResponse' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\ErrorResponseNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\Error' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\ErrorNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\AuthPermissionResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\AuthPermissionResourceNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\AuthRoleResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\AuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\AuthRoleIdentityResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\AuthRoleIdentityResourceNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\TaskResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\TaskResourceNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\UpdateTaskResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\UpdateTaskResourceNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\TaskTemplateResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\TaskTemplateResourceNormalizer', 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\TaskTemplateTaskResource' => 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Normalizer\\TaskTemplateTaskResourceNormalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
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