@extends('layouts.client')
@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Déposer une requête</h4>


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
                                        <form action="{{route('reclamation.store')}}" method="post">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="validationCustom03" class="form-label">Wilaya
                                                            *</label>
                                                        <select name="wilaya" class="form-select" id="validationCustom03" required>
                                                        <option value="" > -- Séléctionner-- </option>

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
                                                        <label for="validationCustom03" class="form-label">Daira*</label>
                                                        <select name="daira" class="form-select" id="validationCustom03" required>
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
                                                        <label for="validationCustom04" class="form-label">Commune
                                                            *</label>
                                                        <select name="commune" class="form-select" id="validationCustom03" required>
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
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Type de
                                                            requête *
                                                        </label>
                                                        <select name="type_requete" class="form-select"
                                                            id="validationCustom03" required>
                                                            <option value="">Sélectionner...
                                                            </option>
                                                            <option>...</option>
                                                        </select>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Secteur ou
                                                            entité concernée par la requête *

                                                        </label>
                                                        <select name="secteur" class="form-select"
                                                            id="validationCustom03" required>
                                                            <option value="">Sélectionner...
                                                            </option>
                                                            <option>...</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Organisme
                                                            concernée par la requête *

                                                        </label>
                                                        <select name="administration" class="form-select"
                                                            id="validationCustom03" required>
                                                            <option value="">Sélectionner...
                                                            </option>
                                                            <option>...</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01"
                                                            class="form-label">Administration concernée
                                                        </label>
                                                        <select name="sous_administration" class="form-select"
                                                            id="validationCustom03">
                                                            <option value="">Sélectionner...
                                                            </option>
                                                            <option>...</option>
                                                        </select>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Sujet de la
                                                            requête *

                                                        </label>
                                                        <select name="suhet_requete" class="form-select"
                                                            id="validationCustom03">
                                                            <option value="">Sélectionner...
                                                            </option>
                                                            <option>...</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Objet de la
                                                            requête *
                                                        </label>
                                                        <input name="titre_requete" type="email" class="form-control"
                                                            id="validationCustom01" placeholder="" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Contenu de la
                                                            requête *</label>
                                                        <textarea class="form-control"
                                                            name="contenu_requete"></textarea>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Lien vidéo
                                                        </label>
                                                        <input name="video" type="email" class="form-control"
                                                            id="validationCustom01" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Fichier
                                                            attaché

                                                        </label>
                                                        <input name="fichier" type="file" class="form-control"
                                                            id="customFile" />

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