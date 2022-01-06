<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoFase extends Model
{
    use HasFactory;

    protected $table = 'cursos_fases';

    protected $fillable = [
      'nome',
      'descricao',
      'curso_id',
    ];
}
