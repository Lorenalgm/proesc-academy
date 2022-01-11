<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setor;

class SetorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setor::create([
            'nome' => 'Suporte',
            'setor_tipo_id' => 1,
        ]);

        Setor::create([
            'nome' => 'Desenvolvimento',
            'setor_tipo_id' => 1,
        ]);
    }
}
