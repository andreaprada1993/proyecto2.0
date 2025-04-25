<?php


use App\Http\Controllers\CategoriaController;
use Illuminate\Routing\Router;


//pagina principal
Route::get('/', function () {
    return view('template');
});



//ruta del panel

Route::view('/panel', 'panel.index')->name('panel');

//ruta del categorias


//se crea ruta del recurso categoriaController

Route::resource('categorias', CategoriaController::class);

//el login de usuario

Route::get('/login', function () {
    return view('auth.login');
});

//este es las paginas login errores

Route::get('/401', function () {
    return view('pages.401');
});

Route::get('/404', function () {
    return view('pages.404');
});

Route::get('/500', function () {
    return view('pages.500');
});

