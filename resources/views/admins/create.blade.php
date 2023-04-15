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
                                    <h4 class="card-title"><i class=" fas fa-user-plus"></i>  Nouveau Administrateur</h4>
                                    <hr>
                                    <br>
                                    <form class="needs-validation" novalidate>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Position</label>
                                                    <input name="nom_role" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Secteur</label>
                                                    <select name="wilaya" class="form-control select2" id="validationCustom03" required>
                                                        <option selected disabled value=""></option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Administration</label>
                                                    <select name="daira" class="form-control select2" id="validationCustom03" required>
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
                                                    <input name="nom_utilisateur" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Prénom</label>
                                                    <input name="nom_utilisateur" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Téléphone</label>
                                                    <input name="telephone_utilisateur" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom05" class="form-label">Email</label>
                                                    <input name="email_utilisateur" type="Email" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Wilaya</label>
                                                    <select name="wilaya" class="form-control select2" id="validationCustom03" required>
                                                        <option selected disabled value=""></option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-6">
                                                    <label for="validationCustom05" class="form-label">Fonction</label>
                                                    <input name="fonction_utilisateur" type="text" class="form-control" id="validationCustom05"
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
                                                    <input name="fonction_utilisateur" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <div class="mb-6">
                                                    <label for="validationCustom02" class="form-label">Mot de Passe</label>
                                                    <input name="fonction_utilisateur" type="password" class="form-control" id="validationCustom05"
                                                        required>
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
                    <!-- Fin Requete -->

                    <!--Privillege-->
                    <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title"><i class="  fas fa-allergies"></i>  Privilleges</h4>
                                                        <hr>
                                                        <br>
                                                        <form class="needs-validation" novalidate>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-12">Citoyen</h5>
                                                                        <div class="form-check mb-12">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                            <label class="form-check-label" for="formCheck1">
                                                                                Créer
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                                                            <label class="form-check-label" for="formCheck2">
                                                                                Lire
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-12">Audience</h5>
                                                                        <div class="form-check mb-12">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                            <label class="form-check-label" for="formCheck1">
                                                                                Créer
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                                                            <label class="form-check-label" for="formCheck2">
                                                                                Lire
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-12">Suggestion</h5>
                                                                        <div class="form-check mb-12">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                            <label class="form-check-label" for="formCheck1">
                                                                                Créer
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                                                            <label class="form-check-label" for="formCheck2">
                                                                                Lire
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-12">Requete</h5>
                                                                        <div class="form-check mb-12">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                            <label class="form-check-label" for="formCheck1">
                                                                                Créer
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                                                            <label class="form-check-label" for="formCheck2">
                                                                                Lire
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <br>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-12">Rapport</h5>
                                                                        <div class="form-check mb-12">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                            <label class="form-check-label" for="formCheck1">
                                                                                Créer
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                                                            <label class="form-check-label" for="formCheck2">
                                                                                Lire
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <br>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-12">Tableau de Bord</h5>
                                                                        <div class="form-check mb-12">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                            <label class="form-check-label" for="formCheck1">
                                                                                Créer
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                                                            <label class="form-check-label" for="formCheck2">
                                                                                Lire
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <br>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-12">Courrier Citoyen</h5>
                                                                        <div class="form-check mb-12">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                            <label class="form-check-label" for="formCheck1">
                                                                                Créer
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                                                            <label class="form-check-label" for="formCheck2">
                                                                                Lire
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <br>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-12">Courrier Médiateur</h5>
                                                                        <div class="form-check mb-12">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                            <label class="form-check-label" for="formCheck1">
                                                                                Créer
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                                                            <label class="form-check-label" for="formCheck2">
                                                                                Lire
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <br>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-12">Courrier Secteur</h5>
                                                                        <div class="form-check mb-12">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                            <label class="form-check-label" for="formCheck1">
                                                                                Créer
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                                                            <label class="form-check-label" for="formCheck2">
                                                                                Lire
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <br>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-12">Attributions</h5>
                                                                        <div class="form-check mb-12">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                            <label class="form-check-label" for="formCheck1">
                                                                                Créer
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                                                            <label class="form-check-label" for="formCheck2">
                                                                                Lire
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <br>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-12">Transfert</h5>
                                                                        <div class="form-check mb-12">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                            <label class="form-check-label" for="formCheck1">
                                                                                Créer
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                                                            <label class="form-check-label" for="formCheck2">
                                                                                Lire
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <br>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-12">Affectation Externe</h5>
                                                                        <div class="form-check mb-12">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                                            <label class="form-check-label" for="formCheck1">
                                                                                Créer
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="formCheck2">
                                                                            <label class="form-check-label" for="formCheck2">
                                                                                Lire
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <br>
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




@endsection



