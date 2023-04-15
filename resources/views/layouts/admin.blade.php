
<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/upcube/layouts/layouts-hori-preloader.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 11:19:13 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Wassit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->

    <link href="{{asset('cirm/admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/toastr.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/header.min.css')}}" rel="stylesheet"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap Css -->
    <link href="{{asset('cirm/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('cirm/admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('cirm/admin/assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('cirm/admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{asset('cirm/admin/assets/css/bootstrap.min.css')}}"  rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('cirm/admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('cirm/admin/invest/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cirm/admin/invest/plugins/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cirm/admin/invest/plugins/table/datatable/custom_dt_multiple_tables.css')}}">
    <style>
        .toast-error { background-color: rgba(255,111,105,0.7) !important; }        
        .select2-results__group{
         display: hidden;   

        }


        optgroup {
            color: transparent;
            height: 0px;
            font-size: 0.1px;
        }

        optgroup option {
            font-size: 15px;
            color:black;
        }  
    </style>
</head>

<body data-topbar="dark" data-layout="horizontal">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <i class="ri-loader-line spin-icon"></i>
            </div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="{{route('admin')}}" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{asset('images/logo-sm.png')}}" alt="logo-sm" height="45">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('images/logo-sm.png')}}" alt="logo-dark" height="45">
                            </span>
                        </a>

                        <a href="header2.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{asset('images/logo-sm.png')}}" alt="logo-sm-light" height="45">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('images/logo-sm.png')}}" alt="logo-light" height="45">
                            </span>
                        </a>
                    </div> 
                    
                    <button type="button" class="btn btn-sm px-3 font-size-24 d-lg-none header-item" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>

                    <!-- App Search-->
                    <!--
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Rechercher...">
                            <span class="ri-search-line"></span>
                        </div>
                    </form>
