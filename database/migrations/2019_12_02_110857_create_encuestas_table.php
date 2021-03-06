<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('restaurant', ['Oasis', 'Leones', 'Patio']);
            $table->enum('language', ['Spanish', 'English', 'German', 'French', 'Italian', 'Polish']);
            $table->enum('question1', ['VeryWell', 'Well', 'Regular', 'Bad', 'VeryBad']);
            $table->enum('question2', ['VeryWell', 'Well', 'Regular', 'Bad', 'VeryBad']);
            $table->enum('question3', ['VeryWell', 'Well', 'Regular', 'Bad', 'VeryBad']);
            $table->enum('question4', ['VeryWell', 'Well', 'Regular', 'Bad', 'VeryBad']);
            $table->enum('question5', ['VeryWell', 'Well', 'Regular', 'Bad', 'VeryBad']);
            $table->text('comment')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('encuestas');
    }
}
