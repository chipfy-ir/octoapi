<?php

namespace Chipfy\Part\Resource;

use Chipfy\Part\Core\Resource;

class Parts extends Resource
{
    /**
     * @param string $uid
     * @return mixed
     */
    public function getByUID(string $uid)
    {
        $endpoint = "parts/{$uid}";
        return $this->client()->request('get', $endpoint);
    }

    /**
     * @param array $queries
     * @param bool $exact_only
     * @param array $include
     * @return void
     */
    public function match(array $queries, bool $exact_only = false, array $include = [])
    {
        $endpoint = 'parts/match';
        $options['query'] = [
            'queries' => json_encode($queries),
            'exact_only' => $exact_only,
            'include' => $include,
        ];

        return $this->client()->request('get', $endpoint, $options);

    }
}