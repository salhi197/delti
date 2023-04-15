<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investissements', function (Blueprint $table) {
            $table->increments('id');

            $table->string("raison_social")->nullable(true);
            $table->string("status_juridique")->nullable(true);
            $table->string("nom_gerant")->nullable(true);
            $table->string("prenom_gerant")->nullable(true);
            $table->string("telephone")->nullable(true);
            $table->string("fax")->nullable(true);
            $table->string("mobile")->nullable(true);
            $table->string("email")->nullable(true);
            $table->string("secteur")->nullable(true);
            $table->string("wilaya")->nullable(true);
            $table->string("daira")->nullable(true);
            $table->string("commune")->nullable(true);
            $table->string("activite")->nullable(true);
            $table->string("implimentation")->nullable(true);
            $table->string("Superficie")->nullable(true);
            $table->string("statut_du_foncier")->nullable(true);
            $table->string("etat_projet")->nullable(true);
            $table->string("projet_exploitation")->nullable(true);
            $table->date("date_projet_exploitation")->nullable(true);
            $table->string("permis_construction")->nullable(true);
            $table->date("date_permis_construction")->nullable(true);
            $table->string("arret_creation")->nullable(true);
            $table->date("date_arret_creation")->nullable(true);
            $table->string("approbation")->nullable(true);
            $table->date("date_approbation")->nullable(true);
            $table->string("arret_exploitation")->nullable(true);
            $table->string("adte_arret_exploitation")->nullable(true);
            $table->string("certficat")->nullable(true);
            $table->date("date_certficat")->nullable(true);
            $table->string("arreteregularisation")->nullable(true);
            $table->date("date_arreteregularisation")->nullable(true);
            $table->string("autorisation")->nullable(true);
            $table->date("date_autorisation")->nullable(true);
            $table->string("raccordement")->nullable(true);
            $table->date("date_raccordement")->nullable(true);
            $table->integer("emploi_cre")->nullable(true);
                        
            $table->longText("contraintes")->nullable(true);
            $table->string("permis_construction2")->nullable(true);
            $table->date("date_permis_construction2")->nullable(true);
            $table->string("arret_creation2")->nullable(true);
            $table->date("date_arret_creation2")->nullable(true);
            $table->date("date_lancement2")->nullable(true);
                        
            $table->integer("taux")->nullable(true);
            $table->longText("contraintes2")->nullable(true);

            $table->string("permis_construction3")->nullable(true);
            $table->date("date_permis_construction3")->nullable(true);
            $table->string("arret_creation3")->nullable(true);
            $table->date("date_arret_creation3")->nullable(true);
            $table->longText("contraintes3")->nullable(true);


                        



            $table->string("piece_jointe")->nullable();


            
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
        Schema::dropIfExists('investissements');
    }
}
