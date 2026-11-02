<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Model;

use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\AdditionalPropertiesInterface;
class ErrorResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * errors
     *
     * @var list<Error>
     */
    public array $errors;
    public function definedProperties(): array
    {
        return ['errors' => 'errors'];
    }
}