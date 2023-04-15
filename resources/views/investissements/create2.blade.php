
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Requetes - Identification du Projet</title>
    <link rel="icon" type="image/x-icon" href="{{asset('cirm2/assets/img/logo-sm.png')}}" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('cirm2/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('cirm2/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/toastr.css')}}" rel="stylesheet"/>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>

<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">

    
    <div class="header-container">

            @include('includes.modals.header')

    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>


        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="container">

                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Requetes</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Invesstisseurs</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row">
                <div id="flFormsGrid" class="cols-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h6>
                                    <strong> Requête investisseur : </strong>
                                        <br>
                                        Vous avez un projet d'investissement, achevé, en voie de réalisation ou en voie de lancement, et vous avez rencontré des obstacles qui vous ont empêché de le concrétiser, vous pouvez nous adresser vos préoccupations en renseignant ce formulaire 

                                    </h6>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Identification du Projet : </h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{route('investissement.create')}}" method="POST" enctype="multipart/form-data">

                                    @csrf

                                <div class="form-row mb-3">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Raison social</label>
                                        <input  type="text" name="raison_social" class="form-control" id="inputname" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Status juridique</label>
                                        <select id="inputState" name="status_juridique" class="form-control">
                                            <option selected>Choisir</option>
                                            <option value="Personne physique">Personne physique</option>
                                            <option value="EURL">EURL</option>
                                            <option value="SARL">SARL</option>
                                            <option value="SPA">SPA</option>
                                            <option value="SNC">SNC</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Nom du Gérant</label>
                                        <input  type="text" name="nom_gerant" class="form-control" id="inputname" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Prénom du Gérant</label>
                                        <input  type="text" name="prenom_gerant" class="form-control" id="inputname" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Tél</label>
                                        <input name="telephone"  onKeyPress="if(this.value.length==9) return false" type="number" class="form-control" id="inputEmail4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Fax</label>
                                        <input name="fax" type="number"  onKeyPress="if(this.value.length==9) return false" class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Mobile</label>
                                        <input name="mobile" type="number"  onKeyPress="if(this.value.length==10) return false" class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">E-mail</label>
                                        <input name="email"  type="email"  class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Secteur</label>
                                        <select id="inputState" name="secteur" class="form-control">
                                            <option selected>Choisir</option>
                                            <option value="Agriculture">Agriculture</option>
                                            <option value="Industrie">Industrie</option>
                                            <option value="Services">Services</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Activité</label>
                                        <input name="activite" type="text" class="form-control" id="inputPassword4" placeholder="">
                                    </div>

                                    
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Wilaya</label>
                                        <select name="wilaya" id="wilayas" class="form-control"
                                        onchange="remplirVilles(this.options[this.selectedIndex].value);return false;" class="form-control">
                                            <option selected value="0">Choisir une wilaya</option>
                                                <option value="1">ADRAR</option>
                                                <option value="2">CHLEF</option>
                                                <option value="3">LAGHOUAT</option>
                                                <option value="4">O.E.BOUAGHI</option>
                                                <option value="5">BATNA</option>
                                                <option value="6">BEJAIA</option>
                                                <option value="7">BISKRA</option>
                                                <option value="8">BECHAR</option>
                                                <option value="9">BLIDA</option>
                                                <option value="10">BOUIRA</option>
                                                <option value="11">TAMANRASSET</option>
                                                <option value="12">TEBESSA</option>
                                                <option value="13">TLEMCEN</option>
                                                <option value="14">TIARET</option>
                                                <option value="15">TIZI OUZOU</option>
                                                <option value="16">ALGER</option>
                                                <option value="17">DJELFA</option>
                                                <option value="18">JIJEL</option>
                                                <option value="19">SETIF</option>
                                                <option value="20">SAIDA</option>
                                                <option value="21">SKIKDA</option>
                                                <option value="22">SIDI BEL ABBES</option>
                                                <option value="23">ANNABA</option>
                                                <option value="24">GUELMA</option>
                                                <option value="25">CONSTANTINE</option>
                                                <option value="26">MEDEA</option>
                                                <option value="27">MOSTAGANEM</option>
                                                <option value="28">M-SILA</option>
                                                <option value="29">MASCARA</option>
                                                <option value="30">OUARGLA</option>
                                                <option value="31">ORAN</option>
                                                <option value="32">EL BAYADH</option>
                                                <option value="33">ILLIZI</option>
                                                <option value="34">B.B.ARRERIDJ</option>
                                                <option value="35">BOUMERDES</option>
                                                <option value="36">EL TARF</option>
                                                <option value="37">TINDOUF</option>
                                                <option value="38">TISSEMSILT</option>
                                                <option value="39">EL OUED</option>
                                                <option value="40">KHENCHELA</option>
                                                <option value="41">SOUK AHRAS</option>
                                                <option value="42">TIPAZA</option>
                                                <option value="43">MILA</option>
                                                <option value="44">AIN DEFLA</option>
                                                <option value="45">NAAMA</option>
                                                <option value="46">A.TEMOUCHENT</option>
                                                <option value="47">GHARDAIA</option>
                                                <option value="48">RELIZANE</option>
                                                <option value="49">Timimoun</option>
                                                <option value="50">Bordj Badji Mokhtar</option>
                                                <option value="51">Ouled Djellal</option>
                                                <option value="52">Béni Abbès</option>
                                                <option value="53">In Salah</option>
                                                <option value="54">In Guezzam</option>
                                                <option value="55">Touggourt</option>
                                                <option value="56">Djanet</option>
                                                <option value="57">El M’Ghair</option>
                                                <option value="58">El Meniaa</option>



                                        <select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Daira</label>
                                        <!-- <select name="daira" id="dairas" class="form-control" >
                                        </select> -->
                                        <input name="daira" name type="text" class="form-control" id="inputPassword4" placeholder="Daira">

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Commune</label>
                                        <!-- <select class="form-control" id="communes" name="commune" id="commune_select">
                                        </select> -->
                                        <input name="commune" name type="text" class="form-control" id="inputPassword4" placeholder="Commune">

                                    </div>                                    
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Implimentation</label>
                                        <select id="inputState" name="implimentation" class="form-control">
                                            <option selected>Choisir</option>
                                            <option value="Zone Industrielle">- Zone Industrielle</option>
                                            <option value="Zone d'Activité">- Zone d'Activité</option>
                                            <option value="Terrain agricole">- Terrain agricole</option>
                                            <option value="Hors zones">- Hors zones</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Superficé (M<sup>2</sup>)</label>
                                        <input name="Superficie" name type="number" class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Statut du foncier</label>
                                        <select id="inputState" name="statut_du_foncier" class="form-control">
                                            <option selected>Choisir</option>
                                            <option value="Arreté de concession">- Arreté de concession</option>
                                            <option value="Act de concession">- Act de concession</option>
                                            <option value="Act de propriété">- Act de propriété</option>
                                            <option value="Location">- Location</option>
                                            <option value="Occupation sans titre">- Occupation sans titre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-3" id="etat">
                                        <label for="inputState">Etat actuel de projet</label>
                                        <select name="etat_projet" id="etat_projet" class="form-control">
                                            <option selected>Choisir</option>
                                            <option value="fiche1">- Achevé (Fiche-01)</option>
                                            <option value="fiche2">- En voie de réalisation (Fiche-02)</option>
                                            <option value="fiche3">- En voie de Lancement (Fiche-03)</option>
                                        </select>
                                    </div>

                                </div>

                            
                                <div class="container-fluid" id="fiche1">
                                    <h6> Projet achevé (Fiche-01)</h6>
                                    <br>
                                    <div class="form-row mb-4">                                        
                                    </div>
                                    <div class="form-row mb-4">                                        
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Projet en exploitation</label>
                                            <select name="projet_exploitation" id="projet_exploitation"  class="form-control">
                                                    <option value="c" selected>Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                                </select>
                                        </div>
                                        
                                        <div id="date_projetexploitation" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="inputState">Emploi Crés</label>
                                            <input type="number" name="emploi_cre" class="form-control"  placeholder="">
                                        </div> 
                
                                    </div> 
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Permis de construire</label>
                                            <select name="permis_construction" class="form-control" id="permis_construction"  class="form-control">
                                                    <option value="c">Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                                </select>
                                        </div>
                                        
                                        
                                        <div id="date_permisconstruction" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" name="date_permis_construction" class="form-control"  placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Arrêté de création</label>
                                            <select name="arret_creation" id="arret_creation"  class="form-control">
                                                    <option value="c" selected>Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                                </select>
                                        </div>
                                        <div id="date_arretcreation" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" name="date_arret_creation" class="form-control"  placeholder="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Approbation de l’étude de danger</label>
                                            <select name="approbation" class="form-control" id="approbation"  class="form-control">
                                                    <option value="c">Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                                </select>
                                        </div>
                                        <div id="date_approbation" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" name="date_approbation" class="form-control"  placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Arrêté d’exploitation</label>
                                            <select name="arret_exploitation" id="arret_exploitation"  class="form-control">
                                                    <option value="c" selected>Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                                </select>
                                        </div>
                                        <div id="date_arretexploitation" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" class="form-control" name="adte_arret_exploitation"  placeholder="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Certificat de conformité</label>
                                            <select name="certficat" class="form-control" id="certficat"  class="form-control">
                                                    <option value="c">Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                                </select>
                                        </div>
                                        <div id="date_certficat" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" name="date_certficat" class="form-control"  placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Arrêté de régularisation (loi 08-15)</label>
                                            <select name="arreteregularisation" id="arreteregularisation"  class="form-control">
                                                    <option value="c" selected>Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                                </select>
                                        </div>
                                        <div id="date_projetexploitation" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" name="date_arreteregularisation" class="form-control"  placeholder="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Autorisation exceptionnelle</label>
                                            <select name="autorisation" class="form-control" id="autorisation"  class="form-control">
                                                    <option value="c">Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                                </select>
                                        </div>
                                        <div id="date_autorisation" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" name="date_autorisation" class="form-control"  placeholder="">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="inputState">Raccordement aux réseaux divers</label>
                                            <select name="raccordement" class="form-control" id="raccordement"  class="form-control">
                                                    <option value="c">Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                                </select>
                                        </div>
                                        <div id="date_raccordement" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" name="date_raccordement" class="form-control"  placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <label for="inputEmail4">Contraintes rencontrées</label>
                                        <textarea class="form-control" name="contraintes" aria-label="With textarea"></textarea>
                                    </div>
                                </div>

                                <div class="container-fluid" id="fiche2">
                                    <br>
                                        <h6>> Projet en voie de réalisation (Fiche-02)</h6>
                                        <br>
                                        <div class="form-row mb-4">
                                                <div id="date_lancement2" class="form-group col-md-3" >
                                                    <label for="inputPassword4">Date Lancement de projet</label>
                                                    <input type="Date" max="{{date('Y-m-d')}}" name="date_lancement2" class="form-control"  placeholder="">
                                                </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-3">
                                                <label for="inputState">Permis de construire</label>
                                                <select name="permis_construction2" id="permis_construction2"  class="form-control">
                                                        <option value="c" selected>Choisir</option>
                                                        <option value="o">Oui</option>
                                                        <option value="n">Non</option>
                                                    </select>
                                            </div>
                                            <div id="date_permisconstruction2" class="form-group col-md-3" >
                                                <label for="inputPassword4">Date</label>
                                                <input type="Date" max="{{date('Y-m-d')}}" class="form-control" name="date_permis_construction2" placeholder="">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputState">Arrêté de création</label>
                                                <select name="arret_creation2" class="form-control" id="arret_creation2" alue)" class="form-control">
                                                        <option value="c">Choisir</option>
                                                        <option value="o">Oui</option>
                                                        <option value="n">Non</option>
                                                    </select>
                                            </div>
                                            <div id="date_arretcreation2" class="form-group col-md-3" >
                                                <label for="inputPassword4">Date</label>
                                                <input type="Date" max="{{date('Y-m-d')}}" class="form-control" name="date_arret_creation2"  placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-row mb-4">
                                            <label for="inputEmail4">Taux de réalisation</label>
                                            <input type="number" name="taux" class="form-control"  placeholder="">
                                        </div>
                                        <div class="form-row mb-4">
                                            <label for="inputEmail4">Contraintes rencontrées</label>
                                            <textarea class="form-control" name="contraintes2" aria-label="With textarea"></textarea>
                                        </div>
                                </div>




                              
                                <div class="container-fluid" id="fiche3">
                                    <h6>> Projet en voie de lancement (Fiche-03)</h6>

                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-3">
                                                <label for="inputState">Permis de construire</label>
                                                <select name="permis_construction3" id="permis_construction3" class="form-control">
                                                    <option value="c" selected>Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                                </select>
                                            </div>
                                            <div id="date_permisconstruction3" class="form-group col-md-3" >
                                                <label for="inputPassword4">Date</label>
                                                <input type="Date" max="{{date('Y-m-d')}}" name="date_permis_construction3" class="form-control"  placeholder="">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputState">Arrêté de création</label>
                                                <select name="arret_creation3" class="form-control" id="arret_creation3" alue)" class="form-control">
                                                    <option value="c">Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                                </select>
                                            </div>
                                            <div id="date_arretcreation3" class="form-group col-md-3" >
                                                <label for="inputPassword4">Date</label>
                                                <input type="Date" max="{{date('Y-m-d')}}" name="date_arret_creation3" class="form-control"  placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <label for="inputEmail4">Contraintes rencontrées</label>
                                            <textarea class="form-control" name="contraintes3" aria-label="With textarea"></textarea>
                                        </div>


                                </div>


                                    <div class="custom-file-container" data-upload-id="mySecondImage">
                                        <label>Piece jointe <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"></a></label>
                                        <label class="custom-file-container__custom-file">
                                        <input accept="image/png, image/jpeg,application/pdf" type="file" class="custom-file-container__custom-file__custom-file-input" name="piece" >
                                    </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LewnbUkAAAAAGOFz1NH0ty2-Nsfm-yBcRn259cE"></div>

                                    <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
                                

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->



    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->





    <script src="{{asset('cirm2/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('cirm2/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('cirm2/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('cirm2/assets/js/app.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>	

    <script>

        @if(session('error'))
        	$(function(){
                toastr.error('{{Session::get("error")}}')
            })

        @endif
        @if(session('success'))
            toastr.success('{{Session::get("success")}}')
        @endif
            

    </script>
    <script>
        $(document).ready(function() {
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#fiche3').hide()
            $('#fiche1').hide()
            $('#fiche2').hide()

            $('#etat_projet').on('change',function(){
                var value = this.value;
                // console.log(value)
                if(value=="fiche1"){
                    $('#fichetext').html('fiche-01')
                    $('#fiche3').hide()
                    $('#fiche1').show()
                    $('#fiche2').hide()
                }
                if(value=="fiche2"){
                    $('#fichetext').html('fiche-02')
                    $('#fiche3').hide()
                    $('#fiche2').show()
                    $('#fiche1').hide()
                }
                if(value=="fiche3"){
                    $('#fichetext').html('fiche-03')
                    $('#fiche2').hide()
                    $('#fiche3').show()
                    $('#fiche1').hide()

                }


            })


        });
    </script>


    <script>




