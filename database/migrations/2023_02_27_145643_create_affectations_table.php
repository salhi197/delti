<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffectationsTable extends Migration
{
    public function up()
    {
        Schema::create('affectations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('requete')->nullable();                
            $table->longText('message')->nullable();                
            $table->longText('piece')->nullable();
            $table->string('type')->nullable();
                            
            $table->integer('user')->nullable();
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
        Schema::dropIfExists('affectations');
    }
}
