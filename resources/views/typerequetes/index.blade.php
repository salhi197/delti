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
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal" style="background-color:#e30613; border-style:none;">  <i class="fas  fas fa-plus-circle"></i> Ajouter </button>


                                        <!-- First modal dialog -->
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter type de requete</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('typerequete.store')}}" >
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Numéro : </label>
                                                                        <input type="text"   name="numero" class="form-control"  required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en Arabe :</label>
                                                                        <input type="text"   name="type_ar" class="form-control"  required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en Anglais :</label>
                                                                        <input type="text"   name="type_en" class="form-control"  required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en français : </label>
                                                                        <input type="text"   name="type" class="form-control"  required>
                                                                    </div>
                                                                </div>

                                                                
                                                                
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                            <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-dismiss="modal"style="background-color:#e30613; border-style:none;"><i class="fas fa-save"></i> Sauvegarder</button>
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
                                                <th>Numéro</th>
                                                <th>Nom arabe</th>
                                                <th>Nom anglais</th>
                                                <th>Nom  français</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($typerequetes as $typerequete)
                                                <tr>
                                                    <td>{{$typerequete->numero ?? ''}}</td>
                                                    <td>{{$typerequete->type_ar ?? ''}}</td>
                                                    <td>{{$typerequete->type_en ?? ''}}</td>
                                                    <td>{{$typerequete->type ?? ''}}</td>


                                                    <td>
                                                        <div class="table-action">



                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal{{$typerequete->id}}"> <i class=" fas fa-pen"></i> </button>
                                                            <div class="modal fade" id="firstmodal{{$typerequete->id}}" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Modifier type de requete</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('typerequete.update',['typerequete'=>$typerequete->id])}}" >
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Numéro : </label>
                                                                        <input type="text"   name="numero_edit" value="{{$typerequete->numero ?? ''}}" class="form-control"  required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en Arabe :</label>
                                                                        <input type="text"   name="type_ar_edit" value="{{$typerequete->type_ar ?? ''}}" class="form-control"  required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en Anglais :</label>
                                                                        <input type="text"   name="type_en_edit" value="{{$typerequete->type_en ?? ''}}" class="form-control"  required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en français : </label>
                                                                        <input type="text"   name="type_edit" value="{{$typerequete->type ?? ''}}" class="form-control"  required>
                                                                    </div>
                                                                </div>

                                                                
                                                                
                                                            </div>
                                                        </form>                                                                        
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                                <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-dismiss="modal" style="background-color:#e30613; border-style:none;"><i class="fas fa-save"></i> Sauvegarder</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <a href="{{route('typerequete.destroy',['id_typerequete'=>$typerequete->id])}}"
                                                                onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                            
                                                        </div>
                                                    </td>

                                                </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                    <label for="" class="form-label">Total : {{count($typerequetes)}}</label>

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