@extends('layouts.admin')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Etat de {{$source}}</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Etat de {{$source}}</li>
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
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal" style="background-color:#e30613; border-style:none;">  <i class="fas  fas fa-plus-circle"></i>  Ajouter </button>
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter etat de {{$source}}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('categorie.store')}}" novalidate>
                                                            @csrf
                                                                <input type="hidden" name="source" value="{{$source ?? ''}}"/>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Numéro :</label>
                                                                            <input type="number"  name="numero" class="form-control" id="validationCustom02" required>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Nom en Arabe : </label>
                                                                            <input type="text"   name="type_ar" class="form-control" id="validationCustom02" placeholder=""  required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Nom en Anglais : </label>
                                                                            <input type="text"   name="type_en" class="form-control" id="validationCustom02" placeholder=""  required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Nom en français :</label>
                                                                            <input type="text"  name="label" class="form-control" id="validationCustom02" required>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Catégorie Parente :</label>
                                                                            <select class="form-control" name="parent">
                                                                                <option value="">--Séléctionner--</option>
                                                                                @foreach($categories as $categorie)
                                                                                        <option value="categorie_{{$categorie->id}}">{{$categorie->label ?? ''}}</option>
                                                                                    @foreach($categorie->getSubs() as $souscategorie)
                                                                                        <option value="souscategorie_{{$souscategorie->id}}"> --- {{$souscategorie->label ?? ''}}</option>
                                                                                    @endforeach
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>                                                                
                                                                </div>
                                                                <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                        <button class="btn btn-primary" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal" style="background-color:#e30613; border-style:none;"><i class="fas fa-save"></i> Sauvegarder</button>
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
                                                <th>Nom en arabe</th>
                                                <th>Nom en anglais</th>
                                                <th>Nom en français</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $categorie)
                                                <tr>
                                                    <td>{{$categorie->Numero ?? $categorie->numero}}</td>
                                                    <td>{{$categorie->label_ar ?? $categorie->type_ar}}</td>
                                                    <td>{{$categorie->label_en ?? $categorie->type_en}}</td>
                                                    <td>{{$categorie->label ?? ''}}</td>
                                                        <td>
                                                        <div class="table-action">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal{{$categorie->id}}"> <i class=" fas fa-pen"></i>  </button>
                                                            <div class="modal fade" id="firstmodal{{$categorie->id}}" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Modifer Etat de {{$source}}</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form class="needs-validation" method="post" action="{{route('categorie.update',['categorie'=>$categorie->id])}}" novalidate>
                                                                                @csrf
                                                                        <div class="row">

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Numéro :</label>
                                                                        <input type="text"  name="numero_edit" value="{{$categorie->numero}}"  class="form-control" id="validationCustom02" required>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en Arabe : </label>
                                                                        <input type="text"   name="type_ar_edit" value="{{$categorie->type_ar}}"  class="form-control" id="validationCustom02" placeholder=""  required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en Anglais : </label>
                                                                        <input type="text"   name="type_en_edit" value="{{$categorie->type_en}}"  class="form-control" id="validationCustom02" placeholder=""  required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en français :</label>
                                                                        <input type="text"  name="label_edit" value="{{$categorie->label}}"  class="form-control" id="validationCustom02" required>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Catégorie Parente :</label>
                                                                        <select class="form-control" name="parent_edit" value="{{$categorie->parent}}" >
                                                                            <option >
                                                                                --Séléctionner--
                                                                            </option>
                                                                            @foreach($categories as $categorie)
                                                                                    <option value="categorie_{{$categorie->id}}">{{$categorie->label ?? ''}}</option>
                                                                                @foreach($categorie->getSubs() as $souscategorie)
                                                                                    <option value="souscategorie_{{$souscategorie->id}}"> --- {{$souscategorie->label ?? ''}}</option>
                                                                                @endforeach
                                                                            @endforeach

                                                                        </select>
                                                                    </div>
                                                                </div>                                                                                     

                                                                                </div>
                                                                            <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                                    <button class="btn btn-primary" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal" style="background-color:#e30613; border-style:none;"><i class="fas fa-save"></i> Sauvegarder</button>
                                                                            </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <a href="{{route('categorie.destroy',['id_categorie'=>$categorie->id])}}"
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