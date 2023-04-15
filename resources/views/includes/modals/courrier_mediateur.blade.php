<div id="myModalCM" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Courrier Mediateur : </h5>


        </div>
        <div class="modal-body">
            <form method="post" action="{{route('courrier.store',['requete'=>$requete->id,'source'=>'mediateur'])}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Type Courrier : </label>
                        <select value="{{$requete->user ?? ''}}" name="secteur_cc" class="form-control ">
                            <option value="arrive">Arrive</option>  
                            <option value="depart">Départ</option>  
                        </select>
                    </div>
                    <div class="col-md-6">

                            <label for="validationCustom05" class="form-label">Etat courrier départ : </label>
                        <select value="{{$requete->user ?? ''}}" name="secteur_cc" class="form-control ">
                            <option value="reponse">Reponse</option>  
                            <option value="autre">Autre</option>  
                        </select>

                    </div>

                </div>
                <div class="row">
                    <!-- <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">Date corréspendance : </label>
                            <input  name="date_correspendance_cm" type="date" class="form-control"   >
                    </div> -->
                    <div class="col-md-6">

                            <label for="validationCustom05" class="form-label">Date d'envoi : </label>
                            <input  name="date_envoi_cm" type="date" class="form-control"   >
                    </div>
                </div>
                    <div class="row">

                        
                    <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">Secteur :</label>
                                <select value="{{$requete->user ?? ''}}" name="secteur_cm" class="form-control ">
                                    <option value="">Séléctionner</option>  
                                    @foreach ($secteurs as $secteur)
                                            <option value="{{$secteur->id}}" >{{$secteur->type}}</option>
                                        @endforeach
                                </select>
                        </div>           
                        <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">Administration :</label>
                                <select value="{{$requete->user ?? ''}}" name="administartion_cm" class="form-control ">
                                    <option value="">Séléctionner</option>
                                    @foreach ($administrations as $administration)
                                        <option value="{{$administration->id}}" >
                                            {{$administration->type}}
                                        </option>
                                    @endforeach

                                </select>

                        </div>                                                      
             
                    </div>

                    <div class="col-md-12">
                        <div class="col-12">
                            <br>
                            <label for="validationCustom05" class="form-label">Piece Joint</label>
                            <input value="{{$requete->codification ?? ''}}" name="piece_cm" type="file" class="form-control"   >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-12">
                            <br>
                            <label for="validationCustom05" class="form-label">Message</label>
                            <textarea class="form-control" name="message_cm"> </textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-12">
                            <br>
                            <label for="validationCustom05" class="form-label">Enregister en tant que Projet : </label>
                            <input type="checkbox" name="trash_cm" />
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