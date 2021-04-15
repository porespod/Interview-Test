<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\User;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Home Controller route
Route::get('/', [HomeController::class, 'index'])->name('home');

// User Controller route
// List of all users
Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Create new user 
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Store new user in database
Route::post('/user', [UserController::class, 'store'])->name('user.store');

// Show specific user's information
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.detail');

// Delete user in database
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.delete');

//Show editable page for user's information
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');

//Update information in database
Route::patch('/user/{id}', [UserController::class, 'update'])->name('user.update');
