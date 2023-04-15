<div id="myModalcc{{$cc->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Modifier Courrier Citoyen : </h5>


        </div>
        <div class="modal-body">
            <form method="post" action="{{route('courrier.update',['courrier'=>$cc->id,'source'=>'citoyen'])}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Type Courrier  : </label>
                        <select value="{{$cc->type_cc ?? ''}}" name="type_cc_edit" id="citoyen_cc" class="form-control ">
                            <optionvalue="">Séléctionner</option>  
                            <option @if($cc->type=="Départ") selected @endif value="Départ">Départ</option>  
                            <option @if($cc->type=="Arrivée") selected @endif value="Arrivée">Arrivée</option>  
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label"> Etat courrier  : </label>
                        <select value="{{$cc->etat_courrier_cc ?? ''}}" name="etat_courrier_cc_edit" id="etat_courrier_cc" class="form-control ">
                            <option value="">Séléctionner</option>  
                            <optgroup label="Départ">
                                <option @if($cc->type=="reponse") selected @endif value="reponse">Réponse</option>  
                                <option @if($cc->type=="autre") selected @endif value="autre">Aurte</option>  

                            </optgroup>
                            <optgroup label="Arrivée">
                                <option @if($cc->type=="Complement de dossier ") selected @endif value="Complement de dossier ">Complement de dossier </option>  
                                <option @if($cc->type=="Autre") selected @endif value="Autre">Autre</option>  
                            </optgroup>

                        </select>

                    </div>
                    
                

                </div>
                <div class="row">
                    <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">Date : </label>
                            <input  value="{{$cc->envoi ?? ''}}"  name="date_envoi_cc_edit" max="{{date('Y-m-d')}}" type="date" class="form-control"   >
                    </div>
                </div>
                    <div class="row">
             
                    </div>
                    <div class="col-md-12">
                        <div class="col-12">
                            <br>
                            <label for="validationCustom05" class="form-label">Piece Joint</label>
                            <input   name="piece_cc_edit" type="file" class="form-control"   >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-12">
                            <br>
                            <label for="validationCustom05" class="form-label">Message</label>
                            <textarea class="form-control" name="message_cc_edit"> {{$cc->message ?? ''}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-12">
                            <br>
                            <label for="validationCustom05" class="form-label">Enregister en tant que Brouillion : </label>
                            <input type="checkbox" value="{{$cc->trash_cc ?? ''}}" name="trash_cc_edit" />
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