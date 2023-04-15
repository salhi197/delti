<?php $__env->startSection('content'); ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Axes de requete</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit > Axes de requete</a></li>
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
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"style="background-color:#e30613; border-style:none;">  <i class="fas  fas fa-plus-circle"></i> Ajouter</button>
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter axe</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="<?php echo e(route('axe.store')); ?>" novalidate>
                                                            <?php echo csrf_field(); ?>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Numéro : </label>
                                                                        <input type="text"   name="numero" class="form-control" id="validationCustom02" placeholder=""  required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="validationCustom05" class="form-label">Sujet de requete :</label>
                                                                    <select value="<?php echo e($requete->user ?? ''); ?>" name="sujet" class="form-select ">
                                                                        <option value="">Séléctionner</option>  
                                                                        <?php $__currentLoopData = $sujetrequetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sujetrequete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($sujetrequete->id); ?>" ><?php echo e($sujetrequete->type); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>   
                                                            

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en Arabe : </label>
                                                                        <input type="text"   name="type_ar" class="form-control" id="validationCustom02" placeholder=""  required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en Anglais : </label>
                                                                        <input type="text"   name="type_en" class="form-control" id="validationCustom02" placeholder=""  required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en français :</label>
                                                                        <input type="text"  name="type" class="form-control" id="validationCustom02" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                    <button class="btn btn-primary" type="submit" style="background-color:#e30613; border-style:none;"><i class="fas fa-save"></i> Sauvegarder</button>
                                                            </div>

                                                        </form>
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
                                                <th>Type En</th>
                                                <th>Type Ar</th>
                                                <th>Sujet Requete</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $axes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $axe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($axe->numero ?? ''); ?></td>
                                                    <td><?php echo e($axe->type ?? ''); ?></td>
                                                    <td><?php echo e($axe->type_en ?? ''); ?></td>
                                                    <td><?php echo e($axe->type_ar ?? ''); ?></td>
                                                    <td><?php echo e($axe->sujet() ?? ''); ?></td>
                                                    <td>
                                                        <div class="table-action">

                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal<?php echo e($axe->id); ?>"> <i class=" fas fa-pen"></i></button>              
                                                            <div class="modal fade" id="firstmodal<?php echo e($axe->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modifier axe de requete</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="needs-validation" method="post" action="<?php echo e(route('axe.update',['axe'=>$axe->id])); ?>" novalidate>
                                                                            <?php echo csrf_field(); ?>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Numéro : </label>
                                                                                        <input type="text" value="<?php echo e($axe->numero ?? ''); ?>"  name="numero_edit" class="form-control" id="validationCustom02" placeholder=""  required>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <label for="validationCustom05" class="form-label">Sujet requete :</label>
                                                                                        <select value="<?php echo e($requete->user ?? ''); ?>" name="sujet_edit" class="form-select ">
                                                                                            <option value="">Séléctionner</option>  
                                                                                            <?php $__currentLoopData = $sujetrequetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sujetrequete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                    <option value="<?php echo e($sujetrequete->id); ?>"
                                                                                                    <?php if($sujetrequete->id == $axe->sujet): ?> selected <?php endif; ?>
                                                                                                    ><?php echo e($sujetrequete->type); ?></option>
                                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                        </select>
                                                                                </div>   

                                                                                <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom02" class="form-label">Nom en Arabe : </label>
                                                                                            <input type="text"   value="<?php echo e($axe->type_ar ?? ''); ?>" name="type_ar_edit" class="form-control" id="validationCustom02" placeholder=""  required>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom02" class="form-label">Nom en Anglais : </label>
                                                                                            <input type="text"   value="<?php echo e($axe->type_en ?? ''); ?>" name="type_en_edit" class="form-control" id="validationCustom02" placeholder=""  required>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom02" class="form-label">Nom en français :</label>
                                                                                            <input type="text"  value="<?php echo e($axe->type ?? ''); ?>" name="type_edit" class="form-control" id="validationCustom02" required>
                                                                                        </div>
                                                                                    </div>
                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                                    <button class="btn btn-primary" type="submit" style="background-color:#e30613; border-style:none;"><i class="fas fa-save"></i> Sauvegarder</button>
                                                                            </div>

                                                                        </form>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <a href="<?php echo e(route('axe.destroy',['id_axe'=>$axe->id])); ?>"
                                                                onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                            
                                                        </div>
                                                    </td>

                                                </tr>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                    <label for="" class="form-label">Total : <?php echo e(count($axes)); ?></label>

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