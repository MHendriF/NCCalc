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
use App\Item;

Route::get('/', function () {
	$data = Item::all();
    return view('welcome', compact('data'));
});

Auth::routes();

Route::get('/home', 'HomeController@index');
route::resource('website', 'AdminController');
route::post('website/{id}', 'AdminController@update');
route::resource('news', 'NewsController');

Route::resource('history', 'HistoryController');
Route::post('history/{id}', 'HistoryController@update');

Route::resource('item', 'ItemController');
Route::post('item/{id}', 'ItemController@update');	

Route::get('result', 'HoaxDetectorController@result');
Route::get('search', 'SearchController@search');

Route::get('/findPrice', 'CalculatorController@findPrice');
// Route::get('/findPrice', array('as'=>'findPrice','uses'=>'CalculatorController@findPrice'));
//Route::post('search', 'SearchController@search');
