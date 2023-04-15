@extends('layouts.admin')
@section('styles')

@endsection
@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0"><a href="{{route('requete.index')}}"><i class="fas fa-arrow-left" style="color:#e30613;"></i></a>&nbsp;REQUÊTES</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active"><a href="{{route('requete.index')}}">Requetes</a></li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h4 class="mb-sm-0"><span id="code_initial_html"></span> </h4>
                        </div>

                    </div>
                    <br>
                    <!-- end page title -->

                    <br>                    
                <form method="post" action="{{route('requete.create')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                        <div class="row">
                                            <h6><b>Informations Requete : </b></h6>
                                                <hr>
                                                <div class="col-6">
                                                    <label for="validationCustom04" class="form-label">Code Requete  </label>
                                                    <input name="code_transfert" 
                                                    id="code_transfert"
                                                    readonly type="text" class="form-control"  required>
                                                </div>
                                                <div class="col-6">
                                                    <label for="validationCustom04" class="form-label">Code Initial</label>
                                                    <input name="code_initial" 
                                                    id="code_initial"
                                                    readonly type="text" class="form-control"  required>
                                                </div>



                                                <div class="col-md-3">
                                                    <br>
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Date</label>
                                                        <input name="daterequete" id="date_requete" type="date" max="{{date('Y-m-d')}}"  class="form-control" 
                                                            value="Mark" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <br>
                                                    <div class="mb-3">
                                                        <label for="validationCustom02" class="form-label">Wilaya</label>
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
                                            
                                                    <div class="col-md-3">
                                                        <br>
                                                        <label for="validationCustom04" class="form-label">Source</label>
                                                        <select class=" select form-select" name="source" id="source"  required>
                                                            <option value="" >Séléctionner</option>

                                                            @foreach ($sourcerequetes as $sourcerequete)
                                                                @if(strtoupper(substr($sourcerequete->type, 0, 1))!="W")
                                                                    <option value="{{strtoupper(substr($sourcerequete->type, 0, 1))}}" >{{$sourcerequete->type}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>  
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="col-12">
                                                            <br>
                                                            <label for="validationCustom05" class="form-label">Numéro  </label>
                                                            <input name="numero" onKeyPress="if(this.value.length==6) return false" required type="number" class="form-control"  id="numero" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="col-12">
                                                            <br>
                                                            <label for="validationCustom05" class="form-label">Numéro Audience   </label>
                                                            <br>  
                                                            <input value="{{$audience->code_initial ?? ''}}" /> 
                                                            <br>
                                                            <br>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                            


                                            <hr>
                                            <br>
                                                <h6><b>Informations Citoyen :</b></h6>
                                            <div class="col-6">
                                                <br>
                                                <label for="validationCustom04" class="form-label">Type de Citoyen</label>
                                                <select class="select2 form-control" name="etat_client">
                                                        <option value="">Séléctionner </option>
                                                        <option value="Citoyen">Citoyen</option>
                                                        <option value="Entreprise">Entreprise</option>
                                                        <option value="Association">Association</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <br>
                                                <label for="validationCustom04" class="form-label">Nom prénom / Dénomination : </label>
                                                <div class="input-group">
                                                    <select class="form-control " id="client" name="client">
                                                        <option value="" > Séléctionner </option>
                                                        @foreach ($clients as $client)
                                                            <option value="{{$client->id}}"  >
                                                                {{$client->nom }}
                                                                {{$client->prenom }}
                                                            </option>
                                                        @endforeach

                                                    </select>

                                                    <span class="input-group-btn">
                                                    <a href="{{route('client.show.create')}}" class="btn btn-primary" type="button" style="background-color:#e30613; border-style:none;"><i class="fa fa-plus"></i></a>
                                                    </span>
                                                </div>                                                

                                            </div>
                                            <br>
                                            
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                        <div class="row">
                                            <h6>Etat de la Requete</h6>
                                            <hr>
                                            <div class="col-md-12">
                                                <div class="col-12">
                                                    <br>
                                                </div> 
                                                <div class="col-12">
                                                    
                                                    <label for="validationCustom04" class="form-label"> Etat de la requete </label>
                                                    <select class="form-control" name="categorie" id="categorie">
                                                    <option value="" > --Séléctionner-- </option>

                                                    @foreach($categories as $categorie)
                                                            <option value="{{$categorie->id}}" id="{{$categorie->label}}">
                                                                    {{$categorie->label ?? ''}}
                                                            </option>
                                                        @endforeach

                                                    </select>                                                  
  
                                                </div> 
                                                <div class="col-12" id="souscategoriediv">
                                                    <br>
                                                    <label for="validationCustom04" class="form-label"> Détail  </label>
                                                        <select class="form-control"  name="souscategorie" id="souscategorie">
                                                        <option value="" > --Séléctionner-- </option>

                                                        @foreach($categories as $categorie)
                                                            <optgroup label="{{$categorie->label}}">
                                                            @foreach($categorie->getSubs() as $souscategorie)
                                                                    <option id="{{$souscategorie->label}}" value="{{$souscategorie->id}}">{{$souscategorie->label}}</option>
                                                                @endforeach

                                                            </optgroup>
                                                        @endforeach

                                                        </select>

                                                </div> 
                                                <div class="col-12" id="soussouscategoriediv">
                                                    <br>
                                                    <label for="validationCustom04" class="form-label"> Sous Détails  </label>
                                                        <select class="form-control"  name="soussouscategorie" id="soussouscategorie">
                                                        <option value="" > --Séléctionner-- </option>

                                                        @foreach($souscategories as $souscategorie)
                                                            <optgroup label="{{$souscategorie->label}}">
                                                                @foreach($souscategorie->soussouscategories() as $soussouscategorie)
                                                                    <option value="{{$soussouscategorie->id}}">{{$soussouscategorie->label}}</option>
                                                                @endforeach

                                                            </optgroup>
                                                        @endforeach

                                                        </select>

                                                    </div> 

                                                
                                                
                                                                                                 
                                            </div>

                                        </div>
                                    
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <!-- end col -->
                    </div>
                    <!--Fin Information-->


                    <!--Requete-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Requete</h4>
                                    <hr>
                                    <br>
                                    
                                        <div class="row">
                                            

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Daira</label>
                                                    <select class=" form-control" name="daira" id="daira">
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
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Commune</label>
                                                    <select class=" form-control" name="commune" id="commune">
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
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Type de Requête</label>
                                                    <select name="type_requete" class="form-select " id="typerequete" required>
                                                    <option value="" > -- Séléctionner-- </option>

                                                        @foreach ($typerequetes as $typerequete)
                                                            <option value="{{$typerequete->id}}" id="{{$typerequete->type ?? ''}}" >{{$typerequete->type ?? ''}}</option>
                                                        @endforeach
                                                    </select>                                                    


    
                                                </div>
                                            </div>
                                            <div class="col-md-6" id="secteur">
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
                                            
                                            <div class="col-md-3" id="administrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Administration</label>
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

                                            <div class="col-md-3" id="sousadministrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Administration N1 </label>
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
                                            <div class="col-md-3" id="soussousadministrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Administration N2 </label>
                                                    <select name="soussousadministration" id="soussousadministration" class="form-select "  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach($administrations as $administration)
                                                                    @foreach($administration->sousadministrations() as $sousadministration)
                                                                    <optgroup label="{{$sousadministration->type}}">
                                                                        @foreach($sousadministration->soussousadministrations() as $soussousadministration)
                                                                        <option id="{{$soussousadministration->label}}" value="{{$soussousadministration->id}}">{{$soussousadministration->label  ?? ''}}</option>
                                                                        @endforeach
                                                                    </optgroup>

                                                                    @endforeach
                                                            @endforeach
                                                    </select>
                                                                                                     
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-3" id="soussoussousadministrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Administration N3 </label>
                                                    <select name="soussoussousadministration" id="soussoussousadministration" class="form-select "  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach($administrations as $administration)
                                                                    @foreach($administration->sousadministrations() as $sousadministration)
                                                                        @foreach($sousadministration->soussousadministrations() as $soussousadministration)
                                                                            <optgroup label="{{$soussousadministration->type}}">
                                                                                @foreach($soussousadministration->soussoussousadministrations() as $soussoussousadministration)
                                                                                    <option value="{{$soussoussousadministration->id}}">{{$soussoussousadministration->label  ?? ''}}</option>
                                                                                @endforeach
                                                                            </optgroup>
                                                                        @endforeach

                                                                    @endforeach
                                                            @endforeach
                                                    </select>
                                                                                                     
                                                    
                                                </div>
                                            </div>                                            

                                            <div class="col-md-6"id="sujetdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Sujet</label>
                                                    <select name="sujet" class="form-select " id="sujet"  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                            @foreach ($typerequetes as $typerequete)
                                                            <optgroup label="{{$typerequete->type}}">
                                                                    @foreach($typerequete->sujets() as $sujet)
                                                                        <option value="{{$sujet->id}}" >{{$sujet->type}}</option>
                                                                    @endforeach
                                                                </optgroup>
                                                            @endforeach  
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6" id="sujetadmindiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Sujet Administrations : </label>
                                                    <select name="sujet" class="form-select " id="sujetadmin"  >
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

                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Titre</label>
                                                    <input name="titre" type="text" class="form-control" 
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Description</label>
                                                    <textarea name="description" class="form-control" ></textarea>
                                                </div>

                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Mots Clés</label>
                                                    <textarea name="mots" class="form-control" ></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Lien vidéo</label>
                                                    <input name="video" type="text" class="form-control" 
                                                        >
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
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="invest" id="checkboxinv">
                                                        <label class="form-check-label"  for="checkboxinv">
                                                        Investisseur
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                        @include('includes.modals.invest2')

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    
                                                        <button type="submit" class="btn btn-primary" style="background-color:#e30613; border-style:none;" >
                                                        <i class=" fas fa-save"></i>
                                                            Sauvegarder
                                                        </button>

                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                            
                                        </div>
                                        <div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                            <div class="row">
                                                <h6>Audience</h6>
                                                <hr>
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div>
                                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal" style="margin-left: -20px; background-color:#e30613; border-style:none;"><i class=" fas fa-plus-circle" ></i></button>
                                                                <!-- First modal dialog -->
                                                                <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="myModalLabel">Ajouter Audience : </h5>
                                                                        </div>
                                                                            
                                                                            <div class="modal-body">
                                                                                <form method="post" id="myForm" action="{{route('audience.store')}}" class="needs-validation" enctype="multipart/form-data">    
                                                                                    @csrf
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="validationCustom05" class="form-label">Date de l'Audience</label>
                                                                                                <input type="date" max="{{date('Y-m-d')}}" class="form-control" name="date_audience" 
                                                                                                    required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="validationCustom05" class="form-label">Chargé de l'Audience </label>
                                                                                                <select name="charge_audience" class="form-select"  id="validationCustom03" >
                                                                                                    <option value="">Séléctionner</option>
                                                                                                    @foreach($users as $user)
                                                                                                    <option value="{{$user->id}}">{{$user->nom}} {{$user->prenom}}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="validationCustom05" class="form-label">Sujet</label>
                                                                                                <input type="text" class="form-control" name="sujet2" 
                                                                                                    required>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="row">
                                                                                    </div>

                                                                                    <div class="row" id="type1">
                                                                                        <div class="col-md-6" id="souscategorie2">
                                                                                            <label for="validationCustom03" class="form-label"> Détails </label>
                                                                                            <select class="form-control" name="type" >
                                                                                                @foreach($souscategories as $souscategorie)
                                                                                                    @if($souscategorie->categorie == 6)
                                                                                                        <option value="{{$souscategorie->label ?? ''}}">
                                                                                                            {{$souscategorie->label ?? ''}}
                                                                                                        </option>
                                                                                                    @endif
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-6" >
                                                                                            <label for="validationCustom02" class="form-label">Secteur</label>
                                                                                            <select class="form-control" name="secteur2" id="secteur2">
                                                                                                <option value="">
                                                                                                    Séléctionner
                                                                                                </option>
                                                                                                @foreach($secteurs as $secteur)
                                                                                                    <option value="{{$secteur->id}}" id="{{$secteur->type}}" >
                                                                                                        {{$secteur->type ?? ''}}
                                                                                                    </option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>

                                                                                        <div class="col-md-6" id="administrationdiv2">
                                                                                            <label for="validationCustom03" class="form-label">Administration</label>
                                                                                            <select name="administartion" id="administration2" class="form-select "  >
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
                                                                                        <div class="col-md-6" id="sousadministrationdiv2">
                                                                                            <label for="validationCustom03" class="form-label">Sous Administration</label>
                                                                                            <select name="sousadministartion" id="sousadministration2" class="form-select "  >
                                                                                                <option value="" > -- Séléctionner-- </option>
                                                                                            @foreach($administrations as $administration)
                                                                                                        <optgroup label="{{$administration->type}}">
                                                                                                            @foreach($administration->sousadministrations() as $sousadministration)
                                                                                                                <option value="{{$sousadministration->id}}">{{$sousadministration->label}}</option>
                                                                                                            @endforeach
                                                                                                        </optgroup>
                                                                                                    @endforeach
                                                                                                                                    

                                                                                            </select>                                                   
                                                                                        </div>

                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="row" id>
                                                                                        <div class="col-md-12">
                                                                                            <label for="validationCustom03" class="form-label">Détails  </label>
                                                                                            <textarea class="form-control" name="details"></textarea>
                                                                                        </div>

                                                                                    </div>

                                                                                    <br>
                                                                                    <div>
                                                                                        
                                                                                        <button class="btn btn-primary" id="submit" style="background-color:#e30613; border-style:none;"> Sauvegarder </button>
                                                                                    </div>
                                                                                </form>
                                                                            
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; margin-left: -20px;">
                                                            <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Sujet</th>
                                                                        <th>Chargé de l'audience</th>
                                                                        <th>Date de l'audience</th>
                                                                        <th>Action</th>
                                                                
                                                                    </tr>
                                                                </thead>

                                                            </table>
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

                        
                        <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="card-title">Courrier </h4>
                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home12" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Courrier Citoyen</span> 
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#messages12" role="tab">
                                                <span class="d-block d-sm-none"><i class=" fas fa-plus-circle"></i></span>
                                                <span class="d-none d-sm-block">Courrier Secteur</span> 
                                            </a>
                                        </li>

                                    </ul>
                                    <br>


                                    <!-- Tab panes -->
                                    <div class="tab-content p-3 text-muted">
                                        <div class="tab-pane active" id="home12" role="tabpanel">
                                            <div class="col-sm-6 col-md-4 col-xl-3" style="margin-left: -20px;">
                                                
        
                                                
                                            </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalcc" style="background-color:#e30613; border-style:none;"><i class=" fas fa-plus-circle"></i> </button>
                                        </div>
                                        <br>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Date Envoi</th>
                                                        <th>Type Courrier</th>
                                                        <th>Etat Courrier</th>
                                                        <th>Pièce Jointe</th>
                                                        <th>Message</th>
                                                        <th>Action</th> 
                                                        
                                                    </tr>
                                                </thead>            
                                                <tbody>
                                                 
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="profile12" role="tabpanel">
                                                                                       
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Date Envoi</th>
                                                        <th>Type Courrier</th>
                                                        <th>Etat Courrier</th>
                                                        <th>Pièce Jointe</th>
                                                        <th>Message</th>
                                                        <th>Action</th> 
                                                        
                                                    </tr>
                                                </thead>            
                                                <tbody>
                                                 
                                                </tbody>
                                            </table>   
                                        
                                        </div>
                                        <div class="tab-pane" id="messages12" role="tabpanel">
                                        <div class="col-md-2">
                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalCS" style="background-color:#e30613; border-style:none;"><i class=" fas fa-plus-circle"></i></button>
                                            </div>
                                        <br>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Date Envoi</th>
                                                    <th>Etat Courrier</th>
                                                    <th>Etat</th>
                                                    <th>Message</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                                </thead>            
                                                <tbody>
                                                
                                                </tbody>   
                                            
                                            </table>                                        
                                        
                                        </div>

                                    </div>
    
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <!-- end col -->
                    </div>

                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="card-title">Action : </h4>
                                    <!-- ALI LES BUTTONS  -->
                                    <div class="row">
                                        


                                        

                                    </div>
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Attribution</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Transfert</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                <span class="d-none d-sm-block">Affectation Externes</span>   
                                            </a>
                                        </li>

                                    </ul>
    
                                    <!-- Tab panes -->
                                    <div class="tab-content p-3 text-muted">
                                        <div class="tab-pane active" id="home1" role="tabpanel">
                                            <div class="col-sm-6 col-md-4 col-xl-3" style="margin-left: -20px;">
                                                <div class="my-4 text-center">
                                                </div>
        
                                                <!-- sample modal content -->
                                                
                                            </div>
                                            
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalAttr"style="background-color:#e30613; border-style:none;"><i class=" fas fa-plus-circle"></i> </button>
                                            </div>
                                            <br>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                <th>ID</th>
                                                <th>Date Attribution</th>
                                                <th>Utilisateur de l'application</th>
                                                    <th>Piece Jointe</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                
 
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="profile1" role="tabpanel">
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalTrans"style="background-color:#e30613; border-style:none;"><i class=" fas fa-plus-circle"></i></button>
                                            </div>
                                            <br>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                                                                        <th>ID</th>
                                                    <th>Date transfert</th>
                                                    <th>Utilisateur de l'application</th>
                                                    <th>Piece Jointe</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                
 
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="messages1" role="tabpanel">
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalEx"style="background-color:#e30613; border-style:none;"><i class=" fas fa-plus-circle"></i></button>
                                        </div>
                                        <br>

                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Date Affectation</th>
                                                    <th>Secteur</th>
                                                    <th>Administration</th>
                                                    <th>Utilisateur de l'application</th>
                                                    <th>Piece Jointe</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                
                                                </tbody>
                                            </table>
                                            
                                        </div>

                                    </div>
    
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <!-- end col -->
                    </div>


                    </div>
                    <!-- Fin Requete -->


                    <!-- Audience -->

                    
                    <!-- Audience -->

                    <!-- Audience -->

                    <!--courrier -->

                    

            <!-- end page title -->

            <!--invest-->
                               
                    
            </div>


@endsection

@section('scripts')
<script>
        $(document).ready(function() {
            function paddy(num, padlen, padchar) {
                var pad_char = typeof padchar !== 'undefined' ? padchar : '0';
                var pad = new Array(1 + padlen).join(pad_char);
                return (pad + num).slice(-pad.length);
            }        

            $('#fiche3').hide()
            $('#fiche1').hide()
            $('#fiche2').hide()

            $('#invesstissement').hide();

                $('#checkboxinv').change(function() {
                    if(this.checked) {
                        $('#invesstissement').show();
                    }else{
                        $('#invesstissement').hide();
                    }
                });
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

            
            $('#transfer').click( function(e) {
                e.preventDefault();
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');                
                ///////////////////                
                $.ajax({
                        url: '/audience/create/transfer',
                        type: 'post',
                        dataType: 'json',
                        data: {_token: CSRF_TOKEN, data:$('form#myForm').serialize()},
                        success: function(response) {
                            console.log(response)
                            // window.open("https://www.youraddress.com","_self")
                            window.open('/requete/create/audience/'+response.audience,"_self"); //This will open Google in a new window.

                        },error: function(err){
                            console.log(err)
                        }
                    });
            });        

        $("#typeaudience").on("change",function(){
            var selectedVal = $(this).find("option:selected" ).val();
            if(selectedVal=="hors_domaine_de_competence"){
                $('#souscategorie2').show()
            }else{
                $('#souscategorie2').hide()
            }
        });  


            $("#categorie").on("change",function(){
                $('#souscategorie').val("").change();
                $('#soussouscategorie').val("").change();
                $('#souscategoriediv').show()
                $('#soussouscategoriediv').hide()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                // console.log($('optgroup[label="'+selectedVal+'"]'));
                

                if($('#souscategorie optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#souscategoriediv').show()
                    $('#souscategorie > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

                }else{
                $('#souscategoriediv').hide()    
                }
            });

            $("#type_courrier_cc").on("change",function(){
                
                var selectedVal = $(this).find("option:selected" ).attr('id');
                    console.log(selectedVal)

                if($('#etat_courrier_cc optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#etat_courrier_ccdiv').show()
                    $('#etat_courrier_cc > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

                }else{
                $('#etat_courrier_ccdiv').hide()    
                }
            });

            
            $("#souscategorie").on("change",function(){
                $('#soussouscategoriediv').show()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)

                if($('#soussouscategorie optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#soussouscategoriediv').show()
                    $('#soussouscategorie > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

                }else{
                $('#soussouscategoriediv').hide()    
                }
            });


            $("#administration2").on("change",function(){
                $('#sousadministrationdiv2').show()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)

                if($('#administration2 optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#administration2div').show()
                    $('#administration2 > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

                }else{
                $('#administration2div').hide()    
                }
            });

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
            $("#soussousadministration").on("change",function(){
                $('#soussoussousadministrationdiv').show()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)

                if($('#soussoussousadministration optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#soussoussousadministrationdiv').show()
                    $('#soussoussousadministration > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

                }else{
                $('#soussoussousadministrationdiv').hide()    
                }
            });            


            $("#secteur2").on("change",function(){
                $('#administrationdiv2').show()                
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)

                if($('#administration2 optgroup[label="'+selectedVal+'"]').children().length>0){
                    $('#administration2div').show()
                    $('#administration2 > optgroup[label="'+selectedVal+'"]')
                    .show()
                    .siblings("optgroup")
                    .css("display","none");

                }else{
                $('#administration2div').hide()    
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
                    $('#sujetdiv').hide()
                    $('#sujetadmindiv').show()
                }


            })

            function pad2(number){
                // console.log((number < 10 ? '0' : '') + number);
                return (number < 10 ? '0' : '') + number;
            }
            $('#wilaya_select').on('change',function(){

        
                $('#code_initial_html').html('')

                var valeur = $(this).val();
                $('#wilaya').val(valeur).change();
                $('#daira').val("").change();
                $('#commune').val("").change();                
                console.log(new Date($('#date_requete').val()).getFullYear().toString())
                $('#code_initial').val('R'+new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2(valeur)+$('#source').val()+paddy($('#numero').val(),6));
                $('#code_transfert').val('R'+new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2(valeur)+$('#source').val()+paddy($('#numero').val(),6));
                $('#code_initial_html').html('R'+new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2(valeur)+$('#source').val()+paddy($('#numero').val(),6));
                $('#codification').val('R'+new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val()));
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal+"qsssssssssssssssssssss")

                if($('#daira optgroup[label="'+selectedVal+'"]').children().length>0){

                    $('#daira > optgroup[label="'+selectedVal+'"]')
                        .show()
                        .siblings("optgroup")
                        .css("display","none");

                }else{
                $('#dairadiv').hide()    
                }

            })

            $('#source').on('change',function(){
                $('#code_initial_html').html('')
                var valeur = $(this).val();
                $('#code_initial').val('R'+new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy($('#numero').val(),6));
                $('#code_transfert').val('R'+new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy($('#numero').val(),6));
                $('#code_initial_html').html('R'+new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy($('#numero').val(),6));
                $('#codification').val('R'+new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val()));

            })
            

            $('#date_requete').on('change',function(){
                $('#code_initial_html').html('')
                var valeur = $(this).val();
                $('#code_initial').val('R'+new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy($('#numero').val(),6));
                $('#code_transfert').val('R'+new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy($('#numero').val(),6));
                $('#code_initial_html').html('R'+new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy($('#numero').val(),6));
                $('#codification').val('R'+new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val()));

            })

            $('#numero').on('change',function(){
                $('#code_initial_html').html('')
                console.log(valeur)
                var valeur = paddy($('#numero').val(),6);
                $('#code_initial').val('R'+new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy(valeur,6));
                $('#code_transfert').val('R'+new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy(valeur,6));

                $('#code_initial_html').html('R'+new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+paddy(valeur,6));

            })
            /////////////////////////////////////////////////////


        });
</script>


<script>
        $(document).ready(function() {
            
            $('#etat_projet').on('change',function(){
                var value = this.value;
                // console.log(value)
                if(value=="fiche1"){
                    $('#fichetext').html('fiche-01')
                    $('#fiche3').hide()
                    $('#fiche1').show()
                    $('#fiche2').hide()
                }
                if(value=="fiche2"){
                    $('#fichetext').html('fiche-02')
                    $('#fiche3').hide()
                    $('#fiche2').show()
                    $('#fiche1').hide()
                }
                if(value=="fiche3"){
                    $('#fichetext').html('fiche-03')
                    $('#fiche2').hide()
                    $('#fiche3').show()
                    $('#fiche1').hide()

                }


            })


        });
    </script>
@endsection

@section('modals')

@endsection