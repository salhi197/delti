
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Requetes - Identification du Projet</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('cirm/admin/invest/assets/img/logo-sm.png')); ?>" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('cirm/admin/invest/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('cirm/admin/invest/assets/css/plugins.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="<?php echo e(asset('css/toastr.css')); ?>" rel="stylesheet"/>

    <link href="<?php echo e(asset('cirm/admin/invest/assets/css/scrollspyNav.css')); ?>" rel="stylesheet" type="text/css" />
</head>

<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">

    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="form_layouts.html"><img alt="logo" src="<?php echo e(asset('cirm/admin/invest/assets/img/logo-sm.png')); ?>"> <span class="navbar-brand-name">Wassit</span></a>
            </div>
            <ul class="navbar-item flex-row mr-auto">
                <li class="nav-item align-self-center search-animated">
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Rechercher...">
                        </div>
                    </form>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </li>
            </ul>

            <ul class="navbar-item flex-row nav-dropdowns">
                <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo e(asset('cirm/admin/invest/assets/img/flag-fr.svg')); ?> " class="flag-width" alt="flag"><span>Français</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-body align-self-center">
                                <h6>Wassit</h6>
                            </div>
                            <img src="<?php echo e(asset('cirm/admin/invest/assets/img/logo-sm.png')); ?>" class="img-fluid" alt="admin-profile">
                            <span class="badge badge-success"></span>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">

                        </div>
                        <div class="dropdown-item">
                            <a href="auth_login.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>                                <span>Déconnexion</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
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
                            <form action="<?php echo e(route('investissement.create')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
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
                                        <option value="">Arreté de concession</option>
                                        <option value="">Act de concession</option>
                                        <option value="">Act de propriété</option>
                                        <option value="">Location</option>
                                        <option value="">Occupation sans titre</option>
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
                                        <input type="number" class="form-control" id="inputname" placeholder="">
                                    </div>
                                    <div class="form-row mb-4">
                                        <label for="inputEmail4">Contraintes rencontrées</label>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>

                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label>Pièce jointe <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"></a></label>
                                        <label class="custom-file-container__custom-file">
                                            <input type="file" name="piece" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
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
    <script src="<?php echo e(asset('cirm/admin/invest/assets/js/libs/jquery-3.1.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/invest/bootstrap/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/invest/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/invest/plugins/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/invest/assets/js/app.js')); ?>"></script>

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
    <script src="<?php echo e(asset('cirm/admin/invest/plugins/highlight/highlight.pack.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/invest/assets/js/custom.js')); ?>"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>	
    <script>
        <?php if(session('error')): ?>
        	$(function(){
                toastr.error('<?php echo e(Session::get("error")); ?>')
            })

        <?php endif; ?>
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(Session::get("success")); ?>')
        <?php endif; ?>
            

    </script>

    <script>

    </script>
</body>

</html>