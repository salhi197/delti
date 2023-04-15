<?php $__env->startSection('content'); ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <!--
                                <h4 class="mb-sm-0">Acceuil</h4>
 
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
-->
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h3 class="mb-sm-0">Bienvenue <?php echo e(Auth::guard('client')->user()->nom ?? Auth::guard('client')->user()->name); ?></h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="card" style="background-color: #e30613; color: #fff; box-shadow: 0px -2px 31px -6px rgba(227,6,19,0.82);
                                -webkit-box-shadow: 0px -2px 31px -6px rgba(227,6,19,0.82);
                                -moz-box-shadow: 0px -2px 31px -6px rgba(227,6,19,0.82);">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2"></p>
                                            <h4 class="mb-2" style="color: #fff;">Commencer Compteur</h4>
                                            <p class="text-muted mb-0" style="color: #fff;"><span
                                                    class=" fw-bold font-size-12 me-2" style="color: #fff;">Commencer Votre Compteur . </p>
                                        </div>
                                        <div class="avatar-sm">
                                            <a href="<?php echo e(route('count')); ?>">
                                            <span class="avatar-title bg-light text-primary rounded-3">
                                                <i class="mdi mdi-plus font-size-24" ></i>
                                            </span>
                                        </a>
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-md-6">
                            <div class="card" style="background-color: #009640; color: #fff; box-shadow: 0px -2px 31px -6px rgba(0,150,64,0.82);
                                -webkit-box-shadow: 0px -2px 31px -6px rgba(0,150,64,0.82);
                                -moz-box-shadow: 0px -2px 31px -6px rgba(0,150,64,0.82);">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2"></p>
                                            <h4 class="mb-2" style="color: #fff;">Historique</h4>
                                            <p class="text-muted mb-0" style="color: #fff;"><span
                                                    class=" fw-bold font-size-12 me-2" style="color: #fff;">Consulter Votre Historique . </p>
                                        </div>
                                        <div class="avatar-sm">
                                            <a href="<?php echo e(route('histo')); ?>">
                                            <span class="avatar-title bg-light text-success rounded-3">
                                                <i class="mdi mdi-pencil-plus font-size-24"  style="color: #252b3b"></i>
                                            </span>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-md-6">
                            <div class="card-body align-items-center d-flex justify-content-center">
                                    <div class="d-flex">
                                    <?php echo QrCode::size(100)->generate('https://delti.power-evo.com/compteur/'.Auth::guard('client')->user()->id);; ?>

                                    </div>
                                </div><!-- end cardbody -->

                        </div><!-- end col -->

                    <div class="row">

                    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>