var villes = new Array();
villes[0] = new Array();
villes[1] = new Array
("choisir une daira",
"ADRAR",
"REGGANE",
"TSABIT",
"ZAOUIET KOUNTA",
"AOULEF",
"FENOUGHIL")
 villes[2] = new Array
("choisir une daira",
"CHLEF",
"TENES",
"EL KARIMIA",
"TAOUGRIT",
"BENI HAOUA",
"OULED FARES",
"BOUKADIR",
"ZEBOUDJA",
"ABOU EL HASSAN",
"EL MARSA",
"OUED FODDA",
"OULED BEN ABDELKADER",
"AIN MERANE")
villes[3] = new Array
("choisir une daira",
"LAGHOUAT",
"KSAR EL HIRANE",
"SIDI MAKHLOUF",
"HASSI R’MEL",
"AIN MAHDI",
"GUELTAT SIDI SAAD",
"BRIDA",
"EL GHICHA",
"AFLOU",
"OUED MORRA")
  villes[4] = new Array
("choisir une daira",
"OUM EL BOUAGHI",
"AIN BEIDA",
"AIN M’LILA",
"SIGUS",
"AIN BABOUCHE",
"DHALAA",
"AIN KERCHA",
"FKIRINA",
"SOUK NAAMANE",
"KSAR SBAHI",
"MESKIANA",
"AIN FEKROUN")
 villes[5] = new Array
("choisir une daira",
"BATNA",
"MEROUANA",
"SERIANA",
"MENAA",
"EL MADHER",
"TAZOULT",
"N GAOUS",
"ARRIS",
"AIN DJASSER",
"OULED SELLEM",
"SEGGANA",
"ICHMOUL",
"BOUZINA",
"CHEMORA",
"BARIKA",
"DJEZZAR",
"T KOUT",
"AIN TOUTA",
"TENIET EL ABED",
"TIMGAD",
"RAS EL AIOUN",
"OULED SI SLIMANE")
 villes[6] = new Array
("choisir une daira",
"BEJAIA",
"AMIZOUR",
"TIMEZRIT",
"SOUK EL TENINE",
"TICHY",
"IGHIL-ALI",
"DARGHINA",
"AOKAS",
"ADEKAR",
"AKBOU",
"SEDDOUK",
"TAZMALT",
"CHEMINI",
"BARBACHA",
"OUZELLAGUENE",
"SIDI-AICH",
"EL KSEUR",
"KHERRATA",
"BENIMAOUCHE")
 villes[7] = new Array
("choisir une daira",
"BISKRA",
"SIDI OKBA",
"M’CHOUNECHE",
"ZERIBET EL OUED",
"EL KANTARA",
"EL OUTAYA",
"DJEMORAH",
"TOLGA",
"OURLAL",
"FOUGHALA")
 villes[8] = new Array
("choisir une daira",
"BECHAR",
"LAHMAR",
"KENADSA",
"TAGHIT",
"ABADLA",
"BENI OUNIF")
 villes[9] = new Array
("choisir une daira",
"BLIDA",
"BOUINAN",
"OUED EL ALLEUG",
"OULED YAICH",
"EL-AFFROUN",
"MOUZAIA",
"MEFTAH",
"BOUFARIK",
"LARBAA",
"BOUGARA")
 villes[10] = new Array
("choisir une daira",
"BOUIRA",
"SOUK EL KHEMIS",
"KADIRIA",
"HAIZER",
"LAKHDARIA",
"EL HACHIMIA",
"BORDJ OKHRISS",
"BECHLOUL",
"AIN-BESSEM",
"BIR GHBALOU",
"M CHEDALLAH",
"SOUR EL GHOZLANE")
 villes[11] = new Array
("choisir une daira",
"TAMANRASSET",
"ABALESSA",
"TAZROUK")
 villes[12] = new Array
("choisir une daira",
"TEBESSA",
"BIR-EL-ATER",
"CHERIA",
"EL-AOUINET",
"NEGRINE",
"BIR MOKKADEM",
"EL KOUIF",
"MORSSOT",
"EL OGLA",
"OUENZA",
"EL MALABIOD",
"OUM ALI")
 villes[13] = new Array
("choisir une daira",
"TLEMCEN",
"AIN TALLOUT",
"REMCHI",
"SABRA",
"GHAZAOUET",
"OULED MIMOUN",
"BENI SNOUS",
"BAB EL ASSA",
"FELLAOUCENE",
"BENSEKRANE",
"HENNAYA",
"MAGHNIA",
"SEBDOU",
"BENI BOUSSAID",
"MARSA BEN M’HIDI",
"NEDROMA",
"SIDI DJILALI",
"HONAINE",
"CHETOUANE",
"MANSOURAH")
 villes[14] = new Array
("choisir une daira",
"TIARET",
"MEDROUSSA",
"AIN DEHEB",
"DAHMOUNI",
"RAHOUIA",
"MAHDIA",
"SOUGUEUR",
"MEGHILA",
"FRENDA",
"AIN KERMES",
"KSAR CHELLALA",
"OUED LILLI",
"MECHRAA SAFA",
"HAMADIA")
 villes[15] = new Array
("choisir une daira",
"TIZI-OUZOU",
"AIN-EL-HAMMAM",
"MAKOUDA",
"DRAA EL MIZAN",
"TIZI-GHENIF",
"IFERHOUNENE",
"AZAZGA",
"LARBA NATH IRATHEN",
"TIZI-RACHED",
"OUAGUENOUNE",
"MAATKAS",
"BENI-DOUALA",
"BOUZEGUENE",
"OUADHIAS",
"AZEFFOUN",
"TIGZIRT",
"BOGHNI",
"DRAA-BEN-KHEDDA",
"OUACIF",
"MEKLA",
"BENI YENNI")
 villes[17] = new Array
("choisir une daira",
"DJELFA",
"HASSI BAHBAH",
"FAIDH EL BOTMA",
"BIRINE",
"EL IDRISSIA",
"MESSAAD",
"SIDI LAADJEL",
"HAD SAHARY",
"DAR CHIOUKH",
"CHAREF",
"AIN EL IBEL",
"AIN OUSSERA")
 villes[18] = new Array
("choisir une daira",
"JIJEL",
"EL AOUANA",
"ZIAMA MANSOURIA",
"TAHER",
"CHEKFA",
"EL MILIA",
"SIDI MAROUF",
"SETTARA",
"EL ANCER",
"DJIMLA",
"TEXENNA")
 villes[19] = new Array
("choisir une daira",
"SETIF",
"AIN EL KEBIRA",
"BENI-AZIZ",
"BIR-EL-ARCH",
"BABOR",
"GUIDJEL",
"EL EULMA",
"DJEMILA",
"BENI-OUARTILANE",
"AIN ARNAT",
"AMOUCHA",
"AIN OULMANE",
"BOUANDAS",
"HAMAM SOUKHNA",
"SALAH BEY",
"AIN AZEL",
"GUENZET",
"BOUGAA",
"HAMMAM GUERGOUR",
"MAOUAKLANE")
 villes[20] = new Array
("choisir une daira",
"SAIDA",
"AIN EL HADJAR",
"YOUB",
"SIDI BOUBEKEUR",
"EL HASSASNA",
"OULED BRAHIM")
 villes[21] = new Array
("choisir une daira",
"SKIKDA",
"EL HADAIEK",
"AZZABA",
"BEN AZZOUZ",
"COLLO",
"OULED ATTIA",
"ZITOUNA",
"EL ARROUCH",
"SIDI MEZGHICHE",
"RAMDANE DJAMEL",
"TAMALOUS",
"AIN KECHRA",
"OUM TOUB")
 villes[22] = new Array
("choisir une daira",
"SIDI BEL-ABBES",
"TESSALA",
"MOSTEFA  BEN BRAHIM",
"TELAGH",
"SIDI ALI BOUSSIDI",
"MARHOUM",
"SIDI LAHCENE",
"TENIRA",
"MOULAY SLISSEN",
"MERINE",
"RAS EL MA",
"AIN EL BERD",
"SFISSEF",
"BEN BADIS",
"SIDI ALI BENYOUB")
 villes[23] = new Array
("choisir une daira",
"ANNABA",
"BERRAHAL",
"EL HADJAR",
"EL BOUNI",
"AIN BERDA",
"CHETAIBI")
 villes[24] = new Array
("choisir une daira",
"GUELMA",
"OUED ZENATI",
"AIN MAKHLOUF",
"KHEZARA",
"GUELAAT BOU SBAA",
"HAMMAM DEBAGH",
"HAMMAM N’BAIL",
"BOUCHEGOUF",
"HELIOPOLIS",
"HOUARI BOUMEDIENNE")
 villes[25] = new Array
("choisir une daira",
"CONSTANTINE",
"HAMMA BOUZIANE",
"ZIGHOUD YOUCEF",
"EL KHROUB",
"AIN ABID",
"IBN ZIAD")
 villes[26] = new Array
("choisir une daira",
"MEDEA",
"OUZERA",
"AIN BOUCIF",
"EL OMARIA",
"EL GUELBELKEBIR",
"CHELALET EL ADHAOURA",
"SIDI NAAMANE",
"AZIZ",
"SOUAGUI",
"KSAR EL BOUKHARI",
"EL AZIZIA",
"CHABOUNIA",
"OUAMRI",
"SI MAHDJOUB",
"BENI SLIMANE",
"BERROUAGHIA",
"SEGHOUANE",
"TABLAT",
"OULED ANTAR")
 villes[27] = new Array
("choisir une daira",
"MOSTAGANEM",
"AIN-NOUISSY",
"HASSI MAMECHE",
"AIN-TEDLES",
"KHEIR-EDDINE",
"SIDI ALI",
"SIDI-LAKHDAR",
"ACHAACHA",
"BOUGUIRAT",
"MESRA")
 villes[28] = new Array
("choisir une daira",
"M’SILA",
"HAMMAM DALAA",
"OULED DERRADJ",
"KHOUBANA",
"CHELLAL",
"MAGRA",
"SIDI AISSA",
"AIN EL HADJEL",
"BOU SAADA",
"OULED SIDI BRAHIM",
"SIDI AMEUR",
"BEN SROUR",
"AIN EL MELH",
"MEDJEDEL",
"DJEBEL MESSAAD")
 villes[29] = new Array
("choisir une daira",
"MASCARA",
"BOUHANIFIA",
"TIZI",
"TIGHENNIF",
"EL HACHEM",
"OUED EL ABTAL",
"GHRISS",
"EL BORDJ",
"AIN FEKAN",
"OUED TARIA",
"AOUF",
"AIN FARES",
"SIG",
"OGGAZ",
"ZAHANA",
"MOHAMMADIA")
 villes[30] = new Array
("choisir une daira",
"OUARGLA",
"N’GOUSSA",
"HASSI MESSAOUD",
"SIDI KHOUILED",
"EL BORMA")
 villes[31] = new Array
("choisir une daira",
"ORAN",
"GDYEL",
"BIR EL DJIR",
"ES SENIA",
"ARZEW",
"BETHIOUA",
"AIN TURK",
"OUED TLELAT",
"BOUTLELIS")
 villes[32] = new Array
("choisir une daira",
"EL BAYADH",
"ROGASSA",
"BREZINA",
"BOUALEM",
"EL BIODH SIDI CHEIKH",
"BOUGTOUB",
"BOUSSEMGHOUN",
"CHELLALA")
 villes[33] = new Array
("choisir une daira",
"ILLIZI",
"IN AMENAS")
 villes[34] = new Array
("choisir une daira",
"B. B. ARRERIDJ",
"RAS EL OUED",
"BORDJ ZEMOURA",
"MANSOURA",
"AIN TAGHROUT",
"BORDJ GHEDIR",
"EL HAMADIA",
"MEDJANA",
"DJAAFRA",
"BIR KASDALI")
 villes[35] = new Array
("choisir une daira",
"BOUMERDES",
"BOUDOUAOU",
"BORDJ MENAIEL",
"BAGHLIA",
"NACIRIA",
"ISSER",
"THENIA",
"DELLYS",
"KHEMIS EL KHECHNA")
 villes[36] = new Array
("choisir une daira",
"EL TARF",
"BOUHADJAR",
"BEN M HIDI",
"EL KALA",
"BOUTELDJA",
"DREAN",
"BESBES")
 villes[37] = new Array
("choisir une daira",
"TINDOUF")
 villes[38] = new Array
("choisir une daira",
"TISSEMSILT",
"BORDJ BOUNAAMA",
"THENIET EL HAD",
"LAZHARIA",
"LARDJEM",
"BORDJ EL EMIR ABDELKADER",
"KHEMISTI",
"AMMARI")
 villes[39] = new Array
("choisir une daira",
"EL-OUED",
"ROBBAH",
"BAYADHA",
"GUEMAR",
"REGUIBA",
"DEBILA",
"HASSI KHALIFA",
"TALEB LARBI",
"MAGRANE",
"MIH OUANSA")
 villes[40] = new Array
("choisir une daira",
"KHENCHELA",
"KAIS",
"EL HAMMA",
"AIN TOUILA",
"BOUHMAMA",
"CHECHAR",
"BABAR",
"OULED RECHACHE")
 villes[41] = new Array
("choisir une daira",
"SOUK AHRAS",
"SEDRATA",
"MACHROHA",
"OULED DRISS",
"TAOURA",
"HADDADA",
"MERAHNA",
"BIR BOUHOUCHE",
"M’DAOUROUCHE",
"OUM EL ADHAIM")
 villes[42] = new Array
("choisir une daira",
"TIPAZA",
"HADJOUT",
"SIDI-AMAR",
"GOURAYA",
"CHERCHELL",
"DAMOUS",
"FOUKA",
"BOU ISMAIL",
"AHMER EL AIN",
"KOLEA")
 villes[43] = new Array
("choisir une daira",
"MILA",
"FERDJIOUA",
"CHELGHOUM LAID",
"TELEGHMA",
"OUED ENDJA",
"TADJENANET",
"BOUHATEM",
"ROUACHED",
"GRAREM GOUGA",
"SIDI MEROUANE",
"TASSADANE HADDADA",
"TERRAI BAINEM",
"AIN BEIDA HARRICHE")
 villes[44] = new Array
("choisir une daira",
"AIN-DEFLA",
"MILIANA",
"BOUMEDFAA",
"KHEMIS-MILIANA",
"HAMMAM-RIGHA",
"DJELIDA",
"EL-AMRA",
"EL-ATTAF",
"EL-ABADIA",
"DJENDEL",
"AIN-LECHIAKH",
"ROUINA",
"BORDJ-EMIR-KHALED",
"BATHIA")
 villes[45] = new Array
("choisir une daira",
"NAAMA",
"MECHERIA",
"AIN SAFRA",
"SFISSIFA",
"MOGHRAR",
"ASSELA",
"MAKMAN BEN AMER")
 villes[46] = new Array
("choisir une daira",
"AIN TEMOUCHENT",
"AIN KIHAL",
"HAMMAM BOUHADJAR",
"AIN EL ARBAA",
"EL MALAH",
"EL AMRIA",
"BENI SAF",
"OULHACA EL GHERABA")
 villes[47] = new Array
("choisir une daira",
"GHARDAIA",
"DHAYET BENDHAHOUA",
"BERRIANE",
"METLILI",
"EL GUERRARA",
"ZELFANA",
"MANSOURA",
"BOUNOURA")
 villes[48] = new Array
