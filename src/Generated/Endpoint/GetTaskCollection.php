<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint;

class GetTaskCollection extends \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\Endpoint
{
    /**
    * Get tasks. By default, only tasks assigned to the requesting identity are provided.
    If the requesting identity has the permission bb-control-server-api/task:read-all, all tasks are provided.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $filter[projectId] Task projectId filter
    *     @var string $filter[taskType] Task taskType filter
    *     @var string $filter[notBefore] Task notBefore filter
    *     @var string $filter[taskStatus] Status of the task (optional).
    - open: The task has not been processed yet.
    - finished: The task has been finished.
    *     @var string $filter[identityId] Task identityId filter
    * }
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/task';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['page', 'pageSize', 'paginationMode', 'filter[projectId]', 'filter[taskType]', 'filter[notBefore]', 'filter[taskStatus]', 'filter[identityId]']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['paginationMode' => 'default']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('pageSize', ['int']);
        $optionsResolver->addAllowedTypes('paginationMode', ['string']);
        $optionsResolver->addAllowedTypes('filter[projectId]', ['string']);
        $optionsResolver->addAllowedTypes('filter[taskType]', ['string']);
        $optionsResolver->addAllowedTypes('filter[notBefore]', ['string']);
        $optionsResolver->addAllowedTypes('filter[taskStatus]', ['string']);
        $optionsResolver->addAllowedTypes('filter[identityId]', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResourceCollection|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResourceCollection', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskCollectionUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskCollectionForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskCollectionInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse', 'json'), $response);
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