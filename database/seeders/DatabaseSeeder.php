<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehiculo;
use App\Models\Conductor;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Vehiculo::create(['placa' => 'SKN456', 'marca' => 'Mercedez', 'modelo' => '2005', 'color' => 'Rojo']);
        Vehiculo::create(['placa' => 'ABC333', 'marca' => 'Chevrolet', 'modelo' => '2010', 'color' => 'Azul metalizado']);
        Vehiculo::create(['placa' => 'ZJSA123', 'marca' => 'Bugatti', 'modelo' => '2019', 'color' => 'Negro']);
        Vehiculo::create(['placa' => 'UPJ-223','marca' => 'Chevrolet','modelo' => 'Npr Reward Euro Iv','color' => 'blanco']);
        Vehiculo::create(['placa' => 'WSK', 'marca' => 'International', 'modelo' => '2006', 'color' => 'Naranja']);
        Vehiculo::create(['placa'=>'IEF768', 'marca'=>'Renault', 'modelo'=>'1999', 'color'=>'magenta']);
        Vehiculo::create(['placa'=> 'SAQ123', 'marca' => 'MAZDA', 'modelo' => '2023', 'color' => 'Negro']);
        Vehiculo::create(['placa' => 'GBT78J', 'marca' => 'International', 'modelo' => '2012', 'color' => 'Verde']);
        Vehiculo::create(['placa' => 'JUA156', 'marca' => 'Mazda', 'modelo' => '2018', 'color' => 'Negro']);
        Vehiculo::create(['placa' => 'LYF611', 'marca' => 'Renault', 'modelo' => '2020', 'color' => 'Azul petroleo']);
        Vehiculo::create(['placa' => 'STW521', 'marca' => 'Hyundai', 'modelo' => '2020', 'color' => 'Azul']);
        Vehiculo::create(['placa' => 'FGT970', 'marca' => 'renault', 'modelo' => '2021' , 'color' => 'negro']);

        Conductor::create(['documento_identificacion' => '79888666','nombre' => 'Camilo Chavez','celular' => '3158887766','email' => 'camilo@gmail.com','fecha_nacimiento'=>'1978-05-22']);
        Conductor::create(['documento_identificacion' => '12312312312', 'nombre' => 'Pedro', 'celular' => '3101232123123', 'email' => 'jdmasasn@hotmail.com', 'fecha_nacimiento' => '1993-05-12']);
        Conductor::create(['documento_identificacion' =>'80493739', 'nombre'=>'Carlos Rocas', 'celular'=>'3279182782', 'email'=>'crocas@gmail.com', 'fecha_nacimiento'=>'1960-09-30']);
        Conductor::create(['documento_identificacion' => '54534213','nombre' => 'Luis','celular' => '3132532654','email' => 'luisv@gmail.com','fecha_nacimiento'=>'1998-08-10']);
        Conductor::create(['documento_identificacion' => '80254981', 'nombre' => 'Edwrad', 'celular' => '3223199735', 'email' => 'edwsherkan@hotmail.es', 'fecha_nacimiento' => '1991-12-08']);
        Conductor::create(['documento_identificacion' => '1022358336','nombre' => 'Nelson Liberato', 'celular' => '3102939372', 'email' => 'nelson@gmail.com', 'fecha_nacimiento' => '1989-05-11']);
        Conductor::create(['documento_identificacion' => '58471269', 'nombre' => 'Oscar', 'celular' => '3584569871', 'email' => 'oscar@oscar.com', 'fecha_nacimiento' => '1990-01-01']);
        Conductor::create(['documento_identificacion' => '12345678', 'nombre' => 'Cosme Fulanito', 'Celular' => '3123456789', 'email' => 'cosme_f@correo.com', 'fecha_nacimiento' => '1994-04-03']);
        Conductor::create(['documento_identificacion' => '1018517861', 'nombre' => 'DANIEL ROJAS', 'celular' => '3154823456' , 'email' => 'drojas@gmail.com' , 'fecha_nacimiento' => '1999-07-24']);
        Conductor::create(['documento_identificacion' => '1054478566', 'nombre' => 'Juan Carlos Paez', 'celular'=>'321456789', 'email'=>'juanp@gmail.com', 'fecha_nacimiento' => '2000-05-01']);
        Conductor::create(['documento_identificacion' => '1233903863', 'nombre'=>'cristofer payan', 'celular'=>'3142659038', 'email'=>'crispromax00@gmail.com', 'fecha_nacimiento'=>'1998-10-28']);
        Conductor::create(['documento_identificacion' => '1010063835', 'nombre'=>'Andres', 'celular'=>'3125397645', 'email'=>'andre5843@grupooet.com', 'fecha_nacimiento'=>'2000-09-08']);

    }


    protected function truncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
