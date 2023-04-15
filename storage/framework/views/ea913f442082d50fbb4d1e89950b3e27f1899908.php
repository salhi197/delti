<?php $__env->startSection('content'); ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h3 class="mb-sm-0">File D'attente :  <?php echo e($client->nom ?? $client->prenom ?? ''); ?></h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h1 id="compteur"><?php echo e($count ?? 0); ?></h1>
                                <div class="qty mt-5">
                                    <!-- <button class="btn btn-info" id="compteur" name="qty" value="<?php echo e($count ?? 0); ?>"><?php echo e($count ?? 0); ?></button> -->
                                </div>                            
                        </div><!-- end col -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
          setInterval(function(){         
            
            let client = <?php echo $client->id; ?>;
            let url ='/clients/get/compteur/'+client; 
                    $.ajax({
                      type: 'get',
                      dataType: 'JSON', 
                      url: url,
                      success: function(success){
                        console.log(success.reponse==$('#compteur').html())
                        if(success.reponse!=$('#compteur').html()){
                            toastr.success('Ticket Incrémenté')
                        }
                        $('#compteur').html(success.reponse)

                      },
                      error:function(err){
                        console.log(err)
                      }
                    });


        }, 1500);

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>