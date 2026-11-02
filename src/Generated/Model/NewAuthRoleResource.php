<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Model;

use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewAuthRoleResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['name' => 'name'];
    }
}