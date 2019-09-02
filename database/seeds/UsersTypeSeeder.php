<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('tipo_usuario')->insert([
        //     'nome' => 'Participante',
        // ]);
        
        DB::table('tipo_usuario')->insert([
            'nome' => 'Palestrante',
        ]);
        
        DB::table('tipo_usuario')->insert([
            'nome' => 'Administrador',
        ]);
    }
}
