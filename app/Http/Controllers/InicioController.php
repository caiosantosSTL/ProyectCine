<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelox\Cinemat;
use DB;

class InicioController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  /*public function inicio()
  {
      $peliculas = DB::table('peliculas')->get();

      return view('inicio.inicio', compact('peliculas'));
  }*/

  public function inicio()
  {
    $peliculas = DB::table('peliculastab')
    ->leftJoin('genero', 'peliculastab.id_genero', '=', 'genero.id')
    ->leftJoin('lenguaje', 'peliculastab.id_lenguaje', '=', 'lenguaje.id')
    ->leftJoin('director', 'peliculastab.id_director', '=', 'director.id')
    ->leftJoin('pais', 'peliculastab.id_pais', '=', 'pais.id')
    
    ->select('peliculastab.id as id','peliculastab.nombre as NomPeli', 'peliculastab.duracion as duracion',
     'peliculastab.calificacion as calificacion',
    'genero.genero as NomGen', 'lenguaje.lenguaje as NomLeng', 'pais.pais as NomPais')
    
    ->get();

      return view('inicio.inicio', compact('peliculas'));
  }

//************************************************************************************ */


  /*public function verPelicula($id)
  {
      $pelicula = DB::table('peliculas')->where('id', $id)->first();

      return view('inicio.verPelicula', compact('pelicula'));
  }*/


  public function verPelicula($id)
  {
    $pelicula = DB::table('peliculastab')
    ->leftJoin('genero', 'peliculastab.id_genero', '=', 'genero.id')
    ->leftJoin('lenguaje', 'peliculastab.id_lenguaje', '=', 'lenguaje.id')
    ->leftJoin('director', 'peliculastab.id_director', '=', 'director.id')
    ->leftJoin('pais', 'peliculastab.id_pais', '=', 'pais.id')
    
    ->select('peliculastab.id as id','peliculastab.calificacion as calificacion', 
    'peliculastab.duracion as duracion',
    'peliculastab.nombre as NomPeli', 
    'genero.genero as NomGen', 'lenguaje.lenguaje as NomLeng', 'pais.pais as NomPais')
    
    ->where('peliculastab.id', $id)
    ->first();

      return view('inicio.verPelicula', compact('pelicula'));
  }






}


