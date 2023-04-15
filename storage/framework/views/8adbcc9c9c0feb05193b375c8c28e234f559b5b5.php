<?php $__env->startSection('content'); ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Tout les Clients</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Nouveaux </li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                   
                    <a href="<?php echo e(route('client.show.create')); ?>">                    
                        <button type="button" class="btn btn-primary waves-effect waves-light">+ Ajouter Client</button>
                    </a>
                    <br>
                    <!--Filter-->
                    <br>
           
                    <!--Filter-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="scroll-vertical-datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr >
                                                <th>ID</th>
                                                <th>Nom Prénom</th>
                                                <th>Type</th>
                                                <th>Wilaya</th>
                                                <th>Commune</th>
                                                <th>Action</th>                                        
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr data-href="<?php echo e(route('client.edit',['client'=>$client->id])); ?>">
                                                    <td><?php echo e($client->id); ?></td>
                                                    <td><?php echo e($client->nom); ?> <?php echo e($client->prenom); ?></td>
                                                    <td><?php echo e($client->type ?? ''); ?></td>
                                                    <td><?php echo e($client->wilaya()['name'] ?? ''); ?></td>
                                                    <td><?php echo e($client->commune()['name'] ?? ''); ?></td>
                                                    
                                                    <td>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <a href="<?php echo e(route('client.edit',['client'=>$client->id])); ?>">
                                                            <i class=" fas fa-edit"></i>
                                                        </a>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <a href="<?php echo e(route('client.destroy',['client'=>$client->id])); ?>">
                                                            <i class="fas fa-trash-alt"></i>
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