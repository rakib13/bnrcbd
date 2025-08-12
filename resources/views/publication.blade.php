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
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-danger display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Publications</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active text-primary">Publications</li>
        </ol>
    </div>
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
                    <option value="political studies">Political Studies</option>
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
        <div class="row" id="publicationList">
            @foreach ($publishes as $publish)
                <!-- <div class="col-md-6 col-lg-4 blog-item mb-4"
                    data-title="{{ strtolower($publish->book_title) }}"
                    data-author="{{ strtolower($publish->book_author) }}"
                    data-type="{{ strtolower($publish->type ?? '') }}">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $publish->book_title }}</h5>
                            <p class="card-text">
                                <strong>Author:</strong> {{ $publish->book_author }}<br>
                                <strong>Published:</strong>
                                {{ \Carbon\Carbon::parse($publish->publish_date)->format('F Y') }}
                            </p>
                        </div>
                     </div>
                </div> -->
            @endforeach
        </div> 

        <!-- filter end -->

        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">

            <br>
            <!-- <h4 class="text-primary">Our Publications</h4> -->
            <!-- <h1 class="display-4 mb-4">News And Updates</h1> -->

        </div>
        <section id="featured" class="pdf-gallery">

            <div class="row g-4 justify-content-center">
                <div class="w-100">
                    <h4 class="text-primary mb-4">Featured</h4>
                    <p class="mb-3">Discover our most influential research and key publications. This section
                        highlights groundbreaking studies, expert analyses, and thought-provoking findings that
                        shape discussions in critical fields. Start here to explore major contributions that drive
                        policy and change.</p>
                </div>

           {{-- Dynamic Newsletter Items from Database --}}
                @forelse ($feature as $item)
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
                    <p>No Featured found.</p>
                @endforelse

            </div>
        </section>



        <!-- another row..............................Newsletters -->

        <!-- Blog Item 5 -->

        <section id="newsletters" class="pdf-gallery">
            <div class="row g-4 justify-content-center">
                <div class="w-100">
                    <h4 class="text-primary mb-4">Newsletters</h4>
                    <p class="mb-3" style="text-align: justify;">
                        Stay up to date with curated insights! Our newsletters bring you timely articles, expert
                        opinions,
                        and emerging trends, keeping you informed about the latest developments in governance, policy,
                        and research.
                        Subscribe to receive updates or browse past editions to stay in the loop.
                    </p>
                </div>

                {{-- Dynamic Newsletter Items from Database --}}
                @forelse ($newsletters as $item)
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

                <!-- Blog Item another row...........................Conference Proceedings -->
                <section id="conference-proceedings" class="pdf-gallery">
                    <div class="row g-4 justify-content-center">
                        <div class="w-100">
                            <h4 class="text-primary mb-4">Conference Proceedings</h4>
                            <p class="mb-3" style="text-align: justify;">
                                Browse through comprehensive conference proceedings that encapsulate in-depth
                                discussions, expert papers, and outcome reports from significant events in governance
                                and research.
                            </p>
                        </div>

                        @forelse ($conferenceProceedings as $item)
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
                            <p>No Conference Proceedings found.</p>
                        @endforelse
                    </div>
                </section>

                <!-- another row 4...............Multimedia Resources........... -->
                <!-- Blog Item 5 -->
                <section id="multimedia-resources" class="pdf-gallery">
                    <div class="row g-4 justify-content-center">
                        <div class="w-100">
                            <h4 class="text-primary mb-4">Multimedia Resources</h4>
                            <p class="mb-3" style="text-align: justify;">
                                Explore our diverse collection of multimedia resources, including videos, infographics,
                                and interactive content, designed to provide a visual understanding of key governance,
                                policy, and research topics.
                            </p>
                        </div>

                        @forelse ($multimediaResources as $item)
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
                            <p>No Multimedia Resources found.</p>
                        @endforelse
                    </div>
                </section>



                <!-- Modal -->
                <div class="custom-overlay" id="customPdfModal" style="display:none">
                    <div class="custom-content">
                        <span class="custom-close" id="customCloseBtn">&times;</span>
                        <iframe src="" id="customPdfFrame" width="100%" height="100%"></iframe>
                    </div>
                </div>
            </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    @include('layouts.footer')
    <script>
                    document.addEventListener('DOMContentLoaded', () => {
            const searchBox = document.getElementById('searchBox');
            const authorFilter = document.getElementById('authorFilter');
            const typeFilter = document.getElementById('typeFilter');
            const topicFilter = document.getElementById('topicFilter');
            const clearBtn = document.getElementById('clearFilters');

            const allItems = document.querySelectorAll('.blog-item');

            function filterItems() {
                const keyword = searchBox.value.trim().toLowerCase();
                const author = authorFilter.value.trim().toLowerCase();
                const type = typeFilter.value.trim().toLowerCase();
                const topic = topicFilter.value.trim().toLowerCase();

                let anyVisible = false;

                allItems.forEach(item => {
                const title = (item.dataset.title || '').toLowerCase();
                const itemAuthor = (item.dataset.author || '').toLowerCase();
                const itemType = (item.dataset.type || '').toLowerCase();
                const itemTopic = (item.dataset.topic || '').toLowerCase();

                const matchesKeyword = !keyword || title.includes(keyword) || itemAuthor.includes(keyword);
                const matchesAuthor = !author || itemAuthor.includes(author);
                const matchesType = !type || itemType === type;
                const matchesTopic = !topic || itemTopic === topic;

                const show = matchesKeyword && matchesAuthor && matchesType && matchesTopic;

                item.style.display = show ? '' : 'none';

                if (show) anyVisible = true;
                });

                // Hide sections with no visible items (optional)
                document.querySelectorAll('section.pdf-gallery').forEach(section => {
                const visibleItems = section.querySelectorAll('.blog-item:not([style*="display: none"])');
                section.style.display = visibleItems.length ? '' : 'none';
                });

                // Show or hide no results message
                let noResults = document.getElementById('noResultsMessage');
                if (!noResults) {
                noResults = document.createElement('p');
                noResults.id = 'noResultsMessage';
                noResults.style.textAlign = 'center';
                noResults.style.marginTop = '1rem';
                noResults.textContent = 'No publications found.';
                document.body.appendChild(noResults);
                }
                noResults.style.display = anyVisible ? 'none' : 'block';
            }

            function clearFilters() {
                // Reset inputs/selects to default empty
                searchBox.value = '';
                authorFilter.value = '';
                typeFilter.value = '';
                topicFilter.value = '';

                // Show all items
                allItems.forEach(item => (item.style.display = ''));

                // Show all sections
                document.querySelectorAll('section.pdf-gallery').forEach(section => {
                section.style.display = '';
                });

                // Hide no results message if any
                const noResults = document.getElementById('noResultsMessage');
                if (noResults) noResults.style.display = 'none';
            }

            // Attach listeners
            [searchBox, authorFilter, typeFilter,topicFilter].forEach(el => {
                if (el) {
                el.addEventListener('input', filterItems);
                el.addEventListener('change', filterItems);
                }
            });

            clearBtn.addEventListener('click', e => {
                e.preventDefault();
                clearFilters();
            });

            // Initial state
            clearFilters();
            });

    </script>


</body>

</html>
