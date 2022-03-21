<?php

use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
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
Route::get('forgot_password', [UserController::class, 'forgot_password'])->name('forgot_password');

// Backend Routes
Route::middleware('auth')->prefix('backend')->name('backend.')->group(function ()
{
    // Imports
    Route::get('import', [PollsController::class, 'index']);
    Route::post('import', [PollsController::class, 'import'])->name('import');

    // Polls table
    Route::get('table', [PollsController::class, 'table']);

    // Data Studio Preview
    Route::get('data_studio', [PollsController::class, 'data_studio']);

    //Roles
    Route::resource('roles', RoleController::class);

    //Users
    Route::resource('users', UserController::class);
});
