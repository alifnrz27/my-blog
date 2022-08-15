<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::get('/journals/latest', [JournalController::class, 'latest']);
Route::resource('/journals', JournalController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/comments/store', [CommentController::class, 'store']);
    Route::get('/comments/myPosts', [CommentController::class, 'getMyPosts']);
    Route::delete('/comments/{id}', [CommentController::class, 'destroy']);
    Route::get('/comments', [CommentController::class, 'index']);
    
    Route::get('/posts/all', [PostController::class, 'all']);
    Route::resource('/posts', PostController::class);

    Route::get('/getSlug/{title}', function($title){
        $slug = Str::of($title)->slug('-');
        return response()->json($slug);
    });
});


Route::get('/comments/{slug}', [CommentController::class, 'get']);
Route::delete('/tags', [TagController::class, 'destroy']);
Route::get('/tags/{id}', [TagController::class, 'get']);
Route::resource('/tags', TagController::class)->except('destroy');
