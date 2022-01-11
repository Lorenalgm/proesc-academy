<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoFaseAulaMaterial extends Model
{
    use HasFactory;

    protected $table = 'cursos_fases_aulas_materiais';

    protected $fillable = [
        'curso_fase_aula_id',
        'link',
        'nome'
    ];
}
