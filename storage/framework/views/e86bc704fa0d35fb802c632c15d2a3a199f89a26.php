
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Wassit , Portail électronique des requêtes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('cirm/admin/assets/images/wassit.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- jquery.vectormap css -->
    <link href="<?php echo e(asset('cirm/admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/toastr.css')); ?>" rel="stylesheet"/>

    <!-- DataTables -->
    <link href="<?php echo e(asset('cirm/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo e(asset('cirm/admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?php echo e(asset('cirm/admin/assets/css/bootstrap.min.css')); ?>"  rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo e(asset('cirm/admin/assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo e(asset('cirm/admin/assets/css/app.min.css')); ?>"  rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark"></a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                    <img src="<?php echo e(asset('cirm/admin/assets/images/logo-sm.png')); ?>" alt="logo-sm-light" height="22">
                                </span>
                            <span class="logo-lg">
                                    <img src="<?php echo e(asset('cirm/admin/assets/images/logo-light.png')); ?>" alt="logo-light" height="20">
                                </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Recherche...">
                            <span class="ri-search-line"></span>
                        </div>
                    </form>
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
                                            <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="" src="<?php echo e(asset('cirm/admin/assets/images/flags/french.jpg')); ?>" alt="Header Language" height="16">
                            </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="<?php echo e(asset('cirm/admin/assets/images/flags/arabic.png')); ?>" alt="user-image" class="me-1" height="12"> <span class="align-middle">العربية</span>
                            </a>

                        </div>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-apps-2-line"></i>
                            </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <div class="px-lg-2">
                                <h6>+ Ajouter</h6>
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="<?php echo e(route('requete.index')); ?>">
                                            <img src="<?php echo e(asset('cirm/admin/assets/images/brands/requete.png')); ?>" alt="requete">
                                            <span>Requete</spani>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="suggestion.html">
                                            <img src="<?php echo e(asset('cirm/admin/assets/images/brands/suggestion.png')); ?>" alt="suggestion">
                                            <span>Suggestion</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="<?php echo e(route('user.index')); ?>">
                                            <img src="<?php echo e(asset('cirm/admin/assets/images/brands/citoyen.png')); ?>" alt="citoyen">
                                            <span>Utilisateur</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="calendar.html">
                                            <img src="<?php echo e(asset('cirm/admin/assets/images/brands/calendar.png')); ?>" alt="text_juridique">
                                            <span>Calendrier</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="plaint.html">
                                            <img src="<?php echo e(asset('cirm/admin/assets/images/brands/plaint.png')); ?>" alt="Paramètres">
                                            <span>Plainte</span>
                                        </a>
                                    </div>
                                    <!--
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="<?php echo e(asset('cirm/admin/assets/images/brands/slack.png')); ?>" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                    -->
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
                                        <a href="#!" class="small"> Voir tous</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
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

                            </div>
                            <div class="p-2 border-top">
                                <div class="d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> Voir plus..
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?php echo e(asset('cirm/admin/assets/images/wassit.png')); ?>"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1"></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                            <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1"></span><i class="ri-settings-2-line align-middle me-1"></i>Paramètres  </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Déconnexion</a>
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

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!-- User details -->
                <div class="user-profile text-center mt-3">
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Principales</li>

                        <li>
                            <a href="<?php echo e(route('admin')); ?>" class="waves-effect">
                                <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                                <span>Tableau de Bord</span>
                            </a>
                        </li>


                        <li>
                            <a href="<?php echo e(route('audience.index')); ?>" class="waves-effect">
                                <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                                <span>Audience</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fas fa-file-signature"></i>
                                <span>Requêtes</span>
                            </a>
                            
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo e(route('requete.index')); ?>"> - Requêtes</a></li>
                                <li><a href="<?php echo e(route('requete.new')); ?>"> - Nouveaux Requetes</a></li>
                                <li><a href="#"> - Requetes Transférés</a></li>
                                <li><a href="#"> - Requetes Rejétés</a></li>
                                <li><a href="#"> - Requetes Annulées</a></li>
                                <li><a href="#"> - Requetes Fermés</a></li>
                                <li><a href="#"> - Hors domaine de compétance</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fas fa-file-signature"></i>
                                <span> Dolénaces </span>
                            </a>                            
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo e(route('requete.index')); ?>"> - Requêtes</a></li>
                                <li><a href="<?php echo e(route('requete.new')); ?>"> - Nouveaux Requetes</a></li>
                                <li><a href="#"> - Requetes Transférés</a></li>
                                <li><a href="#"> - Requetes Rejétés</a></li>
                                <li><a href="#"> - Requetes Annulées</a></li>
                                <li><a href="#"> - Requetes Fermés</a></li>
                                <li><a href="#"> - Hors domaine de compétance</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="#" class=" waves-effect">
                                <i class=" fas fa-lightbulb"></i>
                                <span>Suggestions</span>
                            </a>
                        </li>
                        <li>
                            <a href="plaint.html" class=" waves-effect">
                                <i class=" fas fa-bars"></i>
                                <span>Plaintes</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('calendar')); ?>" class=" waves-effect">
                                <i class=" fas fa-calendar-alt"></i>
                                <span>Calendrier</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('role.index')); ?>" class=" waves-effect">
                                <i class=" fas fa-list"></i>
                                <span>Role</span>
                            </a>
                        </li>

                        <li class="menu-title">Outils</li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fas fa-list"></i>
                                <span>Utilisateurs</span>
                            </a>
                            
                            <ul class="sub-menu" aria-expanded="false">
                                <!-- <li><a href="<?php echo e(route('client.show.create',['type'=>'citoyen'])); ?>">Ajouter Citoyen</a></li>
                                <li><a href="<?php echo e(route('client.show.create',['type'=>'association'])); ?>">Ajouter Association</a></li>
                                <li><a href="<?php echo e(route('client.show.create',['type'=>'econimic'])); ?>">Ajouter Econimic</a></li> -->
                                <li><a href="<?php echo e(route('user.show.create')); ?>">Utilisateurs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class=" fas fa-asterisk"></i>
                                <span>Paramètres</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo e(route('wilaya.index')); ?>">- Wilayas</a></li>
                                <li><a href="<?php echo e(route('daira.index')); ?>">- Dairas</a></li> 
                                <li><a href="<?php echo e(route('commune.index')); ?>">- Communes</a></li> 
                                <li><a href="<?php echo e(route('secteur.index')); ?>">- Secteurs</a></li>
                                <li><a href="<?php echo e(route('administration.index')); ?>">- Administrations</a></li>
                                <li><a href="<?php echo e(route('typerequete.index')); ?>">- Types de Requetes</a></li>
                                <li><a href="<?php echo e(route('sourcerequete.index')); ?>">- Sources de Requêtes</a></li>
                                <li><a href="<?php echo e(route('sujetrequete.index')); ?>">- Sujets de Requêtes</a></li>
                                <li><a href="<?php echo e(route('etatrequete.index')); ?>">- Etats de Requetes</a></li>
                                <li><a href="<?php echo e(route('categorie.index')); ?>">- Categories</a></li>
                                <li><a href="<?php echo e(route('souscategorie.index')); ?>">- Sous Categories</a></li>
                                <li><a href="<?php echo e(route('axe.index')); ?>">- Axe </a></li>
                            </ul>
                        </li>
                        <li class="menu-title">Déconnexion</li>
                        <li>
                        <a href="#"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                href="<?php echo e(route('logout')); ?>" 
                            >
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>                            

                           <i class="fas fa-sign-out-alt"></i>
                                <span>Quitter</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <?php echo $__env->yieldContent('content'); ?>
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
    <?php echo $__env->yieldContent('modals'); ?>

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Affichage</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choisir Disposition</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="<?php echo e(asset('cirm/admin/assets/images/layouts/layout-1.jpg')); ?>" class="img-fluid img-thumbnail" alt="layout-1">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Mode Lumineux</label>
                </div>

                <div class="mb-2">
                    <img src="<?php echo e(asset('cirm/admin/assets/images/layouts/layout-2.jpg')); ?>" class="img-fluid img-thumbnail" alt="layout-2">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="<?php echo e(asset('cirm/admin/assets/css/bootstrap-dark.min.css')); ?>" data-appStyle="<?php echo e(asset('cirm/admin/assets/css/app-dark.min.css')); ?>">
                    <label class="form-check-label" for="dark-mode-switch">Mode Sombre</label>
                </div>
                <!--
                <div class="mb-2">
                    <img src="<?php echo e(asset('cirm/admin/assets/images/layouts/layout-3.jpg')); ?>" class="img-fluid img-thumbnail" alt="layout-3">
                </div>
                
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="<?php echo e(asset('cirm/admin/assets/css/app-rtl.min.css')); ?>">
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>
                -->

            </div>

        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="<?php echo e(asset('cirm/admin/assets/libs/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/simplebar/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/node-waves/waves.min.js')); ?>"></script>


    <!-- apexcharts -->

    <!-- jquery.vectormap map -->
    <script src="<?php echo e(asset('cirm/admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')); ?>"></script>

    <!-- Required datatable js -->
    <script src="<?php echo e(asset('cirm/admin/assets/libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>

    <!-- Responsive examples -->
    <script src="<?php echo e(asset('cirm/admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')); ?>"></script>

    <script src="<?php echo e(asset('cirm/admin/assets/js/pages/dashboard.init.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- App js -->
    <script src="<?php echo e(asset('cirm/admin/assets/js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>	
    <script>
        <?php if(session('error')): ?>
        	$(function(){
                toastr.error('<?php echo e(Session::get("error")); ?>')
            })

        <?php endif; ?>
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(Session::get("success")); ?>')
        <?php endif; ?>
            

    </script>

    <?php echo $__env->yieldContent('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('select .form-control').select2();
            $('.select2').select2();
        });
    </script>
</body>

</html>