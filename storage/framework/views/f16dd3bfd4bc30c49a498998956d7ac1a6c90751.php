<?php $__env->startSection('content'); ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0"><a href="<?php echo e(route('audience.index')); ?>"><i class="fas fa-arrow-left" style="color:#EBB02D;"></i></a>&nbsp;Audience</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active"><a href="<?php echo e(route('audience.index')); ?>">Audiences</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    
                                </div>
                            </div>
                        </div>
                    </div>   -->


                    <div class="row">
                        <div class="col-12">
                            <h4 class="mb-sm-0"><span id="code_initial_html"></span> </h4>
                        </div>

                    </div>
                    <!--audience-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"><i class="fas fa-plus-circle" style="color:#EBB02D;"></i>  Modifier Audience</h4>
                                    <form method="post" id="myForm" action="<?php echo e(route('audience.update',['audience'=>$audience->id])); ?>" class="needs-validation" >
                                        <hr>
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                                <input name="audience_id" id="audience_id" type="hidden" value="<?php echo e($audience->id ?? ''); ?>" />
                                                <div class="col-6">
                                                    <label for="validationCustom04" class="form-label">Code Audience</label>
                                                    <input value="<?php echo e($audience->code_initial ?? ''); ?>" name="code_initial" 
                                                    id="code_initial"
                                                    value="<?php echo e($audience->code_initial ?? ''); ?>"
                                                    readonly type="text" class="form-control"  required>
                                                </div>
                                        </div>
                                            <div class="row">
                                                    <!-- <div class="col-md-3">
                                                        <br>
                                                        <label for="validationCustom04" class="form-label">Source</label>
                                                        <select class=" select2 form-select" value="<?php echo e($audience->source ?? ''); ?>" name="source" id="source"  required>
                                                            <?php $__currentLoopData = $sourcerequetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sourcerequete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($sourcerequete->id==2): ?>
                                                                    <option value="<?php echo e(strtoupper(substr($sourcerequete->type, 0, 1))); ?>" ><?php echo e($sourcerequete->type); ?></option>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>  
                                                    </div> -->
                                            <div class="col-md-4">
                                                <br>
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Date d'audience</label>
                                                    <input type="date" max="<?php echo e(date('Y-m-d')); ?>" class="form-control" value="<?php echo e($audience->date_audience ?? ''); ?>" name="date_audience" id="date_audience" 
                                                        required>
                                                </div>
                                            </div>
                                                <div class="col-md-4">
                                                    <br>
                                                    <div class="mb-3">
                                                        <label for="validationCustom02" class="form-label">Wilaya</label>
                                                        <select class=" select2 form-control" id="wilaya_select" value="<?php echo e($audience->wilaya ?? ''); ?>" name="wilaya">
                                                            <option value="" > -- Séléctionner-- </option>
                                                            <?php $__currentLoopData = $wilayas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option <?php if($audience->wilaya == $wilaya->id): ?> selected <?php endif; ?> value="<?php echo e($wilaya->id); ?>" >
                                                                    <?php echo e($wilaya->name); ?>   
                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </select>                                                    

                                                    </div>
                                                </div>
                                            
                                                    <div class="col-md-4">
                                                        <div class="col-12">
                                                            <br>
                                                            <label for="validationCustom05" class="form-label">Numéro  </label>
                                                            <input value="<?php echo e($audience->numero ?? ''); ?>" name="numero" onKeyPress="if(this.value.length==5) return false" required type="number" class="form-control"  id="numero" required>
                                                        </div>
                                                    </div>
                                        </div>                                        

                                        <hr>

                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Chargé de l'Audience</label>
                                                    <select value="<?php echo e($audience->charge_audience ?? ''); ?>" name="charge_audience" class="form-select"  id="validationCustom03" >
                                                        <option value="" > -- Séléctionner-- </option>

                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option <?php if($audience->charge_audience == $user->id): ?> selected <?php endif; ?> value="<?php echo e($user->id); ?>"><?php echo e($user->nom); ?> <?php echo e($user->prenom); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom05" class="form-label">Citoyen </label>
                                                
                                                <div class="input-group">
                                                    <select class="form-select " id="client" value="<?php echo e($audience->client ?? ''); ?>" name="client">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option <?php if($audience->client == $client->id): ?> selected <?php endif; ?> value="<?php echo e($client->id); ?>" >
                                                                <?php echo e($client->nom); ?>

                                                                <?php echo e($client->prenom); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </select>

                                                    <span class="input-group-btn">
                                                    <a href="<?php echo e(route('client.show.create')); ?>" class="btn btn-primary" type="button" style="background-color:#EBB02D; border-style:none;"><i class="fa fa-plus"></i></a>
                                                    </span>
                                                </div>                                                
                                            </div>

                                        </div>
                                        <div class="row">
                                            
                                        </div>

                                        <div class="row" id="type1">
                                            <div class="col-md-4" id="secteur">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Secteur</label>
                                                    <select class="form-select" value="<?php echo e($audience->secteur ?? ''); ?>" name="secteur" id="secteur">
                                                    <option value="" > -- Séléctionner-- </option>

                                                        <?php $__currentLoopData = $secteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option <?php if($audience->secteur == $secteur->id): ?> selected <?php endif; ?> value="<?php echo e($secteur->id); ?>" id="<?php echo e($secteur->type); ?>" >
                                                                <?php echo e($secteur->type ?? ''); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>                                            
                                            <div class="col-md-4" id="administrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Administration</label>
                                                    <select  name="administration" id="administration" class="form-select "  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $secteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <optgroup label="<?php echo e($secteur->type); ?>">
                                                                <?php $__currentLoopData = $secteur->administrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option <?php if($audience->administartion == $administration->id): ?> selected <?php endif; ?> value="<?php echo e($administration->id); ?>" id="<?php echo e($administration->type); ?>"><?php echo e($administration->type); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                </optgroup>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                                                                     
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-4" id="sousadministrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Sous Administration</label>
                                                    <select value="<?php echo e($audience->sousadministration ?? ''); ?>" name="sousadministration" id="sousadministration" class="form-select "  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $administrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <optgroup label="<?php echo e($administration->type); ?>">
                                                                    <?php $__currentLoopData = $administration->sousadministrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sousadministration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option <?php if($audience->sousadministration == $sousadministration->id): ?> selected <?php endif; ?> value="<?php echo e($sousadministration->id); ?>"><?php echo e($sousadministration->label ?? ''); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </optgroup>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Sujet</label>
                                                    <input type="text" class="form-control" value="<?php echo e($audience->sujet ?? ''); ?>" name="sujet" id="validationCustom05" required>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row" >
                                            <div class="col-md-12">
                                                <label for="validationCustom03" class="form-label">Détails </label>
                                                <textarea class="form-control"  name="details">
                                                    <?php echo e(str_replace('%20', ' ', $audience->details)); ?>

                                                </textarea>
                                            </div>

                                        </div>
                                        <br>
                                        
                                        <div class="row">
                                            <?php if(strlen($audience->piece)>0): ?>
                                            <div class="col-md-2">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Pièce Jointe</label>
                                                    <div class="input-group" >
                                                        
                                                        <a href="<?php echo e(asset('public/'.$audience->piece)); ?>" class="btn btn-primary" download>
                                                            <?php echo e($audience->filename ?? ''); ?>

                                                        </a>
                                                       

                                                    </div><!-- input-group -->

                                                </div>
                                            </div>
                                            <?php endif; ?>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <label for="validationCustom05" class="form-label">Pièce Jointe </label>
                                                    <input type="file" class="form-control"  name="piece" >
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">
                                            
                                            <div class="col-md-4">
                                                <label for="validationCustom03" class="form-label"> Action  </label>
                                                <select class="form-select"  name="type" id="typeaudience">
                                                    <option value="">Séléctionner : </option>
                                                    <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                        <option <?php if($audience->type == $action->id){echo "selected";} ?> value="<?php echo e($action->id ?? ''); ?>">
                                                            <?php echo e($action->label ?? ''); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </select>
                                            </div>
                                            <div class="col-md-4" id="souscategorie">
                                                <label for="validationCustom03" class="form-label"> Détails </label>
                                                <select class="form-control"  >
                                                    <?php $__currentLoopData = $souscategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $souscategorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($souscategorie->categorie == 7): ?>
                                                            <option <?php if($audience->souscategorie == $souscategorie->id): ?> selected <?php endif; ?> value="<?php echo e($souscategorie->label ?? ''); ?>">
                                                                <?php echo e($souscategorie->label ?? ''); ?>

                                                            </option>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                        <br>
                                        <div>
                                        <button class="btn btn-primary" type="submit"><i class=" fas fa-save"></i> Sauvegarder</button>
                                        <button class="btn btn-primary" id="transfer" style="background-color:#e30613; border-style:none;" > <i class=" fas fa-reply"></i> Transférer vers une requete </button>
                                        <button class="btn btn-primary" id="transferdoleance" style="background-color:#009640;border-style:none;"> <i class=" fas fa-reply"></i>  Transférer vers une doléance </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function() {
            function pad2(number){
                // console.log((number < 10 ? '0' : '') + number);
                return (number < 10 ? '0' : '') + number;
            }
            $('#wilaya_select').on('change',function(){
                $('#code_initial_html').html('')
                var valeur = $(this).val();
                console.log("A"+new Date($('#date_audience').val()).getFullYear().toString()+"----------")
                $('#code_initial').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2(valeur)+$('#numero').val());
                $('#code_transfert').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2(valeur)+$('#numero').val());
                $('#code_initial_html').html("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2(valeur)+$('#numero').val());
                $('#codification').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val()));

            })
            
            $('#date_audience').on('change',function(){
                $('#code_initial_html').html('')
                var valeur = $(this).val();
                $('#code_initial').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#numero').val());
                $('#code_transfert').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#numero').val());
                $('#code_initial_html').html("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#numero').val());
                $('#codification').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val()));

            })

            $('#source').on('change',function(){
                $('#code_initial_html').html('')
                var valeur = $(this).val();
                $('#code_initial').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#numero').val());
                $('#code_transfert').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#numero').val());
                $('#code_initial_html').html("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#numero').val());
                $('#codification').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val()));

            })
            

            $('#numero').on('change',function(){
                $('#code_initial_html').html('')
                console.log("valeur")
                var valeur = $('#numero').val();
                $('#code_initial').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+valeur);
                $('#code_transfert').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+valeur);

                $('#code_initial_html').html("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+valeur);

            })

            // $('#transfer').hide()
            // $('#souscategorie2').hide()
            <?php if(is_null($audience->administartion)): ?>
            $('#administrationdiv').hide()
            <?php endif; ?>
            <?php if(is_null($audience->sousadministration)): ?>
                $('#sousadministrationdiv').hide()
            <?php endif; ?>
            // $('#souscategorie').hide()
            $("#administration").on("change",function(){
                $('#sousadministrationdiv').show()
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#sousadministration > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });

            $("#secteur").on("change",function(){
                $('#administrationdiv').show()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#administration > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });  
            $('#transfer').click( function(e) {
                e.preventDefault();
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                window.open('/requete/create/audience/'+$('#audience_id').val(),"_self");

                    // $.ajax({
                    //         url: '/audience/create/transfer',
                    //         type: 'post',
                    //         dataType: 'json',
                    //         data: {_token: CSRF_TOKEN, data:$('form#myForm').serialize()},
                    //         success: function(response) {                            
                    //             console.log(response)
                    //             window.open('/requete/create/audience/'+response.audience,"_self");
                    //         },error: function(err){
                    //             console.log(err)
                    //         }
                    //     });
            });        


            $('#transferdoleance').click( function(e) {
                e.preventDefault();
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                window.open('/doleance/create/audience/'+$('#audience_id').val(),"_self");

                    // $.ajax({
                    //         url: '/audience/create/transfer',
                    //         type: 'post',
                    //         dataType: 'json',
                    //         data: {_token: CSRF_TOKEN, data:$('form#myForm').serialize()},
                    //         success: function(response) {                            
                    //             console.log(response)
                    //             window.open('/requete/create/audience/'+response.audience,"_self");
                    //         },error: function(err){
                    //             console.log(err)
                    //         }
                    //     });
            });        


        $("#secteur").on("change",function(){
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#administration > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });  


            <?php if($audience->type!=3): ?>
                $('#souscategorie').hide()
            <?php endif; ?>
            $("#typeaudience").on("change",function(){
                var selectedVal = $(this).find("option:selected" ).val();
                console.log(selectedVal)
                if(selectedVal.length==0){
                    $('#transfer').show()                                        
                    $('#transferdoleance').show()                    

                }else{
                    if(selectedVal=="3"){
                        $('#souscategorie').show()
                    }else{
                        $('#souscategorie').hide()
                    }
                    $('#transfer').hide()                    
                    $('#transferdoleance').hide()                    

                }
            });
        /*************************************/

        $('#etat_projet').on('change',function(){
                var value = this.value;
                console.log(value)
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

    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>