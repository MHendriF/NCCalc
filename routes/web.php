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

Route::group(['middleware' => 'authenticate'], function() {
	Route::resource('item', 'ItemController');
	Route::post('item/{id}', 'ItemController@update');
	Route::get('saran', 'AdminController@kritik_saran');	
});


Route::get('/home', 'HomeController@index');
Route::post('sentKritik', 'AdminController@simpan_kritik');
Route::get('/findPrice', 'CalculatorController@findPrice');
// Route::get('/findPrice', array('as'=>'findPrice','uses'=>'CalculatorController@findPrice'));
//Route::post('search', 'SearchController@search');
