<?php

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

Route::get('/', function () {
    return view('home');
});

// Route::get('problem-11', 'ProblemController@problem1');

// Route::get('problem-12', function () {
// 	return view('problem-12', ['name' => 'Abel Limac']);
// });

Route::get('problem-1', function () {
	return view('problem-1');
});

Route::get('problem-2', function () {
	return view('problem-2');
});

Route::get('problem-3', function () {
	return view('problem-3');
});


Route::post('problem1', 'ProblemController@problem1');
Route::post('problem2', 'ProblemController@problem2');
Route::post('problem3', 'ProblemController@problem3');