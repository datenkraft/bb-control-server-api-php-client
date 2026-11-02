<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated;

class Client extends \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\Client
{
    /**
     * Get the audit log.
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     *    "filter[endpoint]"?: string, //A filter for restricting the audit log to a endpoint.
     *    "filter[version]"?: string, //A filter for restricting the audit log to a endpoint version.
     *    "filter[identifier]"?: mixed, //A filter for querying actions for a identifier.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuditLogCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuditLogCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuditLogCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuditLogCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuditLogCollection|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function getAuditLogCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetAuditLogCollection($queryParameters));
    }
    /**
     * Delete one or more role to permission assignments in this resource server
     * @param null|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthPermissionRoleResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function deleteAuthPermissionRoleCollection(?array $requestBody = null)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\DeleteAuthPermissionRoleCollection($requestBody));
    }
    /**
     * Get all role to permission assignments from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthPermissionRolePaginatedCollection|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function getAuthPermissionRoleCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetAuthPermissionRoleCollection($queryParameters));
    }
    /**
     * Create one or more role to permission assignments in this resource server
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthPermissionRoleResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthPermissionRoleCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthPermissionRoleResource[]|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function postAuthPermissionRoleCollection(array $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\PostAuthPermissionRoleCollection($requestBody));
    }
    /**
     * Get all permissions from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthPermissionCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthPermissionCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthPermissionCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\GetAuthPermissionCollectionResponse|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function getAuthPermissionCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetAuthPermissionCollection($queryParameters));
    }
    /**
     * Delete one or more role to identity assignments in this resource server
     * @param null|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleIdentityResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function deleteAuthRoleIdentityCollection(?array $requestBody = null)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\DeleteAuthRoleIdentityCollection($requestBody));
    }
    /**
     * Get all role to identity assignments from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleIdentityPaginatedCollection|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function getAuthRoleIdentityCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetAuthRoleIdentityCollection($queryParameters));
    }
    /**
     * Create one or more role to identity assignments in this resource server
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleIdentityResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleIdentityCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function postAuthRoleIdentityCollection(array $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\PostAuthRoleIdentityCollection($requestBody));
    }
    /**
     * Get all available roles from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleCollection|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function getAuthRoleCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetAuthRoleCollection($queryParameters));
    }
    /**
     * Delete a role for this resource server
     * @param string $roleCode Identifier for the role
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function deleteAuthRole(string $roleCode)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\DeleteAuthRole($roleCode));
    }
    /**
     * Get a role from this resource server by its roleCode
     * @param string $roleCode Identifier for the role
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function getAuthRole(string $roleCode)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetAuthRole($roleCode));
    }
    /**
     * Patch a role for this resource server
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\NewAuthRoleResource $requestBody
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function patchAuthRole(string $roleCode, \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\NewAuthRoleResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\PatchAuthRole($roleCode, $requestBody));
    }
    /**
     * Post a role for this resource server
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\NewAuthRoleResource $requestBody
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleConflictException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function postAuthRole(string $roleCode, \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\NewAuthRoleResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\PostAuthRole($roleCode, $requestBody));
    }
    /**
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return null
     */
    public function getOpenApi()
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetOpenApi());
    }
    /**
     * Get the changelog in the specified format
     * @param string $format Changelog file format
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetChangelogInFormatNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetChangelogInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return null
     */
    public function getChangelogInFormat(string $format)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetChangelogInFormat($format));
    }
    /**
     * Get the openapi documentation in the specified format
     * @param string $format Openapi file format
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetOpenApiInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return null
     */
    public function getOpenApiInFormat(string $format)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetOpenApiInFormat($format));
    }
    /**
     * Get task templates
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     *    "filter[projectId]"?: string, //Filter task templates by project id.
     *    "filter[taskType]"?: string, //Filter task templates by task type code.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskTemplateCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskTemplateCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskTemplateCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResourceCollection|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function getTaskTemplateCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetTaskTemplateCollection($queryParameters));
    }
    /**
     * Create a new task template
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PostTaskTemplateResource $requestBody
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\CreateTaskTemplateInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function createTaskTemplate(\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PostTaskTemplateResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\CreateTaskTemplate($requestBody));
    }
    /**
     * Delete a specific task template by ID
     * @param string $taskTemplateId The ID of the task template to delete
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\DeleteTaskTemplateInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function deleteTaskTemplate(string $taskTemplateId)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\DeleteTaskTemplate($taskTemplateId));
    }
    /**
     * Update a specific task template by ID
     * @param string $taskTemplateId The ID of the task template to update
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PatchTaskTemplateResource $requestBody
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\UpdateTaskTemplateInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function updateTaskTemplate(string $taskTemplateId, \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\PatchTaskTemplateResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\UpdateTaskTemplate($taskTemplateId, $requestBody));
    }
    /**
     * Generate a task with a task template id
     * @param string $taskTemplateId Task Template Id
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateTaskResource $requestBody
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PostTaskTemplateTaskInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function postTaskTemplateTask(string $taskTemplateId, \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateTaskResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\PostTaskTemplateTask($taskTemplateId, $requestBody));
    }
    /**
     * Get tasks. By default, only tasks assigned to the requesting identity are provided.
     * If the requesting identity has the permission bb-control-server-api/task:read-all, all tasks are provided.
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     *    "filter[projectId]"?: string, //Task projectId filter
     *    "filter[taskType]"?: string, //Task taskType filter
     *    "filter[notBefore]"?: string, //Task notBefore filter
     *    "filter[taskStatus]"?: string, //Status of the task (optional).
     *                                   //- open: The task has not been processed yet.
     *                                   //- finished: The task has been finished.
     *    "filter[identityId]"?: string, //Task identityId filter
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\GetTaskCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResourceCollection|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function getTaskCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetTaskCollection($queryParameters));
    }
    /**
     * Update one or more fields of a Task
     * @param string $taskId Task Id
     * @param \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\UpdateTaskResource $requestBody
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchTaskBadRequestException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchTaskUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchTaskForbiddenException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchTaskNotFoundException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchTaskUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\PatchTaskInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskResource|\Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\ErrorResponse
     */
    public function patchTask(string $taskId, \Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\UpdateTaskResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\PatchTask($taskId, $requestBody));
    }
    /**
     * @param list<callable(\Symfony\Contracts\HttpClient\HttpClientInterface): \Symfony\Contracts\HttpClient\HttpClientInterface> $additionalPlugins HttpClientInterface decorator factories, applied left-to-right after the server URL decorator
     * @param list<\Symfony\Component\Serializer\Normalizer\NormalizerInterface|\Symfony\Component\Serializer\Normalizer\DenormalizerInterface> $additionalNormalizers
     */
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('https://control-server-api.steve.niceshops.com/v2');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Datenkraft\Backbone\Client\ControlServerApi\Generated\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}