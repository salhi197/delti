@extends('layouts.client')



@section('content')                    

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Suggestion</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Suggestions</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ** TEST ** -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <!-- Tab panes -->
                                    <div class="tab-content p-3 text-muted">
                                        <div class="tab-pane active" id="home12" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <hr>
                                                            <form class="needs-validation" method="post"  action="{{route('suggestion.store')}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Nom *</label>
                                                                            <input name="nom_s" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Prénom *</label>
                                                                            <input name="prenom_s" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Wilaya</label>
                                                                            <select class="select2 form-control" id="wilaya_s" name="wilaya_s">
                                                                                <option value="" > -- Séléctionner-- </option>
                                                                                @foreach ($wilayas as $wilaya)
                                                                                    <option value="{{$wilaya->id}}" id="{{$wilaya->name}}" {{$wilaya->id == (old('wilaya_id') ?? ($member->wilaya_id ?? '')) ? 'selected' : ''}}>
                                                                                        {{$wilaya->name}}   
                                                                                    </option>
                                                                                @endforeach

                                                                            </select>                                                    

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Commune</label>
                                                                            <select class=" form-control" name="commune_s" id="commune_s">
                                                                                <option value="" > -- Séléctionner-- </option>
                                                                                @foreach($wilayas as $wilaya)
                                                                                    <optgroup label="{{$wilaya->nom ?? $wilaya->name}}">
                                                                                        @foreach($wilaya->communes() as $commune)
                                                                                            <option value="{{$commune->id}}"  id="{{$commune->name}}" >
                                                                                                {{$commune->name}}
                                                                                            </option>

                                                                                        @endforeach

                                                                                    </optgroup>
                                                                                @endforeach
                                                                                
                                                                                
                                                                                
                                                                            </select>                                                    

                                                                            
                                                                        </div>
                                                                        <br>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Secteur *</label>
                                                                                <select class=" select2 form-control" name="secteur_s" id="secteur">
                                                                                <option value="" > -- Séléctionner-- </option>

                                                                                    @foreach($secteurs as $secteur)
                                                                                        <option value="{{$secteur->id}}" id="{{$secteur->type}}" >
                                                                                            {{$secteur->type ?? ''}}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Objet de la Suggestion</label>
                                                                                <input name="objet_s" type="text" class="form-control" id="validationCustom05">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Suggestion</label>
                                                                                <textarea name="suggestion_s" class="form-control"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <button class="btn btn-primary" type="submit">Valider</button>
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
                        <!-- end col -->

                        <!-- end col -->
                    </div>                    
                    
@endsection

@section('scripts')
    <script>

    $('#wilaya_s').on('change',function(){
        var selectedVal = $(this).find("option:selected" ).attr('id');
        console.log(selectedVal)
        $('#commune_s > optgroup[label="'+selectedVal+'"]')
            .show()
            .siblings("optgroup")
            .css("display","none");

    })

    </script>

@endsection