<?php $__env->startSection('content'); ?>                    

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Suggestion</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Suggestions</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ** TEST ** -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <!-- Tab panes -->
                                    <div class="tab-content p-3 text-muted">
                                        <div class="tab-pane active" id="home12" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title"> Nouvelle suggestion</h4>
                                                            <hr>
                                                            <br>
                                                            <form class="needs-validation" method="post"  action="<?php echo e(route('client.store.citoyen')); ?>" enctype="multipart/form-data">
                                                                <?php echo csrf_field(); ?>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Nom *</label>
                                                                            <input name="nom_s" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Prénom *</label>
                                                                            <input name="prenom_s" type="text" class="form-control" id="validationCustom05"
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
                                                                                    </select>                                                    

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Commune :  * </label>
                                                                            <select class="form-control" name="commune_c" id="commune_c">
                                                                                <option value="" > -- Séléctionner-- </option>
                                                                                
                                                                                
                                                                                
                                                                            </select>                                                    

                                                                            
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Secteur *</label>
                                                                                <select name="secteur" class="form-select"  required>
                                                                                    <option selected disabled value="">Choisir...</option>
                                                                                    <option value="">...</option>
                                                                                    <option value="">...</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Objet de la Suggestion</label>
                                                                                <input name="objet_s" type="text" class="form-control" id="validationCustom05">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Suggestion</label>
                                                                                <textarea class="form-control"></textarea>
                                                                            </div>
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