@extends('layouts.admin')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Types de Requêtes</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Types de Requêtes</li>
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
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"> Ajouter Type</button>


                                        <!-- First modal dialog -->
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter Type</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('typerequete.store')}}" novalidate>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom01" class="form-label">Numéro</label>
                                                                        <input type="text"  name="numero" class="form-control" id="validationCustom01" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Type</label>
                                                                        <input type="text"   name="type" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- Toogle to second dialog -->
                                                        <button class="btn btn-primary" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Sauvegarder</button>
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

                                    <h4 class="card-title">Types de Requêtes</h4>
                                    <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($typerequetes as $typerequete)
                                                <tr>
                                                    <td>{{$typerequete->id ?? ''}}</td>
                                                    <td>{{$typerequete->type ?? ''}}</td>
                                                    <td>
                                                        <div class="table-action">

                                                            <a href="{{route('typerequete.destroy',['id_typerequete'=>$typerequete->id])}}"
                                                                onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$typerequete->id}}">
                                                                Modifier
                                                            </button>
                                                                                                                      
                                                            <div class="modal fade" id="exampleModal{{$typerequete->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="needs-validation" method="post" action="{{route('typerequete.update',['typerequete'=>$typerequete->id])}}" novalidate>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom01" class="form-label">Numéro</label>
                                                                                        <input type="text"  value="{{$typerequete->numero ?? ''}}" name="numero" class="form-control" id="validationCustom01" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Type</label>
                                                                                        <input type="text"   value="{{$typerequete->type ?? ''}}" name="type" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            
                                                        </div>
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