<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



/*
 * Routes for authenticated users
 */
Route::get('auth/login',[
    'uses' => 'Auth\LoginController@getLogin',
    'as'   => 'auth.login'
]);

Route::post('auth/login',[
    'uses' => 'Auth\LoginController@login',
    'as'   => 'login'
]);

Route::group(['middleware'=>'auth'], function (){
    Route::get('auth/logout',[
        'uses' => 'Auth\LoginController@logout',
        'as'   => 'auth.logout'
    ]);
});

//Route::get('/home','HomeController@home')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth']],function (){

    //Unidades
    Route::resource('unidades','UnidadController');
    Route::get('unidades/{id}/destroy',[
        'uses'=>'UnidadController@destroy',
        'as'  =>'unidades.destroy'
    ]);

    //Directores
    Route::resource('directores','DirectorController');
    Route::get('directores/{id}/destroy',[
        'uses'=>'DirectorController@destroy',
        'as'  =>'directores.destroy'
    ]);

    //Asignaturas
    Route::resource('asignaturas','AsignaturaController');
    Route::get('asignaturas/{id}/destroy',[
        'uses'=>'AsignaturaController@destroy',
        'as'  =>'asignaturas.destroy'
    ]);

    //Usuarios
    Route::resource('usuarios','UsuarioController');
    Route::get('usuarios/{id}/destroy',[
        'uses'=>'UsuarioController@destroy',
        'as'  =>'usuarios.destroy'
    ]);

    //Municipios
    Route::resource('municipios','MunicipioController');
    Route::get('municipios/{id}/destroy',[
        'uses'=>'MunicipioController@destroy',
        'as'  =>'municipios.destroy'
    ]);

    //Consejos Populares
    Route::resource('consejosp','ConsejopController');
    Route::get('consejosp/{id}/destroy',[
        'uses'=>'ConsejopController@destroy',
        'as'  =>'consejosp.destroy'
    ]);

    //Grupos
    Route::resource('grupos','GrupoController');
    Route::get('grupos/{id}/destroy',[
        'uses'=>'GrupoController@destroy',
        'as'  =>'grupos.destroy'
    ]);

    //Grados
    Route::get('/{id_unidad}/grados','GradoController@index')->name('grados.index');
    Route::get('/{id_unidad}/grados/create','GradoController@create')->name('grados.create');
    Route::post('/{id_unidad}/grados/store','GradoController@store')->name('grados.store');
    Route::get('/grados/{id}/edit','GradoController@edit')->name('grados.edit');
    Route::put('/grados/{id}/update','GradoController@update')->name('grados.update');
    Route::get('/grados/{id}/destroy','GradoController@destroy')->name('grados.destroy');

    //Grupos
    Route::get('/grupos','GrupoController@index')->name('grupos.index');
});
