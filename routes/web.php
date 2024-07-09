<?php

use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MybookController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/category/{id}', [CategoryController::class, 'search'])->name('category-search');
    Route::get('/favorite', [FavoriteController::class, 'index'])->name('favorite');
    Route::get('/favorite/{id}', [FavoriteController::class, 'add'])->name('favorite-add');
    Route::delete('/favorite/{id}', [FavoriteController::class, 'destroy'])->name('favorite_destroy');
    Route::get('/mybook', [MybookController::class, 'index'])->name('mybook');
    Route::get('/detail/{id}', [DetailController::class, 'index'])->name('detail');
    Route::get('/sukses/{id}', [DetailController::class, 'success'])->name('sukses');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('admin')
    ->middleware([AdminMiddleware::class, 'auth'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin-dashboard');

        Route::resource('user', UserController::class);
        Route::resource('book', BookController::class);
        Route::resource('transaction', TransactionController::class);
    });


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.noticee');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verifyy');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


require __DIR__ . '/auth.php';
