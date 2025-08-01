@extends('dashboard.layouts.mainLayout')

@section('dashboard-content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card shadow border-0">
                <div class="card-body p-5">

                    <h3 class="text-center text-primary mb-4">Book Details of "{{ $publish->book_name }}"</h3>
                    <div class="row g-3">
                        <!-- Button -->
                        <div class="col-md-12">
                            <a class="btn btn-primary px-3 py-2 me-3" href="{{ url('/all-book') }}">All Book </a>
                            <a class="btn btn-info px-4 py-2" href="{{ url('/edit-book/'.$publish->id) }}">Edit</a>
                        </div>

                        <div class="col-md-8">
                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-md-12">
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control" id="book_name" name="book_name"
                                            value="{{ $publish->book_name }}" placeholder="Book Name" disabled>
                                        <label for="book_name">Book Name</label>
                                    </div>
                                </div>

                                <!-- User Name -->
                                <div class="col-md-12">
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control" id="book_title" name="book_title"
                                            value="{{ $publish->book_title }}" placeholder="Book Title" disabled>
                                        <label for="book_title">Book Title</label>
                                    </div>
                                </div>

                                <!-- Author -->
                                <div class="col-md-12">
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control" id="book_author" name="book_author"
                                            value="{{ $publish->book_author }}" placeholder="Book Author" disabled>
                                        <label for="book_author">Book Author</label>
                                    </div>
                                </div>



                                <!-- Publish Date -->
                                <div class="col-md-12">
                                    <div class="form-floating mb-2">
                                        <input type="date" class="form-control" id="publish_date" name="publish_date"
                                            value="{{ $publish->publish_date }}" placeholder="Publish Date" disabled>
                                        <label for="publish_date">Publish Date</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <img src="/{{ $publish->thumbnail }}" class="w-100 h-auto" alt="">
                        </div>

                        <!-- Book Summary -->
                        <div class="col-md-12 mb-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="book_summary" name="book_summary"
                                    value="{{ $publish->book_summary }}" placeholder="Book Summary" disabled>
                                <label for="book_summary">Book Summary</label>
                            </div>
                        </div>

                        <!-- File Link -->
                        <div class="col-md-6 mb-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="link" name="link"
                                    value="{{ $publish->link }}" placeholder="File Link" disabled>
                                <label for="link">File Link</label>
                            </div>
                        </div>

                        <!-- Topic Select -->
                        <div class="col-md-6 mb-2">
                            <div class="form-floating">
                                <select class="form-select" id="topic" name="topic" disabled>
                                    <option value="">All Topics</option>
                                    <option {{ $publish->topic == 'political-study' ? 'selected' : '' }}
                                        value="political-study">- Political Studies</option>
                                    <option {{ $publish->topic == 'economical-study' ? 'selected' : '' }}
                                        value="economical-study">- Economic Studies</option>
                                    <option {{ $publish->topic == 'social-study' ? 'selected' : '' }} value="social-study">
                                        -
                                        Social Studies</option>
                                    <option {{ $publish->topic == 'others' ? 'selected' : '' }} value="others">- Others
                                    </option>
                                </select>
                                <label for="topic">topic</label>
                            </div>
                        </div>

                        <!-- Topic Select -->
                        <div class="col-md-6 mb-2">
                            <div class="form-floating">
                                <select class="form-select" id="type" name="type" disabled>
                                    <option value="">All Types</option>
                                    <option {{ $publish->type == 'research-paper' ? 'selected' : '' }}
                                        value="research-paper">- Research Papers</option>
                                    <option {{ $publish->type == 'policy-brief' ? 'selected' : '' }} value="policy-brief">-
                                        Policy Briefs</option>
                                    <option {{ $publish->type == 'report-and-analysis' ? 'selected' : '' }}
                                        value="report-and-analysis">- Reports and Analysis</option>
                                    <option {{ $publish->type == 'book-and-monographs' ? 'selected' : '' }}
                                        value="book-and-monographs">- Books and Monographs</option>
                                    <option {{ $publish->type == 'case-studies' ? 'selected' : '' }} value="case-studies">-
                                        Case Studies</option>
                                    <option {{ $publish->type == 'conference-proceedings' ? 'selected' : '' }}
                                        value="conference-proceedings">- Conference Proceedings</option>
                                    <option {{ $publish->type == 'newsletters' ? 'selected' : '' }} value="newsletters">-
                                        Newsletters</option>
                                </select>
                                <label for="topic">topic</label>
                            </div>
                        </div>

                        <!-- Category Select -->
                        <div class="col-md-12 mb-2">
                            <div class="form-floating">
                                <select class="form-select" id="category_of_publication" name="category_of_publication"
                                    disabled>
                                    <option value="">Select Category</option>
                                    <option {{ $publish->category_of_publication == 'featured' ? 'selected' : '' }}
                                        value="featured">- Featured</option>
                                    <option {{ $publish->category_of_publication == 'newsletters' ? 'selected' : '' }}
                                        value="newsletters">- Newsletters</option>
                                    <option
                                        {{ $publish->category_of_publication == 'conference-proceedings' ? 'selected' : '' }}
                                        value="conference-proceedings">- Conference Proceedings</option>
                                    <option
                                        {{ $publish->category_of_publication == 'multimedia-resources' ? 'selected' : '' }}
                                        value="multimedia-resources">- Multimedia Resources</option>
                                    <option
                                        {{ $publish->category_of_publication == 'leadership-legacy' ? 'selected' : '' }}
                                        value="leadership-legacy">- Leadership Legacy: A Tradition of Excellence
                                    </option>
                                    <option
                                        {{ $publish->category_of_publication == 'economic-advancements' ? 'selected' : '' }}
                                        value="economic-advancements">- Economic Advancements: Driving Growth,
                                        Empowering Progress</option>
                                    <option
                                        {{ $publish->category_of_publication == 'restoring-democracy' ? 'selected' : '' }}
                                        value="restoring-democracy">- Restoring Democracy: Championing People's
                                        Voices, Building Nations</option>
                                    <option
                                        {{ $publish->category_of_publication == 'social-development' ? 'selected' : '' }}
                                        value="social-development">- Social Development: Transforming Lives,
                                        Creating Equity</option>
                                    <option
                                        {{ $publish->category_of_publication == 'environmental-vision' ? 'selected' : '' }}
                                        value="environmental-vision">- Environmental Vision: Sustainability Today
                                        for Tomorrow's Prosperity</option>
                                    <option {{ $publish->category_of_publication == 'other' ? 'selected' : '' }}
                                        value="other">- Other Sectors: Beyond Boundaries, Expanding
                                        Horizons.</option>
                                </select>
                                <label for="topic">topic</label>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div>
            </div>
        </div>
    </div>
@endsection
