<?php $__env->startSection('content'); ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">sousadministration</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Sous sousadministration</li>
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
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"> Ajouter sousadministration</button>
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter sous administration</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="<?php echo e(route('sousadministration.store')); ?>" novalidate>
                                                            <?php echo csrf_field(); ?>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom01" class="form-label">Adminsitartion  : </label>
                                                                        <select class="form-control" name="administration">
                                                                            <option value="">Séléctionner</option>                                                                            
                                                                            <?php $__currentLoopData = $administrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            
                                                                                <option value="<?php echo e($administration->id); ?>">
                                                                                        <?php echo e($administration->type ?? ''); ?>

                                                                                </option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Type</label>
                                                                        <input type="text"   name="label" class="form-control" id="validationCustom02" placeholder="" value="" required>
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

                                    <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>administration</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $sousadministrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sousadministration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($sousadministration->id ?? ''); ?></td>
                                                    <td><?php echo e($sousadministration->administration() ?? ''); ?></td>
                                                    <td><?php echo e($sousadministration->label ?? ''); ?></td>

                                                    

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
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>