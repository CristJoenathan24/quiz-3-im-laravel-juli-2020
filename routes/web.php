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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/project/create', 'ProjectsController@create'); // menampilkan halaman form
Route::post('/project', 'ProjectsController@store'); // menyimpan data
Route::get('/project', 'ProjectsController@index'); // menampilkan semua

Route::get('/project/{id}', 'ProjectsController@show'); // menampilkan detail item dengan id

Route::get('/project/{id}/edit', 'ProjectsController@edit'); // menampilkan form untuk edit item
Route::put('/project/{id}', 'ProjectsController@update'); // menyimpan perubahan dari form edit
Route::delete('/project/{id}', 'ProjectsController@destroy'); // menghapus data dengan id

Route::get('/project/{id}/daftarkan-staff');
Route::post('/project/{id}/daftarkan-staff');
