<?php $__env->startSection('content'); ?>

                <div class="row">
                        <div class="col-md-6">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Suiver des investissements</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="button" style="  position: absolute;  right: 16px;">
                                <a href="<?php echo e(route('investissement.create.client')); ?>">
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        style="background-color: #e30613; border-style: none;">+
                                        Ajouter
                                        une
                                        investissement</button>
                                </a>

                            </div>
                        </div>

                    </div>
                    <br>


                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">


                                    <br>
                                    <br>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                                    <tr >
                                                    <!--<th> Id </th>-->
                                                    <th>Date investissement</th>
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
                                                    <?php $__currentLoopData = $investissements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $investissement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr style="cursor: pointer;" data-href="<?php echo e(route('investissement.edit',['investissement'=>$investissement->id])); ?>">
                                                            <!--<td><?php echo e($investissement->id ?? ''); ?></td>-->
                                                            <td><?php echo e($investissement->created_at ?? ''); ?></td>
                                                            <td><?php echo e($investissement->code_initial ?? ''); ?></td>
                                                            <!--<td><?php echo e($investissement->getelt("client") ?? ''); ?></td>-->
                                                            <td><?php echo e($investissement->getelt("wilaya") ?? ''); ?></td>
                                                            <!--<td><?php echo e($investissement->getelt("secteur") ?? ''); ?></td>-->

                                                            <!--<td><?php echo e($investissement->getelt("administration") ?? ''); ?></td>-->
                                                            <!--<td><?php echo e($investissement->getelt("typeinvestissement") ?? ''); ?></td>-->
                                                            <td><?php echo e($investissement->getelt("etatinvestissement") ?? 'nouvelle'); ?></td>
                                                            <!--<td><?php echo e($investissement->etatinvestissement ?? ''); ?></td>-->
                                                            <!--<td><?php echo e($investissement->investisseur ?? ''); ?></td>-->
                                                            <!--<td><?php echo e($investissement->getelt("sujet") ?? ''); ?></td>-->
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
                                                                            <a class="dropdown-item" href="<?php echo e(route('investissement.edit.client',['investissement'=>$investissement->id])); ?>">Détails de la
                                                                                investissement</a>
                                                                            <a class="dropdown-item" href="#">Ajouter un fichier ou
                                                                                un message</a>
                                                                            <a class="dropdown-item" href="#">Imprimer la
                                                                                investissement</a>
                                                                            <a class="dropdown-item" href="<?php echo e(route('investissement.destroy',['investissement'=>$investissement->id])); ?>"
                                                                                onclick="return confirm('etes vous sure  ?')">Retirer la investissement</a>
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
                        </div> <!-- end col -->
                    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.client', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>