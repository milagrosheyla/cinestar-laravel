<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CinestarController extends Controller
{
    public function cines(){
        $cines = DB::select("call sp_getCines");
        return view('cines', ['cines' => $cines]);
    }

    public function peliculas($id){
    $id = $id == 'cartelera' ? 1 : ($id == 'estrenos' ? 2 : 0);
    $peliculas = DB::select("call sp_getPeliculas(?)", [$id]);
    
    return view('peliculas', ['peliculas' => $peliculas, 'id' => $id]);}

    public function pelicula($id)
    {
        $pelicula = DB::select("call sp_getPelicula(?)", [$id]);
        return view('pelicula', ['pelicula' => $pelicula[0]]);
    }




    public function cine($id){
        $cine = DB::select("call sp_getCine(?)", [$id]);
        $cine = $cine[0]; 
        $peliculas = DB::select("call sp_getCinePeliculas(?)", [$id]);
        $tarifas = DB::select("call sp_getCineTarifas(?)", [$id]);

        return view('cine', [
            'cine' => $cine,
            'peliculas' => $peliculas,
            'tarifas' => $tarifas
        ]);
    }
   
}