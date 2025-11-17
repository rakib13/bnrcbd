@extends('layouts.main-body')

@section('main-body-content')

<!-- Navbar & Hero End -->

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
<div class="container-fluid position-relative p-0" style="height: 60vh; overflow: hidden;">
    <!-- Image Slider -->
    <div id="headerCarousel" class="carousel slide carousel-fade h-100" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner h-100">
            <div class="carousel-item active h-100">
                <img src="{{ asset('img/leadership.jpg') }}" class="d-block w-100 h-100" style="object-fit: cover; object-position: top center;"
                    alt="Slide 1">
            </div>
            {{-- <div class="carousel-item h-100">
                <img src="img/2.jpg" class="d-block w-100 h-100" style="object-fit: cover; object-position: top center;"
                    alt="Slide 2">
            </div>
            <div class="carousel-item h-100">
                <img src="img/3.jpg" class="d-block w-100 h-100" style="object-fit: cover; object-position: top center;"
                    alt="Slide 3">
            </div>
            <div class="carousel-item h-100">
                <img src="img/4.jpg" class="d-block w-100 h-100" style="object-fit: cover; object-position: top center;"
                    alt="Slide 4">
            </div>
            <div class="carousel-item h-100">
                <img src="img/5.jpg" class="d-block w-100 h-100" style="object-fit: cover; object-position: top center;"
                    alt="Slide 5">
            </div>
            <div class="carousel-item h-100">
                <img src="img/6.jpg" class="d-block w-100 h-100" style="object-fit: cover; object-position: top center;"
                    alt="Slide 6">
            </div>
            <div class="carousel-item h-100">
                <img src="img/7.jpg" class="d-block w-100 h-100" style="object-fit: cover; object-position: top center;"
                    alt="Slide 7">
            </div> --}}
        </div>
    </div>

    <!-- Overlay Header Content -->
    <div class="container text-center py-5 position-absolute top-50 start-50 translate-middle text-white"
        style="max-width: 900px; z-index: 10;">
        <!-- Header content can go here -->
    </div>
</div>
<!-- Header End -->

<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: justify;">
                <p>
                    The Bangladesh Nationalist Party (BNP) has been a cornerstone of Bangladesh's political
                    evolution, governing the nation for a total of 15 years across four terms through elections
                    widely regarded as the fairest in the nation's history, reflecting the people's overwhelming
                    trust and mandate. From 1979 to 1982, under the visionary leadership of President Ziaur Rahman,
                    the BNP spearheaded transformative economic reforms and laid the groundwork for infrastructural
                    expansion. Begum Khaleda Zia, as the first female Prime Minister (1991–1996), further cemented
                    the party's legacy by championing democratic values and driving social progress. The BNP's
                    governance in 1996 and 2001–2006 continued to reflect its unwavering commitment to the nation's
                    development and the people's aspirations.
                    Even in opposition or outside the parliament, the BNP has been a relentless force in defending
                    democracy and the rights of the people. The party led the movement to topple General Ershad's
                    military dictatorship, restoring democratic governance in the 1990s. For over 15 years, the BNP
                    has actively resisted Sheikh Hasina's fascist Awami League regime, laying the groundwork for the
                    mass student-people uprising of July 2024 that ultimately led to the ousting of Sheikh Hasina.
                    By opposing policies that undermine democratic institutions and advocating for electoral
                    reforms, the BNP has remained steadfast in its mission to uphold the sovereignty of the nation
                    and amplify the voice of its citizens.

                </p>
            </div>

        </div>
    </div>
</div>
<!-- Service Start -->
<div class="container-fluid blog">
    <div class="container">

        <!-- leadership and legacy -->

    
        <!-- ........................ agriculter  Economics section start.............. -->


        

        <!-- ........................ agriculter  Economics section end .............. -->
        <!-- .....................constitution and law............................ -->

    

        <!-- .....................constitution and law........END.................... -->
        <!-- socialdevelopment....start............................. -->


       
        <!-- socialdevelopment......END.......................... -->
        <!-- Environmental vision.......Start......... -->


     
        <!-- Environmental vision......END.......................... -->

        <!-- other sector ......start.......................... -->

        <section id="othersectors" class="pdf-gallery">
            <div class="row g-4 justify-content-center">
                <div class="w-100">
                    <h4 class="text-primary full-underline">Other sectors: Beyond Boundaries, Expanding Horizons.
                    </h4>
                    <p class="mb-3" style="text-align: justify;">
                        BNP’s contributions extend beyond politics and governance, influencing various sectors that
                        define Bangladesh’s progress on the global stage. From fostering technological innovation to
                        advancing diplomatic relations, the party continues to play a crucial role in broadening the
                        nation's horizons. By embracing modern solutions and international collaborations, BNP
                        strengthens Bangladesh’s position as a forward-thinking and resilient nation.
                    </p>
                </div>

                {{-- <div class="row">
                    @forelse ($othersectors as $item)
                        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                            <div class="blog-item d-flex flex-column w-100">
                                <div class="blog-img">
                                    <img src="{{ asset($item->thumbnail) }}" class="img-fluid"
                                        alt="{{ $item->book_title }}">
                                    <div class="blog-categiry pdf-link py-2 px-4" data-pdf="{{ $item->link }}">
                                        <span>View Details</span>
                                    </div>
                                </div>
                                <div class="blog-content p-4">
                                    <div class="blog-comment d-flex justify-content-between mb-3">
                                        <div class="small"><span class="fa fa-user text-primary"></span>
                                            {{ $item->book_author }}</div>
                                        <div class="small"><span class="fa fa-calendar text-primary"></span>
                                            {{ \Carbon\Carbon::parse($item->publish_date)->format('d M Y') }}</div>
                                    </div>
                                    <a href="#" class="h5 d-inline-block mb-3">{{ $item->book_title }}</a>
                                    <p class="mb-3">{{ Str::limit($item->book_summary, 100) }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No Other Sectors found.</p>
                    @endforelse
                </div> --}}<div class="row">
                    @forelse ($otherSectors as $item)
                        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                            <div class="blog-item d-flex flex-column w-100">
                                <div class="blog-img">
                                    <img src="{{ asset($item->thumbnail) }}" class="img-fluid"
                                        alt="{{ $item->book_title }}">
                                    <div class="blog-categiry pdf-link py-2 px-4" data-pdf="{{ $item->link }}">
                                        <span>View Details</span>
                                    </div>
                                </div>
                                <div class="blog-content p-4 flex-grow-1 d-flex flex-column">
                                    <div class="blog-comment d-flex justify-content-between mb-3">
                                        <div class="small">
                                            <span class="fa fa-user text-primary"></span>
                                            {{ $item->book_author }}
                                        </div>
                                        <div class="small">
                                            <span class="fa fa-calendar text-primary"></span>
                                            {{ \Carbon\Carbon::parse($item->publish_date)->format('d M Y') }}
                                        </div>
                                    </div>
                                    <a href="#" class="h5 d-inline-block mb-3">{{ $item->book_title }}</a>
                                    <p class="mb-3">{{ Str::limit($item->book_summary, 100) }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No Other Sectors found.</p>
                    @endforelse
                </div>

            </div>
        </section>

        <!-- other sector ......END.......................... -->
        <!-- Modal -->
        <div class="custom-modal-overlay" id="customPdfModal" style="display:none">
            <div class="custom-modal-content">
                <span class="custom-close-btn" id="customCloseBtn">&times;</span>
                <iframe src="" id="customPdfFrame" width="100%" height="100%"></iframe>
            </div>
        </div>
    </div>

</div>

<!-- Service End -->

@endsection
