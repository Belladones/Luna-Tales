<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home'])->name('app_home');

Route::get('/clubs', [HomeController::class, 'clubs'])->name('app_clubs');

Route::match(['get', 'post'], '/catalogue', [BookController::class, 'showCatalogue'])->name('app_catalogue');

Route::get('/library', [HomeController::class, 'library'])->name('app_library');

Route::get('/article/{id}', [ArticleController::class, 'afficherArticle'])->name('app_article');

Route::match(['get', 'post'], '/tlogin', [loginController::class, 'login'])->name('app_test_login');
Route::match(['get', 'post'], '/tregister', [loginController::class, 'register'])->name('app_test_register');

Route::get('/logout', [LoginController::class, 'logout'])->name('app-logout');
/*
Route::match(['get', 'post'], '/login', [loginController::class, 'login'])->name('app_login');
Route::match(['get', 'post'], '/register', [loginController::class, 'register'])->name('app_login');
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
