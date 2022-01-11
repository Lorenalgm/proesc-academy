<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CursoFaseAulaMaterial;

class CursosFasesAulasMateriaisController extends Controller
{
    public function index()
    {
        return CursoFaseAulaMaterial::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return CursoFaseAulaMaterial::create($request->all());
    }
}
