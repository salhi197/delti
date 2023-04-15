@extends('layouts.admin')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Wilaya</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Wilaya</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"> <i class="fas  fas fa-plus-circle"></i> Ajouter </button>

                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"> Ajouter </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('wilaya.store')}}" novalidate>
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Code : </label>
                                                                        <input type="number"   name="code" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en arabe  : </label>
                                                                        <input type="text"   name="nom_fr" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en anglais : </label>
                                                                        <input type="text"   name="nom_en" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en français : </label>
                                                                        <input type="text"   name="nom" class="form-control" id="validationCustom02" placeholder="" value="" required>
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Nom en Arabe</th>
                                                <th>Nom en Anglais</th>
                                                <th>Nom en français</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($wilayas as $wilaya)
                                                <tr>
                                                    <td>{{$wilaya->numero ?? ''}}</td>
                                                    <td>{{$wilaya->type_ar}}</td>
                                                    <td>{{$wilaya->type_en}}</td>
                                                    <td>{{$wilaya->name}}</td>
                                                    <td> 


                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal{{$wilaya->id}}"><i class=" fas fa-pen"> </i></button>

                                        <div class="modal fade" id="firstmodal{{$wilaya->id}}" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"> Modifier : </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('wilaya.update',['wilaya'=>$wilaya->id])}}" novalidate>
                                                            @csrf
                                                            <div class="row">
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Code : </label>
                                                                        <input type="number"  value="{{$wilaya->numero ?? ''}}"  name="numero_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en arabe  : </label>
                                                                        <input type="text"  value="{{$wilaya->type_ar ?? ''}}"  name="nom_ar_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en anglais : </label>
                                                                        <input type="text"  value="{{$wilaya->type_en ?? ''}}"  name="nom_en_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en français : </label>
                                                                        <input type="text"  value="{{$wilaya->name ?? ''}}"  name="nom_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>


                                                            

                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                            <button class="btn btn-primary" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="fas fa-save"></i> Sauvegarder</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                                                <a href="{{route('wilaya.destroy',['wilaya'=>$wilaya->id])}}"
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