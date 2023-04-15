@extends('layouts.client')
@section('styles')

@endsection
@section('content')

<style>
    label{
        font-weight:500;
    }
</style>
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Déposer une Doleance</h4>


                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body"
                                style="border-color: #252b3b; border: solid 3px; border-radius: 5px;">
                                <div class="tab-content p-3 text-muted">
                                    <div class="tab-pane active" id="home-1" role="tabpanel">
                                        <form method="post" action="{{route('doleance.store.client')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-6">
                                                        <label for="validationCustom03" class="form-label">Wilaya
                                                            *</label>
                                                        <select class=" select2 form-select" id="wilaya_select" name="wilaya">
                                                            <option value="" > Séléctionner </option>
                                                            @foreach ($wilayas as $wilaya)
                                                                <option value="{{$wilaya->id}}" id="{{$wilaya->name}}" {{$wilaya->id == (old('wilaya_id') ?? ($member->wilaya_id ?? '')) ? 'selected' : ''}}>
                                                                    {{$wilaya->name}}   
                                                                </option>
                                                            @endforeach

                                                        </select>                                                    

                                                            

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="validationCustom03" class="form-label">Daira
                                                            *</label>
                                                    <select class="form-select" name="daira" id="daira">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach($wilayas as $wilaya)
                                                            <optgroup label="{{$wilaya->nom ?? $wilaya->name}}">
                                                                @foreach($wilaya->dairas() as $daira)
                                                                    <option value="{{$daira->id}}"  id="{{$daira->nom}}" >
                                                                        {{$daira->nom}}
                                                                    </option>

                                                                @endforeach

                                                            </optgroup>
                                                        @endforeach
                                                        
                                                        
                                                        
                                                    </select>                                                    

                                                            

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="validationCustom04" class="form-label">Commune *</label>
                                                        <select class=" form-select" name="commune" id="commune">
                                                            <option value="" > -- Séléctionner-- </option>
                                                            @foreach($dairas as $daira)
                                                                <optgroup label="{{$daira->nom}}">
                                                                    @foreach($daira->communes() as $commune)
                                                                        <option value="{{$commune->id}}" >
                                                                            {{$commune->name}}
                                                                        </option>

                                                                    @endforeach

                                                                </optgroup>
                                                            @endforeach

                                                        </select>                                                    

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Sujet Doleances :  *
                                                        </label>
                                                        <select name="type_requete" class="form-select " id="typerequete" required>
                                                        <option value="" > -- Séléctionner-- </option>
                                                            @foreach ($sujetdoleances as $sujetdoleance)
                                                                <option value="{{$sujetdoleance->id}}" id="{{$sujetdoleance->type ?? ''}}" >{{$sujetdoleance->type ?? ''}}</option>
                                                            @endforeach
                                                        </select>                                                    

                                                    </div>
                                                </div>

                                            </div> -->
                                            <div class="row" >

                                            
                                            <div class="col-md-4" id="secteur">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label" style="color:#000;font-weight: bold;">Secteur <span style="color:#e30613;">*</span></label>
                                                    <select class="form-select" name="secteur" id="secteur">
                                                    <option value="" > -- Séléctionner-- </option>

                                                        @foreach($secteurs as $secteur)
                                                            <option value="{{$secteur->id}}" id="{{$secteur->type}}" >
                                                                {{$secteur->type ?? ''}}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4" id="administrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label" style="color:#000;font-weight: bold;">Administration</label>
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

                                            <div class="col-md-4" id="sousadministrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label" style="color:#000;font-weight: bold;">Administration N1 </label>
                                                    <select name="sousadministration" id="sousadministration" class="form-select "  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                            @foreach($administrations as $administration)
                                                                <optgroup label="{{$administration->type}}">
                                                                    @foreach($administration->sousadministrations() as $sousadministration)
                                                                        <option id="{{$sousadministration->label}}" value="{{$sousadministration->id}}">{{$sousadministration->label  ?? ''}}</option>
                                                                    @endforeach
                                                                </optgroup>
                                                            @endforeach
                                                    </select>                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12" id="sujetadmindiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Sujet Administrations : </label>
                                                    <select name="sujet" class="form-select" id="sujetadmin"  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                            @foreach ($administrations  as $administration)
                                                                    <optgroup label="{{$administration->type}}">
                                                                    @foreach($administration->sujets() as $sujet)
                                                                        <option value="{{$sujet->id}}" >{{$sujet->type}}</option>
                                                                    @endforeach
                                                                </optgroup>
                                                            @endforeach  
                                                    </select>
                                                </div>
                                            </div>


                                            
                                            </div>


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Objet de la
                                                            Doleance *
                                                        </label>
                                                        <input name="titre" type="text" class="form-control" 
                                                        required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Contenu de la
                                                            Doleance *</label>
                                                        <textarea name="description" class="form-control" ></textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Lien vidéo
                                                        </label>
                                                        <input name="video" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Pièce Jointe</label>
                                                    <div class="input-group" >
                                                        <input type="file" name="piece" class="form-control" >
    
                                                        <span class="input-group-text"><i class=" fas fa-file-archive"></i></span>
                                                    </div><!-- input-group -->

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-grid mb-3">
                                                <button type="submit"
                                                    class="btn btn-primary btn-lg waves-effect waves-light"
                                                    style="background-color:#e30613 ; border-style: none;">Envoyer</button>
                                            </div>

                                        </form>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
