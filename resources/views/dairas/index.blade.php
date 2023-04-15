@extends('layouts.admin')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">daira</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">daira</li>
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
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"><i class="fas  fas fa-plus-circle"></i>  Ajouter </button>

                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"> + Ajouter daira </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('daira.store')}}" novalidate>
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
                                                                        <label for="validationCustom02" class="">Wilaya : </label>
                                                                        <select class="form-select " name="wilaya" id="wilaya"  required>
                                                                            <option value=""> Séléctionner </option>
                                                                            @foreach($wilayas as $wilaya)
                                                                                <option value="{{$wilaya->id}}">
                                                                                    {{$wilaya->name}}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en arabe  : </label>
                                                                        <input type="text"   name="nom_ar" class="form-control" id="validationCustom02" placeholder="" value="" required>
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

                                                                   <button class="btn btn-primary" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal" type="submit"><i class="fas fa-save"></i> Sauvegarder</button>

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
                                                <th>Nom en arabe</th>
                                                <th>Nom en anglais</th>
                                                <th>Nom en français</th>
                                                <th>Wilaya</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($dairas as $daira)
                                                <tr>
                                                    <td>{{$daira->numero ?? ''}}</td>
                                                    <td>{{$daira->name ?? $daira->nom_ar}}</td>
                                                    <td>{{$daira->name ?? $daira->nom_en}}</td>
                                                    <td>{{$daira->nom}}</td>
                                                    <td>{{$daira->wilaya()['name'] ?? ''}}</td>
                                                    <td> 


                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal{{$daira->id}}"><i class=" fas fa-pen"></i> </button>

                                        <div class="modal fade" id="firstmodal{{$daira->id}}" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"> Modifier daira : </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('daira.update',['daira'=>$daira->id])}}" novalidate>
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Code : </label>
                                                                        <input type="number"  value="{{$daira->numero ?? ''}}" name="code_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="">Wilaya : </label>
                                                                        <select class="form-select " name="wilaya_edit" id="wilaya"  required>
                                                                            <option value=""> Séléctionner </option>
                                                                            @foreach($wilayas as $wilaya)
                                                                                <option value="{{$wilaya->id}}" @if($wilaya->id == $daira->wilaya) selected @endif>
                                                                                    {{$wilaya->name}}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en arabe  : </label>
                                                                        <input type="text"  value="{{$daira->nom_ar ?? ''}}"  name="nom_ar_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en anglais : </label>
                                                                        <input type="text"  value="{{$daira->nom_en ?? ''}}"  name="nom_en_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en français : </label>
                                                                        <input type="text"  value="{{$daira->nom ?? ''}}"  name="nom_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>

                

                                                            
                                                            </div>
                                                            <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>

                                                                   <button class="btn btn-primary" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal" type="submit"><i class="fas fa-save"></i> Sauvegarder</button>

                                                            </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                                        <a href="{{route('daira.destroy',['daira'=>$daira->id])}}"
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