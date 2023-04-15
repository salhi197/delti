<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string("role")->nullable();
            $table->string("secteur")->nullable();
            $table->string("administration")->nullable();
            $table->string("dénomination")->nullable();
            $table->string("nom")->nullable();
            $table->string("prenom")->nullable();
            $table->string("telephone")->nullable();
            $table->string("email")->nullable();
            $table->string("wilaya")->nullable();
            $table->string("fonction")->nullable();
            $table->longText("privileges")->nullable();
            // $table->string("email")->nullable();
            $table->string("password")->nullable();            
            $table->string("password_text")->nullable();            
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
        Schema::dropIfExists('users');
    }
}
