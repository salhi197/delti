<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privileges',
         function (Blueprint $table) {
            $table->increments('id');
            // $table->string('create_citoyen')->nullable();
            // $table->string('lire_citoyen')->nullable();
            // $table->string('create_audience')->nullable();
            // $table->string('lire_audience')->nullable();
            // $table->string('create_suggestion')->nullable();
            // $table->string('lire_suggestion')->nullable();
            // $table->string('create_requete')->nullable();
            // $table->string('lire_requete')->nullable();
            // $table->string('create_rapport')->nullable();
            // $table->integer('role')->nullable();
            $table->integer('role')->nullable();
            
            $table->integer('user')->nullable();
            // $table->string('lire_rapport')->nullable();
            // $table->string('create_tableau')->nullable();
            // $table->string('lire_tableau')->nullable();
            // $table->string('create_courrier_citoyen')->nullable();
            // $table->string('lire_courrier_citoyen')->nullable();
            // $table->string('create_courrier_mediateur')->nullable();
            // $table->string('lire_courrier_mediateur')->nullable();
            // $table->string('create_courrier_secteur')->nullable();
            // $table->string('lire_courrier_secteur')->nullable();
            // $table->string('create_attribution')->nullable();
            // $table->string('lire_attribution')->nullable();
            // $table->string('create_transfert')->nullable();
            // $table->string('lire_transfert')->nullable();
            // $table->string('create_affectation_externe')->nullable();
            // $table->string('lire_affectation_externe')->nullable();
            foreach([
                ['string','citoyen'],
                ['string','audience'],
                ['string','suggestion'],
                ['string','requete'],
                ['string','rapport'],
                ['string','bord'],
                ['string','courrier_citoyen'],
                ['string','courrier_mediateur'],
                ['string','courrier_secteur'],
                ['string','attributions'],
                ['string','transfert'],
                ['string','affectation_externe'],
                ['string','doleance'],
                ['string','calendrier']
            ] as $column){
                $table->{$column[0]}('create_'.$column[1])->nullable();
                $table->{$column[0]}('read_'.$column[1])->nullable();
                $table->{$column[0]}('delete_'.$column[1])->nullable();
            }
            

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
        Schema::dropIfExists('privileges');
    }
}
