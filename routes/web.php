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

Route::get('/characters', function () {
    return 'Characters page';
})->name('characters');

Route::get('/comics', function () {
    $comics_list = config('db.comics_list');
    //dd($comics);
    return view('comics.comics', compact('comics_list'));
})->name('comics.comics');

Route::get('/comics/{id}', function ($id) {
    $comics_list = config('db.comics_list');
    if ($id >= 0 && is_numeric($id) && $id < count($comics_list)) {
        //dd($id);
        //dd($comics_list[$id]);
        $comic = $comics_list[$id];
        return view('comics.show', compact('comic'));
    } else {
        abort(404);
    }
})->name('comics.show');

Route::get('/moveis', function () {
    return 'Movies page';
})->name('movies');

Route::get('/tv', function () {
    return 'Tv page';
})->name('tv');

Route::get('/games', function () {
    return 'Games page';
})->name('games');

Route::get('/collectibles', function () {
    return 'Collectibles page';
})->name('collectibles');

Route::get('/videos', function () {
    return 'Videos page';
})->name('videos');

Route::get('/fans', function () {
    return 'Fans page';
})->name('fans');

Route::get('/news', function () {
    return 'News page';
})->name('news');

Route::get('/shop', function () {
    return 'Shop page';
})->name('shop');
