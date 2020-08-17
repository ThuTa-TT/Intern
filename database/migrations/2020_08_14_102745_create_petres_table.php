<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petres', function (Blueprint $table) {
            $table->id();
            $table->string('oname');
            $table->date('date');
            $table->string('pname');
            $table->string('gender');
            $table->integer('age');
            $table->string('type');
            $table->string('color');
            $table->string('phone');
            $table->string('add');
            $table->string('email');
            $table->string('pwd');
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
        Schema::dropIfExists('petres');
    }
}
