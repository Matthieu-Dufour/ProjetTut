<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMushroomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Mushroom', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameLat', 50)->nulable(false);
            $table->string('nameFr', 50)->nullable(false);
            $table->string('surname', 50)->nullable(false);
            $table->integer('edibility')->nullable(false)->unsigned();
            $table->integer('biotope')->nullable(false)->unsigned();
            $table->string('stipe', 50)->nullable(true);
            $table->string('cap', 50)->nullable(true);
            $table->integer('trophic_status')->nullable(false)->unsigned();
            $table->integer('smell')->nullable(false)->unsigned();
            $table->integer('groupe')->nullable(false)->unsigned();
            $table->string('lames', 50)->nullable(true);
            $table->string('confusion', 50)->nullable(true);
            $table->string('flesh', 100)->nullable(true);
            $table->string('image', 100)->nullable(true);
        });
        Schema:: table('Mushroom', function(Blueprint $table){
            $table->foreign('edibility')->references('id')->on('Edibility');
            $table->foreign('biotope')->references('id')->on('Biotope');
            $table->foreign('groupe')->references('id')->on('Groupe');
            $table->foreign('smell')->references('id')->on('Smell');
            $table->foreign('trophic_status')->references('id')->on('Trophic_Status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Mushroom');
    }
}
