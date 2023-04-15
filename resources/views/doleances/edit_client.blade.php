@extends('layouts.client')
@section('styles')

@endsection
@section('content')
        <div class="row">
                <div class="col-12">

                        <div class="col-md-3">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Détails de la Doléance</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                                    data-bs-toggle="modal" data-bs-target="#firstmodal">
                                                    +
                                                Ajouter
                                                fichier ou message </button>
                            </div>
                            <div class="col-md-3">
                                        <button type="button" class="btn btn-primary waves-effect waves-light"
                                            data-bs-toggle="modal" data-bs-target="#firstmodal2">
                                            Retire La Demande Doleance 
                                        </button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-primary waves-effect waves-light">Accuse de
                                            reception</button>

                            </div>

                        </div>

                        <div class="col-md-12">
                                    <div class="col-md-3">
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..."
                                            tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+
                                                        Ajoutetr Fichier</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{route('fichier.store')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="doleance_id" value="{{$doleance->id}}">
                                                        <input type="hidden" name="type" value="doleance">

                                                        <div class="modal-body">
                                                            <div class="col-md-12">
                                                                <label for="validationCustom01" class="form-label">Fichier Joindre : 
                                                                </label>
                                                                <input name="fichier" type="file" />
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <!-- Toogle to second dialog -->
                                                            <button class="btn btn-primary" data-bs-target="#secondmodal"
                                                                data-bs-toggle="modal"
                                                                data-bs-dismiss="modal">Valider</button>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- First modal dialog -->
                                        
                                    </div>
                                    <!--RETIRE-->
                                    <div class="col-md-3">
                                        <div class="modal fade" id="firstmodal2" aria-hidden="true" aria-labelledby="..."
                                            tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+
                                                        Retire la
                                                    doleance</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{route('doleance.retirer')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="doleance_id" value="{{$doleance->id}}">

                                                        <div class="modal-body">
                                                            <div class="col-md-12">
                                                                <label for="validationCustom01" class="form-label">Message

                                                                </label>
                                                                <textarea class="form-control"> </textarea>
                                                            </div>
                                                        </div>
<<<<<<< HEAD
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- Toogle to second dialog -->
                                                        <button class="btn btn-primary" data-bs-target="#secondmodal"
                                                            data-bs-toggle="modal"
                                                            data-bs-dismiss="modal">{trans.main.valider}</button>
                                                    </div>
=======
                                                        <div class="modal-footer">
                                                            <!-- Toogle to second dialog -->
                                                            <button class="btn btn-primary" data-bs-target="#secondmodal"
                                                                data-bs-toggle="modal"
                                                                data-bs-dismiss="modal">Valider</button>
                                                        </div>

                                                    </form>
>>>>>>> d50028bca446bc048ba80b66832b4780e516b86d
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- end preview-->


                        </div>
                        <br>
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
                                                    <strong>{{$doleance->code_initial ?? ''}}</strong>
                                                </h4>
                                                <h3>
                                                    <img src="https://wassit.dz/assets/images/Logomediateurdelarpublique.png" alt="logo" height="50" />
                                                </h3>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                    <address>
                                                        <strong>Wilaya :{{$doleance->getElt('wilaya')}}</strong><br>
                                                        Daira :{{$doleance->getElt('daira')}}<br>
                                                        Commune : {{$doleance->getElt('commune')}}<br>
                                                        Type de doleance : {{$doleance->getElt('typedoleance')}}<br>
                                                        Secteur ou entité concernée par la requête :{{$doleance->getElt('secteur')}}<br>
                                                        Organisme concerné :{{$doleance->getElt('wilaya')}}<br>
                                                        Titre de la pétition :{{$doleance->getElt('sujet')}}<br><br>
                                                        Lien vidéo :{{$doleance->video ?? ''}}
                                                    </address>

                                                </div>
                                                <div class="col-6 text-end">
                                                    <textarea class="form-control">{{$doleance->description ?? ''}}</textarea>
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
        </div>    
@endsection

@section('scripts')
<script>
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
            $('#wilaya_select').on('change',function(){
                var selectedVal = $(this).find("option:selected" ).attr('id');
                $('#daira > optgroup[label="'+selectedVal+'"]')
                        .show()
                        .siblings("optgroup")
                        .css("display","none");

            })


</script>
@endsection
