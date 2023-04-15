<?php $__env->startSection('content'); ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Tout les Doléances</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active"> Doléances</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <a href="<?php echo e(route('doleance.create')); ?>">                    
                        <button type="button" class="btn btn-primary waves-effect waves-light" style="background-color:#009640; border-style:none;"><i class=" fas fa-plus-circle"></i> Ajouter </button>
                    </a>
                    <br>
                    <!--Filter-->
                    <br>
                    <!--Filter-->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?php echo e(route('doleance.filter')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Date début</label>
                                                    <input name="date_debut" value="" type="date" class="form-control" id="validationCustom04"  >
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Date fin</label>
                                                    <input name="date_fin" value="" type="date" class="form-control" id="validationCustom05" placeholder="Zip" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Wilaya</label>
                                                    <select class=" select2 form-control" id="wilaya_select" name="wilaya">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $wilayas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($wilaya->id); ?>" id="<?php echo e($wilaya->name); ?>" >
                                                                <?php echo e($wilaya->name); ?>   
                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </select>                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <br>
                                                    <button class="btn btn-primary" type="submit" style="background-color:#009640; border-style:none;">Filtre</button>

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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="scroll-vertical-datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr >
                                                <!--<th>ID</th>-->            
                                                <th>Date doléance</th>
                                                <th>Code </th>
                                                <th>Wilaya</th>
                                                <th>Secteur</th>
                                                <th>Action</th>                                        
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php $__currentLoopData = $doleances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doleance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr  style="cursor: pointer;" data-href="<?php echo e(route('doleance.edit',['doleance'=>$doleance->id])); ?>">
                                                    <!--<td><?php echo e($doleance->id); ?></td>-->
                                                    <td><?php echo e($doleance->datedoleance ?? ''); ?></td>
                                                    <td><?php echo e($doleance->code_initial ?? ''); ?></td>
                                                    <td><?php echo e($doleance->getelt("wilaya") ?? ''); ?></td>
                                              
                                                    <!--<td><?php echo e($doleance->titre ?? ''); ?></td>-->
                                                    <!--<td><?php echo e($doleance->getelt("client") ?? ''); ?></td>-->
                                                    <!--<td><?php echo e($doleance->getelt("daira") ?? ''); ?></td>-->
                                                    <!--<td><?php echo e($doleance->getelt("commune") ?? ''); ?></td>-->
                                                    <!--<td><?php echo e($doleance->getelt("typerequete") ?? ''); ?></td>-->
                                                    <td><?php echo e($doleance->getelt("secteur") ?? ''); ?></td>
                                                    <!--<td><?php echo e($doleance->administration ?? ''); ?></td>-->
                                                    <!--<td><?php echo e($doleance->getelt("sujet") ?? ''); ?></td>-->
                                                    <td>
                                                        <!--
                                                        &nbsp;&nbsp;&nbsp;
                                                        <a href="<?php echo e(route('requete.edit',['requete'=>$doleance->id])); ?>">
                                                            <i class=" fas fa-edit"></i>
                                                        </a>
                                                        &nbsp;&nbsp;&nbsp;

                                                        <a href="<?php echo e(route('requete.destroy',['requete'=>$doleance->id])); ?>">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
-->
                                                            <a href="<?php echo e(route('doleance.edit',['doleance'=>$doleance->id])); ?>""
                                                                class="text-white btn btn-primary">
                                                                <i class=" fas fa-edit"></i>
                                                            </a>  
                                                            <a href="<?php echo e(route('doleance.destroy',['doleance'=>$doleance->id])); ?>""
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