<?php $__env->startSection('content'); ?>                    

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Suggestion</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Suggestions</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ** TEST ** -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <!-- Tab panes -->
                                    <div class="tab-content p-3 text-muted">
                                        <div class="tab-pane active" id="home12" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <hr>
                                                            <form class="needs-validation" method="post"  action="<?php echo e(route('suggestion.store')); ?>" enctype="multipart/form-data">
                                                                <?php echo csrf_field(); ?>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Nom *</label>
                                                                            <input name="nom_s" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Prénom *</label>
                                                                            <input name="prenom_s" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Wilaya</label>
                                                                            <select class="select2 form-control" id="wilaya_s" name="wilaya_s">
                                                                                <option value="" > -- Séléctionner-- </option>
                                                                                <?php $__currentLoopData = $wilayas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <option value="<?php echo e($wilaya->id); ?>" id="<?php echo e($wilaya->name); ?>" <?php echo e($wilaya->id == (old('wilaya_id') ?? ($member->wilaya_id ?? '')) ? 'selected' : ''); ?>>
                                                                                        <?php echo e($wilaya->name); ?>   
                                                                                    </option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                            </select>                                                    

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Commune</label>
                                                                            <select class=" form-control" name="commune_s" id="commune_s">
                                                                                <option value="" > -- Séléctionner-- </option>
                                                                                <?php $__currentLoopData = $wilayas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <optgroup label="<?php echo e($wilaya->nom ?? $wilaya->name); ?>">
                                                                                        <?php $__currentLoopData = $wilaya->communes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commune): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                            <option value="<?php echo e($commune->id); ?>"  id="<?php echo e($commune->name); ?>" >
                                                                                                <?php echo e($commune->name); ?>

                                                                                            </option>

                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                                    </optgroup>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                
                                                                                
                                                                                
                                                                            </select>                                                    

                                                                            
                                                                        </div>
                                                                        <br>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Secteur *</label>
                                                                                <select class=" select2 form-control" name="secteur_s" id="secteur">
                                                                                <option value="" > -- Séléctionner-- </option>

                                                                                    <?php $__currentLoopData = $secteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option value="<?php echo e($secteur->id); ?>" id="<?php echo e($secteur->type); ?>" >
                                                                                            <?php echo e($secteur->type ?? ''); ?>

                                                                                        </option>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                </select>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Objet de la Suggestion</label>
                                                                                <input name="objet_s" type="text" class="form-control" id="validationCustom05">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Suggestion</label>
                                                                                <textarea name="suggestion_s" class="form-control"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <button class="btn btn-primary" type="submit">Valider</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>


                                    </div>
    
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <!-- end col -->
                    </div>                    
                    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>

    $('#wilaya_s').on('change',function(){
        var selectedVal = $(this).find("option:selected" ).attr('id');
        console.log(selectedVal)
        $('#commune_s > optgroup[label="'+selectedVal+'"]')
            .show()
            .siblings("optgroup")
            .css("display","none");

    })

    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>