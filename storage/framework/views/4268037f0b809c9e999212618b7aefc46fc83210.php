<?php $__env->startSection('content'); ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Secteurs</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit </a></li>
                                        <li class="breadcrumb-item active">Secteurs</li>
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
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"> Ajouter Secteur</button>
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter Secteur</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="<?php echo e(route('secteur.store')); ?>" novalidate>
                                                            <?php echo csrf_field(); ?>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom01" class="form-label">Numéro</label>
                                                                        <input type="text"  name="numero" class="form-control" id="validationCustom01" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom</label>
                                                                        <input type="text"   name="type" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Type en Arabe</label>
                                                                        <input type="text"   name="type_ar" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Type en Anglais</label>
                                                                        <input type="text"   name="type_en" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <button class="btn btn-primary" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Sauvegarder</button>

                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- Toogle to second dialog -->
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

                                    <h4 class="card-title">Secteurs</h4>
                                    <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                
                                                <th>Numéro</th>
                                                <th>Nom</th>
                                                <th>Nom en En</th>
                                                <th>Nom en fr</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $secteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($secteur->numero ?? ''); ?></td>
                                                    <td><?php echo e($secteur->type_ar ?? ''); ?></td>
                                                    <td><?php echo e($secteur->type_en ?? ''); ?></td>
                                                    <td><?php echo e($secteur->type ?? ''); ?></td>
                                                    <td>
                                                        <div class="table-action">

                                                            <a href="<?php echo e(route('secteur.destroy',['id_secteur'=>$secteur->id])); ?>"
                                                                onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal<?php echo e($secteur->id); ?>"> Modifier Secteur</button>
                                                                                                                      
                                                            <div class="modal fade" id="firstmodal<?php echo e($secteur->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modifier Secteur</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="needs-validation" method="post" action="<?php echo e(route('secteur.update',['secteur'=>$secteur->id])); ?>" novalidate>
                                                                            <?php echo csrf_field(); ?>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom01" class="form-label">Numéro</label>
                                                                                        <input type="text" value="<?php echo e($secteur->numero ?? ''); ?>"  name="numero_edit" class="form-control" id="validationCustom01" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Nom</label>
                                                                                        <input type="text"  value="<?php echo e($secteur->type ?? ''); ?>"  name="type_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Type en Arabe</label>
                                                                                        <input type="text"  value="<?php echo e($secteur->type_ar ?? ''); ?>"  name="type_ar_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Type en Anglais</label>
                                                                                        <input type="text"  value="<?php echo e($secteur->type_en ?? ''); ?>"  name="type_en_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Save changes</button>

                                                                        </form>

                                                                    </div>
                                                                    <div class="modal-footer">
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
                                    <label for="" class="form-label">Total : <?php echo e(count($secteurs)); ?></label>

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
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>