@endsection

@section('scripts')
<script>
            $('#souscategorie2').hide()
            $('#administrationdiv').hide()

            $('#sujetadmindiv').hide()


            $('#sousadministrationdiv').hide()
            $('#soussousadministrationdiv').hide()
            $('#soussoussousadministrationdiv').hide()
            
            $('#soussouscategoriediv').hide()
            $('#souscategoriediv').hide()

            $('#administrationdiv2').hide()
            $('#sousadministrationdiv2').hide()


            $("#administration").on("change",function(){
                $('#sousadministrationdiv').show()
                $('#sujetadmindiv').show()
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal+"+////////+")
    
                if($('#sousadministration optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#sousadministrationdiv').show()
                    $('#sousadministration > optgroup[label="'+selectedVal+'"]')
                        .show()
                        .siblings("optgroup")
                        .css("display","none");

                }else{
                $('#sousadministrationdiv').hide()    
                }

                var selectedVal = $(this).find("option:selected" ).attr('id');
                
    
                if($('#sujetadmin optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#sujetadmindiv').show()
                    $('#sujetadmin > optgroup[label="'+selectedVal+'"]')
                        .show()
                        .siblings("optgroup")
                        .css("display","none");

                }else{
                $('#sujetadmindiv').hide()    
                }
            });
            $("#sousadministration").on("change",function(){
                $('#soussousadministrationdiv').show()
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log($('#soussousadministration optgroup[label="'+selectedVal+'"]').children())
                if($('#soussousadministration optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#soussousadministrationdiv').show()
                    $('#soussousadministration > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

                }else{
                $('#soussousadministrationdiv').hide()    
                }
            });            
            
            $("#secteur").on("change",function(){
                $('#administrationdiv').show()
                ////////////////////////////////
                $('#sousadministration').val("")
                $('#administration').val("")

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)

                if($('#administration optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#administrationdiv').show()
                    $('#administration > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

                }else{
                    $('#administrationdiv').hide()    
                    $('#sousadministrationdiv').hide()    
                    $('#soussousadministrationdiv').hide()    
                }
            });  

            $("#daira").on("change",function(){
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#commune > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

            });  


            $('#typerequete').on('change',function(){
                var value = this.value;
                console.log(value)
                console.log(value)
                if(value==5){
                    console.log('rrrrrrrrrrrrrrrrrrrrrrrr')
                    $('#secteur').hide()
                    $('#administrationdiv').hide()
                    $('#sousadministrationdiv').hide();
                    $('#soussousadministrationdiv').hide();
                    $('#soussoussousadministrationdiv').hide();
                    // $('#sujetadmindiv').hide()
                    $('#sujetdiv').show()
                    $('#sujetadmindiv').hide()
                    // $('#sousadministrationdiv').hide()
                    var selectedVal = $(this).find("option:selected" ).attr('id');
                    console.log(selectedVal)
                    $('#sujet > optgroup[label="'+selectedVal+'"]')
                            .show()
                            .siblings("optgroup")
                            .css("display","none");
        

                    
                }else{
                    $('#secteur').show()
                    $('#administrationdiv').show()
                    $('#sousadministrationdiv').show();

                    $('#sujetdiv').hide()
                    $('#sujetadmindiv').show()
                }


            })


            $("#secteur").on("change",function(){
                $('#administrationdiv').show()
                ////////////////////////////////
                $('#sousadministration').val("")
                $('#administration').val("")

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)

                if($('#administration optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#administrationdiv').show()
                    $('#administration > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");
                }else{
                    $('#administrationdiv').hide()    
                    $('#sousadministrationdiv').hide()    
                    $('#soussousadministrationdiv').hide()    
                }
            });  
            /////////////////////////////////////////////



            $("#daira").on("change",function(){
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#commune > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

            });  
            $('#wilaya_select').on('change',function(){
                $('#daira').val()
                var selectedVal = $(this).find("option:selected" ).attr('id');
                $('#daira > optgroup[label="'+selectedVal+'"]')
                        .show()
                        .siblings("optgroup")
                        .css("display","none");

            })


</script>
@endsection