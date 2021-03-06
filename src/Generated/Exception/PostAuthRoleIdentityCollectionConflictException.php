<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception;

class PostAuthRoleIdentityCollectionConflictException extends ConflictException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Conflict', 409);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}