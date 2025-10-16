@extends('layouts.main-body')

@section('main-body-content')
    <!-- Banner Design -->
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        {{-- <div class="header-carousel-item bg-banner">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <h4 class="text-danger text-uppercase fw-bold mb-4">Welcome To BNRC</h4>
                            <h1 class="display-4 text-danger mb-4">Bangladesh Nationalist Research Centre</h1>
                            <h5 class="text-danger text-uppercase fw-bold mb-4">Advancing Knowledge | Empowering
                                Policy | Inspiring Action</h5>
                            <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                        class="fas fa-play-circle me-2"></i> Watch Video</a>
                                <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 animated fadeInRight">
                        <div class="calrousel-img" style="object-fit: cover;">
                            <img src="img/Banner-BNRC-2-transaprent.png" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-carousel-item bg-banner">
        <div class="carousel-caption">
            <div class="container">
                <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                    <div class="col-lg-5 animated fadeInLeft">
                        <div class="calrousel-img">
                            <img src="img/Banner-BNRC-2-transaprent.png" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 animated fadeInRight">
                        <div class="text-sm-center text-md-end">
                            <h4 class="text-danger text-uppercase fw-bold mb-4">Welcome To BNRC</h4>
                            <h4 class="display-4 text-danger mb-4">Bangladesh Nationalist Research Centre</h4>
                            <h5 class="text-danger text-uppercase fw-bold mb-4">Advancing Knowledge | Empowering
                                Policy |
                                Inspiring Action</h5>
                            <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                        class="fas fa-play-circle me-2"></i> Watch Video</a>
                                <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

        <div class="calrousel-img position-relative">
            <video autoplay muted loop playsinline class="w-100 rounded">
                <source src="{{ asset('img/BNRC FINAL 2.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

    </div>

    <!-- Introduction Start -->
    <div class="container-fluid feature pb-2">
        <div class="container py-2">
            <div class="text-center mx-auto pb-1 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1200px;">
                <div id="mission" class="about-item-content bg-white rounded p-5 h-100 section active">
                    <!-- <h4 class="text-primary text-center">Introduction</h4> -->
                    <h4 class="text-primary text-center" class="col-12">Introduction</h4>
                    <div class="mission-content">
                        <div class="mission-text">
                            <p class="col-12">
                                The Bangladesh Nationalist Research Centre (BNRC) is the research institution of the
                                Bangladesh
                                Nationalist Party (BNP), established on 19 March 2016, under the directive (30 March
                                2016) of
                                former Prime Minister and BNP Chairperson Begum Khaleda Zia. It formally began its
                                activities on
                                1 April 2016.
                            </p>
                            <br>
                            <p class="col-12">Since its inception, the BNRC has been conducting extensive research and
                                analysis on national and international issues, providing evidence-based insights
                                that shape BNP's policies and initiatives. By integrating research-driven
                                strategies, the BNRC supports the party's commitment to socio-economic progress
                                and democratic values, standing as a trusted partner in addressing national
                                challenges and fostering development.</p>
                            <br>
                            <figure class="col-12 text-end px-5 mx-3">
                                <blockquote class="blockquote">
                                    <p class="font-weight-bold text-danger">“A dedicated research wing is indispensable
                                        for shaping our party's vision and ensuring its enduring progress."</p>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    <cite title="Source Title">Begum Khaleda Zia, March 19, 2016</cite>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="mx-auto">
                            <img src="{{ asset('img/bnrc-letter.jpg') }}" class="img-fluid rounded w-90" style="max-height: 600px;"
                                alt="Authorization Letter by Khaleda Zia">
                        </div>
                    </div>
                    <div class="col-12 mt-5 mb-3">
                        <a class="btn btn-primary rounded-pill py-3 px-5 mx-auto" href="./about">More
                            Information</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Introduction End -->
    <!-- Research & Publication Start -->
    <div class="container-fluid bg-light blog pb-2">
        <div class="text-center mx-auto pb-2 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1200px;">
            <div id="mission" class="bg-white rounded px-5 py-2 h-100 section active">
                <h4 class="text-primary text-center mt-2" class="col-12">Research & Publications</h4>
                <div class="row g-4 justify-content-center">
                    <div class="col-2 col-sm-12"></div>
                    <div class="col-8 col-sm-12">
                        <div class="mx-auto">
                            <div class="row g-4 justify-content-center">
                                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="{{ asset('img/pdf-cover/publications/points2.JPG') }}" alt="Sample Image 2">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="{{ asset('img/pdf-cover/publications/points3.JPG') }}" alt="Sample Image 3">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="{{ asset('img/pdf-cover/publications/English Book.JPG') }}" alt="Sample Image 3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-12"></div>
                </div>
                <br>
                <p class="col-12" style="text-align: justify;">
                    At BNRC, research and publications serve as the foundation for evidence-based policymaking,
                    innovation, and national development. Through rigorous analysis and strategic insights, BNRC
                    contributes to policies
                    that promote sustainable growth, social justice, and national unity, supporting the Bangladesh
                    Nationalist Party’s vision for the country’s future.
                </p>
                <p class="col-12" style="text-align: justify;">
                    Driven by our mission, we work to bridge the gap between academic research, policymakers, and the
                    public, fostering an informed and engaged society. Our research spans a diverse range of
                    macro-organizational and micro-economic topics, extending to national and international issues.
                    Through collaboration and intellectual rigor, BNRC strives to shape impactful policies that drive
                    progress and democracy.
                </p>

                <div class="col-12 mt-5 mb-3">
                    <a class="btn btn-primary rounded-pill py-3 px-5 mx-auto" href="./publication">More
                        Information</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Research & Publication End -->
    <!-- Leadership Legacy Start -->
    <div class="container-fluid pb-2">
        <div class="text-center mx-auto pb-2 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1200px;">
            <div id="mission" class="about-item-content bg-white rounded px-5 py-2 h-100 section active">
                <h4 class="text-primary text-center mt-2" class="col-12">Leadership Legacy</h4>
                <div class="row g-4 justify-content-center">
                    <div class="col-2 col-sm-12"></div>
                    <div class="col-8 col-sm-12">
                        <div class="mx-auto">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./img/slider-image/1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./img/slider-image/2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./img/slider-image/3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-12"></div>
                </div>
                <br>
                <p class="col-12">
                    The Bangladesh Nationalist Party (BNP) has been a cornerstone of Bangladesh's political evolution,
                    governing the nation for a total of 15 years across four terms through elections widely regarded as
                    the fairest in the nation's history, reflecting the people's overwhelming trust and mandate. From
                    1979 to 1982, under the visionary leadership of President Ziaur Rahman, the BNP spearheaded
                    transformative economic reforms and laid the groundwork for infrastructural expansion. Begum Khaleda
                    Zia, as the first female Prime Minister (1991–1996), further cemented the party's legacy by
                    championing democratic values and driving social progress. The BNP's governance in 1996 and
                    2001–2006 continued to reflect its unwavering commitment to the nation's development and the
                    people's aspirations.
                </p>
                <p class="col-12">
                    Even in opposition or outside the parliament, the BNP has been a relentless force in defending
                    democracy and the rights of the people. The party led the movement to topple General Ershad's
                    military dictatorship, restoring democratic governance in the 1990s. For over 15 years, the BNP has
                    actively resisted Sheikh Hasina's fascist Awami League regime, laying the groundwork for the mass
                    student-people uprising of July 2024 that ultimately led to the ousting of Sheikh Hasina. By
                    opposing policies that undermine democratic institutions and advocating for electoral reforms, the
                    BNP has remained steadfast in its mission to uphold the sovereignty of the nation and amplify the
                    voice of its citizens.<span class="legacy-note">
                        For a sector-wise comprehensive account of these contributions, explore our Leadership Legacy
                        page.
                    </span>
                </p>
                <div class="col-12 mt-5 mb-3">
                    <a class="btn btn-primary rounded-pill py-3 px-5 mx-auto" href="./leadership-legacy">More
                        Information</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Leadership Legacy End -->

    <!-- Team Start -->
    <div class="container-fluid bg-light team pb-3 mt-1 mb-5">
        <div class="container pb-3">
            <div class="text-center mx-auto py-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1200px;">
                <h4 class="text-primary text-center mt-2" class="col-12">Our Leader</h4>
                <p class="mb-0">Valiant freedom fighters and Bangladeshi Nationalists founded the party under the
                    leadership of President Ziaur Rahman in 1978
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('img/A.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">Shaheed President Ziaur Rahman</h4>
                            <p class="mb-0">Founder of Bangladesh Nationalist Party.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('img/B.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">Chairperson Begum Khaleda Zia</h4>
                            <p class="mb-0">The chairperson of the Bangladesh Nationalist Party-BNP</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('img/C.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">Acting Chairman Tarique Rahman</h4>
                            <p class="mb-0">The Acting Chairman of the Bangladesh Nationalist Party-BNP</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
