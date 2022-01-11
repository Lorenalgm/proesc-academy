<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\SetorTipo;

class SetorTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SetorTipo::create([
            'nome' => 'Interno',
        ]);

        SetorTipo::create([
            'nome' => 'Externo',
        ]);
    }
}
