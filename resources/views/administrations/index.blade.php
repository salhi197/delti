@extends('layouts.admin')
@section('styles')



@endsection
@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">administrations</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Administartions</li>
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
                                                        <h5 class="modal-title">+ Ajouter administration</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('administration.store')}}" novalidate>
                                                            @csrf
                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom01" class="form-label">Numéro :</label>
                                                                        <input type="text"  name="numero" class="form-control" id="validationCustom01" placeholder="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom Arabe : </label>
                                                                        <input type="text"   name="type_ar" class="form-control" id="validationCustom02" placeholder="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom Anglais: </label>
                                                                        <input type="text"   name="type_en" class="form-control" id="validationCustom02" placeholder="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom Français: </label>
                                                                        <input type="text"   name="type" class="form-control" id="validationCustom02" placeholder="" required>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Secteur :</label>
                                                                        <select class="form-control" name="secteur">
                                                                            <option value="">--Séléctionner--</option>
                                                                            @foreach($secteurs as $secteur)
                                                                                <option value="{{$secteur->id}}">{{$secteur->type ?? ''}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Administartion Parente: </label>
                                                                        <select class="form-control" name="parent">
                                                                            <option value="">--Séléctionner--</option>

                                                                            @foreach($administrations as $administration)
                                                                                <option value="administration_{{$administration->id}}">{{$administration->type ?? $administration->label}}</option>
                                                                                @foreach($administration->sousadministrations() as $sousadministration)
                                                                                    <option value="sousadministration_{{$sousadministration->id}}">--{{$sousadministration->type ?? $sousadministration->label}}</option>
                                                                                    @foreach($sousadministration->soussousadministrations() as $soussousadministration)
                                                                                        <option value="soussousadministration_{{$soussousadministration->id}}">----{{$soussousadministration->type ?? $soussousadministration->label}}</option>
                                                                                        @foreach($soussousadministration->soussoussousadministrations() as $soussoussousadministration)
                                                                                            <option value="soussoussousadministration_{{$soussoussousadministration->id}}">------{{$soussoussousadministration->type ?? $soussoussousadministration->label}}</option>
                                                                                        @endforeach
                                                                                    @endforeach

                                                                                @endforeach
                                                                            @endforeach
                                                                        </select>
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
                                                <th>ID</th>
                                                <th>Nom Arabe</th>
                                                <th>Nom Anglais</th>
                                                <th>Nom Français</th>

                                                <th>Secteur </th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($administrations as $administration)
                                                <tr>
                                                    <td>{{$administration->numero ?? ''}}</td>
                                                    <td>{{$administration->type_ar ?? ''}}</td>
                                                    <td>{{$administration->type_en ?? ''}}</td>
                                                    <td>{{$administration->type ?? ''}}</td>
                                                    <td>{{$administration->secteur() ?? ''}}</td>
                                                    <td>
                                                        <div class="table-action">


                                                            
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal{{$administration->id}}"> <i class=" fas fa-pen"> </i></button>

                                                                                                                      
                                                            <div class="modal fade" id="firstmodal{{$administration->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modifier administration</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="needs-validation" method="post" action="{{route('administration.update',['administration'=>$administration->id])}}" novalidate>
                                                                            @csrf
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom01" class="form-label">Numéro :  </label>
                                                                                        <input type="text" value="{{$administration->numero ?? ''}}"  name="numero_edit" class="form-control" id="validationCustom01" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Nom Arabe : </label>
                                                                                        <input type="text"  value="{{$administration->type_ar ?? ''}}"  name="type_ar_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Nom Anglais : </label>
                                                                                        <input type="text"  value="{{$administration->type_en ?? ''}}"  name="type_en_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Nom en français : </label>
                                                                                        <input type="text"  value="{{$administration->type ?? ''}}"  name="type_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Secteur :</label>
                                                                                        <select class="form-control" name="secteur_edit">
                                                                                            <option value="">--Séléctionner--</option>
                                                                                            @foreach($secteurs as $secteur)
                                                                                                <option @if($secteur->id==$administration->secteur) selected @endif value="{{$secteur->id}}">{{$secteur->type ?? ''}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Administartion Parente: </label>
                                                                                        <select class="form-control" name="parent_edit">
                                                                                            <option value="">--Séléctionner--</option>

                                                                                            @foreach($administrations as $administration)
                                                                                                <option value="administration_{{$administration->id}}">{{$administration->type ?? $administration->label}}</option>
                                                                                                @foreach($administration->sousadministrations() as $sousadministration)
                                                                                                    <option value="sousadministration_{{$sousadministration->id}}">--{{$sousadministration->type ?? $sousadministration->label}}</option>
                                                                                                    @foreach($sousadministration->soussousadministrations() as $soussousadministration)
                                                                                                        <option value="soussousadministration_{{$soussousadministration->id}}">----{{$soussousadministration->type ?? $soussousadministration->label}}</option>
                                                                                                        @foreach($soussousadministration->soussoussousadministrations() as $soussoussousadministration)
                                                                                                            <option value="soussoussousadministration_{{$soussoussousadministration->id}}">------{{$soussoussousadministration->type ?? $soussoussousadministration->label}}</option>
                                                                                                        @endforeach
                                                                                                    @endforeach

                                                                                                @endforeach
                                                                                            @endforeach
                                                                                        </select>
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


                                                            <a href="{{route('administration.destroy',['id_administration'=>$administration->id])}}"
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

@section('scripts')
    

@endsection