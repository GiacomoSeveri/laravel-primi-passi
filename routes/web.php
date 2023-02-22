<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $title = 'CIAO A TUTTI';
    $links = ['DANI FAIV', 'GOKU', 'POKEMON', 'DUA LIPA', 'MALDINI'];
    $name = 'pagina iniziale';

    return view('home', compact('title', 'links', 'name'));
});

Route::get('/DANI FAIV', function () {
    $title = 'BENVENUTO';
    $name = 'DANI FAIV';

    return view('pages.DANI FAIV', compact('title', 'name'));
});

Route::get('/GOKU', function () {
    $title = 'BENVENUTO';
    $name = 'GOKU';

    return view('pages.GOKU', compact('title', 'name'));
});

Route::get('/POKEMON', function () {
    $title = 'BENVENUTO';
    $name = 'POKEMON';

    return view('pages.POKEMON', compact('title', 'name'));
});

Route::get('/DUA LIPA', function () {
    $title = 'BENVENUTO';
    $name = 'DUA LIPA';

    return view('pages.DUA LIPA', compact('title', 'name'));
});

Route::get('/MALDINI', function () {
    $title = 'BENVENUTO';
    $name = 'MALDINI';

    return view('pages.MALDINI', compact('title', 'name'));
});
