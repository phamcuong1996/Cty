<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    // production
    Route::get('/production/index', 'ProductionController@index')->name('production.index');
    Route::get('/production/create', 'ProductionController@create')->name('production.create');
    Route::post('/production/store', 'ProductionController@store')->name('production.store');
    Route::get('/production/{id}/edit', 'ProductionController@edit')->name('production.edit');
    Route::get('/production/{id}/update', 'ProductionController@update')->name('production.update');
    Route::get('/production/{id}/destroy', 'ProductionController@update')->name('production.destroy');

    Route::get('/annotate', 'AnnotationController@displayForm');
    Route::post('/annotate', 'AnnotationController@annotateImage');


    Route::get('/', 'LoginController@index')->name('admins.index');

    Route::get('/layout', 'LoginController@adminLte')->name('admins.layout');

    Route::get('/form', 'FormController@index')->name('form.index');

    Route::post('/login', 'LoginController@login')->name('page.login');

    Route::get('/category', 'LoginController@category')->name('page.category');

    Route::get('/post', 'LoginController@post')->name('page.post');

    Route::get('/user', 'LoginController@user')->name('page.user');

    Route::post('/form1', 'FormController1@index')->name('form1.index');

    Route::get(config('translation.ui_url'), 'LanguageController@index')
        ->name('languages.index');

    Route::get(config('translation.ui_url') . '/create', 'LanguageController@create')
        ->name('languages.create');

    Route::post(config('translation.ui_url'), 'LanguageController@store')
        ->name('languages.store');

    Route::get(config('translation.ui_url') . '/{language}/translations', 'LanguageTranslationController@index')
        ->name('languages.translations.index');

    Route::post(config('translation.ui_url') . '/{language}', 'LanguageTranslationController@update')
        ->name('languages.translations.update');

    Route::get(config('translation.ui_url') . '/{language}/translations/create', 'LanguageTranslationController@create')
        ->name('languages.translations.create');

    Route::post(config('translation.ui_url') . '/{language}/translations', 'LanguageTranslationController@store')
        ->name('languages.translations.store');

    Route::get('/language/{language}', 'LanguageController@language')->name('language');

    Route::get('/language/create', 'LanguageController@create')->name('language.create');
});