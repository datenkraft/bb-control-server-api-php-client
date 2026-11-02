<?php

namespace Datenkraft\Backbone\Client\ControlServerApi\Generated\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}