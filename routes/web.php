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

Route::get('/dashboard', function () {
    return view('Frontend.dashboard.tasks.index');
});

Route::get('/dashboard/tasks', function () {
    return view('Frontend.dashboard.tasks.index');
});

Route::get('/dashboard/task/create', function () {
    return view('Frontend.dashboard.tasks.create');
});

Route::get('/', function () {
    return view('Frontend.home.index');
});

Route::get('/login', function () {
    return view('Frontend.home.login');
});

Route::get('/register', function () {
    return view('Frontend.home.register');
});
