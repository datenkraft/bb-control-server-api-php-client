<?php

namespace Pact;

use Datenkraft\Backbone\Client\ControlServerApi\Client;
use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Exception;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ControlServerConsumerGetTaskTemplateCollectionTest
 * @package Pact
 */
class ControlServerConsumerGetTaskTemplateCollectionTest extends ControlServerConsumerTest
{
    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'GET';

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json',
        ];

        $this->requestData = [];
        $this->responseData = $this->matcher->eachLike([
            'taskTemplateId' => $this->matcher->uuid(),
            'projectId' => $this->matcher->uuid(),
            'identityId' => $this->matcher->uuid(),
            'taskType' => $this->taskType_get,
            'paramsTemplate' => $this->matcher->somethingLike($this->params),
            'schedule' => 'P1D',
            'active' => true,
        ]);

        $this->path = '/task-template';
    }

    public function testGetTaskCollectionSuccess(): void
    {
        $this->expectedStatusCode = '200';

        $this->builder
            ->given(
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful GET request to /task-template');

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
            ->uponReceiving('Unauthorized GET request to /task-template');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testGetTaskCollectionForbidden(): void
    {
        $this->token = getenv('CONTRACT_TEST_CLIENT_WITHOUT_PERMISSIONS_TOKEN');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden GET request to /task-template');

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

        return $client->getTaskTemplateCollection(Client::FETCH_RESPONSE);
    }
}
