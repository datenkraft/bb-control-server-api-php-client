<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Model;

use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\AdditionalPropertiesInterface;
class TaskTemplateTaskResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Start Date
     *
     * @var \DateTime
     */
    public \DateTime $startDate;
    public function definedProperties(): array
    {
        return ['startDate' => 'startDate'];
    }
}