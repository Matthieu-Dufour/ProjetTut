<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Membre', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastName', 50)->nullable(false);
            $table->string('firstName', 50)->nullable(false);
            $table->string('mail', 50)->nullable(false);
            $table->string('mdp', 50)->nullable(false);
            $table->string('role', 50)->nullable(true);
            $table->integer('favoris')->nullable(false)->unsigned();
        });
        Schema:: table('Membre', function(Blueprint $table){
            $table->foreign('favoris')->references('id')->on('Favoris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Membre');
    }
}
