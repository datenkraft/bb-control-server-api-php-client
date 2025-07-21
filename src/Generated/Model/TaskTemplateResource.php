<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Model;

class TaskTemplateResource extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Task Template Id
     *
     * @var string
     */
    protected $taskTemplateId;
    /**
     * Last Start Date
     *
     * @var \DateTime
     */
    protected $lastStartDate;
    /**
     * Identity Id
     *
     * @var string
     */
    protected $identityId;
    /**
     * Project Id
     *
     * @var string|null
     */
    protected $projectId;
    /**
     * Task Type
     *
     * @var string
     */
    protected $taskType;
    /**
     * Params Template
     *
     * @var mixed[]
     */
    protected $paramsTemplate;
    /**
    * Task template schedule interval specification:
    - The format starts with the letter P, for "period".
    - Each duration period is represented by an integer value followed by a period designator (Y = years, M =
    months, D = days, W = weeks, H = hours, M = minutes, S = seconds).
    - If the duration contains time elements, that portion of the specification is preceded by the letter T.
    - The unit types must be entered from the largest scale unit on the left to the smallest scale unit on the
    right. So years before months, months before days, days before minutes, etc.
    - The specification can also be represented as a date time.
    - Formats are based on ISO 8601 duration format.
    *
    * @var string
    */
    protected $schedule;
    /**
     * Active
     *
     * @var bool
     */
    protected $active;
    /**
     * Task Template Id
     *
     * @return string
     */
    public function getTaskTemplateId() : string
    {
        return $this->taskTemplateId;
    }
    /**
     * Task Template Id
     *
     * @param string $taskTemplateId
     *
     * @return self
     */
    public function setTaskTemplateId(string $taskTemplateId) : self
    {
        $this->initialized['taskTemplateId'] = true;
        $this->taskTemplateId = $taskTemplateId;
        return $this;
    }
    /**
     * Last Start Date
     *
     * @return \DateTime
     */
    public function getLastStartDate() : \DateTime
    {
        return $this->lastStartDate;
    }
    /**
     * Last Start Date
     *
     * @param \DateTime $lastStartDate
     *
     * @return self
     */
    public function setLastStartDate(\DateTime $lastStartDate) : self
    {
        $this->initialized['lastStartDate'] = true;
        $this->lastStartDate = $lastStartDate;
        return $this;
    }
    /**
     * Identity Id
     *
     * @return string
     */
    public function getIdentityId() : string
    {
        return $this->identityId;
    }
    /**
     * Identity Id
     *
     * @param string $identityId
     *
     * @return self
     */
    public function setIdentityId(string $identityId) : self
    {
        $this->initialized['identityId'] = true;
        $this->identityId = $identityId;
        return $this;
    }
    /**
     * Project Id
     *
     * @return string|null
     */
    public function getProjectId() : ?string
    {
        return $this->projectId;
    }
    /**
     * Project Id
     *
     * @param string|null $projectId
     *
     * @return self
     */
    public function setProjectId(?string $projectId) : self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * Task Type
     *
     * @return string
     */
    public function getTaskType() : string
    {
        return $this->taskType;
    }
    /**
     * Task Type
     *
     * @param string $taskType
     *
     * @return self
     */
    public function setTaskType(string $taskType) : self
    {
        $this->initialized['taskType'] = true;
        $this->taskType = $taskType;
        return $this;
    }
    /**
     * Params Template
     *
     * @return mixed[]
     */
    public function getParamsTemplate() : iterable
    {
        return $this->paramsTemplate;
    }
    /**
     * Params Template
     *
     * @param mixed[] $paramsTemplate
     *
     * @return self
     */
    public function setParamsTemplate(iterable $paramsTemplate) : self
    {
        $this->initialized['paramsTemplate'] = true;
        $this->paramsTemplate = $paramsTemplate;
        return $this;
    }
    /**
    * Task template schedule interval specification:
    - The format starts with the letter P, for "period".
    - Each duration period is represented by an integer value followed by a period designator (Y = years, M =
    months, D = days, W = weeks, H = hours, M = minutes, S = seconds).
    - If the duration contains time elements, that portion of the specification is preceded by the letter T.
    - The unit types must be entered from the largest scale unit on the left to the smallest scale unit on the
    right. So years before months, months before days, days before minutes, etc.
    - The specification can also be represented as a date time.
    - Formats are based on ISO 8601 duration format.
    *
    * @return string
    */
    public function getSchedule() : string
    {
        return $this->schedule;
    }
    /**
    * Task template schedule interval specification:
    - The format starts with the letter P, for "period".
    - Each duration period is represented by an integer value followed by a period designator (Y = years, M =
    months, D = days, W = weeks, H = hours, M = minutes, S = seconds).
    - If the duration contains time elements, that portion of the specification is preceded by the letter T.
    - The unit types must be entered from the largest scale unit on the left to the smallest scale unit on the
    right. So years before months, months before days, days before minutes, etc.
    - The specification can also be represented as a date time.
    - Formats are based on ISO 8601 duration format.
    *
    * @param string $schedule
    *
    * @return self
    */
    public function setSchedule(string $schedule) : self
    {
        $this->initialized['schedule'] = true;
        $this->schedule = $schedule;
        return $this;
    }
    /**
     * Active
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * Active
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
}