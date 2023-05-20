@extends('layouts.client')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Tickets</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                    
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                    <a class="btn btn-success" href="{{route('count')}}">
                                        <i class="fa fa-list"></i>
                                        Retour Au Compteur
                                    </a>

                                        <!-- <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal" style="background-color:#e30613; border-style:none;">  <i class="fas  fas fa-plus-circle"></i>  
                                        Ajouter </button> -->
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
                                                                            <input type="text" require name="nom" class="form-control" id="validationCustom02" required>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Telephone : </label>
                                                                            <input type="number"  required name="telephone" class="form-control" id="validationCustom02" placeholder=""  required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Tour :  </label>
                                                                            <input type="number" required  name="ticket" class="form-control" id="validationCustom02" placeholder=""  required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                        <button class="btn btn-success" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal" style="border-style:none;"><i class="fas fa-save"></i> Sauvegarder</button>
                                                                </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">


                                <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                
                                                <th>Nom Prenom</th>
                                                <th>Ticket</th>
                                                <th>Telephone</th>
                                                <th>Action</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tickets as $ticket)
                                                <tr>
                                                    <td>{{$ticket->nom ?? $ticket->type_ar}}</td>
                                                    <td>{{$ticket->ticket ?? ''}}</td>
                                                    <td>{{$ticket->telephone ?? $ticket->type_en}}</td>
                                                    <td>
                                                    <a href="{{route('ticket.destroy',['ticket'=>$ticket->id])}}"
                                                                    onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                                                    <i class="fas fa-trash"></i>
                                                        </a>   

                                                    </td>


                                                </tr>

                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                <!-- end card body-->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col-->
                    </div>
                    <!-- end row-->


                    <!-- end row-->

@endsection