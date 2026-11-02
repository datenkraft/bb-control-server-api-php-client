<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Model;

use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\AdditionalPropertiesInterface;
class TaskResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Task Id
     *
     * @var string
     */
    public string $taskId;
    /**
     * Identity Id
     *
     * @var string
     */
    public string $identityId;
    /**
     * Project Id
     *
     * @var string|null
     */
    public ?string $projectId;
    /**
     * Task Type
     *
     * @var string
     */
    public string $taskType;
    /**
     * Task Status
     *
     * @var string
     */
    public string $taskStatus;
    /**
     * Params
     *
     * @var iterable<string, mixed>|null
     */
    public ?iterable $params;
    /**
     * NotBefore
     *
     * @var \DateTime
     */
    public \DateTime $notBefore;
    public function definedProperties(): array
    {
        return ['taskId' => 'taskId', 'identityId' => 'identityId', 'projectId' => 'projectId', 'taskType' => 'taskType', 'taskStatus' => 'taskStatus', 'params' => 'params', 'notBefore' => 'notBefore'];
    }
}