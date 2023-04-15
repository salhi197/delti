<?php $__env->startSection('content'); ?>
<div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Roles</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Roles</li>
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
                                    <h4 class="card-title"><i class=" fas fa-user-plus"></i>  Nouveau Role</h4>
                                    <hr>
                                    <br>
                                    <form class="needs-validation" novalidate method="post" action="<?php echo e(route('role.update',['role'=>$role->id])); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Nom</label>
                                                    <input value="<?php echo e($role->nom_role ?? ''); ?>" name="nom_role" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- Fin Requete -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"><i class="  fas fa-allergies"></i>  Privilleges</h4>
                                    <hr>
                                    <br>
                                    <div class="row">
                                            <?php $__currentLoopData = ['citoyen','audience','suggestion','requete','rapport','bord','courrier_citoyen','courrier_mediateur','courrier_secteur','attributions','transfert','affectation_externe','doleance','calendrier']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-md-3">
                                                        <br>
                                                        <div>
                                                            <h5 class="font-size-14 mb-12">Citoyen</h5>
                                                            <div class="form-check mb-12">
                                                                <?php $create_elt = 'create_'.$pr;?>
                                                                <input data-val="<?php echo e($create_elt); ?>" class="form-check-input" name="create_<?php echo e($pr); ?>" <?php if($privilege["$create_elt"] ?? ''=="on"){ echo "checked";} ?> type="checkbox" >
                                                                <label class="form-check-label" >
                                                                    Créer
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <?php $read_elt = 'read_'.$pr;?>
                                                                <input class="form-check-input" name="read_<?php echo e($pr); ?>" <?php if($privilege["$read_elt"] ?? ''=="on"){ echo "checked";} ?>  type="checkbox"  >
                                                                <label class="form-check-label" for="formCheck2">
                                                                    Lire
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <?php $delete_elt = 'delete_'.$pr;?>
                                                                <input   class="form-check-input" name="delete_<?php echo e($pr); ?>" <?php if($privilege["$delete_elt"] ?? ''=="on"){ echo "checked";} ?> type="checkbox" >
                                                                <label class="form-check-label" for="formCheck2">
                                                                    Supprimer
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <br>
                                            </div>
                                    <button class="btn btn-primary" type="submit">Ajouter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>

                    
                </div>
                
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>