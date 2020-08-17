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
    return view('welcome');
});
Route::get('/register','employeecontroller@index');
Route::post('/register','employeecontroller@submit')->name('ereg');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','InternController@index')->middleware('auth');

Route::get('/pet',function(){
	return view('petreg');
});

Route::Resource('/petregister','PetregController', [
    'names' => [
        'index' => 'petregister',
        'store' => 'petregister.store',
        'show'=>'petregister.show',
        'update'=>'petregister.update',
        'delete'=>'petregister.delete',
        'edit'=>'petregister.edit',
        ]
    
    ]);
//Route::get('/pet','PetregController@edit')->name('edit');

