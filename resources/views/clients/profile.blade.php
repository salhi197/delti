@extends('layouts.client')


@section('content')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Mon Profile</h4>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation" action="{{route('client.profile.update')}}">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">Prénom *</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder="" required>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Nom *</label>
                                                    <input type="text" class="form-control" id="validationCustom02"
                                                        placeholder="" required>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">N°Téléphone
                                                        *</label>
                                                    <input type="number" class="form-control" id="validationCustom01"
                                                        placeholder="" required>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">Email *</label>
                                                    <input type="email" class="form-control" id="validationCustom02"
                                                        placeholder="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">2eme N°Téléphone
                                                        *</label>
                                                    <input type="number" class="form-control" id="validationCustom01"
                                                        placeholder="" required>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="validationCustom02" class="form-label">2eme Email
                                                        *</label>
                                                    <input type="email" class="form-control" id="validationCustom02"
                                                        placeholder="" required>
                                                </div>
                                            </div>
                                        </div>



                                        <div>
                                            <button class="btn btn-primary" type="submit">Sauvegarder</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>

@endsection


@section('scripts')

@endsection