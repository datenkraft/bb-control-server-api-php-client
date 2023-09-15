<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated;

class Client extends \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\Client
{
    /**
    * Get the audit log.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
    *     @var string $filter[endpoint] A filter for restricting the audit log to a endpoint.
    *     @var string $filter[version] A filter for restricting the audit log to a endpoint version.
    *     @var mixed $filter[identifier] A filter for querying actions for a identifier.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuditLogCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuditLogCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuditLogCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuditLogCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuditLogCollection|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuditLogCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetAuditLogCollection($queryParameters), $fetch);
    }
    /**
     * Delete one or more role to permission assignments in this resource server
     *
     * @param null|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthPermissionRoleResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthPermissionRoleCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthPermissionRoleCollection(?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\DeleteAuthPermissionRoleCollection($requestBody), $fetch);
    }
    /**
    * Get all role to permission assignments from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthPermissionRoleCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthPermissionRoleCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthPermissionRoleCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthPermissionRolePaginatedCollection|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthPermissionRoleCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetAuthPermissionRoleCollection($queryParameters), $fetch);
    }
    /**
     * Create one or more role to permission assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthPermissionRoleResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthPermissionRoleCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthPermissionRoleResource[]|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthPermissionRoleCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\PostAuthPermissionRoleCollection($requestBody), $fetch);
    }
    /**
    * Get all permissions from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthPermissionCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthPermissionCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthPermissionCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\GetAuthPermissionCollectionResponse|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthPermissionCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetAuthPermissionCollection($queryParameters), $fetch);
    }
    /**
     * Delete one or more role to identity assignments in this resource server
     *
     * @param null|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleIdentityResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleIdentityCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthRoleIdentityCollection(?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\DeleteAuthRoleIdentityCollection($requestBody), $fetch);
    }
    /**
    * Get all role to identity assignments from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleIdentityCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleIdentityCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleIdentityCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleIdentityPaginatedCollection|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthRoleIdentityCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetAuthRoleIdentityCollection($queryParameters), $fetch);
    }
    /**
     * Create one or more role to identity assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleIdentityResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleIdentityCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRoleIdentityCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\PostAuthRoleIdentityCollection($requestBody), $fetch);
    }
    /**
    * Get all available roles from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleCollection|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthRoleCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetAuthRoleCollection($queryParameters), $fetch);
    }
    /**
     * Delete a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthRole(string $roleCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\DeleteAuthRole($roleCode), $fetch);
    }
    /**
     * Get a role from this resource server by its roleCode
     *
     * @param string $roleCode Identifier for the role
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRole(string $roleCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetAuthRole($roleCode), $fetch);
    }
    /**
     * Patch a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\NewAuthRoleResource $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function patchAuthRole(string $roleCode, \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\NewAuthRoleResource $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\PatchAuthRole($roleCode, $requestBody), $fetch);
    }
    /**
     * Post a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\NewAuthRoleResource $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleConflictException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRole(string $roleCode, \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\NewAuthRoleResource $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\PostAuthRole($roleCode, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetOpenApi(), $fetch);
    }
    /**
     * Get the changelog in the specified format
     *
     * @param string $format Changelog file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetChangelogInFormatNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetChangelogInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getChangelogInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetChangelogInFormat($format), $fetch);
    }
    /**
     * Get the openapi documentation in the specified format
     *
     * @param string $format Openapi file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApiInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetOpenApiInFormat($format), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskTemplateCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskTemplateCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskTemplateCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource[]|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getTaskTemplateCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetTaskTemplateCollection(), $fetch);
    }
    /**
     * Generate a task with a task template id
     *
     * @param string $taskTemplateId Task Template Id
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateTaskResource $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postTaskTemplateTask(string $taskTemplateId, \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateTaskResource $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\PostTaskTemplateTask($taskTemplateId, $requestBody), $fetch);
    }
    /**
    * Get tasks. By default, only tasks assigned to the requesting identity are provided.
    If the requesting identity has the permission bb-control-server-api/task:read-all, all tasks are provided.
    *
    * @param array $queryParameters {
    *     @var string $filter[projectId] Task projectId filter
    *     @var string $filter[taskType] Task taskType filter
    *     @var string $filter[notBefore] Task notBefore filter
    *     @var string $filter[taskStatus] Status of the task (optional).
    
       - open: The task has not been processed yet.
       - finished: The task has been finished.
    *     @var string $filter[identityId] Task identityId filter
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource[]|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getTaskCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetTaskCollection($queryParameters), $fetch);
    }
    /**
     * Update one or more fields of a Task
     *
     * @param string $taskId Task Id
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\UpdateTaskResource $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchTaskUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchTaskForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchTaskUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchTaskNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchTaskBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchTaskInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource|\Psr\Http\Message\ResponseInterface
     */
    public function patchTask(string $taskId, \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\UpdateTaskResource $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\PatchTask($taskId, $requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://control-server-api.conqore.niceshops.com/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}