<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Model;

class TaskTemplateResource
{
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
     * @var mixed
     */
    protected $paramsTemplate;
    /**
     * Params
     *
     * @var mixed|null
     */
    protected $params;
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
        $this->taskType = $taskType;
        return $this;
    }
    /**
     * Params Template
     *
     * @return mixed
     */
    public function getParamsTemplate()
    {
        return $this->paramsTemplate;
    }
    /**
     * Params Template
     *
     * @param mixed $paramsTemplate
     *
     * @return self
     */
    public function setParamsTemplate($paramsTemplate) : self
    {
        $this->paramsTemplate = $paramsTemplate;
        return $this;
    }
    /**
     * Params
     *
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }
    /**
     * Params
     *
     * @param mixed $params
     *
     * @return self
     */
    public function setParams($params) : self
    {
        $this->params = $params;
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
        $this->lastStartDate = $lastStartDate;
        return $this;
    }
}