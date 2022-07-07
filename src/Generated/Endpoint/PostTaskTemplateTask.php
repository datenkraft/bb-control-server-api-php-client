<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint;

class PostTaskTemplateTask extends \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\Endpoint
{
    protected $taskTemplateId;
    /**
     * Generate a task with a task template id
     *
     * @param string $taskTemplateId Task Template Id
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateTaskResource $requestBody 
     */
    public function __construct(string $taskTemplateId, \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateTaskResource $requestBody)
    {
        $this->taskTemplateId = $taskTemplateId;
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{taskTemplateId}'), array($this->taskTemplateId), '/task-template/{taskTemplateId}/task');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateTaskResource) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\TaskResource', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskNotFoundException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\ControlServerApi\\Generated\\Model\\ErrorResponse', 'json'));
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