<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint;

class PostTaskTemplateTask extends \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\Endpoint
{
    protected $taskTemplateId;
    /**
     * Generate a task with a task template id
     * @param string $taskTemplateId Task Template Id
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateTaskResource $requestBody
     */
    public function __construct(string $taskTemplateId, \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateTaskResource $requestBody)
    {
        $this->taskTemplateId = $taskTemplateId;
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{taskTemplateId}'], [rawurlencode($this->taskTemplateId)], '/task-template/{taskTemplateId}/task');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateTaskResource) {
            return [['Content-Type' => ['application/json']], \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskNotFoundException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (stripos(strtolower((string) $contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuthAuthorization', 'bearerAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
    public function getTargetClass(): ?string
    {
        return null;
    }
}