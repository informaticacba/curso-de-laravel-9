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
    return 'Styde.net';
});

Route::get('/', function () {
    return view('notes');
});

Route::get('notas/{id}', function ($id) {
    return "Detalle de la nota: {$id}";
});

Route::get('/notas/crear', function () {
    return view('add-note');
});

Route::get('notas/{id}/editar', function ($id) {
    return "Editar nota: " . $id;
});

Route::get('/cursos', function () {
    return [
       'cursos' => [
           'Curso de Laravel 9',
           'Curso de programación orientada a objetos',
           'Curso de Git',
       ]
    ];
});
