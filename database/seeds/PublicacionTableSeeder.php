<?php

use Illuminate\Database\Seeder;

class PublicacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('publicacions')->insert([
            'titulo' => 'Bienvenido',
            'texto' => 'Esta es la publicacion de bienvenida al foro, aqui puedes encontrar lo que necesites saber sobre tu mascota',
            'id_usuario' => 1,
            'reportado' => false,
            'id_categoria' => 2, 
            'borrador' => false,
        ]);
        DB::table('publicacions')->insert([
            'titulo' => 'Buenos veterinarios',
            'texto' => 'Buenas amigos ¿Me podrían recomendar buenos veterianarios en el area de Santa Catarina, Nuevo León?',
            'id_usuario' => 3,
            'reportado' => false,
            'id_categoria' => 3,
            'borrador' => false,
        ]);
    }
}
