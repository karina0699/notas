<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CursoController extends Controller
{

  public function index(Request $request)
  {
    $listaProfesor = DB::select('SELECT * FROM profesor');

    $cursos = DB::select('SELECT curso.id, curso.nombre AS curso, profesor.nombre AS profesor
    FROM curso
    INNER JOIN profesor ON profesor.id = curso.fkProfesor');

    return view('curso/create', compact('listaProfesor', 'cursos'));
  }

  public function store(Request $request)
  {
      $cursoNombre = $request -> curso;
      $profesorId = $request -> profesor;

      DB::table('curso')->insert(array(
          'nombre' => $cursoNombre, 
          'fkProfesor' => $profesorId
      )); 

      return redirect()->route('curso.create');
  }
}
