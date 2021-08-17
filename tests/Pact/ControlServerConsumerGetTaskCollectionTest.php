<?php

namespace Pact;

use Datenkraft\Backbone\Client\ControlServerApi\Client;
use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ControlServerConsumerGetTaskCollectionTest
 * @package Pact
 */
class ControlServerConsumerGetTaskCollectionTest extends ControlServerConsumerTest
{
    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'GET';

        $this->token = getenv('VALID_TOKEN_TASK_GET');

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json',
        ];

        $this->requestData = [];
        $this->responseData = [
            [
                'taskId' => 'taskId_test_get_1',
                'projectId' => $this->projectId,
                'taskType' => $this->taskType_get,
                'taskStatus' => $this->taskStatus1,
                'params' => $this->params,
                'notBefore' => $this->notBefore,
            ],
            [
                'taskId' => 'taskId_test_get_2',
                'projectId' => $this->projectId,
                'taskType' => $this->taskType_get,
                'taskStatus' => $this->taskStatus2,
                'params' => $this->params,
                'notBefore' => $this->notBefore,
            ],
        ];

        $this->queryParams = [
            'filter[projectId]' => $this->projectId,
            'filter[taskType]' => $this->taskType_get,
            'filter[notBefore]' => $this->notBefore,
            'filter[taskStatus]' => [$this->taskStatus1, $this->taskStatus2],
        ];

        $this->path = '/task';
    }

    public function testGetTaskCollectionSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /task');

        $this->beginTest();
    }

    public function testGetTaskCollectionUnauthorized(): void
    {
        // Invalid token
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 401
        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized GET request to /task');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetTaskCollectionForbidden(): void
    {
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden GET request to /task');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetTaskCollectionBadRequest(): void
    {
        // invalid uuid query param projectId
        $this->queryParams['filter[projectId]'] = 'invalid_uuid';

        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request query is invalid or missing')
            ->uponReceiving('Bad GET request to /debt-line-item/csv');

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

        return $client->getTaskCollection($this->queryParams, Client::FETCH_RESPONSE);
    }
}
