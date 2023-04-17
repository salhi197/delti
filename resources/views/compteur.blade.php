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
                                <h3 class="mb-sm-0">File D'attente :  {{$client->nom ?? $client->prenom ?? ''}}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h1 id="compteur" style="font-size:30px;" >{{$count ?? 0}}</h1>
                        </div>
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