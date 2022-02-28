<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
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
    echo('ini adalah Home');
});
Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games',function(){
        echo "ini halaman Marbel Edu Games";
    });
    Route::get('/riri-story-books',function(){
        echo "ini halaman Riri Story Books";
    });
    Route::get('/marbel-and-friends-kids-games',function(){
        echo "ini halaman Marbel and Friends Kids Games";
    });
    Route::get('/kolak-kids-songs',function(){
        echo "ini halaman Kolak Kids Songs";
    });
});
Route::get('/news',[NewsController::class, 'index']);
Route::get('/news/{id}',[NewsController::class, 'details']);
Route::prefix('program')->group(function(){
    Route::get('/karir', function (){
        echo "ini halaman Karir";
    });
    Route::get('/magang', function (){
        echo "ini adalah halaman magang";
    });
    Route::get('/kunjungan-industri', function (){
        echo "ini adalah halaman Kunjungan Industri";
    });
});

Route::get('/about-us', function (){
    return view("aboutus");
});

Route::resource('contact-us', ContactController::class);
