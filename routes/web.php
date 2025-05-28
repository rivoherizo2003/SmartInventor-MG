<?php

use App\Livewire\Admin\Products\CreateProduct;
use App\Livewire\Admin\Products\ListProducts;
use App\Livewire\Admin\Products\ProductsLayout;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::view('dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
        Route::get('create', CreateProduct::class)
            ->middleware(['auth', 'verified'])
            ->name('create');
        
        Route::get('list', ListProducts::class)
            ->middleware(['auth', 'verified'])
            ->name('list');
    });
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
