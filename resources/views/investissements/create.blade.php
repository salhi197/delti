
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Requetes - Identification du Projet</title>
    <link rel="icon" type="image/x-icon" href="{{asset('cirm/admin/invest/assets/img/logo-sm.png')}}" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('cirm/admin/invest/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('cirm/admin/invest/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="{{asset('css/toastr.css')}}" rel="stylesheet"/>

    <link href="{{asset('cirm/admin/invest/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
</head>

<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">

    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        @include('includes.modals.header')
    </div>
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>


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
                                    <h6>> Identification du Projet</h6>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{route('investissement.create')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="inputState">Status juridique</label>
                                    <select  class="form-control" name="status_juridique">
                                        <option >Choisir</option>
                                        <option value="Personne physique">Personne physique</option>
                                        <option value="EURL">EURL</option>
                                        <option value="SARL">SARL</option>
                                        <option value="SPA">SPA</option>
                                        <option value="SNC">SNC</option>
                                    </select>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Nom</label>
                                        <input type="text" name="nom" class="form-control" id="inputname" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" >Prénom</label>
                                        <input type="text" name="prenom" class="form-control" id="inputname" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Téléphone</label>
                                        <input type="text" name="telephone" class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="inputState">Secteur</label>
                                    <select name="secteur"  class="form-control">
                                        <option value="" >Choisir</option>
                                        <option value="Agriculture">Agriculture</option>
                                        <option value="Industrie">Industrie</option>
                                        <option value="Services">Services</option>
                                    </select>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Wilaya</label>
                                        <input type="text" name="wilaya" class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Daira</label>
                                        <input type="text" name="daira" class="form-control" id="inputname" placeholder="">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputPassword4">Commune</label>
                                        <input type="text" name="commune" class="form-control" id="inputname" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="inputState">Implimentation</label>
                                    <select  name="implimentation" class="form-control">
                                        <option >Choisir</option>
                                        <option>Zone Industrielle</option>
                                        <option>Zone d'Activité</option>
                                        <option>Terrain agricole</option>
                                        <option>Hors zones</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="inputState">Statut du foncier</label>
                                    <select  name="status_foncier" class="form-control">
                                        <option >Choisir</option>
                                        <option value="Arreté de concession">Arreté de concession</option>
                                        <option value="Act de concession">Act de concession</option>
                                        <option value="Act de propriété">Act de propriété</option>
                                        <option value="Location">Location</option>
                                        <option value="Occupation sans titre">Occupation sans titre</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="inputState">Etat actuel de projet</label>
                                    <select name="etat_actuel" id="etat_actuel"  class="form-control">
                                        <option  >Choisir</option>
                                        <option value="fiche1">Achevé (Fiche-01)</option>
                                        <option value="fiche2">En voie de réalisation (Fiche-02)</option>
                                        <option value="fiche3">En voie de Lancement (Fiche-03)</option>
                                    </select>
                                </div>
                                <br>
                                <h6> 
                                    Projet achevé 
                                    <span id="fichetext"></span>
                                </h6>
                                <br>
                                <div class="container" id="fiche1">
                                    <div class="form-row mb-4" >
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Projet en exploitation</label>
                                            <select name="exploition"  class="form-control">
                                                <option >Choisir</option>
                                                <option>Oui</option>
                                                <option>Non</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" name="date_exploition" class="form-control" id="inputname" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Permis de construire</label>
                                            <select  name="premis_construction" class="form-control">
                                                <option >Choisir</option>
                                                <option>Oui</option>
                                                <option>Non</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" class="form-control" name="date_premis_construction" id="inputname" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Arrêté de création</label>
                                            <select name="arret_creation" class="form-control">
                                                <option >Choisir</option>
                                                <option>Oui</option>
                                                <option>Non</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" name="date_arret_creation" class="form-control" id="inputname" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Approbation de l’étude de danger</label>
                                            <select name="approbation" class="form-control">
                                                <option >Choisir</option>
                                                <option>Oui</option>
                                                <option>Non</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" class="form-control" name="date_approbation" id="inputname" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Arrêté d’exploitation</label>
                                            <select  name="exploition" class="form-control">
                                                <option >Choisir</option>
                                                <option>Oui</option>
                                                <option>Non</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" name="date_exploition" class="form-control" id="inputname" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Certificat de conformité</label>
                                            <select name="certificat_conformite"  class="form-control">
                                                <option >Choisir</option>
                                                <option>Oui</option>
                                                <option>Non</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label>
                                            <input name="date_certificat_conformite" type="Date" class="form-control" id="inputname" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Arrêté de régularisation (loi 08-15)</label>
                                            <select  class="form-control" name="regularisation">
                                                <option >Choisir</option>
                                                <option>Oui</option>
                                                <option>Non</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" class="form-control" id="inputname" name="date_regularisation" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Autorisation exceptionnelle</label>
                                            <select  class="form-control" name="autorisation_exceptionnelle">
                                                <option >Choisir</option>
                                                <option>Oui</option>
                                                <option>Non</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" class="form-control" id="inputname" name="date_autorisation_exceptionnelle" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Raccordement aux réseaux divers : (électricité, gaz, eau, assainissement,téléphone et internet)
                                                </label>
                                            <select  name="raccordement_aux_reseaux_divers" class="form-control">
                                                <option >Choisir</option>
                                                <option>Oui</option>
                                                <option>Non</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label>
                                            <br><br>
                                            <input type="Date" name="date_raccordement_aux_reseaux_divers" class="form-control" id="inputname" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <label for="inputEmail4">Contraintes rencontrées</label>
                                        <textarea name="contraintes" class="form-control" aria-label="With textarea"></textarea>
                                    </div>


                                </div>

                                <div class="container" id="fiche2">
                                    <div class="form-row mb-4" >
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Permis de construction</label>
                                            <select  class="form-control">
                                                <option >Choisir</option>
                                                <option>Oui</option>
                                                <option>Non</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" class="form-control" id="inputname" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Arrêté de création</label>
                                            <select  class="form-control">
                                                <option >Choisir</option>
                                                <option>Oui</option>
                                                <option>Non</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" class="form-control" id="inputname" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <label for="inputEmail4">Taux de réalisation</label>
                                        <input type="number" name="taux_realisation" class="form-control" id="inputname" placeholder="">
                                    </div>
                                    <div class="form-row mb-4">
                                        <label for="inputEmail4">Contraintes rencontrées</label>
                                        <textarea class="form-control" name="contraintes" aria-label="With textarea"></textarea>
                                    </div>

                                </div>



                                <div class="container" id="fiche3">
                                    <div class="form-row mb-4" >
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Permis de construction</label>
                                            <select  class="form-control">
                                                <option >Choisir</option>
                                                <option>Oui</option>
                                                <option>Non</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" class="form-control" id="inputname" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Arrêté de création</label>
                                            <select  class="form-control">
                                                <option value="c">Choisir</option>
                                                <option value="o">Oui</option>
                                                <option value="n">Non</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" class="form-control" id="inputname" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <label for="inputEmail4">Taux de réalisation</label>
                                        <input type="number" class="form-control" id="inputname" placeholder="">
                                    </div>
                                    <div class="form-row mb-4">
                                        <label for="inputEmail4">Contraintes rencontrées</label>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>

                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label>Pièce jointe <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"></a></label>
                                        <label class="custom-file-container__custom-file">
                                            <input type="file" name="piece" class="custom-file-container__custom-file__custom-file-input" >
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>


                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
                            </form>


                            <div class="code-section-container">


                                <div class="code-section text-left">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2023<a target="_blank" href=""> Wassit.dz</p>
                </div>
                <div class="footer-section f-section-2">
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('cirm/admin/invest/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('cirm/admin/invest/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('cirm/admin/invest/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('cirm/admin/invest/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('cirm/admin/invest/assets/js/app.js')}}"></script>

    <script>
        // $(document).ready(function() {
        //             $('#fiche3').hide()
        //             $('#fiche1').hide()
        //             $('#fiche2').hide()

        //     $('#etat_actuel').on('change',function(){
        //         var value = this.value;
        //         console.log(value)
        //         if(value=="fiche1"){
        //             $('#fichetext').html('fiche-01')
        //             $('#fiche3').hide()
        //             $('#fiche1').show()
        //             $('#fiche2').hide()
        //         }
        //         if(value=="fiche2"){
        //             $('#fichetext').html('fiche-02')
        //             $('#fiche3').hide()
        //             $('#fiche2').show()
        //             $('#fiche1').hide()
        //         }
        //         if(value=="fiche3"){
        //             $('#fichetext').html('fiche-03')
        //             $('#fiche2').hide()
        //             $('#fiche3').show()
        //             $('#fiche1').hide()
        //         }
        //     })
        // });
    </script>
    <script src="{{asset('cirm/admin/invest/plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{asset('cirm/admin/invest/assets/js/custom.js')}}"></script>
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

    </script>
</body>

</html>