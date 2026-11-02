<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception;

class DeleteTaskTemplateUnprocessableEntityException extends UnprocessableEntityException
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
        parent::__construct('Unprocessable Entity

Error codes:
- DATA_NOT_PROCESSABLE: The given data is not processable.');
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