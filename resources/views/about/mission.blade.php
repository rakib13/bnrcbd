<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center bg-primary">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords"
                        aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="btn bg-light border input-group-text p-3">
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
    <div class="position-absolute top-50 start-50 translate-middle text-center px-4 py-3 animated-banner">
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-fluid bg-light about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-start">

            <div class="col-12 d-flex p-0 position-relative">

                {{-- SIDEBAR INCLUDE --}}
                {{-- @include('layouts.about-sidebar') --}}

                {{-- MAIN CONTENT --}}
                <div class="content-area wow fadeInRight" data-wow-delay="0.2s"
                    style="flex: 1; margin-left: 20px;">

                    <div class="about-item-content bg-white rounded p-5 h-100 section active">
                        <h4 class="text-primary text-center">Mission</h4>

                        <div class="mission-img mt-3 mt-md-0 ms-md-4 text-center text-md-start">

                            <div class="mission-text">
                                <p>
                                    The BNRC is committed to conducting high-quality research and analysis on national
                                    and international issues, providing strategic insights to the Bangladesh Nationalist
                                    Party, and contributing to the development of policies that promote sustainable growth,
                                    social justice, and national unity.
                                </p>
                                <p>
                                    Through intellectual rigor and collaboration, the BNRC aims to empower leadership
                                    and inspire progress for the betterment of Bangladesh.
                                </p>
                            </div>

                            <div class="mission-img ms-4">
                                <img src="{{ asset('img/mission1.jpg') }}" alt="Mission illustration"
                                    class="img-fluid rounded">
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- About End -->


@include('layouts.footer')

</body>
</html>