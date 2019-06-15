<?php

namespace App\Repositories;

use GuzzleHttp\Client;
use GuzzleHttp\Promise;

class GuzzleHttpRequest
{
    protected $client;
    
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function get($url)
    {
        $promise = $this->client->getAsync($url)->then(
            function ($response) {
                return $response->getBody();
            }, function ($exception) {
                Log::error($e->getMessage());
            }
        );

        $response = $promise->wait();

        return json_decode( $response->getContents(), true ) ?: [];
    }
}