("choisir une daira",
"RELIZANE",
"OUED-RHIOU",
"EL H’MADNA",
"SIDI M’HAMED BENALI",
"AMMI MOUSSA",
"ZEMMOURA",
"DJIDIOUIA",
"EL-MATMAR",
"AIN-TAREK",
"MAZOUNA",
"YELLEL",
"RAMKA",
"MENDES")
 villes[49] = new Array
("choisir une daira",
"TIMIMOUN",
"AOUGROUT",
"TINERKOUK",
"CHAROUINE")
 villes[50] = new Array
("choisir une daira",
"BORDJ BADJI MOKHTAR")
 villes[51] = new Array
("choisir une daira",
"SIDI KHALED",
"OULED DJELLAL")
 villes[52] = new Array
("choisir une daira",
"BENI ABBES",
"KERZAZ",
"EL OUATA",
"TABELBALA",
"OULED KHOUDIR",
"IGLI")
 villes[53] = new Array
("choisir une daira",
"IN SALAH",
"IN GHAR")
 villes[54] = new Array
("choisir une daira",
"IN GUEZZAM",
"TIN ZOUATINE")
 villes[55] = new Array
("choisir une daira",
"TOUGGOURT",
"TEMACINE",
"MEGARINE",
"EL-HADJIRA",
"TAIBET")
 villes[56] = new Array
("choisir une daira",
"DJANET")
 villes[57] = new Array
("choisir une daira",
"EL-M’GHAIER",
"DJAMAA")
 villes[58] = new Array
("choisir une daira",
"EL MENIAA")








   


var villes = new Array();
villes[0] = new Array();
villes[1] = new Array
("choisir une commune",
"ADRAR",
"TAMEST",
"REGGANE",
"IN ZGHMIR",
"TIT",
"TSABIT",
"ZAOUIET KOUNTA",
"AOULEF",
"TIMEKTEN",
"TAMANTIT",
"FENOUGHIL",
"SALI",
"AKABLI",
"OULED AHMED TIMMI",
"BOUDA",
"SEBAA")
 villes[2] = new Array
("choisir une commune",
"CHLEF",
"TENES",
"BENAIRIA",
"EL KARIMIA",
"TADJENA",
"TAOUGRIT",
"BENI HAOUA",
"SOBHA",
"HARCHOUNE",
"OULED FARES",
"SIDI AKKACHA",
"BOUKADIR",
"BENI RACHED",
"TELASSA",
"HERENFA",
"OUED GOUSSINE",
"DAHRA",
"OULED ABBES",
"SENDJAS",
"ZEBOUDJA",
"OUED SLY",
"ABOU EL HASSAN",
"EL MARSA",
"CHETTIA",
"SIDI ABDERRAHMANE",
"MOUSSADEK",
"EL HADJADJ",
"LABIOD MEDJADJA",
"OUED FODDA",
"OULED BEN ABDELKADER",
"BOUZEGHAIA",
"AIN MERANE",
"OUM DROU",
"BREIRA",
"BENI  BOUATTAB")
villes[3] = new Array
("choisir une commune",
"LAGHOUAT",
"KSAR EL HIRANE",
"BENACER BENCHOHRA",
"SIDI MAKHLOUF",
"HASSI DELAA",
"HASSI R’MEL",
"AIN MAHDI",
"TADJEMOUT",
"EL KHENG",
"GUELTAT SIDI SAAD",
"AIN SIDI ALI",
"EL BEIDHA",
"BRIDA",
"EL GHICHA",
"HADJ MECHRI",
"SEBGAG",
"TAOUALA",
"TADJROUNA",
"AFLOU",
"EL ASSAFIA",
"OUED MORRA",
"OUED M’ZI",
"EL HAOUAITA",
"SIDI BOUZID")
  villes[4] = new Array
("choisir une commune",
"OUM EL BOUAGHI",
"AIN BEIDA",
"AIN M’LILA",
"BEHIR CHERGUI",
"EL AMIRIA",
"SIGUS",
"BELALA",
"AIN BABOUCHE",
"BERRICHE",
"OULED HAMLA",
"DHALAA",
"AIN KERCHA",
"HANCHIR TOUMGHANI",
"EL DJAZIA",
"AIN DISS",
"FKIRINA",
"SOUK NAAMANE",
"ZORG",
"EL FEDJOUDJ BOUGHRARA SA",
"OULED ZAOUI",
"BIR CHOUHADA",
"KSAR SBAHI",
"OUED NINI",
"MESKIANA",
"AIN FEKROUN",
"RAHIA",
"AIN ZITOUN",
"OULED GACEM",
"EL HARMILIA")
 villes[5] = new Array
("choisir une commune",
"BATNA",
"GHASSIRA",
"MAAFA",
"MEROUANA",
"SERIANA",
"MENAA",
"EL MADHER",
"TAZOULT",
"N GAOUS",
"GUIGBA",
"INOUGHISSEN",
"OUYOUN EL ASSAFIR",
"DJERMA",
"BITAM",
"AZIL ABEDELKADER",
"ARRIS",
"KIMMEL",
"TILATOU",
"AIN DJASSER",
"OULED SELLEM",
"TIGHARGHAR",
"AIN YAGOUT",
"FESDIS",
"SEFIANE",
"RAHBAT",
"TIGHANIMINE",
"LEMSANE",
"KSAR BELLEZMA",
"SEGGANA",
"ICHMOUL",
"FOUM TOUB",
"BENI FOUDHALA EL HAKANIA",
"OUED EL MA",
"TALKHAMT",
"BOUZINA",
"CHEMORA",
"OUED CHAABA",
"TAXLENT",
"GOSBAT",
"OULED AOUF",
"BOUMAGUEUR",
"BARIKA",
"DJEZZAR",
"T KOUT",
"AIN TOUTA",
"HIDOUSSA",
"TENIET EL ABED",
"OUED TAGA",
"OULED FADEL",
"TIMGAD",
"RAS EL AIOUN",
"CHIR",
"OULED SI SLIMANE",
"ZANET EL BEIDA",
"M DOUKAL",
"OULED AMMAR",
"EL HASSI",
"LAZROU",
"BOUMIA",
"BOULHILAT",
"LARBAA")
 villes[6] = new Array
("choisir une commune",
"BEJAIA",
"AMIZOUR",
"FERAOUN",
"TAOURIT IGHIL",
"CHELLATA",
"TAMOKRA",
"TIMEZRIT",
"SOUK EL TENINE",
"M’CISNA",
"TINEBDAR",
"TICHY",
"SMAOUN",
"KENDIRA",
"TIFRA",
"IGHRAM",
"AMALOU",
"IGHIL-ALI",
"FENAIA IL MATEN",
"TOUDJA",
"DARGHINA",
"SIDI AYAD",
"AOKAS",
"BENI DEJLLIL",
"ADEKAR",
"AKBOU",
"SEDDOUK",
"TAZMALT",
"AIT R’ZINE",
"CHEMINI",
"SOUK OUFELLA",
"TASKRIOUT",
"TIBANE",
"TALA HAMZA",
"BARBACHA",
"BENI K’SILA",
"OUZELLAGUENE",
"BOUHAMZA",
"BENI-MALLIKECHE",
"SIDI-AICH",
"EL KSEUR",
"MELBOU",
"AKFADOU",
"LEFLAYE",
"KHERRATA",
"DRA EL CAID",
"TAMRIDJET",
"AIT-SMAIL",
"BOUKHELIFA",
"TIZI-N’BERBER",
"BENIMAOUCHE",
"OUED GHIR",
"BOUDJELLIL")
 villes[7] = new Array
("choisir une commune",
"BISKRA",
"OUMACHE",
"BRANIS",
"CHETMA",
"SIDI OKBA",
"M’CHOUNECHE",
"EL HAOUCH",
"AIN NAGA",
"ZERIBET EL OUED",
"EL FEIDH",
"EL KANTARA",
"AIN ZAATOUT",
"EL OUTAYA",
"DJEMORAH",
"TOLGA",
"LIOUA",
"LICHANA",
"OURLAL",
"M’LILI",
"FOUGHALA",
"BORDJ BEN AZZOUZ",
"MEZIRAA",
"BOUCHAKROUN",
"MEKHADMA",
"EL GHROUS",
"EL HADJAB",
"KHENGUET SIDI NADJI")
 villes[8] = new Array
("choisir une commune",
"BECHAR",
"ERG FERRADJ",
"MERIDJA",
"LAHMAR",
"MECHRAA  H.BOUMEDIENE",
"KENADSA",
"TAGHIT",
"BOUKAIS",
"MOGHEUL",
"ABADLA",
"BENI OUNIF")
 villes[9] = new Array
("choisir une commune",
"BLIDA",
"CHEBLI",
"BOUINAN",
"OUED EL ALLEUG",
"OULED YAICH",
"CHREA",
"EL-AFFROUN",
"CHIFFA",
"HAMMAM MELOUANE",
"BENKHELIL",
"SOUMAA",
"MOUZAIA",
"SOUHANE",
"MEFTAH",
"OULED SLAMA",
"BOUFARIK",
"LARBAA",
"OUED  DJER",
"BENI-TAMOU",
"BOUARFA",
"BENI MERED",
"BOUGARA",
"GUERROUAOU",
"AIN ROMANA",
"DJEBABRA")
 villes[10] = new Array
("choisir une commune",
"BOUIRA",
"EL ASNAM",
"GUERROUMA",
"SOUK EL KHEMIS",
"KADIRIA",
"AHNIF",
"DIRAH",
"AIT LAAZIZ",
"TAGHZOUT",
"RAOURAOUA",
"MEZDOUR",
"HAIZER",
"LAKHDARIA",
"MAALA",
"EL HACHIMIA",
"AOMAR",
"CHORFA",
"BORDJ OKHRISS",
"EL ADJIBA",
"EL-HAKIMIA",
"EL KHABOUZIA",
"AHL EL KSAR",
"BOUDERBALA",
"Z’BARBAR",
"AIN EL HADJAR",
"DJEBAHIA",
"AGHBALOU",
"TAGUEDIT",
"AIN TURK",
"SAHARIDJ",
"DECHMIA",
"RIDANE",
"BECHLOUL",
"BOUKRAM",
"AIN-BESSEM",
"BIR GHBALOU",
"M CHEDALLAH",
"SOUR EL GHOZLANE",
"MAAMORA",
"OULED RACHED",
"AIN LALOUI",
"HADJERA ZERGA",
"ATH MANSOUR",
"EL-MOKRANI",
"OUED EL BERDI")
 villes[11] = new Array
("choisir une commune",
"TAMANRASSET",
"ABALESSA",
"IDLES",
"TAZROUK",
"AIN AMGUEL")
 villes[12] = new Array
("choisir une commune",
"TEBESSA",
"BIR-EL-ATER",
"CHERIA",
"STAH GUENTIS",
"EL-AOUINET",
"EL-HOUIDJBET",
"SAF SAF EL-OUESRA",
"HAMMAMET",
"NEGRINE",
"BIR MOKKADEM",
"EL KOUIF",
"MORSSOT",
"EL OGLA",
"BIR DHEB",
"EL OGLA EL MALHA",
"GOURRIGUER",
"BEKKARIA",
"BOUKHADRA",
"OUENZA",
"EL MALABIOD",
"OUM ALI",
"TELIDJEN",
"AIN ZERGA",
"EL MERIDJ",
"BOULHAF DYR",
"BEDJENE",
"EL MEZERAA",
"FERKANE")
 villes[13] = new Array
("choisir une commune",
"TLEMCEN",
"BENI MESTER",
"AIN TALLOUT",
"REMCHI",
"EL FEHOUL",
"SABRA",
"GHAZAOUET",
"SOUANI",
"DJEBALA",
"EL GOR",
"OUED LAKHDAR",
"AIN FEZZA",
"OULED MIMOUN",
"AMIEUR",
"AIN YOUCEF",
"ZENATA",
"BENI SNOUS",
"BAB EL ASSA",
"DAR YAGHMOURASSEN",
"FELLAOUCENE",
"EL AZAIL",
"SEBBAA CHIOUKH",
"TERNY BENI HEDIEL",
"BENSEKRANE",
"AIN NEHALA",
"HENNAYA",
"MAGHNIA",
"HAMMAM BOUGHRARA",
"SOUAHLIA",
"MSIRDA FOUAGA",
"AIN FETTAH",
"EL ARICHA",
"SOUK TLETA",
"SIDI ABDELLI",
"SEBDOU",
"BENI OUARSOUS",
"SIDI MEDJAHED",
"BENI BOUSSAID",
"MARSA BEN M’HIDI",
"NEDROMA",
"SIDI DJILALI",
"BENI BAHDEL",
"BOUIHI",
"HONAINE",
"TIANET",
"OULED RIYAH",
"BOUHLOU",
"BENI-KHELLAD",
"AIN GHORABA",
"CHETOUANE",
"MANSOURAH",
"BENI SMIEL",
"AIN KEBIRA")
 villes[14] = new Array
("choisir une commune",
"TIARET",
"MEDROUSSA",
"AIN BOUCHEKIF",
"SIDI ALI MELLAL",
"AIN ZARIT",
"AIN DEHEB",
"SIDI BAKHTI",
"MEDRISSA",
"ZMALET EL EMIR ABDELKADE",
"MADNA",
"SEBT",
"MELLAKOU",
"DAHMOUNI",
"RAHOUIA",
"MAHDIA",
"SOUGUEUR",
"SI ABDELGHANI",
"AIN EL HADID",
"DJEBILET ROSFA",
"NAIMA",
"MEGHILA",
"GUERTOUFA",
"SIDI HOSNI",
"DJILLALI BEN AMAR",
"SEBAINE",
"TOUSNINA",
"FRENDA",
"AIN KERMES",
"KSAR CHELLALA",
"RECHAIGA",
"NADORAH",
"TAGDEMT",
"OUED LILLI",
"MECHRAA SAFA",
"HAMADIA",
"CHEHAIMA",
"TAKHEMARET",
"SIDI ABDERRAHMANE",
"SERGHINE",
"BOUGARA",
"FAIDJA",
"TIDDA")
 villes[15] = new Array
