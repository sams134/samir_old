<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUserTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_types', function (Blueprint $table) {
            $table->id();
            $table->string('userType');
            $table->integer('security');
        });
        DB::table('user_types')->insert(array(
            array('userType'=>'Developer','security'=>'10'), //ver todo, borrar cosas
            array('userType'=>'Gerencia','security'=>'9'), // ver todo, agregar todo
            array('userType'=>'Ayudantes A','security'=>'1'), // ver sus credenciales y atribuciones
            array('userType'=>'Ayudantes B','security'=>'2'), // agregado a ayuda de motores
            array('userType'=>'Tecnicos','security'=>'3'), // ver sus motores, agregar ayudantes
            array('userType'=>'Jefe de Taller','security'=>'5'), // ver todos los motores, asignar motores, agregar pruebas, cambiar status
            array('userType'=>'Tornos','security'=>'4'), // ver todos los motores, agregar tornos
            array('userType'=>'Pruebas','security'=>'4'), // ver todos los datos de motores, agregar fotos y pruebas
            array('userType'=>'Bodega','security'=>'4'), // ver productos y ver motores
            array('userType'=>'Administracion','security'=>'6'), // ver todo lo de jefe de taller, hacer salidas, ver reportes
            array('userType'=>'Contabilidad','security'=>'7'), // versiones futuras maneja conta
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_types');
    }
}
