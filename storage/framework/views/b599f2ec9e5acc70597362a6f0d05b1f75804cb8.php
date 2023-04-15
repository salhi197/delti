<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.modals.invest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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