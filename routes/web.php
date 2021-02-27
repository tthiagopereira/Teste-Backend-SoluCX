<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/cliente'], function () use ($router) {
    $router->get('/', 'ClienteController@index');
    $router->get('/{id}', 'ClienteController@show');
    $router->post('/', 'ClienteController@store');
    $router->put('/{id}', 'ClienteController@update');
    $router->delete('/{id}', 'ClienteController@destroy');
});

$router->group(['prefix' => 'api/colaborador'], function () use ($router) {
    $router->get('/', 'ColaboradorController@index');
    $router->get('/{id}', 'ColaboradorController@show');
    $router->post('/', 'ColaboradorController@store');
    $router->put('/{id}', 'ColaboradorController@update');
    $router->delete('/{id}', 'ColaboradorController@destroy');
});

$router->group(['prefix' => 'api/lojas'], function () use ($router) {
    $router->get('/', 'LojaController@index');
    $router->get('/{id}', 'LojaController@show');
    $router->post('/', 'LojaController@store');
    $router->put('/{id}', 'LojaController@update');
    $router->delete('/{id}', 'LojaController@destroy');
});

$router->group(['prefix' => 'api/transacoes'], function () use ($router) {
    $router->get('/', 'TransacaoController@index');
    $router->post('/', 'TransacaoController@store');
    $router->put('/{id}', 'TransacaoController@update');
});

$router->group(['prefix' => 'api/avaliacao'], function () use ($router) {
    $router->get('/', 'AvaliacaoController@index');
    $router->post('/', 'AvaliacaoController@store');
});
