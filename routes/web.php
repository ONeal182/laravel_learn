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

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::post('/send-email', function () {
//     if(!empty($_POST)){
//         dump($_POST);
//     }
//     return 'send-email';
// });

Route::match(['get', 'post', 'put'], '/contact', function () {
        if(!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
})->name('contact');

Route::any('/any', function () {
    if(!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
});

Route::view('/test', 'test',['test_date'=>'test']);

Route::redirect('/about', '/contact', 302);

// Route::get('/post/{id}/{slug}', function ($id,$slug) {
//     return 'Post '.$id . ' slug ' . $slug;
// })->where(['id'=> '[0-9]+','slug' => '[A-Za-z0-9-]+']);

Route::get('/post/{id}/{slug?}', function ($id,$slug = null) {
    return 'Post '.$id . ' slug ' . $slug;
})->name('post');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/post', function () {
        return 'posts list';
    });
    
    Route::get('/post/create', function () {
        return 'posts create';
    });
    
    Route::get('/post/{id}/edit', function ($id) {
        return 'posts update ' .$id;
    })->name('post');
});
