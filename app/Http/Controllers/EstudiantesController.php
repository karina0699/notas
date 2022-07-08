<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EstudiantesController extends Controller
{

  public function listEstudiantes(Request $request)
  {

    $data =  DB::select('SELECT estudiante.id, estudiante.nombre AS estudiante, profesor.nombre AS profesor, curso.nombre AS curso 
    FROM estudiante 
    INNER JOIN curso ON curso.id = estudiante.fkCurso
    INNER JOIN profesor ON profesor.id = curso.fkProfesor');

    return view('/estudiante/list', compact('data'));
  }

  public function edit($id)
  {
    $data = DB::select('SELECT estudiante.id, estudiante.nombre FROM estudiante WHERE estudiante.id = '.$id);
    $notas = DB::select('SELECT calificacion.nota FROM calificacion WHERE calificacion.fkEstudiante = '.$id);

    $suma = 0;
    for($i=0;$i<count($notas);$i++){
      $suma += $notas[$i]->nota;
    }

    $promedio = $suma / count($notas);
    return view('/estudiante/detalle', compact('data', 'notas', 'promedio'));
  }
}
