@extends('layouts.admin')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Action audience</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Action audience</li>
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
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal" style="background-color:#ebb02d; border-style:none;"><i class="fas  fas fa-plus-circle"></i> Ajouter </button>
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter action d'audience</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('action.store')}}" novalidate>
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Numéro :</label>
                                                                        <input type="text"  name="numero" class="form-control" id="validationCustom02" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en arabe :</label>
                                                                        <input type="text"  name="type_ar" class="form-control" id="validationCustom02" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en anglais :</label>
                                                                        <input type="text"  name="type_en" class="form-control" id="validationCustom02" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en français :</label>
                                                                        <input type="text"  name="label" class="form-control" id="validationCustom02" required>
                                                                    </div>
                                                                </div>




                                                                                                                               

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                <button class="btn btn-primary" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal" type="submit"style="background-color:#ebb02d; border-style:none;"><i class="fas fa-save"></i> Sauvegarder</button>
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
                                                <th>Numéro</th>
                                                <th>Nom en ar</th>
                                                <th>Nom en Anglais</th>
                                                <th>Nom en fr</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($actions as $action)
                                                <tr>
                                                    <td>{{$action->numero ?? ''}}</td>
                                                    <td>{{$action->type_ar ?? ''}}</td>
                                                    <td>{{$action->type_en ?? ''}}</td>
                                                    <td>{{$action->label ?? ''}}</td>
                                                    <td>
                                                        <div class="table-action">


                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal{{$action->id}}"> <i class=" fas fa-pen"></i> </button>
                                                            <div class="modal fade" id="firstmodal{{$action->id}}" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Modifer action :</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form class="needs-validation" method="post" action="{{route('action.update',['action'=>$action->id])}}" novalidate>
                                                                                @csrf
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom02" class="form-label">Numero :</label>
                                                                                            <input type="text" value="{{$action->numero ?? ''}}"  name="numero_edit" class="form-control"  required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label f class="form-label">Label Arabe :</label>
                                                                                            <input type="text" value="{{$action->type_ar ?? ''}}"  name="type_ar_edit" class="form-control"  required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label f class="form-label">Label Anglais :</label>
                                                                                            <input type="text" value="{{$action->type_en ?? ''}}"  name="type_en_edit" class="form-control"  required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label f class="form-label">Label :</label>
                                                                                            <input type="text" value="{{$action->label ?? ''}}"  name="label_edit" class="form-control"  required>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                                    <button class="btn btn-primary" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal" type="submit"style="background-color:#ebb02d; border-style:none;"><i class="fas fa-save"></i> Sauvegarder</button>

                                                                                </div>

                                                                            </form>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <a href="{{route('action.destroy',['id_action'=>$action->id])}}"
                                                                onclick="return confirm('etes vous sure  ?')" class="text-white btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
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