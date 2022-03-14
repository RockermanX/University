<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentralUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id_users')->primary();
            $table->string('name',255);
            $table->string('sexo',1);
            $table->string('username',150);
            $table->string('email',100);
            $table->string('emailcorp',100);
            $table->string('calvecorp',60);
            $table->integer('padre',11);
            $table->integer('padre_orig',11);
            $table->integer('documento',1);
            $table->string('cedula',20);
            $table->string('de',30);
            $table->string('rut',20);
            $table->string('telefono',32);
            $table->string('telefonoad',32);
            $table->string('direccion',100);
            $table->integer('ciudad',11);
            $table->string('passe',255);
            $table->integer('cargo',11);
            $table->integer('rango',3);
            $table->integer('area',11);
            $table->date('fechanacimiento');
            $table->date('fechaingreso');
            $table->string('profesion',255);
            $table->integer('formapago',1);
            $table->string('banco_trans',255);
            $table->string('numero_cuenta',50);
            $table->integer('tipo_cuenta',1);
            $table->string('password',32);
            $table->integer('codigo',4);
            $table->integer('active',1);
            $table->integer('estadoU',1);
            $table->integer('permiso',2);
            $table->string('user_nicename',100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
