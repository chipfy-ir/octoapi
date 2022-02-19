<?php

use Chipfy\Part\Http\Client;
use Chipfy\Part\Resource\Parts;

require_once __DIR__ . '/vendor/autoload.php';

try {
    $c = new Client([
        'apikey' => 'e42de935-bef5-4814-9243-b8bc1dc8fc3d'
    ]);
} catch (Exception $e) {
    throw new Exception();
}

$part = new Parts($c);
$response = $part->getByUID('c8420311e2161785');

$part = $response->getBody()->getContents();

print_r($part);
//var_dump($c->getClient()->request('get', 'parts/c8420311e2161785'));