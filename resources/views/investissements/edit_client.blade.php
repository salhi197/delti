@extends('layouts.client')


@section('content')
<div class="row">
                <div class="col-12">

                        <div class="col-md-3">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Détails de la Requete</h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-primary waves-effect waves-light"
                                            data-bs-toggle="modal" data-bs-target="#firstmodal">
                                            +
                                        Ajouter
                                        fichier ou message</button>


                                        <!-- First modal dialog -->
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..."
                                            tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+
                                        Ajouter
                                        fichier ou message</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-md-12">
                                                            <label for="validationCustom01" class="form-label">Fichier
                                                                attaché

                                                            </label>
                                                            <input name="fichier" type="file" class="form-control"
                                                                id="customFile" />
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-md-12">
                                                            <label for="validationCustom01" class="form-label">Message

                                                            </label>
                                                            <textarea class="form-control"> </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- Toogle to second dialog -->
                                                        <button class="btn btn-primary" data-bs-target="#secondmodal"
                                                            data-bs-toggle="modal"
                                                            data-bs-dismiss="modal">Valider</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--RETIRE-->
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-primary waves-effect waves-light"
                                            data-bs-toggle="modal" data-bs-target="#firstmodal">
                                            Retire la
                                        requete invesstisseur
                                        </button>

                                        <!-- First modal dialog -->
                                        <div class="modal fade" id="firstmodal2" aria-hidden="true" aria-labelledby="..."
                                            tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Retirer la investissement</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{route('investissement.retirer')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="investissement_id" value="{{$investissement->id}}">

                                                        <div class="modal-body">
                                                            <div class="col-md-12">
                                                                <label for="validationCustom01" class="form-label">Message

                                                                </label>
                                                                <textarea class="form-control"> </textarea>
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
                                        
                                    </div> <!-- end preview-->


                                    <button type="button" class="btn btn-primary waves-effect waves-light">Accuse de
                                        reception</button>
                        </div>
                        <br>
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
                                                    <strong>{{$investissement->code_initial ?? '' ?? ''}}</strong>
                                                </h4>
                                                <h3>
                                                    <img src="https://wassit.dz/assets/images/Logomediateurdelarpublique.png" alt="logo" height="50" />
                                                </h3>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                    <address>
                                                        <strong>Wilaya :{{$investissement->wilaya()['name'] ?? ''}}</strong><br>
                                                        Daira : {{$investissement->daira()['nom'] ?? ''}}<br>
                                                        Commune : {{$investissement->commune()['name'] ?? ''}}<br>
                                                        Secteur :{{$investissement->secteur ?? ''}}<br>
                                                        Implimentaion :{{$investissement->implimentation ?? ''}}<br>
                                                        Statut du foncier :{{$investissement->statut_du_foncier ?? ''}}<br>
                                                        Superficie :{{$investissement->Superficie ?? ''}}<br>
                                                        Etat actuel de projet : {{$investissement->etat_projet ?? ''}}<br> <br>
                                                        Date d'envoie :{{$investissement->created_at ?? ''}}
                                                    </address>

                                                
                                                </div>
                                                <div class="col-6 text-end">
                                                    <textarea class="form-control">{{$investissement->contraintes ?? ''}}</textarea>
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
@endsection


@section('scripts')
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
@endsection