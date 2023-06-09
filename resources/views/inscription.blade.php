@extends('layouts.client')
@section('content')
<div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Créer un compte</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">inscription</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body"
                                style="border-color: #252b3b; border: solid 3px; border-radius: 5px;">

                                <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i>
                                                &nbsp;Citoyen</span>
                                            <span class="d-none d-sm-block">Citoyen</span>
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i>
                                                &nbsp;Opérateur
                                                économique</span> <span class="d-none d-sm-block">Opérateur
                                                économique</span>
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#messages-1" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i>
                                                &nbsp;Association</span> <span class="d-none d-sm-block">Société
                                                civile</span>
                                        </a>
                                    </li>
                                </ul>
                                <br>
                                <!-- Tab panes -->
                                                <div class="tab-content p-3 text-muted">
                                                    <div class="tab-pane active" id="home-1" role="tabpanel">
                                                        <form method="POST" action="{{route('client.store.citoyen')}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Nom *</label>
                                                                            <input name="nom_c" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Prénom *</label>
                                                                            <input name="prenom_c" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Téléphone *</label>
                                                                            <input name="telephone_c" type="number" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Email *</label>
                                                                            <input name="email_c" type="Email" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Wilaya : *</label>
                                                                                    <select class="select2 form-control" id="wilaya_c" name="wilaya_c">
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
                                                                            <label for="validationCustom02" class="form-label">Commune :  * </label>
                                                                            <select class="form-control" name="commune_c" id="commune_c">
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
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Numéro Identification National NIN : </label>
                                                                                <input name="date_naissance_c" type="number" max="{{date('Y-m-d')}}" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Naissance</label>
                                                                                <input name="date_naissance_c" type="date" max="{{date('Y-m-d')}}" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Sexe *</label>
                                                                                <select name="sexe_c" class="form-select"  required>
                                                                                    <option selected disabled value="">Choisir</option>
                                                                                    <option value="homme">Homme</option>
                                                                                    <option value="femme">Femme</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">N° pièce d'identité * (Passeport)</label>
                                                                                <input name="piece_identite_c" type="number" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Délivrance *</label>
                                                                                <input name="date_delivrance_c" type="date" max="{{date('Y-m-d')}}" class="form-control" id="validationCustom05">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Mot de Passe</label>
                                                                            <input name="password_c" type="password" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Confirmer Mot de Passe</label>
                                                                            <input name="" type="password" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <button class="btn btn-primary" type="submit">Valider</button>
                                                                </div>
                                                            </form>
                                        
                                                        </div>      

                                    <div class="tab-pane" id="profile-1" role="tabpanel">
                                    <form class="needs-validation" method="post"  action="{{route('client.store.operateur')}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Nom</label>
                                                                            <input name="nom_op" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Prénom</label>
                                                                            <input name="prenom_op" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Téléphone</label>
                                                                            <input name="telephone_op" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Email</label>
                                                                            <input name="email_op" type="Email" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Wilaya</label>
                                                                            <select class="select2 form-control" id="wilaya_op" name="wilaya_op">
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
                                                                            <select class=" form-control" name="commune_op" id="commune_op">
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
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Naissance *</label>
                                                                                <input name="date_naissance_op" type="date" max="{{date('Y-m-d')}}" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Sexe *</label>
                                                                                <select name="sexe_op" class="form-select"  required>
                                                                                    <option selected disabled value="">Choisir</option>
                                                                                    <option value="homme">Homme</option>
                                                                                    <option value="femme">Femme</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">N° pièce d'identité * (Passeport)</label>
                                                                                <input name="piece_identite_op" type="number" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Délivrance</label>
                                                                                <input name="date_delivrance_op" type="date" max="{{date('Y-m-d')}}" class="form-control" id="validationCustom05">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Qualité</label>
                                                                            <input name="qualité_op" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Status Juridique
                                                                            </label>
                                                                            <select class="form-select" name="status">

                                                                                <option value="">Séléctionner</option>
                                                                                <option value="ph">Personne physique</option>
                                                                                <option value="sarl">SARL</option>
                                                                                <option value="eurl">EURL</option>
                                                                                <option value="spa">SPA</option>
                                                                                <option value="snc">SNC</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-3">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Dénomination
                                                                            </label>
                                                                            <input name="denomination_op" type="text" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Numéro d'identification statistiques
                                                                            </label>
                                                                            <input name="nis_op" type="number" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Mot de Passe</label>
                                                                            <input name="password_op" type="password" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Confirmer Mot de Passe</label>
                                                                            <input name="confirme_mot_de_passe" type="password" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <br>
                                                                <div>
                                                                    <button class="btn btn-primary" type="submit">Valider</button>
                                                                </div>
                                                            </form>                                       
                                    </div>

                                    <div class="tab-pane" id="messages-1" role="tabpanel">
                                    <form class="needs-validation" method="post"  action="{{route('client.store.association')}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Nom</label>
                                                                            <input name="nom_a" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Prénom</label>
                                                                            <input name="prennom_a" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Téléphone</label>
                                                                            <input name="telephone_a" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Email</label>
                                                                            <input name="email_a" type="Email" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Wilaya : *</label>
                                                                            <select class="select2 form-control" id="wilaya_a" name="wilaya_a">
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
                                                                            <label for="validationCustom02" class="form-label">Commune :  * </label>
                                                                            <select class=" form-control" name="commune_a" id="commune_a">
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
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Naissance *</label>
                                                                                <input name="date_naissance_a" type="date" max="{{date('Y-m-d')}}" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Sexe *</label>
                                                                                <select name="sexe_a" class="form-select"  required>
                                                                                    <option selected disabled value="">Choisir</option>
                                                                                    <option value="homme">Homme</option>
                                                                                    <option value="femme">Femme</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">N° pièce d'identité * (Passeport)</label>
                                                                                <input name="piece_identite_a" type="number" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Délivrance</label>
                                                                                <input name="date_delivrance_a" type="date" max="{{date('Y-m-d')}}" class="form-control" id="validationCustom05">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="col-md-4">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Qualité</label>
                                                                            <input name="qualite_a" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Dénomination
                                                                            </label>
                                                                            <input name="denomination_a" type="text" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Numéro d'identification statistiques
                                                                            </label>
                                                                            <input name="nis_a" type="number" class="form-control" id="validationCustom05">
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Mot de Passe</label>
                                                                            <input name="password_a" type="password" class="form-control" id="validationCustom05">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Confirmer Mot de Passe</label>
                                                                            <input name="confirme_mot_de_passe_a" type="password" class="form-control" id="validationCustom05">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Caractère de l'association
                                                                            </label>
                                                                            <select name="caractere_a" class="form-select"  required>
                                                                                <option selected disabled value="">Choisir...</option>
                                                                                <option>Association</option>
                                                                                <option>Groupe de Citoyens</option>
                                                                            </select>
                                                                        </div>    
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Type
                                                                            </label>
                                                                            <select name="type_a" class="form-select"  required>
                                                                                <option selected disabled value="">Choisir...</option>
                                                                                <option></option>
                                                                                <option></option>
                                                                            </select>
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
@endsection

@section('scripts')
<script>
    $('#wilaya_c').on('change',function(){
        var selectedVal = $(this).find("option:selected" ).attr('id');
        console.log(selectedVal)
        $('#commune_c > optgroup[label="'+selectedVal+'"]')
            .show()
            .siblings("optgroup")
            .css("display","none");

    })
    $('#wilaya_a').on('change',function(){
        var selectedVal = $(this).find("option:selected" ).attr('id');
        console.log(selectedVal)
        $('#commune_a > optgroup[label="'+selectedVal+'"]')
            .show()
            .siblings("optgroup")
            .css("display","none");

    })
    $('#wilaya_op').on('change',function(){
        var selectedVal = $(this).find("option:selected" ).attr('id');
        console.log(selectedVal)
        $('#commune_op > optgroup[label="'+selectedVal+'"]')
            .show()
            .siblings("optgroup")
            .css("display","none");

    })



</script>
@endsection