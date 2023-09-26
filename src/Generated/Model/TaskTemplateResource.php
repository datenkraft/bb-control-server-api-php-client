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
     * Last Start Date
     *
     * @var \DateTime
     */
    protected $lastStartDate;
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
}