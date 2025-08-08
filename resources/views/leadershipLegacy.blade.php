<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

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
                <img src="img/1.jpg" class="d-block w-100 h-100" style="object-fit: cover; object-position: top center;"
                    alt="Slide 1">
            </div>
            <div class="carousel-item h-100">
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
            </div>
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
<div class="container-fluid blog py-5">
    <div class="container py-5">

        <!-- leadership and legacy -->

        <section id="LeadershipLegacy" class="pdf-gallery">
            <div class="row g-4 justify-content-center">
                <div class="w-100">
                    <h4 class="text-primary full-underline">Leadership Legacy: A Tradition of Excellence</h4>
                    <P class="mb-3" style="text-align: justify;">
                        The BNP has played a pivotal role in shaping Bangladesh’s political landscape, demonstrating
                        unwavering commitment to governance and national progress. With visionary leaders at the
                        helm, the party has consistently upheld democratic principles, fostered economic growth, and
                        strengthened the nation's social fabric. From pioneering reforms to safeguarding people's
                        rights, BNP’s leadership continues to inspire generations committed to a prosperous and
                        independent Bangladesh.
                    </P>
                </div>

                <!-- Card 1 -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/agriculture&economics/agri-1.jpg" style="height: 300px;"
                                alt="Sample Image 1" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/d95efb5d9d.html">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Leadership in Agricultural Reform</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/agriculture&economics/agri-2.jpg" style="height: 300px;"
                                alt="Sample Image 2" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/a5a311e867.html">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Economics and Leadership</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/agriculture&economics/agri-3.jpg" style="height: 300px;"
                                alt="Sample Image 3" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/fa62917017.html">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Legacy in Rural Innovation</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/agriculture&economics/agri-4.jpg" style="height: 300px;"
                                alt="Sample Image 4" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/224dded0a9.html">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Sustainability & Strategy</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ........................ agriculter  Economics section start.............. -->


        <section id="economicadvancements" class="pdf-gallery">
            <div class="row g-4 justify-content-center">
                <div class="w-100">
                    <h4 class="text-primary full-underline">Economic Advancements: Driving Growth, Empowering
                        Progress</h4>
                    <p class="mb-3" style="text-align: justify;">
                        BNP has been instrumental in steering Bangladesh toward economic prosperity, implementing
                        policies that boost industrial growth, trade, and entrepreneurship. Under its leadership,
                        the country witnessed infrastructural development, enhanced investment opportunities, and
                        strengthened economic independence. From agriculture to technology, BNP's economic vision
                        continues to empower people, creating opportunities that drive sustainable progress.
                    </p>
                </div>
                @forelse ($economicesadvancment as $item)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="blog-item">
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
                    <p>No Newsletters found.</p>
                @endforelse
                <!-- Card 1 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/agriculture&economics/agri-1.jpg" style="height: 300px;"
                                alt="Sample Image 1" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/d95efb5d9d.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Leadership in Agricultural Reform</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Card 2 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/agriculture&economics/agri-2.jpg" style="height: 300px;"
                                alt="Sample Image 2" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/a5a311e867.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Economics and Leadership</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Card 3 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/agriculture&economics/agri-3.jpg" style="height: 300px;"
                                alt="Sample Image 3" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/fa62917017.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Legacy in Rural Innovation</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Card 4 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/agriculture&economics/agri-4.jpg" style="height: 300px;"
                                alt="Sample Image 4" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/224dded0a9.html">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Sustainability & Strategy</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>

        <!-- ........................ agriculter  Economics section end .............. -->
        <!-- .....................constitution and law............................ -->

        <section id="restoringdemocracy" class="pdf-gallery">
            <div class="row g-4 justify-content-center">
                <div class="w-100">
                    <h4 class="text-primary full-underline">Restoring Democracy: Championing People's Voices,
                        Building Nations</h4>
                    <p class="mb-3" style="text-align: justify;">
                        Throughout its history, the BNP has been at the forefront of movements dedicated to
                        defending democratic ideals. Whether leading the fight against authoritarian rule or
                        advocating for fair and transparent elections, the party has remained steadfast in ensuring
                        the voices of the people shape the future of the nation. By consistently challenging
                        undemocratic practices, BNP has reinforced the foundation of a government that truly
                        represents its citizens.
                    </p>
                </div>

                <!-- Card 1 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/constitution&law/law-1.jpg" style="height: 300px;"
                                alt="Sample Image 1" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/14ffb620e2.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Leadership in Agricultural Reform</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}
                @forelse ($restoringdemocracy as $item)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="blog-item">
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
                    <p>No Newsletters found.</p>
                @endforelse
                <!-- Card 2 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/constitution&law/law-2.jpg" style="height: 300px;"
                                alt="Sample Image 2" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/0429c696c5.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Economics and Leadership</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Card 3 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/constitution&law/law-3.jpg" style="height: 300px;"
                                alt="Sample Image 3" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/02c69bce85.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Legacy in Rural Innovation</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Card 4 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/constitution&law/law-3.jpg" style="height: 300px;"
                                alt="Sample Image 4" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/b52aab635b.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Sustainability & Strategy</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>

        <!-- .....................constitution and law........END.................... -->
        <!-- socialdevelopment....start............................. -->


        <section id="socialdevelopment" class="pdf-gallery">
            <div class="row g-4 justify-content-center">
                <div class="w-100">
                    <h4 class="text-primary full-underline">Social Development: Transforming Lives, Creating Equity
                    </h4>
                    <p class="mb-3" style="text-align: justify;">
                        BNP has continuously worked toward a more equitable society, championing education,
                        healthcare, and women’s empowerment. By initiating programs that uplift marginalized
                        communities and advocating policies that foster social justice, the party has laid the
                        groundwork for a more inclusive and prosperous Bangladesh. Its commitment to education,
                        human rights, and public welfare remains at the core of its governance philosophy.
                    </p>
                </div>
                @forelse ($socialdevelopment as $item)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="blog-item">
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
                    <p>No Newsletters found.</p>
                @endforelse
                <!-- Card 1 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/health&development/health-1.jpg" style="height: 300px;"
                                alt="Sample Image 1" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/5c31d50952.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Leadership in Agricultural Reform</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Card 2 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/health&development/health-2.jpg" style="height: 300px;"
                                alt="Sample Image 2" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/357afbfc22.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Economics and Leadership</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Card 3 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/health&development/health-3.jpg" style="height: 300px;"
                                alt="Sample Image 3" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/ef994aeba8.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Legacy in Rural Innovation</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Card 4 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/health&development/health-4.jpg" style="height: 300px;"
                                alt="Sample Image 4" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/ab830ed3e0.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Sustainability & Strategy</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- socialdevelopment......END.......................... -->
        <!-- Environmental vision.......Start......... -->


        <section id="environmental" class="pdf-gallery">
            <div class="row g-4 justify-content-center">
                <div class="w-100">
                    <h4 class="text-primary full-underline">Environmental Vision: Sustainability Today for
                        Tomorrow's Prosperity</h4>
                    <p class="mb-3" style="text-align: justify;">
                        Recognizing the urgency of environmental responsibility, BNP has been dedicated to policies
                        that prioritize sustainable development. From advocating eco-friendly industrial practices
                        to implementing conservation efforts, the party has contributed to protecting Bangladesh’s
                        natural resources. By promoting renewable energy, climate resilience, and green initiatives,
                        BNP aims to ensure a healthier future for the next generations.
                    </p>
                </div>
                {{-- @forelse ($environmentalvision as $item)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="blog-item">
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
                    <p>No Newsletters found.</p>
                @endforelse --}}
                <!-- Card 1 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/health&development/health-1.jpg" style="height: 300px;"
                                alt="Sample Image 1" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/5c31d50952.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Leadership in Agricultural Reform</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Card 2 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/health&development/health-2.jpg" style="height: 300px;"
                                alt="Sample Image 2" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/357afbfc22.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Economics and Leadership</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Card 3 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/health&development/health-3.jpg" style="height: 300px;"
                                alt="Sample Image 3" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/ef994aeba8.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Legacy in Rural Innovation</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Card 4 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/health&development/health-4.jpg" style="height: 300px;"
                                alt="Sample Image 4" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/ab830ed3e0.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Sustainability & Strategy</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
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
                @forelse ($othersectors as $item)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="blog-item">
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
                    <p>No Newsletters found.</p>
                @endforelse
                <!-- Card 1 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/defense&foreignAffairs/defense-1.jpg" style="height: 300px;"
                                alt="Sample Image 1" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/bae06c0b34.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Leadership in Agricultural Reform</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Card 2 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/defense&foreignAffairs/defense-1.jpg" style="height: 300px;"
                                alt="Sample Image 2" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/565a798c5c.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Economics and Leadership</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Card 3 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/defense&foreignAffairs/defence-2.jpg" style="height: 300px;"
                                alt="Sample Image 3" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/1239793c6d.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Legacy in Rural Innovation</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Card 4 -->
                {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="./img/pdf-cover/defense&foreignAffairs/defence-2.jpg" style="height: 300px;"
                                alt="Sample Image 4" class="img-fluid">
                            <div class="blog-categiry pdf-link py-2 px-4"
                                data-pdf="https://heyzine.com/flip-book/ab830ed3e0.html" class="pdf-link">
                                <span>View Details</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Author Name
                                </div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 May 2025
                                </div>
                            </div>
                            <a href="#" class="h5 d-inline-block mb-3">Sustainability & Strategy</a>
                            <p class="mb-3">Brief description or abstract of the publication goes here.</p>
                        </div>
                    </div>
                </div> --}}
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

<!-- Footer Start -->
@include('layouts.footer')
</body>

</html>
