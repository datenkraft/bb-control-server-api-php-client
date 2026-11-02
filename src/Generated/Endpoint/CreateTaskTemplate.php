<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint;

class CreateTaskTemplate extends \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Create a new task template
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PostTaskTemplateResource $requestBody
     */
    public function __construct(\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PostTaskTemplateResource $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/task-template';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PostTaskTemplateResource) {
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
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
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