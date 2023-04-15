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
                                    <h4 class="card-title"><i class="fas fa-plus-circle" style="color:#EBB02D;"></i>  Nouvelle Audience</h4>
                                    <form method="post" id="myForm" action="<?php echo e(route('audience.store')); ?>" class="needs-validation" enctype="multipart/form-data">
                                        <hr>
                                        <?php echo csrf_field(); ?>

                                        <div class="row">
                                            <div class="col-3">
                                                <label for="validationCustom04" class="form-label">Code audience  </label>
                                                <input name="code_initial" 
                                                id="code_initial"
                                                readonly type="text" class="form-control"  required>
                                            </div>
                                        </div>
                                            <div class="row">

                                            <div class="col-md-3">
                                                <br>
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Date d'audience</label>
                                                    <input type="date" max="<?php echo e(date('Y-m-d')); ?>" class="form-control" name="date_audience" id="date_audience" 
                                                        required>
                                                </div>
                                            </div>                                                    
                                                <div class="col-md-3">
                                                    <br>
                                                    <div class="mb-3">
                                                        <label for="validationCustom02" class="form-label">Wilaya</label>
                                                        <select class=" select2 form-control" id="wilaya_select" name="wilaya">
                                                            <option value="" >--Séléctionner--</option>
                                                            <?php $__currentLoopData = $wilayas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($wilaya->numero ?? ''); ?>" <?php echo e($wilaya->id == (old('wilaya_id') ?? ($member->wilaya_id ?? '')) ? 'selected' : ''); ?>>
                                                                    <?php echo e($wilaya->name); ?>   
                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </select>                                                    

                                                    </div>
                                                </div>
                                            
                                                    
                                                    <div class="col-md-3">
                                                        <div class="col-12">
                                                            <br>
                                                            <label for="validationCustom05" class="form-label">Source audience   </label>
                                                            <select class="form-select" name="sourceaudience" id="sourceaudience">
                                                                <option value="">
                                                                    --Séléctionner--
                                                                </option>
                                                                <?php $__currentLoopData = $sourceaudiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sourceaudience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($sourceaudience->premierelettre); ?>"><?php echo e($sourceaudience->type ?? $sourceaudience->label); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="col-12">
                                                            <br>
                                                            <label for="validationCustom05" class="form-label">Numéro  </label>
                                                            <input name="numero" onKeyPress="if(this.value.length==6) return false" required type="number" class="form-control"  id="numero" required>
                                                        </div>
                                                    </div>

                                        </div>                                        

                                        <hr>

                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Chargé d'audience</label>
                                                    <select name="charge_audience" class="form-select select2"  id="validationCustom03" >
                                                        <option value="" > -- Séléctionner-- </option>

                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->nom); ?> <?php echo e($user->prenom); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom05" class="form-label">Citoyen </label>
                                                
                                                <div class="input-group">
                                                    <select class="form-control select2" id="client" name="client">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($client->id); ?>" >
                                                                <?php echo e($client->nom); ?>

                                                                <?php echo e($client->prenom); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </select>
                                                    <span class="input-group-btn">
                                                    <a href="<?php echo e(route('client.show.create')); ?>" class="btn btn-primary" type="button" style="background-color:#EBB02D; border-style:none;"><i class="fa fa-plus"></i></a>
                                                    </span>
                                                    <!-- <span class="input-group-btn">
                                                        <a href="<?php echo e(route('client.show.create')); ?>" class="btn btn-primary" type="button"><i class="fa fa-plus"></i></a>
                                                    </span> -->
                                                </div>                                                
                                            </div>

                                        </div>
                                        <div class="row">
                                            <!-- <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Chargé de l'Audience</label>
                                                    <select name="charge_audience" class="form-select"  id="validationCustom03" >
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->nom); ?> <?php echo e($user->prenom); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div> -->
                                        </div>

                                        <div class="row" id="type1">



                                            <div class="col-md-4" >
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Secteur</label>
                                                    <select class="form-select" name="secteur" id="secteur">
                                                    <option value="" > -- Séléctionner-- </option>

                                                        <?php $__currentLoopData = $secteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($secteur->id); ?>" id="<?php echo e($secteur->type); ?>" >
                                                                <?php echo e($secteur->type ?? ''); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>

                                                
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4" id="administrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Administration</label>
                                                    <select name="administration" id="administration" class="form-select "  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        <?php $__currentLoopData = $secteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <optgroup label="<?php echo e($secteur->type); ?>">
                                                                <?php $__currentLoopData = $secteur->administrations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($administration->id); ?>" id="<?php echo e($administration->type); ?>"><?php echo e($administration->type); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                </optgroup>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                                                                     
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-4" id="sousadministrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Sous Administration</label>
                                                    <select name="sousadministration" id="sousadministration" class="form-select "  >
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
                                        <div class="row" >
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Sujet</label>
                                                    <input type="text" class="form-control" name="sujet" id="validationCustom05" required>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row" >
                                            <div class="col-md-12">
                                                <label for="validationCustom03" class="form-label">Détails  </label>
                                                <textarea class="form-control" name="details"></textarea>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-md-12">
                                            <label for="validationCustom05" class="form-label">Pièce Jointe  2:</label>
                                                <input type="file" class="form-control" name="piece" >
                                            </div>
                                        </div> -->
                                        <br>

                                        <div class="row">
                                            <div class="col-md-12">
                                            <label for="validationCustom05" class="form-label">Pièce Jointe </label>
                                                    <input type="file" class="form-control" name="piece" >

                                            </div>

                                        </div>
                                                                                                                            <br>

                                        <div class="row">

                                            <div class="col-md-4">
                                                <label for="validationCustom03" class="form-label"> Action  </label>
                                                <select class="form-select" name="type" id="typeaudience">
                                                    <option value="">
                                                        Séléctionner
                                                    </option>
                                                    <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($action->id ?? ''); ?>">
                                                        <?php echo e($action->label ?? ''); ?>

                                                    </option>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </select>
                                            </div>
                                            <div class="col-md-4" id="souscategorie">
                                                <label for="validationCustom03" class="form-label"> Détails </label>
                                                <select class="form-control"  >
                                                    <option value="" > -- Séléctionner-- </option>

                                                    <?php $__currentLoopData = $souscategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $souscategorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($souscategorie->categorie == 7): ?>
                                                            <option value="<?php echo e($souscategorie->label ?? ''); ?>">
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
            function paddy(num, padlen, padchar) {
                var pad_char = typeof padchar !== 'undefined' ? padchar : '0';
                var pad = new Array(1 + padlen).join(pad_char);
                return (pad + num).slice(-pad.length);
            }        
            console.log(paddy(133,6))
            function pad2(number){
                // console.log((number < 10 ? '0' : '') + number);
                return (number < 10 ? '0' : '') + number;
            }
            $('#wilaya_select').on('change',function(){
                $('#code_initial_html').html('')
                var valeur = $(this).val();
                $('#code_initial').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2(valeur)+$('#sourceaudience').val()+paddy($('#numero').val(),6));
                $('#code_transfert').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2(valeur)+$('#sourceaudience').val()+paddy($('#numero').val(),6));
                $('#code_initial_html').html("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2(valeur)+$('#sourceaudience').val()+paddy($('#numero').val(),6));
                $('#codification').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val()));

            })
            
            $('#date_audience').on('change',function(){
                $('#code_initial_html').html('')
                var valeur = $(this).val();
                $('#code_initial').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#sourceaudience').val()+paddy($('#numero').val(),6));
                $('#code_transfert').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#sourceaudience').val()+paddy($('#numero').val(),6));
                $('#code_initial_html').html("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#sourceaudience').val()+paddy($('#numero').val(),6));
                $('#codification').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val()));

            })

            $('#sourceaudience').on('change',function(){
                $('#code_initial_html').html('')
                var valeur = $(this).val();
                $('#code_initial').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#sourceaudience').val()+paddy($('#numero').val(),6));
                $('#code_transfert').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#sourceaudience').val()+paddy($('#numero').val(),6));
                $('#code_initial_html').html("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#sourceaudience').val()+paddy($('#numero').val(),6));
                $('#codification').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val()));

            })
            

            $('#numero').on('change',function(){
                $('#code_initial_html').html('')
                console.log("valeur")
                var valeur = paddy($('#numero').val(),6);
                $('#code_initial').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#sourceaudience').val()+paddy(valeur,6));
                $('#code_transfert').val("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#sourceaudience').val()+paddy(valeur,6));

                $('#code_initial_html').html("A"+new Date($('#date_audience').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#sourceaudience').val()+paddy(valeur,6));

            })


            // $('#transfer').hide()
            $('#souscategorie2').hide()
            $('#administrationdiv').hide()

            $('#sousadministrationdiv').hide()
            $('#souscategorie').hide()

            $("#administration").on("change",function(){
                // console.log('ssssssssssssss')
                $('#sousadministrationdiv').show()
                var selectedVal = $(this).find("option:selected" ).attr('id');
                // console.log(selectedVal+"sazaz")
                if($('#sousadministration optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#sousadministrationdiv').show()
                    $('#sousadministration > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");
                    
                }else{
                    $('#sousadministrationdiv').hide()
                }
            });

            $("#secteur").on("change",function(){
                $('#administrationdiv').show()
                $('#administration').val('')
                $('#sousadministrationdiv').hide()


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
                    $('#soussoussousadministrationdiv').hide()
                }
            });  

            $('#transfer').click( function(e) {
                e.preventDefault();
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');                
                ///////////////////                
                $.ajax({
                        url: '/audience/create/transfer',
                        type: 'post',
                        dataType: 'json',
                        data: {_token: CSRF_TOKEN, data:$('form#myForm').serialize()},
                        success: function(response) {
                            console.log(response)
                            // window.open("https://www.youraddress.com","_self")
                            window.open('/requete/create/audience/'+response.audience,"_self"); //This will open Google in a new window.

                        },error: function(err){
                            toastr.error("Vous devez Remplir tout les champs")
                        }
                    });
            });        

            $('#transferdoleance').click( function(e) {
                e.preventDefault();
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');                
                ///////////////////                
                $.ajax({
                        url: '/audience/create2/transfer',
                        type: 'post',
                        dataType: 'json',
                        data: {_token: CSRF_TOKEN, data:$('form#myForm').serialize()},
                        success: function(response) {
                            console.log(response)
                            // window.open("https://www.youraddress.com","_self")
                            window.open('/doleance/create/audience/'+response.audience,"_self"); //This will open Google in a new window.

                        },error: function(err){
                            console.log(err)
                        }
                    });
            });        


        $("#secteur").on("change",function(){
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
                    $('#soussoussousadministrationdiv').hide()
                }
            });  



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