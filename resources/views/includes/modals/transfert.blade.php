                                                <div id="myModalTrans" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="myModalLabel">Transferts  : </h5>

                                                

                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route('transfert.store',['requete'=>$requete->id])}}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="col-12">
                                                                                <label  class="form-label">Utilisateur :</label>
                                                                                    <br><select  required value="{{$requete->user ?? ''}}" name="user_transfert" class="form-control ">
                                                                                        <option value="">Séléctionner</option>
                                                                                        @foreach($delegues as $delegue)
                                                                                            <option value="{{$delegue->id}}">{{$delegue->nom ?? ''}} {{$delegue->prenom ?? ''}}</option>
                                                                                        @endforeach 
                                                                                    </select>

                                                                            </div>                                                                            
                                                                        </div>
                            
                                                                        <div class="col-md-12">
                                                                            <div class="col-12">
                                                                                <br>
                                                                                <label  class="form-label">Piece Joint</label>
                                                                                <input value="{{$requete->codification ?? ''}}" name="piece_transfert" type="file" class="form-control"   >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-12">
                                                                                <br>
                                                                                <label  class="form-label">Message</label>
                                                                                <textarea required class="form-control" name="message_transfert"> </textarea>
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