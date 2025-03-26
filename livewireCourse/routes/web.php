<?php

use App\Livewire\Counter;
use App\Livewire\HelloWorld;
use App\Livewire\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', Todo::class);
Route::get('/counter', Counter::class);
Route::get('/hello', HelloWorld::class);

