<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\ControlServerApi\Client;
use Datenkraft\Backbone\Client\ControlServerApi\Generated\Model\UpdateTask;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ControlServerConsumerPatchTaskTest
 * @package Pact
 */
class ControlServerConsumerPatchTaskTest extends ControlServerConsumerTest
{
    protected $taskId;
    protected $taskIdValid;
    protected $taskIdInvalid;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'PATCH';

        $this->token = getenv('VALID_TOKEN_TASK_PATCH');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json'
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json'
        ];

        $this->taskIdValid = 'taskId_test_patch';
        $this->taskIdInvalid = 'taskId_test_invalid';

        $this->taskId = $this->taskIdValid;

        $this->requestData = [
            'taskStatus' => $this->taskStatus2
        ];
        $this->responseData = [
            'taskId' => $this->taskId,
            'projectId' => $this->projectId,
            'taskType' => $this->taskType_patch,
            'taskStatus' => $this->taskStatus2,
            'params' => $this->params,
            'notBefore' => $this->notBefore,
        ];

        $this->path = '/task/' . $this->taskId;
    }

    public function testPatchTaskSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'A Task with taskId exists, ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful PATCH request to /task/{taskId}');

        $this->beginTest();
    }

    public function testPatchTaskUnauthorized(): void
    {
        // Invalid token
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 401
        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized PATCH request to /task/{taskId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPatchTaskForbidden(): void
    {
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden PATCH request to /task/{taskId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPatchTaskUnprocessableEntity()
    {
        // TaskStatus does not exist
        $this->requestData['taskStatus'] = 'taskStatus_invalid';

        // Error code in response is 422
        $this->expectedStatusCode = '422';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The taskStatus does not exist')
            ->uponReceiving('Unprocessable Entity PATCH request to /task/{taskId} with non-existent taskStatus');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPatchTaskNotFound(): void
    {
        // Path with taskId for non existent Task
        $this->taskId = $this->taskIdInvalid;
        $this->path = '/task/' . $this->taskId;

        // Error code in response is 404
        $this->expectedStatusCode = '404';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given(
                'A Task with taskId does not exist'
            )
            ->uponReceiving('Not Found PATCH request to /task/{taskId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPatchTaskBadRequest(): void
    {
        // taskStatus is not defined
        $this->requestData['taskStatus'] = '';

        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request body is invalid or missing')
            ->uponReceiving('Bad PATCH request to /task/{taskId}');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
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

        $task = (new UpdateTask())
            ->setTaskStatus($this->requestData['taskStatus']);

        return $client->patchTask($this->taskId, $task, Client::FETCH_RESPONSE);
    }
}
