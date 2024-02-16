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

Route::get('/posts',[PostController::class, 'index'])->name(name:'index');

Route::get('/posts/create',[PostController::class, 'create'])->name(name:'create');

Route::post('/post',[PostController::class, 'store'])->name(name:'store');

Route::get('/posts/{post}',[PostController::class, 'show'])->name(name:'show');

Route::get('/posts/{post}/edit',[PostController::class, 'edit'])->name(name:'edit');

Route::PUT('/posts/{post}',[PostController::class , 'update'],)->name(name:'update');

Route::delete('/posts/{post}',[PostController::class , 'destroy'])->name(name:'destroy');



//



// define a new route so the user can access it through browser
// define controller that renders a view
// define view that contains list of posts
// remove any static html data in from the view
