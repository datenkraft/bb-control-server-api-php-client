<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Model;

use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\AdditionalPropertiesInterface;
class UpdateTaskResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Task Status
     *
     * @var string
     */
    public string $taskStatus;
    public function definedProperties(): array
    {
        return ['taskStatus' => 'taskStatus'];
    }
}