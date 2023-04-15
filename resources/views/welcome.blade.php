<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Wassit</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('wassit/img/core-img/favicon.png')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('wassit/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('wassit/style.css')}}">

    <!-- Responsive CSS -->
    <link href="{{asset('wassit/css/responsive.css')}}" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="showbox">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
        <div class="questions-area text-center">
            <p>Portail électronique des requêtes et doléance</p>
            <ul>

            </ul>
        </div>
    </div>

    <!-- Gradient Background Overlay -->
    <div class="gradient-background-overlay"></div>

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <a class="navbar-brand" href="index.html"><img src="{{asset('wassit/img/core-img/logo1.png')}}" alt="Logo"
                                    height="50px" width="380px"></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#studioMenu" aria-controls="studioMenu" aria-expanded="false"
                                aria-label="Toggle navigation"><i class="fa fa-bars"></i> </button>

                            <div class="collapse navbar-collapse" id="studioMenu">
                                <!-- Menu Area Start  -->
                                <ul class="navbar-nav ml-auto">

                                    <li class="nav-item">
                                        <a class="nav-link" href="/login">Requetes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/login">Doléances</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/login">Suggestions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/login/client">Connexion</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('inscription')}}"
                                            style="background-color: #e30613;padding: 10px 5x 5px 10px; border-radius: 10px;">
                                            <i class="fa fa-user" aria-hidden="true"></i>

                                            Créer
                                            un compte</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Langues</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="blog.html">عربي</a>
                                            <a class="dropdown-item" href="elements.html">English</a>
                                            <a class="dropdown-item" href="contact.html">Français</a>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Search Form
                                <div class="header-search-form ml-auto">
                                    <form action="#">
                                        <input type="search" class="form-control"
                                            placeholder="Input your keyword then press enter..." id="search"
                                            name="search">
                                        <input class="d-none" type="submit" value="submit">
                                    </form>
                                </div>
                                Search btn
                                <div id="searchbtn">
                                    <img src="{{asset('wassit/img/core-img/search.png')}}" alt="">
                                </div>
                                -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Social Sidebar Area Start -->
    <div class="social-sidebar-area bg-white">
        <!-- Social Area -->
        <div class="social-info-area">
            <a href="https://www.facebook.com/profile.php?id=100068285695134" data-toggle="tooltip"
                data-placement="right" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i>
                <span>Facebook</span></a>
            <a href="https://www.youtube.com/channel/UCtlezrH9BWjf5ZXjere72AA" data-toggle="tooltip"
                data-placement="right" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i>
                <span>Youtube</span></a>
            <a href="https://mediateur.el-mouradia.dz/"" data-toggle=" tooltip" data-placement="right" title="Web"><i
                    class="fa fa-globe" aria-hidden="true"></i>
                <span>Web</span></a>
            <a href=" data-toggle=" tooltip" data-placement="right" title="Behance"><i class="fa"
                    aria-hidden="true"></i> <span style="color: aliceblue;">Web</span></a>
        </div>
        <!-- Message Box -->
        <div class="message-box">
            <a href="#" data-toggle="modal" data-target=".contact-modal-lg"><img src="{{asset('wassit/img/core-img/user (2).png')}}" alt="">
            </a>
        </div>
    </div>
    <!-- Social Sidebar Area End -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">
        <div class="carousel h-100 slide" data-ride="carousel" id="welcomeSlider">
            <!-- Carousel Inner -->
            <div class="carousel-inner h-100">

                <div class="carousel-item h-100 bg-img active" style="background-image: url({{asset('wassit/img/bg-img/m1.jpg')}});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span></span>
                            <h2> Portail Electronique des requetes et doléance</h2>
                        </div>
                    </div>
                </div>

                <div class="carousel-item h-100 bg-img" style="background-image: url({{asset('wassit/img/bg-img/b3\ \(2\).jpg')}});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>01.</span>
                            <h5> Le Médiateur de la République est saisi par toute personne physique qui, ayant épuisé
                                tous les recours, s’estime lésée
                                par un dysfonctionnement d’un service public.
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url({{asset('wassit/img/bg-img/est.jpg')}});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>02.</span>
                            <h5> Il ne peut pas, en outre, intervenir dans une procédure judiciaire ou remettre en cause
                                une décision de justice.
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100 bg-img" style="background-image: url({{asset('wassit/img/bg-img/b2\ \(2\).jpg')}});">
                    <div class="carousel-content h-100">
                        <div class="slide-text">
                            <span>03.</span>
                            <h5> Le Médiateur de la République ne connait pas de recours entre les services publics et
                                leurs agents.
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Indicators -->
            <ol class="carousel-indicators">
                <!--   
                <li data-target="#welcomeSlider" data-slide-to="0" class="active bg-img"
                    style="background-image: url({{asset('wassit/img/bg-img/1.jpg')}});"></li>
                <li data-target="#welcomeSlider" data-slide-to="1" class="bg-img"
                    style="background-image: url({{asset('wassit/img/bg-img/2.jpg')}});"></li>
                <li data-target="#welcomeSlider" data-slide-to="2" class="bg-img" style="">dd</li>
   
                <li data-target="#welcomeSlider" data-slide-to="3" class="bg-img"
                    style="background-image: url({{asset('wassit/img/bg-img/4.jpg')}});"></li>
                <li data-target="#welcomeSlider" data-slide-to="4" class="bg-img"
                    style="background-image: url({{asset('wassit/img/bg-img/5.jpg')}});"></li>
                <li data-target="#welcomeSlider" data-slide-to="5" class="bg-img"
                    style="background-image: url({{asset('wassit/img/bg-img/6.jpg')}});"></li>
                <li data-target="#welcomeSlider" data-slide-to="6" class="bg-img"
                    style="background-image: url({{asset('wassit/img/bg-img/7.jpg')}});"></li>
                <li data-target="#welcomeSlider" data-slide-to="7" class="bg-img"
                    style="background-image: url({{asset('wassit/img/bg-img/8.jpg')}});"></li>
                <li data-target="#welcomeSlider" data-slide-to="8" class="bg-img"
                    style="background-image: url({{asset('wassit/img/bg-img/9.jpg')}});"></li>
                <li data-target="#welcomeSlider" data-slide-to="9" class="bg-img"
                    style="background-image: url({{asset('wassit/img/bg-img/10.jpg')}});"></li>
                <li data-target="#welcomeSlider" data-slide-to="10" class="bg-img"
                    style="background-image: url({{asset('wassit/img/bg-img/11.jpg')}});"></li>
                <li data-target="#welcomeSlider" data-slide-to="11" class="bg-img"
                    style="background-image: url({{asset('wassit/img/bg-img/12.jpg')}});"></li>
                <li data-target="#welcomeSlider" data-slide-to="12" class="bg-img"
                    style="background-image: url({{asset('wassit/img/bg-img/13.jpg')}});"></li>
            -->
            </ol>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="contact-popup-form" id="contact-modal-lg">

    </div>
    <!-- ***** Contact Area End ***** -->
    <!-- Footer Area Start -->
    <footer class="footer-area">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="footer-content h-100 d-md-flex align-items-center justify-content-between">
                        <!-- Single Footer Content -->
                        <div class="single-footer-content">
                            <img src="{{asset('wassit/img/core-img/location.png')}}" width="25px" alt="">
                            <a href="https://goo.gl/maps/3xPb1SR5i4fY4f2z9" target="_blank">Cité Chaabani, El-biar ,
                                Alger</a>
                        </div>
                        <!-- Single Footer Content -->
                        <div class="single-footer-content">
                            <img src="{{asset('wassit/img/core-img/call.png')}}" width="25px" alt="">
                            <a href="tel:+213 21 48 82 21">021 48 82 21</a>
                        </div>
                        <div class="single-footer-content">
                            <img src="{{asset('wassit/img/core-img/print.png')}}" width="25px" alt="">
                            <a href="tel:+213 21 48 83 91">021 48 83 91</a>
                        </div>
                        <!-- Single Footer Content -->
                        <div class="single-footer-content">
                            <img src="{{asset('wassit/img/core-img/mail.png')}}" width="25px" alt="">
                            <a href="mailto:" mediateur@el-mouradia.dz" target="_blank">mediateur@el-mouradia.dz</a>
                        </div>
                        <div class="single-footer-content">
                            <img src="{{asset('wassit/img/core-img/copyright1.png')}}" width="20px" alt="">
                            <a href="#">
                                <script>document.write(new Date().getFullYear());</script> Tous droits réservés,<br>
                                Médiateur de la&nbsp;République
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer Area End -->
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('wassit/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('wassit/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('wassit/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('wassit/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('wassit/js/active.js')}}"></script>

</body>

</html>