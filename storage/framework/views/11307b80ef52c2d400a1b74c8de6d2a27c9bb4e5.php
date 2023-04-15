<?php $__env->startSection('content'); ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Sources de Requêtes</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Sources de Audiences</li>
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
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"> Ajouter Type</button>


                                        <!-- First modal dialog -->
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter Type</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="<?php echo e(route('sourceaudience.store')); ?>" >
                                                            <?php echo csrf_field(); ?>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Numéro : </label>
                                                                        <input type="text" name="numero" class="form-control"  placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom Arabe: </label>
                                                                        <input type="text"  name="type_ar" class="form-control"  placeholder="" value="" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom Anglais: </label>
                                                                        <input type="text"  name="type_en" class="form-control"  placeholder="" value="" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom Français : </label>
                                                                        <input type="text"   name="type" class="form-control"  placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Abréviation  : </label>
                                                                        <input type="text"   name="premierelettre" class="form-control"   required>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-dismiss="modal">Sauvegarder</button>
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
                                                <th>Numero</th>
                                                <th>Nom en arabe</th>
                                                <th>Nom en Anglais</th>
                                                <th>Nom en Français</th>
                                                <th>Abréviation</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $sourceaudiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sourceaudience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($sourceaudience->numero ?? ''); ?></td>
                                                    <td><?php echo e($sourceaudience->type_ar ?? ''); ?></td>
                                                    <td><?php echo e($sourceaudience->type_en ?? ''); ?></td>
                                                    <td><?php echo e($sourceaudience->type ?? ''); ?></td>
                                                    <td><?php echo e($sourceaudience->premierelettre ?? ''); ?></td>
                                                    <td>
                                                        <div class="table-action">

                                                            <a href="<?php echo e(route('sourceaudience.destroy',['id_sourceaudience'=>$sourceaudience->id])); ?>"
                                                                onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </a>

                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal<?php echo e($sourceaudience->id); ?>"> Modifer</button>


                                                            <!-- First modal dialog -->
                                                            <div class="modal fade" id="firstmodal<?php echo e($sourceaudience->id); ?>" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">+ Modifer</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form class="needs-validation" method="post" action="<?php echo e(route('sourceaudience.update',['sourceaudience'=>$sourceaudience->id])); ?>" >
                                                                                <?php echo csrf_field(); ?>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom02" class="form-label">Numero : </label>
                                                                                            <input type="text"  value="<?php echo e($sourceaudience->numero ?? ''); ?>"  name="numero_edit" class="form-control"  placeholder="" value="" required>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom02" class="form-label">Nom en Arabe : </label>
                                                                                            <input type="text"  value="<?php echo e($sourceaudience->type_ar ?? ''); ?>"  name="type_ar_edit" class="form-control"  placeholder="" value="" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom02" class="form-label">Nom en français</label>
                                                                                            <input type="text"  value="<?php echo e($sourceaudience->type ?? ''); ?>"  name="type_edit" class="form-control"  placeholder="" value="" required>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom02" class="form-label">Nom en Anglais : </label>
                                                                                            <input type="text"  value="<?php echo e($sourceaudience->type_en ?? ''); ?>"  name="type_en_edit" class="form-control"  placeholder="" value="" required>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom02" class="form-label">Abréviation : </label>
                                                                                            <input type="text" value="<?php echo e($sourceaudience->premierelettre ?? ''); ?>"  name="premierelettre_edit" class="form-control"   required>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <button class="btn btn-primary" type="submit" >Sauvegarder</button>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <!-- Toogle to second dialog -->
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
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>