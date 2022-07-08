<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfesorController extends Controller
{

    public function index(Request $request)
    {
        $data = DB::select('SELECT * FROM profesor');
        return view('/profesor/create', compact('data'));
    }

    public function store(Request $request)
    {
        $nombre = $request->nombre;
        DB::table('profesor')->insert(array(
            'nombre' => $nombre,
        ));

        return redirect()->route('profesor.create');
    }
}
