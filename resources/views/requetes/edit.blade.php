@extends('layouts.admin')

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
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light audience" style="background-color:#e30613; border-style:none;"  > Audience</button>
                                        </div>

                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light courriers" id="couriercitoyen"  style="background-color:#e30613; border-style:none;">Courier citoyen </button>
                                        </div>


                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light courriers" id="couriersecteur" style="background-color:#e30613; border-style:none;" >Courier secteur  </button>
                                        </div>


                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light seconddiv" style="background-color:#e30613; border-style:none;"  > Attribution </button>

                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light seconddiv"  style="background-color:#e30613; border-style:none;" > Transfert</button>
                                        </div>



                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light seconddiv" style="background-color:#e30613; border-style:none;"  > Affectation Externe</button>
                                        </div>

                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--Information-->
                <form class="needs-validation" method="post" action="{{route('requete.update',['requete'=>$requete->id])}}">
                    @csrf

                    <!--Fin Information-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                        <div class="row">
                                            <h6>Informations Requete : </h6>
                                                <hr>
                                                <div class="col-6">
                                                    <label for="validationCustom04" class="form-label">Code Requete : </label>
                                                    <input value="{{$requete->code_initial ?? ''}}" name="code_transfert" 
                                                    id="code_transfert"
                                                    readonly type="text" class="form-control"  required>
                                                </div>
                                                <div class="col-6">
                                                    <label for="validationCustom04" class="form-label">Code Initial</label>
                                                    <input value="{{$requete->code_initial ?? ''}}" name="code_initial" 
                                                    id="code_initial"
                                                    readonly type="text" class="form-control"  required>
                                                </div>



                                                <div class="col-md-3">
                                                    <br>
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Date</label>
                                                        <input value="{{$requete->daterequete ?? ''}}" name="daterequete" id="date_requete" type="date" max="{{date('Y-m-d')}}"  class="form-control" 
                                                            value="Mark" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <br>
                                                    <div class="mb-3">
                                                        <label for="validationCustom02" class="form-label">Wilaya</label>
                                                        <select class=" select2 form-control" id="wilaya_select" value="{{$requete->wilaya ?? ''}}" name="wilaya">
                                                            <option value="" > -- Séléctionner-- </option>
                                                            @foreach ($wilayas as $wilaya)
                                                                <option @if($requete->wilaya == $wilaya->id) selected @endif value="{{$wilaya->id}}" id="{{$wilaya->name}}" {{$wilaya->id == (old('wilaya_id') ?? ($member->wilaya_id ?? '')) ? 'selected' : ''}}>
                                                                    {{$wilaya->name}}   
                                                                </option>
                                                            @endforeach

                                                        </select>                                                    

                                                    </div>
                                                </div>
                                            
                                                    <div class="col-md-3">
                                                        <br>
                                                        <label for="validationCustom04" class="form-label">Source</label>
                                                        <select class=" select2 form-select" value="{{$requete->source ?? ''}}" @if($requete->source==10) disabled @endif name="source" id="source"  required>
                                                            @foreach ($sourcerequetes as $sourcerequete)
                                                                    <option @if($requete->source==$sourcerequete->id) selected @endif  >{{  $sourcerequete->type}}</option>
                                                            @endforeach

                                                        </select>  
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="col-12">
                                                            <br>
                                                            <label for="validationCustom05" class="form-label">Numéro  </label>
                                                            <input value="{{$requete->numero ?? ''}}" name="numero" onKeyPress="if(this.value.length==5) return false" required type="number" class="form-control"  id="numero" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="col-12">
                                                            <br>
                                                            <label for="validationCustom05" class="form-label">Numéro Audience   </label>
                                                            <br>   
                                                            <select class="select2" name="audience">
                                                                <option value="" selected>--Séléctionner--</option>
                                                                @foreach($audiences as $audience)
                                                                <option @if($audience->id == $requete->audience) selected @endif value="{{$audience->id ?? ''}}">
                                                                    {{$audience->code_initial ?? ''}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                            <br>
                                                            <br>
                                                        </div>
                                                    </div>


                                            <hr>
                                            <h6>Informations Citoyen : </h6>


                                            
                                            <div class="col-6">
                                                <br>
                                                <label for="validationCustom04" class="form-label">Type (Citoyen/Entreprise/Association)</label>
                                                <select class="select2 form-control" value="{{$requete->etat_client ?? ''}}" name="etat_client">
                                                        <option value="Citoyen">Citoyen</option>
                                                        <option value="Entreprise">Entreprise</option>
                                                        <option value="Association">Association</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <br>
                                                <label for="validationCustom04" class="form-label">Nom prénom / dénomination : </label>
                                                <div class="input-group">
                                                    <select class="form-control " id="client" value="{{$requete->client ?? ''}}" name="client">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach ($clients as $client)
                                                            <option @if($requete->client == $client->id) selected @endif value="{{$client->id}}"  >
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
                                                    
                                                    <label for="validationCustom04" class="form-label"> Etat de la requete: </label>
                                                    <select class="form-control" value="{{$requete->categorie ?? ''}}" name="categorie" id="categorie">
                                                    <option value="" >-- Séléctionner --</option>
                                                        @foreach($categories as $categorie)

                                                            <option 
                                                            @if($categorie->id == $requete->categorie) selected @endif
                                                            @if($categorie->id == 6 and $requete->categorie==null) selected @endif value="{{$categorie->id}}" id="{{$categorie->label}}"> 
                                                                {{$categorie->label ?? ''}}
                                                            </option>
                                                        @endforeach

                                                    </select>                                                  
  
                                                </div> 
                                                <div class="col-12" id="souscategoriediv">
                                                    <br>
                                                    <label for="validationCustom04" class="form-label"> Détail : </label>
                                                        <select class="form-control"  value="{{$requete->souscategorie ?? ''}}" name="souscategorie" id="souscategorie">
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
                                                        <select class="form-control"  value="{{$requete->soussouscategorie ?? ''}}" name="soussouscategorie" id="soussouscategorie">
                                                        <option value="" > -- Séléctionner-- </option>

                                                        @foreach($souscategories as $souscategorie)
                                                            <optgroup label="{{$souscategorie->label}}">
                                                                @foreach($souscategorie->soussouscategories() as $soussouscategorie)
                                                                    <option @if($requete->soussouscategorie == $soussouscategorie->id) selected @endif value="{{$soussouscategorie->id}}">{{$soussouscategorie->label}}</option>
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
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Daira</label>
                                                    <select class=" form-control" value="{{$requete->daira ?? ''}}" name="daira" id="daira">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach($wilayas as $wilaya)
                                                            <optgroup label="{{$wilaya->nom ?? $wilaya->name}}">
                                                                @foreach($wilaya->dairas() as $daira)
                                                                    <option @if($requete->daira == $daira->id) selected @endif   id="{{$daira->nom}}" >
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
                                                    <select class=" form-control" value="{{$requete->commune ?? ''}}" name="commune" id="commune">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach($dairas as $daira)
                                                            <optgroup label="{{$daira->nom}}">
                                                                @foreach($daira->communes() as $commune)
                                                                    <option @if($requete->commune == $commune->id) selected @endif  >
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
                                                    <select  value="{{$requete->type_requete ?? ''}}" name="type_requete" class="form-select select2" id="typerequete" required>
                                                    <option value="" > -- Séléctionner-- </option>

                                                        @foreach ($typerequetes as $typerequete)
                                                            <option  value="{{$typerequete->id}}" @if($requete->type_requete == $typerequete->id) selected @endif id="{{$typerequete->type ?? ''}}" >{{$typerequete->type ?? ''}}</option>
                                                        @endforeach
                                                    </select>                                                    


    
                                                </div>
                                            </div>
                                            <div class="col-md-6" id="secteur">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Secteur </label>
                                                    <select class="form-control" value="{{$requete->secteur ?? ''}}" name="secteur" id="secteur">
                                                    <option value="" > -- Séléctionner-- </option>

                                                        @foreach($secteurs as $secteur)
                                                            <option @if($requete->secteur == $secteur->id) selected @endif id="{{$secteur->type}}" >
                                                                {{$secteur->type ?? ''}}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                    </div>        
                                            <div class="col-md-3" id="administrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Administration</label>
                                                    <select  value="{{$requete->administration ?? ''}}" name="administration" id="administration" class="form-select "  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach($secteurs as $secteur)
                                                                <optgroup label="{{$secteur->type}}">
                                                                @foreach($secteur->administrations() as $administration)
                                                                        <option @if($requete->administration == $administration->id) selected @endif value="{{$administration->id}}">{{$administration->type}}</option>
                                                                    @endforeach

                                                                </optgroup>
                                                            @endforeach
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-3" id="sousadministrationdiv">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Sous Administration</label>
                                                    <select  value="{{$requete->administration ?? ''}}" name="administration" id="sousadministration" class="form-select "  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach($administrations as $administration)
                                                                <optgroup label="{{$administration->type}}">
                                                                    @foreach($administration->sousadministrations() as $sousadministration)
                                                                        <option @if($requete->sousadministration == $sousadministration->id) selected @endif value="{{$sousadministration->id}}">{{$sousadministration->label  ?? ''}}</option>
                                                                    @endforeach
                                                                </optgroup>
                                                            @endforeach
                                                    </select>
                                                                                                     
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom03" class="form-label">Sujet</label>
                                                    <select  value="{{$requete->sujet ?? ''}}" name="sujet" class="form-select " id="sujet"  >
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach ($typerequetes as $typerequete)
                                                            <optgroup label="{{$typerequete->type}}">
                                                                    @foreach($typerequete->sujets() as $sujet)
                                                                        <option @if($requete->sujet == $sujet->id) selected @endif value="{{$sujet->id}}" >
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
                                                    <input value="{{$requete->titre ?? ''}}" name="titre" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                            <label for="validationCustom04" class="form-label">Description</label>
                                                            <textarea value="" name="description" class="form-control" >
                                                            {{$requete->description ?? ''}}
                                                            </textarea>
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="validationCustom04" class="form-label">Mots Clés</label>
                                                            <textarea value="{{$requete->mots ?? ''}}" name="mots" class="form-control" ></textarea>
                                                        </div>
                                                    </div>



                                            </div>    
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Lien vidéo</label>
                                                    <input value="{{$requete->video ?? ''}}" name="video" type="text" class="form-control" id="validationCustom05"
                                                        >
                                                </div>
                                            </div>
                                            @if(strlen($requete->piece)>0)
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Pièce Jointe</label>
                                                    <div class="input-group" >
                                                        
                                                        <a href="{{asset('public/'.$requete->piece)}}" class="btn btn-primary" download>
                                                            {{$requete->filename ?? ''}}
                                                        </a>
                                                       

                                                    </div><!-- input-group -->

                                                </div>
                                            </div>
                                            @endif
                                        </div>


                                            <!--
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Pièce Jointe</label>
                                                    <div class="input-group" >
                                                        <input type="file" name="piece" class="form-control" >
    
                                                        <span class="input-group-text"><i class=" fas fa-file-archive"></i></span>
                                                    </div>

                                                </div>
                                            </div>
-->
                                            <div class="col-md-4" >
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-primary"  style="background-color:#e30613; border-style:none; right:30px;" >
                                                        <i class=" fas fa-save"></i>                                                        Sauvegarder
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
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal" style="margin-left: -20px; background-color:#e30613; border-style:none;"><i class=" fas fa-plus-circle"></i>  </button>
                                                            <!-- First modal dialog -->
                                                            <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="myModalLabel">Ajouter Audience: </h5>
                                                                    </div>
                                                                        
                                                                        <div class="modal-body">

                                                                            <form method="post" id="myForm" action="{{route('audience.store')}}" enctype="multipart/form-data">
                                                                                
                                                                                @csrf
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom05" class="form-label">Date de l'Audience</label>
                                                                                            <input type="date" max="{{date('Y-m-d')}}" class="form-control" value="{{$requete->date_audience ?? ''}}" name="date_audience" id="validationCustom05"
                                                                                                required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom05" class="form-label">Chargé de l'Audience</label>
                                                                                            <select  value="{{$requete->charge_audience ?? ''}}" name="charge_audience" class="form-select"  id="validationCustom03" >
                                                                                                <option value="">Séléctionner</option>
                                                                                                @foreach($users as $user)
                                                                                                    <option @if($requete->user == $user->id) selected @endif value="{{$user->id}}">{{$user->nom}} {{$user->prenom}}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row" id="type1">
                                                                                    <div class="col-md-6" id="souscategorie2">
                                                                                        <label for="validationCustom03" class="form-label"> Détail </label>
                                                                                        <select class="form-control" value="{{$requete->type ?? ''}}" name="type" >
                                                                                            @foreach($souscategories as $souscategorie)
                                                                                                @if($souscategorie->categorie == 6)
                                                                                                    <option @if($requete->souscategorie == $souscategorie->id) selected @endif value="{{$souscategorie->label ?? ''}}">
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
                                                                                        <select class="form-control" value="{{$requete->secteur ?? ''}}" name="secteur" id="secteurelt">
                                                                                            <option value="">
                                                                                                Séléctionner
                                                                                            </option>
                                                                                            @foreach($secteurs as $secteur)
                                                                                                <option @if($requete->secteur == $secteur->id) selected @endif value="{{$secteur->id}}" id="{{$secteur->type}}" >
                                                                                                    {{$secteur->type ?? ''}}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>

                                                                                    <div class="col-md-6" id="administrationdiv2">
                                                                                        <label for="validationCustom03" class="form-label">Administration</label>
                                                                                        <select  value="{{$requete->administartion ?? ''}}" name="administartion" id="administrationelt" class="form-select "  >
                                                                                            <option value="" > -- Séléctionner-- </option>
                                                                                            @foreach($secteurs as $secteur)
                                                                                                    <optgroup label="{{$secteur->type}}">
                                                                                                    @foreach($secteur->administrations() as $administration)
                                                                                                            <option @if($requete->administration == $administration->id) selected @endif value="{{$administration->id}}">{{$administration->type}}</option>
                                                                                                        @endforeach

                                                                                                    </optgroup>
                                                                                                @endforeach

                                                                                        </select>                                                   
                                                                                    </div>
                                                                                    <div class="col-md-6" id="sousadministrationdiv2">
                                                                                        <label for="validationCustom03" class="form-label">Sous Administration</label>
                                                                                        <select  value="{{$requete->sousadministartion ?? ''}}" name="sousadministartion" id="sousadministrationelt" class="form-select "  >
                                                                                            <option value="" > -- Séléctionner-- </option>
                                                                                        @foreach($administrations as $administration)
                                                                                                    <optgroup label="{{$administration->type}}">
                                                                                                        @foreach($administration->sousadministrations() as $sousadministration)
                                                                                                            <option @if($requete->sousadministration == $sousadministration->id) selected @endif value="{{$sousadministration->id}}">{{$sousadministration->label}}</option>
                                                                                                        @endforeach
                                                                                                    </optgroup>
                                                                                                @endforeach
                                                                                                                                

                                                                                        </select>                                                   
                                                                                    </div>

                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label for="validationCustom05" class="form-label">Sujet</label>
                                                                                            <input type="text" class="form-control" value="{{$requete->sujet ?? ''}}" name="sujet" id="validationCustom05"
                                                                                                required>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="row" id>
                                                                                    <div class="col-md-12">
                                                                                        <label for="validationCustom03" class="form-label">Détails : </label>
                                                                                        <textarea class="form-control" value="{{$requete->details ?? ''}}" name="details"></textarea>
                                                                                    </div>

                                                                                </div>

                                                                                <br>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Sauvegarder</button>
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
                                                                    <th>Date de l'audience</th>
                                                                    <th>Code</th>
                                                                    <th>Chargé de l'audience</th>
                                                                    <th> Sujet </th>

                                                                    <!-- <th> Pièce </th> -->

                                                                    <th>Action</th>
                                                                </tr>
                                                                
                                                            </thead>
                                                            <tbody>
                                                                    <tr>
                                                                        <td>{{$audience->id ?? ''}}</td>
                                                                        <td>{{$audience->date_audience ?? ''}}</td>
                                                                        <td>{{$audience->code_initial ?? ''}}</td>
                                                                        <td>
                                                                        {{$audience->charger()['nom'] ?? ''}}
                                                                        {{$audience->charger()['prenom'] ?? ''}}
                                                                        </td>
                                                                        <td>
                                                                            {{ str_replace('%'," ",$audience->sujet) }}    
                                                                        </td>
                                                                        <!-- <td>
                                                                            <a href="{{asset('public/'.$audience->piece)}}" class="btn btn-primary" download>
                                                                                {{$audience->filename ?? 'Fichier'}}
                                                                            </a>

                                                                        </td>
 -->
                                                                        <td>
                                                                            <a href="{{route('audience.edit',['audience'=>$audience->id])}}">
                                                                                <i class=" fas fa-edit"></i>
                                                                            </a>
                                                                            <a href="{{route('audience.destroy',['audience'=>$audience->id])}}"
                                                                            onclick="return confirm('Confirmer ?')"
                                                                            >
                                                                                <i class="fas fa-trash-alt"></i>
                                                                            </a>
                                                                        </td>

                                                                    </tr>
                                                            </tbody>


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

                    

                    <!--courrier -->
                    <div class="row" id="courriers">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="card-title">Courrier  </h4>
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
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalcc" style="background-color:#e30613; border-style:none;"><i class=" fas fa-plus-circle"></i> </button>
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
                                                @foreach($ccs as $cc)
                                                    <tr>
                                                        <td>{{$cc->envoi ?? ''}}</td>
                                                        <td>{{$cc->type ?? ''}}</td>
                                                        <td>
                                                            @if($cc->brouillon == "on")
                                                                Projet
                                                            @else
                                                                Envoyé
                                                            @endif
                                                        </td>
                                                        <td><a href="{{asset('public/'.$cc->piece)}}" class=""><i class=" fas fa-file"></i> </a></td>

                                                        <td>{{$cc->message ?? ''}}</td>

                                                        <td>
                                                            <a data-bs-toggle="modal" data-bs-target="#myModalcc{{$cc->id}}" href="{{route('courrier.edit',['courrier'=>$cc->id])}}">
                                                                <i class=" fas fa-edit"></i>
                                                            </a>
                                                            @include('includes.modals.courrier_citoyen_edit',['cc'=>$cc])

                                                            <a href="{{route('courrier.destroy',['courrier'=>$cc->id])}}"
                                                            onclick="return confirm('Confirmer ?')"
                                                            >
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </td>

                                                    </tr>
                                                @endforeach 
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
                                                @foreach($cms as $cm)
                                                    <tr>
                                                        <td>{{$cm->envoi ?? ''}}</td>
                                                        <td>{{$cm->etat_courrier_depart ?? ''}}</td>
                                                        <td>
                                                            @if($cm->brouillon == "on")
                                                                Projet
                                                            @else
                                                                Envoyé
                                                            @endif
                                                        </td>
                                                        <td>{{$cm->message ?? ''}}</td>
                                                        <td>{{$cm->piece ?? ''}}</td>
                                                        <td>
                                                            <a href="{{route('courrier.edit',['courrier'=>$cs->id])}}">
                                                                <i class=" fas fa-edit"></i>
                                                            </a>
                                                            <a href="{{route('courrier.destroy',['courrier'=>$cs->id])}}"
                                                            onclick="return confirm('Confirmer ?')"
                                                            >
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </td>

                                                    </tr>

                                                @endforeach 
                                                </tbody>
                                            </table>   
                                        
                                        </div>
                                        <div class="tab-pane" id="messages12" role="tabpanel">
                                        <div class="col-md-2">
                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalCS" style="background-color:#e30613; border-style:none;"><i class=" fas fa-plus-circle"></i>   </button>
                                            </div>
                                        <br>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Date Envoi</th>
                                                    <th>Etat Courrier</th>
                                                    <th>Etat</th>
                                                    <th>Message</th>
                                                    <th>Action*</th>
                                                    
                                                </tr>
                                                </thead>            
                                                <tbody>
                                                @foreach($css as $cs)
                                                    <tr>
                                                        <td>{{$cs->envoi ?? ''}}</td>
                                                        <td>{{$cs->etat_courrier_depart ?? ''}}</td>

                                                        <td>
                                                            @if($cs->brouillon == "on")
                                                                Projet
                                                            @else
                                                                Envoyé
                                                            @endif
                                                        </td>
                                                        <td>{{$cs->message ?? ''}}</td>
                                                        <td>
                                                            <a data-bs-toggle="modal" data-bs-target="#myModalCS{{$cs->id}}" href="{{route('courrier.edit',['courrier'=>$cs->id])}}">
                                                                <i class=" fas fa-edit"></i>
                                                            </a>
                                                            @include('includes.modals.courrier_secteur_edit',['cs'=>$cs])

                                                            <a href="{{route('courrier.destroy',['courrier'=>$cs->id])}}"
                                                            onclick="return confirm('Confirmer ?')"
                                                            >
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </td>

                                                    </tr>

                                                @endforeach 
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

                    
                    <div class="row" id="seconddiv">
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
                                        <li class="nav-item" >
                                            <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                <span class="d-none d-sm-block">Affectation Externes</span>   
                                            </a>
                                        </li>

                                    </ul>
    
                                    <!-- Tab panes -->
                                    <div class="tab-content p-3 text-muted">
                                        <div class="tab-pane active" id="home1" role="tabpanel" >
                                            <div class="col-sm-6 col-md-4 col-xl-3" style="margin-left: -20px;">
                                                <div class="my-4 text-center">
                                                </div>
        
                                                <!-- sample modal content -->
                                                
                                            </div>
                                            
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalAttr" style="background-color:#e30613; border-style:none;"><i class=" fas fa-plus-circle"></i> </i> 
                                             </button>
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
                                                @foreach($attributions as $attribution)
                                                    <tr>
                                                        <td>{{$attribution->created_at ?? ''}}</td>
                                                        <td>{{$attribution->user()}}</td>
                                                        <td><a href="{{asset('public/'.$attribution->piece)}}" class="btn btn-info "> Télécharger </a></td>
                                                    </tr>

                                                @endforeach
 
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="profile1" role="tabpanel">
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalTrans" style="background-color:#e30613; border-style:none;"><i class=" fas fa-plus-circle"></i> </button>
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
                                                @foreach($transferts as $transfert)
                                                    <tr>
                                                        <td>{{$transfert->created_at ?? ''}}</td>
                                                        <td>{{$transfert->user()}}</td>
                                                        <td><a href="{{asset('public/'.$transfert->piece)}}" class="btn btn-info "> Télécharger </a></td>

                                                    </tr>

                                                @endforeach
 
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="messages1" role="tabpanel">
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalEx" style="background-color:#e30613; border-style:none;"><i class=" fas fa-plus-circle"></i> </button>
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
                                                @foreach($affectations as $affectation)
                                                    <tr>
                                                        <td>{{$affectation->getelt('secteur') ?? ''}}</td>
                                                        <td>{{$affectation->getelt('administration') ?? ''}}</td>

                                                        <td>{{$affectation->created_at ?? ''}}</td>
                                                        <td>{{$affectation->user()}}</td>
                                                        <td><a href="#" class="btn btn-info "> Télécharger {{$attribution->piece ?? ''}}</a></td>

                                                    </tr>

                                                @endforeach
 
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

                    @if($requete->invest == "on")
                        @include('includes.modals.edit_invest')
                    @endif
                    <!-- Fin Requete -->
                    
                    <!-- courrier -->
                    
                    <!-- Action -->
                    



                                                


                                                



@endsection

@section('scripts')
<script>
        $(document).ready(function() {
                $(".audience").click(function() {
                    $('html, body').animate({
                        scrollTop: $("#audience").offset().top
                    }, 100);
                });


                $(".seconddiv").click(function() {
                    $('html, body').animate({
                        scrollTop: $("#seconddiv").offset().top
                    }, 100);
                });

                
                $(".courriers").click(function() {
                    $('html, body').animate({
                        scrollTop: $("#courriers").offset().top
                    }, 100);
                });


                $('#fiche3').hide()
                $('#fiche2').hide()
                $('#fiche1').hide()

            @if($investissement->etat_projet ?? '' == "fiche3")
                $('#fiche3').show()
            @endif
            @if($investissement->etat_projet ?? '' == "fiche2")
                $('#fiche2').show()
            @endif
            @if($investissement->etat_projet ?? '' == "fiche1")
                $('#fiche1').show()
            @endif

            $('#souscategorie2').hide()
            $('#administrationdiv').hide()

            $('#sousadministrationdiv').hide()
            
            $('#soussouscategoriediv').hide()
            $('#souscategoriediv').hide()
 
            $('#administrationdiv2').hide()
            $('#sousadministrationdiv2').hide()

            $('#administrationdiv3').hide()
            $('#sousadministrationdiv3').hide()
            
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

            $('#citoyen_cc').on('change',function(){
                var selectedVal = $(this).find("option:selected" ).val();
                $('#etat_courrier_cc > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            })


            $('#secteur_cc').on('change',function(){
                var selectedVal = $(this).find("option:selected" ).val();

                $('#etat_courrier_cs > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");

            })

            $("#categorie").on("change",function(){
                
                $('#souscategorie').val("").change();
                $('#soussouscategorie').val("").change();
                $('#souscategoriediv').show()
                $('#soussouscategoriediv').hide()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                var selectedValeur = $(this).find("option:selected" ).val();
                console.log(selectedValeur)
                // if(selectedValeur==11){
                //         $('#myModalCS').modal('show');
                //         $('#secteur_cc').val('Arrivée').change() 
                // }

                // if(selectedValeur==9){
                //         $('#secteur_cc').val('depart').change() 
                // }

                $('#souscategorie > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });
            
            $("#souscategorie").on("change",function(){
                $('#soussouscategoriediv').show()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                var selectedValeur = $(this).find("option:selected" ).val();
                console.log(selectedValeur)
                if(selectedValeur==13 || selectedValeur==14 || selectedValeur==15){
                        $('#myModalCS').modal('show');
                        $('#secteur_cc').val('Arrivée').change() 
                }

                if(selectedValeur==12){
                    $('#myModalCS').modal('show');
                    $('#secteur_cc').val('Départ').change() 
                }

                console.log(selectedVal)
                $('#soussouscategorie > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });


            $("#administrationelt").on("change",function(){
                $('#sousadministrationdiv2').show()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#administrationelt > optgroup[label="'+selectedVal+'"]')
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

            $("#administration3").on("change",function(){
                $('#sousadministrationdiv3').show()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#administration3 > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });

            $("#secteurelt").on("change",function(){
                console.log('test')
                $('#administrationdiv2').show()
                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#administrationelt > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });  


            $("#secteur3").on("change",function(){
                $('#administrationdiv3').show()

                var selectedVal = $(this).find("option:selected" ).attr('id');
                console.log(selectedVal)
                $('#administration3 > optgroup[label="'+selectedVal+'"]')
                .show()
                .siblings("optgroup")
                .css("display","none");
            });  
            $("#secteur").on("change",function(){
                $('#administrationdiv').show()
                $('#administration').change()
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

            @if($requete->type_requete == 5)
                $('#secteur').hide()
            @endif


            $('#typerequete').on('change',function(){

                
                

                var value = this.value;
                console.log(value)

                console.log(value)
                if(value==5){
                    $('#secteur').hide()
                    $('#administrationdiv').hide()
                    $('#sousadministrationdiv').hide()
                    
                }else{
                    $('#secteur').show()
                    $('#administrationdiv').show()
                    $('#sousadministrationdiv').show()
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

            $('#date_requete').on('change',function(){
                $('#code_initial_html').html('')
                var valeur = $(this).val();
                $('#code_initial').val(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+$('#numero').val());
                $('#code_transfert').val(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+$('#numero').val());
                $('#code_initial_html').html(new Date($('#date_requete').val()).getFullYear().toString().substr(-2)+pad2($('#wilaya_select').val())+$('#source').val()+$('#numero').val());
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
            
            $('#fermer').on('click',function(){
                var oldval = {!! json_encode($requete->categorie) !!};  
                $('#categorie').val(oldval).change('')
                $('#souscategorie').val("").change('')
                $('#souscategoriediv').hide('')
                $('#soussouscategorie').val('')
                $('#soussouscategoriediv').hide()
                
                                
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
@endsection

@section('modals')
    @include('includes.modals.affectation')
    @include('includes.modals.courrier_mediateur')
    @include('includes.modals.courrier_secteur')
    @include('includes.modals.courrier_citoyen')
    @include('includes.modals.transfert')    
    @include('includes.modals.attribution')

@endsection