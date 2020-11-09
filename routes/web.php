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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return 'Hello world';
// });

// Route::get('/', function () {
//     $res = 2 + 3;
//     $name = 'jojo';
//     return view('home')->with('var',$res);
// });

// Route::get('/', function () {
//     $res = 2 + 3;
//     $name = 'jojo';
//     return view('home', ['var'=>$res, 'name'=>$name]);
// });

Route::get('/', function () {
    $res = 2 + 3;
    $name = 'jojo';
    return view('home', compact('res','name'));
});

Route::get('/about', function () {
    return 'This page is about';
});