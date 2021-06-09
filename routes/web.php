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

    $comics_array = config('comics');

    $data = [
        'comics_array' => $comics_array
    ];
    
    return view('homepage', $data);
})->name('home');


Route::get('/comic/{id}', function ($id) {
    $comics_array = config('comics');

    $details = [];
    foreach($comics_array as $comic) {
        if($comic['id'] == $id)
        $details = $comic;
    }

    if(empty($details)) {
        abort('404');
    }

    $data = [
        'details' => $details
    ];

    return view('comic', $data);
})->name('comic');