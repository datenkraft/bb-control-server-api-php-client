<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint;

class DeleteTaskTemplate extends \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\Endpoint
{
    protected $taskTemplateId;
    /**
     * Delete a specific task template by ID
     *
     * @param string $taskTemplateId The ID of the task template to delete
     */
    public function __construct(string $taskTemplateId)
    {
        $this->taskTemplateId = $taskTemplateId;
    }
    use \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{taskTemplateId}'), array($this->taskTemplateId), '/task-template/{taskTemplateId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateNotFoundException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oAuthAuthorization', 'bearerAuth');
    }
}