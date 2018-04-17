<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Auth\AuthController@getLogin');


Route::group(['prefix' => '', 'middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index');

    //Veste Routes

    //Ajax
    //Route::post('veste/assinaturapost', 'VesteController@assinaturapost');
    Route::post('veste/assinaturapost', 'VesteController@postStoreentregarveste');

    //Implict Controller
    Route::controller('veste', 'VesteController');


    //RelogioExport
    Route::controller('relogio', 'RelogioPontoController');


    //Rotas Funcionários ARRUMAR ISSO
    Route::get('/funcionarios/filtro', 'FuncionarioController@filtro');
    Route::get('/funcionarios/correcoes/index', 'FuncionarioController@formcorrecoes');
    Route::get('/funcionarios/correcoes/correcoes', 'FuncionarioController@correcoes');
    Route::get('/funcionarios/correcoes/sexo', 'FuncionarioController@formcorrecoessexo');
    Route::get('/funcionarios/correcoes/updatesexo/{id}&{sexo}', 'FuncionarioController@corecoessexoupdate');
    Route::get('/funcionarios/aniversariantes', 'FuncionarioController@mostraraniversariantes');


    Route::resource("funcionarios", "FuncionarioController");
    //Fim Rotas Funcionários

    Route::resource("postos", "PostoController");
    Route::resource("motivos", "MotivoController");
    Route::resource("ocorrencias", "OcorrenciaController");
    Route::resource("calculofaltas", "CalculofaltasController");


    Route::get('atestadomedicos/comprovante/{id}', 'AtestadomedicoController@comprovante');
    Route::get('atestadomedicos/recibomanual', 'AtestadomedicoController@recibomanual');
    Route::resource("atestadomedicos", "AtestadomedicoController");


    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');


});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
