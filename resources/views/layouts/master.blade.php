<html lang="en-US" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CIRM</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
  <link rel="stylesheet" href="{{asset('cirm/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('cirm/assets/css/nicepage.css')}}">
  <link rel="stylesheet" href="{{asset('cirm/assets/css/fontawesome-all.min.css')}}">
  <meta name="base_url" content="index.html">
  <meta name="csrf-token" content="9MKdNNPJMTQcsEpj2fqxjmdLP5QhFXRKrOBSSyXg">
  @yield('styles')
  <script src="../../www.google.com/recaptcha/enterprisee3ad.js?render=6Lfdd_ciAAAAAN854GVP4fs9RYCd0Vzvg9vJrpW3"></script>
  <script>
    grecaptcha.enterprise.ready(function () {
      grecaptcha.enterprise.execute('6Lfdd_ciAAAAAN854GVP4fs9RYCd0Vzvg9vJrpW3', {
        action: 'login'
      }).then(function (token) {
      });
    });
  </script>

</head>

<body dir="rtl" data-home-page="https://afrahkoum.com/cirm/home" data-home-page-title="الرئيسية"
  class="u-body u-xl-mode" data-lang="ar"
  data-lang-fr="{&quot;head-title&quot;:&quot;&quot;,&quot;head-keywords&quot;:&quot;&quot;,&quot;head-description&quot;:&quot;&quot;}">
  <div class="content">
  <header>
        <div class="logo">
            <img src="{{asset('cirm/img/h1.png')}}">
        </div>
    </header>
    <nav>
        <ul>
            @auth
            <li>
              <a class="active" href="#">{{Auth::user()->name}} {{Auth::user()->prenom}} </a>
            </li>
            <li>
              <a class="" href="{{route('reclamation.create')}}">انشاء شكوة </a>
            </li>
            <li>
              <a class="" href="home.html">تسجيل الخروج </a>
            </li>
            @else
            <li>
                <a class="active" href="home.html">الرئيسية</a>
            </li>
            <li>
                <a href="#">حول البوابة</a>
            </li>
            <li>
                <a href="#">احصائيات</a>
            </li>
            <li>
                <a href="{{route('login')}}">متابعة شكوى</a>
            </li>
            <li>
                <a href="{{route('register')}}">قدم الشكوى</a>
            </li>
            <li>
                <a href="{{route('register')}}">انشاء حساب</a>
            </li>

            @endif
        </ul>

        <div class="logo2"><img src="{{asset('cirm/img/logo3.png')}}"></div>

    </nav>
  

    <main>

    @yield('title')
    @yield('content')
    
    

    </main>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-b570">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-align-center u-image u-image-contain u-image-default u-image-1"
          src="{{asset('cirm/assets/images/republic-stamp.png')}}" alt="" data-image-width="785" data-image-height="774">
        <p class="u-align-center u-custom-font u-small-text u-text u-text-variant u-text-1"
          data-lang-en="Exemple de texte. Cliquez pour sélectionner l'élément de texte."
          data-lang-fr="Exemple de texte. Cliquez pour sélectionner l'élément de texte."> 2022 كل الحقوق محفوظة وسيط
          الجمهورية</p>
      </div>
    </footer>
  </div>

  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->


  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->

  <script src="{{asset('cirm/assets/js/jquery.js')}}"></script>
  <script src="{{asset('cirm/assets/js/popper.min.js')}}"></script>
  <script src="{{asset('cirm/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('cirm/assets/js/nicepage.js')}}"></script>

  <script>
    var hostadmin = "index.html";
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>






  @yield('scripts')

</body>


<!-- Mirrored from afrahkoum.com/cirm/register by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Nov 2022 17:00:59 GMT -->

</html>
<script src="{{asset('cirm/assets/js/popper.min.js')}}"></script>
