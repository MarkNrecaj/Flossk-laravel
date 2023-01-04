<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
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
    return view('welcome');
});

// Route::get('/posts', function () {
//     return view('posts');
// });

// Route::get('/{names}', function ($names) {
//     // $names = ['name1','name2'];
//     $names = [];
//     return view('posts', ['names' => $names]);
// });

Route::get('/test', [Controller::class, 'checkarray']);

// Route::get('/{names}', [TestController::class, 'checkarray2']);

// Route::get('/test/{names}', [Test2Controller::class, 'show']);

Route::get('/test/{names}', [Controller::class, 'checkarray22']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::post('/post', [PostController::class, 'store'])->name('post');

Route::get('/posts/{post}', [PostController::class, 'edit']);

Route::patch('/posts/{post}', [PostController::class, 'update']);










