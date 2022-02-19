<?php

namespace Chipfy\Part\Core;

use Chipfy\Part\Http\Client;

abstract class Resource
{
    public function __construct(public Client $client)
    {
    }

    /**
     * @return Client
     */
    public function client(): mixed
    {
        return $this->client->getClient();
    }

}