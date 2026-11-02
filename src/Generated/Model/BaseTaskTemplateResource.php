<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Model;

use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\AdditionalPropertiesInterface;
class BaseTaskTemplateResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
     * Params Template
     *
     * @var iterable<string, mixed>
     */
    public iterable $paramsTemplate;
    /**
     * Task template schedule interval specification:
     * - The format starts with the letter P, for "period".
     * - Each duration period is represented by an integer value followed by a period designator (Y = years, M =
     * months, D = days, W = weeks, H = hours, M = minutes, S = seconds).
     * - If the duration contains time elements, that portion of the specification is preceded by the letter T.
     * - The unit types must be entered from the largest scale unit on the left to the smallest scale unit on the
     * right. So years before months, months before days, days before minutes, etc.
     * - The specification can also be represented as a date time.
     * - Formats are based on ISO 8601 duration format.
     *
     * @var string
     */
    public string $schedule;
    /**
     * Active
     *
     * @var bool
     */
    public bool $active;
    public function definedProperties(): array
    {
        return ['projectId' => 'projectId', 'taskType' => 'taskType', 'paramsTemplate' => 'paramsTemplate', 'schedule' => 'schedule', 'active' => 'active'];
    }
}