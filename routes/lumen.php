<?php

use Illuminate\Support\Facades\Route;

$prefix     = config('scribe.laravel.docs_url', '/docs');
$middleware = config('scribe.laravel.middleware', []);

Route::group(['namespace' => '\Knuckles\Scribe\Http', 'middleware' => $middleware], function ($router) use ($prefix) {
    $router->get($prefix, ['uses' => 'Controller@webpage', 'name' => 'scribe']);
    $router->get($prefix . 'postman', ['uses' => 'Controller@postman', 'name' => 'scribe.postman']);
    $router->get($prefix . 'openapi', ['uses' => 'Controller@openapi', 'name' => 'scribe.openapi']);
});