("choisir une commune",
"TIZI-OUZOU",
"AIN-EL-HAMMAM",
"AKBIL",
"FREHA",
"SOUAMAA",
"MECHTRAS",
"IRDJEN",
"TIMIZART",
"MAKOUDA",
"DRAA EL MIZAN",
"TIZI-GHENIF",
"BOUNOUH",
"AIT-CHAFAA",
"FRIKAT",
"BENI AISSI",
"BENI ZMENZER",
"IFERHOUNENE",
"AZAZGA",
"ILLOULA OUMALOU",
"YAKOURENE",
"LARBA NATH IRATHEN",
"TIZI-RACHED",
"ZEKRI",
"OUAGUENOUNE",
"AIN-ZAOUIA",
"M’KIRA",
"AIT-YAHIA",
"AIT-MAHMOUD",
"MAATKAS",
"AIT BOUMEHDI",
"ABI YOUCEF",
"BENI-DOUALA",
"ILLILTEN",
"BOUZEGUENE",
"AIT AGGOUACHA",
"OUADHIAS",
"AZEFFOUN",
"TIGZIRT",
"DJEBEL AISSA MIMOUN",
"BOGHNI",
"IFIGHA",
"AIT OUMALOU",
"TIRMITINE",
"AKERROU",
"YATAFENE",
"BENI-ZIKKI",
"DRAA-BEN-KHEDDA",
"OUACIF",
"IDJEUR",
"MEKLA",
"TIZI N’TLETA",
"BENI YENNI",
"AGHRIBS",
"IFLISSEN",
"BOUDJIMA",
"AIT YAHIA MOUSSA",
"SOUK-EL-THENINE",
"AIT KHELLILI",
"SIDI NAAMANE",
"IBOUDRARENE",
"AGOUNI-GUEGHRANE",
"MIZRANA",
"IMSOUHAL",
"TADMAIT",
"AIT BOUADDOU",
"ASSI YOUCEF",
"AIT TOUDERT")
villes[16] = new Array
("choisir une commune",
"ALGER CENTRE",
"SIDI M’HAMED",
"EL MADANIA",
"MOHAMED BELOUZDAD",
"BAB EL OUED",
"BOLOGHINE IBNOU ZIRI",
"CASBAH",
"OUED KORICHE",
"BIR MOURAD RAIS",
"EL BIAR",
"BOUZAREAH",
"BIRKHADEM",
"EL HARRACH",
"BARAKI",
"OUED SMAR",
"BOUROUBA",
"HUSSEIN DEY",
"KOUBA",
"BACHEDJERAH",
"DAR EL BEIDA",
"BAB EZZOUAR",
"BEN AKNOUN",
"DELY IBRAHIM",
"HAMMAMET",
"RAIS HAMIDOU",
"DJASR KASENTINA",
"EL MOURADIA",
"HYDRA",
"MOHAMMADIA",
"BORDJ EL KIFFAN",
"EL MAKARIA",
"BENI MESSOUS",
"LES EUCALYPTUS",
"TESSALA EL MERDJA",
"OULED CHEBEL",
"BIRTOUTA",
"SIDI MOUSSA",
"ROUIBA",
"HERRAOUA",
"REGHAIA",
"AIN TAYA",
"BORDJ EL BAHRI",
"EL MARSA",
"ZERALDA",
"SAOULA",
"MAALMA",
"BABA HASSEN",
"DOUERA",
"DRARIA",
"RAHMANIA",
"OULED FAYET",
"CHERAGA",
"STAOUELI",
"EL ACHOUR",
"SOUIDANIA",
"KHRAISSIA",
"AIN BENIAN")
 villes[17] = new Array
("choisir une commune",
"DJELFA",
"MOUDJEBARA",
"EL GUEDID",
"HASSI BAHBAH",
"AIN MAABED",
"SED RAHAL",
"FAIDH EL BOTMA",
"BIRINE",
"BOUIRA LAHDAB",
"ZACCAR",
"EL KHEMIS",
"SIDI BAIZID",
"M’LILIHA",
"EL IDRISSIA",
"DOUIS",
"HASSI EL EUCH",
"MESSAAD",
"GUETTARA",
"SIDI LAADJEL",
"HAD SAHARY",
"GUERNINI",
"SELMANA",
"AIN CHOUHADA",
"OUM LAADHAM",
"DAR CHIOUKH",
"CHAREF",
"BENYAGOUB",
"ZAAFRANE",
"DELDOUL",
"AIN EL IBEL",
"AIN OUSSERA",
"BENHAR",
"HASSI FEDOUL",
"AMOURAH",
"AIN FEKKA",
"TADMIT")
 villes[18] = new Array
("choisir une commune",
"JIJEL",
"ERRAGUENE",
"EL AOUANA",
"ZIAMA MANSOURIA",
"TAHER",
"EMIR ABDELKADER",
"CHEKFA",
"CHAHNA",
"EL MILIA",
"SIDI MAROUF",
"SETTARA",
"EL ANCER",
"SIDI ABDELAZIZ",
"KAOUS",
"GHEBALA",
"BOURAOUI BELHADEF",
"DJIMLA",
"SELMA BENZIADA",
"BOUSSIF OULED ASKEUR",
"EL KENNAR NOUCHFI",
"OULED YAHIA KHADROUCH",
"BOUDRIA BENYADJIS",
"KHIRI OUED ADJOUL",
"TEXENNA",
"DJEMAA BENI HABIBI",
"BORDJ T’HAR",
"OULED RABAH",
"OUDJANA")
 villes[19] = new Array
("choisir une commune",
"SETIF",
"AIN EL KEBIRA",
"BENI-AZIZ",
"OULED SI AHMED",
"BOUTALEB",
"AIN-ROUA",
"DRAA-KEBILA",
"BIR-EL-ARCH",
"BENI CHEBANA",
"OULED TEBBEN",
"HAMMA",
"MAAOUIA",
"AIN-LEGRADJ",
"AIN ABESSA",
"DEHAMCHA",
"BABOR",
"GUIDJEL",
"AIN LAHDJAR",
"BOUSSELAM",
"EL EULMA",
"DJEMILA",
"BENI-OUARTILANE",
"ROSFA",
"OULED ADDOUANE",
"BELLAA",
"AIN ARNAT",
"AMOUCHA",
"AIN OULMANE",
"BEIDHA BORDJ",
"BOUANDAS",
"BAZER-SAKRA",
"HAMAM SOUKHNA",
"MEZLOUG",
"BIR HADDADA",
"SERDJ-EL-GHOUL",
"HARBIL",
"EL OURICIA",
"TIZI N’BECHAR",
"SALAH BEY",
"AIN AZEL",
"GUENZET",
"TALA-IFACENE",
"BOUGAA",
"BENI FOUDA",
"TACHOUDA",
"BENI-MOUHLI",
"OULED SABOR",
"GUELLAL",
"AIN-SEBT",
"HAMMAM GUERGOUR",
"AIT NAOUAL MEZADA",
"KSAR EL ABTAL",
"BENI OUSSINE",
"AIT-TIZI",
"MAOUAKLANE",
"GUELTA ZERKA",
"OUED EL BARAD",
"TAYA",
"EL-OULDJA",
"TELLA")
 villes[20] = new Array
("choisir une commune",
"SAIDA",
"DOUI THABET",
"AIN EL HADJAR",
"OULED KHALED",
"MOULAY LARBI",
"YOUB",
"HOUNET",
"SIDI AMAR",
"SIDI BOUBEKEUR",
"EL HASSASNA",
"MAAMORA",
"SIDI AHMED",
"AIN SEKHOUNA",
"OULED BRAHIM",
"TIRCINE",
"AIN SOLTANE")
 villes[21] = new Array
("choisir une commune",
"SKIKDA",
"AIN ZOUIT",
"EL HADAIEK",
"AZZABA",
"DJENDEL SAADI MOHAMED",
"AIN CHARCHAR",
"BEKKOUCHE LAKHDAR",
"BEN AZZOUZ",
"ES SEBT",
"COLLO",
"BENI ZAID",
"KERKARA",
"OULED ATTIA",
"OUED ZHOUR",
"ZITOUNA",
"EL ARROUCH",
"ZERDEZAS",
"OULED HABBABA",
"SIDI MEZGHICHE",
"EMJEZ EDCHICH",
"BENI OULBANE",
"AIN BOUZIANE",
"RAMDANE DJAMEL",
"BENI BACHIR",
"SALAH BOUCHAOUR",
"TAMALOUS",
"AIN KECHRA",
"OUM TOUB",
"BIN EL OUIDANE",
"FILFILA",
"CHERAIA",
"KANOUA",
"EL GHEDIR",
"BOUCHETATA",
"OULDJA BOULBALOUT",
"KHENAG MAOUNE",
"HAMMADI KROUMA",
"EL MARSA")
 villes[22] = new Array
("choisir une commune",
"SIDI BEL-ABBES",
"TESSALA",
"SIDI BRAHIM",
"MOSTEFA  BEN BRAHIM",
"TELAGH",
"MEZAOUROU",
"BOUKHANAFIS",
"SIDI ALI BOUSSIDI",
"BADREDINE EL MOKRANI",
"MARHOUM",
"TAFISSOUR",
"AMARNAS",
"TILMOUNI",
"SIDI LAHCENE",
"AIN THRID",
"MAKEDRA",
"TENIRA",
"MOULAY SLISSEN",
"EL HACAIBA",
"HASSI ZAHANA",
"TABIA",
"MERINE",
"RAS EL MA",
"AIN TINDAMINE",
"AIN KADA",
"M’CID",
"SIDI KHALED",
"AIN EL BERD",
"SFISSEF",
"AIN- ADDEN",
"OUED TAOURIRA",
"DHAYA",
"ZEROUALA",
"LAMTAR",
"SIDI CHAIB",
"SIDI DAHOU ZAIRS",
"OUED SEBAA",
"BOUDJEBAA EL BORDJ",
"SEHALA THAOURA",
"SIDI YACOUB",
"SIDI HAMADOUCHE",
"BELARBI",
"OUED SEFIOUN",
"TEGHALIMET",
"BEN BADIS",
"SIDI ALI BENYOUB",
"CHETOUANE BELAILA",
"BIR EL HAMMAM",
"TAOUDMOUT",
"REDJEM DEMOUCHE",
"BENACHIBA CHELIA",
"HASSI DAHOU")
 villes[23] = new Array
("choisir une commune",
"ANNABA",
"BERRAHAL",
"EL HADJAR",
"EL EULMA",
"EL BOUNI",
"OUED EL ANEB",
"CHORFA",
"SERAIDI",
"AIN BERDA",
"CHETAIBI",
"SIDI AMAR",
"TREAT")
 villes[24] = new Array
("choisir une commune",
"GUELMA",
"NECHMAYA",
"BOUATI MAHMOUD",
"OUED ZENATI",
"TAMLOUKA",
"OUED FERRAGHA",
"AIN SANDEL",
"RAS EL AGBA",
"DAHOUARA",
"BELKHEIR",
"BENDJARAH",
"BOU HAMDANE",
"AIN MAKHLOUF",
"AIN BEN BEIDA",
"KHEZARA",
"BENI MEZLINE",
"BOU HACHANA",
"GUELAAT BOU SBAA",
"HAMMAM DEBAGH",
"EL FEDJOUDJ",
"BORDJ SABATH",
"HAMMAM N’BAIL",
"AIN LARBI",
"MEDJEZ AMAR",
"BOUCHEGOUF",
"HELIOPOLIS",
"HOUARI BOUMEDIENNE",
"ROKNIA",
"SELLAOUA ANNOUNA",
"MEDJEZ SFA",
"BOUMAHRA AHMED",
"AIN REGGADA",
"OUED CHEHAM",
"DJEBALLAH KHEMISSI")
 villes[25] = new Array
("choisir une commune",
"CONSTANTINE",
"HAMMA BOUZIANE",
"BEN BADIS",
"ZIGHOUD YOUCEF",
"DIDOUCHE MOURAD",
"EL KHROUB",
"AIN ABID",
"BENI HAMIDANE",
"OULED RAHMOUN",
"AIN SMARA",
"MESSAOUD BOUDJERIOU",
"IBN ZIAD")
 villes[26] = new Array
("choisir une commune",
"MEDEA",
"OUZERA",
"OULED MAAREF",
"AIN BOUCIF",
"AISSAOUIA",
"OULED DEID",
"EL OMARIA",
"DERRAG",
"EL GUELBELKEBIR",
"BOUAICHE",
"MEZERANA",
"OULED BRAHIM",
"TIZI MAHDI",
"SIDI ZIANE",
"TAMESGUIDA",
"EL HAMDANIA",
"KEF LAKHDAR",
"CHELALET EL ADHAOURA",
"BOUSKENE",
"REBAIA",
"BOUCHRAHIL",
"OULED HELLAL",
"TAFRAOUT",
"BAATA",
"BOGHAR",
"SIDI NAAMANE",
"OULED BOUACHRA",
"SIDI ZAHAR",
"OUED HARBIL",
"BEN CHICAO",
"SIDI DEMED",
"AZIZ",
"SOUAGUI",
"ZOUBIRIA",
"KSAR EL BOUKHARI",
"EL AZIZIA",
"DJOUAB",
"CHABOUNIA",
"MAGHRAOUA",
"CHENIGUEL",
"AIN OUKSIR",
"OUM EL DJELLIL",
"OUAMRI",
"SI MAHDJOUB",
"TLETAT ED DOUAIR",
"BENI SLIMANE",
"BERROUAGHIA",
"SEGHOUANE",
"M’FATHA",
"MIHOUB",
"BOUGHZOUL",
"TABLAT",
"DEUX BASSINS",
"DRAA ESSAMAR",
"SIDI RABIE",
"BIR BEN LAABED",
"EL OUINET",
"OULED ANTAR",
"BOUAICHOUNE",
"HANNACHA",
"SEDRAYA",
"MEDJEBAR",
"KHAMS DJOUAMAA",
"SANEG")
 villes[27] = new Array
("choisir une commune",
"MOSTAGANEM",
"SAYADA",
"FORNAKA",
"STIDIA",
"AIN-NOUISSY",
"HASSI MAMECHE",
"AIN-TEDLES",
"SOUR",
"OUED EL KHEIR",
"SIDI BELAATTAR",
"KHEIR-EDDINE",
"SIDI ALI",
"BENABDELMALEK RAMDANE",
"HADJADJ",
"NEKMARIA",
"SIDI-LAKHDAR",
"ACHAACHA",
"KHADRA",
"BOUGUIRAT",
"SIRAT",
"AIN-SIDI CHERIF",
"MESRA",
"MANSOURAH",
"SOUAFLIA",
"OULED BOUGHALEM",
"OULED-MAALAH",
"MAZAGRAN",
"AIN-BOUDINAR",
"TAZGAIT",
"SAFSAF",
"TOUAHRIA",
"HASSIANE")
  villes[28] = new Array
("choisir une commune",
"M’SILA",
"MAADID",
"HAMMAM DALAA",
"OULED DERRADJ",
"TARMOUNT",
"M’TARFA",
"KHOUBANA",
"M’CIF",
"CHELLAL",
"OULED MADHI",
"MAGRA",
"BERHOUM",
"AIN KHADRA",
"OULED ADDI GUEBALA",
"BELAIBA",
"SIDI AISSA",
"AIN EL HADJEL",
"SIDI HADJERES",
"OUANOUGHA",
"BOU SAADA",
"OULED SIDI BRAHIM",
"SIDI AMEUR",
"TAMSA",
"BEN SROUR",
"OULED SLIMANE",
"EL HOUAMED",
"EL HAMEL",
"OULED MANSOUR",
"MAARIF",
"DEHAHNA",
"BOUTI SAYEH",
"KHETTOUTI SED-EL-JIR",
"ZARZOUR",
"MOHAMED BOUDIAF",
"BENZOUH",
"BIR FODA",
"AIN FARES",
"SIDI M’HAMED",
"MENAA",
"SOUAMAA",
"AIN EL MELH",
"MEDJEDEL",
"SLIM",
"AIN RICH",
"BENI ILMANE",
"OULTEME",
"DJEBEL MESSAAD")
 villes[29] = new Array
