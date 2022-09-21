<?php

use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\frontcontroller;
use App\Http\Controllers\subcategorycontroller;
use Illuminate\Support\Facades\Route;




route::get('/', [frontcontroller::class, 'home'])->name('home');
Route::get('/about', [frontcontroller::class, 'about'])->name('about');
Route::get('/contact', [frontcontroller::class, 'contact'])->name('contact');
Route::get('/service', [frontcontroller::class, 'service'])->name('service');
route::resource('/category',categorycontroller::class);
route::resource('/subcategory',subcategorycontroller::class);
route::get('/books', [frontcontroller::class,'books']);





