<?php

use App\models\Pessoa;
use Illuminate\Database\Seeder;

class PessoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pessoa::create([
            "nome" => "Jefferson Henrique",
            "cpf" => 12345678912,
            "email" => "jhsg.dev@gmail.com",
            "data_nasc" => "1995-01-12",
            "nacionalidade" => "Brasileiro"
        ]);
    }
}
