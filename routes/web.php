<?php

use App\Livewire\Admin\Products\ProductsLayout;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::view('dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::get('products', ProductsLayout::class)
        ->middleware(['auth', 'verified'])
        ->name('products');

    Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
        Route::view('create', 'livewire.admin.products.create-product')
            ->middleware(['auth', 'verified'])
            ->name('create');
        
        Route::view('list', 'livewire.admin.products.list-products')
            ->middleware(['auth', 'verified'])
            ->name('list');
    });
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
