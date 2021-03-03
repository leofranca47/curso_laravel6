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
    return view('welcome');
});

Route::get("/teste", function () {
    return "deu certo doido";
});

Route::get("/contact", function () {
    return view('contact');
});

Route::get("/amor", function () {
    return view("amor");
});

Route::post("/testePost/{id}", function ($request, $response) {
    return $response . status(200) . json($request);
});

Route::namespace ('Admin')->group(function () {
    Route::prefix('control')->group(function () {
        Route::get('/', 'TesteController@teste');
        Route::get('/wel', 'TesteController@welcome');
    });

});