("choisir une commune",
"MASCARA",
"BOUHANIFIA",
"TIZI",
"HACINE",
"MAOUSSA",
"TIGHENNIF",
"EL HACHEM",
"SIDI KADA",
"ZELAMTA",
"OUED EL ABTAL",
"AIN FERAH",
"GHRISS",
"FROHA",
"MATEMORE",
"MAKHDA",
"SIDI BOUSSAID",
"EL BORDJ",
"AIN FEKAN",
"BENIAN",
"KHALOUIA",
"EL MENAOUER",
"OUED TARIA",
"AOUF",
"AIN FARES",
"AIN FRASS",
"SIG",
"OGGAZ",
"ALAIMIA",
"EL GAADA",
"ZAHANA",
"MOHAMMADIA",
"SIDI ABDELMOUMENE",
"FERRAGUIG",
"EL GHOMRI",
"SEDJERARA",
"MOCTA-DOUZ",
"BOU HENNI",
"EL GUEITENA",
"EL MAMOUNIA",
"EL KEURT",
"GHARROUS",
"GUERDJOUM",
"CHORFA",
"RAS EL AIN AMIROUCHE",
"NESMOT",
"SIDI ABDELDJEBAR",
"SEHAILIA")
 villes[30] = new Array
("choisir une commune",
"OUARGLA",
"AIN BEIDA",
"N’GOUSSA",
"HASSI MESSAOUD",
"ROUISSAT",
"SIDI KHOUILED",
"HASSI BEN ABDELLAH",
"EL BORMA")
 villes[31] = new Array
("choisir une commune",
"ORAN",
"GDYEL",
"BIR EL DJIR",
"HASSI BOUNIF",
"ES SENIA",
"ARZEW",
"BETHIOUA",
"MARSAT EL HADJADJ",
"AIN TURK",
"EL ANCAR",
"OUED TLELAT",
"TAFRAOUI",
"SIDI CHAMI",
"BOUFATIS",
"MERS EL KEBIR",
"BOUSFER",
"EL KERMA",
"EL BRAYA",
"HASSI BEN OKBA",
"BEN FREHA",
"HASSI MEFSOUKH",
"SIDI BEN YEBKA",
"MESSERGHIN",
"BOUTLELIS",
"AIN KERMA",
"AIN BIYA")
 villes[32] = new Array
("choisir une commune",
"EL BAYADH",
"ROGASSA",
"STITTEN",
"BREZINA",
"GHASSOUL",
"BOUALEM",
"EL BIODH SIDI CHEIKH",
"AIN EL ORAK",
"ARBAOUAT",
"BOUGTOUB",
"EL KHEITHER",
"KEF EL AHMAR",
"BOUSSEMGHOUN",
"CHELLALA",
"KRAKDA",
"EL BNOUD",
"CHEGUIG",
"SIDI AMAR",
"EL MEHARA",
"TOUSMOULINE",
"SIDI SLIMANE",
"SIDI TIFFOUR")
 villes[33] = new Array
("choisir une commune",
"ILLIZI",
"DEBDEB",
"BORDJ OMAR DRISS",
"IN AMENAS")
 villes[34] = new Array
("choisir une commune",
"B. B. ARRERIDJ",
"RAS EL OUED",
"BORDJ ZEMOURA",
"MANSOURA",
"EL M’HIR",
"BEN DAOUD",
"EL ACHIR",
"AIN TAGHROUT",
"BORDJ GHEDIR",
"SIDI-EMBAREK",
"EL HAMADIA",
"BELIMOUR",
"MEDJANA",
"TENIET EN NASR",
"DJAAFRA",
"EL MAIN",
"OULED BRAHEM",
"OULED DAHMANE",
"HASNAOUA",
"KHELIL",
"TAGLAIT",
"KSOUR",
"OULED SIDI-BRAHIM",
"TAFREG",
"COLLA",
"TIXTER",
"EL ACH",
"EL ANNASSEUR",
"TASSAMERT",
"AIN TASERA",
"BIR KASDALI",
"GHAILASA",
"RABTA",
"HARAZA")
 villes[35] = new Array
("choisir une commune",
"BOUMERDES",
"BOUDOUAOU",
"AFIR",
"BORDJ MENAIEL",
"BAGHLIA",
"SIDI DAOUD",
"NACIRIA",
"DJINET",
"ISSER",
"ZEMMOURI",
"SI MUSTAPHA",
"TIDJELABINE",
"CHABET EL AMEUR",
"THENIA",
"TIMEZRIT",
"CORSO",
"OULED MOUSSA",
"LARBATACHE",
"BOUZEGZA KEDDARA",
"TAOURGA",
"OULED AISSA",
"BEN CHOUD",
"DELLYS",
"AMMAL",
"BENI AMRANE",
"SOUK EL HAAD",
"BOUDOUAOU EL BAHRI",
"OULED HEDADJ",
"LEGHATA",
"HAMMEDI",
"KHEMIS EL KHECHNA",
"EL KHARROUBA")
 villes[36] = new Array
("choisir une commune",
"EL TARF",
"BOUHADJAR",
"BEN M HIDI",
"BOUGOUS",
"EL KALA",
"AIN EL ASSEL",
"EL AIOUN",
"BOUTELDJA",
"SOUAREKH",
"BERRIHANE",
"LAC DES OISEAUX",
"CHEFIA",
"DREAN",
"CHIHANI",
"CHEBAITA MOKHTAR",
"BESBES",
"ASFOUR",
"ECHATT",
"ZERIZER",
"ZITOUNA",
"AIN KERMA",
"OUED ZITOUN",
"HAMMAM BENI SALAH",
"RAML SOUK")
 villes[37] = new Array
("choisir une commune",
"TINDOUF",
"OUM EL ASSEL")
 villes[38] = new Array
("choisir une commune",
"TISSEMSILT",
"BORDJ BOUNAAMA",
"THENIET EL HAD",
"LAZHARIA",
"BENI CHAIB",
"LARDJEM",
"MELAAB",
"SIDI LANTRI",
"BORDJ EL EMIR ABDELKADER",
"LAYOUNE",
"KHEMISTI",
"OULED BESSEM",
"AMMARI",
"YOUSSOUFIA",
"SIDI BOUTOUCHENT",
"LARBAA",
"MAACEM",
"SIDI ABED",
"TAMELLAHET",
"SIDI SLIMANE",
"BOUCAID",
"BENI LAHCENE")
 villes[39] = new Array
("choisir une commune",
"EL-OUED",
"ROBBAH",
"OUED EL ALENDA",
"BAYADHA",
"NAKHLA",
"GUEMAR",
"KOUININE",
"REGUIBA",
"HAMRAIA",
"TAGHZOUT",
"DEBILA",
"HASSANI ABDELKRIM",
"HASSI KHALIFA",
"TALEB LARBI",
"DOUAR EL MAA",
"SIDI AOUN",
"TRIFAOUI",
"MAGRANE",
"BEN GUECHA",
"OURMES",
"EL OGLA",
"MIH OUANSA")
 villes[40] = new Array
("choisir une commune",
"KHENCHELA",
"M’TOUSSA",
"KAIS",
"BAGHAI",
"EL HAMMA",
"AIN TOUILA",
"TAOUZIANAT",
"BOUHMAMA",
"EL OUELDJA",
"REMILA",
"CHECHAR",
"DJELLAL",
"BABAR",
"TAMZA",
"ENSIGHA",
"OULED RECHACHE",
"EL MAHMAL",
"M’SARA",
"YABOUS",
"KHIRANE",
"CHELIA")
 villes[41] = new Array
("choisir une commune",
"SOUK AHRAS",
"SEDRATA",
"HANENCHA",
"MACHROHA",
"OULED DRISS",
"TIFFECH",
"ZAAROURIA",
"TAOURA",
"DREA",
"HADDADA",
"KHEDARA",
"MERAHNA",
"OULED MOUMEN",
"BIR BOUHOUCHE",
"M’DAOUROUCHE",
"OUM EL ADHAIM",
"AIN ZANA",
"AIN SOLTANE",
"QUILLEN",
"SIDI FREDJ",
"SAFEL EL OUIDEN",
"RAGOUBA",
"KHEMISSA",
"OUED KEBRIT",
"TERRAGUELT",
"ZOUABI")
 villes[42] = new Array
("choisir une commune",
"TIPAZA",
"MENACEUR",
"LARHAT",
"DOUAOUDA",
"BOURKIKA",
"KHEMISTI",
"AGHBAL",
"HADJOUT",
"SIDI-AMAR",
"GOURAYA",
"NADOR",
"CHAIBA",
"AIN TAGOURAIT",
"CHERCHELL",
"DAMOUS",
"MERAD",
"FOUKA",
"BOU ISMAIL",
"AHMER EL AIN",
"BOU HAROUN",
"SIDI GHILES",
"MESSELMOUN",
"SIDI RACHED",
"KOLEA",
"ATTATBA",
"SIDI SEMIANE",
"BENI MILEUK",
"HADJRET ENNOUS")
 villes[43] = new Array
("choisir une commune",
"MILA",
"FERDJIOUA",
"CHELGHOUM LAID",
"OUED ATHMENIA",
"AIN MELLOUK",
"TELEGHMA",
"OUED SEGUEN",
"TADJENANET",
"BENYAHIA ABDERRAHMANE",
"OUED ENDJA",
"AHMED RACHEDI",
"OULED KHALOUF",
"TIBERGUENT",
"BOUHATEM",
"ROUACHED",
"TESSALA",
"GRAREM GOUGA",
"SIDI MEROUANE",
"TASSADANE HADDADA",
"DERRAHI BOUSSELAH",
"MINAR ZARZA",
"AMIRA ARRES",
"TERRAI BAINEM",
"HAMALA",
"AIN TINE",
"EL MECHIRA",
"SIDI KHELIFA",
"ZEGHAIA",
"ELAYADI BARBES",
"AIN BEIDA HARRICHE",
"YAHIA BENIGUECHA",
"CHIGARA")
 villes[44] = new Array
("choisir une commune",
"AIN-DEFLA",
"MILIANA",
"BOUMEDFAA",
"KHEMIS-MILIANA",
"HAMMAM-RIGHA",
"ARIB",
"DJELIDA",
"EL-AMRA",
"BOURACHED",
"EL-ATTAF",
"EL-ABADIA",
"DJENDEL",
"OUED CHORFA",
"AIN-LECHIAKH",
"OUED DJEMAA",
"ROUINA",
"ZEDDINE",
"HASSANIA",
"BIR-OULD-KHELIFA",
"AIN-SOLTANE",
"TARIK-IBN-ZIAD",
"BORDJ-EMIR-KHALED",
"AIN TORKI",
"SIDI-LAKHDAR",
"BEN ALLAL",
"AIN-BENIAN",
"HOCEINIA",
"BIRBOUCHE",
"DJEMAA OULED CHEIKH",
"MEKHATRIA",
"BATHIA",
"TACHETA ZEGAGHA",
"AIN-BOUYAHIA",
"EL-MAINE",
"TIBERKANINE",
"BELAAS")
 villes[45] = new Array
("choisir une commune",
"NAAMA",
"MECHERIA",
"AIN SAFRA",
"TIOUT",
"SFISSIFA",
"MOGHRAR",
"ASSELA",
"DJENIANE BOURZEG",
"AIN BEN KHELIL",
"MAKMAN BEN AMER",
"KASDIR",
"EL BIOD")
 villes[46] = new Array
("choisir une commune",
"AIN TEMOUCHENT",
"CHAABAT EL HAM",
"AIN KIHAL",
"HAMMAM BOUHADJAR",
"BOUZEDJAR",
"OUED BERKECHE",
"AGHLAL",
"TERGA",
"AIN EL ARBAA",
"TAMZOURA",
"CHENTOUF",
"SIDI BEN ADDA",
"AOUBELLIL",
"EL MALAH",
"SIDI BOUMEDIENE",
"OUED SEBBAH",
"OULED BOUDJEMAA",
"AIN TOLBA",
"EL AMRIA",
"HASSI EL GHELLA",
"HASSASNA",
"OULED KIHAL",
"BENI SAF",
"SIDI SAFI",
"OULHACA EL GHERABA",
"SIDI OURIACHE",
"EMIR ABDELKADER",
"MANSOURA",
"EL MESSAID")
 villes[47] = new Array
("choisir une commune",
"GHARDAIA",
"DHAYET BENDHAHOUA",
"BERRIANE",
"METLILI",
"EL GUERRARA",
"EL ATTEUF",
"ZELFANA",
"SEBSEB",
"BOUNOURA")
 villes[48] = new Array
("choisir une commune",
"RELIZANE",
"OUED-RHIOU",
"BELAASSEL BOUZAGZA",
"SIDI SAADA",
"OULED AICHE",
"SIDI LAZREG",
"EL H’MADNA",
"SIDI M’HAMED BENALI",
"MEDIOUNA",
"SIDI KHETTAB",
"AMMI MOUSSA",
"ZEMMOURA",
"BENI DERGOUN",
"DJIDIOUIA",
"EL-GUETTAR",
"HAMRI",
"EL-MATMAR",
"SIDI M’HAMED BENAOUDA",
"AIN-TAREK",
"OUED ESSALEM",
"OUARIZANE",
"MAZOUNA",
"KALAA",
"AIN RAHMA",
"YELLEL",
"OUED EL DJEMAA",
"RAMKA",
"MENDES",
"LAHLEF",
"BENI ZENTIS",
"SOUK EL HAD",
"DAR BEN ABDELAH",
"EL HASSI",
"HAD ECHKALLA",
"BENDAOUD",
"EL OULDJA",
"MERDJA SIDI ABED",
"OULED SIDI MIHOUB")
 villes[49] = new Array
("choisir une commune",
"TIMIMOUN",
"OULED SAID",
"AOUGROUT",
"DELDOUL",
"METARFA",
"TINERKOUK",
"KSAR KADDOUR",
"CHAROUINE",
"TALMINE",
"OULED AISSA")
 villes[50] = new Array
("choisir une commune",
"BORDJ BADJI MOKHTAR",
"TIMIAOUINE")
 villes[51] = new Array
("choisir une commune",
"SIDI KHALED",
"RAS EL MIAD",
"BESBES",
"OULED DJELLAL",
"CHAIBA",
"DOUCEN")
 villes[52] = new Array
("choisir une commune",
"BENI ABBES",
"TAMTERT",
"KERZAZ",
"TIMOUDI",
"BENI IKHLEF",
"EL OUATA",
"TABELBALA",
"OULED KHOUDIR",
"KSABI",
"IGLI")
 villes[53] = new Array
("choisir une commune",
"IN SALAH",
"FOGGARET AZZAOUIA",
"IN GHAR")
 villes[54] = new Array
("choisir une commune",
"IN GUEZZAM",
"TIN ZOUATINE")
 villes[55] = new Array
("choisir une commune",
"TOUGGOURT",
"NEZLA",
"TEBESBEST",
"ZAOUIA EL ABIDIA",
"TEMACINE",
"BLIDET AMOR",
"MEGARINE",
"SIDI SLIMANE",
"TAIBET",
"M’NAGUEUR",
"EL-HADJIRA",
"EL ALIA",
"BENACEUR")
 villes[56] = new Array
