<?php

use App\Http\Controllers\PollsController;
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
    return view('index');
});

// Password Reset Route
Route::get('password.reset', function ()
{
    return view('password_reset');
})->name('password_reset');

// Import Routes
Route::get('import', [PollsController::class, 'index']);
Route::post('import', [PollsController::class, 'import'])->name('import');
