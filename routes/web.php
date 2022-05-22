<?php

use App\Http\Controllers\TodoController;
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

Route::redirect('/', '/list/all');
Route::controller(TodoController::class)->group(function () {
    Route::get('/list/{state}/{id?}', 'list')->where('state', 'all|active|completed')->where('id', '[0-9]+');
});
