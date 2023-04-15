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
                                        Ajouter Une Investissement
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">   
                                <input type="text" class="form-control form-control-navbar" name="query" value="" placeholder=" Entrez Une Info" id="myInput">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                                    <tr >
                                                    <th>Code </th>
                                                    <th>Date</th>
                                                    <th>Etat de projet</th>
                                                    <th>Etat de Requete</th>
                                                    <th>Action</th>                                    
                                                    </tr>
                                                </thead>

                                                <tbody id="myTable">
                                                    <?php $__currentLoopData = $investissements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $investissement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr style="cursor: pointer;" data-href="<?php echo e(route('investissement.edit',['investissement'=>$investissement->id])); ?>">
                                                            <!--<td><?php echo e($investissement->id ?? ''); ?></td>-->
                                                            <td><?php echo e($investissement->code_initial ?? ''); ?></td>
                                                            <td><?php echo e($investissement->created_at ?? ''); ?></td>
                                                            <td><?php echo e($investissement->etat_projet ?? 'nouvelle'); ?></td>
                                                            <td><?php echo e($investissement->state ?? 'nouvelle'); ?></td>
                                                            <!--<td><?php echo e($investissement->itatInvestissement ?? ''); ?></td>-->
                                                            <!--<td><?php echo e($investissement->investisseur ?? ''); ?></td>-->
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
                                                                            <a class="dropdown-item" href="<?php echo e(route('investissement.edit',['investissement'=>$investissement->id])); ?>">Détails de la
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