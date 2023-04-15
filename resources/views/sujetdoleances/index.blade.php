@extends('layouts.admin')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Sujets de Doléances</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Sujets de Doleances</li>
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
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"><i class="fas  fas fa-plus-circle"></i> Ajouter</button>
                                        <!-- First modal dialog -->
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">+ Ajouter Sujet de doléances</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('sujetdoleance.store')}}" novalidate>
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Secteur : </label>
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
                                                                                            <option value="{{$administration->id}}">{{$administration->type}}</option>
                                                                                        @endforeach

                                                                                    </optgroup>
                                                                                @endforeach
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom03" class="form-label">Sous Administration</label>
                                                                        <select name="sousadministration" id="sousadministration" class="form-select "  >
                                                                            <option value="" > -- Séléctionner-- </option>
                                                                            @foreach($administrations as $administration)
                                                                                    <optgroup label="{{$administration->type}}">
                                                                                        @foreach($administration->sousadministrations() as $sousadministration)
                                                                                            <option value="{{$sousadministration->id}}">{{$sousadministration->label  ?? ''}}</option>
                                                                                        @endforeach
                                                                                    </optgroup>
                                                                                @endforeach
                                                                        </select>

                                                                    </div>
                                                                </div>


                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Numero :</label>
                                                                        <input type="text"   name="numero" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en arabe :</label>
                                                                        <input type="text"   name="type_ar" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en anglais : </label>
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

                                    <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Numero</th>
                                                <th>Nom</th>
                                                <th>Secteur</th>
                                                <th>Administartion</th>
                                                <th>Type doleance</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($sujetdoleances as $sujetdoleance)
                                                <tr>

                                                    <td>{{$sujetdoleance->numero ?? $sujetdoleance->Numero}}</td>
                                                    <td>{{$sujetdoleance->type ?? ''}}</td>
                                                    <td>{{$sujetdoleance->secteur() ?? ''}}</td>
                                                    <td>{{$sujetdoleance->administration() ?? ''}}</td>
                                                    <td>{{$sujetdoleance->typedoleance() ?? ''}}</td>
                                                    <td>
                                                        <div class="table-action">


                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$sujetdoleance->id}}">
<i class=" fas fa-pen"> </i>                                                            </button>
                                                                                                                      
                                                            <div class="modal fade" id="exampleModal{{$sujetdoleance->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modifier sujet de doléance</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="needs-validation" method="post" action="{{route('sujetdoleance.update',['sujetdoleance'=>$sujetdoleance->id])}}" novalidate>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom01" class="form-label">Numéro :</label>
                                                                                        <input type="text"  value="{{$sujetdoleance->numero ?? ''}}" name="numero_edit" class="form-control" id="validationCustom01" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Nom en arabe :</label>
                                                                                        <input type="text"   value="{{$sujetdoleance->type_ar ?? ''}}" name="type_ar_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                </div>
                                                                                </div> 
                                                                                                                                                                <div class="col-md-6">
                                                                                <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Nom en anglais : </label>
                                                                                        <input type="text"   value="{{$sujetdoleance->type_en ?? ''}}" name="type_en_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="mb-3">
                                                                                        <label for="validationCustom02" class="form-label">Nom en français</label>
                                                                                        <input type="text"   value="{{$sujetdoleance->type ?? ''}}" name="type_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                                        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Sauvegarder</button>
                                                                                </div>   


                                                                            </div>
                                                                        </form>

                                                                    </div>

                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <a href="{{route('sujetdoleance.destroy',['id_sujetdoleance'=>$sujetdoleance->id])}}"
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