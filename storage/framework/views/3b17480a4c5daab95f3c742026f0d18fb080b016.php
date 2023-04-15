
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta value="<?php echo e($investissement->viewport ?? ''); ?>" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Requetes - Identification du Projet</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('cirm2/assets/img/logo-sm.png')); ?>" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('cirm2/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo e(asset('cirm2/assets/css/plugins.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/toastr.css')); ?>" rel="stylesheet"/>

    <!-- END GLOBAL MANDATORY STYLES -->
</head>

<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">

    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <?php echo $__env->make('includes.modals.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                                    <p>Identification du Projet</p>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="<?php echo e(route('investissement.repondre',['investissement'=>$investissement->id])); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>

                                <div class="form-row mb-3">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Raison social</label>
                                        <input  type="text" value="<?php echo e($investissement->raison_social ?? ''); ?>" name="raison_social" class="form-control" id="inputname" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Status juridique</label>
                                        <select id="inputState" value="<?php echo e($investissement->status_juridique ?? ''); ?>" name="status_juridique" class="form-control">
                                            <option >Choisir</option>
                                            <option <?php if($investissement->status_juridique=="Personne physique"): ?> selected <?php endif; ?> value="Personne physique">Personne physique</option>
                                            <option <?php if($investissement->status_juridique=="EURL"): ?> selected <?php endif; ?> value="EURL">EURL</option>
                                            <option <?php if($investissement->status_juridique=="SARL"): ?> selected <?php endif; ?> value="SARL">SARL</option>
                                            <option <?php if($investissement->status_juridique=="SPA"): ?> selected <?php endif; ?> value="SPA">SPA</option>
                                            <option <?php if($investissement->status_juridique=="SNC"): ?> selected <?php endif; ?> value="SNC">SNC</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Nom du Gérant</label>
                                        <input  type="text" value="<?php echo e($investissement->nom_gerant ?? ''); ?>" name="nom_gerant" class="form-control" id="inputname" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Prénom du Gérant</label>
                                        <input  type="text" value="<?php echo e($investissement->prenom_gerant ?? ''); ?>" name="prenom_gerant" class="form-control" id="inputname" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Tél</label>
                                        <input value="<?php echo e($investissement->telephone ?? ''); ?>" name="telephone"  type="phone" class="form-control" id="inputEmail4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Fax</label>
                                        <input value="<?php echo e($investissement->fax ?? ''); ?>" name="fax" type="text"  class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Mobile</label>
                                        <input value="<?php echo e($investissement->mobile ?? ''); ?>" name="mobile" type="text"  class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">E-mail</label>
                                        <input value="<?php echo e($investissement->email ?? ''); ?>" name="email"  type="email"  class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Secteur</label>
                                        <select id="inputState" value="<?php echo e($investissement->secteur ?? ''); ?>" name="secteur" class="form-control">
                                            <option >Choisir</option>
                                            <option <?php if($investissement->secteur=="Agriculture"): ?> selected <?php endif; ?> value="Agriculture">Agriculture</option>
                                            <option <?php if($investissement->secteur=="Industrie"): ?> selected <?php endif; ?> value="Industrie">Industrie</option>
                                            <option <?php if($investissement->secteur=="Services"): ?> selected <?php endif; ?> value="Services">Services</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Wilaya</label>
                                        <select value="<?php echo e($investissement->wilaya ?? ''); ?>" name="wilaya" class="form-control" id="wilaya_select" class="form-control">
                                            <?php $__currentLoopData = $wilayas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($wilaya->id); ?>" <?php if($investissement->wilaya==$wilaya->id): ?> selected <?php endif; ?> >
                                                    <?php echo e($wilaya->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        <select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Daira</label>
                                        <input type="text" value="<?php echo e($investissement->daira ?? ''); ?>" name="daira" class="form-control" id="inputname" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Commune</label>
                                        <input type="text" value="<?php echo e($investissement->commune ?? ''); ?>" name="commune" class="form-control" id="inputname" placeholder="">
                                    </div>

                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Activité</label>
                                        <input value="<?php echo e($investissement->activite ?? ''); ?>" name="activite" type="text" class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Implimentation</label>
                                        <select id="inputState" value="<?php echo e($investissement->implimentation ?? ''); ?>" name="implimentation" class="form-control">
                                            <option >Choisir</option>
                                            <option <?php if($investissement->implimentation=="Zone Industrielle"): ?> selected <?php endif; ?> value="Zone Industrielle">- Zone Industrielle</option>
                                            <option <?php if($investissement->implimentation=="Zone d'Activité"): ?> selected <?php endif; ?> value="Zone d'Activité">- Zone d'Activité</option>
                                            <option <?php if($investissement->implimentation=="Terrain agricole"): ?> selected <?php endif; ?> value="Terrain agricole">- Terrain agricole</option>
                                            <option <?php if($investissement->implimentation=="Hors zones"): ?> selected <?php endif; ?> value="Hors zones">- Hors zones</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Superficé (M<sup>2</sup>)</label>
                                        <input value="<?php echo e($investissement->Superficie ?? ''); ?>" name="Superficie" name type="text" class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Statut du foncier</label>
                                        <select id="inputState" value="<?php echo e($investissement->statut_du_foncier ?? ''); ?>" name="statut_du_foncier" class="form-control">
                                            <option >Choisir</option>
                                            <option <?php if($investissement->statut_du_foncier=="Arreté de concession"): ?> selected <?php endif; ?> value="Arreté de concession">- Arreté de concession</option>
                                            <option <?php if($investissement->statut_du_foncier=="Act de concession"): ?> selected <?php endif; ?> value="Act de concession">- Act de concession</option>
                                            <option <?php if($investissement->statut_du_foncier=="Act de propriété"): ?> selected <?php endif; ?> value="Act de propriété">- Act de propriété</option>
                                            <option <?php if($investissement->statut_du_foncier=="Location"): ?> selected <?php endif; ?> value="Location">- Location</option>
                                            <option <?php if($investissement->statut_du_foncier=="Occupation sans titre"): ?> selected <?php endif; ?> value="Occupation sans titre">- Occupation sans titre</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3" id="etat">
                                        <label for="inputState">Etat actuel de projet</label>
                                        <select value="<?php echo e($investissement->etat_projet ?? ''); ?>" name="etat_projet" id="etat_projet" class="form-control">
                                            <option >Choisir</option>
                                            <option value="fiche1" <?php if($investissement->etat_projet == "fiche1"): ?> selected <?php endif; ?>>Achevé (Fiche-01)</option>
                                            <option value="fiche2" <?php if($investissement->etat_projet == "fiche2"): ?> selected <?php endif; ?>>En voie de réalisation (Fiche-02)</option>
                                            <option value="fiche3" <?php if($investissement->etat_projet == "fiche3"): ?> selected <?php endif; ?>>En voie de Lancement (Fiche-03)</option>
                                        </select>
                                    </div>
                                </div>
                                <?php if($investissement->etat_projet == "fiche1"): ?>
                                <div class="container-fluid" id="fiche1">
                                    <h6> Projet achevé (Fiche-01)</h6>
                                    <br>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Projet en exploitation</label>
                                            <select value="<?php echo e($investissement->projet_exploitation ?? ''); ?>" name="projet_exploitation" id="projet_exploitation" onchange="changeDropdown1(this.value)" class="form-control">
                                                    <option <?php if($investissement->projet_exploitation == "c"): ?> selected <?php endif; ?> value="c" >Choisir</option>
                                                    <option <?php if($investissement->projet_exploitation == "o"): ?> selected <?php endif; ?> value="o">Oui</option>
                                                    <option <?php if($investissement->projet_exploitation == "n"): ?> selected <?php endif; ?> value="n">Non</option>
                                                </select>
                                        </div>
                                        <script>
                                            
                                        </script>
                                        <div id="date_projetexploitation" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="date" value="<?php echo e($investissement->date_projet_exploitation ?? ''); ?>" name="date_projet_exploitation" class="form-control"  placeholder="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Permis de construire</label>
                                            <select value="<?php echo e($investissement->permis_construction ?? ''); ?>" name="permis_construction" class="form-control" id="permis_construction" onchange="changeDropdown1(this.value)" class="form-control">
                                                    <option <?php if($investissement->permis_construction == "c"): ?> selected <?php endif; ?> value="c">Choisir</option>
                                                    <option <?php if($investissement->permis_construction == "o"): ?> selected <?php endif; ?> value="o">Oui</option>
                                                    <option <?php if($investissement->permis_construction == "n"): ?> selected <?php endif; ?> value="n">Non</option>
                                                </select>
                                        </div>

                                        
                                        
                                        <div id="date_permisconstruction" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" value="<?php echo e($investissement->date_permis_construction ?? ''); ?>" name="date_permis_construction" class="form-control"  placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Arrêté de création</label>
                                            <select value="<?php echo e($investissement->arret_creation ?? ''); ?>" name="arret_creation" id="arret_creation"  class="form-control">
                                                    <option <?php if($investissement->arret_creation == "c"): ?> selected <?php endif; ?> value="c" >Choisir</option>
                                                    <option <?php if($investissement->arret_creation == "o"): ?> selected <?php endif; ?> value="o">Oui</option>
                                                    <option <?php if($investissement->arret_creation == "n"): ?> selected <?php endif; ?> value="n">Non</option>
                                                </select>
                                        </div>
                                        <div id="date_arretcreation" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" value="<?php echo e($investissement->date_arret_creation ?? ''); ?>" name="date_arret_creation" class="form-control"  placeholder="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Approbation de l’étude de danger</label>
                                            <select value="<?php echo e($investissement->approbation ?? ''); ?>" name="approbation" class="form-control" id="approbation" onchange="changeDropdown3(this.value)" class="form-control">
                                                    <option <?php if($investissement->approbation == "c"): ?> selected <?php endif; ?> value="c">Choisir</option>
                                                    <option <?php if($investissement->approbation == "o"): ?> selected <?php endif; ?> value="o">Oui</option>
                                                    <option <?php if($investissement->approbation == "n"): ?> selected <?php endif; ?> value="n">Non</option>
                                                </select>
                                        </div>
                                        <div id="date_approbation" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" value="<?php echo e($investissement->date_approbation ?? ''); ?>" name="date_approbation" class="form-control"  placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Arrêté d’exploitation</label>
                                            <select value="<?php echo e($investissement->arret_exploitation ?? ''); ?>" name="arret_exploitation" id="arret_exploitation" onchange="changeDropdown4(this.value)" class="form-control">
                                                    <option <?php if($investissement->arret_exploitation == "c"): ?> selected <?php endif; ?> value="c" >Choisir</option>
                                                    <option <?php if($investissement->arret_exploitation == "o"): ?> selected <?php endif; ?> value="o">Oui</option>
                                                    <option <?php if($investissement->arret_exploitation == "n"): ?> selected <?php endif; ?> value="n">Non</option>
                                                </select>
                                        </div>
                                        <div id="date_arretexploitation" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" class="form-control" value="<?php echo e($investissement->adte_arret_exploitation ?? ''); ?>" name="adte_arret_exploitation"  placeholder="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Certificat de conformité</label>
                                            <select value="<?php echo e($investissement->certficat ?? ''); ?>" name="certficat" class="form-control" id="certficat" onchange="changeDropdown5(this.value)" class="form-control">
                                                    <option <?php if($investissement->certficat == "c"): ?> selected <?php endif; ?> value="c">Choisir</option>
                                                    <option <?php if($investissement->certficat == "o"): ?> selected <?php endif; ?> value="o">Oui</option>
                                                    <option <?php if($investissement->certficat == "n"): ?> selected <?php endif; ?> value="n">Non</option>
                                                </select>
                                        </div>
                                        <div id="date_certficat" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" value="<?php echo e($investissement->date_certficat ?? ''); ?>" name="date_certficat" class="form-control"  placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Arrêté de régularisation (loi 08-15)</label>
                                            <select value="<?php echo e($investissement->arreteregularisation ?? ''); ?>" name="arreteregularisation" id="arreteregularisation" onchange="changeDropdown6(this.value)" class="form-control">
                                                    <option <?php if($investissement->arreteregularisation == "c"): ?> selected <?php endif; ?> value="c" >Choisir</option>
                                                    <option <?php if($investissement->arreteregularisation == "o"): ?> selected <?php endif; ?> value="o">Oui</option>
                                                    <option <?php if($investissement->arreteregularisation == "n"): ?> selected <?php endif; ?> value="n">Non</option>
                                                </select>
                                        </div>
                                        <div id="date_projetexploitation" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" value="<?php echo e($investissement->date_arreteregularisation ?? ''); ?>" name="date_arreteregularisation" class="form-control"  placeholder="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Autorisation exceptionnelle</label>
                                            <select value="<?php echo e($investissement->autorisation ?? ''); ?>" name="autorisation" class="form-control" id="autorisation" onchange="changeDropdown7(this.value)" class="form-control">
                                                    <option <?php if($investissement->autorisation == "c"): ?> selected <?php endif; ?> value="c">Choisir</option>
                                                    <option <?php if($investissement->autorisation == "o"): ?> selected <?php endif; ?> value="o">Oui</option>
                                                    <option <?php if($investissement->autorisation == "n"): ?> selected <?php endif; ?> value="n">Non</option>
                                                </select>
                                        </div>
                                        <div id="date_autorisation" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" value="<?php echo e($investissement->date_autorisation ?? ''); ?>" name="date_autorisation" class="form-control"  placeholder="">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="inputState">Raccordement aux réseaux divers</label>
                                            <select value="<?php echo e($investissement->raccordement ?? ''); ?>" name="raccordement" class="form-control" id="raccordement" onchange="changeDropdown8(this.value)" class="form-control">
                                                    <option <?php if($investissement->raccordement == "c"): ?> selected <?php endif; ?> value="c">Choisir</option>
                                                    <option <?php if($investissement->raccordement == "o"): ?> selected <?php endif; ?> value="o">Oui</option>
                                                    <option <?php if($investissement->raccordement == "n"): ?> selected <?php endif; ?> value="n">Non</option>
                                                </select>
                                        </div>
                                        <div id="date_raccordement" class="form-group col-md-3" >
                                            <label for="inputPassword4">Date</label>
                                            <input type="Date" value="<?php echo e($investissement->date_raccordement ?? ''); ?>" name="date_raccordement" class="form-control"  placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <label for="inputEmail4">Contraintes rencontrées</label>
                                        <textarea class="form-control" value="<?php echo e($investissement->contraintes ?? ''); ?>" name="contraintes" aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                                <?php endif; ?>


                                <?php if($investissement->etat_projet == "fiche2"): ?>
                                    
                                    <div class="container-fluid" id="fiche2">
                                        <br>
                                            <h6>> Projet en voie de réalisation     (Fiche-02)</h6>
                                            <br>

                                            <div class="form-row mb-4">
                                                <div class="form-group col-md-3">
                                                    <label for="inputState">Permis de construire</label>
                                                    <select value="<?php echo e($investissement->permis_construction2 ?? ''); ?>" name="permis_construction2" id="permis_construction2" onchange="changeDropdown9(this.value)" class="form-control">
                                                            <option <?php if($investissement->permis_construction2=="c"): ?> selected <?php endif; ?> value="c">Choisir</option>
                                                            <option <?php if($investissement->permis_construction2=="o"): ?> selected <?php endif; ?> value="o">Oui</option>
                                                            <option <?php if($investissement->permis_construction2=="n"): ?> selected <?php endif; ?> value="n">Non</option>
                                                        </select>
                                                </div>
                                                <div id="date_permisconstruction2" class="form-group col-md-3" >
                                                    <label for="inputPassword4">Date</label>
                                                    <input type="Date" class="form-control" value="<?php echo e($investissement->date_permis_construction2 ?? ''); ?>" name="date_permis_construction2" placeholder="">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="inputState">Arrêté de création</label>
                                                    <select value="<?php echo e($investissement->arret_creation2 ?? ''); ?>" name="arret_creation2" class="form-control" id="arret_creation2" onchange="changeDropdown10(this.value)" class="form-control">
                                                            <option <?php if($investissement->arret_creation2=="c"): ?> selected <?php endif; ?> value="c">Choisir</option>
                                                            <option <?php if($investissement->arret_creation2=="o"): ?> selected <?php endif; ?> value="o">Oui</option>
                                                            <option <?php if($investissement->arret_creation2=="n"): ?> selected <?php endif; ?> value="n">Non</option>
                                                        </select>
                                                </div>
                                                <div id="date_arretcreation2" class="form-group col-md-3" >
                                                    <label for="inputPassword4">Date</label>
                                                    <input type="Date" class="form-control" value="<?php echo e($investissement->date_arret_creation2 ?? ''); ?>" name="date_arret_creation2"  placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-row mb-4">
                                                <label for="inputEmail4">Taux de réalisation</label>
                                                <input type="number" value="<?php echo e($investissement->taux ?? ''); ?>" name="taux" class="form-control"  placeholder="">
                                            </div>
                                            <div class="form-row mb-4">
                                                <label for="inputEmail4">Contraintes rencontrées</label>
                                                <textarea class="form-control" value="<?php echo e($investissement->contraintes2 ?? ''); ?>" name="contraintes2" aria-label="With textarea"></textarea>
                                            </div>
                                    </div>
                                <?php endif; ?>
                                <?php if($investissement->etat_projet == "fiche3"): ?>
                                
                                <div class="container-fluid" id="fiche3">
                                    <h6>> Projet en voie de lancement (Fiche-03)</h6>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-3">
                                                <label for="inputState">Permis de construire</label>
                                                <select value="<?php echo e($investissement->permis_construction3 ?? ''); ?>" name="permis_construction3" id="permis_construction3" onchange="changeDropdown11(this.value)" class="form-control">
                                                    <option <?php if($investissement->permis_construction3=="c"): ?> selected <?php endif; ?> value="c" >Choisir</option>
                                                    <option <?php if($investissement->permis_construction3=="o"): ?> selected <?php endif; ?> value="o">Oui</option>
                                                    <option <?php if($investissement->permis_construction3=="n"): ?> selected <?php endif; ?> value="n">Non</option>
                                                </select>
                                            </div>
                                            <div id="date_permisconstruction3" class="form-group col-md-3" >
                                                <label for="inputPassword4">Date</label>
                                                <input type="Date" value="<?php echo e($investissement->date_permis_construction3 ?? ''); ?>" name="date_permis_construction3" class="form-control"  placeholder="">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputState">Arrêté de création</label>
                                                <select value="<?php echo e($investissement->arret_creation3 ?? ''); ?>" name="arret_creation3" class="form-control" id="arret_creation3" onchange="changeDropdown12(this.value)" class="form-control">
                                                    <option <?php if($investissement->arret_creation3=="c"): ?> selected <?php endif; ?> value="c">Choisir</option>
                                                    <option <?php if($investissement->arret_creation3=="o"): ?> selected <?php endif; ?> value="o">Oui</option>
                                                    <option <?php if($investissement->arret_creation3=="n"): ?> selected <?php endif; ?> value="n">Non</option>
                                                </select>
                                            </div>
                                            <div id="date_arretcreation3" class="form-group col-md-3" >
                                                <label for="inputPassword4">Date</label>
                                                <input type="Date" value="<?php echo e($investissement->date_arret_creation3 ?? ''); ?>" name="date_arret_creation3" class="form-control"  placeholder="">
                                            </div>
                                        </div>
                                        
                                        <div class="form-row mb-4">
                                            <label for="inputEmail4">Contraintes rencontrées</label>
                                            <textarea class="form-control"  name="contraintes3" aria-label="With textarea">
                                                <?php echo e($investissement->contraintes3 ?? ''); ?>

                                            </textarea>
                                        </div>


                                </div>
                                <?php endif; ?>


                                    <div class="custom-file-container" data-upload-id="mySecondImage">
                                        <label>Piece jointe : <a download href="<?php echo e(asset('public/'.$investissement->piece_jointe)); ?>" class="btn btn-success" title="Clear Image"><i class="fa fa-file"></i> Pièce </a></label>
                                    </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>
                                


                                        <div class="form-row mb-4">
                                            <label for="inputEmail4">Réponse</label>
                                            <textarea class="form-control" value="<?php echo e($investissement->reponse ?? ''); ?>" name="reponse" aria-label="With textarea"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Envoyer La Réponse</button>

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





    <script src="<?php echo e(asset('cirm2/assets/js/libs/jquery-3.1.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm2/bootstrap/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm2/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm2/assets/js/app.js')); ?>"></script>
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
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script>
        $(document).ready(function() {
            <?php if($investissement->etat_projet == "fiche3"): ?>
                $('#fiche3').show()
            <?php endif; ?>
            <?php if($investissement->etat_projet == "fiche2"): ?>
                $('#fiche2').show()
            <?php endif; ?>
            <?php if($investissement->etat_projet == "fiche1"): ?>
                $('#fiche1').show()
            <?php endif; ?>


            $('#etat_projet').on('change',function(){
                var value = this.value;
                console.log(value)
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



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
    </script>


    <





    <script src="<?php echo e(asset('cirm2/plugins/highlight/highlight.pack.js')); ?>"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>