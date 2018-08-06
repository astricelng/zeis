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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::
    prefix(Request::segment(1))
    ->middleware(['lang'])
    ->namespace('Web')
    ->group(function()
    {

        // Language Switcher
        Route::name('web.lang-switch')->get('lang/{lang}', 'LanguageController@switchLang');
    
        // Page index view
        Route::name('web.index')->get('/', 'PageController@index');

        // Api para traer listado de proyectos y proyecto en especifico
        Route::resource('banners_list', 'Api\BannersController')
        ->only(['index']);


        Route::get('/js/lang-{locale}.js', function ($locale) {

            if (!in_array($locale, config('translatable.locales'))) {
                $locale = config('app.fallback_locale');
            }

            $strings = Cache::remember('lang-{locale}.js', 0,function () use ($locale) {

                $files   = glob(resource_path('lang/' . $locale . '/pages/*.php'));
                $strings = [];

                foreach ($files as $file) {
                    $name           = basename($file, '.php');
                    $strings[$name] = require $file;
                }

                return $strings;
            });

            $contents = 'window.i18n = ' . json_encode($strings, config('app.debug', false) ? JSON_PRETTY_PRINT : 0) . ';';
            $response = \Response::make($contents, 200);
            $response->header('Content-Type', 'application/javascript');

            return $response;

        })->name('assets.lang');

        Route::post('sendcontact', 'Api\ContactController@store');

     //   Route::name('web.page')->get('/{route}', 'PageController@getPage');

    });

Route::
    prefix('admin')
    ->name('admin.')
    ->namespace('Admin')
    ->group(function()
    {
        
        Route::name('dashboard')->get('/', 'BannersController@index');
        Route::name('login')->get('login', 'Auth\LoginController@showLoginForm');
        Route::name('register')->get('register', 'Auth\RegisterController@showRegisterForm');
        Route::name('register.submit')->post('register', 'Auth\RegisterController@register');
        Route::name('login.submit')->post('login', 'Auth\LoginController@login');
        Route::name('logout')->post('logout', 'Auth\LoginController@logout');



        // Para crear un nuevo banner
        Route::name('create_banner_path')->get('/banners/create', 'BannersController@create');

        // Para almacenar un nuevo banner
        Route::name('store_banner_path')->post('/home', 'BannersController@store');

        // Para editar un banner
        Route::name('edit_banner_path')->get('/banners/{banner}/edit', 'BannersController@edit');

        // Para actualziar un banner
        Route::name('update_banner_path')->put('/banners/{banner}', 'BannersController@update');
    
        // Para borrar un banner especificado
        Route::name('delete_banner_path')->delete('/banners/{banner}', 'BannersController@destroy');

        // Para act/desactivar un banner
        Route::name('active_banner_path')->post('/banners/{banner}', 'BannersController@active');
        
    });

//Auth::routes();
