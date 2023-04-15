<?php $__env->startSection('content'); ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Requete : <?php echo e($categorie->label ?? ''); ?></h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Requêtes</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <a href="<?php echo e(route('requete.create')); ?>">                    
                        <button type="button" class="btn btn-primary waves-effect waves-light" style="background-color:#e30613; border-style:none;"><i class=" fas fa-plus-circle"></i>  Ajouter Requete</button>
                    </a>
                    <br>
                    <!--Filter-->
                    <br>
                    <!--Filter-->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?php echo e(route('requete.filter')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Date début</label>
                                                    <input type="date" max="<?php echo e(date('Y-m-d')); ?>" class="form-control" name="date_debut" placeholder="City" >
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Date fin</label>
                                                    <input type="date" max="<?php echo e(date('Y-m-d')); ?>" class="form-control" name="date_fin" id="validationCustom05" placeholder="Zip" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Wilaya</label>
                                                    <select class="form-select select" id="wilaya_select" name="wilaya">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $wilayas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($wilaya->id); ?>" id="<?php echo e($wilaya->name); ?>" <?php echo e($wilaya->id == (old('wilaya_id') ?? ($member->wilaya_id ?? '')) ? 'selected' : ''); ?>>
                                                                <?php echo e($wilaya->name); ?>   
                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </select>                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <br>
                                                    <button class="btn btn-primary" type="submit" style="background-color:#e30613; border-style:none; margint-top:5px;">Filtre</button>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <!-- end col -->
                    </div>
                    <!--Filter-->


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-body">

                                    <div class="row">
                                        <div class="table-responsive">
                                            <table id="scroll-vertical-datatable" class="table table-striped table-bordered dt-responsive nowrap table-responsive" >
                                                <thead>
                                                    <tr >
                                                    <!--<th> Id </th>-->
                                                    <th>Date Requete</th>
                                                    <th>Code</th>
                                                    <!--<th>Citoyen</th>-->
                                                    <th>Wilaya</th>
                                                    <!--<th>Secteur</th>-->
                                                    <!--<th>Administration</th>-->
                                                    <!--<th>Type de Requête</th>-->
                                                    <th>Etat de Requête</th>
                                                    <!--<th>Investisseur</th>-->
                                                    <!--<th>Sujet</th>-->
                                                    <th>Action</th>                                    
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php $__currentLoopData = $requetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr style="cursor: pointer;" data-href="<?php echo e(route('requete.edit',['requete'=>$requete->id])); ?>">
                                                            <!--<td><?php echo e($requete->id ?? ''); ?></td>-->
                                                            <td><?php echo e($requete->daterequete ?? ''); ?></td>
                                                            <td><?php echo e($requete->code_initial ?? ''); ?></td>
                                                            <!--<td><?php echo e($requete->getelt("client") ?? ''); ?></td>-->
                                                            <td><?php echo e($requete->getelt("wilaya") ?? ''); ?></td>
                                                            <!--<td><?php echo e($requete->getelt("secteur") ?? ''); ?></td>-->

                                                            <!--<td><?php echo e($requete->getelt("administration") ?? ''); ?></td>-->
                                                            <!--<td><?php echo e($requete->getelt("typerequete") ?? ''); ?></td>-->
                                                            <td><?php echo e($requete->getelt("etatrequete") ?? ''); ?></td>
                                                            <!--<td><?php echo e($requete->etatrequete ?? ''); ?></td>-->

                                                            <!--<td><?php echo e($requete->investisseur ?? ''); ?></td>-->
                                                            <!--<td><?php echo e($requete->getelt("sujet") ?? ''); ?></td>-->

                                                            <td>
                                                            <!--
                                                                <a href="<?php echo e(route('requete.edit',['requete'=>$requete->id])); ?>">
                                                                    <i class=" fas fa-edit"></i>
                                                                </a>
-->
                                                                <!--
                                                                <a href="<?php echo e(route('requete.destroy',['requete'=>$requete->id])); ?>">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </a>
-->
                                                            <a href="<?php echo e(route('requete.edit',['requete'=>$requete->id])); ?>"
                                                                class="text-white btn btn-primary">
                                                                <i class=" fas fa-edit"></i>
                                                            </a>  
                                                            <a href="<?php echo e(route('requete.destroy',['requete'=>$requete->id])); ?>""
                                                                onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </a>   
                                                            </td>


                                                        </tr>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
            $('#scroll-vertical-datatable').on('click', 'tbody tr', function() {
                window.location.href = $(this).data('href');
            })    
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>