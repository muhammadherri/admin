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

Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard','DashboardController@index');
Route::get('/_login','AuthController@index');
Route::post('/postlogin','AuthController@postlogin');

//Template
Route::get('/index','AdminController@index');
//Categori
Route::get('/categories','CategoriesController@index');
Route::get('/search','CategoriesController@search');
Route::post('/categories/create','CategoriesController@create');
Route::post('/categories/{id}/update','CategoriesController@update');
Route::get('/categories/{id}/edit','CategoriesController@edit');
Route::get('/categories/{id}/destroy','CategoriesController@destroy');
//Produk
Route::get('/products','ProductsController@index');

//

Route::get('/main','MainController@index');
Route::get('/master','MasterController@index');
//msworkflow
Route::post('/msworkflow/create','MasterWorkFlowController@create');
Route::get('/msworkflow','MasterWorkFlowController@index');
Route::get('/msworkflow/{WFID}/edit','MasterWorkFlowController@edit');
Route::post('/msworkflow/{WFID}/update','MasterWorkFlowController@update');
Route::get('/search','MasterWorkFlowController@search');
Route::get('/search','MasterWorkFlowController@search2');
Route::get('/search','MasterWorkFlowController@search3');
Route::get('/msworkflow/{WFID}/destroy','MasterWorkFlowController@destroy');


