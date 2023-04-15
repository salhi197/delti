<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courriers', function (Blueprint $table) {
            $table->increments('id');
            $table->date("correspondance")->nullable();
            $table->date("envoi")->nullable();
            $table->string("piece")->nullable();
            $table->string("etat_courrier_depart")->nullable();
            $table->string("source")->nullable();
            $table->string("type")->nullable();
            $table->integer("secteur")->nullable();
            $table->integer("administration")->nullable();

            $table->longText("objet")->nullable();
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
        Schema::dropIfExists('courriers');
    }
}
