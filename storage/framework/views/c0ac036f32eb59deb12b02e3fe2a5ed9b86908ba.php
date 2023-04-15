<?php $__env->startSection('content'); ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Déposer une requête</h4>


                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body"
                                style="border-color: #252b3b; border: solid 3px; border-radius: 5px;">
                                <div class="tab-content p-3 text-muted">
                                    <div class="tab-pane active" id="home-1" role="tabpanel">
                                        <form action="<?php echo e(route('reclamation.store')); ?>" method="post">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="validationCustom03" class="form-label">Wilaya
                                                            *</label>
                                                        <select name="wilaya" class="form-select" id="validationCustom03" required>
                                                        <option value="" > -- Séléctionner-- </option>

                                                            <?php $__currentLoopData = $wilayas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($wilaya->id); ?>" id="<?php echo e($wilaya->name); ?>" <?php echo e($wilaya->id == (old('wilaya_id') ?? ($member->wilaya_id ?? '')) ? 'selected' : ''); ?>>
                                                                    <?php echo e($wilaya->name); ?>   
                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>


                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="validationCustom03" class="form-label">Daira*</label>
                                                        <select name="daira" class="form-select" id="validationCustom03" required>
                                                            <option value="" > -- Séléctionner-- </option>
                                                            <?php $__currentLoopData = $wilayas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <optgroup label="<?php echo e($wilaya->nom ?? $wilaya->name); ?>">
                                                                    <?php $__currentLoopData = $wilaya->dairas(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $daira): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($daira->id); ?>"  id="<?php echo e($daira->nom); ?>" >
                                                                            <?php echo e($daira->nom); ?>

                                                                        </option>

                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                </optgroup>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </select>


                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="validationCustom04" class="form-label">Commune
                                                            *</label>
                                                        <select name="commune" class="form-select" id="validationCustom03" required>
                                                        <option value="" > -- Séléctionner-- </option>

                                                        <?php $__currentLoopData = $dairas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $daira): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <optgroup label="<?php echo e($daira->nom); ?>">
                                                                <?php $__currentLoopData = $daira->communes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commune): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($commune->id); ?>" >
                                                                        <?php echo e($commune->name); ?>

                                                                    </option>

                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                            </optgroup>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Type de
                                                            requête *
                                                        </label>
                                                        <select name="type_requete" class="form-select"
                                                            id="validationCustom03" required>
                                                            <option value="">Sélectionner...
                                                            </option>
                                                            <option>...</option>
                                                        </select>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Secteur ou
                                                            entité concernée par la requête *

                                                        </label>
                                                        <select name="secteur" class="form-select"
                                                            id="validationCustom03" required>
                                                            <option value="">Sélectionner...
                                                            </option>
                                                            <option>...</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Organisme
                                                            concernée par la requête *

                                                        </label>
                                                        <select name="administration" class="form-select"
                                                            id="validationCustom03" required>
                                                            <option value="">Sélectionner...
                                                            </option>
                                                            <option>...</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01"
                                                            class="form-label">Administration concernée
                                                        </label>
                                                        <select name="sous_administration" class="form-select"
                                                            id="validationCustom03">
                                                            <option value="">Sélectionner...
                                                            </option>
                                                            <option>...</option>
                                                        </select>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Sujet de la
                                                            requête *

                                                        </label>
                                                        <select name="suhet_requete" class="form-select"
                                                            id="validationCustom03">
                                                            <option value="">Sélectionner...
                                                            </option>
                                                            <option>...</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Objet de la
                                                            requête *
                                                        </label>
                                                        <input name="titre_requete" type="email" class="form-control"
                                                            id="validationCustom01" placeholder="" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Contenu de la
                                                            requête *</label>
                                                        <textarea class="form-control"
                                                            name="contenu_requete"></textarea>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Lien vidéo
                                                        </label>
                                                        <input name="video" type="email" class="form-control"
                                                            id="validationCustom01" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Fichier
                                                            attaché

                                                        </label>
                                                        <input name="fichier" type="file" class="form-control"
                                                            id="customFile" />

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-grid mb-3">
                                                <button type="submit"
                                                    class="btn btn-primary btn-lg waves-effect waves-light"
                                                    style="background-color:#e30613 ; border-style: none;">Envoyer</button>
                                            </div>

                                        </form>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>