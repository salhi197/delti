<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dalti</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('client/assets/images/wassit.png')); ?>">

    <!-- jquery.vectormap css -->
    <link href="<?php echo e(asset('client/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')); ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(asset('css/toastr.css')); ?>" rel="stylesheet"/>

    <!-- DataTables -->
    <link href="<?php echo e(asset('client/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo e(asset('client/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet"
        type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <!-- Bootstrap Css -->
    <link href="<?php echo e(asset('client/assets/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo e(asset('client/assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo e(asset('client/assets/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />
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
    <?php echo $__env->yieldContent('styles'); ?>
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
                                <img src="<?php echo e(asset('client/assets/images/ra.png')); ?>" alt="logo-sm" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="<?php echo e(asset('client/assets/images/ra.png')); ?>" alt="logo-dark" height="20">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <!-- <span class="logo-sm">
                                <img src="<?php echo e(asset('client/assets/images/ra.png')); ?>" alt="logo-sm-light" height="22">
                            </span>
                            <span class="logo-lg">
                                <div class="head"></div>
                                <img src="<?php echo e(asset('client/assets/images/ra.png')); ?>" alt="logo-light" height="50">
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
                            <a class="dropdown-item" href="<?php echo e(route('dashboard')); ?>"><i class="ri-user-line align-middle me-1"></i> Acceuil</a>
                            <a class="dropdown-item" href="<?php echo e(route('client.profile')); ?>"><i class="fa fa-list"></i> Mot de passe</a>
                            <a class="dropdown-item text-danger" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="ri-shut-down-line align-middle me-1 text-danger"></i> Déconnexion</a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

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
                <?php echo $__env->yieldContent('content'); ?>
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
    <script src="<?php echo e(asset('client/assets/libs/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('client/assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('client/assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('client/assets/libs/simplebar/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('client/assets/libs/node-waves/waves.min.js')); ?>"></script>

    <!-- apexcharts -->

    <!-- jquery.vectormap map -->
    <script src="<?php echo e(asset('client/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('client/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')); ?>"></script>

    <!-- Required datatable js -->
    <script src="<?php echo e(asset('client/assets/libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('client/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>

    <!-- Responsive examples -->
    <script src="<?php echo e(asset('client/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('client/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')); ?>"></script>

    <script src="<?php echo e(asset('client/assets/js/pages/dashboard.init.js')); ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="<?php echo e(asset('client/assets/js/app.js')); ?>"></script>
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
            


		$(document).ready(function(){



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

            
            "order": [[ 0, 'asc' ]],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 10
        } );
            let client = <?php echo Auth::guard('client')->user()->id ?? ''; ?>;
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
                toastr.success('Fait !')

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
                toastr.success('Fait !')

    				if ($('.count').html() == 0) {
						$('.count').val(1);
					}
    	    	});
 		});

    </script>

    <?php echo $__env->yieldContent('scripts'); ?>
    <script>

    function myFunction() {
      // Get the text field
      var copyText = document.getElementById("myInput");

      // Select the text field
      copyText.select();
      copyText.setSelectionRange(0, 99999); // For mobile devices

      // Copy the text inside the text field
      navigator.clipboard.writeText(copyText.value);
      
      // Alert the copied text
        toastr.success('Lien Copié ')
    }
        $(document).ready(function() {
            // $('select2').select2();
            $('.select2').select2({
                'width':'90%'
            });
        });
    </script>

</body>

</html>