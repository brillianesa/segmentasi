<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\ContSegmentasiutama;
use App\Http\Controllers\SegmentasiController;
use App\Models\User;
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
    return view('dashboard');
});

Route::get('/hasilklaster', [SegmentasiController::class, 'segmentasi']);

Route::get('/pie', [ChartController::class, 'pieChart']);
// Route::get('/pie', [ChartController::class, 'pieChart1']);

Route::get('dashboard', function () {
    return view('dashboard');
});