("choisir une commune",
"DJANET",
"BORDJ EL HAOUASS")
 villes[57] = new Array
("choisir une commune",
"EL-M’GHAIER",
"SIDI KHELIL",
"OUM TOUYOUR",
"STILL",
"DJAMAA",
"SIDI AMRANE",
"TENEDLA",
"M’RARA")
 villes[58] = new Array
("choisir une commune",
"EL MENIAA",
"HASSI GARA",
"HASSI FEHAL")



var code_com = new Array();
code_com[0] = new Array();
code_com[1] = new Array
("choisir une commune",
"ADRAR",
"TAMEST",
"REGGANE",
"IN ZGHMIR",
"TIT",
"TSABIT",
"ZAOUIET KOUNTA",
"AOULEF",
"TIMEKTEN",
"TAMANTIT",
"FENOUGHIL",
"SALI",
"AKABLI",
"OULED AHMED TIMMI",
"BOUDA",
"SEBAA")
 code_com[2] = new Array
("choisir une commune",
"CHLEF",
"TENES",
"BENAIRIA",
"EL KARIMIA",
"TADJENA",
"TAOUGRIT",
"BENI HAOUA",
"SOBHA",
"HARCHOUNE",
"OULED FARES",
"SIDI AKKACHA",
"BOUKADIR",
"BENI RACHED",
"TELASSA",
"HERENFA",
"OUED GOUSSINE",
"DAHRA",
"OULED ABBES",
"SENDJAS",
"ZEBOUDJA",
"OUED SLY",
"ABOU EL HASSAN",
"EL MARSA",
"CHETTIA",
"SIDI ABDERRAHMANE",
"MOUSSADEK",
"EL HADJADJ",
"LABIOD MEDJADJA",
"OUED FODDA",
"OULED BEN ABDELKADER",
"BOUZEGHAIA",
"AIN MERANE",
"OUM DROU",
"BREIRA",
"BENI  BOUATTAB")
code_com[3] = new Array
("choisir une commune",
"LAGHOUAT",
"KSAR EL HIRANE",
"BENACER BENCHOHRA",
"SIDI MAKHLOUF",
"HASSI DELAA",
"HASSI R’MEL",
"AIN MAHDI",
"TADJEMOUT",
"EL KHENG",
"GUELTAT SIDI SAAD",
"AIN SIDI ALI",
"EL BEIDHA",
"BRIDA",
"EL GHICHA",
"HADJ MECHRI",
"SEBGAG",
"TAOUALA",
"TADJROUNA",
"AFLOU",
"EL ASSAFIA",
"OUED MORRA",
"OUED M’ZI",
"EL HAOUAITA",
"SIDI BOUZID")
  code_com[4] = new Array
("choisir une commune",
"OUM EL BOUAGHI",
"AIN BEIDA",
"AIN M’LILA",
"BEHIR CHERGUI",
"EL AMIRIA",
"SIGUS",
"BELALA",
"AIN BABOUCHE",
"BERRICHE",
"OULED HAMLA",
"DHALAA",
"AIN KERCHA",
"HANCHIR TOUMGHANI",
"EL DJAZIA",
"AIN DISS",
"FKIRINA",
"SOUK NAAMANE",
"ZORG",
"EL FEDJOUDJ BOUGHRARA SA",
"OULED ZAOUI",
"BIR CHOUHADA",
"KSAR SBAHI",
"OUED NINI",
"MESKIANA",
"AIN FEKROUN",
"RAHIA",
"AIN ZITOUN",
"OULED GACEM",
"EL HARMILIA")
 code_com[5] = new Array
("choisir une commune",
"BATNA",
"GHASSIRA",
"MAAFA",
"MEROUANA",
"SERIANA",
"MENAA",
"EL MADHER",
"TAZOULT",
"N GAOUS",
"GUIGBA",
"INOUGHISSEN",
"OUYOUN EL ASSAFIR",
"DJERMA",
"BITAM",
"AZIL ABEDELKADER",
"ARRIS",
"KIMMEL",
"TILATOU",
"AIN DJASSER",
"OULED SELLEM",
"TIGHARGHAR",
"AIN YAGOUT",
"FESDIS",
"SEFIANE",
"RAHBAT",
"TIGHANIMINE",
"LEMSANE",
"KSAR BELLEZMA",
"SEGGANA",
"ICHMOUL",
"FOUM TOUB",
"BENI FOUDHALA EL HAKANIA",
"OUED EL MA",
"TALKHAMT",
"BOUZINA",
"CHEMORA",
"OUED CHAABA",
"TAXLENT",
"GOSBAT",
"OULED AOUF",
"BOUMAGUEUR",
"BARIKA",
"DJEZZAR",
"T KOUT",
"AIN TOUTA",
"HIDOUSSA",
"TENIET EL ABED",
"OUED TAGA",
"OULED FADEL",
"TIMGAD",
"RAS EL AIOUN",
"CHIR",
"OULED SI SLIMANE",
"ZANET EL BEIDA",
"M DOUKAL",
"OULED AMMAR",
"EL HASSI",
"LAZROU",
"BOUMIA",
"BOULHILAT",
"LARBAA")
 code_com[6] = new Array
("choisir une commune",
"BEJAIA",
"AMIZOUR",
"FERAOUN",
"TAOURIT IGHIL",
"CHELLATA",
"TAMOKRA",
"TIMEZRIT",
"SOUK EL TENINE",
"M’CISNA",
"TINEBDAR",
"TICHY",
"SMAOUN",
"KENDIRA",
"TIFRA",
"IGHRAM",
"AMALOU",
"IGHIL-ALI",
"FENAIA IL MATEN",
"TOUDJA",
"DARGHINA",
"SIDI AYAD",
"AOKAS",
"BENI DEJLLIL",
"ADEKAR",
"AKBOU",
"SEDDOUK",
"TAZMALT",
"AIT R’ZINE",
"CHEMINI",
"SOUK OUFELLA",
"TASKRIOUT",
"TIBANE",
"TALA HAMZA",
"BARBACHA",
"BENI K’SILA",
"OUZELLAGUENE",
"BOUHAMZA",
"BENI-MALLIKECHE",
"SIDI-AICH",
"EL KSEUR",
"MELBOU",
"AKFADOU",
"LEFLAYE",
"KHERRATA",
"DRA EL CAID",
"TAMRIDJET",
"AIT-SMAIL",
"BOUKHELIFA",
"TIZI-N’BERBER",
"BENIMAOUCHE",
"OUED GHIR",
"BOUDJELLIL")
 code_com[7] = new Array
("choisir une commune",
"BISKRA",
"OUMACHE",
"BRANIS",
"CHETMA",
"SIDI OKBA",
"M’CHOUNECHE",
"EL HAOUCH",
"AIN NAGA",
"ZERIBET EL OUED",
"EL FEIDH",
"EL KANTARA",
"AIN ZAATOUT",
"EL OUTAYA",
"DJEMORAH",
"TOLGA",
"LIOUA",
"LICHANA",
"OURLAL",
"M’LILI",
"FOUGHALA",
"BORDJ BEN AZZOUZ",
"MEZIRAA",
"BOUCHAKROUN",
"MEKHADMA",
"EL GHROUS",
"EL HADJAB",
"KHENGUET SIDI NADJI")
 code_com[8] = new Array
("choisir une commune",
"BECHAR",
"ERG FERRADJ",
"MERIDJA",
"LAHMAR",
"MECHRAA  H.BOUMEDIENE",
"KENADSA",
"TAGHIT",
"BOUKAIS",
"MOGHEUL",
"ABADLA",
"BENI OUNIF")
 code_com[9] = new Array
("choisir une commune",
"BLIDA",
"CHEBLI",
"BOUINAN",
"OUED EL ALLEUG",
"OULED YAICH",
"CHREA",
"EL-AFFROUN",
"CHIFFA",
"HAMMAM MELOUANE",
"BENKHELIL",
"SOUMAA",
"MOUZAIA",
"SOUHANE",
"MEFTAH",
"OULED SLAMA",
"BOUFARIK",
"LARBAA",
"OUED  DJER",
"BENI-TAMOU",
"BOUARFA",
"BENI MERED",
"BOUGARA",
"GUERROUAOU",
"AIN ROMANA",
"DJEBABRA")
 code_com[10] = new Array
("choisir une commune",
"BOUIRA",
"EL ASNAM",
"GUERROUMA",
"SOUK EL KHEMIS",
"KADIRIA",
"AHNIF",
"DIRAH",
"AIT LAAZIZ",
"TAGHZOUT",
"RAOURAOUA",
"MEZDOUR",
"HAIZER",
"LAKHDARIA",
"MAALA",
"EL HACHIMIA",
"AOMAR",
"CHORFA",
"BORDJ OKHRISS",
"EL ADJIBA",
"EL-HAKIMIA",
"EL KHABOUZIA",
"AHL EL KSAR",
"BOUDERBALA",
"Z’BARBAR",
"AIN EL HADJAR",
"DJEBAHIA",
"AGHBALOU",
"TAGUEDIT",
"AIN TURK",
"SAHARIDJ",
"DECHMIA",
"RIDANE",
"BECHLOUL",
"BOUKRAM",
"AIN-BESSEM",
"BIR GHBALOU",
"M CHEDALLAH",
"SOUR EL GHOZLANE",
"MAAMORA",
"OULED RACHED",
"AIN LALOUI",
"HADJERA ZERGA",
"ATH MANSOUR",
"EL-MOKRANI",
"OUED EL BERDI")
 code_com[11] = new Array
("choisir une commune",
"TAMANRASSET",
"ABALESSA",
"IDLES",
"TAZROUK",
"AIN AMGUEL")
 code_com[12] = new Array
("choisir une commune",
"TEBESSA",
"BIR-EL-ATER",
"CHERIA",
"STAH GUENTIS",
"EL-AOUINET",
"EL-HOUIDJBET",
"SAF SAF EL-OUESRA",
"HAMMAMET",
"NEGRINE",
"BIR MOKKADEM",
"EL KOUIF",
"MORSSOT",
"EL OGLA",
"BIR DHEB",
"EL OGLA EL MALHA",
"GOURRIGUER",
"BEKKARIA",
"BOUKHADRA",
"OUENZA",
"EL MALABIOD",
"OUM ALI",
"TELIDJEN",
"AIN ZERGA",
"EL MERIDJ",
"BOULHAF DYR",
"BEDJENE",
"EL MEZERAA",
"FERKANE")
 code_com[13] = new Array
("choisir une commune",
"TLEMCEN",
"BENI MESTER",
"AIN TALLOUT",
"REMCHI",
"EL FEHOUL",
"SABRA",
"GHAZAOUET",
"SOUANI",
"DJEBALA",
"EL GOR",
"OUED LAKHDAR",
"AIN FEZZA",
"OULED MIMOUN",
"AMIEUR",
"AIN YOUCEF",
"ZENATA",
"BENI SNOUS",
"BAB EL ASSA",
"DAR YAGHMOURASSEN",
"FELLAOUCENE",
"EL AZAIL",
"SEBBAA CHIOUKH",
"TERNY BENI HEDIEL",
"BENSEKRANE",
"AIN NEHALA",
"HENNAYA",
"MAGHNIA",
"HAMMAM BOUGHRARA",
"SOUAHLIA",
"MSIRDA FOUAGA",
"AIN FETTAH",
"EL ARICHA",
"SOUK TLETA",
"SIDI ABDELLI",
"SEBDOU",
"BENI OUARSOUS",
"SIDI MEDJAHED",
"BENI BOUSSAID",
"MARSA BEN M’HIDI",
"NEDROMA",
"SIDI DJILALI",
"BENI BAHDEL",
"BOUIHI",
"HONAINE",
"TIANET",
"OULED RIYAH",
"BOUHLOU",
"BENI-KHELLAD",
"AIN GHORABA",
"CHETOUANE",
"MANSOURAH",
"BENI SMIEL",
"AIN KEBIRA")
 code_com[14] = new Array
("choisir une commune",
"TIARET",
"MEDROUSSA",
"AIN BOUCHEKIF",
"SIDI ALI MELLAL",
"AIN ZARIT",
"AIN DEHEB",
"SIDI BAKHTI",
"MEDRISSA",
"ZMALET EL EMIR ABDELKADE",
"MADNA",
"SEBT",
"MELLAKOU",
"DAHMOUNI",
"RAHOUIA",
"MAHDIA",
"SOUGUEUR",
"SI ABDELGHANI",
"AIN EL HADID",
"DJEBILET ROSFA",
"NAIMA",
"MEGHILA",
"GUERTOUFA",
"SIDI HOSNI",
"DJILLALI BEN AMAR",
"SEBAINE",
"TOUSNINA",
"FRENDA",
"AIN KERMES",
"KSAR CHELLALA",
"RECHAIGA",
"NADORAH",
"TAGDEMT",
"OUED LILLI",
"MECHRAA SAFA",
"HAMADIA",
"CHEHAIMA",
"TAKHEMARET",
"SIDI ABDERRAHMANE",
"SERGHINE",
"BOUGARA",
"FAIDJA",
"TIDDA")
 code_com[15] = new Array
("choisir une commune",
"TIZI-OUZOU",
"AIN-EL-HAMMAM",
"AKBIL",
"FREHA",
"SOUAMAA",
"MECHTRAS",
"IRDJEN",
"TIMIZART",
"MAKOUDA",
"DRAA EL MIZAN",
"TIZI-GHENIF",
"BOUNOUH",
"AIT-CHAFAA",
"FRIKAT",
"BENI AISSI",
"BENI ZMENZER",
"IFERHOUNENE",
"AZAZGA",
"ILLOULA OUMALOU",
"YAKOURENE",
"LARBA NATH IRATHEN",
"TIZI-RACHED",
"ZEKRI",
"OUAGUENOUNE",
"AIN-ZAOUIA",
"M’KIRA",
"AIT-YAHIA",
"AIT-MAHMOUD",
"MAATKAS",
"AIT BOUMEHDI",
"ABI YOUCEF",
"BENI-DOUALA",
"ILLILTEN",
"BOUZEGUENE",
"AIT AGGOUACHA",
"OUADHIAS",
"AZEFFOUN",
"TIGZIRT",
"DJEBEL AISSA MIMOUN",
"BOGHNI",
"IFIGHA",
"AIT OUMALOU",
"TIRMITINE",
"AKERROU",
"YATAFENE",
"BENI-ZIKKI",
"DRAA-BEN-KHEDDA",
"OUACIF",
"IDJEUR",
"MEKLA",
"TIZI N’TLETA",
"BENI YENNI",
"AGHRIBS",
"IFLISSEN",
"BOUDJIMA",
"AIT YAHIA MOUSSA",
"SOUK-EL-THENINE",
"AIT KHELLILI",
"SIDI NAAMANE",
"IBOUDRARENE",
"AGOUNI-GUEGHRANE",
"MIZRANA",
"IMSOUHAL",
"TADMAIT",
"AIT BOUADDOU",
"ASSI YOUCEF",
"AIT TOUDERT")
code_com[16] = new Array
("choisir une commune",
"ALGER CENTRE",
"SIDI M’HAMED",
"EL MADANIA",
"MOHAMED BELOUZDAD",
"BAB EL OUED",
"BOLOGHINE IBNOU ZIRI",
"CASBAH",
"OUED KORICHE",
"BIR MOURAD RAIS",
"EL BIAR",
"BOUZAREAH",
"BIRKHADEM",
"EL HARRACH",
"BARAKI",
"OUED SMAR",
"BOUROUBA",
"HUSSEIN DEY",
"KOUBA",
"BACHEDJERAH",
"DAR EL BEIDA",
"BAB EZZOUAR",
"BEN AKNOUN",
"DELY IBRAHIM",
"HAMMAMET",
"RAIS HAMIDOU",
"DJASR KASENTINA",
"EL MOURADIA",
"HYDRA",
"MOHAMMADIA",
"BORDJ EL KIFFAN",
"EL MAKARIA",
"BENI MESSOUS",
"LES EUCALYPTUS",
"TESSALA EL MERDJA",
"OULED CHEBEL",
"BIRTOUTA",
"SIDI MOUSSA",
"ROUIBA",
"HERRAOUA",
"REGHAIA",
"AIN TAYA",
"BORDJ EL BAHRI",
"EL MARSA",
"ZERALDA",
"SAOULA",
"MAALMA",
"BABA HASSEN",
"DOUERA",
"DRARIA",
"RAHMANIA",
"OULED FAYET",
"CHERAGA",
"STAOUELI",
"EL ACHOUR",
"SOUIDANIA",
"KHRAISSIA",
"AIN BENIAN")
 code_com[17] = new Array
