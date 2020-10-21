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
    return redirect()->route('products');
})->name("home");

Route::get('/products', function () {
    $data = config("data");
    $pasta = [];

    foreach ($data as $key => $product) {
        $product["id"] = $key;
        $pasta[$product["tipo"]][] = $product;
    }

    return view('prodotti', ["pasta" => $pasta]);
})->name("products");

Route::get('/products/show/{id}', function ($id) {
    $product = config("data.$id");
    return view('prodotto', ["product" => $product]);
})->name("product-single")->where('id', '[0-9]+');

Route::get('/news', function () {
    return view('news');
})->name("news");
