<div id="myModalcc" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Courrier Citoyen : </h5>


        </div>
        <div class="modal-body">
            <form method="post" action="{{route('courrier.store',['requete'=>$requete->id,'source'=>'citoyen'])}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Type Courrier  : </label>
                        <select name="type_cc" id="citoyen_cc" class="form-control ">
                            <option value="">Séléctionner</option>  
                            <option value="Départ">Départ</option>  
                            <option value="Arrivée">Arrivée</option>  
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label"> Etat courrier  : </label>
                        <select name="etat_courrier_cc" id="etat_courrier_cc" class="form-control ">
                            <option value="">Séléctionner</option>  
                            <optgroup label="Départ">
                                <option value="reponse">Réponse</option>  
                                <option value="autre">Aurte</option>  

                            </optgroup>
                            <optgroup label="Arrivée">
                                <option value="Complement de dossier ">Complement de dossier </option>  
                                <option value="Autre">Autre</option>  
                            </optgroup>

                        </select>

                    </div>
                    
                

                </div>
                <div class="row">
                    <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">Date : </label>
                            <input  name="date_envoi_cc" max="{{date('Y-m-d')}}" type="date" class="form-control"   >
                    </div>
                </div>
                    <div class="row">

                        <!-- <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">Secteur :</label>
                                <select value="{{$requete->user ?? ''}}" name="secteur_cc" class="form-control ">
                                    <option value="">Séléctionner</option>  
                                    @foreach ($secteurs as $secteur)
                                            <option value="{{$secteur->id}}" >{{$secteur->type}}</option>
                                        @endforeach
                                </select>
                        </div>           
                        <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">Administration :</label>
                                <select value="{{$requete->user ?? ''}}" name="administartion_cc" class="form-control ">
                                    <option value="">Séléctionner</option>
                                    @foreach ($administrations as $administration)
                                        <option value="{{$administration->id}}" >
                                            {{$administration->type}}
                                        </option>
                                    @endforeach

                                </select>

                        </div>                                                                             -->
             
                    </div>
                    <!-- <div class="row">
                        <div class="col-12">
                            <label for="validationCustom05" class="form-label">Nom de l'administartion :</label>
                            <input value="{{$requete->codification ?? ''}}" name="nom_administartion" type="text" class="form-control"   >
                        </div>
                    </div> -->
                    <div class="col-md-12">
                        <div class="col-12">
                            <br>
                            <label for="validationCustom05" class="form-label">Piece Joint</label>
                            <input value="{{$requete->codification ?? ''}}" name="piece_cc" type="file" class="form-control"   >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-12">
                            <br>
                            <label for="validationCustom05" class="form-label">Message</label>
                            <textarea class="form-control" name="message_cc"> </textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-12">
                            <br>
                            <label for="validationCustom05" class="form-label">Enregister en tant que Brouillion : </label>
                            <input type="checkbox" name="trash_cc" />
                        </div>
                    </div>                    
                </div>
                <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Sauvegarder</button>
                    </div>


            </form>

            

        </div>
       
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>