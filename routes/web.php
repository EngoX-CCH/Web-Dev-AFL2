<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "mainText" => "Our Latest Perfume Product",
        "description" => "Try out our newest product, it is wangi",
        "extradescription" => "This sweet is what you need."
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "mainText" => "Our Latest Perfume Product",
        "description" => "Try out our newest product, it is wangi"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "mainText" => "Contact Us",
        "phoneNumber" => "0887-3846-985",
    ]);
});

Route::get('/product', function () {
    return view('products', [
    ]);
});

Route::view(
    '/about',
    'about',
    [
        "pagetitle" => "About Us",
    ]
);

Route::view(
    '/contact',
    'contact',
    [
        "mainText" => "Contact Us",
        "phoneNumber" => "0887-3846-985",
    ]
);

Route::view(
    '/home',
    'home',
    [
        "mainText" => "Heshe Perfume",
        "description" => "Missing Elf.",
        "extradescription" => "This sweet is what you need."
    ]
);

Route::view(
    '/product',
    'products',
    [
        "mainText" => "Our Product"
    ]
);
