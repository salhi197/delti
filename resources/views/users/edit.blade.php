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
                    <!-- end page title -->



                    <!--Requete-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"><i class=" fas fa-user-plus"></i>  Nouveau Utilisateur</h4>
                                    <hr>
                                    <br>
                                    <form method="post" action="{{route('user.update',['user'=>$user->id])}}" class="needs-validation" >
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Role</label>
                                                    <select name="role" class="form-select" id="validationCustom03" required>
                                                        <option selected disabled value="">Choisir</option>
                                                        <option>Admin</option>
                                                        <option>Assistant</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Secteur</label>
                                                    <select name="secteur" class="form-select" id="validationCustom03" required>
                                                        <option selected disabled value=""></option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Administration</label>
                                                    <select name="administration" class="form-select" id="validationCustom03" required>
                                                        <option selected disabled value=""></option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Dénomination</label>
                                                    <input name="dénomination" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                        <br>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <h6>Application User</h6>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Nom</label>
                                                    <input name="nom" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Prénom</label>
                                                    <input name="prenom" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Téléphone</label>
                                                    <input name="telephone" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Email</label>
                                                    <input name="email" type="Email" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Wilaya</label>
                                                    <select name="wilaya" class="form-select" id="validationCustom03" required>
                                                        <option selected disabled value=""></option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-6">
                                                    <label for="validationCustom05" class="form-label">Fonction</label>
                                                    <input name="fonction" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                                <br>
                                            </div>
                                            <h6>Accés au Plateforme</h6>
                                            <hr>
                                            <div class="col-md-6">
                                                <br>
                                                <div class="mb-6">
                                                    <label for="validationCustom02" class="form-label">Username</label>
                                                    <input name="email" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <div class="mb-6">
                                                    <label for="validationCustom02" class="form-label">Mot de Passe</label>
                                                    <input name="password" type="password" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div>
                                            <button class="btn btn-primary" type="submit">Ajouter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
@endsection