("choisir une commune",
"DJELFA",
"MOUDJEBARA",
"EL GUEDID",
"HASSI BAHBAH",
"AIN MAABED",
"SED RAHAL",
"FAIDH EL BOTMA",
"BIRINE",
"BOUIRA LAHDAB",
"ZACCAR",
"EL KHEMIS",
"SIDI BAIZID",
"M’LILIHA",
"EL IDRISSIA",
"DOUIS",
"HASSI EL EUCH",
"MESSAAD",
"GUETTARA",
"SIDI LAADJEL",
"HAD SAHARY",
"GUERNINI",
"SELMANA",
"AIN CHOUHADA",
"OUM LAADHAM",
"DAR CHIOUKH",
"CHAREF",
"BENYAGOUB",
"ZAAFRANE",
"DELDOUL",
"AIN EL IBEL",
"AIN OUSSERA",
"BENHAR",
"HASSI FEDOUL",
"AMOURAH",
"AIN FEKKA",
"TADMIT")
 code_com[18] = new Array
("choisir une commune",
"JIJEL",
"ERRAGUENE",
"EL AOUANA",
"ZIAMA MANSOURIA",
"TAHER",
"EMIR ABDELKADER",
"CHEKFA",
"CHAHNA",
"EL MILIA",
"SIDI MAROUF",
"SETTARA",
"EL ANCER",
"SIDI ABDELAZIZ",
"KAOUS",
"GHEBALA",
"BOURAOUI BELHADEF",
"DJIMLA",
"SELMA BENZIADA",
"BOUSSIF OULED ASKEUR",
"EL KENNAR NOUCHFI",
"OULED YAHIA KHADROUCH",
"BOUDRIA BENYADJIS",
"KHIRI OUED ADJOUL",
"TEXENNA",
"DJEMAA BENI HABIBI",
"BORDJ T’HAR",
"OULED RABAH",
"OUDJANA")
 code_com[19] = new Array
("choisir une commune",
"SETIF",
"AIN EL KEBIRA",
"BENI-AZIZ",
"OULED SI AHMED",
"BOUTALEB",
"AIN-ROUA",
"DRAA-KEBILA",
"BIR-EL-ARCH",
"BENI CHEBANA",
"OULED TEBBEN",
"HAMMA",
"MAAOUIA",
"AIN-LEGRADJ",
"AIN ABESSA",
"DEHAMCHA",
"BABOR",
"GUIDJEL",
"AIN LAHDJAR",
"BOUSSELAM",
"EL EULMA",
"DJEMILA",
"BENI-OUARTILANE",
"ROSFA",
"OULED ADDOUANE",
"BELLAA",
"AIN ARNAT",
"AMOUCHA",
"AIN OULMANE",
"BEIDHA BORDJ",
"BOUANDAS",
"BAZER-SAKRA",
"HAMAM SOUKHNA",
"MEZLOUG",
"BIR HADDADA",
"SERDJ-EL-GHOUL",
"HARBIL",
"EL OURICIA",
"TIZI N’BECHAR",
"SALAH BEY",
"AIN AZEL",
"GUENZET",
"TALA-IFACENE",
"BOUGAA",
"BENI FOUDA",
"TACHOUDA",
"BENI-MOUHLI",
"OULED SABOR",
"GUELLAL",
"AIN-SEBT",
"HAMMAM GUERGOUR",
"AIT NAOUAL MEZADA",
"KSAR EL ABTAL",
"BENI OUSSINE",
"AIT-TIZI",
"MAOUAKLANE",
"GUELTA ZERKA",
"OUED EL BARAD",
"TAYA",
"EL-OULDJA",
"TELLA")
 code_com[20] = new Array
("choisir une commune",
"SAIDA",
"DOUI THABET",
"AIN EL HADJAR",
"OULED KHALED",
"MOULAY LARBI",
"YOUB",
"HOUNET",
"SIDI AMAR",
"SIDI BOUBEKEUR",
"EL HASSASNA",
"MAAMORA",
"SIDI AHMED",
"AIN SEKHOUNA",
"OULED BRAHIM",
"TIRCINE",
"AIN SOLTANE")
 code_com[21] = new Array
("choisir une commune",
"SKIKDA",
"AIN ZOUIT",
"EL HADAIEK",
"AZZABA",
"DJENDEL SAADI MOHAMED",
"AIN CHARCHAR",
"BEKKOUCHE LAKHDAR",
"BEN AZZOUZ",
"ES SEBT",
"COLLO",
"BENI ZAID",
"KERKARA",
"OULED ATTIA",
"OUED ZHOUR",
"ZITOUNA",
"EL ARROUCH",
"ZERDEZAS",
"OULED HABBABA",
"SIDI MEZGHICHE",
"EMJEZ EDCHICH",
"BENI OULBANE",
"AIN BOUZIANE",
"RAMDANE DJAMEL",
"BENI BACHIR",
"SALAH BOUCHAOUR",
"TAMALOUS",
"AIN KECHRA",
"OUM TOUB",
"BIN EL OUIDANE",
"FILFILA",
"CHERAIA",
"KANOUA",
"EL GHEDIR",
"BOUCHETATA",
"OULDJA BOULBALOUT",
"KHENAG MAOUNE",
"HAMMADI KROUMA",
"EL MARSA")
 code_com[22] = new Array
("choisir une commune",
"SIDI BEL-ABBES",
"TESSALA",
"SIDI BRAHIM",
"MOSTEFA  BEN BRAHIM",
"TELAGH",
"MEZAOUROU",
"BOUKHANAFIS",
"SIDI ALI BOUSSIDI",
"BADREDINE EL MOKRANI",
"MARHOUM",
"TAFISSOUR",
"AMARNAS",
"TILMOUNI",
"SIDI LAHCENE",
"AIN THRID",
"MAKEDRA",
"TENIRA",
"MOULAY SLISSEN",
"EL HACAIBA",
"HASSI ZAHANA",
"TABIA",
"MERINE",
"RAS EL MA",
"AIN TINDAMINE",
"AIN KADA",
"M’CID",
"SIDI KHALED",
"AIN EL BERD",
"SFISSEF",
"AIN- ADDEN",
"OUED TAOURIRA",
"DHAYA",
"ZEROUALA",
"LAMTAR",
"SIDI CHAIB",
"SIDI DAHOU ZAIRS",
"OUED SEBAA",
"BOUDJEBAA EL BORDJ",
"SEHALA THAOURA",
"SIDI YACOUB",
"SIDI HAMADOUCHE",
"BELARBI",
"OUED SEFIOUN",
"TEGHALIMET",
"BEN BADIS",
"SIDI ALI BENYOUB",
"CHETOUANE BELAILA",
"BIR EL HAMMAM",
"TAOUDMOUT",
"REDJEM DEMOUCHE",
"BENACHIBA CHELIA",
"HASSI DAHOU")
 code_com[23] = new Array
("choisir une commune",
"ANNABA",
"BERRAHAL",
"EL HADJAR",
"EL EULMA",
"EL BOUNI",
"OUED EL ANEB",
"CHORFA",
"SERAIDI",
"AIN BERDA",
"CHETAIBI",
"SIDI AMAR",
"TREAT")
 code_com[24] = new Array
("choisir une commune",
"GUELMA",
"NECHMAYA",
"BOUATI MAHMOUD",
"OUED ZENATI",
"TAMLOUKA",
"OUED FERRAGHA",
"AIN SANDEL",
"RAS EL AGBA",
"DAHOUARA",
"BELKHEIR",
"BENDJARAH",
"BOU HAMDANE",
"AIN MAKHLOUF",
"AIN BEN BEIDA",
"KHEZARA",
"BENI MEZLINE",
"BOU HACHANA",
"GUELAAT BOU SBAA",
"HAMMAM DEBAGH",
"EL FEDJOUDJ",
"BORDJ SABATH",
"HAMMAM N’BAIL",
"AIN LARBI",
"MEDJEZ AMAR",
"BOUCHEGOUF",
"HELIOPOLIS",
"HOUARI BOUMEDIENNE",
"ROKNIA",
"SELLAOUA ANNOUNA",
"MEDJEZ SFA",
"BOUMAHRA AHMED",
"AIN REGGADA",
"OUED CHEHAM",
"DJEBALLAH KHEMISSI")
 code_com[25] = new Array
("choisir une commune",
"CONSTANTINE",
"HAMMA BOUZIANE",
"BEN BADIS",
"ZIGHOUD YOUCEF",
"DIDOUCHE MOURAD",
"EL KHROUB",
"AIN ABID",
"BENI HAMIDANE",
"OULED RAHMOUN",
"AIN SMARA",
"MESSAOUD BOUDJERIOU",
"IBN ZIAD")
 code_com[26] = new Array
("choisir une commune",
"MEDEA",
"OUZERA",
"OULED MAAREF",
"AIN BOUCIF",
"AISSAOUIA",
"OULED DEID",
"EL OMARIA",
"DERRAG",
"EL GUELBELKEBIR",
"BOUAICHE",
"MEZERANA",
"OULED BRAHIM",
"TIZI MAHDI",
"SIDI ZIANE",
"TAMESGUIDA",
"EL HAMDANIA",
"KEF LAKHDAR",
"CHELALET EL ADHAOURA",
"BOUSKENE",
"REBAIA",
"BOUCHRAHIL",
"OULED HELLAL",
"TAFRAOUT",
"BAATA",
"BOGHAR",
"SIDI NAAMANE",
"OULED BOUACHRA",
"SIDI ZAHAR",
"OUED HARBIL",
"BEN CHICAO",
"SIDI DEMED",
"AZIZ",
"SOUAGUI",
"ZOUBIRIA",
"KSAR EL BOUKHARI",
"EL AZIZIA",
"DJOUAB",
"CHABOUNIA",
"MAGHRAOUA",
"CHENIGUEL",
"AIN OUKSIR",
"OUM EL DJELLIL",
"OUAMRI",
"SI MAHDJOUB",
"TLETAT ED DOUAIR",
"BENI SLIMANE",
"BERROUAGHIA",
"SEGHOUANE",
"M’FATHA",
"MIHOUB",
"BOUGHZOUL",
"TABLAT",
"DEUX BASSINS",
"DRAA ESSAMAR",
"SIDI RABIE",
"BIR BEN LAABED",
"EL OUINET",
"OULED ANTAR",
"BOUAICHOUNE",
"HANNACHA",
"SEDRAYA",
"MEDJEBAR",
"KHAMS DJOUAMAA",
"SANEG")
 code_com[27] = new Array
("choisir une commune",
"MOSTAGANEM",
"SAYADA",
"FORNAKA",
"STIDIA",
"AIN-NOUISSY",
"HASSI MAMECHE",
"AIN-TEDLES",
"SOUR",
"OUED EL KHEIR",
"SIDI BELAATTAR",
"KHEIR-EDDINE",
"SIDI ALI",
"BENABDELMALEK RAMDANE",
"HADJADJ",
"NEKMARIA",
"SIDI-LAKHDAR",
"ACHAACHA",
"KHADRA",
"BOUGUIRAT",
"SIRAT",
"AIN-SIDI CHERIF",
"MESRA",
"MANSOURAH",
"SOUAFLIA",
"OULED BOUGHALEM",
"OULED-MAALAH",
"MAZAGRAN",
"AIN-BOUDINAR",
"TAZGAIT",
"SAFSAF",
"TOUAHRIA",
"HASSIANE")
  code_com[28] = new Array
("choisir une commune",
"M’SILA",
"MAADID",
"HAMMAM DALAA",
"OULED DERRADJ",
"TARMOUNT",
"M’TARFA",
"KHOUBANA",
"M’CIF",
"CHELLAL",
"OULED MADHI",
"MAGRA",
"BERHOUM",
"AIN KHADRA",
"OULED ADDI GUEBALA",
"BELAIBA",
"SIDI AISSA",
"AIN EL HADJEL",
"SIDI HADJERES",
"OUANOUGHA",
"BOU SAADA",
"OULED SIDI BRAHIM",
"SIDI AMEUR",
"TAMSA",
"BEN SROUR",
"OULED SLIMANE",
"EL HOUAMED",
"EL HAMEL",
"OULED MANSOUR",
"MAARIF",
"DEHAHNA",
"BOUTI SAYEH",
"KHETTOUTI SED-EL-JIR",
"ZARZOUR",
"MOHAMED BOUDIAF",
"BENZOUH",
"BIR FODA",
"AIN FARES",
"SIDI M’HAMED",
"MENAA",
"SOUAMAA",
"AIN EL MELH",
"MEDJEDEL",
"SLIM",
"AIN RICH",
"BENI ILMANE",
"OULTEME",
"DJEBEL MESSAAD")
 code_com[29] = new Array
("choisir une commune",
"MASCARA",
"BOUHANIFIA",
"TIZI",
"HACINE",
"MAOUSSA",
"TIGHENNIF",
"EL HACHEM",
"SIDI KADA",
"ZELAMTA",
"OUED EL ABTAL",
"AIN FERAH",
"GHRISS",
"FROHA",
"MATEMORE",
"MAKHDA",
"SIDI BOUSSAID",
"EL BORDJ",
"AIN FEKAN",
"BENIAN",
"KHALOUIA",
"EL MENAOUER",
"OUED TARIA",
"AOUF",
"AIN FARES",
"AIN FRASS",
"SIG",
"OGGAZ",
"ALAIMIA",
"EL GAADA",
"ZAHANA",
"MOHAMMADIA",
"SIDI ABDELMOUMENE",
"FERRAGUIG",
"EL GHOMRI",
"SEDJERARA",
"MOCTA-DOUZ",
"BOU HENNI",
"EL GUEITENA",
"EL MAMOUNIA",
"EL KEURT",
"GHARROUS",
"GUERDJOUM",
"CHORFA",
"RAS EL AIN AMIROUCHE",
"NESMOT",
"SIDI ABDELDJEBAR",
"SEHAILIA")
 code_com[30] = new Array
