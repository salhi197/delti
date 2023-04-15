                                                <div id="myModalEx" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="myModalLabel">Affectation Externe : </h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>


                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{route('affectation.store',['requete'=>$requete->id])}}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                                <div class="col-md-12">
                                                                                    <label for="validationCustom05" class="form-label">Secteur :</label>
                                                                                        <select value="{{$requete->user ?? ''}}" name="secteur_affectation" class="form-control ">
                                                                                            <option value="">--Séléctionner--</option>  
                                                                                            @foreach ($secteurs as $secteur)
                                                                                                    <option value="{{$secteur->id}}" >{{$secteur->type}}</option>
                                                                                                @endforeach
                                                                                        </select>
                                                                                </div>           
                                                                                <div class="col-md-12">
                                                                                    <label for="validationCustom05" class="form-label">Administration :</label>
                                                                                        <select value="{{$requete->user ?? ''}}" name="administration_affectation" class="form-control ">
                                                                                            <option value="">--Séléctionner--</option>
                                                                                            @foreach ($administrations as $administration)
                                                                                                <option value="{{$administration->id}}" >
                                                                                                    {{$administration->type}}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                            </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-12">
                                                                                <br>
                                                                                <label for="validationCustom05" class="form-label">Piece Joint</label>
                                                                                <input  name="piece_affectation" type="file" class="form-control"   >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-12">
                                                                                <br>
                                                                                <label for="validationCustom05" class="form-label">Message</label>
                                                                                <textarea class="form-control" name="message_affectation"> </textarea>
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