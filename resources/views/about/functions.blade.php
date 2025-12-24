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

                   <div id="functions" class="about-item-content bg-white rounded p-3 h-100 section active">
                        <h4 class="text-primary text-center">Functions OF BNRC</h4>
                        <p> BNRC plays a vital role in shaping research-driven strategies and providing
                            evidence-based insights to support the Bangladesh Nationalist Party (BNP) in
                            policymaking and governance. As a leading research institution, BNRC focuses on
                            analyzing national and international issues, conducting in-depth studies, and
                            offering
                            strategic guidance that informs BNP's initiatives. The core functions of BNRC
                            include:
                        </p>
                        <p> • Research & Analysis: Conducting comprehensive studies on political, economic, and
                            social issues.</p>
                        <p> • Policy Development: Providing strategic recommendations that influence BNP’s
                            policy
                            decisions.</p>
                        <p> • Publications: Producing research papers, reports, and policy briefs for public
                            discourse and decision-making.</p>
                        <p> • Collaboration: Partnering with experts, academic institutions, and research
                            organizations for high-quality studies.</p>
                        <p> • Leadership Support: Equipping BNP leadership with data-driven strategies to tackle
                            national challenges.</p>
                        <p> • Knowledge Sharing: Organizing workshops, seminars, and conferences to disseminate
                            findings.</p>
                        <p> • Archiving: Maintaining a secure repository of research materials, drafts, and
                            publications for future reference.</p>
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- About End -->

@endsection