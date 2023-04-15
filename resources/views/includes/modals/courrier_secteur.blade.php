<div id="myModalCS" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Courrier Secteur : </h5>


        </div>
        <div class="modal-body">
            <form method="post" action="{{route('courrier.store',['requete'=>$requete->id,'source'=>'secteur'])}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Type Courrier : </label>
                        <select value="{{$requete->user ?? ''}}" name="secteur_cc" id="secteur_cc" class="form-control ">
                            <option value="">Séléctionner</option>  
                            <option value="Départ">Départ</option>  
                            <option value="Arrivée">Arrivée</option>  
                        </select>
                    </div>
                    <div class="col-md-6">

                        <label for="validationCustom05" class="form-label">Etat courrier  : </label>
                        <select value="{{$requete->user ?? ''}}" name="etat_courrier_cs" id="etat_courrier_cs" class="form-control ">
                            <option value="">Séléctionner</option>  
                            <optgroup label="Départ">
                                <option value="courrier">Courrier</option>  
                                <option value="rappel">Rappel</option>  
                            </optgroup>
                            <optgroup label="Arrivée">
                                <option value="reponse">Réponse</option>  
                                <option value="autre">Aurte</option>  
                            </optgroup>

                        </select>

                    </div>

                </div>
                <div class="row">
                    <!-- <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">Date corréspendance : </label>
                            <input  name="piece_cc" type="date" class="form-control"   >
                    </div> -->
                    <div class="col-md-6">

                            <label for="validationCustom05" class="form-label">Date : </label>
                            <input  name="date_envoi_cs"  max="{{date('Y-m-d')}}"  type="date" class="form-control"   >
                    </div>
                </div>
                                <div class="row">                        
                                    <div class="col-md-6" id="secteur3">
                                        <div class="mb-3">
                                            <label for="validationCustom02" class="form-label">Secteur</label>
                                            <select class="form-control" name="secteur_cs" id="secteur2">
                                            <option value="" > -- Séléctionner-- </option>

                                                @foreach($secteurs as $secteur)
                                                    <option @if($requete->secteur == $secteur->id) selected @endif value="{{$secteur->id}}" id="{{$secteur->type}}" >
                                                        {{$secteur->type ?? ''}}
                                                    </option>
                                                @endforeach
                                            </select>

                                        
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6" id="administrationdiv3">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Administration</label>
                                            <select name="administration_cs" id="administration3" class="form-select "  >
                                                <option value="" > -- Séléctionner-- </option>
                                                @foreach($secteurs as $secteur)
                                                        <optgroup label="{{$secteur->type}}">
                                                            @foreach($secteur->administrations() as $administration)
                                                                <option value="{{$administration->id}}">{{$administration->type}}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    @endforeach
                                            </select>                                                    
                                        </div>
                                    </div>
                                </div>
                                        <div class="row">
                                            <div class="col-md-6" id="sousadministrationdiv3">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Sous Administration</label>
                                                    <select name="administration_cs" id="sousadministration3" class="form-select "  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach($administrations as $administration)
                                                                <optgroup label="{{$administration->type}}">
                                                                    @foreach($administration->sousadministrations() as $sousadministration)
                                                                        <option value="{{$sousadministration->id}}">{{$sousadministration->label ?? ''}}</option>
                                                                    @endforeach
                                                                </optgroup>
                                                            @endforeach
                                                    </select>
                                                                                                     
                                                    
                                                </div>
                                            </div>
                    
                    </div>
                    
                    <div class="col-md-12">
                        <div class="col-12">
                            <br>
                            <label for="validationCustom05" class="form-label">Piece Joint</label>
                            <input value="{{$requete->codification ?? ''}}" name="piece_cs" type="file" class="form-control"   >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-12">
                            <br>
                            <label for="validationCustom05" class="form-label">Message</label>
                            <textarea class="form-control" name="message_cs"> </textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-12">
                            <br>
                            <label for="validationCustom05" class="form-label">Enregister en tant que Projet : </label>
                            <input type="checkbox" name="trash_cs" />
                        </div>
                    </div>                    

                </div>
                <br>
                    <div class="modal-footer">
                        <button type="button" id="fermer" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Sauvegarder</button>
                    </div>


            </form>

            

        </div>
       
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>