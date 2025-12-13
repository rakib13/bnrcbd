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
                    <img src="{{ asset('img/leadership.jpg') }}" class="d-block w-100 h-100"
                        style="object-fit: cover; object-position: top center;" alt="Slide 1">
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
                    
                    <div class="row">
                        @forelse ($otherSectors as $item)
                            <div class="col-sm-6 col-lg-4 col-xl-3 d-flex">
                                <div class="blog-item d-flex flex-column w-100">
                                    <div class="blog-img">
                                        <img src="{{ asset($item->thumbnail) }}" class="img-fluid"
                                            alt="{{ $item->book_title }}">
                                        {{-- <div class="blog-categiry pdf-link py-2 px-4" data-pdf="{{ $item->link }}">
                                            <span>View Details</span>
                                        </div> --}}
                                        <div class="blog-categiry pdf-link py-2 px-4" data-bs-toggle="modal"
                                            data-bs-target="#myModal" data-pdf="{{ asset($item->link) }}">
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
        </div>

        <!-- other sector ......END.......................... -->
        <!-- Modal -->
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


    </div>

    <!-- Service End -->

@endsection

@section('footer-content')
    {{--
    <script src="{{ asset('js/turn.js') }}"></script>
    <script src="{{ asset('js/pdf.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/3/turn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.js"></script>

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

        // pdfjsLib.GlobalWorkerOptions.workerSrc = "{{ asset('js/pdf.worker.js') }}";
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.worker.min.js';

        // === PDF MODAL ===
        const bookWidth = 1000,
            bookHeight = 650,
            pageWidth = bookWidth / 2,
            pageHeight = bookHeight;
        let pdfDoc = null,
            userZoom = 1.0,
            soundEnabled = true;
        const flipSound = new Audio('https://www.soundjay.com/buttons/sounds/page-flip-01a.mp3');

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
                    $pageDiv.append(
                        '<div class="error-message" style="color:red; margin-top: 10px;">Error rendering page: ' +
                        pageErr.message + '</div>');
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