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

Route::get('/', 'HomeController@welcome');

Route::any('products/search', 'ProductController@search')->name('products.search');

Route::resource('products', 'ProductController');
/*rotas criadas, mas conseguimos utilizar apenas o resource para chamar as rotas
Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::put('products/{id}', 'ProductController@update')->name('products.update');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::post('products', 'ProductController@store')->name('products.store');
Route::get('products', 'ProductController@index')->name('products.index');
 */

Route::get('/login', function () {
    return 'Login';
});

// Route::get("/teste", function () {
//     return "deu certo doido";
// });

// Route::get("/contact", function () {
//     return view('contact');
// });

// Route::get("/amor", function () {
//     return view("amor");
// });

// Route::post("/testePost/{id}", function ($request, $response) {
//     return $response . status(200) . json($request);
// });

// Route::namespace ('Admin')->group(function () {
//     Route::prefix('control')->group(function () {
//         Route::get('/', 'TesteController@teste');
//         Route::get('/wel', 'TesteController@welcome');
//     });

// });
