<?php

require __DIR__.'/vendor/autoload.php';

return function ($event) {

    $body = (!empty($event['body']) ? json_decode($event['body'], true) : ['name' => null]);

    return [
        'headers' => ['X-Clacks-Overhead' => 'GNU Terry Pratchett'],
        'body' => 'Hello ' . ($body['name'] ?? 'world')
    ];
};
