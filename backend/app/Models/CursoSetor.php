<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoSetor extends Model
{
    use HasFactory;

    protected $fillable = [
        'setor_id',
        'curso_id'
    ];

    protected $table = 'cursos_setores';
}
