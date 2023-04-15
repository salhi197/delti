<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeColumnsRequetes extends Migration
{

    public function up()
    {
        Schema::table('requetes', function (Blueprint $table) {
            $table->string('code_initial')->nullable();    
            $table->string('codification')->nullable();    
            $table->string('numero')->nullable();   
            $table->string('suivi_requete')->nullable();   
            $table->string('source')->nullable();   
             
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
