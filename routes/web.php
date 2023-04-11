<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleEqController;

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
    return view('index');
})->name('index');

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contacts', function () {
    return view('contacts');
});

Route::get('users/{user_name}/{id?}', function ($user_name, $id = 0) {
    return $user_name . ' - id:' . $id;
})->name('users');

Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return 'admin - index - page';
    });
    Route::get('/welcome/{id}', function ($id) {
        return 'admin - welcome - page with id :' . $id;
    });
});

Route::get('home/{id}', [HomeController::class, 'home'])->name('home');

 Route::resource('article', ArticleController::class);
// Route::resource('article', ArticleController::class)->only('index', 'show');
//Route::resource('article', ArticleController::class)->except('index', 'show');

// Route::resource('login', LoginController::class);
Route::get('login-form', [LoginController::class, 'index'])->name('login.index');
Route::post('login-form', [LoginController::class, 'save'])->name('login.save');
Route::post('login.upload', [LoginController::class, 'upload_file'])->name('login.upload');
Route::get('login-show', [LoginController::class, 'upload_form'])->name('login.upload.show');
Route::get('articles', [HomeController::class, 'articles']);
Route::get('rename', [HomeController::class, 'rename_by_youtube_list']);
Route::get('articles_eq_show', [ArticleEqController::class, 'show']);
Route::get('articles_eq_insert', [ArticleEqController::class, 'insert']);
Route::get('articles_eq_udpate', [ArticleEqController::class, 'update']);
Route::get('articles_eq_delete', [ArticleEqController::class, 'delete']);

