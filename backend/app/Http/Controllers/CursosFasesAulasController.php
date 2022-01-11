<?php

namespace App\Http\Controllers;

use App\Models\CursoFaseAula;

use Illuminate\Http\Request;

class CursosFasesAulasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CursoFaseAula::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CursoFaseAula::create($request->all());
    }
}
