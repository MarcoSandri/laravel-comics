<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\Cloner\Data;

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
    
    $comics = config('comics');

    $data = ['comics' => $comics];

    return view('comics', $data);
})->name('comics');

Route::get('comic_info/{comic_id}', function($comic_id) {
    
    $comics = config('comics');

    if(is_numeric($comic_id) && $comic_id >= 0 && $comic_id < count($comics)) {

        $comicInfo = $comics[$comic_id];
        return view('comic_info', ['comic' => $comicInfo]);

    } else {
        abort(404);
    }

})->name('comic');

