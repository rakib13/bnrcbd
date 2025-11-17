<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>
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
<div class="container-fluid bg-light about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-start">

            <div class="col-12 d-flex p-0 position-relative">

                <!-- CONTENT AREA -->
                <div class="content-area wow fadeInRight" data-wow-delay="0.2s"
                    style="flex: 1; margin-left: 20px;">

                    <div id="vision" class="about-item-content bg-white rounded p-5 h-100 section active">
                        <h4 class="text-primary text-center">Vision</h4>

                        <div class="mission-img mt-3 mt-md-0 ms-md-4 text-center text-md-start">

                            <div class="vision-text">
                                <p>
                                    To be the leading research institution in Bangladesh, driving evidence-based 
                                    policymaking and fostering innovation to support the nation's socio-economic 
                                    progress and uphold democratic values.
                                </p>

                                <p>
                                    To be the leading research institution in Bangladesh, driving evidence-based 
                                    policymaking and fostering innovation to support the nation's socio-economic 
                                    progress and uphold democratic values. To be the leading research institution 
                                    in Bangladesh, driving evidence-based policymaking and fostering innovation 
                                    to support the nation's socio-economic progress and uphold democratic values.
                                </p>

                            </div>

                            <div class="vision-img ms-4">
                                <img src="{{ asset('img/vision img.jpg') }}" 
                                     alt="Vision illustration" 
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