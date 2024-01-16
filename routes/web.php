<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome');});

Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/{post}',[PostController::class, 'show']);
Route::get('/test/ok/something',function(){return'test';});







// define a new route so the user can access it through browser
// define controller that renders a view
// define view that contains list of posts
// remove any static html data in from the view
