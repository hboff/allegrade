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
    return view('index');
});
Route::get('/verkehrswertverfahren', function () {
    return view('verkehrswertverfahren');
});
Route::get('/immoilienbewertung/{ort}', [OrteController::class, 'show'], function () use ($domainData) {})
            ->middleware('cache.headers:private;max_age=3600');
