<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Model;

class TaskResource extends \ArrayObject
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
     * Task Id
     *
     * @var string
     */
    protected $taskId;
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
     * Task Status
     *
     * @var string
     */
    protected $taskStatus;
    /**
     * Params
     *
     * @var mixed[]|null
     */
    protected $params;
    /**
     * NotBefore
     *
     * @var \DateTime
     */
    protected $notBefore;
    /**
     * Task Id
     *
     * @return string
     */
    public function getTaskId() : string
    {
        return $this->taskId;
    }
    /**
     * Task Id
     *
     * @param string $taskId
     *
     * @return self
     */
    public function setTaskId(string $taskId) : self
    {
        $this->initialized['taskId'] = true;
        $this->taskId = $taskId;
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
     * Task Status
     *
     * @return string
     */
    public function getTaskStatus() : string
    {
        return $this->taskStatus;
    }
    /**
     * Task Status
     *
     * @param string $taskStatus
     *
     * @return self
     */
    public function setTaskStatus(string $taskStatus) : self
    {
        $this->initialized['taskStatus'] = true;
        $this->taskStatus = $taskStatus;
        return $this;
    }
    /**
     * Params
     *
     * @return mixed[]|null
     */
    public function getParams() : ?iterable
    {
        return $this->params;
    }
    /**
     * Params
     *
     * @param mixed[]|null $params
     *
     * @return self
     */
    public function setParams(?iterable $params) : self
    {
        $this->initialized['params'] = true;
        $this->params = $params;
        return $this;
    }
    /**
     * NotBefore
     *
     * @return \DateTime
     */
    public function getNotBefore() : \DateTime
    {
        return $this->notBefore;
    }
    /**
     * NotBefore
     *
     * @param \DateTime $notBefore
     *
     * @return self
     */
    public function setNotBefore(\DateTime $notBefore) : self
    {
        $this->initialized['notBefore'] = true;
        $this->notBefore = $notBefore;
        return $this;
    }
}