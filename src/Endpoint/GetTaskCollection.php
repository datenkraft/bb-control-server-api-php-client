<?php

declare(strict_types=1);

namespace Datenkraft\Backbone\Client\ControlServerApi\Endpoint;

use Datenkraft\Backbone\Client\ControlServerApi\Generated\Endpoint\GetTaskCollection as GetTaskCollectionGenerated;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class GetTaskCollection
 * @package Datenkraft\Backbone\Client\PriceAssessmentApi\Endpoint
 */
class GetTaskCollection extends GetTaskCollectionGenerated
{
    /**
     * @inheritDoc
     */
    public function __construct(array $queryParameters = array())
    {
        // Convert filter[taskStatus] array to string of comma-separated values
        if (isset($queryParameters['filter[taskStatus]']) && is_array($queryParameters['filter[taskStatus]'])) {
            $queryParameters['filter[taskStatus]'] = implode(',', $queryParameters['filter[taskStatus]']);
        }
        parent::__construct($queryParameters);
    }

    /**
     * @return OptionsResolver
     */
    protected function getQueryOptionsResolver(): OptionsResolver
    {
        // Set allowed type for filter[taskStatus] to string
        return parent::getQueryOptionsResolver()->setAllowedTypes('filter[taskStatus]', array('string'));
    }
}
