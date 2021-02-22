<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('register', 'AuthController@register');
$router->post('login', 'AuthController@login');
$router->get('logout', 'AuthController@logout');

$router->get('test', 'Master\Kelas@get');

$router->group(['middleware' => 'auth'], function () use ($router) {

    // =========================== Master Data =========================== 
    // master kelas
    $router->get('master/kelas', 'Master\Kelas@get');
    $router->get('master/kelas/{id}', 'Master\Kelas@detail');
    $router->post('master/kelas/create', 'Master\Kelas@create');
    $router->post('master/kelas/update/{id}', 'Master\Kelas@update');
    $router->get('master/kelas/delete/{id}', 'Master\Kelas@delete');

    // master mata pelajaran
    $router->get('master/mata-pelajaran', 'Master\MataPelajaran@get');
    $router->get('master/mata-pelajaran/{id}', 'Master\MataPelajaran@detail');
    $router->post('master/mata-pelajaran/create', 'Master\MataPelajaran@create');
    $router->post('master/mata-pelajaran/update/{id}', 'Master\MataPelajaran@update');
    $router->get('master/mata-pelajaran/delete/{id}', 'Master\MataPelajaran@delete');

    // =========================== User Management =========================== 
    // user management User
    $router->get('user-management/user', 'UserManagement\Users@get');
    $router->get('user-management/user/{id}', 'UserManagement\Users@detail');
    $router->post('user-management/user/create', 'UserManagement\Users@create');
    $router->post('user-management/user/update/{id}', 'UserManagement\Users@update');
    $router->get('user-management/user/delete/{id}', 'UserManagement\Users@delete');

    // user management Role
    $router->get('user-management/role', 'UserManagement\Roles@get');
    $router->get('user-management/role/{id}', 'UserManagement\Roles@detail');
    $router->post('user-management/role/create', 'UserManagement\Roles@create');
    $router->post('user-management/role/update/{id}', 'UserManagement\Roles@update');
    $router->get('user-management/role/delete/{id}', 'UserManagement\Roles@delete');

});