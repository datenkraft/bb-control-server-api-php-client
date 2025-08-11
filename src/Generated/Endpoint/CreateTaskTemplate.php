<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint;

class CreateTaskTemplate extends \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Create a new task template
     *
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
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PostTaskTemplateResource) {
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
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
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