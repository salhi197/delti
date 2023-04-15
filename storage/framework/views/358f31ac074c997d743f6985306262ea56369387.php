<?php $__env->startSection('content'); ?>                    

<div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Utilisateurs</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Utilisateurs</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"><i class=" fas fa-user-plus"></i>  Nouveau Citoyen </h4>
                                    <hr>
                                    <br>
                                    <form class="needs-validation" method="post" action="<?php echo e(route('client.create',['type'=>'admin'])); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Nom</label>
                                                    <input name="nom" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Prénom</label>
                                                    <input name="prenom" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Téléphone</label>
                                                    <input name="telephone" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Email</label>
                                                    <input name="email" type="Email" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Wilaya</label>
                                                    <select name="wilaya" id="wilaya_select" class="form-select"  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $wilayas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($wilaya->id); ?>" <?php echo e($wilaya->id == (old('wilaya_id') ?? ($member->wilaya_id ?? '')) ? 'selected' : ''); ?>>
                                                                <?php echo e($wilaya->name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-6">
                                                    <label for="validationCustom02" class="form-label">Commune</label>
                                                    <select name="commune" class="form-select" id="commune_select" >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $communes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commune): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($commune->id); ?>" <?php echo e($commune->id == (old('commune_id') ?? ($member->commune_id ?? '')) ? 'selected' : ''); ?>>
                                                                <?php echo e($commune->name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        
                                                    </select>
                                                </div>
                                                <br>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="validationCustom05" class="form-label">Date de Naissance</label>
                                                        <input name="date_naissance" type="date" class="form-control" id="validationCustom05"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="validationCustom02" class="form-label">Sexe</label>
                                                        <select name="sexe" class="form-select" id="validationCustom03" required>
                                                            <option selected disabled value="">Choisir</option>
                                                            <option>Homme</option>
                                                            <option>Femme</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="validationCustom05" class="form-label">N° pièce d'identité * (Passeport, CIN)</label>
                                                        <input name="piece_identite" type="text" class="form-control" id="validationCustom05"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="validationCustom05" class="form-label">Date de Délivrance</label>
                                                        <input name="date_delivrance" type="date" class="form-control" id="validationCustom05">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <br>
                                        <div>
                                            <button class="btn btn-primary" type="submit">Ajouter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>


        function watchWilayaChanges() {
            $('#wilaya_select').on('change', function (e) {
                e.preventDefault();
                var $communes = $('#commune_select');
                var $communesLoader = $('#commune_select_loading');
                var $iconLoader = $communes.parents('.input-group').find('.loader-spinner');
                var $iconDefault = $communes.parents('.input-group').find('.material-icons');
                $communes.hide().prop('disabled', 'disabled').find('option').not(':first').remove();
                $communesLoader.show();
                $iconDefault.hide();
                $iconLoader.show();
                $.ajax({
                    dataType: "json",
                    method: "GET",
                    url: "/api/static/communes/ " + $(this).val()
                })
                    .done(function (response) {
                        $.each(response, function (key, commune) {
                            $communes.append($('<option>', {value: commune.id}).text(commune.name));
                        });
                        $communes.prop('disabled', '').show();
                        $communesLoader.hide();
                        $iconLoader.hide();
                        $iconDefault.show();
                    });
            });
        }


        $(document).ready(function () {
            watchWilayaChanges();
        });




    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>