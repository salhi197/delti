<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dalti</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('client/assets/images/wassit.png')}}">

    <!-- jquery.vectormap css -->
    <link href="{{asset('client/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('css/toastr.css')}}" rel="stylesheet"/>

    <!-- DataTables -->
    <link href="{{asset('client/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{asset('client/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet"
        type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <!-- Bootstrap Css -->
    <link href="{{asset('client/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('client/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('client/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        .toast-error { background-color: rgba(255,111,105,0.7) !important; }        
        .select2-results__group{
         display: hidden;   

        }
        .qty .count {
    color: #000;
    display: inline-block;
    vertical-align: top;
    font-size: 60px;
    font-weight: 700;
    line-height: 40px;
    padding: 0 5px;
    min-width: 35px;
    text-align: center;
}
.qty .plus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 50px;
    height: 50px;
    font: 50px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    }
    .compteur{
        cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 100px;
    height: 100px;
    font: 50px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    background-clip: padding-box;
}
.qty .minus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 50px;
    height: 50px;
    font: 50px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    background-clip: padding-box;
}
div {
    text-align: center;
}
.minus:hover{
    background-color: #717fe0 !important;
}
.plus:hover{
    background-color: #717fe0 !important;
}
/*Prevent text selection*/
span{
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}
input{  
    border: 0;
    width: 10%;
}
nput::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input:disabled{
    background-color:white;
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

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{asset('client/assets/images/ra.png')}}" alt="logo-sm" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('client/assets/images/ra.png')}}" alt="logo-dark" height="20">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <!-- <span class="logo-sm">
                                <img src="{{asset('client/assets/images/ra.png')}}" alt="logo-sm-light" height="22">
                            </span>
                            <span class="logo-lg">
                                <div class="head"></div>
                                <img src="{{asset('client/assets/images/ra.png')}}" alt="logo-light" height="50">
                            </span> -->
                        </a>
                    </div>


                    <!-- App Search-->

                    <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                        <a href="/dashboard">Acceuil</a>
                    </div>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="mb-3 m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <div class="input-group-append">
                                            <a href="/dashboard">Acceuil</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="align-middle">Fr</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <span class="align-middle">Ar</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <span class="align-middle">En</span>
                            </a>

                            <!-- item-->

                        </div>
                    </div>
                    <!--
                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ri-apps-2-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <div class="px-lg-2">
                                <div class="row g-0">

                                </div>
                            </div>
                        </div>
                    </div>
-->
                    <div class="dropdown d-none d-lg-inline-block ms-1">

                    </div>

                    <div class="dropdown d-inline-block">

                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex">


                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>


                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class=" fas fa-house-user"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="{{route('dashboard')}}"><i class="ri-user-line align-middle me-1"></i> Acceuil</a>
                            <a class="dropdown-item" href="{{route('client.profile')}}"><i class="fa fa-list"></i> Mot de passe</a>
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





                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <!-- end page title -->
                @yield('content')
                </div><!-- end row -->


                <!-- end row -->


                <!-- end row -->
            </div>

        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> ©     
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />

            

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('client/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('client/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('client/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('client/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('client/assets/libs/node-waves/waves.min.js')}}"></script>

    <!-- apexcharts -->

    <!-- jquery.vectormap map -->
    <script src="{{asset('client/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('client/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>

    <!-- Required datatable js -->
    <script src="{{asset('client/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('client/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Responsive examples -->
    <script src="{{asset('client/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('client/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    <script src="{{asset('client/assets/js/pages/dashboard.init.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{asset('client/assets/js/app.js')}}"></script>
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
            
		$(document).ready(function(){
            let client = {!! Auth::guard('client')->user()->id ?? '' !!};
		    $('.count').prop('disabled', true);
   			$(document).on('click','.plus',function(){
            fetch('/clients/plus/'+client, {
                method: 'get', 
                headers: {
                'Accept': 'application/json, text/plain, */*',
                'Content-Type': 'application/json'
                },
            }).then(res => res.json())
                .then(res => {
                    console.log(res);
                })
                .catch(err=>function (err) {
                    console.log("err.message")
                });

				$('.count').html(parseInt($('.count').html()) + 1 );
                toastr.success('Done !')

    		});
        	$(document).on('click','.minus',function(){
                fetch('/clients/minus/'+client, {
                method: 'get', 
                headers: {
                'Accept': 'application/json, text/plain, */*',
                'Content-Type': 'application/json'
                },
            }).then(res => res.json())
                .then(res => {
                console.log(res);
                })
                .catch(err=>function (err) {
                console.log("err.message")
                });

    			$('.count').html(parseInt($('.count').html()) - 1 );
                toastr.success('Done !')

    				if ($('.count').html() == 0) {
						$('.count').val(1);
					}
    	    	});
 		});

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