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
    return view('homepage');
})->name('homepage');

Route::get('/about', function () {
    return view('about-us');
})->name('about-us');

Route::get('/link', function () {
    $data= [
        'name' => 'Francesco',
        'cognome' =>'Coclìte',
    ];
    return view('link',$data);
})->name('link');

Route::get('/banana', function () {
    $data= [
        'img' => 'data:image/jpeg;base64,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',
        
    ];
    return view('banana',$data);
})->name('banana');
