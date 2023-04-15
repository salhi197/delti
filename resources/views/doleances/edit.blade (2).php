@extends('layouts.admin')

@section('content')


                <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Requêtes</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Requêtes</li>
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
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalAttr"><i class="fa fa-edit"></i> Attribution </button>

                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalTrans"><i class="fa fa-edit"></i> Transfert</button>
                                        </div>


                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalEx"><i class="fa fa-edit"></i> Affectation Externe</button>
                                        </div>

                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalcc"><i class="fa fa-edit"></i> Courier Citoyen </button>
                                        </div>


                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalCS"><i class="fa fa-edit"></i> Courier Secteur </button>
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
                                            <h6>Information Requete : </h6>
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
                                                        <select class=" select2 form-select" value="{{$requete->source ?? ''}}" name="source" id="source"  required>

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
                                                            <input value="{{$requete->numero ?? ''}}" name="numero" onKeyPress="if(this.value.length==5) return false" required type="number" class="form-control"  id="numero" required>
                                                        </div>
                                                    </div>

                                            <hr>
                                            <h6>Information Citoyen : </h6>


                                            
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
                                    <br>
                                    
                                        <div class="row">
                                            
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Wilaya</label>
                                                    <select disabled class=" select2 form-control" id="wilaya"  value="{{$requete->wilaya ?? ''}}" name="wilaya">
                                                        <option value="" > -- Séléctionner-- </option>
                                                        @foreach ($wilayas as $wilaya)
                                                            <option @if($requete->wilaya == $wilaya->id) selected @endif value="{{$wilaya->id}}" id="{{$wilaya->name}}" >
                                                                {{$wilaya->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>                                                    

                                                </div>
                                            </div>
                                            <div class="col-md-4">
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
                                            <div class="col-md-4">
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
                                                    <label for="validationCustom02" class="form-label">Secteur : </label>
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
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Lien vidéo</label>
                                                    <input value="{{$requete->video ?? ''}}" name="video" type="text" class="form-control" id="validationCustom05"
                                                        >
                                                </div>
                                            </div>
                                            @if(strlen($requete->piece)>0)
                                            <div class="col-md-2">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Pièce Jointe</label>
                                                    <div class="input-group" >
                                                        
                                                        <a href="{{asset('public/'.$requete->piece)}}" class="btn btn-primary">
                                                            Télécharger
                                                        </a>
                                                       

                                                    </div><!-- input-group -->

                                                </div>
                                            </div>
                                            @endif
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Pièce Jointe</label>
                                                    <div class="input-group" >
                                                        <input type="file" class="form-control" >
    
                                                        <span class="input-group-text"><i class=" fas fa-file-archive"></i></span>
                                                    </div><!-- input-group -->

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

                    @if($requete->invest == "on")
                    <div class="row" id="invesstissement">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">
                      <i class="fas fa-user-plus"></i> Invesstissement
                    </h4>
                    <hr />
                    <br />
                    <form class="needs-validation" novalidate>
                      <h6>Identification du Projet</h6>
                      <hr />
                      <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Tél</label>
                                        <input name="telephone"  onKeyPress="if(this.value.length==9) return false" type="number" class="form-control" id="inputEmail4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Fax</label>
                                        <input name="fax" type="number"  onKeyPress="if(this.value.length==9) return false" class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Mobile</label>
                                        <input name="mobile" type="number"  onKeyPress="if(this.value.length==10) return false" class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">E-mail</label>
                                        <input name="email"  type="email"  class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="mb-3">
                            <label for="validationCustom05" class="form-label"
                              >Secteur</label
                            >
                            <select
                              name="secteur"
                              class="form-control select2"
                              id="inputState"
                              required
                            >
                              <option selected>Sélectionner...</option>
                              <option value="Agriculture">Agriculture</option>
                              <option value="Industrie">Industrie</option>
                              <option value="Services">Services</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                            <label for="validationCustom05" class="form-label"
                              >Activité</label
                            >
                            <input
                              name="activite"
                              type="text"
                              class="form-control"
                              id="validationCustom05"
                              required
                            />
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                            <label for="validationCustom02" class="form-label"
                              >Implimentation</label
                            >
                            <select
                              name="implimentation"
                              class="form-control select2"
                              id="validationCustom03"
                              required
                            >
                              <option selected>Sélectionner...</option>
                              <option value="Zone Industrielle">
                                - Zone Industrielle
                              </option>
                              <option value="Zone d'Activité">
                                - Zone d'Activité
                              </option>
                              <option value="Terrain agricole">
                                - Terrain agricole
                              </option>
                              <option value="Hors zones">- Hors zones</option>
                            </select>
                          </div>
                          <br />
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                            <label for="validationCustom02" class="form-label"
                              >Superficie</label
                            >
                            <input
                              name="Superficie"
                              type="number"
                              class="form-control"
                              id="validationCustom05"
                              required
                            />
                          </div>
                          <br />
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="mb-3">
                            <label for="inputState">Statut du foncier</label>
                            <select id="inputState" name="statut_du_foncier" class="form-control">
                                            <option selected>Séléctionner...</option>
                                            <option value="Arreté de concession">- Arreté de concession</option>
                                            <option value="Act de concession">- Act de concession</option>
                                            <option value="Act de propriété">- Act de propriété</option>
                                            <option value="Location">- Location</option>
                                            <option value="Occupation sans titre">- Occupation sans titre</option>
                            </select>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                                        <label for="inputState">Etat actuel de projet</label>
                                        <select name="etat_projet" id="etat_projet" class="form-control">
                                            <option selected>Séléctionner...</option>
                                            <option value="fiche1">- Achevé (Fiche-01)</option>
                                            <option value="fiche2">- En voie de réalisation (Fiche-02)</option>
                                            <option value="fiche3">- En voie de Lancement (Fiche-03)</option>
                                        </select>
                          </div>
                        </div>
                      </div>
                      <br>

                      <h6> Projet achevé (Fiche-01)</h6>
                      <hr />
                      <div class="row" id="fiche1">           
                        <div class="col-md-4">
                          <div class="mb-3">
                                            <label for="inputState">Projet en exploitation</label>
                                            <select name="projet_exploitation" id="projet_exploitation"  class="form-control">
                                                    <option value="c" selected>Sélectionner...</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                                </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                                            <label for="inputPassword4">Date</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                                            <label for="inputState">Emploi Crés</label>
                                            <input type="number" name="emploi_cre" class="form-control"  placeholder="">
                          </div>
                        </div>
                      </div>

                      <div class="row">           
                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputState">Permis de construire</label>
                                            <select name="permis_construction" class="form-control" id="permis_construction"  class="form-control">
                                                    <option value="c">Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                            </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputPassword4">Date</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputState">Arrêté de création</label>
                                            <select name="arret_creation" id="arret_creation"  class="form-control">
                                                    <option value="c" selected>Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                            </select>
                          </div>
                        </div>
                                                <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputPassword4">Date</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                          </div>
                        </div>
                      </div>

                      <div class="row">           
                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputState">Approbation de l’étude de danger</label>
                                            <select name="approbation" class="form-control" id="approbation"  class="form-control">
                                                    <option value="c">Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                            </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputPassword4">Date</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputState">Arrêté d’exploitation</label>
                                            <select name="arret_exploitation" id="arret_exploitation"  class="form-control">
                                                    <option value="c" selected>Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                            </select>
                          </div>
                        </div>
                                                <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputPassword4">Date</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                          </div>
                        </div>
                      </div>

                      <div class="row">           
                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputState">Certificat de conformité</label>
                                            <select name="certficat" class="form-control" id="certficat"  class="form-control">
                                                    <option value="c">Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                            </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputPassword4">Date</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputState">Arrêté de régularisation (loi 08-15)</label>
                                            <select name="arreteregularisation" id="arreteregularisation"  class="form-control">
                                                    <option value="c" selected>Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                            </select>
                          </div>
                        </div>
                                                <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputPassword4">Date</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                          </div>
                        </div>
                      </div>

                      <div class="row">           
                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputState">Autorisation exceptionnelle</label>
                                            <select name="autorisation" class="form-control" id="autorisation"  class="form-control">
                                                    <option value="c">Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                            </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputPassword4">Date</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                                        <label for="inputState">Raccordement aux réseaux divers</label>
                                            <select name="raccordement" class="form-control" id="raccordement"  class="form-control">
                                                    <option value="c">Choisir</option>
                                                    <option value="o">Oui</option>
                                                    <option value="n">Non</option>
                                            </select>
                          </div>
                        </div>
                                                <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputPassword4">Date</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                          </div>
                        </div>
                      </div>

                      <div class="row">           
                        <div class="col-md-6">
                          <div class="mb-3">
                                        <label for="inputEmail4">Contraintes rencontrées</label>
                                        <textarea class="form-control" name="contraintes" aria-label="With textarea"></textarea>
                          </div>
                        </div>
                      </div>                      

<br>
                      <h6>Projet en voie de réalisation (Fiche-02)</h6>
                      <hr />
                        <div class="row" id="fiche2">           

                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputPassword4">Date Lancement de projet</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                          </div>
                        </div>
                      </div>

                      <div class="row">           
                        <div class="col-md-3">
                          <div class="mb-3">
                                                <label for="inputState">Permis de construire</label>
                                                <select name="permis_construction2" id="permis_construction2"  class="form-control">
                                                        <option value="c" selected>Choisir</option>
                                                        <option value="o">Oui</option>
                                                        <option value="n">Non</option>
                                                </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputPassword4">Date</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                                                <label for="inputState">Arrêté de création</label>
                                                <select name="arret_creation2" class="form-control" id="arret_creation2" alue)" class="form-control">
                                                        <option value="c">Choisir</option>
                                                        <option value="o">Oui</option>
                                                        <option value="n">Non</option>
                                                </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputPassword4">Date</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                        </div>
                        </div>
                      </div>

                      <div class="row">           
                        <div class="col-md-6">
                          <div class="mb-3">
                                            <label for="inputEmail4">Taux de réalisation</label>
                                            <input type="number" name="taux" class="form-control"  placeholder="">
                          </div>
                        </div>
                      </div>   

                      <div class="row">           
                        <div class="col-md-6">
                          <div class="mb-3">
                                        <label for="inputEmail4">Contraintes rencontrées</label>
                                        <textarea class="form-control" name="contraintes" aria-label="With textarea"></textarea>
                          </div>
                        </div>
                      </div> 
                      <br>
                      <h6>Projet en voie de lancement (Fiche-03)</h6>
                      <hr>
                      <div class="row" id="fiche3">           
                        <div class="col-md-3">
                          <div class="mb-3">
                                                <label for="inputState">Permis de construire</label>
                                                <select name="permis_construction2" id="permis_construction2"  class="form-control">
                                                        <option value="c" selected>Choisir</option>
                                                        <option value="o">Oui</option>
                                                        <option value="n">Non</option>
                                                </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputPassword4">Date</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                                                <label for="inputState">Arrêté de création</label>
                                                <select name="arret_creation2" class="form-control" id="arret_creation2" alue)" class="form-control">
                                                        <option value="c">Choisir</option>
                                                        <option value="o">Oui</option>
                                                        <option value="n">Non</option>
                                                </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="mb-3">
                                            <label for="inputPassword4">Date</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                        </div>
                        </div>
                      </div>
 
                      <div class="row">           
                        <div class="col-md-6">
                          <div class="mb-3">
                                        <label for="inputEmail4">Contraintes rencontrées</label>
                                        <textarea class="form-control" name="contraintes" aria-label="With textarea"></textarea>
                          </div>
                        </div>
                      </div>                        
                        <button class="btn btn-primary" type="submit">
                          Valider
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
            </div> 
                    @endif
                    <!-- Fin Requete -->


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
                                                                        <h5 class="modal-title" id="myModalLabel">Ajouter Audience *  : </h5>
                                                                    </div>
                                                                        
                                                                        <div class="modal-body">

                                                                            <form method="post" id="myForm" action="{{route('audience.store')}}" class="needs-validation" >
                                                                                
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
                                                                                        <select class="form-control" value="{{$requete->secteur ?? ''}}" name="secteur" id="secteur2">
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
                                                                                        <select  value="{{$requete->administartion ?? ''}}" name="administartion" id="administration2" class="form-select "  >
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
                                                                                        <select  value="{{$requete->sousadministartion ?? ''}}" name="sousadministartion" id="sousadministration2" class="form-select "  >
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
                                                @foreach($ccs as $cc)
                                                    <tr>
                                                        <td>{{$cc->envoi ?? ''}}</td>
                                                        <td>{{$cc->etat_courrier_depart ?? ''}}</td>
                                                        <td>
                                                            @if($cc->brouillon == "on")
                                                                Projet
                                                            @else
                                                                Envoyé
                                                            @endif
                                                        </td>
                                                        <td>{{$cc->message ?? ''}}</td>
                                                        <td>{{$cc->piece ?? ''}}</td>
                                                        <td>
                                                            <a href="#" class="btn btn-info">
                                                                Envoyer
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
                                                            <a href="#" class="btn btn-success">
                                                                Envoyer
                                                            </a>
                                                        </td>

                                                    </tr>

                                                @endforeach 
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
                                                            <a href="#" class="btn btn-success">
                                                                Envoyer
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
                                                @foreach($attributions as $attribution)
                                                    <tr>
                                                        <td>{{$attribution->created_at ?? ''}}</td>
                                                        <td>{{$attribution->user()}}</td>
                                                        <td><a href="#" class="btn btn-info "> Télécharger {{$attribution->piece ?? ''}}</a></td>
                                                    </tr>

                                                @endforeach
 
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
                                                @foreach($transferts as $transfert)
                                                    <tr>
                                                        <td>{{$transfert->created_at ?? ''}}</td>
                                                        <td>{{$transfert->user()}}</td>
                                                        <td><a href="#" class="btn btn-info "> Télécharger {{$attribution->piece ?? ''}}</a></td>

                                                    </tr>

                                                @endforeach
 
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
                    <!-- courrier -->
                    
                    <!-- Action -->
                    



                                                


                                                



@endsection

@section('scripts')
<script>
        $(document).ready(function() {
            $('#souscategorie2').hide()
            $('#administrationdiv').hide()

            $('#sousadministrationdiv').hide()
            
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

            @if($requete->type_requete == 5)
                $('#secteur').hide()
            @endif


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
    @include('includes.modals.transfert')
    @include('includes.modals.courrier_citoyen')
    @include('includes.modals.courrier_secteur')
    @include('includes.modals.courrier_mediateur')
    
    @include('includes.modals.attribution')

@endsection