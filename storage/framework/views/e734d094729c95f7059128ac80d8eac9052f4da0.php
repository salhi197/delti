<div id="myModalCS<?php echo e($cs->id); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Modifier Courrier Secteur : </h5>


        </div>
        <div class="modal-body">
            <form method="post" action="<?php echo e(route('courrier.update',['courrier'=>$cs->id,'source'=>'secteur'])); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Type Courrier : </label>
                        <select value="<?php echo e($cs->secteur_cc ?? ''); ?>" value="<?php echo e($cs->secteur_cc ?? ''); ?>"  name="secteur_cc_edit" id="secteur_cc" class="form-control ">
                            <option value="">Séléctionner</option>  
                            <option <?php if($cs->type=="Départ"): ?> selected <?php endif; ?> value="Départ">Départ</option>  
                            <option <?php if($cs->type=="Arrivée"): ?> selected <?php endif; ?> value="Arrivée">Arrivée</option>  
                        </select>
                    </div>
                    <div class="col-md-6">

                        <label for="validationCustom05" class="form-label">Etat courrier  : </label>
                        <select value="<?php echo e($cs->etat_courrier_cs ?? ''); ?>" value="<?php echo e($cs->etat_courrier_cs ?? ''); ?>"  name="etat_courrier_cs_edit" id="etat_courrier_cs" class="form-control ">
                            <option value="">Séléctionner</option>  
                            <optgroup label="Départ">
                                <option <?php if($cs->etat_courrier_depart=="courrier"): ?> selected <?php endif; ?> value="courrier">Courrier</option>  
                                <option <?php if($cs->etat_courrier_depart=="rappel"): ?> selected <?php endif; ?> value="rappel">Rappel</option>  
                            </optgroup>
                            <optgroup label="Arrivée">
                                <option <?php if($cs->etat_courrier_depart=="reponse"): ?> selected <?php endif; ?> value="reponse">Réponse</option>  
                                <option <?php if($cs->etat_courrier_depart=="autre"): ?> selected <?php endif; ?> value="autre">Aurte</option>  
                            </optgroup>

                        </select>

                    </div>

                </div>
                <div class="row">
                    <!-- <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">Date corréspendance : </label>
                            <input value="<?php echo e($cs->piece_cc ?? ''); ?>"   name="piece_cc_edit" type="date" class="form-control"   >
                    </div> -->
                    <div class="col-md-6">

                            <label for="validationCustom05" class="form-label">Date  : </label>
                            <input value="<?php echo e($cs->envoi ?? ''); ?>"   name="date_envoi_cs_edit"  max="<?php echo e(date('Y-m-d')); ?>"  type="date" class="form-control"   >
                    </div>
                </div>
                                <div class="row">                        
                                    <div class="col-md-6" id="secteur3">
                                        <div class="mb-3">
                                            <label for="validationCustom02" class="form-label">Secteur</label>
                                            <select class="form-control"  name="secteur_cs_edit" id="secteur2">
                                            <option value="" > -- Séléctionner-- </option>

                                                <?php $__currentLoopData = $secteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php if($cs->secteur == $secteur->id): ?> selected <?php endif; ?> value="<?php echo e($cs->id); ?>" id="<?php echo e($cs->type); ?>" >
                                                        <?php echo e($secteur->type ?? ''); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6" id="administrationdiv3">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Administration</label>
                                            <select value="<?php echo e($cs->administration_cs ?? ''); ?>"  name="administration_cs_edit" id="administration3" class="form-select "  >
                                                <option value="" > -- Séléctionner-- </option>
                                                <?php $__currentLoopData = $secteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <optgroup label="<?php echo e($cs->type); ?>">
                                                            <?php $__currentLoopData = $secteur->administrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option <?php if($cs->administration == $administration->id): ?> selected <?php endif; ?> value="<?php echo e($administration->id); ?>"><?php echo e($administration->type); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </optgroup>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>                                                    
                                        </div>
                                    </div>
                                </div>
                                        <div class="row">
                                            <div class="col-md-6" id="sousadministrationdiv3">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Sous Administration</label>
                                                    <select value="<?php echo e($cs->administration_cs ?? ''); ?>"  name="sousadministration_cs_edit" id="sousadministration3" class="form-select "  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $administrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <optgroup label="<?php echo e($administration->type); ?>">
                                                                    <?php $__currentLoopData = $administration->sousadministrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sousadministration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($sousadministration->id); ?>"><?php echo e($sousadministration->label ?? ''); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </optgroup>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                                                                     
                                                    
                                                </div>
                                            </div>
                    
                    </div>
                    
                    <div class="col-md-12">
                        <div class="col-12">
                            <br>
                            <label for="validationCustom05" class="form-label">Piece Joint</label>
                            <input value="<?php echo e($cs->piece_cs ?? ''); ?>" value="<?php echo e($cs->piece_cs ?? ''); ?>"  name="piece_cs_edit" type="file" class="form-control"   >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-12">
                            <br>
                            <label for="validationCustom05" class="form-label">Message</label>
                            <textarea class="form-control" name="message_cs_edit"><?php echo e($cs->message); ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-12">
                            <br>
                            <label for="validationCustom05" class="form-label">Enregister en tant que Projet : </label>
                            <input type="checkbox" name="trash_cs_edit" />
                        </div>
                    </div>                    

                </div>
                <br>
                    <div class="modal-footer">
                        <button type="button" id="fermer" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Sauvegarder</button>
                    </div>


            </form>

            

        </div>
       
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>