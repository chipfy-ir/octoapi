<?php

namespace Chipfy\Part\Http;

use GuzzleHttp\Client as GuzzleClient;
use http\Exception\InvalidArgumentException;

class Client
{

    /**
     * @var GuzzleClient|mixed
     */
    private mixed $client;

    /**
     * @throws \Exception
     */
    public function __construct($config = [])
    {
        try {
            if (!$config['apikey']){
                throw new InvalidArgumentException('api key need.');
            }
            $defaultClientOptions = [
                'base_uri' => 'https://octopart.com/api/v4/rest/',
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
                'query' => ['apikey' => $config['apikey']],
            ];

            $this->client = new GuzzleClient($defaultClientOptions);
        } catch (\Exception $e) {
            throw new \Exception('connection error');
        }
    }


    /**
     * @return GuzzleClient|mixed
     */
    public function getClient(): mixed
    {
        return $this->client;
    }


}