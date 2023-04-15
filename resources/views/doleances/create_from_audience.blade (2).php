@extends('layouts.admin')
@section('styles')

@endsection
@section('content')


                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Doléance : </h4>
                                <br>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Doléances</li>
                                    </ol>
                                </div>
                                <br>

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

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalAttr"><i class="fa fa-edit"></i> Attribution </button>
                                        </div>
                                        
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalcc"><i class="fa fa-edit"></i> Courier Citoyen </button>
                                        </div>


                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalCS"><i class="fa fa-edit"></i> Courier Secteur </button>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalTrans"><i class="fa fa-edit"></i> Transfert</button>
                                        </div>


                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalEx"><i class="fa fa-edit"></i> Affectation Externe</button>
                                        </div>

                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>                    
                    <!--Information-->
                <form class="needs-validation" method="post" action="{{route('requete.create')}}">
                            @csrf

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                        <div class="row">
                                            <h6>Information Requete : </h6>
                                                <hr>
                                                <div class="col-6">
                                                    <label for="validationCustom04" class="form-label">Code Doléance : </label>
                                                    <input value="{{$audience->code_initial ?? ''}}" name="code_transfert" 
                                                    id="code_transfert"
                                                    readonly type="text" class="form-control"  required>
                                                </div>
                                                <div class="col-6">
                                                    <label for="validationCustom04" class="form-label">Code Initial</label>
                                                    <input value="{{$audience->code_initial ?? ''}}" name="code_initial" 
                                                    id="code_initial"
                                                    readonly type="text" class="form-control"  required>
                                                </div>



                                                <div class="col-md-3">
                                                    <br>
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Date</label>
                                                        <input value="{{$audience->date_audience ?? ''}}" name="daterequete" id="date_requete" type="date" max="{{date('Y-m-d')}}"  class="form-control" 
                                                            value="Mark" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <br>
                                                    <div class="mb-3">
                                                        <label for="validationCustom02" class="form-label">Wilaya</label>
                                                        <select class=" select2 form-control" id="wilaya_select" value="{{$audience->wilaya ?? ''}}" name="wilaya">
                                                            <option value="" > -- Séléctionner-- </option>
                                                            @foreach ($wilayas as $wilaya)
                                                                <option value="{{$wilaya->id}}" @if($wilaya->id==$audience->wilaya) selected @endif  >
                                                                    {{$wilaya->name}}   
                                                                </option>
                                                            @endforeach

                                                        </select>                                                    

                                                    </div>
                                                </div>
                                            
                                                    <div class="col-md-3">
                                                        <br>
                                                        <label for="validationCustom04" class="form-label">Source</label>
                                                        <select disabled class=" select2 form-select" value="{{$audience->source ?? ''}}" name="source" id="source"  required>

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
                                                            <input value="{{$audience->numero ?? ''}}" name="numero" onKeyPress="if(this.value.length==5) return false" required type="number" class="form-control"  id="numero" required>
                                                        </div>
                                                    </div>

                                            <hr>
                                            <h6>Information Citoyen : </h6>


                                            
                                            <div class="col-6">
                                                <br>
                                                <label for="validationCustom04" class="form-label">Type (Citoyen/Entreprise/Association)</label>
                                                <select class="select2 form-control" value="{{$audience->etat_client ?? ''}}" name="etat_client">
                                                        <option value="Citoyen">Citoyen</option>
                                                        <option value="Entreprise">Entreprise</option>
                                                        <option value="Association">Association</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <br>
                                                <label for="validationCustom04" class="form-label">Nom prénom / dénomination : </label>
                                                <div class="input-group">
                                                    <select class="form-control " id="client" value="{{$audience->client ?? ''}}" name="client">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach ($clients as $client)
                                                            <option value="{{$client->id}}" @if($audience->client==$client->id) selected @endif  >
                                                                {{$client->nom }}
                                                                {{$client->prenom }}
                                                            </option>
                                                        @endforeach

                                                    </select>

                                                    <span class="input-group-btn">
                                                    <a href="{{route('client.show.create')}}" class="btn btn-primary" type="button"><i class="fa fa-plus"></i></a>
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
                                                
                                                    <label for="validationCustom04" class="form-label"> Etat de la requete: </label>
                                                    <select class="form-control" value="{{$audience->categorie ?? ''}}" name="categorie" id="categorie">
                                                    <option value="" > -- Séléctionner-- </option>
                                                        @foreach($categories as $categorie)
                                                            <option value="{{$categorie->id}}" id="{{$categorie->label}}">
                                                                    {{$categorie->label ?? ''}}
                                                            </option>
                                                        @endforeach

                                                    </select>                                                  
  
                                                </div> 
                                                <div class="col-12" id="souscategoriediv">
                                                    <br>
                                                    <label for="validationCustom04" class="form-label"> Détail : </label>
                                                        <select class="form-control"  value="{{$audience->souscategorie ?? ''}}" name="souscategorie" id="souscategorie">
                                                        <option value="" > -- Séléctionner-- </option>

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
                                                    <label for="validationCustom04" class="form-label"> Sous Détails : </label>
                                                        <select class="form-control"  value="{{$audience->soussouscategorie ?? ''}}" name="soussouscategorie" id="soussouscategorie">
                                                        <option value="" > -- Séléctionner-- </option>

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
                                            
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Wilaya</label>
                                                    <select disabled class=" select2 form-control" id="wilaya"  value="{{$audience->wilaya ?? ''}}" name="wilaya">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach ($wilayas as $wilaya)
                                                            <option value="{{$wilaya->id}}" id="{{$wilaya->name}}" >
                                                                {{$wilaya->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>                                                    

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Daira</label>
                                                    <select class=" form-control" value="{{$audience->daira ?? ''}}" name="daira" id="daira">
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
                                                    <label for="validationCustom02" class="form-label">Commune</label>
                                                    <select class=" form-control" value="{{$audience->commune ?? ''}}" name="commune" id="commune">
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
                                                    <select value="{{$audience->type_requete ?? ''}}" name="type_requete" class="form-select select2" id="typerequete" required>
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
                                                    <select class="form-control" value="{{$audience->secteur ?? ''}}" name="secteur" id="secteur">
                                                    <option value="" > -- Séléctionner-- </option>

                                                        @foreach($secteurs as $secteur)
                                                            <option @if($secteur->id==$audience->secteur) selected @endif value="{{$secteur->id}}" id="{{$secteur->type}}" >
                                                                {{$secteur->type ?? ''}}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3" id="administrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Administration</label>
                                                    <select value="{{$audience->administration ?? ''}}" name="administration" id="administration" class="form-select "  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach($secteurs as $secteur)
                                                                <optgroup label="{{$secteur->type}}">
                                                                @foreach($secteur->administrations() as $administration)
                                                                        <option @if($administration->id==$audience->administartion) selected @endif value="{{$administration->id}}">{{$administration->type}}</option>
                                                                    @endforeach

                                                                </optgroup>
                                                            @endforeach
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-3" id="sousadministrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Sous Administration</label>
                                                    <select value="{{$audience->administration ?? ''}}" name="administration" id="sousadministration" class="form-select "  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach($administrations as $administration)
                                                                <optgroup label="{{$administration->type}}">
                                                                    @foreach($administration->sousadministrations() as $sousadministration)
                                                                        <option @if($sousadministration->id==$audience->sousadministration) selected @endif>{{$sousadministration->label  ?? ''}}</option>
                                                                    @endforeach
                                                                </optgroup>
                                                            @endforeach
                                                    </select>
                                                                                                     
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Sujet</label>
                                                    <select value="{{$audience->sujet ?? ''}}" name="sujet" class="form-select " id="sujet"  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach ($typerequetes as $typerequete)
                                                            <optgroup label="{{$typerequete->type}}">
                                                                    @foreach($typerequete->sujets() as $sujet)
                                                                        <option value="{{$sujet->id}}" >
                                                                            {{$sujet->type}}
                                                                        </option>

                                                                    @endforeach
                                                                </optgroup>
                                                            @endforeach

                                                    
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Titre</label>
                                                    <input value="{{$audience->titre ?? ''}}" name="titre" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Description</label>
                                                    <textarea value="{{$audience->description ?? ''}}" name="description" class="form-control" ></textarea>
                                                </div>

                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom04" class="form-label">Mots Clés</label>
                                                    <textarea value="{{$audience->mots ?? ''}}" name="mots" class="form-control" ></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Lien vidéo</label>
                                                    <input value="{{$audience->video ?? ''}}" name="video" type="text" class="form-control" id="validationCustom05"
                                                        >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Pièce Jointe</label>
                                                    <div class="input-group" >
                                                        <input type="file" class="form-control" >
    
                                                        <span class="input-group-text"><i class=" fas fa-file-archive"></i></span>
                                                    </div><!-- input-group -->

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="{{$audience->invest ?? ''}}" name="invest" id="checkboxinv">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                        Investisseur
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <button class="btn btn-primary">
                                                        Sauvegarder
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                    </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- Fin Requete -->

                    @include('includes.modals.invest')




                    <!-- Audience -->
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
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal" style="margin-left: -20px;"><i class=" fas fa-plus-circle"></i>  Nouveau</button>
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
                                                                                            <label  class="form-label">Date de l'Audience</label>
                                                                                            <input type="date" max="{{date('Y-m-d')}}" class="form-control" value="{{$audience->date_audience ?? ''}}" name="date_audience" 
                                                                                                required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom05" class="form-label">Chargé de l'Audience</label>
                                                                                            <select value="{{$audience->charge_audience ?? ''}}" name="charge_audience" class="form-select"  id="validationCustom03" >
                                                                                                <option value="">Séléctionner</option>
                                                                                                @foreach($users as $user)
                                                                                                <option @if($user->id==$audience->charge_audience) selected @endif value="{{$user->id}}">{{$user->nom}} {{$user->prenom}}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom05" class="form-label">Sujet</label>
                                                                                            <input type="text" class="form-control" value="{{$audience->sujet ?? ''}}" name="sujet" id="validationCustom05"
                                                                                                required>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="row">
                                                                                    <!-- <div class="col-md-3">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom05" class="form-label">Chargé de l'Audience</label>
                                                                                            <select value="{{$audience->charge_audience ?? ''}}" name="charge_audience" class="form-select"  id="validationCustom03" >
                                                                                                @foreach($users as $user)
                                                                                                <option value="{{$user->id}}">{{$user->nom}} {{$user->prenom}}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div> -->
                                                                                </div>

                                                                                <div class="row" id="type1">
                                                                                    <div class="col-md-6" id="souscategorie2">
                                                                                        <label for="validationCustom03" class="form-label"> Détail </label>
                                                                                        <select class="form-control" value="{{$audience->type ?? ''}}" name="type" >
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
                                                                                        <select class="form-control" value="{{$audience->secteur ?? ''}}" name="secteur" id="secteur2">
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
                                                                                        <select value="{{$audience->administartion ?? ''}}" name="administartion" id="administration2" class="form-select "  >
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
                                                                                        <select value="{{$audience->sousadministartion ?? ''}}" name="sousadministartion" id="sousadministration2" class="form-select "  >
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
                                                                                        <label for="validationCustom03" class="form-label">Détails : </label>
                                                                                        <textarea class="form-control" value="{{$audience->details ?? ''}}" name="details"></textarea>
                                                                                    </div>

                                                                                </div>

                                                                                <br>
                                                                                <div>
                                                                                    <button class="btn btn-primary" id="submit" > Sauvgarder </button>
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

                    
                    <!-- Audience -->

                    <!-- Audience -->

                    <!--courrier -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="card-title">Courrier : </h4>
                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home12" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Courrier Citoyen</span> 
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#messages12" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
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
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalcc"><i class="fa fa-edit"></i> Courier Citoyen </button>
                                        </div>
                                        <br>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
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
                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalCS"><i class="fa fa-edit"></i> Courier Secteur </button>
                                            </div>
                                        <br>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
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
                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalAttr"><i class="fa fa-edit"></i> Attribution </button>
                                            </div>
                                            <br>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
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
                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalTrans"><i class="fa fa-edit"></i> Transfert</button>
                                            </div>
                                            <br>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
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
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalEx"><i class="fa fa-edit"></i> Affectation Externe</button>
                                        </div>
                                        <br>

                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
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

                    

            <!-- end page title -->

            <!--invest-->
                               
                    
            </div>


@endsection

@section('scripts')
<script>
        $(document).ready(function() {

            $('#wilaya').change();
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
            // $('#administrationdiv').hide()

            // $('#sousadministrationdiv').hide()
            
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
                        data: {_token: CSRF_TOKEN, data:$('form#myForm').   serialize()},
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
                $('#souscategorie > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });

            $("#type_courrier_cc").on("change",function(){
                
                var selectedVal = $(this).find("option:selected" ).attr('id');
                    console.log(selectedVal)
                $('#etat_courrier_cc > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });

            
            $("#souscategorie").on("change",function(){
                $('#soussouscategoriediv').show()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#soussouscategorie > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });


            $("#administration2").on("change",function(){
                $('#sousadministrationdiv2').show()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#administration2 > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });

            $("#administration").on("change",function(){
                $('#sousadministrationdiv').show()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#administration > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });

            $("#secteur2").on("change",function(){
                $('#administrationdiv2').show()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#administration2 > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });  

            $("#secteur").on("change",function(){
                $('#administrationdiv').show()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#administration > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });  

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




            $('#typerequete').on('change',function(){

                
                

                var value = this.value;
                console.log(value)

                console.log(value)
                if(value==5){
                    $('#secteur').hide()
                    $('#administartion').hide()
                    
                }else{
                    $('#secteur').show()
                    $('#administartion').show()
                }
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#sujet > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");


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
                $('#code_initial').val(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2(valeur)+$('#source').val()+$('#numero').val());
                $('#code_transfert').val(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2(valeur)+$('#source').val()+$('#numero').val());
                $('#code_initial_html').html(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2(valeur)+$('#source').val()+$('#numero').val());
                $('#codification').val(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val()));

            })

            $('#source').on('change',function(){
                $('#code_initial_html').html('')
                var valeur = $(this).val();
                $('#code_initial').val(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+$('#numero').val());
                $('#code_transfert').val(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+$('#numero').val());
                $('#code_initial_html').html(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+$('#numero').val());
                $('#codification').val(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val()));

            })
            

            $('#date_requete').on('change',function(){
                $('#code_initial_html').html('')
                var valeur = $(this).val();
                $('#code_initial').val(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+$('#numero').val());
                $('#code_transfert').val(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+$('#numero').val());
                $('#code_initial_html').html(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+$('#numero').val());
                $('#codification').val(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val()));

            })

            $('#numero').on('change',function(){
                $('#code_initial_html').html('')
                console.log(valeur)
                var valeur = $('#numero').val();
                $('#code_initial').val(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+valeur);
                $('#code_transfert').val(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+valeur);

                $('#code_initial_html').html(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+valeur);

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