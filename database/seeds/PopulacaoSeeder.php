<?php

use Illuminate\Database\Seeder;

class PopulacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\User::class, 5)->create();
        \App\Entities\UserType::create([
            'nome' => 'Admisnistrador',
            'descricao' => 'Admisnistrador',
            'status' => '1',
        ]);
        \App\Entities\UserType::create([
            'nome' => 'Organizador',
            'descricao' => 'Organizador',
            'status' => '1',
        ]);
        \App\Entities\UserType::create([
            'nome' => 'Participante',
            'descricao' => 'Participante',
            'status' => '1',
        ]);

        factory(App\Entities\UserTypeUser::class, 5)->create();
    }
}
