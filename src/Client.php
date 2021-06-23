<?php

declare(strict_types=1);

namespace Datenkraft\Backbone\Client\ControlServerApi;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\ControlServerApi\Endpoint\GetTaskCollection;

/**
 * Class Client
 * @package Datenkraft\Backbone\Client\ControlServerApi
 */
class Client extends Generated\Client
{
    /**
     * @param ClientFactory $clientFactory
     * @param string|null $endpointUrl
     * @return static
     * @throws AuthException
     */
    public static function createWithFactory(ClientFactory $clientFactory, string $endpointUrl = null): self
    {
        $endpointUrl = $endpointUrl ?? getenv('X_DATENKRAFT_CONTROL_SERVER_API_URL') ?: null;

        return $clientFactory->createClient(static::class, $endpointUrl);
    }

	/**
	 * @inheritDoc
	 */
    public function getTaskCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT) {
		return $this->executeEndpoint(new GetTaskCollection($queryParameters), $fetch);
	}
}
