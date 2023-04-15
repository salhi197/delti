@extends('layouts.admin')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Sources d'audience</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Sources d'audience</li>
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
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"style="background-color:#ebb02d; border-style:none;">  <i class="fas  fas fa-plus-circle"></i>  Ajouter </button>


                                        <!-- First modal dialog -->
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter source audience</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('sourceaudience.store')}}" >
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Numéro : </label>
                                                                        <input type="text" name="numero" class="form-control"  placeholder="" value="" required>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom : </label>
                                                                        <input type="text"   name="type" class="form-control"  placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Abréviation : </label>
                                                                        <input type="text"   name="premierelettre" class="form-control"   required>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                            <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-dismiss="modal" style="background-color:#ebb02d; border-style:none;"><i class="fas fa-save"></i>Sauvegarder</button>
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
                                                <th>Numero</th>
                                                <th>Nom</th>
                                                <th>Abréviation</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($sourceaudiences as $sourceaudience)
                                                <tr>
                                                    <td>{{$sourceaudience->numero ?? ''}}</td>
                                                    <td>{{$sourceaudience->type ?? ''}}</td>
                                                    <td>{{$sourceaudience->premierelettre ?? ''}}</td>
                                                    <td>
                                                        <div class="table-action">



                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal{{$sourceaudience->id}}"> <i class=" fas fa-pen"></i></button>


                                                            <!-- First modal dialog -->
                                                            <div class="modal fade" id="firstmodal{{$sourceaudience->id}}" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Modifer source d'audience</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form class="needs-validation" method="post" action="{{route('sourceaudience.update',['sourceaudience'=>$sourceaudience->id])}}" >
                                                                                @csrf
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom02" class="form-label">Numero : </label>
                                                                                            <input type="text"  value="{{$sourceaudience->numero ?? ''}}"  name="numero_edit" class="form-control"  placeholder="" value="" required>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom02" class="form-label">Nom :</label>
                                                                                            <input type="text"  value="{{$sourceaudience->type ?? ''}}"  name="type_edit" class="form-control"  placeholder="" value="" required>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom02" class="form-label">Abréviation : </label>
                                                                                            <input type="text" value="{{$sourceaudience->premierelettre ?? ''}}"  name="premierelettre_edit" class="form-control"   required>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                                <button class="btn btn-primary" type="submit" style="background-color:#ebb02d; border-style:none;"><i class="fas fa-save"></i> Sauvegarder</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="{{route('sourceaudience.destroy',['id_sourceaudience'=>$sourceaudience->id])}}"
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