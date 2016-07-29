<?php

namespace Necowebs\Destiny\Services;

use GuzzleHttp\Client;

/**
 * Class BaseService
 * @package Necowebs\Destiny\Services
 */
class BaseService
{
    /**
     * @var Client
     */
    protected $http;

    /**
     * BaseService constructor.
     */
    public function __construct()
    {
        $this->http = new Client([
            'base_uri' => 'https://www.bungie.net/Platform/Destiny/',
            'headers'  => ['X-API-Key' => getenv('DESTINY_API_KEY')],
        ]);
    }

    /**
     * @param string $uri
     * @return array
     */
    public function get($uri)
    {
        return (array) json_decode((string) $this->http->get($uri)->getBody(), true);
    }
}
