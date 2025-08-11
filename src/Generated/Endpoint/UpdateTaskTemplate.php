<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint;

class UpdateTaskTemplate extends \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\Endpoint
{
    protected $taskTemplateId;
    /**
     * Update a specific task template by ID
     *
     * @param string $taskTemplateId The ID of the task template to update
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PatchTaskTemplateResource $requestBody 
     */
    public function __construct(string $taskTemplateId, \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PatchTaskTemplateResource $requestBody)
    {
        $this->taskTemplateId = $taskTemplateId;
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return str_replace(['{taskTemplateId}'], [$this->taskTemplateId], '/task-template/{taskTemplateId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PatchTaskTemplateResource) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateNotFoundException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuthAuthorization', 'bearerAuth'];
    }
}