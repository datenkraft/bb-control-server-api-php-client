<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception;

class PatchAuthRoleForbiddenException extends ForbiddenException
{
    /**
     * @var \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Forbidden');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}