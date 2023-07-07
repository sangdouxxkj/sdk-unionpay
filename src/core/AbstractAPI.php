<?php

namespace Sangdou\Core\core;

abstract class AbstractAPI
{
    /**
     * Http instance.
     *
     */
    protected $http;

    /**
     * The request token.
     *
     */
    protected $accessToken;

    const GET = 'get';
    const POST = 'post';
    const JSON = 'json';

    /**
     * Constructor.
     */
    public function __construct($accessToken)
    {
        $this->setAccessToken($accessToken);
    }

    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function parseJSON($method, array $args)
    {
        $http = $this->getHttp();

        $contents = $http->parseJSON(call_user_func_array([$http, $method], $args));

        if (empty($contents)) {
            return null;
        }

        $this->checkAndThrow($contents);

        return new Collection($contents);
    }
}