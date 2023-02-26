<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrteController;
use App\Http\Controllers\ContactController;

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
$routes = [
    'verkehrswertverfahren',
    'impressum',
    'datenschutzerklaerung',
    'ertragswertverfahren',
    'gewerbeimmobilien',
    'grundstuecke-und-rechte',
    'landwirtschaftliche-immobilien',
    'sachwertverfahren',
    'sonderimmobilien',
    'ueber-uns',
    'wohnimmobilien',
    
];

$domains = [
    'immobilienbewertung-duisburg.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
    ],
    'immobilienbewertung-wuppertal.eu' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
    ],
    
];
foreach ($domains as $domain => $domainData) {
    Route::domain($domain)->group(function () use ($routes, $domainData) {
        Route::get('/', [OrteController::class, 'index']);
        Route::get('/immobilienbewertung/{ort}', [OrteController::class, 'show'], function () use ($domainData) {})
                ->middleware('cache.headers:private;max_age=3600');
        Route::get('/immobilienbewertungen/{region}', function($region){
            return view ('immobilienbewertungen', ['ortsname' => $region]);
    });
        Route::get('contact-us', [ContactController::class, 'index']);
        Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

    foreach ($routes as $route) {
    Route::get($route, function () use ($route, $domainData) {
    
    return view($route);
    });
    }
    });
    }