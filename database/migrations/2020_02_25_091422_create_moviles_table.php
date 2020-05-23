<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moviles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('extension', 4);
            $table->char('numero', 9);
            $table->string('trabajador', 30);
            $table->string('departamento', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moviles');
    }
}
