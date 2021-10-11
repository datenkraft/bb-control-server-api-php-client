<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Model;

class TaskTemplateTaskResource
{
    /**
     * Start Date
     *
     * @var \DateTime
     */
    protected $startDate;
    /**
     * Start Date
     *
     * @return \DateTime
     */
    public function getStartDate() : \DateTime
    {
        return $this->startDate;
    }
    /**
     * Start Date
     *
     * @param \DateTime $startDate
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
}