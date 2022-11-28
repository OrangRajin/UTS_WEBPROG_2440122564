<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\PublishersController;
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
    return view('homePage');
});

Route::view('/Contact', 'contactPage');
// Route::get('/Publisher', PublishersController::class);
// Route::resource('category', CategoryController::class);
// Route::resource('book', BooksController::class);