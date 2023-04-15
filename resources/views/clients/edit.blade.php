@extends('layouts.admin')



@section('content')                    

<div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Utilisateurs</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wassit</a></li>
                                        <li class="breadcrumb-item active">Utilisateurs</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="card-title">Courrier : </h4>
                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home12" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Citoyen</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-bs-toggle="tab" href="#profile12" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Association</span> 
                                            </a>
                                        </li>

                                                                                
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#messages12" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                <span class="d-none d-sm-block">Economic </span>   
                                            </a>
                                        </li>

                                    </ul>
                                    <br>


                                    <!-- Tab panes -->
                                    <div class="tab-content p-3 text-muted">
                                        <div class="tab-pane @if($client->type=="citoyen") active selected @endif" id="home12" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title"><i class=" fas fa-user-plus"></i>  Nouveau Citoyen</h4>
                                                            <hr>
                                                            <br>
                                                            <form class="needs-validation" method="post"  action="{{route('client.update.citoyen',['client'=>$client->id])}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Nom *</label>
                                                                            <input value="nom" name="nom_c" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Prénom *</label>
                                                                            <input value="prenom" name="prenom_c" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Téléphone *</label>
                                                                            <input value="telephone" name="telephone_c" type="number" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Email *</label>
                                                                            <input value="email" name="email_c" type="Email" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Wilaya *</label>
                                                                                    <select class=" select2 form-control" id="wilaya_select" value="wilaya" name="wilaya_c">
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
                                                                            <label for="validationCustom02" class="form-label">Commune * </label>
                                                                            <select value="commune" name="commune_c" class="form-select"  required>
                                                                                        <option value="" > -- Séléctionner-- </option>
                                                                                        @foreach ($communes as $commune)
                                                                                            <option value="{{$commune->id}}" id="{{$commune->name}}" >
                                                                                                {{$commune->name}}   
                                                                                            </option>
                                                                                        @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Naissance</label>
                                                                                <input value="date_naissance" name="date_naissance_c" type="date" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Sexe *</label>
                                                                                <select value="sexe" name="sexe_c" class="form-select"  required>
                                                                                    <option selected disabled value="">Choisir</option>
                                                                                    <option value="homme">Homme</option>
                                                                                    <option value="femme">Femme</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">N° pièce d'identité * (Passeport)</label>
                                                                                <input value="piece_identite" name="piece_identite_c" type="file" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Délivrance *</label>
                                                                                <input value="date_delivrance" name="date_delivrance_c" type="date" class="form-control" id="validationCustom05">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Mot de Passe</label>
                                                                            <input value="password" name="password_c" type="password" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Confirmer Mot de Passe</label>
                                                                            <input value="type" name="" type="password" class="form-control" id="validationCustom05"
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
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="tab-pane @if($client->type=="association") active selected @endif" id="profile12" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title"><i class=" fas fa-user-plus"></i>  Nouveau Association</h4>
                                                            <hr>
                                                            <br>
                                                            <form class="needs-validation" method="post"  action="{{route('client.update.association',['client'=>$client->id])}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Nom</label>
                                                                            <input value="nom" name="nom_a" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Prénom</label>
                                                                            <input value="prennom" name="prennom_a" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Téléphone</label>
                                                                            <input value="telephone" name="telephone_a" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Email</label>
                                                                            <input value="email" name="email_a" type="Email" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Wilaya</label>
                                                                            <select class=" select2 form-control" id="wilaya_select" value="wilaya" name="wilaya_a">
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
                                                                            <select disabled class=" select2 form-control" id="wilaya"  value="commune" name="commune_a">
                                                                                <option value="" > -- Séléctionner-- </option>
                                                                                @foreach ($communes as $commune)
                                                                                    <option value="{{$commune->id}}" id="{{$commune->name}}" >
                                                                                        {{$commune->name}}   
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Naissance *</label>
                                                                                <input value="date_naissance" name="date_naissance_a" type="date" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Sexe *</label>
                                                                                <select value="sexe" name="sexe_a" class="form-select"  required>
                                                                                    <option selected disabled value="">Choisir</option>
                                                                                    <option value="homme">Homme</option>
                                                                                    <option value="femme">Femme</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">N° pièce d'identité * (Passeport)</label>
                                                                                <input value="piece_identite" name="piece_identite_a" type="file" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Délivrance</label>
                                                                                <input value="date_delivrance" name="date_delivrance_a" type="date" class="form-control" id="validationCustom05">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Qualité</label>
                                                                            <input value="qualite" name="qualite_a" type="password" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Dénomination
                                                                            </label>
                                                                            <input value="denomination" name="denomination_a" type="password" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Numéro d'identification statistiques
                                                                            </label>
                                                                            <input value="nis" name="nis_a" type="password" class="form-control" id="validationCustom05">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Mot de Passe</label>
                                                                            <input value="password" name="password_a" type="password" class="form-control" id="validationCustom05">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Confirmer Mot de Passe</label>
                                                                            <input value="confirme_mot_de_passe" name="confirme_mot_de_passe_a" type="password" class="form-control" id="validationCustom05">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Caractère de l'association
                                                                            </label>
                                                                            <select value="caractere" name="caractere_a" class="form-select"  required>
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
                                                                            <select value="type" name="type_a" class="form-select"  required>
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
                                                <!-- end col -->
                                            </div>                                                                                       
 
                                        
                                        </div>
                                        <div class="tab-pane @if($client->type=="operateur") active selected @endif" id="messages12" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title"><i class=" fas fa-user-plus"></i>  Nouveau Opérateur économique</h4>
                                                            <hr>
                                                            <br>
                                                            <form class="needs-validation" method="post"  action="{{route('client.update.operateur',['client'=>$client->id])}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Nom</label>
                                                                            <input value="nom" name="nom_op" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Prénom</label>
                                                                            <input value="prenom" name="prenom_op" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Téléphone</label>
                                                                            <input value="telephone" name="telephone_op" type="text" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom05" class="form-label">Email</label>
                                                                            <input value="email" name="email_op" type="Email" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="validationCustom02" class="form-label">Wilaya</label>
                                                                            <select class=" select2 form-control" id="wilaya_select" value="wilaya" name="wilaya_op">
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

                                                                            <select class=" select2 form-control" id="wilaya"  value="commune" name="commune_op">
                                                                                <option value="" > -- Séléctionner-- </option>
                                                                                @foreach ($communes as $commune)
                                                                                    <option value="{{$commune->id}}" id="{{$commune->name}}" >
                                                                                        {{$commune->name}}   
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Naissance *</label>
                                                                                <input value="date_naissance" name="date_naissance_op" type="date" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom02" class="form-label">Sexe *</label>
                                                                                <select value="sexe" name="sexe_op" class="form-select"  required>
                                                                                    <option selected disabled value="">Choisir</option>
                                                                                    <option value="homme">Homme</option>
                                                                                    <option value="femme">Femme</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">N° pièce d'identité * (Passeport)</label>
                                                                                <input value="piece_identite" name="piece_identite_op" type="file" class="form-control" id="validationCustom05"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="mb-3">
                                                                                <label for="validationCustom05" class="form-label">Date de Délivrance</label>
                                                                                <input value="date_delivrance" name="date_delivrance_op" type="date" class="form-control" id="validationCustom05">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Qualité</label>
                                                                            <input value="qualité" name="qualité_op" type="password" class="form-control" id="validationCustom05"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Dénomination
                                                                            </label>
                                                                            <input value="denomination" name="denomination_op" type="password" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Numéro d'identification statistiques
                                                                            </label>
                                                                            <input value="nis" name="nis_op" type="password" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Mot de Passe</label>
                                                                            <input value="password" name="password_op" type="password" class="form-control" id="validationCustom05"
                                                                                >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <br>
                                                                        <div class="mb-6">
                                                                            <label for="validationCustom02" class="form-label">Confirmer Mot de Passe</label>
                                                                            <input value="confirme_mot_de_passe" name="confirme_mot_de_passe" type="password" class="form-control" id="validationCustom05"
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
                                                    </div>
                                                </div>
                                                <!-- end col -->
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


        function watchWilayaChanges() {
            $('#wilaya_select').on('change', function (e) {
                e.preventDefault();
                var $communes = $('#commune_select');
                var $communesLoader = $('#commune_select_loading');
                var $iconLoader = $communes.parents('.input-group').find('.loader-spinner');
                var $iconDefault = $communes.parents('.input-group').find('.material-icons');
                $communes.hide().prop('disabled', 'disabled').find('option').not(':first').remove();
                $communesLoader.show();
                $iconDefault.hide();
                $iconLoader.show();
                $.ajax({
                    dataType: "json",
                    method: "GET",
                    url: "/api/static/communes/ " + $(this).val()
                })
                    .done(function (response) {
                        $.each(response, function (key, commune) {
                            $communes.append($('<option>', {value: commune.id}).text(commune.name));
                        });
                        $communes.prop('disabled', '').show();
                        $communesLoader.hide();
                        $iconLoader.hide();
                        $iconDefault.show();
                    });
            });
        }


        $(document).ready(function () {
            watchWilayaChanges();
        });




    </script>

@endsection