<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Master\AccountController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['auth'],
], function () {
    Route::get('/', function () {
        return view('index');
    })->name('dashboard');

    Route::group([
        'prefix' => 'master',
        'as' => 'master.',
    ], function () {

        Route::group([
            'prefix' => 'account',
            'as' => 'account.',
        ], function () {
            Route::get('/', [AccountController::class, 'index'])->name('index');
            Route::get('/create', [AccountController::class, 'create'])->name('create');
            Route::post('/store', [AccountController::class, 'store'])->name('store');
            Route::get('/{uuid}/show', [AccountController::class, 'show'])->name('show');
            Route::get('/{uuid}/edit', [AccountController::class, 'edit'])->name('edit');
            Route::put('/{uuid}/update', [AccountController::class, 'update'])->name('update');
            Route::delete('/{uuid}/destroy', [AccountController::class, 'destroy'])->name('destroy');
        });

    });
});

Route::group([
    'prefix' => 'auth',
    'as' => 'auth.',
    'middleware' => ['guest']
], function () {

    Route::group([
        'prefix' => 'login',
        'as' => 'login.',
    ], function () {
        Route::get('/', [LoginController::class, 'form'])->name('form');
        Route::post('/', [LoginController::class, 'submit'])->name('submit');
    });

    Route::get('/logout', [LogoutController::class, 'logout'])->withoutMiddleware(['guest'])->middleware(['auth'])->name('logout');

});
