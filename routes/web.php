<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthManager;

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

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::get('/', [AuthManager::class, 'home'])->name('home');
Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
