<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Model;

use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\AdditionalPropertiesInterface;
class ErrorReferencesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The reference to the field causing the error
     *
     * @var string
     */
    public string $key;
    /**
     * The value of the field causing the error
     *
     * @var mixed
     */
    public $value;
    public function definedProperties(): array
    {
        return ['key' => 'key', 'value' => 'value'];
    }
}