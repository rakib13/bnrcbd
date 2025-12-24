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
                    <span id="search-icon-1" class="btn bg-light border nput-group-text p-3">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->

<!-- Header Start -->
<div class="container-fluid position-relative p-0">
    <img src="{{ asset('/img/about image3.jpg') }}" alt="BNRC Background" class="w-100">
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid bg-light about py-3">
    <div class="container py-3">
        <div class="row g-5 align-items-start">

            <div class="col-12 d-flex p-2 position-relative">

                <!-- CONTENT AREA -->
                <div class="content-area wow fadeInUp" data-wow-delay="0.2s"
                    style="flex: 1; margin-left: 20px;">

                    <div id="formation" class="about-item-content bg-white rounded p-3 h-100 section active">
                        <h4 class="text-primary text-center">Formation of BNRC</h4>
                        <p>
                            The Bangladesh Nationalist Research Centre (BNRC) is the Research Institution of the
                            Bangladesh Nationalist Party (BNP). Recognizing the need for a premier research wing
                            to
                            provide evidence-based insights and strategic guidance to party leadership, the BNRC
                            was
                            established on March 19, 2016, under the directive (30 March 2016) of former Prime
                            Minister and BNP Chairperson Begum Khaleda Zia, in accordance with the party's
                            amended
                            constitution. The organization formally commenced its activities on April 1, 2016.
                        </p>

                        <!-- Framed Image of Authorization Letter -->
                        <div style="text-align: center; margin: 30px 0;">
                            {{-- <img src="img/bnrc-letter.jpeg" alt="Authorization Letter by Khaleda Zia text-center"
                                style="border: 4px solid #ccc; padding: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 100%; height: auto;"> --}}
                            <img src="{{ asset('img/bnrc-letter.jpeg') }}" alt="Authorization Letter by Khaleda Zia text-center"
                                style="border: 4px solid #ccc; padding: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 100%; height: auto;">
                                <p style="margin-top: 10px; font-style: italic; color: #555;">Authorization letter
                                by
                                Madam Khaleda Zia, March 30, 2016</p>
                        </div>

                        <p>
                            Since its inception, the BNRC has been at the forefront of conducting comprehensive
                            research and analysis on a wide range of issues, including national and
                            international
                            affairs, as well as internal and external matters concerning the party. Its findings
                            serve as a critical foundation for BNP's policy formulation, reinforcing the party's
                            positions and supporting its initiatives.
                            The BNP consistently incorporates the BNRC's research-driven insights into its
                            policies
                            and programs, ensuring they are constructive, forward-looking, and aligned with the
                            broader objectives of national socio-economic progress. The BNRC stands as a trusted
                            partner in addressing the nation's challenges and fostering development, embodying a
                            commitment to excellence in its contributions to both the party and the country.
                        </p>
                        <p>
                            <em>
                                <strong style="color: #b30000;"> “A dedicated research wing is indispensable for
                                    shaping our party's vision and ensuring its enduring progress." — Begum
                                    Khaleda
                                    Zia, March 19, 2016</strong>
                            </em>
                        </p>


                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- About End -->

@endsection