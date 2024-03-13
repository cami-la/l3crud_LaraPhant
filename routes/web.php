<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\CreateCustomer;
use App\Livewire\Customers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers/create', CreateCustomer::class);
Route::get('/customers', Customers::class);

