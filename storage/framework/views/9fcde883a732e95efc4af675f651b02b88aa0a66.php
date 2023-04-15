<?php $__env->startSection('styles'); ?>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">administrations</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Administartions</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"> Ajouter administration</button>
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter administration</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="<?php echo e(route('administration.store')); ?>" novalidate>
                                                            <?php echo csrf_field(); ?>
                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom01" class="form-label">Numéro</label>
                                                                        <input type="text"  name="numero" class="form-control" id="validationCustom01" placeholder="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom Arabe : </label>
                                                                        <input type="text"   name="type_ar" class="form-control" id="validationCustom02" placeholder="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom Anglais: </label>
                                                                        <input type="text"   name="type_en" class="form-control" id="validationCustom02" placeholder="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom Français: </label>
                                                                        <input type="text"   name="type" class="form-control" id="validationCustom02" placeholder="" required>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Secteur</label>
                                                                        <select class="form-control" name="secteur">
                                                                            <option value="">--Séléctionner--</option>
                                                                            <?php $__currentLoopData = $secteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($secteur->id); ?>"><?php echo e($secteur->type ?? ''); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Administartion Parent: </label>
                                                                        <select class="form-control" name="parent">
                                                                            <option value="">--Séléctionner--</option>

                                                                            <?php $__currentLoopData = $administrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="administration_<?php echo e($administration->id); ?>"><?php echo e($administration->type ?? $administration->label); ?></option>
                                                                                <?php $__currentLoopData = $administration->sousadministrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sousadministration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <option value="sousadministration_<?php echo e($sousadministration->id); ?>">--<?php echo e($sousadministration->type ?? $sousadministration->label); ?></option>
                                                                                    <?php $__currentLoopData = $sousadministration->soussousadministrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soussousadministration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option value="soussousadministration_<?php echo e($soussousadministration->id); ?>">----<?php echo e($soussousadministration->type ?? $soussousadministration->label); ?></option>
                                                                                        <?php $__currentLoopData = $soussousadministration->soussoussousadministrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soussoussousadministration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                            <option value="soussoussousadministration_<?php echo e($soussoussousadministration->id); ?>">------<?php echo e($soussoussousadministration->type ?? $soussoussousadministration->label); ?></option>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <button class="btn btn-primary" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Sauvegarder</button>

                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nom Ar</th>
                                                <th>Nom En</th>
                                                <th>Nom Fr</th>

                                                <th>secteur </th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $administrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($administration->numero ?? ''); ?></td>
                                                    <td><?php echo e($administration->type_ar ?? ''); ?></td>
                                                    <td><?php echo e($administration->type_en ?? ''); ?></td>
                                                    <td><?php echo e($administration->type ?? ''); ?></td>
                                                    <td><?php echo e($administration->secteur() ?? ''); ?></td>
                                                    <td>
                                                        <div class="table-action">

                                                            <a href="<?php echo e(route('administration.destroy',['id_administration'=>$administration->id])); ?>"
                                                                onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                            
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal<?php echo e($administration->id); ?>"> Modifier</button>

                                                                                                                      
                                                            <div class="modal fade" id="firstmodal<?php echo e($administration->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modifier</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="needs-validation" method="post" action="<?php echo e(route('administration.update',['administration'=>$administration->id])); ?>" novalidate>
                                                                            <?php echo csrf_field(); ?>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom01" class="form-label">Numéro :  </label>
                                                                                        <input type="text" value="<?php echo e($administration->numero ?? ''); ?>"  name="numero_edit" class="form-control" id="validationCustom01" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Nom Arabe : </label>
                                                                                        <input type="text"  value="<?php echo e($administration->type_ar ?? ''); ?>"  name="type_ar_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Nom Anglais : </label>
                                                                                        <input type="text"  value="<?php echo e($administration->type_en ?? ''); ?>"  name="type_en_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Nom : </label>
                                                                                        <input type="text"  value="<?php echo e($administration->type ?? ''); ?>"  name="type_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Secteur</label>
                                                                                        <select class="form-control" name="secteur_edit">
                                                                                            <option value="">--Séléctionner--</option>
                                                                                            <?php $__currentLoopData = $secteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <option <?php if($secteur->id==$administration->secteur): ?> selected <?php endif; ?> value="<?php echo e($secteur->id); ?>"><?php echo e($secteur->type ?? ''); ?></option>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Administartion Parent: </label>
                                                                                        <select class="form-control" name="parent_edit">
                                                                                            <option value="">--Séléctionner--</option>

                                                                                            <?php $__currentLoopData = $administrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <option value="administration_<?php echo e($administration->id); ?>"><?php echo e($administration->type ?? $administration->label); ?></option>
                                                                                                <?php $__currentLoopData = $administration->sousadministrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sousadministration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                    <option value="sousadministration_<?php echo e($sousadministration->id); ?>">--<?php echo e($sousadministration->type ?? $sousadministration->label); ?></option>
                                                                                                    <?php $__currentLoopData = $sousadministration->soussousadministrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soussousadministration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                        <option value="soussousadministration_<?php echo e($soussousadministration->id); ?>">----<?php echo e($soussousadministration->type ?? $soussousadministration->label); ?></option>
                                                                                                        <?php $__currentLoopData = $soussousadministration->soussoussousadministrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soussoussousadministration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                            <option value="soussoussousadministration_<?php echo e($soussoussousadministration->id); ?>">------<?php echo e($soussoussousadministration->type ?? $soussoussousadministration->label); ?></option>
                                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary">Sauvgarder</button>

                                                                        </form>

                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            
                                                        </div>
                                                    </td>

                                                </tr>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>

                                </div>
                                <!-- end card body-->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col-->
                    </div>
                    <!-- end row-->


                    <!-- end row-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>