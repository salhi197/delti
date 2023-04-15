@extends('layouts.admin')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Communes</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Communes</li>
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
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal"><i class="fas  fas fa-plus-circle"></i> Ajouter</button>
                                        <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"> + Ajouter commune</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="needs-validation" method="post" action="{{route('commune.store')}}" novalidate>
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Numéro : </label>
                                                                        <input type="number"   value="{{$commune->code ?? ''}}" name="code" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Wilaya</label>
                                                                            <select class=" form-control" id="wilaya"  name="wilaya">
                                                                                <option value="" > -- Séléctionner-- </option>

                                                                                @foreach ($wilayas as $wilaya)
                                                                                    <option value="{{$wilaya->id}}" id="{{$wilaya->name}}" >
                                                                                        {{$wilaya->name}}
                                                                                    </option>
                                                                                @endforeach

                                                                            </select>
                                                                    </div>

                                                                </div>


                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Daira</label>
                                                                            <select class=" form-control" name="daira" id="daira">
                                                                                <option value="" > -- Séléctionner-- </option>
                                                                                @foreach($wilayas as $wilaya)
                                                                                    <optgroup label="{{$wilaya->nom ?? $wilaya->name}}">
                                                                                        @foreach($wilaya->dairas() as $daira)
                                                                                            <option value="{{$daira->id}}" >
                                                                                                {{$daira->nom}}
                                                                                            </option>

                                                                                        @endforeach

                                                                                    </optgroup>
                                                                                @endforeach
                                                                                
                                                                                
                                                                                
                                                                            </select>                                                                        
                                                                        
                                                                    </div>

                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en arabe: </label>
                                                                        <input type="text"   value="{{$commune->nom_ar ?? ''}}" name="nom_ar" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en anglais: </label>
                                                                        <input type="text"   value="{{$commune->nom_en ?? ''}}" name="nom_en" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en français: </label>
                                                                        <input type="text"   value="{{$commune->nom ?? ''}}" name="nom" class="form-control" id="validationCustom02" placeholder="" value="" required>
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

                                    <h4 class="card-title">Communes</h4>
                                    <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Numéro</th>
                                                <th>Nom</th>
                                                <th>Wilaya</th>
                                                <th>Daira</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($communes as $commune)
                                                <tr>
                                                    <td>{{$commune->numero}}</td>
                                                    <td>{{$commune->name}}</td>
                                                    <td>{{$commune->wilaya()}}</td>
                                                    <td>{{$commune->daira() ??''}}</td>
                                                    <td>

                                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal{{$commune->id}}"><i class=" fas fa-pen"> </i></button>
                                                        <div class="modal fade" id="firstmodal{{$commune->id}}" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"> Modifier commune </h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="needs-validation" method="post" action="{{route('commune.update',['commune'=>$commune->id])}}" novalidate>
                                                                            @csrf
                                                                            <div class="row">
                                                                            <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Code : </label>
                                                                        <input type="number"   value="{{$commune->numero ?? ''}}" name="code_edit" class="form-control" id="validationCustom02" placeholder="" value="" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">wilaya</label>
                                                                            <select class=" form-control" id="wilaya"  name="wilaya_edit">
                                                                                <option value="" > -- Séléctionner-- </option>

                                                                                @foreach ($wilayas as $wilaya)
                                                                                    <option @if($wilaya->id==$commune->wilaya) selected @endif value="{{$wilaya->id}}" id="{{$wilaya->name}}" >
                                                                                        {{$wilaya->name}}
                                                                                    </option>
                                                                                @endforeach

                                                                            </select>
                                                                    </div>

                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">daira</label>
                                                                            <select class=" form-control" name="daira_edit" id="daira">
                                                                                <option value="" > -- Séléctionner-- </option>
                                                                                @foreach($wilayas as $wilaya)
                                                                                    <optgroup label="{{$wilaya->nom ?? $wilaya->name}}">
                                                                                        @foreach($wilaya->dairas() as $daira)
                                                                                            <option @if($daira->id==$commune->daira) selected @endif value="{{$daira->id}}" >
                                                                                                {{$daira->nom}}
                                                                                            </option>

                                                                                        @endforeach

                                                                                    </optgroup>
                                                                                @endforeach
                                                                                
                                                                                
                                                                                
                                                                            </select>                                                                        
                                                                        
                                                                    </div>

                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en arabe: </label>
                                                                        <input type="text"   value="{{$commune->name_ar ?? ''}}" name="nom_ar_edit" class="form-control" id="validationCustom02" placeholder="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en anglais: </label>
                                                                        <input type="text"   value="{{$commune->name_en ?? ''}}" name="nom_en_edit" class="form-control" id="validationCustom02" placeholder="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="validationCustom02" class="form-label">Nom en français: </label>
                                                                        <input type="text"   value="{{$commune->name ?? ''}}" name="nom_edit" class="form-control" id="validationCustom02" placeholder="" required>
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
                                                        <a href="{{route('commune.destroy',['id_secteur'=>$commune->id])}}"
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

@section('scripts')
<script>

$(document).ready(function() {
            $("#daira").on("change",function(){
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#commune > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });  

            $("#wilaya").on("change",function(){
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#daira > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });  
            
            $("#daira2").on("change",function(){
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#commune2 > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });  

            $("#wilaya2").on("change",function(){
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#daira2 > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });  



})
                
</script>
@endsection