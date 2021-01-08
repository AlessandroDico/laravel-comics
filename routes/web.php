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
    $comicsArray = config('comicsData');

    $data = [
        'comics' => $comicsArray,
    ];

    return view('home', $data);
})->name('homepage');

// rotta singolo fumetto
Route::get('/comic/{id}', function($id) {
    $comicsArray = config('comicsData');

    if (!array_key_exists($id, $comicsArray)) {
        abort('404');
    };

    $singleBook = $comicsArray[$id];
    $data = [
        'book' => $singleBook,
    ];

    return view('singleComic', $data);

})->name('singleProduct');
