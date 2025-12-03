@extends('layouts.main-body')

@section('main-body-content')


<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center bg-primary">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords"
                        aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i
                            class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->

<!-- Header Start -->
<div class="container-fluid position-relative p-0">
    <!-- Background Image -->
    <img src="{{ asset('/img/about image3.jpg') }}" alt="BNRC Background" class="w-100" style="height: auto;">

    <!-- Overlay with background color and animation -->
    <div class="position-absolute top-50 start-50 translate-middle text-center px-4 py-3 animated-banner">
         {{-- <h1 class="bnrc-title animate-slide-up">BNRC - Bangladesh Nationalist Research Centre</h1> --}}
        {{-- <h1 class="bnrc-title animate-slide-up"> Research and Analysis for Bangladesh </h1> --}}
        {{-- <p class="bnrc-tagline animate-fade-in delay-1">Empowering Leadership Through Research and Innovation.</p> --}}
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid bg-light about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-start">
            <!-- Combined Sidebar and Content Container -->
            <div class="col-12 d-flex p-0 position-relative"> <!-- Changed to flex container -->

                <!-- Content Area (now positioned immediately to the right) -->
                <div class="content-area wow fadeInRight" data-wow-delay="0.2s" style="flex: 1; margin-left: 20px;">
                  
                    <!-- Board of dirctor................................ -->
                    <div id="director" class="about-item-content bg-white rounded p-5 h-100 section active">
                        <h4 class="text-primary text-center">Chairman</h4>
                        <div style="text-align: center; margin: 30px 0;">
                            <img src="{{ asset('img/amirkahsru.jpg') }}" alt="Amir Khasru Mahmud Chowdhury"
                                style="border: 4px solid #ccc; padding: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 100%; height: auto;">
                            <p style="margin-top: 10px; font-style: italic; color: #555; text-align:center;">Mr.
                                Amir Khasru Mahmud Chowdhury</p>
                        </div>
                        <p> Amir Khasru Mahmud Chowdhury serves as a Director at the Bangladesh Nationalist
                            Research
                            Centre (BNRC), where he brings his extensive expertise in economic policy, trade,
                            and
                            governance. With a distinguished career in public service and business leadership,
                            he
                            plays a crucial role in guiding BNRC’s research initiatives to ensure evidence-based
                            strategies align with national interests and BNP’s vision for Bangladesh’s
                            development.
                        </p>
                        <section>

                            <p>
                                As a former Minister of Commerce (2001–2004), Chowdhury was instrumental in
                                shaping
                                Bangladesh’s trade policies, strengthening international economic relations, and
                                enhancing the country’s position in global markets. He has also been a BNP
                                Standing
                                Committee Member, actively contributing to the party’s strategic planning and
                                economic policies. His leadership extends beyond politics, as he was the Founder
                                Chairman of the Chittagong Stock Exchange, playing a significant role in
                                developing
                                Bangladesh’s financial sector.</p>
                        </section>
                        <section>

                            <p>
                                Additionally, Chowdhury has served as President of the Chittagong Chamber of
                                Commerce & Industries, where he led trade advocacy efforts and worked on
                                expanding
                                investment opportunities. He has also represented Bangladesh in key global trade
                                negotiations, including WTO Ministerial Conferences, ensuring the country’s
                                interests are well-positioned in international trade policies. </p>

                        </section>
                        <section>

                            <p>
                                As a Director at BNRC, Chowdhury provides policy guidance, research oversight,
                                and
                                strategic direction, ensuring that BNRC continues to produce high-impact
                                research
                                that informs decision-making. His leadership supports BNRC’s mission to
                                contribute
                                to Bangladesh’s socio-economic progress, democratic governance, and sustainable
                                development.

                            </p>
                        </section>

                    </div>

                   

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection
