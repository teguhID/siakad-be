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

    // master murid
    $router->get('master/murid', 'Master\Murid@get');
    $router->get('master/murid/{id}', 'Master\Murid@detail');
    $router->post('master/murid/create', 'Master\Murid@create');
    $router->post('master/murid/update/{id}', 'Master\Murid@update');
    $router->get('master/murid/delete/{id}', 'Master\Murid@delete');

    // =========================== Penilaian =========================== 
    $router->get('penilaian', 'Penilaian\Penilaian@get');
    $router->get('penilaian/{id}', 'Penilaian\Penilaian@detail');
    $router->post('penilaian/update/{id}', 'Penilaian\Penilaian@update');

    // =========================== Configuration =========================== 
    // kelas & murid
    $router->get('config/kelas-murid', 'Config\KelasMurid@get');
    $router->get('config/kelas-murid/{id}', 'Config\KelasMurid@detail');
    $router->post('config/kelas-murid/create', 'Config\KelasMurid@create');
    $router->post('config/kelas-murid/update/{id}', 'Config\KelasMurid@update');
    $router->get('config/kelas-murid/delete/{id}', 'Config\KelasMurid@delete');

    // kelas & mata pelajaran
    $router->get('config/kelas-mata-pelajaran', 'Config\KelasMataPelajaran@get');
    $router->get('config/kelas-mata-pelajaran/{id}', 'Config\KelasMataPelajaran@detail');
    $router->post('config/kelas-mata-pelajaran/create', 'Config\KelasMataPelajaran@create');
    $router->post('config/kelas-mata-pelajaran/update/{id}', 'Config\KelasMataPelajaran@update');
    $router->get('config/kelas-mata-pelajaran/delete/{id}', 'Config\KelasMataPelajaran@delete');

    // guru & kelas
    $router->get('config/guru-kelas', 'Config\GuruKelas@get');
    $router->get('config/guru-kelas/{id}', 'Config\GuruKelas@detail');
    $router->post('config/guru-kelas/create', 'Config\GuruKelas@create');
    $router->post('config/guru-kelas/update/{id}', 'Config\GuruKelas@update');
    $router->get('config/guru-kelas/delete/{id}', 'Config\GuruKelas@delete');

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