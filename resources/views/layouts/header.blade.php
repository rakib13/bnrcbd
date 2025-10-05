<head>
    <meta charset="utf-8">
    <title>BNRC - Bangladesh Nationalist Research Centre</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon/favicon-96x96.png')}}" sizes="96x96" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}" />
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
        <img src="{{ asset('/img/logo-bnrc.png') }}" alt="Logo" width="200px">
        <img src="{{ asset('/img/pre-loader.gif') }}" alt="">
        <!-- <p>Loading...</p> -->
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
                            <a href="{{ route('archive') }}" target="_blank" class="text-light small"><i
                                    class="fas fa-archive text-white me-2"></i>
                                Archive </a>
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

                                <a href="./login" target="" class="text-light ps-5">
                                    <i class="fas fa-sign-in-alt text-white"></i>
                                    Member Login </a>
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
                        <a href="./" class="navbar-brand d-flex align-items-center p-0 me-0 ">
                            <img src="./img/nav-logo.png" alt="Logo BNRC">
                        </a>
                    </div> --}}
                    <a href="./" class="nav-item nav-link border-right active"><strong>Home</strong></a>
                    <!-- <a href="./about.html" class="nav-item nav-link"><strong>About BNRC</strong></a> -->
                    <!-- about navbar start -->
                    <div class="nav-item dropdown">
                        <a href="./about" class="nav-item nav-link dropdown-toggle" id="aboutDropdownToggle"
                            role="button" onclick="handleAboutClick(event)">
                            <span class="about-label">
                                <strong>About BNRC</strong>
                                <span class="arrow">▼</span>
                            </span>
                        </a>
                        <div class="dropdown-menu custom-dropdown-menu">
                            <div class="d-flex flex-row flex-wrap gap-2">
                                <!-- Main Buttons -->
                                <button class="custom-dropdown-btn active" onclick="showSection('mission', event)">
                                    Mission
                                </button>

                                <button class="custom-dropdown-btn" onclick="showSection('vision', event)">
                                    Vision
                                </button>

                                <button class="custom-dropdown-btn" onclick="showSection('formation', event)">
                                    Formation of BNRC
                                </button>

                                <button class="custom-dropdown-btn" onclick="showSection('functions', event)">
                                    Functions of BNRC
                                </button>
                            </div>

                            <!-- Leadership & Governance -->
                            <div class="position-relative mt-2">
                                <button class="custom-dropdown-btn" onclick="toggleSubmenu('lg-submenu')">
                                    Leadership & Governance
                                </button>
                                <div id="lg-submenu" class="submenu-column d-none">
                                    <button class="btn btn-link text-start w-100 my-1"
                                        onclick="showSection('leaders', event)">
                                        Our Supreme Leaders
                                    </button>
                                    <button class="btn btn-link text-start w-100 my-1"
                                        onclick="showSection('director', event)">
                                        Board of Directors
                                    </button>
                                    <button class="btn btn-link text-start w-100 my-1"
                                        onclick="showSection('ceo', event)">
                                        The Research Team
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- about navbar end -->
                    <!-- .........publication start................... -->
                    <div class="nav-item dropdown">
                        <a href="./publication" target="_blank" class="nav-link dropdown-toggle"><strong>Research
                                &
                                Publications</strong>
                            <span class="arrow">▼</span></a>
                        <div class="dropdown-menu custom-dropdown-menu">
                            <div class="d-flex flex-row flex-wrap gap-2 p-2">
                                <button class="custom-dropdown-btn active" data-target="featured"
                                    onclick="featuredSection(event)">
                                    Featured
                                </button>
                                <button class="custom-dropdown-btn" data-target="newsletters"
                                    onclick="featuredSection(event)">
                                    Newsletters
                                </button>
                                <button class="custom-dropdown-btn" data-target="conference-proceedings"
                                    onclick="featuredSection(event)">
                                    Conference Proceedings
                                </button>
                                <button class="custom-dropdown-btn" data-target="multimedia-resources"
                                    onclick="featuredSection(event)">
                                    Multimedia Resources
                                </button>

                            </div>
                        </div>
                    </div>
                    <!-- ..................publication end.................. -->
                    <div id="nav-logo">
                        <a href="./" class="navbar-brand d-flex align-items-center p-0 me-0 ">
                            <img src="./img/nav-logo.png" alt="Logo BNRC">
                        </a>
                    </div>
                    <!-- leadershiip legacy nav bar start -->
                    <div class="nav-item dropdown">
                        <a href="./leadership-legacy" target="_blank"
                            class="nav-link dropdown-toggle"><strong>Leadership
                                Legacy</strong>
                            <span class="arrow">▼</span></a>
                        <div class="dropdown-menu custom-dropdown-menu">
                            <div class="d-flex flex-row flex-wrap gap-2 p-2">
                                <button class="custom-dropdown-btn active" data-target="LeadershipLegacy"
                                    onclick="highlightLegacySection(event)">
                                    Leadership Legacy
                                </button>
                                <button class="custom-dropdown-btn" data-target="restoringdemocracy"
                                    onclick="highlightLegacySection(event)">
                                    Restoring Democracy
                                </button>
                                <button class="custom-dropdown-btn" data-target="economicadvancements"
                                    onclick="highlightLegacySection(event)">
                                    Economic Advancements
                                </button>
                                <button class="custom-dropdown-btn" data-target="socialdevelopment"
                                    onclick="highlightLegacySection(event)">
                                    Social Development
                                </button>
                                <button class="custom-dropdown-btn" data-target="environmental"
                                    onclick="highlightLegacySection(event)">
                                    Environmental Vision
                                </button>
                                <button class="custom-dropdown-btn" data-target="othersectors"
                                    onclick="highlightLegacySection(event)">
                                    Other Sectors
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- leadership legacy end -->
                    <a href="./share-your-thought" class="nav-item nav-link"><strong>Share your
                            thoughts</strong></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
