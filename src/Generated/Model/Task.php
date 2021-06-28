<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Model;

class Task
{
    /**
     * Task Id
     *
     * @var string
     */
    protected $taskId;
    /**
     * Client Id
     *
     * @var string
     */
    protected $clientId;
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
     * @var string|null
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
        $this->taskId = $taskId;
        return $this;
    }
    /**
     * Client Id
     *
     * @return string
     */
    public function getClientId() : string
    {
        return $this->clientId;
    }
    /**
     * Client Id
     *
     * @param string $clientId
     *
     * @return self
     */
    public function setClientId(string $clientId) : self
    {
        $this->clientId = $clientId;
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
        $this->taskStatus = $taskStatus;
        return $this;
    }
    /**
     * Params
     *
     * @return string|null
     */
    public function getParams() : ?string
    {
        return $this->params;
    }
    /**
     * Params
     *
     * @param string|null $params
     *
     * @return self
     */
    public function setParams(?string $params) : self
    {
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
        $this->notBefore = $notBefore;
        return $this;
    }
}