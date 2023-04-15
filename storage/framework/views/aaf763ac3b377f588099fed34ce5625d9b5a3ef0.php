<?php $__env->startSection('content'); ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Axedoleances</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"> Ajouter Axedoleance</button>
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter Axedoleance</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="<?php echo e(route('axedoleance.store')); ?>" novalidate>
                                                            <?php echo csrf_field(); ?>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Numéro : </label>
                                                                        <input type="text"   name="numero" class="form-control" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-6">
                                                                <label for="validationCustom05" class="form-label">Sujet doleance :</label>
                                                                    <select value="<?php echo e($doleance->user ?? ''); ?>" name="sujet" class="form-control ">
                                                                        <option value="">Séléctionner</option>  
                                                                        <?php $__currentLoopData = $sujetdoleances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sujetdoleance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($sujetdoleance->id); ?>" ><?php echo e($sujetdoleance->type); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                            </div>   
                                                            
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="validationCustom02" class="form-label">Type</label>
                                                                    <input type="text"   name="type" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="validationCustom02" class="form-label">Type Arabe : </label>
                                                                    <input type="text"   name="type_ar" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="validationCustom02" class="form-label">Type Anglais : </label>
                                                                    <input type="text"   name="type_en" class="form-control" id="validationCustom02" placeholder="" value="" required>
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
                       
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Numero</th>
                                                <th>Type</th>
                                                <th>Sujet doleance</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $axedoleances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $axedoleance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($axedoleance->Numero ?? ''); ?></td>
                                                    <td><?php echo e($axedoleance->type ?? ''); ?></td>
                                                    <td><?php echo e($axedoleance->sujet() ?? ''); ?></td>
                                                    <td>
                                                        <div class="table-action">

                                                            <a href="<?php echo e(route('axedoleance.destroy',['id_axedoleance'=>$axedoleance->id])); ?>"
                                                                onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal<?php echo e($axedoleance->id); ?>"> Modifier Axedoleance</button>              
                                                            <div class="modal fade" id="firstmodal<?php echo e($axedoleance->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modifier</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="needs-validation" method="post" action="<?php echo e(route('axedoleance.update',['axedoleance'=>$axedoleance->id])); ?>" novalidate>
                                                                            <?php echo csrf_field(); ?>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <label for="validationCustom05" class="form-label">Sujet doleance :</label>
                                                                                        <select value="<?php echo e($doleance->user ?? ''); ?>" name="sujet_edit" class="form-control ">
                                                                                            <option value="">Séléctionner</option>  
                                                                                            <?php $__currentLoopData = $sujetdoleances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sujetdoleance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                    <option value="<?php echo e($sujetdoleance->id); ?>"
                                                                                                    <?php if($sujetdoleance->id == $axedoleance->sujetdoleance): ?> selected <?php endif; ?>
                                                                                                    ><?php echo e($sujetdoleance->type); ?></option>
                                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                        </select>
                                                                                </div>   

                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Type</label>
                                                                                        <input type="text" value="<?php echo e($axedoleance->type ?? ''); ?>"  name="type_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Save changes</button>

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
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>