<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    {{-- <script src="https://unpkg.com/feather-icons"></script> --}}

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Vankine - Just another Html template</title>
    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <!-- Fav Icon -->
    <!-- Googel Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=DM+Sans%3A400%2C400i%2C500%2C500i%2C700%2C700i&amp;subset=latin%2Clatin-ext"
        type="text/css" media="all" />
    <!-- Googel Fonts -->
    <!-- Plugins -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/slick.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/select.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/owl.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/jquery.fancybox.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/rangeslider.css" type="text/css" media="all" />
    <!-- Plugins -->
    <!-- Vankine Styles -->
    <link rel="stylesheet" href="assets/css/global-settings.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/theme.css" type="text/css" media="all" />
    <!-- Vankine Styles -->
    <!-- Icon Styles -->
    <link rel="stylesheet" href="assets/css/plugins/uicons-regular-rounded.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/uicons-regular-straight.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/flaticon_vankine.css" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <!-- Icon Styles -->
    <!-- styling for demo purpose
    <link rel='stylesheet' href='assets/css/color-3.css' type='text/css' media='all' />
   styling for demo purpose -->
</head>

<body class="theme-vankine scrollbarcolor s_color_one">
    <div class="line_box_outer">
        <div class="lined"></div>
        <div class="lined two"></div>
        <div class="lined three"></div>
        <div class="lined four"></div>
        <div class="lined"></div>
    </div>
    <!----=============page_wapper=============---->
    <div id="page" class="page_wapper hfeed site">
        <!----=============page_wapper=============---->
        <!----=============Preloader=============---->
        <div class="loader-wrap color_one">
            <div class="preloader">
                <div class="preloader-close"><i class="fi-rr-cross"></i></div>
            </div>
            <div class="layer"></div>
            <div class="animation-preloader">
                <div class="spinner"></div>
            </div>
        </div>
        <!----=============Preloader end=============---->
        <!----=============Header=============---->
        <div class="header_area" id="header_contents">
            <header class="header-area header-style-5 htype_one">
                <div class="top_bar">
                    <div class="container">
                        <div class="row align-items-center flex-lg-nowrap">
                            <div class="flex-lg-fill col-md-6 col-sm-6 col-xs-12">
                                <div class="logo_box">
                                    <a href="#" class="logo navbar-brand">
                                        <img height="60" src="assets/images/logo/logo-becj-bicolor.png"
                                            alt="BECJ " class="logo_default" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-auto col-md-6 col-sm-6 col-xs-12">
                                <div class="d-flex align-items-center contact_header_one">
                                    <div class="icon_s">
                                        <i class="flaticon-pin"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="tite">Adresse</h6>
                                        <div class="title_no_a_20">576 hay El Qods Lot A Agadir</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-auto col-md-6 col-sm-6 col-xs-12">
                                <div class="d-flex align-items-center contact_header_one">
                                    <div class="icon_s">
                                        <i class="flaticon-black-back-closed-envelope-shape"></i>
                                    </div>

                                    <div class="content">
                                        <h6 class="tite">Email</h6>
                                        <div class="title_no_a_20">{{ $apropos->email }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-auto col-md-6 col-sm-6 col-xs-12">
                                <div class="d-flex align-items-center contact_header_one">
                                    <div class="icon_s">
                                        <i class="flaticon-telephone"></i>
                                    </div>

                                    <div class="content">
                                        <h6 class="tite">Téléphone</h6>
                                        <div class="title_no_a_20">{{ $apropos->telephone }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="medium-container position-relative">
                    <div class="main_header_content default_header">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-md-0 col-sm-0 col-xs-0 column_menu">
                                    <div class="navbar_content d-flex align-items-center">
                                        <ul class="navbar_nav">
                                            <li class="menu-item nav-item">
                                                <a href="#wrapper_full" class="nav_link">
                                                    <span class="text-link">Accueil</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item">
                                                <a href="#about" class="nav_link">
                                                    <span class="text-link">A propos de nous</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item">
                                                <a href="#services" class="nav_link">
                                                    <span class="text-link">Nos services</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item">
                                                <a href="#testimonials" class="nav_link" id="testimonial">
                                                    <span class="text-link">Témoignages</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 nav_tog_column">
                                    <div class="d-flex right_content align-items-center">
                                        <!--menu icon-->
                                        <div class="navbar_togglers hamburger_menu">
                                            <span class="line"></span>
                                            <span class="line"></span>
                                            <span class="line"></span>
                                        </div>
                                        <!--menu icon-->
                                        {{-- <div class="button">
                                            <a href="/facture/liste" class="theme_btn">
                                                Mon compte
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="blue"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                        </div> --}}
                                        <div class="theme_btn_all">
                                            <a href="#contact" class="theme_btn">
                                                Contactez-nous <span> <svg width="12" height="12"
                                                        viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="blue"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="nnn">
                    <header class="header-area header-style-1 htype_one">
                        <div class="main_header_content default_header">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xl-2 col-lg-12 col-md-5 col-sm-5 col-xs-5">
                                        <div class="logobox">
                                            <a href="index.html" class="logo navbar-brand">
                                                <img src="assets/images/Logo-green.png" alt="Vankine"
                                                    class="logo_default" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-9 col-md-0 col-sm-0 col-xs-0 column_menu">
                                        <div class="navbar_content d-flex align-items-center">
                                            <ul class="navbar_nav">
                                                <li class="menu-item nav-itemx">
                                                    <a href="index.html" class="nav_link">
                                                        <span class="text-link"> Home </span>
                                                    </a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                    <a href="#" class="nav_link">
                                                        <span class="text-link"> Pages </span>
                                                    </a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                    <a href="#" class="nav_link">
                                                        <span class="text-link"> Services </span>
                                                    </a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                    <a href="#" class="nav_link">
                                                        <span class="text-link"> Portfolio </span>
                                                    </a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                    <a href="blog.html" class="nav_link">
                                                        <span class="text-link"> Blog </span>
                                                    </a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                    <a href="{{ route('login') }}" class="nav_link">
                                                        <span class="text-link"> Contact </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-md-7 col-sm-7 col-xs-7 nav_tog_column">
                                        <div class="d-flex right_content align-items-center">
                                            <!--menu icon-->
                                            <div class="navbar_togglers hamburger_menu">
                                                <span class="line"></span>
                                                <span class="line"></span>
                                                <span class="line"></span>
                                            </div>
                                            <!--menu icon-->
                                            <div class="button">
                                                <a href="#" class="theme_btn">
                                                    Se Connecter
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="white"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                </div> --}}
            </header>
        </div>
        <!----=============Header end=============---->
        <!----==============sticky header==============--->
        <div class="sticky_header_area sticky_header_content color_one">
            <header class="header-area header-style-1 htype_one">
                <div class="main_header_content default_header">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2 col-md-5 col-sm-5 col-xs-5">
                                <div class="logobox">
                                    <a href="#" class="logo navbar-brand">
                                        <img height="50" src="assets/images/logo/logo-becj-bicolor.png"
                                            alt="BECJ " class="logo_default" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-0 col-sm-0 col-xs-0 column_menu">
                                <div class="navbar_content d-flex align-items-center">
                                    <ul class="navbar_nav">
                                        <li class="menu-item nav-item">
                                            <a href="#banner" class="nav_link">
                                                <span class="text-link">Accueil</span>
                                            </a>
                                        </li>
                                        <li class="menu-item nav-item">
                                            <a href="#about" class="nav_link">
                                                <span class="text-link">A propos de nous</span>
                                            </a>
                                        </li>
                                        <li class="menu-item nav-item">
                                            <a href="#services" class="nav_link">
                                                <span class="text-link">Nos services</span>
                                            </a>
                                        </li>
                                        <li class="menu-item nav-item">
                                            <a href="#testimonials" class="nav_link" id="testimonial">
                                                <span class="text-link">Témoignages</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-7 col-sm-7 col-xs-7 nav_tog_column">
                                <div class="d-flex right_content align-items-center">
                                    <!--menu icon-->
                                    <div class="navbar_togglers hamburger_menu">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                    <!--menu icon-->
                                    <div class="button">
                                        <a href="#contact" class="theme_btn">
                                            Contactez-nous
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!----==============sticky header end==============--->
        <!----==============content_all_warpper==============--->
        <div id="wrapper_full" class="content_all_warpper">
            <!----==============content_all_warpper==============--->
            <!--content start-->
            <div id="content" class="site-content">
                <!---slider-->
                <div class="slider style_five">
                    <div class="tab_content_slick">
                        <div class="slide-item-content">
                            <div class="image-layer"
                                style="background-image: url(https://job-industrie.com/wp-content/uploads/2019/04/business-3152586_1920.jpg)">
                            </div>
                            <div class="slide-item content_left">
                                <div class="auto-container">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 text-center">
                                            <div class="slider_content">

                                                <h1 class="animate_left">Expertise en comptabilité et en fiscalité</h1>
                                                <h6 class="animate_up">
                                                    Nous avons des connaissances approfondie des lois fiscales et
                                                    comptables. Nous pouvons vous assurer que vos finances sont en règle
                                                    et que vous respectez toutes les réglementations fiscales et
                                                    comptables.
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item-content">
                            <div class="image-layer"
                                style="background-image: url(https://job-industrie.com/wp-content/uploads/2019/04/business-3152586_1920.jpg)">
                            </div>
                            <div class="slide-item content_left">
                                <div class="auto-container">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 text-center">
                                            <div class="slider_content">

                                                <h1 class="animate_left">Réduction des coûts</h1>
                                                <h6 class="animate_up">
                                                    Nous pouvons vous aider à réduire les coûts pour votre entreprise et
                                                    également vous aider à identifier les domaines où des
                                                    investissements peuvent être nécessaires pour améliorer l'efficacité
                                                    de votre entreprise.
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item-content">
                            <div class="image-layer"
                                style="background-image: url(https://job-industrie.com/wp-content/uploads/2019/04/business-3152586_1920.jpg)">
                            </div>
                            <div class="slide-item content_left">
                                <div class="auto-container">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 text-center">
                                            <div class="slider_content">

                                                <h1 class="animate_left">Confidentialité et sécurité</h1>
                                                <h6 class="animate_up">La confidentialité et la sécurité des
                                                    informations financières sont essentielles pour toute entreprise.
                                                    Nous somme tenus de respecter des normes strictes de confidentialité
                                                    et de sécurité, ce qui garantit que vos informations financières
                                                    sont protégées.</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab_postion_absolute">
                        <div class="container">
                            <div class="slider tab_slick">
                                <div class="title">
                                    <h3>Expertise</h3>
                                </div>
                                <div class="title">
                                    <h3>Économie</h3>
                                </div>
                                <div class="title">
                                    <h3>Confidentialité</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---slider end-->
                <!--about-->
                <section id="about" class="about-section">
                    <!---============spacing==========--->
                    <div class="pd_top_90"></div>
                    <!---============spacing==========--->
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 pd_right_60">
                                <div class="section_title">
                                    <h4 class="sm_title">Chez BECJ</h4>
                                    <div class="title_whole">
                                        <h2 class="title">{{ $apropos->titre }}</h2>
                                    </div>

                                    <p>{{ $apropos->description }}</p>
                                </div>
                                <!---============spacing==========--->
                                <div class="pd_bottom_25"></div>
                                <!---============spacing==========--->
                                <div class="position-relative">
                                    <ul class="list_box list">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="icon trans">
                                                    <i aria-hidden="false" class="fas fa-check-circle"></i>
                                                </div>
                                                <a class="links" href="#"> {{ $apropos->element_1 }} </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="icon trans">
                                                    <i aria-hidden="false" class="fas fa-check-circle"></i>
                                                </div>
                                                <a class="links" href="#"> {{ $apropos->element_2 }}
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="icon trans">
                                                    <i aria-hidden="false" class="fas fa-check-circle"></i>
                                                </div>
                                                <a class="links" href="#"> {{ $apropos->element_3 }}
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!---============spacing==========--->

                                <!---============spacing==========--->
                                <div class="pd_bottom_25"></div>
                                <!---============spacing==========--->
                            </div>
                            <div class="col-lg-4 col-md-8 mr_left_minus_40">
                                <div class="image_video_box_only type_two">
                                    <div class="image one">
                                        <img src="https://job-industrie.com/wp-content/uploads/2019/04/business-3152586_1920.jpg"
                                            alt="img" class="imf-fluid" />

                                        <div class="fun_facts type_two">
                                            <h6 class="title_no_a_18">
                                                <small>+</small>{{ $apropos->annees_experience }}
                                            </h6>
                                            <h6 class="title_no_a_26">
                                                Ans <br />
                                                d'expérience
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 pd_left_30">
                                <div class="fun_facts type_one text-start">
                                    <h4>
                                        <span class="count">{{ $apropos->chiffre_1 }}</span>
                                        <small> + </small>
                                    </h4>
                                    <h6 class="title_no_a_18">{{ $apropos->titre_1 }}</h6>
                                </div>
                                <!---============spacing==========--->
                                <div class="pd_bottom_20"></div>
                                <div class="divider"></div>
                                <div class="mr_bottom_20"></div>
                                <!---============spacing==========--->
                                <div class="fun_facts type_one text-start">
                                    <h4>
                                        <span class="count">{{ $apropos->chiffre_2 }}</span>
                                        <small> + </small>
                                    </h4>
                                    <h6 class="title_no_a_18">{{ $apropos->titre_2 }}</h6>
                                </div>
                                <!---============spacing==========--->
                                <div class="pd_bottom_20"></div>
                                <div class="divider"></div>
                                <div class="mr_bottom_20"></div>
                                <!---============spacing==========--->
                                <div class="fun_facts type_one text-start">
                                    <h4>
                                        <span class="count">{{ $apropos->chiffre_3 }}</span>
                                        <small> + </small>
                                    </h4>
                                    <h6 class="title_no_a_18">{{ $apropos->titre_3 }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_90"></div>
                    <!---============spacing==========--->
                </section>
                <!--about end-->

                <!---service-->
                <section id="services" class="service-section position-relative bg_2 overflow-hidden">
                    <!---============spacing==========--->
                    <div class="pd_top_80"></div>
                    <!---============spacing==========--->
                    <div class="ab_img_left_top mr_top_minus_40 z_0">
                        <img src="assets/images/shape/wave-pattern-2.png" class="img-fluid" alt="img">
                    </div>
                    <div class="position-relative z_1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 m-auto">
                                    <div class="section_title text-center type_one color_white">
                                        <h4 class="sm_title">Services adaptés pour vous</h4>
                                        <div class="title_whole">
                                            <h2 class="title"> Services et Spécialités</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_40"></div>
                            <!---============spacing==========--->
                            <div class="row">
                                @foreach ($services as $Sr)
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 d-flex">
                                        <div
                                            class="service_box type_five style_two icon_box_only type_three trans d-flex">
                                            <div class="icon_inner trans">
                                                <div class="d-flex trans">
                                                    <div class="icon trans">
                                                        <i class="" data-feather="{{ $Sr->icone }}"></i>
                                                    </div>
                                                    <div class="content">
                                                        <div class="title_22">
                                                            <a href="service.html">{{ $Sr->titre }}</a>
                                                        </div>
                                                        <p class="trans">
                                                            {{ $Sr->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="ab_img_right_bottom mr_bottom_minus_250 z_0">
                        <img src="assets/images/shape/wave-pattern-1.png" class="img-fluid" alt="img">
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_80"></div>
                    <!---============spacing==========--->

                </section>
                <!---service end-->

                <!--client-->
                <!--divider-->
                <!-- <div class="divider"></div> -->
                <!--divider-->
                <!--testimonial-section-->

                <!--testimonial-section-->
                <section id="testimonials" class="testimonial-section bg_op_5"
                    style="background-image: url(assets/images/map-frame-2.png)">
                    <!---============spacing==========--->
                    <div class="pd_top_90"></div>
                    <!---============spacing==========--->
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 pd_right_60">
                                <div class="image_box_only type_six color_one">
                                    <div class="image one">
                                        <img src="https://job-industrie.com/wp-content/uploads/2019/04/business-3152586_1920.jpg"
                                            alt="img" class="img-fluid" />
                                        <div class="content text-center">
                                            <a href="#">
                                                <svg width="55" height="55" viewBox="0 0 55 55"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="28" cy="27" r="20"
                                                        fill="white"></circle>
                                                    <circle cx="27.5" cy="27.5" r="27.5"
                                                        fill="white" fill-opacity="0.1"></circle>
                                                    <path d="M22 33.25L33.25 22M33.25 22H24.8125M33.25 22V30.4375"
                                                        stroke="#1340dd" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                                <h6 class="title_no_a_20">
                                                    Nous avons plus de 100+ clients
                                                </h6>
                                                <svg width="71" height="7" viewBox="0 0 71 7" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M61.3463 7C58.7897 7 57.4874 5.61327 56.3384 4.38975C55.301 3.28482 54.4815 2.41206 52.7303 2.41206C50.979 2.41206 50.1595 3.28482 49.1219 4.38975C47.9731 5.61327 46.6709 7 44.1141 7C41.5573 7 40.2553 5.61327 39.1063 4.38975C38.0689 3.28482 37.2495 2.41206 35.4983 2.41206C33.7472 2.41206 32.9278 3.28482 31.8905 4.38975C30.7416 5.61327 29.4394 7 26.8826 7C24.3262 7 23.0243 5.61327 21.8755 4.38975C20.8383 3.28482 20.0189 2.41206 18.268 2.41206C16.517 2.41206 15.6976 3.28482 14.6602 4.38975C13.5114 5.61327 12.2091 7 9.65253 7C7.09575 7 5.79352 5.61327 4.64453 4.38975C3.60713 3.28482 2.78775 2.41206 1.03653 2.41206C0.464193 2.41206 0 1.87216 0 1.20603C0 0.540101 0.464193 0 1.03653 0C3.59314 0 4.89537 1.38673 6.04436 2.61025C7.08176 3.71518 7.90131 4.58794 9.65253 4.58794C11.4036 4.58794 12.223 3.71518 13.2604 2.61045C14.4092 1.38673 15.7114 0 18.268 0C20.8244 0 22.1265 1.38693 23.2753 2.61045C24.3125 3.71538 25.1317 4.58794 26.8826 4.58794C28.6338 4.58794 29.4532 3.71518 30.4906 2.61045C31.6394 1.38673 32.9417 0 35.4983 0C38.0551 0 39.3571 1.38673 40.5061 2.61045C41.5435 3.71518 42.3631 4.58794 44.1141 4.58794C45.8655 4.58794 46.6849 3.71518 47.7223 2.61045C48.8713 1.38673 50.1735 0 52.7303 0C55.287 0 56.5893 1.38673 57.7383 2.61045C58.7757 3.71518 59.595 4.58794 61.3463 4.58794C63.0978 4.58794 63.9174 3.71518 64.9551 2.61025C66.1041 1.38673 67.4065 0 69.9635 0C70.5358 0 71 0.540101 71 1.20603C71 1.87216 70.5358 2.41206 69.9635 2.41206C68.2119 2.41206 67.3924 3.28482 66.3546 4.38975C65.2056 5.61327 63.9034 7 61.3463 7Z"
                                                        fill="white"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="section_title pd_left_20">
                                    <h4 class="sm_title">Témoignages clients</h4>
                                    <div class="title_whole">
                                        <h2 class="title">Des commentaires sur nos services</h2>
                                    </div>
                                </div>
                                <!---============spacing==========--->
                                <div class="pd_bottom_30"></div>
                                <!---============spacing==========--->
                                <div
                                    class="testimonial_carousel position-relative position_one nav_false dot_true dot_left color_one">
                                    <div class="theme_carousel owl-theme owl-carousel"
                                        data-options='{"loop": true, "margin": 0,  "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": false, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "240" :{ "items" : "1" } , "550" :{ "items" : "1" } , "768" :{ "items" : "1" } , "1024":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                                        @foreach ($avis as $av)
                                            <div class="testimonial_box type_two type_three color_one">
                                                <div class="auth d-flex align-items-center clearfix">
                                                    <div class="image_box">
                                                        <img src="assets/images/testimonial/testimonial-image-1.jpg"
                                                            class="img-fluid" alt="image" />
                                                    </div>
                                                    <div class="cont">
                                                        <h4 class="title_no_a_24">{{ $av->titre }}</h4>
                                                        <p>{{ $av->sous_titre }}</p>
                                                    </div>
                                                </div>
                                                <div class="title_no_a_22 t_comment">
                                                    <sup>“</sup>{{ $av->texte }}<sub>“</sub>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_90"></div>
                    <!---============spacing==========--->
                </section>
                <!--testimonial-section-->

                <div class="divider"></div>


                <div class="pd_bottom_90"></div>
                <section id="contact" class="form-section mr_bottom_minus_250 position-relative z_1"
                    style="margin-bottom: 0;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12">
                                <div class="contact_form_box_all style_one bg_2 bg_op_4 mr_right_40 z_1"
                                    style="background-image: url(assets/images/form-shape-1.png);">
                                    <div class="section_title color_white type_one">
                                        <h4 class="sm_title">Avez-vous une question ?</h4>
                                        <div class="title_whole">
                                            <h2 class="title">N'hésitez pas de nous contacter</h2>
                                        </div>
                                    </div>
                                    <div class="contact_form_shortcode">
                                        <form method="post" action="#">
                                            <div class="forms-field-name mr_bottom_20">
                                                <input type="text" name="name" placeholder="Nom complet"
                                                    spellcheck="false" required="">
                                            </div>
                                            <div class="forms-field-email mr_bottom_20">
                                                <input type="text" name="email" placeholder="Email"
                                                    spellcheck="false" required="">
                                            </div>
                                            <div class="forms-field-email mr_bottom_20">
                                                <input type="tel" name="tel" placeholder="Téléphone"
                                                    spellcheck="false">
                                            </div>
                                            <div class="forms-field-Dropdown mr_bottom_40">
                                                <select name="subject">
                                                    <option value="" class="placeholder" disabled=""
                                                        selected="selected">Sujet</option>
                                                    <option value="compta">Comptabilité</option>
                                                    <option value="juridique">Conseil juridique</option>
                                                    <option value="info">Demande d'informations</option>
                                                </select>
                                            </div>
                                            <div class="forms-field-name mr_bottom_20">
                                                <textarea name="message" placeholder="Message" style="height: 100px !important" required=""></textarea>
                                            </div>
                                            <button type="submit" class="theme_btn">Envoyer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mr_left_minus_100">
                                <div class="image_box_only type_nine">
                                    <img src="https://job-industrie.com/wp-content/uploads/2019/04/business-3152586_1920.jpg"
                                        class="img-fluid" alt="img" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--news section-->
                <div class="pd_bottom_90"></div>
                <section id="blog" class="news-section bg_light_2 position-relative">
                    <div class="ab_img_right_top z_1">
                        <img src="assets/images/line.png" class="img-fluid" alt="img">
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_top_90"></div>
                    <!---============spacing==========--->
                    <div class="container z_1 position-relative">
                        <div class="row">
                            <div class="col-lg-8 m-auto">
                                <div class="section_title text-center type_one">
                                    <h4 class="sm_title">Nouveautés</h4>
                                    <div class="title_whole">
                                        <h2 class="title">Nos derniers articles</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---============spacing==========--->
                        <div class="pd_bottom_40"></div>
                        <!---============spacing==========--->
                        <div class="blog_post position-relative">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog_box type_one trans hover_1_get borenable">
                                        <div class="blog_inner trans">
                                            <div class="vertical_text_1">
                                                <span class="date_tm"><i class="fi-rr-calendar"></i> <time
                                                        class="date published" datetime="2023-12-29T10:06:24+00:00">29
                                                        Déc
                                                        2023</time></span>
                                            </div>
                                            <div class="image_box trans hover_1">
                                                <a href="#">
                                                    <img src="https://job-industrie.com/wp-content/uploads/2019/04/business-3152586_1920.jpg"
                                                        alt="image" class="img-fluid">
                                                </a>
                                                <div class="oh ho_1"></div>
                                                <div class="oh ho_2"></div>
                                                <div class="oh ho_3"></div>
                                                <div class="oh ho_4"></div>
                                            </div>
                                            <div class="content">
                                                <h4 class="title_22">
                                                    <a href="#">Rôle des fiduciaires dans la gestion fiscale et
                                                        comptable</a>
                                                </h4>
                                                <p class="descs">
                                                    Cet article met en lumière le rôle des fiduciaires à Agadir en
                                                    matière de fiscalité, de comptabilité et de conseils juridiques...
                                                </p>
                                                <a href="#" class="rd_more">Lire plus<i
                                                        class="fi-rr-arrow-small-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog_box type_one trans hover_1_get borenable">
                                        <div class="blog_inner trans">
                                            <div class="vertical_text_1">
                                                <span class="date_tm"><i class="fi-rr-calendar"></i> <time
                                                        class="date published" datetime="2023-12-29T10:06:24+00:00">29
                                                        Déc
                                                        2023</time></span>
                                            </div>
                                            <div class="image_box trans hover_1">
                                                <a href="#">
                                                    <img src="https://job-industrie.com/wp-content/uploads/2019/04/business-3152586_1920.jpg"
                                                        alt="image" class="img-fluid">
                                                </a>
                                                <div class="oh ho_1"></div>
                                                <div class="oh ho_2"></div>
                                                <div class="oh ho_3"></div>
                                                <div class="oh ho_4"></div>
                                            </div>
                                            <div class="content">
                                                <h4 class="title_22">
                                                    <a href="#">Rôle des fiduciaires dans la gestion fiscale et
                                                        comptable</a>
                                                </h4>
                                                <p class="descs">
                                                    Cet article met en lumière le rôle des fiduciaires à Agadir en
                                                    matière de fiscalité, de comptabilité et de conseils juridiques...
                                                </p>
                                                <a href="#" class="rd_more">Lire plus<i
                                                        class="fi-rr-arrow-small-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog_box type_one trans hover_1_get borenable">
                                        <div class="blog_inner trans">
                                            <div class="vertical_text_1">
                                                <span class="date_tm"><i class="fi-rr-calendar"></i> <time
                                                        class="date published" datetime="2023-12-29T10:06:24+00:00">29
                                                        Déc
                                                        2023</time></span>
                                            </div>
                                            <div class="image_box trans hover_1">
                                                <a href="#">
                                                    <img src="https://job-industrie.com/wp-content/uploads/2019/04/business-3152586_1920.jpg"
                                                        alt="image" class="img-fluid">
                                                </a>
                                                <div class="oh ho_1"></div>
                                                <div class="oh ho_2"></div>
                                                <div class="oh ho_3"></div>
                                                <div class="oh ho_4"></div>
                                            </div>
                                            <div class="content">
                                                <h4 class="title_22">
                                                    <a href="#">Rôle des fiduciaires dans la gestion fiscale et
                                                        comptable</a>
                                                </h4>
                                                <p class="descs">
                                                    Cet article met en lumière le rôle des fiduciaires à Agadir en
                                                    matière de fiscalité, de comptabilité et de conseils juridiques...
                                                </p>
                                                <a href="#" class="rd_more">Lire plus<i
                                                        class="fi-rr-arrow-small-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_70"></div>
                    <!---============spacing==========--->
                </section>
                <!--news section-->
            </div>
            <!--content end-->
            <!--footer start-->

            <!----==============content_all_warpper==============--->
        </div>
        <!----==============content_all_warpper end==============--->
        <!----=============page_wapper end=============---->
        <!---footer start--->
        <footer class="footer style_four">
            <!---============spacing==========--->
            <div class="pd_top_80"></div>
            <!---============spacing==========--->
            <section class="container">
                <div class="call_to_action style_one">
                    <div class="section_title type_one">
                        <div class="title_whole">
                            <h2 class="title">
                                Avec BECJ, votre avenir financier entre de bonnes mains
                            </h2>
                        </div>
                    </div>
                    <div class="theme_btn_all">
                        <a href="#contact" class="theme_btn">
                            Contactez-nous <span> <i class=" fi-rr-arrow-small-up"></i></span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center contact_header_one">
                        <div class="icon_s">
                            <i class=" fi-rr-headphones"></i>
                        </div>
                        <div class="content">
                            <h6 class="tite">Besoin d'aide?</h6>
                            <div class="title_20"><a href="tel:+000(123)45688">{{ $apropos->telephone }}</div>
                        </div>
                    </div>
                </div>

            </section>
            <!---============spacing==========--->
            <div class="pd_bottom_50"></div>
            <!---============spacing==========--->
            <section class="mid_content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list_box text-center linline">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icon trans"></div>
                                        <a class="links color_white" href="#wrapper_full">
                                            Accueil </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icon trans"></div>
                                        <a class="links color_white" href="#about">
                                            A propos de nous </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icon trans"></div>
                                        <a class="links color_white" href="#services">
                                            Nos services </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icon trans"></div>
                                        <a class="links color_white" href="#testimonials">
                                            Témoignages </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!---============spacing==========--->
            <div class="pd_bottom_50"></div>
            <!---============spacing==========--->
            <section class="container">
                <div class="bottom_content">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="logo_box">
                                <a href="#" class="logo navbar-brand">
                                    <img height="50" src="assets/images/logo/logo-becj-light.png" alt="BECJ "
                                        class="logo_default" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 text-md-end">
                            <div class="position-relative color_white">
                                2023 © BECJ | Tous droits réservés</div>
                        </div>
                    </div>

                </div>
            </section>
            <!---============spacing==========--->
            <div class="pd_bottom_80"></div>
            <!---============spacing==========--->
            <div class="pattern_2">
                <img src="assets/images/pattern-3.png" class="img-fluid" alt="img" />
            </div>
        </footer>
        <!--footer end---
        <!----=================Script================---->
        <script>
            feather.replace()
        </script>
        <script type="text/javascript" src="assets/js/plugins/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/appear.js"></script>
        <script type="text/javascript" src="assets/js/plugins/TweenMax.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/waypoints.js"></script>
        <script type="text/javascript" src="assets/js/plugins/select.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/jquery.fancybox.js"></script>
        <script type="text/javascript" src="assets/js/plugins/isotope.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/owl.js"></script>
        <script type="text/javascript" src="assets/js/plugins/sharer.js"></script>
        <script type="text/javascript" src="assets/js/plugins/rangeslider.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/counterup.js"></script>
        <script type="text/javascript" src="assets/js/plugins/slick.js"></script>
        <script type="text/javascript" src="include/validator.min.js"></script>
        <script type="text/javascript" src="include/contact.js"></script>
        <!-- map script -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
        <script src="assets/js/gmaps.js"></script>
        <script src="assets/js/map-helper.js"></script>
        <!-- main-js -->
        <script type="text/javascript" src="assets/js/main.js"></script>
        <!----=================Script================---->
</body>

</html>
