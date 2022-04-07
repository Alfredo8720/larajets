<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Registro;

class RegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Registro::factory()->count(50)->create();
        // DB::table('registros')->insert([
        //     'nombre'=>'Jose Alfredo',
        //     'a_paterno'=>'Alvarez',
        //     'a_materno'=>'Aviles',
        //     'curp'=>'AAAA871020HBSLVL02',
        //     'n_contacto'=>'6121772448',
        //     'email'=>'josealfredoalvarez7@gmail.com'
        // ]);
    }
}
