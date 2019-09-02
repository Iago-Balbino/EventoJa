<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SchedulesTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('tipo_programacao')->insert([
        //     'nome' => 'Palestra',
        // ]);
        
        DB::table('tipo_programacao')->insert([
            'nome' => 'Minicurso',
        ]);
        
        DB::table('tipo_programacao')->insert([
            'nome' => 'Oficina',
        ]);
    }
}
