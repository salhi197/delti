<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Doleances : </h4>
                                <br>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Doleances </li>
                                    </ol>
                                </div>
                                <br>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h4 class="mb-sm-0"><span id="code_initial_html"></span> </h4>
                        </div>

                    </div>
                    <br>
                    <!-- end page title -->


                    <br>                    
                    <!--Information-->
            <form class="needs-validation" method="post" action="<?php echo e(route('doleance.create')); ?>">
                <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                        <div class="row">
                                            <h6>Information doleance : </h6>
                                                <hr>
                                                <div class="col-6">
                                                    <label for="validationCustom04" class="form-label">Code doleance : </label>
                                                    <input value="" name="code_transfert" 
                                                    id="code_transfert"
                                                    readonly type="text" class="form-control"  required>
                                                </div>
                                                <div class="col-6">
                                                    <label for="validationCustom04" class="form-label">Code Initial</label>
                                                    <input value="" name="code_initial" 
                                                    id="code_initial"
                                                    readonly type="text" class="form-control"  required>
                                                </div>



                                                <div class="col-md-3">
                                                    <br>
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Date</label>
                                                        <input value="" name="datedoleance" id="date_doleance" type="date" max="<?php echo e(date('Y-m-d')); ?>"  class="form-control" 
                                                            value="Mark" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <br>
                                                    <div class="mb-3">
                                                        <label for="validationCustom02" class="form-label">Wilaya</label>
                                                        <select class=" select2 form-control" id="wilaya_select" value="<?php echo e($audience->wilaya ?? ''); ?>" name="wilaya">
                                                            <option value="" > -- Séléctionner-- </option>
                                                            <?php $__currentLoopData = $wilayas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($wilaya->id); ?>" <?php if($wilaya->id==$audience->wilaya): ?> selected <?php endif; ?>  >
                                                                    <?php echo e($wilaya->name); ?>   
                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </select>                                                    

                                                    </div>
                                                </div>
                                            
                                                    <div class="col-md-3">
                                                        <br>
                                                        <label for="validationCustom04" class="form-label">Source</label>
                                                        <select disabled class=" select2 form-select" value="<?php echo e($audience->source ?? ''); ?>" name="source" id="source"  required>
                                                            <?php $__currentLoopData = $sourcerequetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sourcerequete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if(strtoupper(substr($sourcerequete->type, 0, 1))!="W"): ?>
                                                                    <option value="<?php echo e(strtoupper(substr($sourcerequete->type, 0, 1))); ?>" ><?php echo e($sourcerequete->type); ?></option>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>  
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="col-12">
                                                            <br>
                                                            <label for="validationCustom05" class="form-label">Numéro  </label>
                                                            <input value="" name="numero" onKeyPress="if(this.value.length==6) return false" required type="number" class="form-control"  id="numero" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="col-12">
                                                            <br>
                                                            <label for="validationCustom05" class="form-label">Code Audience:   </label>
                                                            <input value="<?php echo e($audience->code_initial); ?>" name="code_audience" readonly class="form-control"/>
                                                        </div>
                                                    </div>
                                        <br>
                                            <hr>
                                            <h6>Information Citoyen : </h6>


                                            
                                            <div class="col-6">
                                                <br>
                                                <label for="validationCustom04" class="form-label">Type (Citoyen/Entreprise/Association)</label>
                                                <select class="select2 form-control" value="<?php echo e($audience->etat_client ?? ''); ?>" name="etat_client">
                                                        <option value="Citoyen">Citoyen</option>
                                                        <option value="Entreprise">Entreprise</option>
                                                        <option value="Association">Association</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <br>
                                                <label for="validationCustom04" class="form-label">Nom prénom / dénomination : </label>
                                                <div class="input-group">
                                                    <select class="form-control " id="client" value="<?php echo e($audience->client ?? ''); ?>" name="client">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($client->id); ?>" <?php if($audience->client==$client->id): ?> selected <?php endif; ?>  >
                                                                <?php echo e($client->nom); ?>

                                                                <?php echo e($client->prenom); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </select>

                                                    <span class="input-group-btn">
                                                    <a href="<?php echo e(route('client.show.create')); ?>" class="btn btn-primary" type="button"><i class="fa fa-plus"></i></a>
                                                    </span>
                                                </div>                                                

                                            </div>
                                            <br>
                                            
                                            


                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                        <div class="row">
                                            <h6>Etat de la doleance</h6>
                                            <hr>
                                            <div class="col-md-12">
                                                <div class="col-12">
                                                    <br>
                                                </div> 
                                                <div class="col-12">
                                                
                                                    <label for="validationCustom04" class="form-label"> Etat de la doleance: </label>
                                                    <select class="form-control" value="<?php echo e($audience->categorie ?? ''); ?>" name="categorie" id="categorie">
                                                    <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($categorie->id); ?>" id="<?php echo e($categorie->label); ?>">
                                                                    <?php echo e($categorie->label ?? ''); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </select>                                                  
  
                                                </div> 
                                                <div class="col-12" id="souscategoriediv">
                                                    <br>
                                                    <label for="validationCustom04" class="form-label"> Détail : </label>
                                                        <select class="form-control"  value="<?php echo e($audience->souscategorie ?? ''); ?>" name="souscategorie" id="souscategorie">
                                                        <option value="" > -- Séléctionner-- </option>

                                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <optgroup label="<?php echo e($categorie->label); ?>">
                                                            <?php $__currentLoopData = $categorie->getSubs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $souscategorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option id="<?php echo e($souscategorie->label); ?>" value="<?php echo e($souscategorie->id); ?>"><?php echo e($souscategorie->label); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                            </optgroup>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </select>

                                                </div> 
                                                <div class="col-12" id="soussouscategoriediv">
                                                    <br>
                                                    <label for="validationCustom04" class="form-label"> Sous Détails : </label>
                                                        <select class="form-control"  value="<?php echo e($audience->soussouscategorie ?? ''); ?>" name="soussouscategorie" id="soussouscategorie">
                                                        <option value="" > -- Séléctionner-- </option>

                                                        <?php $__currentLoopData = $souscategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $souscategorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <optgroup label="<?php echo e($souscategorie->label); ?>">
                                                                <?php $__currentLoopData = $souscategorie->soussouscategories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soussouscategorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($soussouscategorie->id); ?>"><?php echo e($soussouscategorie->label); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                            </optgroup>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </select>

                                                    </div> 

                                                
                                                
                                                                                                 
                                            </div>

                                        </div>
                                    
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <!-- end col -->
                    </div>
                    <!--Fin Information-->


                    <!--doleance-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                        <h4 class="card-title">doleance</h4>
                                        <hr>
                                        <br>                                    
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Wilaya</label>
                                                    <select disabled class=" select2 form-control" id="wilaya"  value="<?php echo e($audience->wilaya ?? ''); ?>" name="wilaya">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $wilayas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($wilaya->id); ?>" id="<?php echo e($wilaya->name); ?>" >
                                                                <?php echo e($wilaya->name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>                                                    

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Daira</label>
                                                    <select class=" form-control" value="<?php echo e($audience->daira ?? ''); ?>" name="daira" id="daira">
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
                                                    <label for="validationCustom02" class="form-label">Commune</label>
                                                    <select class=" form-control" value="<?php echo e($audience->commune ?? ''); ?>" name="commune" id="commune">
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
                                            
                                            
                                        <div class="col-md-3" id="secteur">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Secteur</label>
                                                    <select class="form-control" name="secteur" id="secteur">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $secteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option <?php if($secteur->id==$audience->secteur): ?> selected <?php endif; ?> value="<?php echo e($secteur->id); ?>" id="<?php echo e($secteur->type); ?>" >
                                                                <?php echo e($secteur->type ?? ''); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3" id="administrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Administration</label>
                                                    <select name="administration" id="administration" class="form-select "  >
                                                            <option value="" > -- Séléctionner-- </option>
                                                                <?php $__currentLoopData = $secteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <optgroup label="<?php echo e($secteur->type); ?>">
                                                                    <?php $__currentLoopData = $secteur->administrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option <?php if($administration->id == $audience->administartion): ?> selected <?php endif; ?> id="<?php echo e($administration->type); ?>" <?php if($administration->id==$audience->administration): ?> selected <?php endif; ?> value="<?php echo e($administration->id); ?>"><?php echo e($administration->type); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </optgroup>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-3" id="sousadministrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Administration N1 </label>
                                                    <select name="sousadministration" id="sousadministration" class="form-select "  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                            <?php $__currentLoopData = $administrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <optgroup label="<?php echo e($administration->type); ?>">
                                                                    <?php $__currentLoopData = $administration->sousadministrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sousadministration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option <?php if($sousadministration->id == $audience->sousadministration): ?> selected <?php endif; ?> id="<?php echo e($sousadministration->label); ?>" value="<?php echo e($sousadministration->id); ?>"><?php echo e($sousadministration->label  ?? ''); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </optgroup>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                                                                     
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="soussousadministrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Administration N2 </label>
                                                    <select name="soussousadministration" id="soussousadministration" class="form-select "  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $administrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php $__currentLoopData = $administration->sousadministrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sousadministration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <optgroup label="<?php echo e($sousadministration->type); ?>">
                                                                        <?php $__currentLoopData = $sousadministration->soussousadministrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soussousadministration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option id="<?php echo e($soussousadministration->label); ?>" value="<?php echo e($soussousadministration->id); ?>"><?php echo e($soussousadministration->label  ?? ''); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </optgroup>

                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                                                                     
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-3" id="soussoussousadministrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Administration N3 </label>
                                                    <select name="soussoussousadministration" id="soussoussousadministration" class="form-select "  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $administrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php $__currentLoopData = $administration->sousadministrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sousadministration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php $__currentLoopData = $sousadministration->soussousadministrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soussousadministration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <optgroup label="<?php echo e($soussousadministration->type); ?>">
                                                                                <?php $__currentLoopData = $soussousadministration->soussoussousadministrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soussoussousadministration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <option value="<?php echo e($soussoussousadministration->id); ?>"><?php echo e($soussoussousadministration->label  ?? ''); ?></option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </optgroup>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>                                            
                                            <div class="col-md-6" id="sujetadmindiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Sujet Administrations : </label>
                                                    <select name="sujet" class="form-select " id="sujetadmin"  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                            <?php $__currentLoopData = $administrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <optgroup label="<?php echo e($administration->type); ?>">
                                                                    <?php $__currentLoopData = $administration->sujets(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sujet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option <?php if($sujet->id==$audience->sujet): ?> selected <?php endif; ?> value="<?php echo e($sujet->id); ?>" ><?php echo e($sujet->type); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </optgroup>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Titre</label>
                                                    <input value="<?php echo e($audience->titre ?? ''); ?>" name="titre" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Description</label>
                                                    <textarea value="<?php echo e($audience->description ?? ''); ?>" name="description" class="form-control" ></textarea>
                                                </div>

                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Mots Clés</label>
                                                    <textarea value="<?php echo e($audience->mots ?? ''); ?>" name="mots" class="form-control" ></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Lien vidéo</label>
                                                    <input value="<?php echo e($audience->video ?? ''); ?>" name="video" type="text" class="form-control" id="validationCustom05"
                                                        >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Pièce Jointe</label>
                                                    <div class="input-group" >
                                                        <input type="file" class="form-control" >
    
                                                        <span class="input-group-text"><i class=" fas fa-file-archive"></i></span>
                                                    </div><!-- input-group -->

                                                </div>
                                            </div>
                                        </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <button class="btn btn-primary">
                                                        Sauvegarder
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                    </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                        <div class="row">
                                            <h6>Audience</h6>
                                            <hr>
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal" style="margin-left: -20px;"><i class=" fas fa-plus-circle"></i>  Nouveau</button>
                                                            <!-- First modal dialog -->
                                                            <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="myModalLabel">Ajouter Audience : </h5>
                                                                    </div>
                                                                        
                                                                        <div class="modal-body">

                                                                            <form method="post" id="myForm" action="<?php echo e(route('audience.store')); ?>" class="needs-validation" enctype="multipart/form-data">    
                                                                                <?php echo csrf_field(); ?>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label  class="form-label">Date de l'Audience</label>
                                                                                            <input type="date" max="<?php echo e(date('Y-m-d')); ?>" class="form-control" value="<?php echo e($audience->date_audience ?? ''); ?>" name="date_audience" 
                                                                                                required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom05" class="form-label">Chargé de l'Audience</label>
                                                                                            <select value="<?php echo e($audience->charge_audience ?? ''); ?>" name="charge_audience" class="form-select"  id="validationCustom03" >
                                                                                                <option value="">Séléctionner</option>
                                                                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <option <?php if($user->id==$audience->charge_audience): ?> selected <?php endif; ?> value="<?php echo e($user->id); ?>"><?php echo e($user->nom); ?> <?php echo e($user->prenom); ?></option>
                                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom05" class="form-label">Sujet</label>
                                                                                            <input type="text" class="form-control" value="<?php echo e($audience->sujet ?? ''); ?>" name="sujet" id="validationCustom05"
                                                                                                required>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="row">
                                                                                </div>

                                                                                <div class="row" id="type1">
                                                                                    <div class="col-md-6" id="souscategorie2">
                                                                                        <label for="validationCustom03" class="form-label"> Détail </label>
                                                                                        <select class="form-control" value="<?php echo e($audience->type ?? ''); ?>" name="type" >
                                                                                            <?php $__currentLoopData = $souscategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $souscategorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <?php if($souscategorie->categorie == 6): ?>
                                                                                                    <option value="<?php echo e($souscategorie->label ?? ''); ?>">
                                                                                                        <?php echo e($souscategorie->label ?? ''); ?>

                                                                                                    </option>
                                                                                                <?php endif; ?>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">

                                                                                </div>
                                                                                <br>
                                                                                <div class="row" id>
                                                                                    <div class="col-md-12">
                                                                                        <label for="validationCustom03" class="form-label">Détails : </label>
                                                                                        <textarea class="form-control" value="<?php echo e($audience->details ?? ''); ?>" name="details"></textarea>
                                                                                    </div>

                                                                                </div>

                                                                                <br>
                                                                                <div>
                                                                                    <button class="btn btn-primary" id="submit" > Sauvgarder </button>
                                                                                </div>
                                                                            </form>
                                                                        
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; margin-left: -20px;">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Date de l'audience</th>
                                                                    <th>Code</th>
                                                                    <th>Chargé de l'audience</th>
                                                                    <th> Sujet </th>

                                                                    <!-- <th> Pièce </th> -->

                                                                    <th>Action</th>
                                                                </tr>
                                                                
                                                            </thead>
                                                            <tbody>
                                                                    <tr>
                                                                        <td><?php echo e($audience->id ?? ''); ?></td>
                                                                        <td><?php echo e($audience->date_audience ?? ''); ?></td>
                                                                        <td><?php echo e($audience->code_initial ?? ''); ?></td>
                                                                        <td>
                                                                        <?php echo e($audience->charger()['nom'] ?? ''); ?>

                                                                        <?php echo e($audience->charger()['prenom'] ?? ''); ?>

                                                                        </td>
                                                                        <td>
                                                                            <?php echo e(str_replace('%'," ",$audience->sujet)); ?>    
                                                                        </td>
                                                                        <!-- <td>
                                                                            <a href="<?php echo e(asset('public/'.$audience->piece)); ?>" class="btn btn-primary" download>
                                                                                <?php echo e($audience->filename ?? 'Fichier'); ?>

                                                                            </a>

                                                                        </td>
 -->
                                                                        <td>
                                                                            <a href="<?php echo e(route('audience.edit',['audience'=>$audience->id])); ?>">
                                                                                <i class=" fas fa-edit"></i>
                                                                            </a>
                                                                            <a href="<?php echo e(route('audience.destroy',['audience'=>$audience->id])); ?>"
                                                                            onclick="return confirm('Confirmer ?')"
                                                                            >
                                                                                <i class="fas fa-trash-alt"></i>
                                                                            </a>
                                                                        </td>

                                                                    </tr>
                                                            </tbody>

                                                        </table>
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

                    </div>
                    <!-- Fin doleance -->
                    <!-- Audience -->

                    
                    <!-- Audience -->

                    <!-- Audience -->

                    <!--courrier -->
                    

                    

            <!-- end page title -->

            <!--invest-->
                               
                    
            </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
        $(document).ready(function() {

            $('#wilaya').change();
            $('#fiche3').hide()
            $('#fiche1').hide()
            $('#fiche2').hide()

            $('#invesstissement').hide();
            $('#souscategorie2').hide()
            //$('#administrationdiv').hide()
            // $('#sujetadmindiv').hide()
            // $('#sousadministrationdiv').hide()
            $('#soussousadministrationdiv').hide()
            $('#soussoussousadministrationdiv').hide()
            $('#soussouscategoriediv').hide()
            $('#souscategoriediv').hide()
            $('#administrationdiv2').hide()
            $('#sousadministrationdiv2').hide()
                $('#checkboxinv').change(function() {
                    if(this.checked) {
                        $('#invesstissement').show();
                    }else{
                        $('#invesstissement').hide();
                    }
                });
            $('#souscategorie2').hide()
            // $('#administrationdiv').hide()

            // $('#sousadministrationdiv').hide()
            
            $('#soussouscategoriediv').hide()
            $('#souscategoriediv').hide()
 
            $('#administrationdiv2').hide()
            $('#sousadministrationdiv2').hide()

            
            $('#transfer').click( function(e) {
                e.preventDefault();
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');                
                ///////////////////                
                $.ajax({
                        url: '/audience/create/transfer',
                        type: 'post',
                        dataType: 'json',
                        data: {_token: CSRF_TOKEN, data:$('form#myForm').   serialize()},
                        success: function(response) {
                            console.log(response)
                            // window.open("https://www.youraddress.com","_self")
                            window.open('/doleance/create/audience/'+response.audience,"_self"); //This will open Google in a new window.

                        },error: function(err){
                            console.log(err)
                        }
                    });
            });        

            $("#categorie").on("change",function(){
                $('#souscategorie').val("").change();
                $('#soussouscategorie').val("").change();
                $('#souscategoriediv').show()
                $('#soussouscategoriediv').hide()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                // console.log($('optgroup[label="'+selectedVal+'"]'));
                

                if($('#souscategorie optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#souscategoriediv').show()
                    $('#souscategorie > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

                }else{
                $('#souscategoriediv').hide()    
                }
            });

            $("#type_courrier_cc").on("change",function(){
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                if($('#etat_courrier_cc optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#etat_courrier_ccdiv').show()
                    $('#etat_courrier_cc > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

                }else{
                $('#etat_courrier_ccdiv').hide()    
                }
            });

            
            $("#souscategorie").on("change",function(){
                $('#soussouscategoriediv').show()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)

                if($('#soussouscategorie optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#soussouscategoriediv').show()
                    $('#soussouscategorie > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

                }else{
                $('#soussouscategoriediv').hide()    
                }
            });


            $("#administration2").on("change",function(){
                $('#sousadministrationdiv2').show()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)

                if($('#administration2 optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#administration2div').show()
                    $('#administration2 > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

                }else{
                $('#administration2div').hide()    
                }
            });

            $("#administration").on("change",function(){
                $('#sousadministrationdiv').show()
                $('#sujetadmindiv').show()
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal+"+////////+")
    
                if($('#sousadministration optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#sousadministrationdiv').show()
                    $('#sousadministration > optgroup[label="'+selectedVal+'"]')
                        .show()
                        .siblings("optgroup")
                        .css("display","none");

                }else{
                $('#sousadministrationdiv').hide()    
                }

                var selectedVal = $(this).find("option:selected" ).attr('id');
                
    
                if($('#sujetadmin optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#sujetadmindiv').show()
                    $('#sujetadmin > optgroup[label="'+selectedVal+'"]')
                        .show()
                        .siblings("optgroup")
                        .css("display","none");

                }else{
                $('#sujetadmindiv').hide()    
                }
            });
            $("#sousadministration").on("change",function(){
                $('#soussousadministrationdiv').show()
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log($('#soussousadministration optgroup[label="'+selectedVal+'"]').children())
                if($('#soussousadministration optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#soussousadministrationdiv').show()
                    $('#soussousadministration > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

                }else{
                $('#soussousadministrationdiv').hide()    
                }
            });            
            $("#soussousadministration").on("change",function(){
                $('#soussoussousadministrationdiv').show()
                var selectedVal = $(this).find("option:selected" ).attr('id');
                // console.log(selectedVal)
                if($('#soussoussousadministration optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#soussoussousadministrationdiv').show()
                    $('#soussoussousadministration > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");
                }else{
                $('#soussoussousadministrationdiv').hide()    
                }
            });            


            $("#secteur2").on("change",function(){
                $('#administrationdiv2').show()                
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)

                if($('#administration2 optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#administration2div').show()
                    $('#administration2 > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");
                }else{
                $('#administration2div').hide()    
                }
            });  

            $("#secteur").on("change",function(){
                $('#administrationdiv').show()
                ////////////////////////////////
                $('#sousadministration').val("")
                $('#administration').val("")

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)

                if($('#administration optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#administrationdiv').show()
                    $('#administration > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

                }else{
                    $('#administrationdiv').hide()    
                    $('#sousadministrationdiv').hide()    
                    $('#soussousadministrationdiv').hide()    
                }
            });  

            $("#daira").on("change",function(){
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)

                $('#commune > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

            });  





            $('#typedoleance').on('change',function(){
                var value = this.value;
                console.log(value)
                console.log(value)
                if(value==5){
                    console.log('rrrrrrrrrrrrrrrrrrrrrrrr')
                    $('#secteur').hide()
                    $('#administrationdiv').hide()
                    $('#sousadministrationdiv').hide();
                    $('#soussousadministrationdiv').hide();
                    $('#soussoussousadministrationdiv').hide();
                    // $('#sujetadmindiv').hide()
                    $('#sujetdiv').show()
                    $('#sujetadmindiv').hide()
                    // $('#sousadministrationdiv').hide()
                    var selectedVal = $(this).find("option:selected" ).attr('id');
                    console.log(selectedVal)
                    $('#sujet > optgroup[label="'+selectedVal+'"]')
                            .show()
                            .siblings("optgroup")
                            .css("display","none");
        

                    
                }else{
                    $('#secteur').show()
                    $('#administrationdiv').show()
                    $('#sujetdiv').hide()
                    $('#sujetadmindiv').show()
                }


            })

            function pad2(number){
                // console.log((number < 10 ? '0' : '') + number);
                return (number < 10 ? '0' : '') + number;
            }
            $('#wilaya_select').on('change',function(){

                

                $('#code_initial_html').html('')

                var valeur = $(this).val();
                $('#wilaya').val(valeur).change();
                $('#daira').val("").change();
                $('#commune').val("").change();

                console.log(new Date($('#date_doleance').val()).getFullYear().toString())
                $('#code_initial').val('D'+new Date($('#date_doleance').val()).getFullYear().toString().substr(-2)+pad2(valeur)+$('#source').val()+paddy($('#numero').val(),6));
                $('#code_transfert').val('D'+new Date($('#date_doleance').val()).getFullYear().toString().substr(-2)+pad2(valeur)+$('#source').val()+paddy($('#numero').val(),6));
                $('#code_initial_html').html('D'+new Date($('#date_doleance').val()).getFullYear().toString().substr(-2)+pad2(valeur)+$('#source').val()+paddy($('#numero').val(),6));
                $('#codification').val('D'+new Date($('#date_doleance').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val()));

            })

            $('#source').on('change',function(){
                $('#code_initial_html').html('')
                var valeur = $(this).val();
                $('#code_initial').val('D'+new Date($('#date_doleance').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy($('#numero').val(),6));
                $('#code_transfert').val('D'+new Date($('#date_doleance').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy($('#numero').val(),6));
                $('#code_initial_html').html('D'+new Date($('#date_doleance').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy($('#numero').val(),6));
                $('#codification').val('D'+new Date($('#date_doleance').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val()));

            })
            

            $('#date_doleance').on('change',function(){
                $('#code_initial_html').html('')
                var valeur = $(this).val();
                $('#code_initial').val('D'+new Date($('#date_doleance').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy($('#numero').val(),6));
                $('#code_transfert').val('D'+new Date($('#date_doleance').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy($('#numero').val(),6));
                $('#code_initial_html').html('D'+new Date($('#date_doleance').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy($('#numero').val(),6));
                $('#codification').val('D'+new Date($('#date_doleance').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val()));

            })

            $('#numero').on('change',function(){
                $('#code_initial_html').html('')
                console.log(valeur)
                var valeur = $('#numero').val();
                $('#code_initial').val('D'+new Date($('#date_doleance').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy(valeur,6));
                $('#code_transfert').val('D'+new Date($('#date_doleance').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy(valeur,6));

                $('#code_initial_html').html('D'+new Date($('#date_doleance').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy(valeur,6));

            })
            /////////////////////////////////////////////////////
            function paddy(num, padlen, padchar) {
                var pad_char = typeof padchar !== 'undefined' ? padchar : '0';
                var pad = new Array(1 + padlen).join(pad_char);
                return (pad + num).slice(-pad.length);
            }        


        });
</script>


<script>
        $(document).ready(function() {
            
            $('#etat_projet').on('change',function(){
                var value = this.value;
                // console.log(value)
                if(value=="fiche1"){
                    $('#fichetext').html('fiche-01')
                    $('#fiche3').hide()
                    $('#fiche1').show()
                    $('#fiche2').hide()
                }
                if(value=="fiche2"){
                    $('#fichetext').html('fiche-02')
                    $('#fiche3').hide()
                    $('#fiche2').show()
                    $('#fiche1').hide()
                }
                if(value=="fiche3"){
                    $('#fichetext').html('fiche-03')
                    $('#fiche2').hide()
                    $('#fiche3').show()
                    $('#fiche1').hide()

                }


            })


        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>