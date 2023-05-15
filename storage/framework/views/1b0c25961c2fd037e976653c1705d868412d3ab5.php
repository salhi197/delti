
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Deltti</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->

    <!-- Bootstrap Css -->
    <link href="<?php echo e(asset('cirm/admin/assets/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo e(asset('cirm/admin/assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo e(asset('cirm/admin/assets/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
    <div class="bg-light"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">

                    <div class="text-center mt-4">
                        <div class="mb-3">
                        </div>
                    </div>

                    <h4 class="text-muted text-center font-size-18"><b>Connexion</b></h4>

                    <div class="p-3">
                        <form  action="<?php echo e(route('login.admin')); ?>" method="POST"  style="padding: 10px" >
                            <?php echo csrf_field(); ?>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control" type="text" name="email" required="" placeholder="Email ou Nom d'utilisateur">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control" type="password" name="password" required="" placeholder="Mot de passe">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="form-label ms-1" for="customCheck1">Souvenir de moi</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3 text-center row mt-3 pt-1">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Connexion</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end -->
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->

    <!-- JAVASCRIPT -->
    <script src="<?php echo e(asset('cirm/admin/assets/libs/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/simplebar/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('cirm/admin/assets/libs/node-waves/waves.min.js')); ?>"></script>

    <script src="<?php echo e(asset('cirm/admin/assets/js/app.js')); ?>"></script>

</body>

</html>