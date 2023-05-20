@extends('layouts.client')

@section('content')

                    <div class="row centerdiv">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            </div>
                        </div>
                    </div>
                    <div class="row centerdiv">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h3 class="mb-sm-0">Bienvenue {{Auth::guard('client')->user()->nom ?? Auth::guard('client')->user()->name ?? ''}}</h3>
                                <h3 class="mb-sm-0">Votre Code est : {{Auth::guard('client')->user()->id}}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row centerdiv">
                        <div class="col-md-12">
                                <div class="qty mt-5">
                                    <span class="minus btn-success">-</span>
                                    <span type="number" class="count" name="qty" >{{Auth::guard('client')->user()->count}}</span>
                                    <span class="plus btn-success">+</span>
                                </div>                            
                        </div><!-- end col -->
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card-body align-items-center d-flex justify-content-center">
                                    <div class="d-flex">
                                    <!-- {!! QrCode::size(100)->generate('https://deltti.com/compteur/'.Auth::guard('client')->user()->id); !!} -->
                                    </div>
                                </div><!-- end cardbody -->

                        </div><!-- end col -->
                    </div>
                    <div class="row centerdiv">
                        <div class="col-md-12">
                            <div class="card-body align-items-center d-flex justify-content-center">
                                    <div class="d-flex">
                                        <form method="post" action="{{route('set.count')}}">
                                            @csrf
                                            <div class="input-group">
                                                
                                               <input type="text" placeholder="réinitialiser votre compteur" name="count"  class="form-control" >

                                                <span class="input-group-btn">
                                                <button  type="submit" class="btn btn-success"  ><i class="fa fa-check"></i>
                                                </button>
                                                </span>
                                            </div>                                                                       

                                        </form>

                                    </div>
                                </div><!-- end cardbody -->

                        </div><!-- end col -->
                    </div>



<br>
                  
                    <div class="row centerdiv">
                        <div class="col-md-12">
                            
                            <br>
                            
                            <div class="col-md-12">
                            <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal" style=" border-style:none;">  <i class="fas  fas fa-plus-circle"></i>  Ajouter Ticket</button>
                            <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal22" style=" border-style:none;">  <i class="fas  fas fa-plus-circle"></i>  Ajouter Rdv</button>
                                    <a class="btn btn-success" style=" border-style:none;" href="/histo"><i class="fas  fas fa-list"></i> Liste Attente</a>

                            </div>



                            
                            
                        </div><!-- end col -->
                    </div>


                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"> Ajouter </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('ticket.store')}}" novalidate>
                                                            @csrf
                                                                <input type="hidden" name="source" value=""/>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Nom Prenom :</label>
                                                                            <input type="text"  name="nom" class="form-control" id="validationCustom02" required>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Telephone : </label>
                                                                            <input type="number"   name="telephone" class="form-control" id="validationCustom02" placeholder=""  required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Tour :  </label>
                                                                            <input type="number"   name="ticket" class="form-control" id="validationCustom02" placeholder=""  required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Type (Consultation / Suivie / etc ..) :  </label>
                                                                            <input type="text"   name="type" class="form-control" id="validationCustom02" placeholder=""  required>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                        <button class="btn btn-success" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal" style=" border-style:none;"><i class="fas fa-save"></i> Sauvegarder</button>
                                                                </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>



                                        <div class="modal fade" id="firstmodal22" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"> Ajouter Rendez-vous </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('rdv.store')}}" novalidate>
                                                            @csrf
                                                                <input type="hidden" name="source" value=""/>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Nom Prenom :</label>
                                                                            <input type="text"  name="nom" class="form-control" id="validationCustom02" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Telephone : </label>
                                                                            <input type="number"   name="telephone" class="form-control" id="validationCustom02" placeholder=""  required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Date Rdv :  </label>
                                                                            <input type="date"   name="daterdv" class="form-control" id="validationCustom02" placeholder=""  required>
                                                                        </div>
                                                                    </div>


                                                                   

                                                                </div>
                                                                <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                        <button class="btn btn-success" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal" style=" border-style:none;"><i class="fas fa-save"></i> Sauvegarder</button>
                                                                </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
@endsection

@section('styles')
<style>
.centerdiv {
    text-align: center;
}

</style>
@endsection