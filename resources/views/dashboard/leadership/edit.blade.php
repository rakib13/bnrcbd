@extends('dashboard.layouts.mainLayout')

@section('dashboard-content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card shadow border-0">
                <div class="card-body p-5">

                    <h3 class="text-center text-primary mb-4">Book Details of "{{ $leadership->book_name }}"</h3>
                    <form action="{{ url('/update-leadership/' . $leadership->id) }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf
                        <div class="row g-3">
                            <!-- Button -->
                            <div class="col-md-12">
                                <a class="btn btn-primary px-3 py-2 me-3" href="{{ url('/all-leadership') }}">Back to All
                                    Book
                                </a>
                            </div>

                            <div class="col-md-8">
                                <div class="row">
                                    <!-- Full Name -->
                                    <div class="col-md-12">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="book_name" name="book_name"
                                                value="{{ $leadership->book_name }}" placeholder="Book Name" required>
                                            <label for="book_name">Book Name</label>
                                        </div>
                                    </div>

                                    <!-- User Name -->
                                    <div class="col-md-12">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="book_title" name="book_title"
                                                value="{{ $leadership->book_title }}" placeholder="Book Title" required>
                                            <label for="book_title">Book Title</label>
                                        </div>
                                    </div>

                                    <!-- Author -->
                                    <div class="col-md-12">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="book_author" name="book_author"
                                                value="{{ $leadership->book_author }}" placeholder="Book Author" required>
                                            <label for="book_author">Book Author</label>
                                        </div>
                                    </div>

                                    <!-- Publish Date -->
                                    <div class="col-md-12">
                                        <div class="form-floating mb-2">
                                            <input type="date" class="form-control" id="publish_date" name="publish_date"
                                                value="{{ $leadership->publish_date }}" placeholder="Publish Date" required>
                                            <label for="publish_date">Publish Date</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-2">
                                            <input type="file" class="form-control" id="thumbnail" name="thumbnail"
                                                placeholder="Thumbnail" accept="image/">
                                            <label for="thumbnail">Thumbnail</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <img src="/{{ $leadership->thumbnail }}" class="w-100 h-auto" alt="">
                                <input type="hidden" name="old_image" id="old_image"
                                    value="{{ $leadership->thumbnail }}"></input>

                            </div>

                            <!-- Book Summary -->
                            <div class="col-md-12 mb-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="book_summary" name="book_summary"
                                        value="{{ $leadership->book_summary }}" placeholder="Book Summary" required>
                                    <label for="book_summary">Book Summary</label>
                                </div>
                            </div>

                            <!-- File Link -->
                            <div class="col-md-6 mb-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="link" name="link"
                                        value="{{ $leadership->link }}" placeholder="File Link" required>
                                    <label for="link">File Link</label>
                                </div>
                            </div>

                            <!-- Category Select -->
                            <div class="col-md-12 mb-2">
                                <div class="form-floating">
                                    <select class="form-select" id="tad" name="tag" required>
                                        <option value="">Select Category</option>
                                        <option {{ $leadership->tag == 'economic-advancements' ? 'selected' : '' }}
                                            value="economic-advancements">- Economic Advancements: Driving Growth,
                                            Empowering Progress</option>
                                        <option {{ $leadership->tag == 'restoring-democracy' ? 'selected' : '' }}
                                            value="restoring-democracy">- Restoring Democracy: Championing People's
                                            Voices, Building Nations</option>
                                        <option {{ $leadership->tag == 'social-development' ? 'selected' : '' }}
                                            value="social-development">- Social Development: Transforming Lives,
                                            Creating Equity</option>
                                        <option {{ $leadership->tag == 'environmental-vision' ? 'selected' : '' }}
                                            value="environmental-vision">- Environmental Vision: Sustainability Today
                                            for Tomorrow's Prosperity</option>
                                        <option {{ $leadership->tag == 'other' ? 'selected' : '' }} value="other">- Other
                                            Sectors: Beyond Boundaries, Expanding
                                            Horizons.</option>
                                    </select>
                                    <label for="topic">topic</label>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="col-md-12">
                                <button class="btn btn-primary w-100 py-3 " type="submit">Update</button>
                            </div>
                        </div> <!-- row -->
                </div>
            </div>
        </div>
    </div>
@endsection
