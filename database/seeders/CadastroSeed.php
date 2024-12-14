<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

use Faker\Factory as Faker;

class CadastroSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 0; $i < 15; $i++){

            $cadastro = User::create([
                'nome' => $faker -> name,
                'sobrenome' => $faker -> name,
                'email' => $faker -> name,
                'telefone' => $faker -> randomDigit,
                'cep' => $faker -> randomDigit,
                'numero' => $faker -> randomDigit,
                'rua' => $faker -> name,
                'bairro' => $faker -> name,
                'cidade' => $faker -> name,
                'complemento' => $faker -> name,
                'estado' => $faker -> randomDigit,
                'password' => $faker -> password,
            ]);
        }
    }
}
//