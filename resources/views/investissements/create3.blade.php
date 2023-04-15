
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>عرائض المستثمرين</title>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
        <link href="{{asset('cirm2/ar/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('cirm2/ar/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/toastr.css')}}" rel="stylesheet"/>
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>

    </head>
<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">
    
    <!--  BEGIN NAVBAR  -->
    <div class="header-container">

        @include('includes.modals.header')

    </div>
    <!--  END NAVBAR  -->
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>


        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="container">

                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">عرائض </a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">المستثمرين</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row">
                <div id="flFormsGrid" class="cols-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h6>
                                    انشغال مستثمر:<br>
                                            لديك مشروع استثماري، منتهي، في طور الإنجاز أو في طور الانطلاق وواجهت عراقيل منعتك من استكمال تجسيد مشروعك، يمكنك إيصال انشغالاتك عن طريق ملء هذه الاستمارة

                                    </h6>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h3>تعيين المشروع</h3>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{route('investissement.create')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                <div class="form-row mb-3">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">التسمية الاجتماعية</label>
                                        <input required type="text" name="raison_social" class="form-control" id="inputname" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">الوضع القانوني</label>
                                        <select id="inputState" name="status_juridique" class="form-control">
                                            <option selected>اختر</option>
                                            <option value="Personne physique">شخص طبيعي</option>
                                            <option value="EURL">   شركة ذات مسؤولية محدودة لشخص واحد </option>
                                            <option value="SARL">شركة ذات مسؤولية محدودة</option>
                                            <option value="SPA">شركة ذات أسهم</option>
                                            <option value="SNC">الشراكة العامة </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">لقب المسير</label>
                                        <input required type="text" name="nom_gerant" class="form-control" id="inputname" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">اسم المسير</label>
                                        <input required type="text" name="prenom_gerant" class="form-control" id="inputname" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">الهاتف</label>
                                        <input name="telephone" required  onKeyPress="if(this.value.length==9) return false" type="number" class="form-control" id="inputEmail4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">الفاكس</label>
                                        <input name="fax" onKeyPress="if(this.value.length==9) return false" type="number"  class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">الجوال</label>
                                        <input name="mobile" onKeyPress="if(this.value.length==10) return false" type="number"  class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">البريد الالكتروني</label>
                                        <input name="email" required type="email" required class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">قطاع النشاط</label>
                                        <select id="inputState" name="secteur" class="form-control">
                                            <option selected>اختر</option>
                                            <option value="Agriculture">فلاحة</option>
                                            <option value="Industrie">صناعة</option>
                                            <option value="Services">خدمات</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">النشاط</label>
                                        <input name="activite" type="text" class="form-control" id="inputPassword4" placeholder="">
                                    </div>

                                    
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-4">
                                        <label for="inputState">الولاية</label>
                                        <select name="wilaya" id="wilayas" class="form-control"
                                        onchange="remplirVilles(this.options[this.selectedIndex].value);return false;" class="form-control">
                                            <option value="1">أدرار</option>
                                            <option value="2">الشلف</option>
                                            <option value="3">الأغواط</option>
                                            <option value="4">أم البواقي</option>
                                            <option value="5">باتنة</option>
                                            <option value="6">بجاية</option>
                                            <option value="7">بسكرة</option>
                                            <option value="8">بشار</option>
                                            <option value="9">البليدة</option>
                                            <option value="10">البويرة</option>
                                            <option value="11">تمنغاست</option>
                                            <option value="12">تبسة</option>
                                            <option value="13">تلمسان</option>
                                            <option value="14">تيارت</option>
                                            <option value="15">تيزي وزو</option>
                                            <option value="16">الجزائر</option>
                                            <option value="17">الجلفة</option>
                                            <option value="18">جيجل</option>
                                            <option value="19">سطيف</option>
                                            <option value="20">سعيدة</option>
                                            <option value="21">سكيكدة</option>
                                            <option value="22">سيدي بلعباس</option>
                                            <option value="23">عنابة</option>
                                            <option value="24">قالمة</option>
                                            <option value="25">قسنطينة</option>
                                            <option value="26">المدية</option>
                                            <option value="27">مستغانم</option>
                                            <option value="28">المسيلة</option>
                                            <option value="29">معسكر</option>
                                            <option value="30">ورقلة</option>
                                            <option value="31">وهران</option>
                                            <option value="32">البيض</option>
                                            <option value="33">إليزي</option>
                                            <option value="34">برج بو عريريج</option>
                                            <option value="35">بومرداس</option>
                                            <option value="36">الطارف</option>
                                            <option value="37">تندوف</option>
                                            <option value="38">تيسمسيلت</option>
                                            <option value="39">الوادي</option>
                                            <option value="40">خنشلة</option>
                                            <option value="41">سوق أهراس</option>
                                            <option value="42">تيبازة</option>
                                            <option value="43">ميلة</option>
                                            <option value="44">عين الدفلة</option>
                                            <option value="45">النعامة</option>
                                            <option value="46">عين تيموشنت</option>
                                            <option value="47">غرداية</option>
                                            <option value="48">غيليزان</option>
                                            <option value="49">تيميمون</option>
                                            <option value="50">برج باجي مختار</option>
                                            <option value="51">أولاد جلال</option>
                                            <option value="52">بني عباس</option>
                                            <option value="53">عين صالح</option>
                                            <option value="54">عين قزام</option>
                                            <option value="55">تقرت</option>
                                            <option value="56">جانت</option>
                                            <option value="57">المغير</option>
                                            <option value="58">المنيعة</option>
                                        <select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">الدائرة</label>
                                        <input name="daira" name type="text" class="form-control" id="inputPassword4" placeholder="">

                                        <!-- <select name="daira" id="dairas" class="form-control" >
                                        </select> -->

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">البلدية</label>
                                        <!-- <select class="form-control" id="communes" name="commune" id="commune_select">
                                        </select> -->
                                        <input name="commune" name type="text" class="form-control" id="inputPassword4" placeholder="">

                                    </div>                                    
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-4">
                                        <label for="inputState">المنطقة</label>
                                        <select id="inputState" name="implimentation" class="form-control">
                                            <option selected>اختر</option>
                                            <option value="Zone Industrielle"> منطقة صناعية</option>
                                            <option value="Zone d'Activité"> منطقة نشاط</option>
                                            <option value="Terrain agricole"> أرض فلاحية</option>
                                            <option value="Hors zones"> خارج النطاق</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">المساحة (م<sup>2</sup>)</label>
                                        <input name="Superficie" name type="number" class="form-control" id="inputPassword4" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">سند شغل الأرضية</label>
                                        <select id="inputState" name="statut_du_foncier" class="form-control">
                                            <option selected>اختر</option>
                                            <option value="Arreté de concession"> قرار منح الامتياز</option>
                                            <option value="Act de concession"> عقد امتياز</option>
                                            <option value="Act de propriété"> سند الملكية</option>
                                            <option value="Location"> ايجار</option>
                                            <option value="Occupation sans titre"> شغل بدون سند</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-3" id="etat">
                                        <label for="inputState">الوضعية الحالية للمشروع</label>
                                        <select name="etat_projet" id="etat_projet" class="form-control">
                                            <option selected>اختر</option>
                                            <option value="fiche1"> منتهي (البطاقة-01)</option>
                                            <option value="fiche2">(البطاقة-02) في طور الإنجاز </option>
                                            <option value="fiche3">  (البطاقة -03) في طور الانطلاق </option>
                                        </select>
                                    </div>

                                </div>

                            
                                <div class="container-fluid" id="fiche1">
                                    <h6>منتهي (البطاقة-01)</h6>
                                    <br>
                                    <div class="form-row mb-4">                                        
                                    </div>
                                    <div class="form-row mb-4">                                        
                                        <div class="form-group col-md-4">
                                            <label for="inputState">المشروع قيد الاستغلال</label>
                                            <select name="projet_exploitation" id="projet_exploitation" onchange="changeDropdown1(this.value)" class="form-control">
                                                    <option value="c" selected>اختر</option>
                                                    <option value="o">نعم</option>
                                                    <option value="n">لا</option>
                                                </select>
                                        </div>
                                        
                                        <div id="date_projetexploitation" class="form-group col-md-4" >
                                            <label for="inputPassword4">التاريخ</label>
                                            <input type="date" max="{{date('Y-m-d')}}" name="date_projet_exploitation" class="form-control"  placeholder="">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="inputState">مناصب الشغل المنشأة</label>
                                            <input type="number" name="emploi_cre" class="form-control"  placeholder="">
                                        </div> 
                
                                    </div> 
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-3">
                                            <label for="inputState">رخصة البناء</label>
                                            <select name="permis_construction" class="form-control" id="permis_construction" onchange="changeDropdown1(this.value)" class="form-control">
                                                    <option value="c">اختر</option>
                                                    <option value="o">نعم</option>
                                                    <option value="n">لا</option>
                                                </select>
                                        </div>

                                    
                                        <div id="date_permisconstruction" class="form-group col-md-3" >
                                            <label for="inputPassword4">التاريخ</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" name="date_permis_construction" class="form-control"  placeholder="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputState">قرار الإنشاء</label>
                                            <select name="arret_creation" id="arret_creation"  class="form-control">
                                                    <option value="c" selected>اختر</option>
                                                    <option value="o">نعم</option>
                                                    <option value="n">لا</option>
                                                </select>
                                        </div>
                                        <div id="date_arretcreation" class="form-group col-md-3" >
                                            <label for="inputPassword4">التاريخ</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" name="date_arret_creation" class="form-control"  placeholder="">
                                        </div>
                                        
                                    </div>

                                    <div class="form-row mb-4">
                                        
                                        <div class="form-group col-md-3">
                                            <label for="inputState">المصادقة على دراسة المخاطر</label>
                                            <select name="approbation" class="form-control" id="approbation" onchange="changeDropdown3(this.value)" class="form-control">
                                                    <option value="c">اختر</option>
                                                    <option value="o">نعم</option>
                                                    <option value="n">لا</option>
                                                </select>
                                        </div>
                                        <div id="date_approbation" class="form-group col-md-3" >
                                            <label for="inputPassword4">التاريخ</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" name="date_approbation" class="form-control"  placeholder="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputState">قرار الاستغلال</label>
                                            <select name="arret_exploitation" id="arret_exploitation" onchange="changeDropdown4(this.value)" class="form-control">
                                                    <option value="c" selected>اختر</option>
                                                    <option value="o">نعم</option>
                                                    <option value="n">لا</option>
                                                </select>
                                        </div>
                                        <div id="date_arretexploitation" class="form-group col-md-3" >
                                            <label for="inputPassword4">التاريخ</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" class="form-control" name="adte_arret_exploitation"  placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        
                                        <div class="form-group col-md-3">
                                            <label for="inputState">شهادة المطابقة</label>
                                            <select name="certficat" class="form-control" id="certficat" onchange="changeDropdown5(this.value)" class="form-control">
                                                    <option value="c">اختر</option>
                                                    <option value="o">نعم</option>
                                                    <option value="n">لا</option>
                                                </select>
                                        </div>
                                        <div id="date_certficat" class="form-group col-md-3" >
                                            <label for="inputPassword4">التاريخ</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" name="date_certficat" class="form-control"  placeholder="">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputState">(قانون 15-08) قرار التسوية </label>
                                            <select name="arreteregularisation" id="arreteregularisation" onchange="changeDropdown6(this.value)" class="form-control">
                                                    <option value="c" selected>اختر</option>
                                                    <option value="o">نعم</option>
                                                    <option value="n">لا</option>
                                                </select>
                                        </div>
                                        <div id="date_projetexploitation" class="form-group col-md-3" >
                                            <label for="inputPassword4">التاريخ</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" name="date_arreteregularisation" class="form-control"  placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        
                                        <div class="form-group col-md-3">
                                            <label for="inputState">الرخصة الاستثنائية</label>
                                            <select name="autorisation" class="form-control" id="autorisation" onchange="changeDropdown7(this.value)" class="form-control">
                                                    <option value="c">اختر</option>
                                                    <option value="o">نعم</option>
                                                    <option value="n">لا</option>
                                                </select>
                                        </div>
                                        <div id="date_autorisation" class="form-group col-md-3" >
                                            <label for="inputPassword4">التاريخ</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" name="date_autorisation" class="form-control"  placeholder="">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="inputState">الربط بالشبكات المختلفة *</label>
                                            <select name="raccordement" class="form-control" id="raccordement" onchange="changeDropdown8(this.value)" class="form-control">
                                                    <option value="c">اختر</option>
                                                    <option value="o">نعم</option>
                                                    <option value="n">لا</option>
                                                </select>
                                        </div>
                                        <div id="date_raccordement" class="form-group col-md-3" >
                                            <label for="inputPassword4">التاريخ</label>
                                            <input type="Date" max="{{date('Y-m-d')}}" name="date_raccordement" class="form-control"  placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <label for="inputEmail4">العراقيل التي تواجهها</label>
                                        <textarea class="form-control" name="contraintes" aria-label="With textarea"></textarea>
                                    </div>
                                </div>

                                <div class="container-fluid" id="fiche2">
                                    <br>
                                        <h6> (البطاقة-02) في طور الإنجاز </h6>
                                        <br>
                                        <div class="form-row mb-4">
                                                <div id="date_lancement2" class="form-group col-md-3" >
                                                    <label for="inputPassword4">تاريخ بداية الأشغال</label>
                                                    <input type="Date" max="{{date('Y-m-d')}}" name="date_lancement2" class="form-control"  placeholder="">
                                                </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-3">
                                                <label for="inputState">رخصة البناء</label>
                                                <select name="permis_construction2" id="permis_construction2" onchange="changeDropdown9(this.value)" class="form-control">
                                                        <option value="c" selected>اختر</option>
                                                        <option value="o">نعم</option>
                                                        <option value="n">لا</option>
                                                    </select>
                                            </div>
                                            <div id="date_permisconstruction2" class="form-group col-md-3" >
                                                <label for="inputPassword4">التاريخ</label>
                                                <input type="Date" max="{{date('Y-m-d')}}" class="form-control" name="date_permis_construction2" placeholder="">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputState">قرار الانشاء</label>
                                                <select name="arret_creation2" class="form-control" id="arret_creation2" onchange="changeDropdown10(this.value)" class="form-control">
                                                        <option value="c">اختر</option>
                                                        <option value="o">نعم</option>
                                                        <option value="n">لا</option>
                                                    </select>
                                            </div>
                                            <div id="date_arretcreation2" class="form-group col-md-3" >
                                                <label for="inputPassword4">التاريخ</label>
                                                <input type="Date" max="{{date('Y-m-d')}}" class="form-control" name="date_arret_creation2"  placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-row mb-4">
                                            <label for="inputEmail4">نسبة الانجاز</label>
                                            <input type="number" name="taux" class="form-control"  placeholder="">
                                        </div>
                                        <div class="form-row mb-4">
                                            <label for="inputEmail4">العراقيل التي تواجهها</label>
                                            <textarea class="form-control" name="contraintes2" aria-label="With textarea"></textarea>
                                        </div>
                                </div>




                              
                                <div class="container-fluid" id="fiche3">
                                    <h6>(البطاقة -03) في طور الانطلاق </h6>

                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-3">
                                                <label for="inputState">رخصة البناء</label>
                                                <select name="permis_construction3" id="permis_construction3" class="form-control">
                                                    <option value="c" selected>اختر</option>
                                                    <option value="o">نعم</option>
                                                    <option value="n">لا</option>
                                                </select>
                                            </div>
                                            <div id="date_permisconstruction3" class="form-group col-md-3" >
                                                <label for="inputPassword4">التاريخ</label>
                                                <input type="Date" max="{{date('Y-m-d')}}" name="date_permis_construction3" class="form-control"  placeholder="">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputState">قرار الانشاء</label>
                                                <select name="arret_creation3" class="form-control" id="arret_creation3" onchange="changeDropdown12(this.value)" class="form-control">
                                                    <option value="c">اختر</option>
                                                    <option value="o">نعم</option>
                                                    <option value="n">لا</option>
                                                </select>
                                            </div>
                                            <div id="date_arretcreation3" class="form-group col-md-3" >
                                                <label for="inputPassword4">التاريخ</label>
                                                <input type="Date" max="{{date('Y-m-d')}}" name="date_arret_creation3" class="form-control"  placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <label for="inputEmail4">العراقيل التي تواجهها</label>
                                            <textarea class="form-control" name="contraintes3" aria-label="With textarea"></textarea>
                                        </div>


                                </div>


                                    <div class="custom-file-container" data-upload-id="mySecondImage">
                                        <label>Piece jointe <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"></a></label>
                                        <label class="custom-file-container__custom-file">
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input" name="piece" >
                                    </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LewnbUkAAAAAGOFz1NH0ty2-Nsfm-yBcRn259cE"></div>

                                    <button type="submit" class="btn btn-primary mt-3">ارسال</button>
                                

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->



    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->





    <script src="{{asset('cirm2/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('cirm2/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('cirm2/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('cirm2/assets/js/app.js')}}"></script>
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
    <script>
        $(document).ready(function() {
            $('#fiche3').hide()
            $('#fiche1').hide()
            $('#fiche2').hide()

            $('#etat_projet').on('change',function(){
                var value = this.value;
                console.log(value)
                if(value=="fiche1"){
                    $('#fichetext').html('fiche-01')
                    $('#fiche3').hide()
                    $('#fiche1').show()
                    $('#fiche2').hide()
                }
                if(value=="fiche2"){
                    $('#fichetext').html('fiche-02')
                    $('#fiche3').hide()
                    $('#fiche2').show()
                    $('#fiche1').hide()
                }
                if(value=="fiche3"){
                    $('#fichetext').html('fiche-03')
                    $('#fiche2').hide()
                    $('#fiche3').show()
                    $('#fiche1').hide()

                }


            })


        });

    </script>
    
    <script>

var villes = new Array();
villes[0] = new Array();
villes[1] = new Array
("تحديد دائرة",
"أدرار",
"رقان",
"تسابيت",
"زاوية كنتة",
"أولف",
"فنوغيل")
 villes[2] = new Array
("تحديد دائرة",
"الشلف",
"تنس",
"الكريمية",
"تاقريت",
"بني حواء",
"أولاد فارس",
"بوقادير",
"الزبوجة",
"أبو الحسين",
"المرسى",
"وادي الفضة",
"أولاد بن عبد القادر",
"عين مران")
villes[3] = new Array
("تحديد دائرة",
"الأغواط",
"قصر الحيران",
"سيدي مخلوف",
"حاسي الرمل",
"عين ماضي",
"قتلة سيدي سعيد",
"بريدة",
"الغيشة",
"أفلو",
"وادي مرة")
  villes[4] = new Array
("تحديد دائرة",
"أم البواقي",
"عين البيضاء",
"عين مليلة",
"سيقوس",
"عين ببوش",
"الضلعة",
"عين كرشة",
"فكيرينة",
"سوق نعمان",
"قصر الصباحي",
"مسكيانة",
"عين فكرون")
 villes[5] = new Array
("تحديد دائرة",
"باتنة",
"مروانة",
"سريانة",
"منعة",
"المعذر",
"تازولت",
"نقاوس",
"أريس",
"عين جاسر",
"أولاد سلام",
"سقانة",
"أشمول",
"بوزينة",
"شمرة",
"بريكة",
"الجزار",
"تكوت",
"عين التوتة",
"ثنية العابد",
"تيمقاد",
"رأس العيون",
"أولاد سيدي سليمان")
 villes[6] = new Array
("تحديد دائرة",
"بجاية",
"أميزور",
"تيمزريت",
"سوق لإثنين",
"تيشي",
"إغيل علي",
"درقينة",
"أوقاس",
"أدكار",
"أقبو",
"صدوق",
"تزمالت",
"شميني",
"برباشة",
"أوزلاقن",
"سيدي عيش",
"القصر",
"خراطة",
"بني معوش")
 villes[7] = new Array
("تحديد دائرة",
"بسكرة",
"سيدي عقبة",
"مشونش",
"زريبة الوادي",
"القنطرة",
"الوطاية",
"جمورة",
"طولقة",
"أورلال",
"فوغالة")
 villes[8] = new Array
("تحديد دائرة",
"بشار",
"الأحمر",
"قنادسة",
"تاغيت",
"العبادل",
"بني ونيف")
 villes[9] = new Array
("تحديد دائرة",
"البليدة",
"بوعينان",
"وادي العلايق",
"أولاد يعيش",
"العفرون",
"موزاية",
"مفتاح",
"بوفاريك",
"الأربعاء",
"بوقرة")


 villes[10] = new Array
("تحديد دائرة",
"البويرة",
"سوق الخميس",
"القادرية",
"الحيزر",
"الأخضرية",
"الهاشمية",
"برج أوخريص",
"بشلول",
"عين بسام",
"بئر غبالو",
"مشد الله",
"سور الغزلان")
 villes[11] = new Array
("تحديد دائرة",
"تامنغست",
"اباليسا",
"تازروق")
 villes[12] = new Array
("تحديد دائرة",
"تبسة",
"بئر العاتر",
"الشريعة",
"العوينات",
"نقرين",
"بئر مقدم",
"الكويف",
"مرسط",
"العقلة",
"الونزة",
"الماء الابيض",
"أم علي")
 villes[13] = new Array
("تحديد دائرة",
"تلمسان",
"عين تالوت",
"الرمشي",
"صبرة",
"الغزوات",
"أولاد ميمون",
"بني سنوس",
"باب العسة",
"فلاوسن",
"إبن سكران",
"الحناية",
"مغنية",
"سبدو",
"بني بوسعيد",
"مرسى بن مهيدي",
"ندرومة",
"سيدي الجيلالي",
"حنين",
"شتوان",
"منصورة")
 villes[14] = new Array
("تحديد دائرة",
"تيارت",
"مدروسة",
"عين الذهب",
"دحموني",
"رحوية",
"مهدية",
"السوقر",
"مغيلة",
"فرندة",
"عين كرمس",
"قصر الشلالة",
"وادي ليلي",
"مشرع الصفا",
"الحمادية")
 villes[15] = new Array
("تحديد دائرة",
"تيزي وزو",
"عين الحمام",
"ماكودة",
"ذراع الميزان",
"تيزي غنيف",
"ايفرحونن",
"عزازقة",
"الاربعاء نايث ايراثن",
"تيزي راشد",
"واقنون",
"المعاتقة",
"بني دوالة",
"بوزغن",
"واضية",
"أزفون",
"تقيزريت",
"بوغني",
"ذراع بن خدة",
"واسيف",
"مقلة",
"بني يني")
 villes[17] = new Array
("تحديد دائرة",
"الجلفة",
"حاسي بحبح",
"فيض البطمة",
"بيرين",
"الادريسية",
"مسعد",
"سيدي لعجل",
"حد الصحاري",
"دار الشيوخ",
"الشارف",
"عين الإبل",
"عين وسارة")
 villes[18] = new Array
("تحديد دائرة",
"جيجل",
"العوانة",
"زيامة منصورية",
"الطاهير",
"الشقفة",
"الميلية",
"سيدي معروف",
"السطارة",
"العنصر",
"جيملة",
"تاكسنة")
 villes[19] = new Array
("تحديد دائرة",
"سطيف",
"العين الكبيرة",
"بني عزيز",
"بئر العرش",
"بابور",
"قجال",
"العلمة",
"جميلة",
"بني ورتيلان",
"عين أرنات",
"عموشة",
"عين ولمان",
"بوعنداس",
"حمام السخنة",
"صالح باي",
"عين أزال",
"قنزات",
"بوقاعة",
"حمام قرقور",
"ماوكلان")
 villes[20] = new Array
("تحديد دائرة",
"سعيدة",
"عين الحجر",
"يوب",
"سيدي بوبكر",
"الحساسنة",
"أولاد إبراهيم")
 villes[21] = new Array
("تحديد دائرة",
"سكيكدة",
"الحدائق",
"عزابة",
"بن عزوز",
"القل",
"أولاد عطية",
"الزيتونة",
"الحروش",
"سيدي مزغيش",
"ومضان جمال",
"تمالوس",
"عين قشرة",
"أم الطوب")
 villes[22] = new Array
("تحديد دائرة",
"سيدي بلعباس",
"تسالة",
"مصطفى بن ابراهي",
"تلاغ",
"سيدي علي بوسيدي",
"مرحوم",
"سيدي لحسن",
"تنيرة",
"مولاي سليسن",
"مرين",
"راس الماء",
"عين البرد",
"الزفيزف",
"بن باديس",
"سيدي علي بن يوب")
 villes[23] = new Array
("تحديد دائرة",
"عنابة",
"برحال",
"الحجار",
"البوني",
"عين الباردة",
"شطايبي")
 villes[24] = new Array
("تحديد دائرة",
"قالمة",
"وادي الزناتي",
"عين مخلوف",
"لخزارة",
"قلعة بوصبع",
"حمام دباغ",
"حمام النبايل",
"بوشقوف",
"هيليوبوليس",
"هواري بومدين")
 villes[25] = new Array
("تحديد دائرة",
"قسنطينة",
"حامة بوزيان",
"زيغود يوسف",
"الخروب",
"عين عبيد",
"ابن زياد")
 villes[26] = new Array
("تحديد دائرة",
"المدية",
"وزرة",
"عين بوسيف",
"العمرية",
"القلب الكبير",
"شلالة العذاورة",
"سيدي نعمان",
"عزيز",
"السواقي",
"قصر البخاري",
"العزيزية",
"الشهبونية",
"عوامري",
"سي المحجوب",
"بني سليمان",
"البرواقية",
"سغوان",
"تابلاط",
"أولاد عنتر")
 villes[27] = new Array
("تحديد دائرة",
"مستغانم",
"عين نويسي",
"حاسي معمش",
"عين تادلس",
"خير الدين",
"سيدي علي",
"سيدي لخضر",
"عشعاشة",
"بوقيراط",
"ماسرة")
 villes[28] = new Array
("تحديد دائرة",
"المسيلة",
"حمام الضلعة",
"أولاد دراج",
"خبانة",
"شلال",
"مقرة",
"سيدي عيسى",
"عين الحجل",
"بوسعادة",
"أولاد سيدي ابراهيم",
"سيدي عامر",
"ابن سرور",
"عين الملح",
"مجدل",
"جبل مساعد")
 villes[29] = new Array
("تحديد دائرة",
"معسكر",
"بوحنيفية",
"تيزي",
"تيغنيف",
"الحشم",
"وادي الأبطال",
"غريس",
"البرج",
"عين فكان",
"وادي تاغية",
"عوف",
"عين فارس",
"سيق",
"عكاز",
"زهانة",
"المحمدية")
 villes[30] = new Array
("تحديد دائرة",
"ورقلة",
"انقوسة",
"حاسي مسعود",
"سيدي خويلد",
"البرمة")
 villes[31] = new Array
("تحديد دائرة",
"وهران",
"قديل",
"بئر الجير",
"السانية",
"أرزيو",
"بطيوة",
"عين الترك",
"وادي تليلات",
"بوتليليس")
 villes[32] = new Array
("تحديد دائرة",
"البيض",
"رقاصة",
"بريزينة",
"بوعلام",
"الأبيض سيدي الشيخ",
"بوقطب",
"بوسمغون",
"شلالة")
 villes[33] = new Array
("تحديد دائرة",
"إيليزي",
"إن أميناس")
 villes[34] = new Array
("تحديد دائرة",
"برج بوعريرج",
"رأس الوادي",
"برج زمورة",
"المنصورة",
"عين تاغروت",
"برج غدير",
"الحمادية",
"مجانة",
"الجعافرة",
"بئر قصد علي")
 villes[35] = new Array
("تحديد دائرة",
"بومرداس",
"بودواو",
"برج منايل",
"بغلية",
"الناصرية",
"يسر",
"الثنية",
"دلس",
"خميس الخشنة")
 villes[36] = new Array
("تحديد دائرة",
"الطارف",
"بوحجار",
"ابن مهيدي",
"القالة",
"بوثلجة",
"الذرغان",
"البسباس")
 villes[37] = new Array
("تحديد دائرة",
"تندوف")
 villes[38] = new Array
("تحديد دائرة",
"تيسمسيلت",
"برج بونعامة",
"ثنية الاحد",
"الأزهرية",
"لرجام",
"برج الأمير عبد القادر",
"خميستي",
"عماري")
 villes[39] = new Array
("تحديد دائرة",
"الوادي",
"الرباح",
"البياضة",
"قمار",
"الرقيبة",
"الدبيلة",
"حاسي خليفة",
"الطالب العربي",
"المقرن",
"اميه وانسة")
 villes[40] = new Array
("تحديد دائرة",
"خنشلة",
"قايس",
"الحامة",
"عين الطويلة",
"بوحمامة",
"ششار",
"ببار",
"أولاد رشاش")
 villes[41] = new Array
("تحديد دائرة",
"سوق أهراس",
"سدراتة",
"مشروحة",
"أولاد إدريس",
"تاورة",
"الحدادة",
"المراهنة",
"بئر بوحوش",
"مداوروش",
"أم العظايم")
 villes[42] = new Array
("تحديد دائرة",
"تيبازة",
"حجوط",
"سيدي عامر",
"قوراية",
"شرشال",
"الداموس",
"فوكة",
"بواسماعيل",
"أحمر العين",
"القليعة")
 villes[43] = new Array
("تحديد دائرة",
"ميلة",
"فرجيوة",
"شلغوم العيد",
"تلاغمة",
"تاجنانت",
"وادي النجاء",
"بوحاتم",
"الرواشد",
"قرارم قوقة",
"سيدي مروان",
"تسادان حدادة",
"ترعي بايبان",
"عين البيضاء حريش")
 villes[44] = new Array
("تحديد دائرة",
"عين الدفلى",
"مليانة",
"بومدفع",
"خميس مليانة",
"حمام ريغة",
"جليدة",
"العامرة",
"العطاف",
"العبادية",
"جندل",
"عين الاشياخ",
"الروينة",
"برج الأمير خالد",
"بطحية")
 villes[45] = new Array
("تحديد دائرة",
"النعامة",
"مشرية",
"عين الصفراء",
"سفيسيفة",
"مغرار",
"عسلة",
"مكمن بن عمرو")
 villes[46] = new Array
("تحديد دائرة",
"عين تيموشنت",
"عين الكحيل",
"حمام بوحجر",
"عين الأربعاء",
"المالح",
"العامرية",
"بني صاف",
"ولهاصة الغرابة")
 villes[47] = new Array
("تحديد دائرة",
"غرداية",
"ضاية بن ضحوة",
"بريان",
"منليلي",
"القرارة",
"زلفانة",
"المنصورة",
"بونورة")
 villes[48] = new Array
("تحديد دائرة",
"غليزان",
"وادي رهيو",
"الحمادنة",
"سيدي أمحمد بن علي",
"عمي موسى",
"زمورة",
"جديوية",
"المطمر",
"عين طارق",
"مازونة",
"يلل",
"الرمكة",
"منداس")
 villes[49] = new Array
("تحديد دائرة",
"تيميمون",
"أوقروت",
"تنركوك",
"شروين")
 villes[50] = new Array
("تحديد دائرة",
"برج باجي مختار")
 villes[51] = new Array
("تحديد دائرة",
"سيدي  خالد",
"أولاد جلال")
 villes[52] = new Array
("تحديد دائرة",
"بني عباس",
"كرزاز",
"الوطاء",
"تبلبالة",
"أولاد خضير",
"إيقلي")
 villes[53] = new Array
("تحديد دائرة",
"عين صالح",
"عين غار")
 villes[54] = new Array
("تحديد دائرة",
"عين قزام",
"تين زواتين")
 villes[55] = new Array
("تحديد دائرة",
"تقرت",
"تماسين",
"المقارين",
"الحجيرة",
"الطيبات")
 villes[56] = new Array
("تحديد دائرة",
"جانت")
 villes[57] = new Array
("تحديد دائرة",
"المغير",
"جامعة")
 villes[58] = new Array
("تحديد دائرة",
"المنيعة")


var code_com = new Array();
code_com[0] = new Array();
code_com[1] = new Array
("تحديد البلدية",
"أدرار",
"تامست",
"رقان",
"إن زغمير",
"تيت",
"تسابيت",
"زاوية كنتة",
"أولف",
"تيمقتن",
"تامنطيط",
"فنوغيل",
"سالي",
"اقبلي",
"أولاد أحمد تيمي",
"بودة",
"السبع")
 code_com[2] = new Array
("تحديد البلدية",
"الشلف",
"تنس",
"بنايرية",
"الكريمية",
"تاجنة",
"تاقريت",
"بني حواء",
"صبحة",
"حرشون",
"أولاد فارس",
"سيدي عكاشة",
"بوقادير",
"بني راشد",
"تلعصة",
"الهرنفة",
"وادي قوسين",
"الظهر",
"أولاد عباس",
"السنجاس",
"الزبوجة",
"وادي سلي",
"أبو الحسين",
"المرسى",
"الشطية",
"سيدي عبد الرحمن",
"مصدق",
"الحجاج",
"الأبيض مجاجة",
"وادي الفضة",
"أولاد بن عبد القادر",
"بوزغاية",
"عين مران",
"أم الدروع",
"بريرة",
"بني بوعتاب")
code_com[3] = new Array
("تحديد البلدية",
"الأغواط",
"قصر الحيران",
"بن ناصر بن شهرة",
"سيدي مخلوف",
"حاسي الدلاعة",
"حاسي الرمل",
"عين ماضي",
"تاجموت",
"الخنق",
"قتلة سيدي سعيد",
"عين سهيه علي",
"بيضاء",
"بريدة",
"الغيشة",
"الحاج مشري",
"سبقاق",
"تاويالة",
"تاجرونة",
"أفلو",
"العسفية",
"وادي مرة",
"وادي مزي",
"الحويطة",
"سيدي بوزيد")
  code_com[4] = new Array
("تحديد البلدية",
"أم البواقي",
"عين البيضاء",
"عين مليلة",
"بحير الشرقي",
"العامرية",
"سيقوس",
"البلالة",
"عين ببوش",
"بريش",
"أولاد حملة",
"الضلعة",
"عين كرشة",
"هنشير تومغني",
"الجازية",
"عين الديس",
"فكيرينة",
"سوق نعمان",
"الزرق",
"الفجوج بوغرارة سعودي",
"أولاد زاوي",
"بئر الشهداء",
"قصر الصباحي",
"وادي نيني",
"مسكيانة",
"عين فكرون",
"الرحية",
"عين الزيتون",
"أولاد قاسم",
"الحرملية")
 code_com[5] = new Array
("تحديد البلدية",
"باتنة",
"غسيرة",
"معافة",
"مروانة",
"سريانة",
"منعة",
"المعذر",
"تازولت",
"نقاوس",
"قيقبة",
"إينوغيسن",
"عيون العصافير",
"جرمة",
"بيطام",
"إزيل عبد القادر",
"أريس",
"كيمل",
"تيلاطو",
"عين جاسر",
"أولاد سلام",
"تغرغار",
"عين ياقوت",
"فسديس",
"سفيان",
"الرحبات",
"تغانمين",
"لمسان",
"قصر بلزمة",
"سقانة",
"أشمول",
"فم الطوب",
"بني فضالة الحقانية",
"وادي الماء",
"تالغمت",
"بوزينة",
"شمرة",
"وادي الشعبة",
"تاكسلانة",
"القصبات",
"أولاد عوف",
"بومقر",
"بريكة",
"الجزار",
"تكوت",
"عين التوتة",
"حيدوسة",
"ثنية العابد",
"وادي الطاقة",
"أولاد فاضل",
"تيمقاد",
"رأس العيون",
"شير",
"أولاد سيدي سليمان",
"زانة البيضاء",
"مدوكال",
"أولاد عمار",
"الحاسي",
"لازرو",
"بومية",
"بوالحيلات",
"لرباع")
 code_com[6] = new Array
("تحديد البلدية",
"بجاية",
"أميزور",
"فرعون",
"تاوريرت إغيل",
"شلاطة",
"تامقرة",
"تيمزريت",
"سوق لإثنين",
"مسيسنة",
"تينبدار",
"تيشي",
"سمعون",
"كنديرة",
"تيفرة",
"إغرم",
"أمالو",
"إغيل علي",
"فلاين الماثن",
"توجة",
"درقينة",
"سيدي عياد",
"أوقاس",
"بني جليل",
"أدكار",
"أقبو",
"صدوق",
"تزمالت",
"أيت رزين",
"شميني",
"السوق أوفلا",
"تاسكريوت",
"طيبان",
"تالة حمزة",
"برباشة",
"بني كسيلة",
"أوزلاقن",
"بوحمزة",
"بني مليكش",
"سيدي عيش",
"القصر",
"مالبو",
"أكفادو",
"لفلاي",
"خراطة",
"ذراع القايد",
"تامريجت",
"أيت إسماعيل",
"بوخليفة",
"تيزي نبربر",
"بني معوش",
"وادي غير",
"بو جليل")
 code_com[7] = new Array
("تحديد البلدية",
"بسكرة",
"أوماش",
"برانيس",
"شتمة",
"سيدي عقبة",
"مشونش",
"الحوش",
"عين الناقة",
"زريبة الوادي",
"الفيض",
"القنطرة",
"عين زعطوط",
"الوطاية",
"جمورة",
"طولقة",
"ليوة",
"ليشانة",
"أورلال",
"مليلي",
"فوغالة",
"برج بن عزوز",
"المزيرعة",
"بوشقرون",
"مخادمة",
"الغروس",
"الحاجب",
"خنقة سيدي ناجي")
 code_com[8] = new Array
("تحديد البلدية",
"بشار",
"عرق فراج",
"مريجة",
"الأحمر",
"مشروع هواري بومدين",
"قنادسة",
"تاغيت",
"بوقايس",
"موغل",
"العبادل",
"بني ونيف")
 code_com[9] = new Array
("تحديد البلدية",
"البليدة",
"الشبلي",
"بوعينان",
"وادي العلايق",
"أولاد يعيش",
"الشريعة",
"العفرون",
"الشفة",
"حمام ملوان",
"بن خليل",
"الصومعة",
"موزاية",
"سوحان",
"مفتاح",
"اولاد سلامة",
"بوفاريك",
"الأربعاء",
"وادي جر",
"بني تامو",
"بوعرفة",
"بني مراد",
"بوقرة",
"قرواو",
"عين الرمانة",
"جبابرة")


 code_com[10] = new Array
("تحديد البلدية",
"البويرة",
"الأسنام",
"قرومة",
"سوق الخميس",
"القادرية",
"حنيف",
"ديرة",
"أيت لعزيز",
"تاغزوت",
"روراوة",
"مزدور",
"الحيزر",
"الأخضرية",
"معلة",
"الهاشمية",
"أعمر",
"الشرفاء",
"برج أوخريص",
"العجيبة",
"الحاكمية",
"الخبوزية",
"أهل القصر",
"بودربالة",
"زبربر",
"عين الحجر",
"جباحية",
"أغبالو",
"تاقديت",
"عين الترك",
"سحاريج",
"الدشمية",
"ريدان",
"بشلول",
"بوكرم",
"عين بسام",
"بئر غبالو",
"مشد الله",
"سور الغزلان",
"المعمورة",
"أولاد راشد",
"عين العلوي",
"الحجرة الزرقاء",
"آث  منصور",
"المقراني",
"وادي البردي")
 code_com[11] = new Array
("تحديد البلدية",
"تامنغست",
"اباليسا",
"أدلس",
"تازروق",
"عين امقل")
 code_com[12] = new Array
("تحديد البلدية",
"تبسة",
"بئر العاتر",
"الشريعة",
"سطح قنطيس",
"العوينات",
"الحويجبات",
"صفصاف الوسرى",
"الحمامات",
"نقرين",
"بئر مقدم",
"الكويف",
"مرسط",
"العقلة",
"بئر الذهب",
"العقلة المالحة",
"قريقر",
"بكارية",
"بوخضرة",
"الونزة",
"الماء الابيض",
"أم علي",
"ثليجان",
"عين الزرقاء",
"المريج",
"بولحاف الدير",
"بجن",
"المزرعة",
"فركان")
 code_com[13] = new Array
("تحديد البلدية",
"تلمسان",
"بني مستر",
"عين تالوت",
"الرمشي",
"الفحول",
"صبرة",
"الغزوات",
"السواني",
"جبالة",
"القور",
"وادي لخظر",
"عين فزة",
"أولاد ميمون",
"عمير",
"عين يوسف",
"زناتة",
"بني سنوس",
"باب العسة",
"دار يغمراسن",
"فلاوسن",
"العزايل",
"السبعة شيوخ",
"تيرني بني هديل",
"إبن سكران",
"عين نحالة",
"الحناية",
"مغنية",
"حمام بوغرارة",
"السواحلية",
"مسيردة الفواقة",
"عين فتاح",
"العريشة",
"سوق الثلاثاء",
"سيدي عبد اللي",
"سبدو",
"بني وارسوس",
"سيدي مجاهد",
"بني بوسعيد",
"مرسى بن مهيدي",
"ندرومة",
"سيدي الجيلالي",
"بني بهدل",
"البويهي",
"حنين",
"تيانت",
"أولاد رياح",
"بوحلو",
"بني خلاد",
"عين الغرابة",
"شتوان",
"منصورة",
"بني صميل",
"العين الكبيرة")
 code_com[14] = new Array
("تحديد البلدية",
"تيارت",
"مدروسة",
"عين بوشقيق",
"سيدي علي ملال",
"عين زاريت",
"عين الذهب",
"سيدي بختي",
"مديرسة",
"زمالة  الأمير عبد القادر",
"مادنة",
"السبت",
"كلاكو",
"دحموني",
"رحوية",
"مهدية",
"السوقر",
"سي عبد الغني",
"عين الحديد",
"جبيلة الرصفاء",
"النعيمة",
"مغيلة",
"قرطوفة",
"سيدي الحسني",
"جيلالي بن عمار",
"سبعين",
"توسنينة",
"فرندة",
"عين كرمس",
"قصر الشلالة",
"الرشايقة",
"الناظورة",
"تاقدمت",
"وادي ليلي",
"مشرع الصفا",
"الحمادية",
"شحيمة",
"تخمرت",
"سيدي عبد الرحمن",
"سرغين",
"بوقرة",
"الفايجة",
"تيدة")
 code_com[15] = new Array
("تحديد البلدية",
"تيزي وزو",
"عين الحمام",
"اقبيل",
"فريحة",
"الصوامع",
"مشطراس",
"ارجن",
"تيميزارت",
"ماكودة",
"ذراع الميزان",
"تيزي غنيف",
"بونوح",
"آيت شفعة",
"فريقات",
"بني عيسي",
"بني زمنزر",
"ايفرحونن",
"عزازقة",
"ايلولة امالو",
"يعكورن",
"الاربعاء نايث ايراثن",
"تيزي راشد",
"زكري",
"واقنون",
"عين الزاوية",
"مكيرة",
"آيت يحي",
"آيت محمود",
"المعاتقة",
"آيت بومهدي",
"أبي يوسف",
"بني دوالة",
"اليلتين",
"بوزغن",
"آيت قواشة",
"واضية",
"أزفون",
"تقيزريت",
"جبل عيسى ميمون",
"بوغني",
"إيفيغاء",
"آيت  أومالو",
"تيرمتين",
"أقرو",
"ياطفان",
"بني زيكي",
"ذراع بن خدة",
"واسيف",
"إجر",
"مقلة",
"تيزي نثلاثة",
"بني يني",
"أغريب",
"أفليسن",
"بوجيمة",
"آيت يحيى موسى",
"سوق الاثنين",
"آيت خليلي",
"سيدي نعمان",
"أبودرارن",
"أقني قغران",
"مزرانة",
"أمسوحال",
"تادمايت",
"أيت بوعدو",
"أسي يوسف",
"آيت تودرت")
code_com[16] = new Array
("تحديد البلدية",
"الجزائر الوسطى",
"سيدي امحمد",
"المدنية",
"محمد بلوزداد",
"باب الوادي",
"بولوغين بن زيري",
"القصبة",
"وادي قريش",
"بئر مراد رايس",
"الابيار",
"بوزريعة",
"بئر خادم",
"الحراش",
"براقي",
"وادي السمار",
"بوروبة",
"حسين داي",
"القبة",
"باش جراح",
"الدار البيضاء",
"باب الزوار",
"ابن عكنون",
"دالي ابراهيم",
"الحمامات",
"الرايس حميدو",
"جسر قسنطينة",
"المرادية",
"حيدرة",
"المحمدية",
"برج الكيفان",
"المغارية",
"بني مسوس",
"الكاليتوس",
"تسالة المرجة",
"اولاد شبل",
"بئر توتة",
"سيدي موسى",
"الرويبة",
"هراوة",
"رغاية",
"عين طاية",
"برج البحري",
"المرسى",
"زرالدة",
"السحاولة",
"المعالمة",
"بابا حسن",
"الدويرة",
"درارية",
"الرحمانية",
"اولاد فايت",
"الشراقة",
"سطاوالي",
"العاشور",
"سويدانية",
"الخرايسية",
"عين بنيان")
 code_com[17] = new Array
("تحديد البلدية",
"الجلفة",
"مجبرة",
"القديد",
"حاسي بحبح",
"عين معبد",
"سد الرحال",
"فيض البطمة",
"بيرين",
"بويرة الأحدب",
"زكار",
"الخميس",
"سيدي بايزيد",
"مليليحة",
"الادريسية",
"دويس",
"حاسي العش",
"مسعد",
"القطارة",
"سيدي لعجل",
"حد الصحاري",
"قرنيني",
"سلمانة",
"عين الشهداء",
"أم العظام",
"دار الشيوخ",
"الشارف",
"بني يعقوب",
"زعفران",
"دلدول",
"عين الإبل",
"عين وسارة",
"بنهار",
"حاسي فدول",
"عمورة",
"عين فكة",
"تاعظميت")
 code_com[18] = new Array
("تحديد البلدية",
"جيجل",
"أراقن",
"العوانة",
"زيامة منصورية",
"الطاهير",
"الامير عبد القادر",
"الشقفة",
"الشحنة",
"الميلية",
"سيدي معروف",
"السطارة",
"العنصر",
"سيدي عبد العزيز",
"قاوس",
"غبالة",
"بوراوي بلهادف",
"جيملة",
"سلمى بن زيادة",
"بوسيف أولاد عسكري",
"القنار نوشفي",
"أولاد يحيى خدروش",
"بودريعة بن  يجيس",
"خيري واد عجول",
"تاكسنة",
"الجمعة بني حبيبي",
"برج الطهر",
"أولاد رابح",
"وجانة")
 code_com[19] = new Array
("تحديد البلدية",
"سطيف",
"العين الكبيرة",
"بني عزيز",
"أولاد سي أحمد",
"بوطالب",
"عين الروى",
"ذراع القبيلة",
"بئر العرش",
"بني شبانة",
"أولاد تبان",
"الحامة",
"معاوية",
"عين لقراج",
"عين عباسة",
"الدهامشة",
"بابور",
"قجال",
"عين الحجر",
"بوسلام",
"العلمة",
"جميلة",
"بني ورتيلان",
"الرصفة",
"أولاد عدوان",
"بلعة",
"عين أرنات",
"عموشة",
"عين ولمان",
"بيضاء برج",
"بوعنداس",
"بازر الصخرة",
"حمام السخنة",
"مزلوق",
"بئر حدادة",
"سرج الغول",
"حربيل",
"الوريسية",
"تيزي نبشار",
"صالح باي",
"عين أزال",
"قنزات",
"تالة إيفاسن",
"بوقاعة",
"بني فودة",
"تاشودة",
"بني موحلي",
"أولاد صابر",
"قلال بوطالب",
"عين السبت",
"حمام قرقور",
"أيت نوال مزادة",
"قصر الابطال",
"بني وسين",
"ايت تيزي",
"ماوكلان",
"القتلة الزرقاء",
"وادي البارد",
"الطاية",
"الولجة",
"النلعة")
 code_com[20] = new Array
("تحديد البلدية",
"سعيدة",
"دوي ثابت",
"عين الحجر",
"أولاد خالد",
"مولاي العربي",
"يوب",
"هونت",
"سيدي عمر",
"سيدي بوبكر",
"الحساسنة",
"المعمورة",
"سيدي احمد",
"عين السخونة",
"أولاد إبراهيم",
"تيرسين",
"عين السلطان")
 code_com[21] = new Array
("تحديد البلدية",
"سكيكدة",
"عين زويت",
"الحدائق",
"عزابة",
"جندل سعيدي محمد",
"عين الشرشار",
"بكوش الأخضر",
"بن عزوز",
"السبت",
"القل",
"بني زيد",
"الكركرة",
"أولاد عطية",
"وادي الزهور",
"الزيتونة",
"الحروش",
"زردازة",
"أولاد حبابة",
"سيدي مزغيش",
"مجاز الدشيش",
"بني ولبان",
"عين بوزيان",
"ومضان جمال",
"بني بشير",
"صالح بو الشعور",
"تمالوس",
"عين قشرة",
"أم الطوب",
"بين الويدان",
"فلفلة",
"الشرائع",
"قنواع",
"الغدير",
"بوشطاطة",
"الولجة بولبلوط",
"خنق مايون",
"حمادي كرومة",
"المرسى")
 code_com[22] = new Array
("تحديد البلدية",
"سيدي بلعباس",
"تسالة",
"سيدي ابراهيم",
"مصطفى بن ابراهي",
"تلاغ",
"مزاورو",
"بوخنيفيس",
"سيدي علي بوسيدي",
"بدر الدين المقر",
"مرحوم",
"تافيسور",
"امرناس",
"تيلموني",
"سيدي لحسن",
"عين الثريد",
"مقدرة",
"تنيرة",
"مولاي سليسن",
"الحصيبة",
"حاسي زهانة",
"طابية",
"مرين",
"راس الماء",
"عين تندمين",
"عين قادة",
"مسيد",
"سيدي خالد",
"عين البرد",
"الزفيزف",
"عين عدان",
"وادي تاوريرة",
"الضاية",
"زروالة",
"لمطار",
"سيدي شعيب",
"سيدي دحو الزاير",
"وادي السبع",
"بوجبع البرج",
"سحالة ثاورة",
"سيدي يعقوب",
"سيدي حمادوش",
"بلعربي",
"وادي سفيون",
"تغليمت",
"بن باديس",
"سيدي علي بن يوب",
"شتوان بليلة",
"بئر الحمام",
"تاودموت",
"رجم دموش",
"بن عشيبة شلية",
"حاسي دحو")
 code_com[23] = new Array
("تحديد البلدية",
"عنابة",
"برحال",
"الحجار",
"العلمة",
"البوني",
"واد العنب",
"الشرف",
"سرايدي",
"عين الباردة",
"شطايبي",
"سيدي عمار",
"التريعات")
 code_com[24] = new Array
("تحديد البلدية",
"قالمة",
"نشماية",
"بوعاتي محمود",
"وادي الزناتي",
"تاملوكة",
"وادي فراغة",
"عين صندل",
"رأس العقبة",
"الدهوارة",
"بلخير",
"بن جراح",
"بوحمدان",
"عين مخلوف",
"عين بن بيضاء",
"لخزارة",
"بني مزلين",
"بوحشانة",
"قلعة بوصبع",
"حمام دباغ",
"الفجوج",
"برج صباط",
"حمام النبايل",
"عين العربي",
"مجاز عمار",
"بوشقوف",
"هيليوبوليس",
"هواري بومدين",
"الركنية",
"سلاوة عنونة",
"مجاز الصفاء",
"بومهرة أحمد",
"عين رقادة",
"وادي الشحم",
"جبالة الخميسي")
 code_com[25] = new Array
("تحديد البلدية",
"قسنطينة",
"حامة بوزيان",
"أبن باديس الهرية",
"زيغود يوسف",
"ديدوش مراد",
"الخروب",
"عين عبيد",
"بني حميدان",
"أولاد رحمون",
"عين السمارة",
"بوجريو مسعود",
"ابن زياد")
 code_com[26] = new Array
("تحديد البلدية",
"المدية",
"وزرة",
"أولاد معروف",
"عين بوسيف",
"العيساوية",
"أولاد دايد",
"العمرية",
"دراق",
"القلب الكبير",
"بوعيش",
"مزغنة",
"أولاد إبراهيم",
"تبزي مهدي",
"سيدي زيان",
"تمسقيدة",
"الحمدانية",
"الكاف الاخضر",
"شلالة العذاورة",
"بوسكن",
"الربعية",
"بوشراحيل",
"أولاد هلال",
"تفراوت",
"بعطة",
"بوغار",
"سيدي نعمان",
"أولاد بوعشرة",
"سيدي زهار",
"وادي حربيل",
"بن شكاو",
"سيدي دامد",
"عزيز",
"السواقي",
"الزبيرية",
"قصر البخاري",
"العزيزية",
"جواب",
"الشهبونية",
"مغراوة",
"شنيقل",
"عين القصيرة",
"أم الجليل",
"عوامري",
"سي المحجوب",
"ثلاث دوائر",
"بني سليمان",
"البرواقية",
"سغوان",
"مفاتجة",
"ميهوب",
"بوغزول",
"تابلاط",
"الحوضان",
"ذراع السمار",
"سيدي الربيع",
"بئر بن عابد",
"العوينات",
"أولاد عنتر",
"بوعيشون",
"حناشة",
"سدراية",
"مجبر",
"خمس جوامع",
"السائق")
 code_com[27] = new Array
("تحديد البلدية",
"مستغانم",
"صيادة",
"فرناقة",
"ستيدية",
"عين نويسي",
"حاسي معمش",
"عين تادلس",
"سور",
"وادي الخير",
"سيدي بلعطار",
"خير الدين",
"سيدي علي",
"بن عبد المالك رمضان",
"حجاج",
"نكمارية",
"سيدي لخضر",
"عشعاشة",
"خضراء",
"بوقيراط",
"سيرات",
"عين سيدي الشريف",
"ماسرة",
"منصورة",
"السوافلية",
"أولاد بوغالم",
"أولاد مع الله",
"مزغران",
"عين بودينار",
"تزقايت",
"صفصاف",
"الطواهرية",
"الحسيان")
 code_com[28] = new Array
("تحديد البلدية",
"المسيلة",
"المعاضيد",
"حمام الضلعة",
"أولاد دراج",
"تارمونت",
"المطارفة",
"خبانة",
"مسيف",
"شلال",
"أولاد ماضي",
"مقرة",
"برهوم",
"عين خضراء",
"أولاد عدي قبالة",
"بلعايبة",
"سيدي عيسى",
"عين الحجل",
"سيدي هجرس",
"ونوغة",
"بوسعادة",
"أولاد سيدي ابراهيم",
"سيدي عامر",
"تامسة",
"ابن سرور",
"أولاد سليمان",
"الحوامد",
"الهامل",
"أولاد منصور",
"معاريف",
"دهاهنة",
"بوطي السياح",
"ختوتي سد الجير",
"زرزور",
"محمد بوضياف",
"بن زوه",
"بئر الفضة",
"عين فارس",
"سيدي أحمد",
"منعة -أولاد عطية",
"السوامع",
"عين الملح",
"مجدل",
"سليم",
"عين الريش",
"بني يلمان",
"ولتام",
"جبل مساعد")
 code_com[29] = new Array
("تحديد البلدية",
"معسكر",
"بوحنيفية",
"تيزي",
"حسين",
"ماوسة",
"تيغنيف",
"الحشم",
"سيدي قادة",
"زلامطة",
"وادي الأبطال",
"عين فراح",
"غريس",
"فروحة",
"المطمور",
"ماقضة",
"سيدي بوسعيد",
"البرج",
"عين فكان",
"بنيان",
"خلوية",
"المنور",
"وادي تاغية",
"عوف",
"عين فارس",
"عين الفرس",
"سيق",
"عكاز",
"العلايمية",
"القعدة",
"زهانة",
"المحمدية",
"سيدي عبد المومن",
"فراقيق",
"الغمري",
"سجرارة",
"مقطع الدوز",
"بوهني",
"القطنة",
"المأمونية",
"القرط",
"غروس",
"قرجوم",
"الشرفاء",
"رأس عين عميروش",
"نسمط",
"سيدي عبد الجبار",
"السهايلية")
 code_com[30] = new Array
("تحديد البلدية",
"ورقلة",
"عين البيضاء",
"انقوسة",
"حاسي مسعود",
"الرويسات",
"سيدي خويلد",
"حاسي بن عبد الله",
"البرمة")
 code_com[31] = new Array
("تحديد البلدية",
"وهران",
"قديل",
"بئر الجير",
"حاسي بونيف",
"السانية",
"أرزيو",
"بطيوة",
"مرسى الحجاج",
"عين الترك",
"العنصر",
"وادي تليلات",
"طفراوي",
"سيدي الشحمي",
"بوفتيس",
"المرسى الكبير",
"بوصفر",
"الكرمة",
"البراية",
"حاسي بن عقبة",
"بن فريحة",
"حاسي مفسوخ",
"سيدي بن يبقى",
"مسرغين",
"بوتليليس",
"عين الكرمة",
"عين البية")
 code_com[32] = new Array
("تحديد البلدية",
"البيض",
"رقاصة",
"ستيتن",
"بريزينة",
"غسول",
"بوعلام",
"الأبيض سيدي الشيخ",
"عين العراك",
"اربوات",
"بوقطب",
"الخيثر",
"الكاف الأحمر",
"بوسمغون",
"شلالة",
"كراكدة",
"البنود",
"الشقيق",
"سيدي عمر",
"المحرة",
"توسمولين",
"سيدي سليمان",
"سيدي طيفور")
 code_com[33] = new Array
("تحديد البلدية",
"إيليزي",
"دبداب",
"برج عمر إدريس",
"إن أميناس")
 code_com[34] = new Array
("تحديد البلدية",
"برج بوعريرج",
"رأس الوادي",
"برج زمورة",
"المنصورة",
"المهير",
"بن داود",
"الياشير",
"عين تاغروت",
"برج غدير",
"سيدي مبارك",
"الحمادية",
"بليمور",
"مجانة",
"ثنية النصر",
"الجعافرة",
"الماين",
"أولاد أبراهيم",
"أولاد دحمان",
"حسناوة",
"خليل",
"تقلعيت",
"القصور",
"أولاد سيدي ابراهيم",
"تفرق",
"القلة",
"تيكستار",
"العش",
"العناصر",
"تسامرت",
"عين تسرة",
"بئر قصد علي",
"غيلاسة",
"الرابطة",
"حرازة")
 code_com[35] = new Array
("تحديد البلدية",
"بومرداس",
"بودواو",
"أعفير",
"برج منايل",
"بغلية",
"سيدي داود",
"الناصرية",
"جينات",
"يسر",
"زموري",
"سي مصطفى",
"تيجلابين",
"شعبة العامر",
"الثنية",
"تمزريت",
"قورصو",
"أولاد موسى",
"الاربعطاش",
"بوزقرة قدارة",
"تورقة",
"أولاد عيسى",
"بن شود",
"دلس",
"عمال",
"بني عمران",
"سوق الأحد",
"بودواو البحري",
"أولاد هداج",
"لقاطة",
"حمادي",
"خميس الخشنة",
"الخروبة")
 code_com[36] = new Array
("تحديد البلدية",
"الطارف",
"بوحجار",
"ابن مهيدي",
"بوقوس",
"القالة",
"عين العسل",
"العيون",
"بوثلجة",
"السواريخ",
"بريحان",
"بحيرة الطيور",
"الشافية",
"الذرغان",
"شهاني",
"شبايطة مختار",
"البسباس",
"عصفور",
"الشط",
"زريزر",
"الزيتونة",
"عين الكرمة",
"وادي الزيتون",
"حمام بن صالح",
"رمل السوق")
 code_com[37] = new Array
("تحديد البلدية",
"تندوف",
"أم العسل")
 code_com[38] = new Array
("تحديد البلدية",
"تيسمسيلت",
"برج بونعامة",
"ثنية الاحد",
"الأزهرية",
"بني شعيب",
"لرجام",
"ملعب",
"سيدي العنتري",
"برج الأمير عبد القادر",
"العيون",
"خميستي",
"أولاد بسام",
"عماري",
"اليوسفية",
"سيدي بوتوشنت",
"الأربعاء",
"المعاصم",
"سيدي عابد",
"تملاحت",
"سيدي سليمان",
"بوقايد",
"بني لحسن")
 code_com[39] = new Array
("تحديد البلدية",
"الوادي",
"الرباح",
"وادي العلندة",
"البياضة",
"النخلة",
"قمار",
"كوينين",
"الرقيبة",
"الحمراية",
"تغزوت",
"الدبيلة",
"حساني عبد الكريم",
"حاسي خليفة",
"الطالب العربي",
"دوار الماء",
"سيدي عون",
"الطريفاوي",
"المقرن",
"بن  قشة",
"ورماس",
"العقلة",
"اميه وانسة")
 code_com[40] = new Array
("تحديد البلدية",
"خنشلة",
"متوسة",
"قايس",
"بغاي",
"الحامة",
"عين الطويلة",
"تاوزيانت",
"بوحمامة",
"الولجة",
"الرميلة",
"ششار",
"جلال",
"ببار",
"طامزة",
"انسيغة",
"أولاد رشاش",
"المحمل",
"مصارة",
"يابوس",
"خيران",
"شلية")
 code_com[41] = new Array
("تحديد البلدية",
"سوق أهراس",
"سدراتة",
"الجنانشة",
"مشروحة",
"أولاد إدريس",
"تيفاش",
"الزعرورية",
"تاورة",
"الدريعة",
"الحدادة",
"لخضارة",
"المراهنة",
"أولاد مومن",
"بئر بوحوش",
"مداوروش",
"أم العظايم",
"عين الزانة",
"عين السلطان",
"ويلان",
"سيدي فرج",
"سافل الويدان",
"الرقوبة",
"خميسة",
"وادي الكبريت",
"ترقالت",
"الزوابي")
 code_com[42] = new Array
("تحديد البلدية",
"تيبازة",
"مناصر",
"الأرهاط",
"دواودة",
"بورقيقة",
"خميستي",
"أغبال",
"حجوط",
"سيدي عامر",
"قوراية",
"الناظور",
"الشعيبة",
"عين تاقورايت",
"شرشال",
"الداموس",
"مراد",
"فوكة",
"بواسماعيل",
"أحمر العين",
"بوهارون",
"سيدي غيلاس",
"مسلمون",
"سيدي راشد",
"القليعة",
"الحطاطبة",
"سيدي سميان",
"بني ميلك",
"حجرة النص")
 code_com[43] = new Array
("تحديد البلدية",
"ميلة",
"فرجيوة",
"شلغوم العيد",
"وادي العثمانية",
"عين ملوك",
"تلاغمة",
"وادي سقان",
"تاجنانت",
"أبن يحيى عبد الرحمن",
"وادي النجاء",
"أحمد راشدي",
"أولاد خلوف",
"تيبرقنت",
"بوحاتم",
"الرواشد",
"تسالة المطاعي",
"قرارم قوقة",
"سيدي مروان",
"تسادان حدادة",
"دراجي بوصالح",
"مينار زرزة",
"عميرة أراس",
"ترعي بايبان",
"حمالة",
"عين التين",
"المشيرة",
"سيدي خليفة",
"الزغاية",
"العيادي برباس",
"عين البيضاء حريش",
"يحيى بني قشة",
"السيقارة")
 code_com[44] = new Array
("تحديد البلدية",
"عين الدفلى",
"مليانة",
"بومدفع",
"خميس مليانة",
"حمام ريغة",
"عريب",
"جليدة",
"العامرة",
"بوراشد",
"العطاف",
"العبادية",
"جندل",
"وادي الشرفاء",
"عين الاشياخ",
"وادي جمعة",
"الروينة",
"زدين",
"الحسانية",
"بئر ولد خليفة",
"عين السلطان",
"طارق بن زياد",
"برج الأمير خالد",
"عين التركي",
"سيدي لخضر",
"إبن علال",
"عين البنيان",
"الحسينية",
"بربوش",
"جمعة أولاد الشيخ",
"المخاطرية",
"بطحية",
"تاشتة زقاغة",
"عين بويحيى",
"الماين",
"تبركانين",
"بالعاص")
 code_com[45] = new Array
("تحديد البلدية",
"النعامة",
"مشرية",
"عين الصفراء",
"تيوت",
"سفيسيفة",
"مغرار",
"عسلة",
"جنين بورزق",
"عين بن خليل",
"مكمن بن عمرو",
"قصدير",
"البيوض")
 code_com[46] = new Array
("تحديد البلدية",
"عين تيموشنت",
"شعبة اللحم",
"عين الكحيل",
"حمام بوحجر",
"بوزجار",
"وادي برقش",
"أغلال",
"تارقة",
"عين الأربعاء",
"تامزورة",
"شنتوف",
"سيدي بن عدة",
"عقب الليل",
"المالح",
"سيدي بومدين",
"وادي الصباح",
"أولاد بوجمعة",
"عين الطلبة",
"العامرية",
"حاسي الغلة",
"الحساسنة",
"أولاد كحيل",
"بني صاف",
"سيدي الصافي",
"ولهاصة الغرابة",
"سيدي أورياش",
"الأمير عبد القادر",
"المساعيد")
 code_com[47] = new Array
("تحديد البلدية",
"غرداية",
"ضاية بن ضحوة",
"بريان",
"منليلي",
"القرارة",
"العطف",
"زلفانة",
"سبسب",
"المنصورة",
"بونورة")
 code_com[48] = new Array
("تحديد البلدية",
"غليزان",
"وادي رهيو",
"بلعسل بوزقزة",
"سيدي سعادة",
"أولاد يعيش",
"سيدي لزرق",
"الحمادنة",
"سيدي أمحمد بن علي",
"مديونة",
"سيدي  خطاب",
"عمي موسى",
"زمورة",
"بني درقن",
"جديوية",
"القطار",
"حمري",
"المطمر",
"سيدي امحمد بن عودة",
"عين طارق",
"وادي السلام",
"واريزان",
"مازونة",
"القلعة",
"عين الرحمة",
"يلل",
"وادي الجمعة",
"الرمكة",
"منداس",
"لحلاف",
"بني زنطيس",
"سوق الحد",
"دار بن عبد الله",
"الحاسي",
"حد الشكالة",
"بن داود",
"الولجة",
"مرجة سيدي عابد",
"أولاد سيدي الميهوب")
 code_com[49] = new Array
("تحديد البلدية",
"تيميمون",
"أولاد السعيد",
"أوقروت",
"دلدول",
"المطارفة",
"تنركوك",
"قصر قدور",
"شروين",
"طالمين",
"أولاد عيسى")
 code_com[50] = new Array
("تحديد البلدية",
"برج باجي مختار",
"تيمياوين")
 code_com[51] = new Array
("تحديد البلدية",
"سيدي  خالد",
"رأس الميعاد",
"بسباس",
"أولاد جلال",
"الشعيبة",
"الدوسن")
 code_com[52] = new Array
("تحديد البلدية",
"بني عباس",
"تامترت",
"كرزاز",
"تمودي",
"بني يخلف",
"الوطاء",
"تبلبالة",
"أولاد خضير",
"قصابي",
"إيقلي")
 code_com[53] = new Array
("تحديد البلدية",
"عين صالح",
"فقارات الزاوية",
"عين غار")
 code_com[54] = new Array
("تحديد البلدية",
"عين قزام",
"تين زواتين")
 code_com[55] = new Array
("تحديد البلدية",
"تقرت",
"النزلة",
"تبسبست",
"الزاوية العابدية",
"تماسين",
"بلدة اعمر",
"المقارين",
"سيدي سليمان",
"الطيبات",
"المنقر",
"الحجيرة",
"العالية",
"إبن ناصر")
 code_com[56] = new Array
("تحديد البلدية",
"جانت",
"برج الحواس")
 code_com[57] = new Array
("تحديد البلدية",
"المغير",
"سيدي خليل",
"أم الطيور",
"سطيل",
"جامعة",
"سيدي عمران",
"تندلة",
"المرارة")
 code_com[58] = new Array
("تحديد البلدية",
"المنيعة",
"حاسي القارة",
"حاسي الفحل")







        function remplirVilles(code)
        {
            $('#dairas').empty();
            $('#communes').empty();
            
            var lesVilles = villes[code];
            var lesComs = code_com[code];            

            for (i=0; i<lesVilles.length; i++){
                // console.log(les_codeCom[i],lesVilles[i])
                $('<option/>').val(lesVilles[i]).text(lesVilles[i]).appendTo('#dairas')
                $('<option/>').val(lesComs[i]).text(lesComs[i]).appendTo('#communes')
            }

        }



    </script>


<script>

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
    </script>







    <script src="{{asset('cirm2/plugins/highlight/highlight.pack.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

</body>
</html>