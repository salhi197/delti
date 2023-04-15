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



                    <!--User-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"><i class=" fas fa-user-plus"></i>  Nouveau Utilisateur</h4>
                                    <hr>
                                    <br>
                                    <form method="post" action="{{route('user.create')}}" class="needs-validation" novalidate>
                                        @csrf
                                        <h6>Information Utilisateur</h6>
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
                                                    <label for="validationCustom05" class="form-label">Role</label>
                                                    <select name="role" class="form-select" >
                                                        <option selected value="">Séléctionner .. </option>
                                                            @foreach($roles as $role)
                                                                <option value="{{$role->id}}">{{$role->nom_role ?? ''}}</option>
                                                            @endforeach


                                                    </select>

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
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Wilaya</label>
                                                    <select name="wilaya" class="form-control select2" id="validationCustom03" required>
                                                        <option selected  value=""></option>
                                                        @foreach($wilayas as $wilaya)
                                                            <option value="{{$wilaya->id}}">
                                                                {{$wilaya->name ?? ''}}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <br>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                            </div>
                                            <h6>Accés au Plateforme</h6>
                                            <hr>
                                            <div class="col-md-6">
                                                <br>
                                                <div class="mb-6">
                                                    <label for="validationCustom02" class="form-label">Username</label>
                                                    <input name="username" type="text" class="form-control" id="validationCustom05"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <div class="mb-6">
                                                    <label for="validationCustom02" class="form-label">Mot de Passe</label>
                                                    <input type="password" name="password" class="form-control" id="validationCustom05"
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
                    <!-- Fin User -->


                </div>

@endsection