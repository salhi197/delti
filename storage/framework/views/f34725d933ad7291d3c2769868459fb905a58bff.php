<?php $__env->startSection('content'); ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Tout les Suggestions</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">> Suggestions </li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                   
                    <a href="https://cirm.power-evo.com/suggestion/show/create">                    
                    <a href="<?php echo e(route('suggestion.show.create')); ?>">                    
                        <button type="button" class="btn btn-primary waves-effect waves-light">+ Ajouter suggestion</button>
                    </a>
                    <br>
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
                                                <th>Wilaya</th>
                                                <th>Commune</th>
                                                <th>Sujet</th>
                                                <th>Action</th>                                        
                                            </tr>
                                        </thead>


                                        <tbody>
                                        <tbody>
                                                    <?php $__currentLoopData = $suggestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $suggestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr style="cursor: pointer;" data-href="<?php echo e(route('suggestion.edit',['suggestion'=>$suggestion->id])); ?>">
                                                            <!--<td><?php echo e($suggestion->id ?? ''); ?></td>-->
                                                            <td><?php echo e($suggestion->id ?? ''); ?></td>
                                                            <td><?php echo e($suggestion->nom ?? ''); ?> <?php echo e($suggestion->prenom ?? ''); ?></td>
                                                            <!--<td><?php echo e($suggestion->getelt("client") ?? ''); ?></td>-->
                                                            <td><?php echo e($suggestion->getelt("wilaya") ?? ''); ?></td>
                                                            <td><?php echo e($suggestion->getelt("commune") ?? ''); ?></td>
                                                            <td><?php echo e($suggestion->objet ?? ''); ?></td>
                                                            <td>
                                                                <div class="btn-group-vertical" role="group"
                                                                    aria-label="Vertical button group">
                                                                    <div class="btn-group" role="group">
                                                                        <button id="btnGroupVerticalDrop1" type="button"
                                                                            class="btn btn-light dropdown-toggle"
                                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false" style="background-color:#ffc107;">
                                                                             Action<i
                                                                                class="mdi mdi-chevron-down"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu"
                                                                            aria-labelledby="btnGroupVerticalDrop1">
                                                                            <a class="dropdown-item" href="#">Détails de la
                                                                                suggestion</a>
                                                                            <a class="dropdown-item" href="#">Ajouter un fichier ou
                                                                                un message</a>
                                                                            <a class="dropdown-item" href="#">Imprimer la
                                                                                suggestion</a>
                                                                            <a class="dropdown-item" href="#"
                                                                                onclick="return confirm('etes vous sure  ?')">Retirer la suggestion</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
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