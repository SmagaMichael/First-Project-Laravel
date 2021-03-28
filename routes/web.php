<?php

use App\Http\Controllers\Shop\MainController;
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

//avant Laravel 8 :
// Route::get('/home',"app/Http/Controllers/Shop/MainController@showProduit");
// Route::get('/home',"Shop/MainController@showProduit");
Route::get('/AllProduct',[MainController::class, 'AllProduct']);


// Route::get('/home', function () {
//     return view('home');
// });
