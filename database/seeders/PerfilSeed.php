<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Perfil;

use Faker\Factory as Faker;

class PerfilSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 0; $i < 15; $i++){

            $perfil = Perfil::create([
                'nome' => $faker -> name,
                'sobrenome' => $faker -> lastname,
                'email' => $faker -> name,
                'telefone' => $faker -> randomDigit,
                'cursos' => $faker -> name,
                'formacoes' => $faker -> name,
                'experiencias' => $faker -> name,
                'sobre' => $faker -> name,
                'redes' => $faker -> name,
            ]);
        }
    }
}
//