<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception;

class GetAuthRoleIdentityCollectionBadRequestException extends BadRequestException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Bad Request', 400);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}