<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'setor_tipo_id',
        'user_id'
    ];

    protected $table = 'setores';
}
