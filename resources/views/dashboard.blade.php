@extends('layouts.client')

@section('content')

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <!--
                                <h4 class="mb-sm-0">Acceuil</h4>
 
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
-->
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h3 class="mb-sm-0">Bienvenue {{Auth::guard('client')->user()->nom ?? Auth::guard('client')->user()->name}}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card" style="background-color: #e30613; color: #fff; box-shadow: 0px -2px 31px -6px rgba(227,6,19,0.82);
                                -webkit-box-shadow: 0px -2px 31px -6px rgba(227,6,19,0.82);
                                -moz-box-shadow: 0px -2px 31px -6px rgba(227,6,19,0.82);">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2"></p>
                                            <h4 class="mb-2" style="color: #fff;">Commencer Compteur</h4>
                                            <p class="text-muted mb-0" style="color: #fff;"><span
                                                    class=" fw-bold font-size-12 me-2" style="color: #fff;">Vous avez
                                                    épuisé toutes les voies de recours, et vous estimez avoir été
                                                    victime d'un vice de gestion d'un service public</p>
                                        </div>
                                        <div class="avatar-sm">
                                            <a href="{{route('count')}}">
                                            <span class="avatar-title bg-light text-primary rounded-3">
                                                <i class="mdi mdi-pencil-plus font-size-24" ></i>
                                            </span>
                                        </a>
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-md-6">
                            <div class="card" style="background-color: #009640; color: #fff; box-shadow: 0px -2px 31px -6px rgba(0,150,64,0.82);
                                -webkit-box-shadow: 0px -2px 31px -6px rgba(0,150,64,0.82);
                                -moz-box-shadow: 0px -2px 31px -6px rgba(0,150,64,0.82);">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2"></p>
                                            <h4 class="mb-2" style="color: #fff;">Historique</h4>
                                            <p class="text-muted mb-0" style="color: #fff;"><span
                                                    class=" fw-bold font-size-12 me-2" style="color: #fff;">Vous vous
                                                    êtes rendu dans une administration ou un organisme public et avez
                                                    constaté<br> des manquements dans l'accueil,
                                                    l'orientation, le traitement ou d'autres manquements,<br></p>
                                        </div>
                                        <div class="avatar-sm">
                                            <a href="{{route('doleance.index.client')}}">
                                            <span class="avatar-title bg-light text-success rounded-3">
                                                <i class="mdi mdi-pencil-plus font-size-24"  style="color: #252b3b"></i>
                                            </span>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    <div class="row">

                    </div>

@endsection