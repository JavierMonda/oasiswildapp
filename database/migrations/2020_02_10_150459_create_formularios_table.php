<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('live', ['Sealion', 'Birds', 'Lemur', 'Camel', 'Papagayos']);
            $table->enum('language', ['Spanish', 'English', 'German', 'French', 'Italian', 'Polish']);
            $table->text('name');
            $table->text('email');
            $table->enum('children', ['Si', 'No']);
            $table->text('age')->nullable();
            $table->enum('condition1', ['Si', 'No']);
            $table->enum('condition2', ['Si', 'No']);
            $table->enum('conditionChild', ['Si', 'No'])->nullable();
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
        Schema::dropIfExists('formularios');
    }
}
