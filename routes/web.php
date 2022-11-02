<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
    return view('home.index');
});

Route::get('/scan', function () {
    return view('core.index');
})->name('scan');

Route::get('/article', function () {
    $response = Http::get('https://gnews.io/api/v4/search', [
        'q' => 'plant disease',
        'max' => 8,
        'lang' => 'en',
        'token' => '745cbe9620ef2d4ddf855fa58340352b',
    ]);
    $result = json_decode($response, true)['articles'];
    // return $result;
    return view('article.index', compact('result'));
})->name('article');

if(env('APP_ENV') == 'production'){
    URL::forceScheme('https');
}