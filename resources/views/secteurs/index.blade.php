@extends('layouts.admin')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Secteurs</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit </a></li>
                                        <li class="breadcrumb-item active">Secteurs</li>
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
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"> <i class="fas  fas fa-plus-circle"></i> Ajouter</button>
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter Secteur</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('secteur.store')}}" novalidate>
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom01" class="form-label">Numéro :</label>
                                                                        <input type="text"  name="numero" class="form-control" id="validationCustom01" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en Arabe</label>
                                                                        <input type="text"   name="type_ar" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en Anglais</label>
                                                                        <input type="text"   name="type_en" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>                                                            
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en français</label>
                                                                        <input type="text"   name="type" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Sauvegarder</button>
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

                                    <h4 class="card-title">Secteurs</h4>
                                    <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                
                                                <th>Numéro</th>
                                                <th>Nom</th>
                                                <th>Nom en En</th>
                                                <th>Nom en fr</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($secteurs as $secteur)
                                                <tr>
                                                    <td>{{$secteur->numero ?? ''}}</td>
                                                    <td>{{$secteur->type_ar ?? ''}}</td>
                                                    <td>{{$secteur->type_en ?? ''}}</td>
                                                    <td>{{$secteur->type ?? ''}}</td>
                                                    <td>
                                                        <div class="table-action">


                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal{{$secteur->id}}"> <i class=" fas fa-pen"> </i></button>
                                                                                                                      
                                                            <div class="modal fade" id="firstmodal{{$secteur->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modifier Secteur</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="needs-validation" method="post" action="{{route('secteur.update',['secteur'=>$secteur->id])}}" novalidate>
                                                                            @csrf
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom01" class="form-label">Numéro :</label>
                                                                                        <input type="text" value="{{$secteur->numero ?? ''}}"  name="numero_edit" class="form-control" id="validationCustom01" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Nom en Arabe</label>
                                                                                        <input type="text"  value="{{$secteur->type_ar ?? ''}}"  name="type_ar_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Nom en Anglais</label>
                                                                                        <input type="text"  value="{{$secteur->type_en ?? ''}}"  name="type_en_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>                                                                            
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Nom en français</label>
                                                                                        <input type="text"  value="{{$secteur->type ?? ''}}"  name="type_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                                        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Sauvegarder</button>
                                                                            </div>

                                                                        </form>

                                                                    </div>

                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <a href="{{route('secteur.destroy',['id_secteur'=>$secteur->id])}}"
                                                                onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </a>                                                         
                                                        </div>
                                                    </td>

                                                </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                    <label for="" class="form-label">Total : {{count($secteurs)}}</label>

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