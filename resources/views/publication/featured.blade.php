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
    <div class="container-fluid position-relative p-0">
        {{-- <div class="container text-center py-5" style="max-width: 900px;"> --}}
            {{-- <h4 class="text-danger display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Publications</h4> --}}
            <img src="{{ asset('/img/Research and Analysis For Bangladesh.jpg') }}" alt="BNRC Background" class="w-100"
                style="height: auto;">
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active text-primary">Publications</li> --}}
            </ol>
            {{--
        </div> --}}
    </div>
    <!-- Header End -->

    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align: justify;">
                    <p>
                        Welcome to our Research & Publication hub—where knowledge drives policy, innovation, and
                        national
                        development.
                        At BNRC, we believe research is the backbone of informed decision-making. Our studies and
                        publications
                        support
                        evidence-based policymaking, fostering sustainable growth, social justice, and national
                        unity—aligned with
                        the
                        Bangladesh Nationalist Party’s vision for the country’s future.
                        Through rigorous analysis and strategic insights, we bridge the gap between academia,
                        policymakers,
                        and the
                        public, ensuring impactful research contributes to the democratic process. Our work spans a
                        diverse
                        range of
                        national and international topics, from macro-organizational strategies to micro-economic
                        challenges.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog Start -->
    <div class="container-fluid blog py-1">
        <div class="container py-3">
            <!-- START archive filter (horizontal) -->
            <div class="w-100">
                <h4 class="text-primary text-center mb-4">A Search and Filter Options</h4>
            </div>
            <div class="archive-filters shadow-box">
                <div class="filter-item">
                    <i class="fas fa-search icon"></i>
                    <input type="text" id="searchBox" placeholder="Keyword...">
                </div>

                <div class="filter-item">
                    <i class="fas fa-calendar-minus icon"></i>
                    <input type="number" id="yearFrom" placeholder="From (YYYY)">
                </div>

                <div class="filter-item">
                    <i class="fas fa-calendar-plus icon"></i>
                    <input type="number" id="yearTo" placeholder="To (YYYY)">
                </div>

                <div class="filter-item">
                    <i class="fas fa-user icon"></i>
                    <select id="authorFilter">
                        <option value="">All Authors</option>
                        <option value="bnrc researchers">BNRC Researchers</option>
                        <option value="external collaborators">External Collaborators</option>
                        <option value="joint publications">Joint Publications</option>
                    </select>
                </div>

                <div class="filter-item">
                    <i class="fas fa-book icon"></i>
                    <select id="topicFilter">
                        <option value="">All Topics</option>
                        <option value="political study">Political Studies</option>
                        <option value="economic studies">Economic Studies</option>
                        <option value="social studies">Social Studies</option>
                        <option value="others">Others</option>
                    </select>
                </div>

                <div class="filter-item">
                    <i class="fas fa-file-alt icon"></i>
                    <select id="typeFilter">
                        <option value="">All Types</option>
                        <option value="research rapers">Research Papers</option>
                        <option value="policy briefs">Policy Briefs</option>
                        <option value="reports and analyses">Reports and Analyses</option>
                        <option value="books and monographs">Books and Monographs</option>
                        <option value="case studies">Case Studies</option>
                        <option value="conference proceedings">Conference Proceedings</option>
                        <option value="newsletters">Newsletters</option>
                    </select>
                </div>

                <div class="archive-filters mb-4 d-flex align-items-center gap-2">
                    <button id="clearFilters" class="btn btn-outline-secondary">
                        <i class="fas fa-eraser"></i> Clear
                    </button>
                </div>
            </div>

            <!-- Search and Filter Section -->
            <!-- Publications List -->
            <div class="row" id="publicationList" class="pdf-gallery">
                @foreach ($publishes as $publish)
                    <div class="col-md-6 col-lg-4 blog-item mb-4" data-title="{{ strtolower($publish->book_title) }}"
                        data-author="{{ strtolower($publish->book_author) }}" data-type="{{ strtolower($publish->type ?? '') }}"
                        data-pdf="{{ $publish->link }}">
                        <!-- Make sure this contains the correct PDF URL -->

                        <div class="card h-100 shadow-sm">
                            <img src="{{ $publish->cover_image ?? '' }}" class="card-img-top" alt="cover">
                            <div class="card-body">
                                <h5 class="card-title">{{ $publish->book_title }}</h5>
                                <p class="card-text">
                                    <strong>Author:</strong> {{ $publish->book_author }}<br>
                                    <strong>Published:</strong>
                                    {{ \Carbon\Carbon::parse($publish->publish_date)->format('F Y') }}
                                </p>
                                <button class="btn btn-primary view-pdf-btn" data-pdf="{{ $publish->link }}">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- filter end -->

            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">

                <br>
                <!-- <h4 class="text-primary">Our Publications</h4> -->
                <!-- <h1 class="display-4 mb-4">News And Updates</h1> -->

            </div>
            <!-- Featured Section -->
            <section id="featured" class="pdf-gallery">
                <div class="container">
                    <h4 class="text-primary mb-4">Featured</h4>
                    <p class="mb-3">Discover our most influential research and key publications. This section
                        highlights groundbreaking studies, expert analyses, and thought-provoking findings that
                        shape discussions in critical fields. Start here to explore major contributions that drive
                        policy and change.</p>
                    <div class="row g-4 justify-content-center">
                        @forelse ($feature as $item)
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <img src="{{ asset($item->thumbnail) }}" class="img-fluid"
                                            alt="{{ $item->book_title }}">
                                        {{-- <div class="blog-categiry pdf-link py-2 px-4" data-pdf="{{ asset($item->link) }}">
                                            <span>View Details</span>
                                        </div> --}}

                                        <div class="blog-categiry pdf-link py-2 px-4" data-bs-toggle="modal"
                                            data-bs-target="#myModal" data-pdf="{{ asset($item->link) }}">
                                            <span>View Details</span>
                                        </div>

                                    </div>
                                    <div class="blog-content p-4">
                                        <div class="blog-comment d-flex justify-content-between mb-3">
                                            <div class="small"><span class="fa fa-user text-primary"></span>
                                                {{ $item->book_author }}
                                            </div>
                                            <div class="small"><span class="fa fa-calendar text-primary"></span>
                                                {{ \Carbon\Carbon::parse($item->publish_date)->format('d M Y') }}</div>
                                        </div>
                                        <a href="#" class="h5 d-inline-block mb-3">{{ $item->book_title }}</a>
                                        <p class="mb-3">{{ Str::limit($item->book_summary, 100) }}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>No Featured found.</p>
                        @endforelse
                    </div>
                </div>
            </section>

        </div>
    </div>
    <!-- another row..............................Newsletters -->
    {{--
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/4.1.0/turn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.worker.min.js"></script> --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/turn.js') }}"></script>
    <script src="{{ asset('js/pdf.js') }}"></script>
    <script>
        // pdfjsLib.GlobalWorkerOptions.workerSrc = "{{ asset('js/pdf.worker.js') }}";
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.worker.min.js';
    </script>

    <!-- Blog Item 5 -->
    <!-- PDF Flipbook Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="controls">
                        <button id="zoom-in">🔍 Zoom In</button>
                        <button id="zoom-out">🔎 Zoom Out</button>
                        <button id="fullscreen">⛶ Fullscreen</button>
                        <button id="sound-toggle">🔊 Sound On</button>
                    </div>

                    <div id="flipbook-wrapper">
                        <div id="flipbook">Loading...</div>
                        <div class="nav-arrow left" id="prev">◀</div>
                        <div class="nav-arrow right" id="next">▶</div>
                    </div>

                    <input id="page-slider" type="range" min="1" max="1" value="1">

                    <div class="bottom-bar">
                        <button id="share-btn">🔗 Share</button>
                        <a href="" download class="download-btn">⬇ Download PDF</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- //this code only show pdf ................................start.......when click viewdetails --}}
    {{-- <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PDF Viewer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <iframe id="pdfViewer" src="" width="100%" height="600px"></iframe>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- // this code only show pdf ................................start.......when click viewdetails --}}

    <!-- Footer Start -->
    <script>


        document.addEventListener("DOMContentLoaded", function () {
            // === FILTERING ===
            const searchBox = document.getElementById("searchBox");
            const yearFrom = document.getElementById("yearFrom");
            const yearTo = document.getElementById("yearTo");
            const authorFilter = document.getElementById("authorFilter");
            const topicFilter = document.getElementById("topicFilter");
            const typeFilter = document.getElementById("typeFilter");
            const clearFilters = document.getElementById("clearFilters");
            const cards = document.querySelectorAll("#publicationList .blog-item");
            // Hide all publications by default
            cards.forEach(card => card.style.display = "none");

            function filterCards() {
                const searchText = searchBox.value.toLowerCase().trim();
                const fromYear = parseInt(yearFrom.value) || null;
                const toYear = parseInt(yearTo.value) || null;
                const author = authorFilter.value.toLowerCase();
                const topic = topicFilter.value.toLowerCase();
                const type = typeFilter.value.toLowerCase();
                let foundAny = false;
                cards.forEach(card => {
                    const title = card.dataset.title || "";
                    const authorData = card.dataset.author || "";
                    const typeData = card.dataset.type || "";
                    const topicData = card.dataset.topic || "";
                    // Extract year from text
                    const publishedText = card.querySelector('.card-text').textContent;
                    const yearMatch = publishedText.match(/(\d{4})/);
                    const year = yearMatch ? parseInt(yearMatch[1]) : 0;
                    let match = true;
                    if (searchText && !title.includes(searchText) && !authorData.includes(searchText))
                        match = false;
                    if (fromYear && year < fromYear) match = false;
                    if (toYear && year > toYear) match = false;
                    if (author && !authorData.includes(author)) match = false;
                    if (topic && !topicData.includes(topic)) match = false;
                    if (type && !typeData.includes(type)) match = false;
                    card.style.display = match ? "block" : "none";
                    if (match) foundAny = true;
                });
                // Show/hide no results
                let noResults = document.getElementById("noResults");
                if (!foundAny) {
                    if (!noResults) {
                        const msg = document.createElement("div");
                        msg.id = "noResults";
                        msg.className = "col-12 text-center text-muted py-4";
                        msg.innerHTML = "<h5>No publications found matching your criteria</h5>";
                        document.getElementById("publicationList").appendChild(msg);
                    }
                } else if (noResults) {
                    noResults.remove();
                }
            }
            // Add event listeners
            [searchBox, yearFrom, yearTo, authorFilter, topicFilter, typeFilter].forEach(el => {
                el.addEventListener("input", filterCards);
                el.addEventListener("change", filterCards);
            });
            // Clear filters
            clearFilters.addEventListener("click", (e) => {
                e.preventDefault();
                searchBox.value = "";
                yearFrom.value = "";
                yearTo.value = "";
                authorFilter.value = "";
                topicFilter.value = "";
                typeFilter.value = "";
                // Hide all cards when clearing filters
                cards.forEach(card => {
                    card.style.display = "none";
                });
                // Remove no results message if it exists
                const noResults = document.getElementById("noResults");
                if (noResults) noResults.remove();
            });
        });

        // === PDF MODAL ===

        // Set the PDF.js worker path globally once

        // --- Core PDF Rendering Functions ---
        // $(document).on("click", ".pdf-link, .view-pdf-btn", function () {
        //     let filePath = $(this).data("pdf");
        //     showModal(null, filePath);
        // });

        $(document).on("click", ".view-pdf-btn, .pdf-link", function () {
                let filePath = $(this).data("pdf");
                console.log("Loading PDF:", filePath);
                $('#myModal').modal('show');
                showModal(null, filePath);
            });

        function showModal(event, filePath) {
            let $flipbook = $('#flipbook');

            // 1. CRITICAL CLEANUP STEP A: Destroy the old turn.js instance if it exists.
            if ($flipbook.data('turnJs')) {
                $flipbook.turn('destroy');
            }

            // 2. CRITICAL CLEANUP STEP B: Remove ALL jQuery data associated with the element.
            // This is the most aggressive way to clear leftover state that turn.js might be clinging to.
            $flipbook.removeData();

            // 3. Clear previous controls and reset state
            attachControls(null);
            userZoom = 1.0;
            pdfDoc = null;
            $flipbook.empty().html('Loading...');

            $('#myModalLabel').text(filePath);
            $('#myModal .download-btn').attr('href', filePath);

            // 4. Load PDF immediately
            loadFlipbook(filePath);
        }
        function renderPage(num) {
            if (!pdfDoc || num < 1 || num > pdfDoc.numPages) return;
            let canvas = document.getElementById('canvas-' + num);
            if (!canvas) return;

            // Clear any previous error message/hidden state
            $(canvas).removeClass('d-none').css('display', 'block');
            $(canvas).siblings('.error-message').remove();

            pdfDoc.getPage(num).then(function (page) {
                const unscaled = page.getViewport({
                    scale: 1
                });
                const fitScale = (pageWidth / unscaled.width) * userZoom;
                const viewport = page.getViewport({
                    scale: fitScale
                });

                // Set canvas dimensions
                canvas.width = viewport.width;
                canvas.height = viewport.height;
                canvas.style.width = '100%';
                canvas.style.height = '100%';

                page.render({
                    canvasContext: canvas.getContext('2d'),
                    viewport
                });
            }).catch(pageErr => {
                console.error(`Error rendering page ${num}:`, pageErr);
                let $pageDiv = $(canvas).closest('.page');
                if ($pageDiv.length && !$pageDiv.find('.error-message').length) {
                    $pageDiv.append('<div class="error-message" style="color:red; margin-top: 10px;">Error rendering page: ' + pageErr.message + '</div>');
                    $(canvas).addClass('d-none');
                }
            });
        }

        function reloadPages(current) {
            let $flipbook = $('#flipbook');
            // This check prevents reloadPages from running if the PDF load failed (pdfDoc is null)
            if (!pdfDoc) return;

            // This check is the source of the persistent error if turn.js state isn't cleaned up.
            // We'll rely on the aggressive cleanup in showModal to ensure this works.
            current = current || $flipbook.turn('page') || 1;

            // Reload the current view and a few surrounding pages
            for (let p = Math.max(1, current - 2); p <= Math.min(pdfDoc.numPages, current + 3); p++) {
                renderPage(p);
            }
        }

        // --- Control and Event Binding Functions (Defined Globally) ---

        function attachControls(book) {
            // 1. Clear previous event listeners using namespaces for safety
            $('#prev, #next, #zoom-in, #zoom-out, #fullscreen, #sound-toggle, #page-slider, #share-btn').off('.flipbook');
            $(document).off('keydown.flipbook');

            // 2. Navigation (only bind if the book is initialized)
            if (book) {
                $('#prev').on('click.flipbook', () => book.turn('previous'));
                $('#next').on('click.flipbook', () => book.turn('next'));

                // Zoom Controls
                $('#zoom-in').on('click.flipbook', () => {
                    userZoom = Math.min(userZoom + 0.15, 3.0);
                    reloadPages();
                });
                $('#zoom-out').on('click.flipbook', () => {
                    userZoom = Math.max(userZoom - 0.15, 0.4);
                    reloadPages();
                });

                // Slider
                $('#page-slider').on('input change.flipbook', function () {
                    const targetPage = parseInt(this.value) || 1;
                    if (pdfDoc && targetPage >= 1 && targetPage <= pdfDoc.numPages) {
                        book.turn('page', targetPage);
                    }
                });

                // Keyboard Navigation
                $(document).on('keydown.flipbook', e => {
                    if ($('#myModal').hasClass('show')) {
                        if (e.key === 'ArrowLeft') book.turn('previous');
                        if (e.key === 'ArrowRight') book.turn('next');
                    }
                });
            }

            // 3. Other Controls (Always bound)
            $('#fullscreen').on('click.flipbook', () => {
                const el = document.documentElement;
                !document.fullscreenElement ? el.requestFullscreen() : document.exitFullscreen();
            });

            $('#sound-toggle').on('click.flipbook', () => {
                soundEnabled = !soundEnabled;
                $('#sound-toggle').text(soundEnabled ? '🔊 Sound On' : '🔇 Sound Off');
            });

            $('#share-btn').on('click.flipbook', () => {
                const shareUrl = window.location.href;
                if (navigator.share) {
                    navigator.share({
                        title: "Flipbook",
                        text: "Check out this PDF flipbook!",
                        url: shareUrl
                    }).catch(err => console.log("Share failed:", err));
                } else {
                    navigator.clipboard.writeText(shareUrl).then(() => {
                        alert("Link copied to clipboard!");
                    });
                }
            });
        }

        // --- Modal and Load Workflow ---

        //    pdfjsLib.GlobalWorkerOptions.workerSrc = "{{ asset('js/pdf.worker.js') }}";

        const bookWidth = 1000,
            bookHeight = 650,
            pageWidth = bookWidth / 2,
            pageHeight = bookHeight;
        let pdfDoc = null,
            userZoom = 1.0,
            soundEnabled = true;
        const flipSound = new Audio('https://www.soundjay.com/buttons/sounds/page-flip-01a.mp3');


        // function loadFlipbook(filePath) {
        //     let $flipbook = $('#flipbook');

        //     pdfjsLib.getDocument(filePath).promise.then(function(pdf) {
        //         pdfDoc = pdf;
        //         $flipbook.empty();

        //         $('#page-slider').attr('max', pdf.numPages);

        //         // 1. Create page elements
        //         let pagesHtml = '';
        //         for (let i = 1; i <= pdf.numPages; i++) {
        //             pagesHtml += '<div class="page"><canvas id="canvas-' + i + '"></canvas></div>';
        //         }
        //         $flipbook.append(pagesHtml);

        //         // 2. Initialize turn.js
        //         $flipbook.turn({
        //             width: bookWidth,
        //             height: bookHeight,
        //             autoCenter: true,
        //             display: 'double',
        //             duration: 700,
        //             elevation: 50,
        //             gradients: true,
        //             when: {
        //                 turning: function(event, page) {
        //                     $('#page-slider').val(page);
        //                     renderPage(page);
        //                     renderPage(page + 1);

        //                     if (soundEnabled) {
        //                         try {
        //                             flipSound.currentTime = 0;
        //                             flipSound.play();
        //                         } catch (e) {}
        //                     }
        //                 },
        //                 turned: function(event, page, view) {
        //                     reloadPages(page);
        //                 }
        //             }
        //         });

        //          console.log('PDF loaded with ' + pdf.numPages + ' pages');


        //         // 3. Initial page render
        //         renderPage(1);
        //         if (pdf.numPages > 1) renderPage(2);

        //         // 4. Attach controls, passing the initialized turn.js instance
        //         attachControls($flipbook); 

        //     }).catch(err => {
        //         console.error('PDF load failed:', err);
        //         // Display error if PDF fails to load
        //         $('#flipbook').html('<p class="text-danger">Failed to load PDF: ' + err.message + '. Please ensure the PDF file path is correct or the file exists at that path.</p>');
        //     });
        // }


        function loadFlipbook(filePath) {
            let $flipbook = $('#flipbook');

            pdfjsLib.getDocument(filePath).promise.then(function (pdf) {
                pdfDoc = pdf;
                $flipbook.empty();

                $('#page-slider').attr('max', pdf.numPages);

                let pagesHtml = "";
                for (let i = 1; i <= pdf.numPages; i++) {
                    pagesHtml += `
                <div class="page">
                     <canvas id="canvas-${i}"></canvas>
                </div>`;
                }

                $flipbook.html(pagesHtml);

                let book = $flipbook.turn({
                    width: bookWidth,
                    height: bookHeight,
                    autoCenter: true,
                    gradients: true,
                    acceleration: false,
                    when: {
                        turning: function (event, page) {
                            $('#page-slider').val(page);
                            if (soundEnabled) flipSound.play();
                        },
                        turned: function (event, page) {
                            reloadPages(page);
                        }
                    }
                });

                attachControls(book);

                // Initial page render
                renderPage(1);
            }).catch(err => {
                console.error("PDF load failed:", err);
                $flipbook.html('<p style="color:red;">Error loading PDF.</p>');
            });
        }

        // --- Event Listeners for PDF Links ---

        // For featured section (blog-categiry pdf-link)





        // this code only show pdf ................................start.......when click viewdetails
        // $(document).on("click", ".pdf-link", function () {
        //     let pdfUrl = $(this).data("pdf");
        //     console.log("Loading PDF:", pdfUrl);

        //     if (!pdfUrl) {
        //         alert("PDF URL is missing!");
        //         return;
        //     }

        //     // Set iframe src
        //     $("#pdfViewer").attr("src", pdfUrl);

        //     // Show modal
        //     let modal = new bootstrap.Modal(document.getElementById("myModal"));
        //     modal.show();
        // });
        // this code only show ....................END ,........pdf when click viewdetails



    </script>


@endsection