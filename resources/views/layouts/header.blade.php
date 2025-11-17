<head>
    <meta charset="utf-8">
    <title>BNRC - Bangladesh Nationalist Research Centre</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon/favicon-96x96.png')}}" sizes="96x96" />


    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> --}}
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
<div id="preloader">
    <div class="loader-box">
        <img src="{{ asset('/img/logo-bnrc.png') }}" class="pre-logo" alt="Logo">

        <div class="loading-dots">
            <span>■</span>
            <span>■</span>
            <span>■</span>
            <span>■</span>
            <span>■</span>
        </div>
    </div>
</div>
    <!-- Spinner End -->


    <!-- End Top Page -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar px-0 px-lg-4 py-1 d-none d-lg-block">
        <div class="container">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <div class="border-end border-danger pe-3">
                            <a href="https://roadtodemocracy.com/" target="_blank" class="text-light small"><i
                                    class=" fas fa-file-archive text-white me-2"></i> RTD
                            </a>
                        </div>
                        <div class="ps-3">
                            {{-- <a href="{{ url('archive') }}" target="_blank" class="text-light small"><i
                                    class="fas fa-archive text-white me-2"></i> --}}
                                 </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex justify-content-end">
                        <div class="d-flex border-end border-white pe-2">
                            <a class="btn p-0 text-primary me-3" href="https://www.facebook.com/bnrc.org"
                                target="_blank"><i class="fab fa-facebook-f text-white "></i></a>
                            <a class="btn p-0 text-primary me-3" href="#"><i
                                    class="fab fa-twitter text-white "></i></a>
                            <a class="btn p-0 text-primary me-3" href="https://www.instagram.com/bnrcbd" target="_blank"><i
                                    class="fab fa-instagram text-white "></i></a>
                            <a class="btn p-0 text-primary me-0" href="https://www.linkedin.com/company/bnrcbd" target="_blank"><i
                                    class="fab fa-linkedin-in text-white "></i></a>
                        </div>
                        <div class="input-group input-group-sm ms-2">
                            <div class="input-group-append">
                                <button class="btn ps-2 pt-1 pe-2 pb-1 m-0" type="button" onclick="searchDocument()">
                                    <i class=" fas fa-search text-white"></i></button>

                                {{-- <a href="./login" class="text-light ps-5">
                                    <i class="fas fa-sign-in-alt text-white"></i>
                                    Member Login </a> --}}
                            </div>
                            <div class="ps-6">

                            </div>

                            <!-- Show result count -->
                            <div id="resultCount" class="fw-bold mt-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid nav-bar px-lg-0 px-md-0 px-sm-1">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div id="top-logo" class="px-1 py-1 shadow shadow-1 rounded-pill">
                <a href="#" class="navbar-brand d-flex align-items-center p-0 me-0 ">
                    <img src="{{ asset('/img/nav-logo.png') }}" alt="Logo BNRC">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-0 mx-lg-auto">
                    {{-- <div id="nav-logo">
                        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center p-0 me-0">
                            <img src="{{ asset('img/nav-logo.png') }}" alt="Logo BNRC" class="img-fluid">
                        </a>
                    </div> --}}
                    {{-- <a href="{{ url('/') }}" class="nav-item nav-link border-right active"><strong>Home</strong></a> --}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active-home' : '' }}" href="{{ url('/') }}">
                        <strong>Home</strong>
                    </a>
                </li>
                    <!-- <a href="./about.html" class="nav-item nav-link"><strong>About BNRC</strong></a> -->
                    <!-- about navbar start -->
                    <div class="nav-item dropdown">
                        <a href="{{ url('/about/mission') }}" class="nav-item nav-link" data-bs-toggle="dropdown">
                            <span class="about-label">
                                <strong>About BNRC</strong>
                                {{-- <span class="arrow">▼</span> --}}
                            </span>
                        </a>
                    
                        <div class="dropdown-menu custom-dropdown-menu">
                    
                            <div class="d-flex flex-row flex-wrap gap-2">
                                <!-- Main Pages -->
                                <a href="{{ url('/about/mission') }}" class="custom-dropdown-btn">
                                    Mission
                                </a>
                    
                                <a href="{{ url('/about/vision') }}" class="custom-dropdown-btn">
                                    Vision
                                </a>
                    
                                <a href="{{ url('/about/formation') }}" class="custom-dropdown-btn">
                                    Formation of BNRC
                                </a>
                    
                                <a href="{{ url('/about/functions') }}" class="custom-dropdown-btn">
                                    Functions of BNRC
                                </a>
                            </div>
                    
                            <!-- Leadership & Governance -->
                            <div class="position-relative mt-2">
                                <button class="custom-dropdown-btn" onclick="toggleSubmenu('lg-submenu')">
                                    Leadership & Governance
                                </button>
                    
                                <div id="lg-submenu" class="submenu-column d-none">
                    
                                    <a href="{{ url('/about/leaders') }}" class="btn btn-link text-start w-100 my-1">
                                        Our Supreme Leaders
                                    </a>
                    
                                    <a href="{{ url('/about/director') }}" class="btn btn-link text-start w-100 my-1">
                                        Board of Directors
                                    </a>
                    
                                    <a href="{{ url('/about/researchteam') }}" class="btn btn-link text-start w-100 my-1">
                                        The Research Team
                                    </a>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                    <!-- about navbar end -->
                    <!-- .........publication start................... -->
                    <div class="nav-item dropdown">
                        <a class="nav-link"><strong>Research & Publications</strong>
                            {{-- <span class="arrow">▼</span> --}}
                        </a>
                    
                        <div class="dropdown-menu custom-dropdown-menu">
                            <div class="d-flex flex-row flex-wrap gap-2 p-2">
                    
                                <a href="{{ route('publication.featured') }}" class="custom-dropdown-btn">Featured</a>
                    
                                <a href="{{ route('publication.newsletters') }}" class="custom-dropdown-btn">Newsletters</a>
                    
                                <a href="{{ route('publication.conference') }}" class="custom-dropdown-btn">Conference Proceedings</a>
                    
                                <a href="{{ route('publication.multimedia') }}" class="custom-dropdown-btn">Multimedia Resources</a>
                    
                            </div>
                        </div>
                    </div>
                    <!-- ..................publication end.................. -->
                    {{-- <div id="nav-logo">
                        <a href="./" class="navbar-brand d-flex align-items-center p-0 me-0 ">
                            <img src="./img/nav-logo.png" alt="Logo BNRC">
                        </a>
                    </div> --}}
                    <div id="nav-logo">
                        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center p-0 me-0">
                            <img src="{{ asset('img/nav-logo.png') }}" alt="Logo BNRC" class="img-fluid">
                        </a>
                    </div>
                    <!-- leadershiip legacy nav bar start -->
                    <div class="nav-item dropdown">
                        <a class="nav-link">
                            <strong>Leadership Legacy</strong>
                            {{-- <span class="arrow">▼</span> --}}
                        </a>
                    
                        <div class="dropdown-menu custom-dropdown-menu">
                            <div class="d-flex flex-row flex-wrap gap-2 p-2">
                    
                                <a href="{{ route('leadership.leadershiplegacy') }}" class="custom-dropdown-btn">Leadership Legacy</a>
                    
                                <a href="{{ route('leadership.restoringdemocracy') }}" class="custom-dropdown-btn">Restoring Democracy</a>
                    
                                <a href="{{ route('leadership.economicadvancements') }}" class="custom-dropdown-btn">Economic Advancements</a>
                    
                                <a href="{{ route('leadership.socialdevelopment') }}" class="custom-dropdown-btn">Social Development</a>
                    
                                <a href="{{ route('leadership.environmental') }}" class="custom-dropdown-btn">Environmental Vision</a>
                    
                                <a href="{{ route('leadership.othersectors') }}" class="custom-dropdown-btn">Other Sectors</a>
                    
                            </div>
                        </div>
                    </div>
                    <!-- leadership legacy end -->
                    <a href="{{ url('/share-your-thought') }}" class="nav-item nav-link"><strong>Share your
                            thoughts</strong></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