-->

                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="mb-3 m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="ri-search-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <a href="" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="align-middle"><a href="{{route('lang',['lang'=>'fr'])}}" class="text-white"> Ar </a></span>
                        </a>
                        <a href="" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="align-middle"><a href="{{route('lang',['lang'=>'fr'])}}" class="text-white"> Fr </a></span>
                        </a>

                    </div>

                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-apps-2-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <div class="px-lg-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <i class=" fas fa-assistive-listening-systems" style="color:#C64756;font-size: 19px;"></i>
                                            <span style="color:#7d858c;font-size: 15px;">+ {{trans('main.audience')}}</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <i class="  fas fa-list-ul" style="color:#C64756;font-size: 19px;"></i>
                                            <span style="color:#7d858c;font-size: 15px;">+ Requête</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <i class=" fas fa-book" style="color:#C64756;font-size: 19px;"></i>
                                            <span style="color:#7d858c;font-size: 15px;">+ Doléance</span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="ri-fullscreen-line"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-notification-3-line"></i>
                            <span class="noti-dot"></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small"> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="#" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="ri-shopping-cart-line"></i>
                                            </span>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-1">Your order is placed</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <img src="" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-1">
                                            <h6 class="mb-1">James Lemire</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">It will seem like simplified English.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="ri-checkbox-circle-line"></i>
                                            </span>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-1">Your item is shipped</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-1">
                                            <h6 class="mb-1">Salena Layfield</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <div class="d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-xl-inline-block ms-1">Wassit</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="ri-shut-down-line align-middle me-1 text-danger"></i> Déconnexion</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>

                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="ri-settings-2-line"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>

        <div class="topnav">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle arrow-none " href="/admin " id="topnav-more " role="button ">
                                    <i class=" fas fa-home " style="color:#252b3b; font-size:19px;"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="{{route('audience.index')}}" id="topnav-apps" role="button">
                                    <i class=" fas fa-assistive-listening-systems"></i>&nbsp;Audiences
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-apps">

                                    <div class="dropdown">
                                        <a href="{{route('audience.create')}}" class="dropdown-item"><i class="   fas fa-plus-circle"></i>&nbsp; Ajouter Audience</a>
                                        <a href="{{route('audience.index')}}" class="dropdown-item">Tous les Audiences</a>
                                        <a href="{{route('audience.index.state',['state'=>4])}}" class="dropdown-item">Audiences : Orientation du
                                            citoyen</a>
                                        <a href="{{route('audience.index.state',['state'=>3])}}" class="dropdown-item">Audiences : Hors
                                            domaines de compétance</a>
                                        <a href="{{route('audience.index.state',['state'=>6])}}" class="dropdown-item">Audiences : Transferer
                                            vers Requetes</a>
                                        <a  href="{{route('audience.index.state',['state'=>7])}}" class="dropdown-item">Audiences : Transferer
                                            vers Doléances</a>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle arrow-none " href="# " id="topnav-more " role="button ">
                                    <i class=" fas fa-video "></i> &nbsp;Visio-conférences
                                    <div class="arrow-down "></div>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="{{route('requete.index')}}" id="topnav-apps " role="button ">
                                    <i class=" fas fa-list-ul "></i>&nbsp;Requêtes
                                    <div class="arrow-down "></div>
                                </a>
                                <div class="dropdown-menu " aria-labelledby="topnav-apps ">

                                    <div class="dropdown ">
                                        <a href="{{route('requete.create')}}" class="dropdown-item "><i class=" fas fa-plus-circle "></i>&nbsp;Ajouter Requête</a>
                                        <a href="{{route('requete.index')}}" class="dropdown-item ">Tous les Requêtes</a>
                                        <a href="{{route('requete.index.state',['state'=>6])}}" class="dropdown-item ">Requêtes : Nouvelles
                                            Requêtes</a>
                                        <a href="{{route('requete.index.state',['state'=>7])}}" class="dropdown-item ">Requêtes : En cours de
                                            Traitement</a>
                                        <a href="{{route('requete.index.state',['state'=>11])}}" class="dropdown-item ">Requêtes : Réponse Reçu</a>
                                        <a href="{{route('requete.index.state',['state'=>10])}}" class="dropdown-item ">Requêtes : Retirés</a>
                                        <a href="{{route('requete.index.state',['state'=>7])}}" class="dropdown-item ">Requêtes : Hors
                                            domaines de compétance</a>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle arrow-none " href="{{route( 'doleance.index')}} " id="topnav-apps " role="button ">
                                    <i class=" fas fa-book "></i>&nbsp;Doléances

                                    <div class="arrow-down "></div>
                                </a>
                                <div class="dropdown-menu " aria-labelledby="topnav-apps ">

                                    <div class="dropdown ">
                                        <a href="{{route( 'doleance.create')}} " class="dropdown-item "><i class=" fas fa-plus-circle "></i>&nbsp;Ajouter Doléance</a>
                                        <a href="{{route( 'doleance.index')}} " class="dropdown-item ">Tous les Doléances</a>

                                        <a href="{{route('requete.index.state',['state'=>1])}}" class="dropdown-item ">Doléances : Nouvelles
                                            Doléances</a>
                                        <a href="{{route('requete.index.state',['state'=>2])}}" class="dropdown-item ">Doléances : En cours de
                                            Traitement</a>
                                        <a href="{{route('requete.index.state',['state'=>3])}}" class="dropdown-item ">Doléances : Transferer
                                            vers Requetes</a>
                                        <a href="{{route('requete.index.state',['state'=>4])}}" class="dropdown-item ">Doléances : Réponse Reçu</a>
                                        <a href="#" class="dropdown-item ">Doléances : Retirés</a>
                                        <a href="{{route('requete.index.state',['state'=>5])}}" class="dropdown-item ">Doléances : Hors
                                            domaines de compétance</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle arrow-none " href="# " id="topnav-apps " role="button ">
                                    <i class=" fas fa-lightbulb "></i>&nbsp;Suggestions

                                    <div class="arrow-down "></div>
                                </a>
                                <div class="dropdown-menu " aria-labelledby="topnav-apps ">

                                    <div class="dropdown ">
                                        <a href="{{route('suggestion.show.create')}}" class="dropdown-item "><i class=" fas fa-plus-circle "></i>&nbsp;Ajouter Suggestion</a>
                                        <a href="{{route('suggestion.index')}}" class="dropdown-item ">Tous les Suggestions</a>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle arrow-none " href="# " id="topnav-more " role="button ">
                                    <i class=" fas fa-chart-bar "></i>&nbsp;Statistiques
                                    <div class="arrow-down "></div>
                                </a>
                                <div class="dropdown-menu " aria-labelledby="topnav-more ">
                                    <div class="dropdown ">
                                        <a class="dropdown-item dropdown-toggle arrow-none " href="# " id="topnav-auth " role="button "> Tableau de Bord <div class="arrow-down "></div>
                                        </a>
                                    </div>
                                    <div class="dropdown ">
                                        <a class="dropdown-item dropdown-toggle arrow-none " href="# " id="topnav-auth " role="button "> Rapports <div class="arrow-down "></div>
                                        </a>
                                        <!--
                                        <div class="dropdown-menu " aria-labelledby="topnav-auth ">
                                            <a href="auth-login.html " class="dropdown-item ">Ajouter</a>
                                            <a href="# " class="dropdown-item ">Tous les Utilisateurs de
                                                L'Application</a>
                                        </div>
                                        -->
                                    </div>

                                </div>
                            </li>

                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle arrow-none " href="# " id="topnav-more " role="button ">
                                    <i class=" fas fa-users-cog "></i>&nbsp;Roles & Utilisateurs
                                    <div class="arrow-down "></div>
                                </a>
                                <div class="dropdown-menu " aria-labelledby="topnav-more ">
                                    <div class="dropdown ">
                                        <a class="dropdown-item dropdown-toggle arrow-none " href="# " id="topnav-auth " role="button "> Administrateurs <div class="arrow-down "></div>
                                        </a>
                                        <div class="dropdown-menu " aria-labelledby="topnav-auth ">
                                            <a href="{{route('user.show.create')}}" class="dropdown-item "><i class=" fas fa-plus-circle "></i>&nbsp;Ajouter</a>
                                            <a href="#" class="dropdown-item ">Tous les
                                                Administrateurs</a>
                                        </div>
                                    </div>
                                    <div class="dropdown ">
                                        <a class="dropdown-item dropdown-toggle arrow-none " href="# " id="topnav-auth " role="button "> Utilisateurs de l'application <div class="arrow-down "></div>
                                        </a>
                                        <div class="dropdown-menu " aria-labelledby="topnav-auth ">
                                            <a href="{{route('user.show.create')}}" class="dropdown-item "><i class=" fas fa-plus-circle "></i>&nbsp;Ajouter</a>
                                            <a href="#" class="dropdown-item ">Tous les utilisateurs de l'application</a>
                                        </div>
                                    </div>
                                    <div class="dropdown ">
                                        <a class="dropdown-item dropdown-toggle arrow-none " href="# " id="topnav-auth " role="button "> Utilisateurs des administrations  <div class="arrow-down "></div>
                                        </a>
                                        <div class="dropdown-menu " aria-labelledby="topnav-auth ">
                                            <a href="{{route('user.show.create')}}" class="dropdown-item "><i class=" fas fa-plus-circle "></i>&nbsp;Ajouter</a>
                                            <a href="# " class="dropdown-item ">Tous les
                                            utilisateurs des administrations</a>
                                        </div>
                                    </div>
                                    <div class="dropdown ">
                                        <a class="dropdown-item dropdown-toggle arrow-none " href="{{route('client.index')}}" id="topnav-auth " role="button "> Suscripteurs <div class="arrow-down "></div>
                                        </a>
                                        <div class="dropdown-menu " aria-labelledby="topnav-auth ">
                                            <a href="{{route('client.show.create')}}" class="dropdown-item "><i class=" fas fa-plus-circle "></i>&nbsp;Ajouter</a>
                                            <a href="{{route('client.index')}}" class="dropdown-item ">Tous les
                                                Suscripteurs</a>
                                        </div>
                                    </div>

                                    
                                    <div class="dropdown ">
                                        <a class="dropdown-item dropdown-toggle arrow-none " href="{{route('role.index')}}" id="topnav-auth " role="button "> Rôles<div class="arrow-down "></div>
                                        </a>
                                        <div class="dropdown-menu " aria-labelledby="topnav-auth ">
                                            <a href="# " class="dropdown-item "><i class=" fas fa-plus-circle "></i>&nbsp;Ajouter</a>
                                            <a href="{{route('role.index')}}" class="dropdown-item ">Tous les
                                                Rôles</a>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle arrow-none " href="# " id="topnav-components " role="button "> <i class=" fas fa-stream "></i>&nbsp;Paramètres
                                    <div class="arrow-down "></div>
                                </a>
                                <div class="dropdown-menu " aria-labelledby="topnav-components ">
                                    <div class="dropdown ">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form" role="button "> Générale
                                            <div class="arrow-down "></div>
                                        </a>
                                        <div class="dropdown-menu " aria-labelledby="topnav-form">
                                            <a href="{{route('wilaya.index')}}" class="dropdown-item">Wilaya</a>
                                            <a href="{{route('daira.index')}}" class="dropdown-item">Daira</a>
                                            <a href="{{route('commune.index')}}" class="dropdown-item">Communes</a>
                                            <a href="{{route('secteur.index')}}" class="dropdown-item">Secteurs</a>
                                            <a href="{{route('administration.index')}}" class="dropdown-item">Administrations</a>
                                        </div>
                                    </div>
                                    <!-- TT -->
                                    <div class="dropdown ">
                                        <a class="dropdown-item dropdown-toggle arrow-none " href="# " id="topnav-form " role="button "> Audiences <div class="arrow-down "></div></a>
                                        <div class="dropdown-menu " aria-labelledby="topnav-form ">
                                            <a href="{{route('sourceaudience.index')}}" class="dropdown-item ">Source de
                                                l'Audience</a>
                                            <a href="{{route('action.index')}}" class="dropdown-item ">Action de L'Audience</a>
                                        </div>
                                    </div>
                                    <div class="dropdown ">
                                        <a class="dropdown-item dropdown-toggle arrow-none " href="# " id="topnav-form " role="button "> Requêtes <div class="arrow-down "></div>
                                        </a>
                                        <div class="dropdown-menu " aria-labelledby="topnav-form ">
                                            <a href="{{route('sourcerequete.index')}}" class="dropdown-item ">Sources de Requête</a>
                                            <a href="{{route('categorie.index',['source'=>'requete'])}}" class="dropdown-item ">Etats de Requête</a>
                                            <a href="{{route('typerequete.index')}}" class="dropdown-item ">Types de Requête</a>
                                            <a href="{{route('sujetrequete.index')}}" class="dropdown-item ">Sujets de Requête</a>
                                            <a href="{{route('axe.index')}}" class="dropdown-item ">Axes de Requête</a>
                                        </div>
                                    </div>
                                    <div class="dropdown ">
                                        <a class="dropdown-item dropdown-toggle arrow-none " href="# " id="topnav-form " role="button "> Doléances <div class="arrow-down "></div>
                                        </a>
                                        <div class="dropdown-menu " aria-labelledby="topnav-form ">
                                            <a href="{{route('categorie.index',['source'=>'doleance'])}}" class="dropdown-item ">Etats de Doléance</a>
                                            <!-- <a href="{{route('typedoleance.index')}}" class="dropdown-item ">Types de Doléance</a> -->
                                            <a href="{{route('sujetdoleance.index')}}" class="dropdown-item ">Sujets de Doléance</a>
                                            <a href="{{route('axedoleance.index')}}" class="dropdown-item ">Axes de Doléance</a>
                                        </div>
                                    </div>




                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        @yield('modals')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>

            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Wassit.dz
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar ">
        <div data-simplebar class="h-100 ">
            <div class="rightbar-title d-flex align-items-center px-3 py-4 ">

                <h5 class="m-0 me-2 ">Mode Affichage</h5>

                <a href="javascript:void(0); " class="right-bar-toggle ms-auto ">
                    <i class="mdi mdi-close noti-icon "></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0 " />
            <h6 class="text-center mb-0 ">Choisir</h6>

            <div class="p-4 ">
                <div class="mb-2 ">
                </div>

                <div class="form-check form-switch mb-3 ">
                    <input class="form-check-input theme-choice " type="checkbox " id="light-mode-switch " checked>
                    <label class="form-check-label " for="light-mode-switch ">Mode Lumineux</label>
                </div>

                <div class="mb-2 ">
                </div>
                <div class="form-check form-switch mb-3 ">
                    <input class="form-check-input theme-choice " type="checkbox " id="dark-mode-switch " data-bsStyle="assets/css/bootstrap-dark.min.css " data-appStyle="assets/css/app el class=" form-check-label " for=" dark-mode-switch ">Mode
                                        Sombre
                                        </label>
                                    </div>



                                </div>

                    </div>
                    <!-- end slimscroll-menu-->
            </div>
            <!-- /Right-bar -->

            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>
            <script src="{{asset('cirm/admin/assets/libs/jquery/jquery.min.js')}}"></script>
            <script src="{{asset('cirm/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('cirm/admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
            <script src="{{asset('cirm/admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
            <script src="{{asset('cirm/admin/assets/libs/node-waves/waves.min.js')}}"></script>


