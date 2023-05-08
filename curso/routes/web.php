<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $nome = "Gabriel";
    $idade = 23;
    $array = [1,3,13,1,3,4];
    $nomes = ["Gabriel", "Nathan", "Almeida" , "Silva"];
    return view('welcome',
                ['nome' => $nome, 'idade' => $idade , 'array' => $array,
                'nomes' => $nomes
            ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {

    $busca = request('search');
    return view('products', ['busca' => $busca]);
});
Route::get('/products/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
