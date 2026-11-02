<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception;

class DeleteTaskTemplateInternalServerErrorException extends InternalServerErrorException
{
    public function __construct(
        /**
         * @var \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
         */
        private readonly \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse $errorResponse,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Server error

Error codes:
- SERVER_ERROR_OCCURRED: An internal server error occurred. Please try again later.');
    }
    public function getErrorResponse(): \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}