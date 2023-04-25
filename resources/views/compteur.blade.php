@extends('layouts.client2')

@section('content')
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
                            <h1 id="compteur" style="font-size:30px;" >{{$count ?? 0}}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body align-items-center d-flex justify-content-center">
                                    <div class="d-flex">
                                        <form method="post" action="#">
                                            @csrf
                                            <div class="input-group">
                                              <label>créer une notification selon votre numéro de ticket  : </label>
                                                <input type="text" name="count"  class="form-control" >
                                                  <span class="input-group-btn">
                                                  <button  type="submit" class="btn btn-success"  ><i class="fa fa-clone"></i></button>
                                                </span>
                                            </div>                                                                       

                                        </form>

                                    </div>
                                </div><!-- end cardbody -->

                        </div><!-- end col -->
                    </div>

@endsection
@section('scripts')
<script>
          setInterval(function(){         
            
            let client = {!! $client->id !!};
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
@endsection