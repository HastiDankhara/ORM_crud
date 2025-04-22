<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

// Route::get('/', function () {
//     return view('welcome');
// });

// for show
Route::resource('crud',CrudController::class);

// for single user
// Route::get('/show', function () {
//     return view('show');
// });

// for insert
// Route::get('/insert', function () {
//     return view('insert');
// });

// for update
// Route::get('/update', function () {
//     return view('update');
// });
