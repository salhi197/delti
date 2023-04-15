<?php $__env->startSection('content'); ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Etat de <?php echo e($source); ?></h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Etat de <?php echo e($source); ?></li>
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
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal" style="background-color:#e30613; border-style:none;">  <i class="fas  fas fa-plus-circle"></i>  Ajouter </button>
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter etat de <?php echo e($source); ?></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="<?php echo e(route('categorie.store')); ?>" novalidate>
                                                            <?php echo csrf_field(); ?>
                                                                <input type="hidden" name="source" value="<?php echo e($source ?? ''); ?>"/>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Numéro :</label>
                                                                            <input type="number"  name="numero" class="form-control" id="validationCustom02" required>
                                                                        </div>
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
                                                                            <input type="text"  name="label" class="form-control" id="validationCustom02" required>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Catégorie Parente :</label>
                                                                            <select class="form-control" name="parent">
                                                                                <option value="">--Séléctionner--</option>
                                                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option value="categorie_<?php echo e($categorie->id); ?>"><?php echo e($categorie->label ?? ''); ?></option>
                                                                                    <?php $__currentLoopData = $categorie->getSubs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $souscategorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option value="souscategorie_<?php echo e($souscategorie->id); ?>"> --- <?php echo e($souscategorie->label ?? ''); ?></option>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>                                                                
                                                                </div>
                                                                <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                        <button class="btn btn-primary" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal" style="background-color:#e30613; border-style:none;"><i class="fas fa-save"></i> Sauvegarder</button>
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
                        <!-- end col -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">


                                <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Numéro</th>
                                                <th>Nom en arabe</th>
                                                <th>Nom en anglais</th>
                                                <th>Nom en français</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($categorie->Numero ?? $categorie->numero); ?></td>
                                                    <td><?php echo e($categorie->label_ar ?? $categorie->type_ar); ?></td>
                                                    <td><?php echo e($categorie->label_en ?? $categorie->type_en); ?></td>
                                                    <td><?php echo e($categorie->label ?? ''); ?></td>
                                                        <td>
                                                        <div class="table-action">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal<?php echo e($categorie->id); ?>"> <i class=" fas fa-pen"></i>  </button>
                                                            <div class="modal fade" id="firstmodal<?php echo e($categorie->id); ?>" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Modifer Etat de <?php echo e($source); ?></h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form class="needs-validation" method="post" action="<?php echo e(route('categorie.update',['categorie'=>$categorie->id])); ?>" novalidate>
                                                                                <?php echo csrf_field(); ?>
                                                                        <div class="row">

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Numéro :</label>
                                                                        <input type="text"  name="numero_edit" value="<?php echo e($categorie->numero); ?>"  class="form-control" id="validationCustom02" required>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en Arabe : </label>
                                                                        <input type="text"   name="type_ar_edit" value="<?php echo e($categorie->type_ar); ?>"  class="form-control" id="validationCustom02" placeholder=""  required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en Anglais : </label>
                                                                        <input type="text"   name="type_en_edit" value="<?php echo e($categorie->type_en); ?>"  class="form-control" id="validationCustom02" placeholder=""  required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en français :</label>
                                                                        <input type="text"  name="label_edit" value="<?php echo e($categorie->label); ?>"  class="form-control" id="validationCustom02" required>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Catégorie Parente :</label>
                                                                        <select class="form-control" name="parent_edit" value="<?php echo e($categorie->parent); ?>" >
                                                                            <option >
                                                                                --Séléctionner--
                                                                            </option>
                                                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <option value="categorie_<?php echo e($categorie->id); ?>"><?php echo e($categorie->label ?? ''); ?></option>
                                                                                <?php $__currentLoopData = $categorie->getSubs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $souscategorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <option value="souscategorie_<?php echo e($souscategorie->id); ?>"> --- <?php echo e($souscategorie->label ?? ''); ?></option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                        </select>
                                                                    </div>
                                                                </div>                                                                                     

                                                                                </div>
                                                                            <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                                    <button class="btn btn-primary" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal" style="background-color:#e30613; border-style:none;"><i class="fas fa-save"></i> Sauvegarder</button>
                                                                            </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <a href="<?php echo e(route('categorie.destroy',['id_categorie'=>$categorie->id])); ?>"
                                                                onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                            
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