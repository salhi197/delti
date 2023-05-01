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
                                <h3 class="mb-sm-0">Pour assurer le bon fonctionnement , Vous devez vous présentez avant deux (2) tickets de votre tour  </h3>
                                <h3 class="mb-sm-0">Le ticket Actuel est :</h3>    
                            </div>                          
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h1 id="compteur" style="font-size:30px;" ><?php echo e($count ?? 0); ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body align-items-center d-flex justify-content-center">
                                    <div class="d-flex">
                                            <?php echo csrf_field(); ?>
                                            <div class="input-group">
                                              <label>créer une notification selon votre numéro de ticket  : </label>
                                              <input type="hidden" id="clientid" value="<?php echo e($client->id); ?>"  class="form-control" >

                                                <input type="number" id="notif" name="count"  class="form-control" >
                                                  <span class="input-group-btn">
                                                  <button  id="addNotif" class="btn btn-success"  ><i class="fa fa-paper-plane"></i></button>
                                                </span>
                                            </div>                                                                       


                                    </div>
                                </div><!-- end cardbody -->

                        </div><!-- end col -->
                    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>


          setInterval(function(){         
            
            let client = $('#clientid').val();
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


            function showNotification() {
                //if(document.visibilityState === "visible") {
                    //  return;
                //   }
                let title = "JavaScript Jeep";
                let icon = 'https://homepages.cae.wisc.edu/~ece533/images/airplane.png';
                let body = "Message to be displayed";
                var notification = new Notification('Title', { body, icon });
                notification.onclick = () => {
                        notification.close();
                        window.parent.focus();
                }
            }

        $( document ).ready(function() {
            $('#addNotif').on('click',function(){
                //////////////////////////////
                if($('#notif').val().length>0){
                    localStorage.setItem('notif', $('#notif').val());
                    toastr.success('Notification Crée')


                }else{
                    alert('Champs vide')
                }
            })
            if (!("Notification" in window)) {
                // Check if the browser supports notifications
                alert("This browser does not support desktop notification");
            } else if (Notification.permission === "granted") {
                // Check whether notification permissions have already been granted;
                // if so, create a notification
                const notification = new Notification("Hi there!");
                // …
            } else if (Notification.permission !== "denied") {
                // We need to ask the user for permission
                Notification.requestPermission().then((permission) => {
                // If the user accepts, let's create a notification
                if (permission === "granted") {
                    showNotification();
                    // …
                }
                });
            }            
        });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>