("choisir une commune",
"OUARGLA",
"AIN BEIDA",
"N’GOUSSA",
"HASSI MESSAOUD",
"ROUISSAT",
"SIDI KHOUILED",
"HASSI BEN ABDELLAH",
"EL BORMA")
 code_com[31] = new Array
("choisir une commune",
"ORAN",
"GDYEL",
"BIR EL DJIR",
"HASSI BOUNIF",
"ES SENIA",
"ARZEW",
"BETHIOUA",
"MARSAT EL HADJADJ",
"AIN TURK",
"EL ANCAR",
"OUED TLELAT",
"TAFRAOUI",
"SIDI CHAMI",
"BOUFATIS",
"MERS EL KEBIR",
"BOUSFER",
"EL KERMA",
"EL BRAYA",
"HASSI BEN OKBA",
"BEN FREHA",
"HASSI MEFSOUKH",
"SIDI BEN YEBKA",
"MESSERGHIN",
"BOUTLELIS",
"AIN KERMA",
"AIN BIYA")
 code_com[32] = new Array
("choisir une commune",
"EL BAYADH",
"ROGASSA",
"STITTEN",
"BREZINA",
"GHASSOUL",
"BOUALEM",
"EL BIODH SIDI CHEIKH",
"AIN EL ORAK",
"ARBAOUAT",
"BOUGTOUB",
"EL KHEITHER",
"KEF EL AHMAR",
"BOUSSEMGHOUN",
"CHELLALA",
"KRAKDA",
"EL BNOUD",
"CHEGUIG",
"SIDI AMAR",
"EL MEHARA",
"TOUSMOULINE",
"SIDI SLIMANE",
"SIDI TIFFOUR")
 code_com[33] = new Array
("choisir une commune",
"ILLIZI",
"DEBDEB",
"BORDJ OMAR DRISS",
"IN AMENAS")
 code_com[34] = new Array
("choisir une commune",
"B. B. ARRERIDJ",
"RAS EL OUED",
"BORDJ ZEMOURA",
"MANSOURA",
"EL M’HIR",
"BEN DAOUD",
"EL ACHIR",
"AIN TAGHROUT",
"BORDJ GHEDIR",
"SIDI-EMBAREK",
"EL HAMADIA",
"BELIMOUR",
"MEDJANA",
"TENIET EN NASR",
"DJAAFRA",
"EL MAIN",
"OULED BRAHEM",
"OULED DAHMANE",
"HASNAOUA",
"KHELIL",
"TAGLAIT",
"KSOUR",
"OULED SIDI-BRAHIM",
"TAFREG",
"COLLA",
"TIXTER",
"EL ACH",
"EL ANNASSEUR",
"TASSAMERT",
"AIN TASERA",
"BIR KASDALI",
"GHAILASA",
"RABTA",
"HARAZA")
 code_com[35] = new Array
("choisir une commune",
"BOUMERDES",
"BOUDOUAOU",
"AFIR",
"BORDJ MENAIEL",
"BAGHLIA",
"SIDI DAOUD",
"NACIRIA",
"DJINET",
"ISSER",
"ZEMMOURI",
"SI MUSTAPHA",
"TIDJELABINE",
"CHABET EL AMEUR",
"THENIA",
"TIMEZRIT",
"CORSO",
"OULED MOUSSA",
"LARBATACHE",
"BOUZEGZA KEDDARA",
"TAOURGA",
"OULED AISSA",
"BEN CHOUD",
"DELLYS",
"AMMAL",
"BENI AMRANE",
"SOUK EL HAAD",
"BOUDOUAOU EL BAHRI",
"OULED HEDADJ",
"LEGHATA",
"HAMMEDI",
"KHEMIS EL KHECHNA",
"EL KHARROUBA")
 code_com[36] = new Array
("choisir une commune",
"EL TARF",
"BOUHADJAR",
"BEN M HIDI",
"BOUGOUS",
"EL KALA",
"AIN EL ASSEL",
"EL AIOUN",
"BOUTELDJA",
"SOUAREKH",
"BERRIHANE",
"LAC DES OISEAUX",
"CHEFIA",
"DREAN",
"CHIHANI",
"CHEBAITA MOKHTAR",
"BESBES",
"ASFOUR",
"ECHATT",
"ZERIZER",
"ZITOUNA",
"AIN KERMA",
"OUED ZITOUN",
"HAMMAM BENI SALAH",
"RAML SOUK")
 code_com[37] = new Array
("choisir une commune",
"TINDOUF",
"OUM EL ASSEL")
 code_com[38] = new Array
("choisir une commune",
"TISSEMSILT",
"BORDJ BOUNAAMA",
"THENIET EL HAD",
"LAZHARIA",
"BENI CHAIB",
"LARDJEM",
"MELAAB",
"SIDI LANTRI",
"BORDJ EL EMIR ABDELKADER",
"LAYOUNE",
"KHEMISTI",
"OULED BESSEM",
"AMMARI",
"YOUSSOUFIA",
"SIDI BOUTOUCHENT",
"LARBAA",
"MAACEM",
"SIDI ABED",
"TAMELLAHET",
"SIDI SLIMANE",
"BOUCAID",
"BENI LAHCENE")
 code_com[39] = new Array
("choisir une commune",
"EL-OUED",
"ROBBAH",
"OUED EL ALENDA",
"BAYADHA",
"NAKHLA",
"GUEMAR",
"KOUININE",
"REGUIBA",
"HAMRAIA",
"TAGHZOUT",
"DEBILA",
"HASSANI ABDELKRIM",
"HASSI KHALIFA",
"TALEB LARBI",
"DOUAR EL MAA",
"SIDI AOUN",
"TRIFAOUI",
"MAGRANE",
"BEN GUECHA",
"OURMES",
"EL OGLA",
"MIH OUANSA")
 code_com[40] = new Array
("choisir une commune",
"KHENCHELA",
"M’TOUSSA",
"KAIS",
"BAGHAI",
"EL HAMMA",
"AIN TOUILA",
"TAOUZIANAT",
"BOUHMAMA",
"EL OUELDJA",
"REMILA",
"CHECHAR",
"DJELLAL",
"BABAR",
"TAMZA",
"ENSIGHA",
"OULED RECHACHE",
"EL MAHMAL",
"M’SARA",
"YABOUS",
"KHIRANE",
"CHELIA")
 code_com[41] = new Array
("choisir une commune",
"SOUK AHRAS",
"SEDRATA",
"HANENCHA",
"MACHROHA",
"OULED DRISS",
"TIFFECH",
"ZAAROURIA",
"TAOURA",
"DREA",
"HADDADA",
"KHEDARA",
"MERAHNA",
"OULED MOUMEN",
"BIR BOUHOUCHE",
"M’DAOUROUCHE",
"OUM EL ADHAIM",
"AIN ZANA",
"AIN SOLTANE",
"QUILLEN",
"SIDI FREDJ",
"SAFEL EL OUIDEN",
"RAGOUBA",
"KHEMISSA",
"OUED KEBRIT",
"TERRAGUELT",
"ZOUABI")
 code_com[42] = new Array
("choisir une commune",
"TIPAZA",
"MENACEUR",
"LARHAT",
"DOUAOUDA",
"BOURKIKA",
"KHEMISTI",
"AGHBAL",
"HADJOUT",
"SIDI-AMAR",
"GOURAYA",
"NADOR",
"CHAIBA",
"AIN TAGOURAIT",
"CHERCHELL",
"DAMOUS",
"MERAD",
"FOUKA",
"BOU ISMAIL",
"AHMER EL AIN",
"BOU HAROUN",
"SIDI GHILES",
"MESSELMOUN",
"SIDI RACHED",
"KOLEA",
"ATTATBA",
"SIDI SEMIANE",
"BENI MILEUK",
"HADJRET ENNOUS")
 code_com[43] = new Array
("choisir une commune",
"MILA",
"FERDJIOUA",
"CHELGHOUM LAID",
"OUED ATHMENIA",
"AIN MELLOUK",
"TELEGHMA",
"OUED SEGUEN",
"TADJENANET",
"BENYAHIA ABDERRAHMANE",
"OUED ENDJA",
"AHMED RACHEDI",
"OULED KHALOUF",
"TIBERGUENT",
"BOUHATEM",
"ROUACHED",
"TESSALA",
"GRAREM GOUGA",
"SIDI MEROUANE",
"TASSADANE HADDADA",
"DERRAHI BOUSSELAH",
"MINAR ZARZA",
"AMIRA ARRES",
"TERRAI BAINEM",
"HAMALA",
"AIN TINE",
"EL MECHIRA",
"SIDI KHELIFA",
"ZEGHAIA",
"ELAYADI BARBES",
"AIN BEIDA HARRICHE",
"YAHIA BENIGUECHA",
"CHIGARA")
 code_com[44] = new Array
("choisir une commune",
"AIN-DEFLA",
"MILIANA",
"BOUMEDFAA",
"KHEMIS-MILIANA",
"HAMMAM-RIGHA",
"ARIB",
"DJELIDA",
"EL-AMRA",
"BOURACHED",
"EL-ATTAF",
"EL-ABADIA",
"DJENDEL",
"OUED CHORFA",
"AIN-LECHIAKH",
"OUED DJEMAA",
"ROUINA",
"ZEDDINE",
"HASSANIA",
"BIR-OULD-KHELIFA",
"AIN-SOLTANE",
"TARIK-IBN-ZIAD",
"BORDJ-EMIR-KHALED",
"AIN TORKI",
"SIDI-LAKHDAR",
"BEN ALLAL",
"AIN-BENIAN",
"HOCEINIA",
"BIRBOUCHE",
"DJEMAA OULED CHEIKH",
"MEKHATRIA",
"BATHIA",
"TACHETA ZEGAGHA",
"AIN-BOUYAHIA",
"EL-MAINE",
"TIBERKANINE",
"BELAAS")
 code_com[45] = new Array
("choisir une commune",
"NAAMA",
"MECHERIA",
"AIN SAFRA",
"TIOUT",
"SFISSIFA",
"MOGHRAR",
"ASSELA",
"DJENIANE BOURZEG",
"AIN BEN KHELIL",
"MAKMAN BEN AMER",
"KASDIR",
"EL BIOD")
 code_com[46] = new Array
("choisir une commune",
"AIN TEMOUCHENT",
"CHAABAT EL HAM",
"AIN KIHAL",
"HAMMAM BOUHADJAR",
"BOUZEDJAR",
"OUED BERKECHE",
"AGHLAL",
"TERGA",
"AIN EL ARBAA",
"TAMZOURA",
"CHENTOUF",
"SIDI BEN ADDA",
"AOUBELLIL",
"EL MALAH",
"SIDI BOUMEDIENE",
"OUED SEBBAH",
"OULED BOUDJEMAA",
"AIN TOLBA",
"EL AMRIA",
"HASSI EL GHELLA",
"HASSASNA",
"OULED KIHAL",
"BENI SAF",
"SIDI SAFI",
"OULHACA EL GHERABA",
"SIDI OURIACHE",
"EMIR ABDELKADER",
"EL MESSAID")
 code_com[47] = new Array
("choisir une commune",
"GHARDAIA",
"DHAYET BENDHAHOUA",
"BERRIANE",
"METLILI",
"EL GUERRARA",
"EL ATTEUF",
"ZELFANA",
"SEBSEB",
"MANSOURA",
"BOUNOURA")
 code_com[48] = new Array
("choisir une commune",
"RELIZANE",
"OUED-RHIOU",
"BELAASSEL BOUZAGZA",
"SIDI SAADA",
"OULED AICHE",
"SIDI LAZREG",
"EL H’MADNA",
"SIDI M’HAMED BENALI",
"MEDIOUNA",
"SIDI KHETTAB",
"AMMI MOUSSA",
"ZEMMOURA",
"BENI DERGOUN",
"DJIDIOUIA",
"EL-GUETTAR",
"HAMRI",
"EL-MATMAR",
"SIDI M’HAMED BENAOUDA",
"AIN-TAREK",
"OUED ESSALEM",
"OUARIZANE",
"MAZOUNA",
"KALAA",
"AIN RAHMA",
"YELLEL",
"OUED EL DJEMAA",
"RAMKA",
"MENDES",
"LAHLEF",
"BENI ZENTIS",
"SOUK EL HAD",
"DAR BEN ABDELAH",
"EL HASSI",
"HAD ECHKALLA",
"BENDAOUD",
"EL OULDJA",
"MERDJA SIDI ABED",
"OULED SIDI MIHOUB")
 code_com[49] = new Array
("choisir une commune",
"TIMIMOUN",
"OULED SAID",
"AOUGROUT",
"DELDOUL",
"METARFA",
"TINERKOUK",
"KSAR KADDOUR",
"CHAROUINE",
"TALMINE",
"OULED AISSA")
 code_com[50] = new Array
("choisir une commune",
"BORDJ BADJI MOKHTAR",
"TIMIAOUINE")
 code_com[51] = new Array
("choisir une commune",
"SIDI KHALED",
"RAS EL MIAD",
"BESBES",
"OULED DJELLAL",
"CHAIBA",
"DOUCEN")
 code_com[52] = new Array
("choisir une commune",
"BENI ABBES",
"TAMTERT",
"KERZAZ",
"TIMOUDI",
"BENI IKHLEF",
"EL OUATA",
"TABELBALA",
"OULED KHOUDIR",
"KSABI",
"IGLI")
 code_com[53] = new Array
("choisir une commune",
"IN SALAH",
"FOGGARET AZZAOUIA",
"IN GHAR")
 code_com[54] = new Array
("choisir une commune",
"IN GUEZZAM",
"TIN ZOUATINE")
 code_com[55] = new Array
("choisir une commune",
"TOUGGOURT",
"NEZLA",
"TEBESBEST",
"ZAOUIA EL ABIDIA",
"TEMACINE",
"BLIDET AMOR",
"MEGARINE",
"SIDI SLIMANE",
"TAIBET",
"M’NAGUEUR",
"EL-HADJIRA",
"EL ALIA",
"BENACEUR")
 code_com[56] = new Array
("choisir une commune",
"DJANET",
"BORDJ EL HAOUASS")
 code_com[57] = new Array
("choisir une commune",
"EL-M’GHAIER",
"SIDI KHELIL",
"OUM TOUYOUR",
"STILL",
"DJAMAA",
"SIDI AMRANE",
"TENEDLA",
"M’RARA")
 code_com[58] = new Array
("choisir une commune",
"EL MENIAA",
"HASSI GARA",
"HASSI FEHAL")



        function remplirVilles(code)
        {
            $('#dairas').empty();
            $('#communes').empty();
            
            var lesVilles = villes[code];
            var lesComs = code_com[code];            

            for (i=0; i<lesVilles.length; i++){
                // console.log(les_codeCom[i],lesVilles[i])
                $('<option/>').val(lesVilles[i]).text(lesVilles[i]).appendTo('#dairas')
                $('<option/>').val(lesComs[i]).text(lesComs[i]).appendTo('#communes')
            }

        }


    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
    </script>


    <





    <script src="{{asset('cirm2/plugins/highlight/highlight.pack.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>