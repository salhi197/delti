@extends('layouts.admin')

@section('content')
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Types de Doléance</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Types de Doléances</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- test -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"><i class="fas  fas fa-plus-circle"></i> Ajouter</button>
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter Type</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('typedoleance.store')}}" >
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Numéro : </label>
                                                                        <input type="text"  name="numero" class="form-control"  placeholder="" value="" >
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom de Type</label>
                                                                        <input type="text" name="type" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom de Type en anglais : </label>
                                                                        <input type="text" name="type_en" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom de Type en arabe : </label>
                                                                        <input type="text" name="type_ar" class="form-control" id="validationCustom02" placeholder="" value="" required>
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

                                    <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Numero</th>
                                                <th>Nom en arabe</th>
                                                <th>Nom en anglais</th>
                                                <th>Nom en français</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($typedoleances as $typedoleance)
                                                <tr>
                                                    <td>{{$typedoleance->numero ?? $typedoleance->Numero}}</td>
                                                    <td>{{$typedoleance->type_ar ?? ''}}</td>
                                                    <td>{{$typedoleance->type ?? ''}}</td>
                                                    <td>{{$typedoleance->type_en ?? ''}}</td>


                                                    <td>
                                                        <div class="table-action">

                                                            <a href="{{route('typedoleance.destroy',['id_typedoleance'=>$typedoleance->id])}}"
                                                                onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal{{$typedoleance->id}}"> <i class=" fas fa-pen"></i>  </button>
                                                                <div class="modal fade" id="firstmodal{{$typedoleance->id}}" aria-hidden="true" aria-labelledby="" tabindex="-1">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">+ Modifier Type</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form class="needs-validation" method="post" action="{{route('typedoleance.update',['typedoleance'=>$typedoleance->id])}}" >
                                                                                    @csrf
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="validationCustom02" class="form-label">Numéro : </label>
                                                                                                <input type="text"   value="{{$typedoleance->numero ?? ''}}" name="numero_edit" class="form-control"  placeholder="" value="" >
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="validationCustom02" class="form-label">Nom de Type</label>
                                                                                                <input type="text"  value="{{$typedoleance->type ?? ''}}" name="type_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="validationCustom02" class="form-label">Nom de Type en anglais : </label>
                                                                                                <input type="text"  value="{{$typedoleance->type_en ?? ''}}" name="type_en_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="validationCustom02" class="form-label">Nom de Type en arabe : </label>
                                                                                                <input type="text" value="{{$typedoleance->type_ar ?? ''}}" name="type_ar_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-dismiss="modal">Sauvegarder</button>
                                                                                </form>

                                                                            </div>
                                                                            <div class="modal-footer"></div>
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