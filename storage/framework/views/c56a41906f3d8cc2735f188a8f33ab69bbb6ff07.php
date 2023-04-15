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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home12" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Citoyen</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-bs-toggle="tab" href="#profile12" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Association</span> 
                                            </a>
                                        </li>

                                                                                
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#messages12" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                <span class="d-none d-sm-block">Economic </span>   
                                            </a>
                                        </li>

                                    </ul>
                                    <br>


                                    <!-- Tab panes -->
                                    <div class="tab-content p-3 text-muted">
                                        <div class="tab-pane active" id="home12" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title"><i class=" fas fa-user-plus"></i>  Nouveau Citoyen</h4>
                                                            <hr>
                                                            <br>
                                                            <form class="needs-validation" method="post"  action="<?php echo e(route('client.store.citoyen')); ?>" enctype="multipart/form-data">
                                                                <?php echo csrf_field(); ?>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Nom *</label>
                                                                            <input name="nom_c" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Prénom *</label>
                                                                            <input name="prenom_c" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Téléphone *</label>
                                                                            <input name="telephone_c" type="number" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Email *</label>
                                                                            <input name="email_c" type="Email" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Wilaya : *</label>
                                                                                    <select class=" select2 form-control" id="wilaya_c" name="wilaya_c">
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
                                                                            <label for="validationCustom02" class="form-label">Commune :  * </label>
                                                                            <select class="form-control" name="commune_c" id="commune_c">
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
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Naissance</label>
                                                                                <input name="date_naissance_c" type="date" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Sexe *</label>
                                                                                <select name="sexe_c" class="form-select"  required>
                                                                                    <option selected disabled value="">Choisir</option>
                                                                                    <option value="homme">Homme</option>
                                                                                    <option value="femme">Femme</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">N° pièce d'identité * (Passeport)</label>
                                                                                <input name="piece_identite_c" type="number" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Délivrance *</label>
                                                                                <input name="date_delivrance_c" type="date" class="form-control" id="validationCustom05">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Mot de Passe</label>
                                                                            <input name="password_c" type="password" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Confirmer Mot de Passe</label>
                                                                            <input name="" type="password" class="form-control" id="validationCustom05"
                                                                                >
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
                                        <div class="tab-pane" id="profile12" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title"><i class=" fas fa-user-plus"></i>  Nouveau Association</h4>
                                                            <hr>
                                                            <br>
                                                            <form class="needs-validation" method="post"  action="<?php echo e(route('client.store.association')); ?>" enctype="multipart/form-data">
                                                                <?php echo csrf_field(); ?>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Nom</label>
                                                                            <input name="nom_a" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Prénom</label>
                                                                            <input name="prennom_a" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Téléphone</label>
                                                                            <input name="telephone_a" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Email</label>
                                                                            <input name="email_a" type="Email" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Wilaya : *</label>
                                                                            <select class="select2 form-control" id="wilaya_a" name="wilaya_a">
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
                                                                            <label for="validationCustom02" class="form-label">Commune :  * </label>
                                                                            <select class=" form-control" name="commune_a" id="commune_a">
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
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Naissance *</label>
                                                                                <input name="date_naissance_a" type="date" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Sexe *</label>
                                                                                <select name="sexe_a" class="form-select"  required>
                                                                                    <option selected disabled value="">Choisir</option>
                                                                                    <option value="homme">Homme</option>
                                                                                    <option value="femme">Femme</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">N° pièce d'identité * (Passeport)</label>
                                                                                <input name="piece_identite_a" type="number" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Délivrance</label>
                                                                                <input name="date_delivrance_a" type="date" class="form-control" id="validationCustom05">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="col-md-4">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Qualité</label>
                                                                            <input name="qualite_a" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Dénomination
                                                                            </label>
                                                                            <input name="denomination_a" type="text" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Numéro d'identification statistiques
                                                                            </label>
                                                                            <input name="nis_a" type="number" class="form-control" id="validationCustom05">
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Mot de Passe</label>
                                                                            <input name="password_a" type="password" class="form-control" id="validationCustom05">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Confirmer Mot de Passe</label>
                                                                            <input name="confirme_mot_de_passe_a" type="password" class="form-control" id="validationCustom05">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Caractère de l'association
                                                                            </label>
                                                                            <select name="caractere_a" class="form-select"  required>
                                                                                <option selected disabled value="">Choisir...</option>
                                                                                <option>Association</option>
                                                                                <option>Groupe de Citoyens</option>
                                                                            </select>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Type
                                                                            </label>
                                                                            <select name="type_a" class="form-select"  required>
                                                                                <option selected disabled value="">Choisir...</option>
                                                                                <option></option>
                                                                                <option></option>
                                                                            </select>
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
                                                <!-- end col -->
                                            </div>                                                                                       
 
                                        
                                        </div>
                                        <div class="tab-pane" id="messages12" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title"><i class=" fas fa-user-plus"></i>  Nouveau Opérateur économique</h4>
                                                            <hr>
                                                            <br>
                                                            <form class="needs-validation" method="post"  action="<?php echo e(route('client.store.operateur')); ?>" enctype="multipart/form-data">
                                                                <?php echo csrf_field(); ?>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Nom</label>
                                                                            <input name="nom_op" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Prénom</label>
                                                                            <input name="prenom_op" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Téléphone</label>
                                                                            <input name="telephone_op" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Email</label>
                                                                            <input name="email_op" type="Email" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Wilaya</label>
                                                                            <select class=" form-control" id="wilaya_op" name="wilaya_op">
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
                                                                            <select class=" form-control" name="commune_op" id="commune_op">
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
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Naissance *</label>
                                                                                <input name="date_naissance_op" type="date" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Sexe *</label>
                                                                                <select name="sexe_op" class="form-select"  required>
                                                                                    <option selected disabled value="">Choisir</option>
                                                                                    <option value="homme">Homme</option>
                                                                                    <option value="femme">Femme</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">N° pièce d'identité * (Passeport)</label>
                                                                                <input name="piece_identite_op" type="number" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Délivrance</label>
                                                                                <input name="date_delivrance_op" type="date" class="form-control" id="validationCustom05">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Qualité</label>
                                                                            <input name="qualité_op" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Status Juridique
                                                                            </label>
                                                                            <select class="form-select" name="status">

                                                                                <option value="">Séléctionner</option>
                                                                                <option value="ph">Personne physique</option>
                                                                                <option value="sarl">SARL</option>
                                                                                <option value="eurl">EURL</option>
                                                                                <option value="spa">SPA</option>
                                                                                <option value="snc">SNC</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-3">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Dénomination
                                                                            </label>
                                                                            <input name="denomination_op" type="text" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Numéro d'identification statistiques
                                                                            </label>
                                                                            <input name="nis_op" type="number" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Mot de Passe</label>
                                                                            <input name="password_op" type="password" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Confirmer Mot de Passe</label>
                                                                            <input name="confirme_mot_de_passe" type="password" class="form-control" id="validationCustom05"
                                                                                >
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
                                                <!-- end col -->
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

            $("#wilaya_c").on("change",function(){
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#commune_c > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            }); 
            
            $("#wilaya_a").on("change",function(){
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#commune_a > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            }); 
             
            $("#wilaya_op").on("change",function(){
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#commune_op > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });             

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