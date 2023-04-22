<?php

namespace App\Http\Controllers;


use App\Models\Ort;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class OrteController extends Controller
{
    public function ertragswertverfahren() {
        $status='de';
        return view ('ertragswertverfahren', compact('status'));
    }
    public function sachwertverfahren() {
        $status='de';
        return view ('sachwertverfahren', compact('status'));
    }
    public function verkehrswertverfahren() {
        $status='de';
        return view ('verkehrswertverfahren', compact('status'));
    }
    public function gewerbeimmobilien() {
        $status='de';
        return view ('gewerbeimmobilien', compact('status'));
    }
    public function grundstuecke() {
        $status='de';
        return view ('grundstuecke-und-rechte', compact('status'));
    }
    public function landwirtschaftliche() {
        $status='de';
        return view ('landwirtschaftliche-immobilien', compact('status'));
    }
    public function sonderimmobilien() {
        $status='de';
        return view ('sonderimmobilien', compact('status'));
    }
    public function wohnimmobilien() {
        $status='de';
        return view ('wohnimmobilien', compact('status'));
    }
    public function ueberuns() {
        $status='de';
        return view ('ueber-uns', compact('status'));
    }
    public function impressum() {
        $status='de';
        return view ('impressum', compact('status'));
    }
    public function datenschutzerklaerung() {      $status='de';      return view ('datenschutzerklaerung', compact('status'));  }
    
    // Show single lisitng
    public function show($ortDE) {
        
        $cityData = DB::table('orteDE')->select('laengengrad', 'breitengrad')->where('ort_umlaut', $ortDE)->first();
        $laengengrad = $cityData->laengengrad;
        $breitengrad = $cityData->breitengrad;//

        $nearestCities = DB::select(DB::raw("
        SELECT DISTINCT ort_umlaut, ort,
        (
            3959 * acos (
                cos ( radians(?) )
                * cos( radians( breitengrad ) )
                * cos( radians( laengengrad ) - radians(?) )
                + sin ( radians(?) )
                * sin( radians( breitengrad ) )
            )
        ) AS distance
        FROM orteDE
        HAVING distance < 50
        ORDER BY distance
        LIMIT 0 , 16
    "), [$breitengrad, $laengengrad, $breitengrad]);
      
        return view('immobilienbewertung', [
            'nearestCities' => $nearestCities,
            'ortsname'=> $ortDE,
            ]);    }  

    public function index() {
        $status='at';
        return view ('index', compact('status'));
    }
    
}
