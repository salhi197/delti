<?php $__env->startSection('content'); ?>
<div class="row">
                        <div class="col-md-3">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Détails de la investissement </h4>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="button" style="  position: absolute;  right: 16px;">
                                <a href="#">
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        style="background-color: #e30613; border-style: none;">+
                                        Ajouter
                                        fichier ou message</button>
                                </a>
                                <button type="button" class="btn btn-primary waves-effect waves-light">Accuse de
                                    reception</button>
                                <a href="<?php echo e(route('investissement.destroy',['investissement'=>$investissement->id])); ?>" onclick="return confirm('Confirmez?')">
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Retire la
                                        investissement</button>

                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="invoice-title">
                                                <h4 class="float-end font-size-16"
                                                    style="background-color:#eeeeee; padding: 10px;">
                                                    <strong><?php echo e($investissement->code_initial ?? '' ?? ''); ?></strong>
                                                </h4>
                                                <h3>
                                                    <img src="https://wassit.dz/assets/images/Logomediateurdelarpublique.png" alt="logo" height="50" />
                                                </h3>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                    <address>
                                                        <strong>Wilaya :<?php echo e($investissement->wilaya()['name'] ?? ''); ?></strong><br>
                                                        Daira : <?php echo e($investissement->daira()['nom'] ?? ''); ?><br>
                                                        Commune : <?php echo e($investissement->commune()['name'] ?? ''); ?><br>
                                                        Secteur :<?php echo e($investissement->secteur ?? ''); ?><br>
                                                        Implimentaion :<?php echo e($investissement->implimentation ?? ''); ?><br>
                                                        Statut du foncier :<?php echo e($investissement->statut_du_foncier ?? ''); ?><br>
                                                        Superficie :<?php echo e($investissement->Superficie ?? ''); ?><br>
                                                        Etat actuel de projet : <?php echo e($investissement->etat_projet ?? ''); ?><br> <br>
                                                        Date d'envoie :<?php echo e($investissement->created_at ?? ''); ?>

                                                    </address>

                                                
                                                </div>
                                                <div class="col-6 text-end">
                                                    <textarea class="form-control"><?php echo e($investissement->contraintes ?? ''); ?></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <div class="p-2" style="background-color: #ffc107;">
                                                    <h3 class="font-size-16"><strong>Courriers et messages</strong></h3>
                                                </div>
                                                <div class="">


                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- end row -->

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            $("#daira").on("change",function(){
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#commune > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

            });  
            $('#wilaya_select').on('change',function(){
                $('#daira').val()
                var selectedVal = $(this).find("option:selected" ).attr('id');
                $('#daira > optgroup[label="'+selectedVal+'"]')
                        .show()
                        .siblings("optgroup")
                        .css("display","none");

            })

            $('#fiche3').hide()
            $('#fiche1').hide()
            $('#fiche2').hide()
            
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
<?php echo $__env->make('layouts.client', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>