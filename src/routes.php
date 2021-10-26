<?php

use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/novo', 'UsuarioController@add');
$router->post('/novo', 'UsuarioController@addAction');

$router->get('/edit/{id}/editar', 'UsuarioController@edit');
$router->post('/edit/{id}/editar', 'UsuarioController@editAction');

$router->get('/del/{id}/excluir', 'UsuarioController@del');
