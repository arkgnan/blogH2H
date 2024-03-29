<?php

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
    return view('page.landing');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('posts', 'PostController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/daftar', 'EmailController@sendEmailReg');
Route::post('/offer', 'EmailController@sendEmailOffer');
Route::get('/price/{kategory?}', 'PriceController@getPrice');
Route::get('/cetak', 'FramesetController@index');

/*
*
*test belajar route
*/
Route::get('/user/{nama}', function($nama){
    return 'my name is '.$nama;
})->name('profile');

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});