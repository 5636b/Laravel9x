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
    return view('welcome');
});

Route::prefix('usuarios')->group(function () {
    Route::get('', function () {
        return 'usuário';
    })->name('usuarios');

    Route::get('/{id}', function () {
        return 'Mostrar infos';
    })->name('usuarios.show');
    
    Route::get('/{id}/tags', function () {
        return 'Tags 🧭 ';
    })->name('usuarios.tags');
}); // /usuarios/edit -> Assim ficaria o domínio criado.

Route::get('/empresa/{string?}', function ($string = null) {
    return $string;
});

Route::get('/users/{id?}', function ($id = null) {
    return $id;
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
