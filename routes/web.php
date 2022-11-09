<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/mahasiswa', function () {
    $nama1 = 'Habel Steven Yani';
    $nilai1 = "A";
    $nama2 = 'Joko Hardono';
    $nilai2 = "B";

    return view('extend.isi1', compact('nama1','nilai1'), compact('nama2','nilai2'));
});

Route::get('/', [App\Http\Controllers\PageController::class,'index']);

Route::get('/mahasiswa',
[PageController::class,'tampil']);
?>
