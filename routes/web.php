<?php

use App\Http\Controllers\PostController;
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

Route::get('/journals', function () {
    return view('journals.index');
});

Route::get('/journals/detail', function () {
    return view('journals.detail');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/posts/all', [PostController::class, 'all']);
    Route::resource('/posts', PostController::class);

    Route::get('/getSlug/{title}', function($title){
        $slug = Str::of($title)->slug('-');
        return response()->json($slug);
    });
});
