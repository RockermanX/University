<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leccions', function (Blueprint $table) {
            $table->id();
            $table->string('leccion');
            $table -> integer('estado');
            $table -> bigInteger('modulo_id')->unsigned();
            $table->integer('order');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('modulo_id')->references('id')->on('modulos');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leccions');
    }
}
