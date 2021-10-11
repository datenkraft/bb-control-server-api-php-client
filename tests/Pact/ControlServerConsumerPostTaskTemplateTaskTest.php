<?php

namespace Pact;

use Datenkraft\Backbone\Client\ControlServerApi\Client;
use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\TaskTemplateTaskResource;
use DateTime;
use DateTimeInterface;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ControlServerConsumerGetTaskTemplateCollectionTest
 * @package Pact
 */
class ControlServerConsumerPostTaskTemplateTaskTest extends ControlServerConsumerTest
{
    protected string $taskTemplateId;
    protected string $taskTemplateIdValid;
    protected string $taskTemplateIdInvalid;

    protected string $startDate;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'POST';

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json'
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json'
        ];

        $this->taskTemplateIdValid = '33333333-3333-3333-3333-333333333333';
        $this->taskTemplateIdInvalid = '00000000-0000-0000-0000-000000000000';

        $this->taskTemplateId = $this->taskTemplateIdValid;

        $this->startDate = (new DateTime('2021-01-28'))->format(DateTimeInterface::ATOM);

        $this->requestData = [
            'startDate' => $this->startDate,
        ];
        $this->responseData = [
            'taskId' => $this->matcher->uuid(),
            'projectId' => $this->matcher->uuid(),
            'identityId' => $this->matcher->uuid(),
            'taskType' => $this->taskType_get,
            'taskStatus' => $this->taskStatus1,
            'params' => $this->matcher->like($this->params),
            'notBefore' => (new DateTime())->format(DateTimeInterface::ATOM),
        ];

        $this->path = '/task-template/' . $this->taskTemplateId . '/task';
    }

    public function testPostTaskTemplateTaskSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'A Task with taskId exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful POST request to /task-template/{taskTemplateId}/task');

        $this->beginTest();
    }

    public function testPostTaskTemplateTaskUnauthorized(): void
    {
        // Invalid token
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 401
        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized POST request to /task-template/{taskTemplateId}/task');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostTaskTemplateTaskForbidden(): void
    {
        $this->token = getenv('CONTRACT_TEST_CLIENT_WITHOUT_PERMISSIONS_TOKEN');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden POST request to /task-template/{taskTemplateId}/task');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPostTaskTemplateTaskNotFound(): void
    {
        // Path with taskTemplateId for non existent Task Template
        $this->taskTemplateId = $this->taskTemplateIdInvalid;
        $this->path = '/task-template/' . $this->taskTemplateId . '/task';

        // Error code in response is 404
        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('A Task Template with taskTemplateId does not exist')
            ->uponReceiving('Not Found POST request to /task-template/{taskTemplateId}/task');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @throws GuzzleException
     */
    public function testPostTaskTemplateTaskBadRequest(): void
    {
        // startDate is not defined
        $this->requestData['startDate'] = '';

        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request body is invalid or missing')
            ->uponReceiving('Bad POST request to /task-template/{taskTemplateId}/task');

        $this->responseData = $this->errorResponse;

        // use guzzle because with our client it is not possible to post "TaskTemplateTaskResource" with null "startDate"
        $this->prepareTest();
        $options = [
            'headers' => $this->requestHeaders,
            'http_errors' => false,
            'body' => json_encode($this->requestData),
        ];
        $response = $this->guzzleClient->post($this->path, $options);

        $this->assertEquals($this->expectedStatusCode, $response->getStatusCode());
        $this->assertJson($response->getBody());
    }

    /**
     * @return ResponseInterface
     * @throws ConfigException
     * @throws AuthException
     */
    protected function doClientRequest(): ResponseInterface
    {
        $factory = new ClientFactory(
            ['clientId' => 'test', 'clientSecret' => 'test', 'oAuthTokenUrl' => 'test', 'oAuthScopes' => ['test']]
        );
        $factory->setToken($this->token);
        $client = Client::createWithFactory($factory, $this->config->getBaseUri());

        $task = (new TaskTemplateTaskResource());
        if (!empty($this->requestData['startDate'])) {
            $task->setStartDate(new DateTime($this->requestData['startDate']));
        }

        return $client->postTaskTemplateTask($this->taskTemplateId, $task, Client::FETCH_RESPONSE);
    }
}
