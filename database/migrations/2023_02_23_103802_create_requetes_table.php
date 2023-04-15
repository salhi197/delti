<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requetes', function (Blueprint $table) {
            $table->increments('id');
            $table->string("wilaya")->nullable();
            $table->string("daira")->nullable();
            $table->string("commune")->nullable();
            $table->string("type_requete")->nullable();
            $table->string("secteur")->nullable();
            $table->string("administration")->nullable();
            $table->string("sujet")->nullable();
            $table->string("sourcerequete")->nullable();
            $table->string("titre_requete")->nullable();
            $table->longText("description")->nullable();
            $table->string("mots")->nullable();
            $table->string("video")->nullable();
            $table->string("piece")->nullable();
            $table->string("assistant")->nullable();
            $table->integer("audience")->nullable();
            $table->string('code_initial')->nullable();
            $table->string('codification')->nullable();            
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
        Schema::dropIfExists('requetes');
    }
}