<!-- apexcharts -->

<!-- jquery.vectormap map -->
<script src="{{asset('cirm/admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('cirm/admin/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>

<!-- Required datatable js -->
<script src="{{asset('cirm/admin/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('cirm/admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{asset('cirm/admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('cirm/admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<script src="{{asset('cirm/admin/assets/js/pages/dashboard.init.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- App js -->
<!-- <script src="{{asset('cirm2/plugins/table/datatable/datatables.js')}}"></script> -->
<script src="{{asset('cirm2/plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('cirm2/plugins/table/datatable/button-ext/jszip.min.js')}}"></script>    
<script src="{{asset('cirm2/plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
<script src="{{asset('cirm2/plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>
<script src="{{asset('cirm/admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

<script src="{{asset('public/js/dataTables.fixedHeader.min.js')}}"></script>	


<script>
    $(document).ready(function() {
    $('#scroll-vertical-datatable thead tr')
            .clone(true)
            .addClass('filters')
            .appendTo('#scroll-vertical-datatable thead');            
        $('#scroll-vertical-datatable').DataTable( {
        "dom": "<'dt--top-section'<'row'<'col-xl-12 col-md-12 d-flex 'B><'col-sm-12 col-md-12 d-flex justify-content-md-end      mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",        
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-primary' },
                    { extend: 'csv', className: 'btn btn-primary' },
                    { extend: 'excel', className: 'btn btn-primary' },
                    { extend: 'print', className: 'btn btn-primary' },
                    { extend: 'colvis', className: 'btn btn-primary' }
                ]
            },
            fixedHeader: true,
            initComplete: function () {
                var api = this.api();
                api
                    .columns()
                    .eq(0)
                    .each(function (colIdx) {
                        // Set the header cell to contain the input element
                        var cell = $('.filters th').eq(
                            $(api.column(colIdx).header()).index()
                        );
                        var title = $(cell).text();
                        $(cell).html('<input type="text" placeholder="' + title + '" />');
    
                        // On every keypress in this input
                        $(
                            'input',
                            $('.filters th').eq($(api.column(colIdx).header()).index())
                        )
                            .off('keyup change')
                            .on('change', function (e) {
                                // Get the search value
                                $(this).attr('title', $(this).val());
                                var regexr = '({search})'; //$(this).parents('th').find('select').val();
    
                                var cursorPosition = this.selectionStart;
                                // Search the column for that value
                                api
                                    .column(colIdx)
                                    .search(
                                        this.value != ''
                                            ? regexr.replace('{search}', '(((' + this.value + ')))')
                                            : '',
                                        this.value != '',
                                        this.value == ''
                                    )
                                    .draw();
                            })
                            .on('keyup', function (e) {
                                e.stopPropagation();
    
                                $(this).trigger('change');
                                $(this)
                                    .focus()[0]
                                    .setSelectionRange();
                            });
                    });
            },

            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Total : _TOTAL_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
                "infoEmpty": "No records available",

            },
            "columnDefs": [
                { "width": "20%", "targets": 0 }
            ],
            "responsive": {
                details: {
                    type: 'column',
                }
            },

            "stripeClasses": [],
            "order": [[ 0, 'asc' ]],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 10
        } );



        

    });
</script>
<script src="{{asset('cirm/admin/assets/js/app.js')}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>	
<script>
    @if(session('error'))
        $(function(){
            toastr.error('{{Session::get("error")}}')
        })

    @endif
    @if(session('success'))
        toastr.success('{{Session::get("success")}}')
    @endif
        

</script>

@yield('scripts')
<script>
    $(document).ready(function() {
        // $('select2').select2();
        $('.select2').select2({
            'width':'90%'
        });
    });
</script>

</body>


</html>