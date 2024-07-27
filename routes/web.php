<?php
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;



Route::get('/counter', Counter::class)->name('counter');

Route::get('/counter', function (){

    return view('counter');
})->name('counter');

Route::get('/', function () {
    return view('welcome');
})->name('post');