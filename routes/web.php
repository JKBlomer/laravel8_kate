<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[WelcomeController::class,'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth']], function(){
    Route::get('/bookmarks',[BookmarkController::class,'index'])->name('bookmark.index');
    Route::get('/bookmark/add',[BookmarkController::class,'add'])->name('bookmark.add');
    Route::get('/bookmark/view/{bookmark}',[BookmarkController::class,'view'])->name('bookmark.view');
    Route::post('/bookmark/make-active',[BookmarkController::class,'makeActive'])->name('bookmark.active');

    Route::post('/bookmark/preview',[BookmarkController::class,'getPreviewData'])->name('bookmark.preview');
});
