<?php



use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

Route::get('/', 'blogController@index');
Route::get('/profile', 'blogController@biodata');
Route::get('/pengalaman', 'blogController@pengalaman');
Route::get('/portofolio', 'blogController@portofolio');
