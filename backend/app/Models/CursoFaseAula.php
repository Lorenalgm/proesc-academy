<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoFaseAula extends Model
{
    use HasFactory;

    protected $table = 'cursos_fases_aulas';

    protected $fillable = [
        'curso_fase_id',
        'nome',
        'descricao',
        'link'
    ];
}
