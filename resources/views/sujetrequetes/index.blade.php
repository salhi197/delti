@extends('layouts.admin')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Sujets de Requêtes</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Sujets de Requêtes</li>
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
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"style="background-color:#e30613; border-style:none;">  <i class="fas  fas fa-plus-circle"></i> Ajouter </button>
                                        <!-- First modal dialog -->
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter Sujet de requete</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('sujetrequete.store')}}" novalidate>
                                                            @csrf
                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Numéro :</label>
                                                                        <input type="text" name="numero" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Secteur</label>
                                                                        <select class="form-control" name="secteur" id="secteur">
                                                                        <option value="" > -- Séléctionner-- </option>

                                                                            @foreach($secteurs as $secteur)
                                                                                <option value="{{$secteur->id}}" id="{{$secteur->type}}" >
                                                                                    {{$secteur->type ?? ''}}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Administration</label>
                                                                        <select name="administration" id="administration" class="form-select "  >
                                                                                <option value="" > -- Séléctionner-- </option>
                                                                                @foreach($secteurs as $secteur)
                                                                                    <optgroup label="{{$secteur->type}}">
                                                                                    @foreach($secteur->administrations() as $administration)
                                                                                            <option id="{{$administration->type}}" value="{{$administration->id}}">{{$administration->type}}</option>
                                                                                        @endforeach

                                                                                    </optgroup>
                                                                                @endforeach
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Type Requete</label>
                                                                        <select class="form-control" name="typerequete">
                                                                            @foreach($typerequetes as $typerequete)
                                                                                <option value="{{$typerequete->id}}">
                                                                                    {{$typerequete->type ?? ''}}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
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
                                                                        <label for="validationCustom02" class="form-label">Nom en français :</label>
                                                                        <input type="text"   name="type" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>

                                                                <button class="btn btn-primary" type="submit" style="background-color:#e30613; border-style:none;"><i class="fas fa-save"></i> Sauvegarder</button>

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
                                                <th>Nom arabe</th>
                                                <th>Nom anglais</th>
                                                <th>Nom français</th>
                                                <th>Secteur</th>
                                                <th>Administartion</th>
                                                <th>type requete</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($sujetrequetes as $sujetrequete)
                                                <tr>
                                                    <td>{{$sujetrequete->numero ?? ''}}</td>
                                                    <td>{{$sujetrequete->type_ar ?? ''}}</td>

                                                    <td>{{$sujetrequete->type ?? ''}}</td>
                                                    <td>{{$sujetrequete->type_en ?? ''}}</td>
                                                    <td>{{$sujetrequete->secteur() ?? ''}}</td>
                                                    <td>{{$sujetrequete->administration() ?? ''}}</td>
                                                    <td>{{$sujetrequete->typerequete() ?? ''}}</td>
                                                    <td>
                                                        <div class="table-action">

                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal{{$sujetrequete->id}}"><i class=" fas fa-pen"></i>  </button>
                                                                                                                      
                                                            <div class="modal fade" id="exampleModal{{$sujetrequete->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modifer sujet de requete</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('sujetrequete.update',['sujetrequete'=>$sujetrequete->ud])}}" novalidate>
                                                            @csrf
                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Numéro :</label>
                                                                        <input type="text" value="{{$sujetrequete->numero ?? ''}}" name="numero" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Secteur : </label>
                                                                        <select class="form-control" value="{{$sujetrequete->secteur ?? ''}}" name="secteur" id="secteur">
                                                                        <option value="" > -- Séléctionner-- </option>

                                                                            @foreach($secteurs as $secteur)
                                                                                <option @if($secteur->id == $sujetrequete->secteur) selected @endif value="{{$secteur->id}}" id="{{$secteur->type}}" >
                                                                                    {{$secteur->type ?? ''}}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Administration : </label>
                                                                        <select value="{{$sujetrequete->administration ?? ''}}" name="administration" id="administration" class="form-select "  >
                                                                                <option value="" > -- Séléctionner-- </option>
                                                                                @foreach($secteurs as $secteur)
                                                                                    <optgroup label="{{$secteur->type}}">
                                                                                        @foreach($secteur->administrations() as $administration)
                                                                                            <option id="{{$administration->type}}" value="{{$administration->id}}">{{$administration->type}}</option>
                                                                                        @endforeach
                                                                                    </optgroup>
                                                                                @endforeach
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Type de requete : </label>
                                                                        <select class="form-control" value="{{$sujetrequete->typerequete ?? ''}}" name="typerequete">
                                                                            @foreach($typerequetes as $typerequete)
                                                                                <option @if($typerequete->id == $sujetrequete->typerequete) selected @endif value="{{$typerequete->id}}">
                                                                                    {{$typerequete->type ?? ''}}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en Arabe :</label>
                                                                        <input type="text"   value="{{$sujetrequete->type_ar ?? ''}}" name="type_ar" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>


                                                                
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en Anglais :</label>
                                                                        <input type="text"   value="{{$sujetrequete->type_en ?? ''}}" name="type_en" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en français :</label>
                                                                        <input type="text"   value="{{$sujetrequete->type ?? ''}}" name="type" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                        <button class="btn btn-primary" type="submit" style="background-color:#e30613; border-style:none;"><i class="fas fa-save"></i>Sauvegarder</button>
                                                                    </div>
                                                        </form>

                                                                    </div>

                                                                    </div>
                                                                </div>
                                                </div>


                                                            <a href="{{route('sujetrequete.destroy',['id_sujetrequete'=>$sujetrequete->id])}}"
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
<script>
            $("#secteur").on("change",function(){
                $('#administrationdiv').show()
                ////////////////////////////////
                $('#sousadministration').val("")
                $('#administration').val("")

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#administration > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });  


            $("#administration").on("change",function(){
                
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#sousadministration > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });

</script>
@endsection