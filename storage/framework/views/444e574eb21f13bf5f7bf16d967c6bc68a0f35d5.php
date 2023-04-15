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
                                <h3 class="mb-sm-0">Bienvenue <?php echo e(Auth::guard('client')->user()->nom ?? Auth::guard('client')->user()->name ?? ''); ?></h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                                <div class="qty mt-5">
                                    <span class="minus bg-dark">-</span>
                                    <input type="number" class="count" name="qty" value="<?php echo e(Auth::guard('client')->user()->count); ?>">
                                    <span class="plus bg-dark">+</span>
                                </div>                            
                        </div><!-- end col -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>