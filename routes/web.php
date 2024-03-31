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
    $json = file_get_contents(storage_path('app_data/projects.json'));

    $json_data = json_decode($json, true);

    $activePage = 'home';
    return view('index', ['projects' => $json_data, 'activePage' => $activePage]);
});
