<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Model;

class TaskTemplateTaskResource extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Start Date
     *
     * @deprecated
     *
     * @var \DateTime
     */
    protected $startDate;
    /**
     * Start Date
     *
     * @deprecated
     *
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }
    /**
     * Start Date
     *
     * @param \DateTime $startDate
     *
     * @deprecated
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
}