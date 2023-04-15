                                                <div id="myModalAttr" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="myModalLabel">Attribution  : </h5>

                                                

                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route('attribution.store',['requete'=>$requete->id])}}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="col-12">
                                                                                <label  class="form-label">Utilisateur  x :</label>
                                                                                    <select  name="user_attr" class=" form-control ">
                                                                                        <option value="">Séléctionner</option>
                                                                                        @foreach($users as $user)
                                                                                            <option value="{{$user->id}}">{{$user->nom ?? ''}} {{$user->prenom ?? ''}}</option>
                                                                                        @endforeach 
                                                                                    </select>

                                                                            </div>                                                                            
                                                                        </div>
                            
                                                                        <div class="col-md-12">
                                                                            <div class="col-12">
                                                                                <br>
                                                                                <label  class="form-label">Piece Joint</label>
                                                                                <input  name="piece_attr" type="file" class="form-control"   >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-12">
                                                                                <br>
                                                                                <label  class="form-label">Message</label>
                                                                                <textarea required class="form-control" name="message_attr"> </textarea>
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