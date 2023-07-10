<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaire_projections', function (Blueprint $table) {
            $table->id();
            $table->date('date_pro');
            $table->time('heure_pro');
            $table->integer('nb_place_total')->default('200');

            // $table->integer('nb_place_rest')->default('NULL');
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
        Schema::dropIfExists('horaire_projection1');
    }
};
