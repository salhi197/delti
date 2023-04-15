<?php $__env->startSection('content'); ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Suiver des requetes</h4>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="button" style="  position: absolute;  right: 16px;">
                                <a href="<?php echo e(route('requete.create.client')); ?>">
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        style="background-color: #e30613; border-style: none;">
                                        <i class="fa fa-calendar-plus"></i>
                                        Ajouter
                                        une
                                        requete</button>
                                        <a href="<?php echo e(route('investissement.create.client')); ?>">
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        style="">
                                        <i class="fa fa-calendar-plus"></i>
                                        Ajouter
                                        un
                                        investissement</button>
                                </a>

                                        
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">   
                            <input type="text" class="form-control form-control-navbar" name="query" value="" placeholder=" Entrez le code de la requête" id="myInput">
                            <!-- <div class="input-group-append">
                                    <button type="submit" class="btn btn-warning">
                                        <i class="fas fa-search"></i>
                                    </button>

                            </div> -->

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
                                                    <th>Code </th>
                                                    <th>Sujet de la Requete</th>
                                                    <th>Titre de la Requete</th>
                                                    <th>Date</th>
                                                    <!--<th>Citoyen</th>-->
                                                    <!--<th>Secteur</th>-->
                                                    <!--<th>Administration</th>-->
                                                    <!--<th>Type de Requête</th>-->
                                                    <th>Status</th>
                                                    <!--<th>Investisseur</th>-->
                                                    <!--<th>Sujet</th>-->
                                                    <th>Action</th>                                    
                                                    </tr>
                                                </thead>

                                                <tbody id="myTable">
                                                    <?php $__currentLoopData = $requetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr style="cursor: pointer;" data-href="<?php echo e(route('requete.edit',['requete'=>$requete->id])); ?>">
                                                            <!--<td><?php echo e($requete->id ?? ''); ?></td>-->
                                                            <td><?php echo e($requete->code_initial ?? ''); ?></td>
                                                            <td><?php echo e($requete->getelt("sujet") ?? ''); ?></td>
                                                            <td><?php echo e($requete->titre ?? ''); ?></td>
                                                            <td><?php echo e($requete->created_at ?? ''); ?></td>
                                                            <!--<td><?php echo e($requete->getelt("client") ?? ''); ?></td>-->
                                                            <!--<td><?php echo e($requete->getelt("secteur") ?? ''); ?></td>-->

                                                            <!--<td><?php echo e($requete->getelt("administration") ?? ''); ?></td>-->
                                                            <!--<td><?php echo e($requete->getelt("typerequete") ?? ''); ?></td>-->
                                                            <td><?php echo e($requete->getelt("etatrequete") ?? ''); ?></td>
                                                            <!--<td><?php echo e($requete->etatrequete ?? ''); ?></td>-->
                                                            <!--<td><?php echo e($requete->investisseur ?? ''); ?></td>-->
                                                            <!--<td><?php echo e($requete->getelt("sujet") ?? ''); ?></td>-->
                                                            <td>
                                                                <div class="btn-group-vertical" role="group"
                                                                    aria-label="Vertical button group">
                                                                    <div class="btn-group" role="group">
                                                                        <button id="btnGroupVerticalDrop1" type="button"
                                                                            class="btn btn-light dropdown-toggle"
                                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false" style="background-color:#ffc107;">
                                                                             action
                                                                             <i class="fas fa-cogs"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu"
                                                                            aria-labelledby="btnGroupVerticalDrop1">
                                                                            <a class="dropdown-item" href="<?php echo e(route('requete.edit.client',['requete'=>$requete->id])); ?>">Détails de la
                                                                                requete</a>
                                                                            <a class="dropdown-item" href="#">Ajouter un fichier ou
                                                                                un message</a>
                                                                            <a class="dropdown-item" href="<?php echo e(route('requete.print',['requete'=>$requete->id])); ?>">Imprimer la
                                                                                requete</a>
                                                                            <a class="dropdown-item" href="<?php echo e(route('requete.destroy',['requete'=>$requete->id])); ?>"
                                                                                onclick="return confirm('etes vous sure  ?')">Retirer la requete</a>
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


<?php $__env->startSection('scripts'); ?>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>