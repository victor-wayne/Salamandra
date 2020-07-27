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


Route::get('/', [
    'as' => 'home',
    'uses' => 'MarketingController@index'
]);

Route::get('/nuestros-servicios', [
    'as' =>'servicios',
    'uses' => 'ServiciosController@index'
]);

Route::get('/marketing-medico', [
    'as' =>'mkt',
    'uses' => 'MktController@index'
]);

Route::get('contact-us', ['as' =>'contactus-show', 'uses' => 'ContactUSController@contactUS']);

Route::post('contact-us',['as'=>'contactus.store', 'uses'=>'ContactUSController@contactUSPost']);