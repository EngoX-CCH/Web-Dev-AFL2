<?php

use App\Models\Perfume;
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

Route::view('/','home',
    [
        "mainText" => "Our Latest Perfume Product",
        "description" => "Try out our newest product, it is wangi",
        "extradescription" => "This sweet is what you need."
    ]
);

Route::view('/about', 'about',
    [
        "pagetitle" => "About Us",
    ]
);

Route::view('/contact', 'contact',
    [
        "mainText" => "Contact Us",
        "phoneNumber" => "0887-3846-985",
    ]
);

Route::view('/product', 'products',
    [
        "mainText" => "Our Product",
        "perfumes" => Perfume::index()
    ]
);

Route::get('product/{id}', function($id){
    return view('products', [
        'pagetitle' => 'Product',
        'perfumes' => Perfume::showWriter($id)
    ]);
});
