<?php $__env->startSection('content'); ?>                    
<div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Utilisateurs</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Utilisateurs</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->



                    <!--Requete-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"><i class=" fas fa-user-plus"></i>  Délégué de Wilaya</h4>
                                    <hr>
                                    <br>
                                    <form method="post" action="<?php echo e(route('user.create',['type'=>'delegue'])); ?>" class="needs-validation" >
                                        <?php echo csrf_field(); ?>
                                        <h6>Application User</h6>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Nom</label>
                                                    <input name="nom" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Prénom</label>
                                                    <input name="prenom" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Téléphone</label>
                                                    <input name="telephone" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Email</label>
                                                    <input name="email" type="Email" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Wilaya</label>
                                                    <select name="wilaya" class="form-control select2" id="validationCustom03" required>
                                                        <?php $__currentLoopData = $wilayas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($wilaya->id); ?>" <?php echo e($wilaya->id == (old('wilaya_id') ?? ($member->wilaya_id ?? '')) ? 'selected' : ''); ?>>
                                                                    <?php echo e($wilaya->name); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </select>
                                                </div>
                                                <br>
                                            </div>

                                            <h6>Accés au Plateforme</h6>
                                            <hr>
                                            <div class="col-md-6">
                                                <br>
                                                <div class="mb-6">
                                                    <label for="validationCustom02" class="form-label">Username</label>
                                                    <input name="fonction" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <div class="mb-6">
                                                    <label for="validationCustom02" class="form-label">Mot de Passe</label>
                                                    <input name="fonction" type="password" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div>
                                        </div>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>


                    <!--Privillege-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"><i class="  fas fa-allergies"></i>  Privilleges</h4>
                                    <hr>
                                    <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="font-size-14 mb-12">Citoyen</h5>
                                                    <div class="form-check mb-12">
                                                        <input class="form-check-input" name="citoyen_create" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Créer
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="citoyen_lire" type="checkbox" name="lire_ck1" id="formCheck2">
                                                        <label class="form-check-label" for="formCheck2">
                                                            Lire
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="font-size-14 mb-12">Audience</h5>
                                                    <div class="form-check mb-12">
                                                        <input class="form-check-input" type="checkbox" name="create_audience" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Créer
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="lire_audience" id="formCheck2">
                                                        <label class="form-check-label" for="formCheck2">
                                                            Lire
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="font-size-14 mb-12">Suggestion</h5>
                                                    <div class="form-check mb-12">
                                                        <input class="form-check-input" type="checkbox" name="create_suggestion" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Créer
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="lire_suggestion" id="formCheck2">
                                                        <label class="form-check-label" for="formCheck2">
                                                            Lire
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="font-size-14 mb-12">Requete</h5>
                                                    <div class="form-check mb-12">
                                                        <input class="form-check-input" type="checkbox" name="create_requete" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Créer
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="lire_requete" id="formCheck2">
                                                        <label class="form-check-label" for="formCheck2">
                                                            Lire
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <br>
                                                <div>
                                                    <h5 class="font-size-14 mb-12">Rapport</h5>
                                                    <div class="form-check mb-12">
                                                        <input class="form-check-input" type="checkbox" name="create_rapport" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Créer
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="lire_rapport" id="formCheck2">
                                                        <label class="form-check-label" for="formCheck2">
                                                            Lire
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <br>
                                                <div>
                                                    <h5 class="font-size-14 mb-12">Tableau de Bord</h5>
                                                    <div class="form-check mb-12">
                                                        <input class="form-check-input" type="checkbox" name="create_bord" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Créer
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="lire_bord" id="formCheck2">
                                                        <label class="form-check-label" for="formCheck2">
                                                            Lire
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <br>
                                                <div>
                                                    <h5 class="font-size-14 mb-12">Courrier Citoyen</h5>
                                                    <div class="form-check mb-12">
                                                        <input class="form-check-input" type="checkbox" name="create_citoyen" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Créer
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="lire_citoyen" id="formCheck2">
                                                        <label class="form-check-label" for="formCheck2">
                                                            Lire
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <br>
                                                <div>
                                                    <h5 class="font-size-14 mb-12">Courrier Médiateur</h5>
                                                    <div class="form-check mb-12">
                                                        <input class="form-check-input" type="checkbox" name="create_médiateur" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Créer
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="lire_médiateur" id="formCheck2">
                                                        <label class="form-check-label" for="formCheck2">
                                                            Lire
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <br>
                                                <div>
                                                    <h5 class="font-size-14 mb-12">Courrier Secteur</h5>
                                                    <div class="form-check mb-12">
                                                        <input class="form-check-input" type="checkbox" name="create_secteur" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Créer
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="lire_secteur" id="formCheck2">
                                                        <label class="form-check-label" for="formCheck2">
                                                            Lire
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <br>
                                                <div>
                                                    <h5 class="font-size-14 mb-12">Attributions</h5>
                                                    <div class="form-check mb-12">
                                                        <input class="form-check-input" type="checkbox" name="create_attributions" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Créer
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="lire_attributions" id="formCheck2">
                                                        <label class="form-check-label" for="formCheck2">
                                                            Lire
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <br>
                                                <div>
                                                    <h5 class="font-size-14 mb-12">Transfert</h5>
                                                    <div class="form-check mb-12">
                                                        <input class="form-check-input" type="checkbox" name="create_transfert" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Créer
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="lire_transfert" id="formCheck2">
                                                        <label class="form-check-label" for="formCheck2">
                                                            Lire
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <br>
                                                <div>
                                                    <h5 class="font-size-14 mb-12">Affectation Externe</h5>
                                                    <div class="form-check mb-12">
                                                        <input class="form-check-input" type="checkbox" name="create_externe" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Créer
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="lire_externe" id="formCheck2">
                                                        <label class="form-check-label" for="formCheck2">
                                                            Lire
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                            
    
                                        
                                        
                                        <br>
                                        <div>
                                            <button class="btn btn-primary" type="submit">Valider</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>