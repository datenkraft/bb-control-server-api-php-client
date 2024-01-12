<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception;

class PatchTaskNotFoundException extends NotFoundException
{
    /**
     * @var \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse $errorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found

Error codes:
- DATA_NOT_FOUND: The requested data could not be found.');
        $this->errorResponse = $errorResponse;
        $this->response = $response;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}