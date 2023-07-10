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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('synopsis');
            $table->string('duree');
            $table->string('genre');
            $table->foreignId("horaire_id")->constrained("horaire_projections")->onDelete('cascade');
            $table->string('acteurs');
            $table->string('image');
            $table->integer('place_total')->default('180');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("film1",function(Blueprint $table){
            $table->dropForeign("horaire_id");
        });
        Schema::dropIfExists('film1');
    }
};
