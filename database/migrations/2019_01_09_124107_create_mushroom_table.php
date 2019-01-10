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
            $table->string('edibility', 50)->nullable(true);
            $table->string('biotope', 50)->nullable(true);
            $table->string('stipe', 50)->nullable(true);
            $table->string('cap', 50)->nullable(true);
            $table->string('trophic_status', 50)->nullable(true);
            $table->string('smell', 50)->nullable(true);
            $table->string('groupe', 50)->nullable(true);
            $table->string('lames', 50)->nullable(true);
            $table->string('confusion', 50)->nullable(true);
            $table->string('flesh', 100)->nullable(true);
            $table->string('image', 100)->nullable(true);
        });
        Schema:: table('Mushroom', function(Blueprint $table){
            $table->foreign('edibility')->references('status')->on('Edibility');
            $table->foreign('biotope')->references('region')->on('Biotope');
            $table->foreign('groupe')->references('nom')->on('Groupe');
            $table->foreign('smell')->references('nom')->on('Smell');
            $table->foreign('trophic_status')->references('status')->on('Trophic_Status');
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
