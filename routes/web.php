<?php
use App\Http\Controllers\AnimalController;

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
Route::get('/animals', 'AnimalController@index');

Route::get('/animals/{id}', 'AnimalController@show');

Route::resource('/plants','PlantController');


Route::resource('/plants/{id}', 'PlantController@show');