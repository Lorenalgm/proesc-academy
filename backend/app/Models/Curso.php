<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'obrigatorio',
        'prazos_dias',
        'icone',
    ];

    protected $table = 'cursos';
}
