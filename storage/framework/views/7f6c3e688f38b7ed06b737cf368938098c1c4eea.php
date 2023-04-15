<?php $__env->startSection('content'); ?>


<div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Tableau de bord</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Tableau de Bord</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">Total de Requetes</p>
                                            <h4 class="mb-2"><?php echo e($countrequetes); ?></h4>
                                            <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>0%</span>cette mois</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="fas fa-file-signature font-size-24"></i>  
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end cardbody -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">Nouvelle Requetes</p>
                                            <h4 class="mb-2"><?php echo e($newrequetes); ?></h4>
                                            <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i>0%</span>cette mois</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class=" fas fa-folder-plus font-size-24"></i>  
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end cardbody -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">Total des Doléances</p>
                                            <h4 class="mb-2"><?php echo e($countdoleances); ?></h4>
                                            <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>0%</span>cette mois</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="fas fa-bars font-size-24"></i>  
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end cardbody -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">Total de Citoyens</p>
                                            <h4 class="mb-2"><?php echo e($totalclients); ?></h4>
                                            <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>0%</span>cette mois</p>
                                            </p>
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="ri-user-3-line font-size-24"></i>  
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end cardbody -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">

                            <div class="card">
                                <div class="card-body pb-0">

                                    <h4 class="card-title mb-4">Requetes</h4>

                                    <div class="text-center pt-3">
                                        <div class="row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <div class="d-inline-flex">
                                                    <h5 class="me-2"><?php echo e($countrequetes); ?></h5>
                                                    <div class="text-success font-size-12">
                                                        <i class="mdi mdi-menu-up font-size-14"> </i>0
                                                    </div>
                                                </div>
                                                <p class="text-muted text-truncate mb-0">Total</p>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <div class="d-inline-flex">
                                                    <h5 class="me-2"><?php echo e($requetesthisweek); ?></h5>
                                                    <div class="text-success font-size-12">
                                                        <i class="mdi mdi-menu-up font-size-14"> </i>
                                                    </div>
                                                </div>
                                                <p class="text-muted text-truncate mb-0">Cette semaine</p>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-sm-4">
                                                <div class="d-inline-flex">
                                                    <h5 class="me-2"><?php echo e($requetesthismonth); ?></h5>
                                                    <div class="text-success font-size-12">
                                                        <i class="mdi mdi-menu-up font-size-14"> </i>
                                                    </div>
                                                </div>
                                                <p class="text-muted text-truncate mb-0">cette mois</p>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                                <div class="card-body py-0 px-2">
                                    <div id="area_chart" class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <h4 class="card-title mb-4">Plaintes & Suggestions</h4>

                                    <div class="text-center pt-3">
                                        <div class="row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <div>
                                                    <h5>1,493</h5>
                                                    <p class="text-muted text-truncate mb-0">Total</p>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <div>
                                                    <h5>4,960</h5>
                                                    <p class="text-muted text-truncate mb-0">Cette semaine</p>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-sm-4">
                                                <div>
                                                    <h5>9,142</h5>
                                                    <p class="text-muted text-truncate mb-0">Cette mois</p>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                                <div class="card-body py-0 px-2">
                                    <div id="column_line_chart" class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>

                                    <h4 class="card-title mb-4">Derniers Requêtes</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
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
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php $__currentLoopData = $lastrequetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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



                                                        </tr>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </tbody>
                                            <!-- end tbody -->
                                        </table>
                                        <!-- end table -->
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end">
                                        <select class="form-select shadow-none form-select-sm" id="mois">
                                                <option selected>Mois Actuel</option>
                                                <option value="1" data-requetes="<?php echo e($requetsmensuel[1]); ?>" data-suggestion="<?php echo e($suggestionmensuel[1]); ?>">Jan</option>
                                                <option value="2" data-requetes="<?php echo e($requetsmensuel[2]); ?>" data-suggestion="<?php echo e($suggestionmensuel[2]); ?>">Fév</option>
                                                <option value="3" data-requetes="<?php echo e($requetsmensuel[3]); ?>" data-suggestion="<?php echo e($suggestionmensuel[3]); ?>">Mars</option>
                                                <option value="4" data-requetes="<?php echo e($requetsmensuel[4]); ?>" data-suggestion="<?php echo e($suggestionmensuel[4]); ?>">Avr</option>
                                                <option value="5" data-requetes="<?php echo e($requetsmensuel[5]); ?>" data-suggestion="<?php echo e($suggestionmensuel[5]); ?>">Mai</option>
                                                <option value="6" data-requetes="<?php echo e($requetsmensuel[6]); ?>" data-suggestion="<?php echo e($suggestionmensuel[6]); ?>">Jui</option>
                                                <option value="7" data-requetes="<?php echo e($requetsmensuel[7]); ?>" data-suggestion="<?php echo e($suggestionmensuel[7]); ?>">Juill</option>
                                                <option value="8" data-requetes="<?php echo e($requetsmensuel[8]); ?>" data-suggestion="<?php echo e($suggestionmensuel[8]); ?>">Aout</option>
                                                <option value="9" data-requetes="<?php echo e($requetsmensuel[9]); ?>" data-suggestion="<?php echo e($suggestionmensuel[9]); ?>">Sep</option>
                                                <option value="10" data-requetes="<?php echo e($requetsmensuel[10]); ?>" data-suggestion="<?php echo e($suggestionmensuel[10]); ?>">Oct</option>
                                                <option value="11" data-requetes="<?php echo e($requetsmensuel[11]); ?>" data-suggestion="<?php echo e($suggestionmensuel[11]); ?>">Nov</option>
                                                <option value="12" data-requetes="<?php echo e($requetsmensuel[12]); ?>" data-suggestion="<?php echo e($suggestionmensuel[12]); ?>">Déc</option>


                                            </select>
                                    </div>
                                    <h4 class="card-title mb-4">Statistiques Mensuel</h4>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="text-center mt-4">
                                                <h5 id="totalrequetes">-</h5>
                                                <p class="mb-2 text-truncate">Requêtes</p>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-4">
                                            <div class="text-center mt-4">
                                                <h5>-</h5>
                                                <p class="mb-2 text-truncate">Plaintes</p>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-4">
                                            <div class="text-center mt-4">
                                                <h5 id="totalsuggestions">-</h5>
                                                <p class="mb-2 text-truncate">Suggestions</p>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <div class="mt-4">
                                        <div id="donut-chart" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function() {

            $("#mois").on("change",function(){
                var selectedVal = $(this).find("option:selected" ).attr('data-requetes');
                var selectedVal2 = $(this).find("option:selected" ).attr('data-suggestion');
                $('#totalrequetes').html(selectedVal);
                $('#totalsuggestions').html(selectedVal2);
            });  
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>