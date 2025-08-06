@extends('dashboard.layouts.mainLayout')

@section('dashboard-content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card shadow border-0">
                <div class="card-body p-5">

                    <h3 class="text-center text-primary mb-4">Book Details of "{{ $leadership->book_name }}"</h3>
                    <div class="row g-3">
                        <!-- Button -->
                        <div class="col-md-12">
                            <a class="btn btn-primary px-3 py-2 me-3" href="{{ url('/all-leadership') }}">All Book </a>
                            <a class="btn btn-info px-4 py-2" href="{{ url('/edit-leadership/'.$leadership->id) }}">Edit</a>
                        </div>

                        <div class="col-md-8">
                            <div class="row">
                                <!-- Full Name -->
                                <div class="col-md-12">
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control" id="book_name" name="book_name"
                                            value="{{ $leadership->book_name }}" placeholder="Book Name" disabled>
                                        <label for="book_name">Book Name</label>
                                    </div>
                                </div>

                                <!-- User Name -->
                                <div class="col-md-12">
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control" id="book_title" name="book_title"
                                            value="{{ $leadership->book_title }}" placeholder="Book Title" disabled>
                                        <label for="book_title">Book Title</label>
                                    </div>
                                </div>

                                <!-- Author -->
                                <div class="col-md-12">
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control" id="book_author" name="book_author"
                                            value="{{ $leadership->book_author }}" placeholder="Book Author" disabled>
                                        <label for="book_author">Book Author</label>
                                    </div>
                                </div>



                                <!-- Publish Date -->
                                <div class="col-md-12">
                                    <div class="form-floating mb-2">
                                        <input type="date" class="form-control" id="publish_date" name="publish_date"
                                            value="{{ $leadership->publish_date }}" placeholder="Publish Date" disabled>
                                        <label for="publish_date">Publish Date</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <img src="/{{ $leadership->thumbnail }}" class="w-100 h-auto" alt="">
                        </div>

                        <!-- Book Summary -->
                        <div class="col-md-12 mb-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="book_summary" name="book_summary"
                                    value="{{ $leadership->book_summary }}" placeholder="Book Summary" disabled>
                                <label for="book_summary">Book Summary</label>
                            </div>
                        </div>

                        <!-- File Link -->
                        <div class="col-md-6 mb-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="link" name="link"
                                    value="{{ $leadership->link }}" placeholder="File Link" disabled>
                                <label for="link">File Link</label>
                            </div>
                        </div>

                        <!-- Tag Select -->
                        <div class="col-md-12 mb-2">
                            <div class="form-floating">
                                <select class="form-select" id="tag" name="tag"
                                    disabled>
                                    <option
                                        {{ $leadership->category_of_publication == 'economic-advancements' ? 'selected' : '' }}
                                        value="economic-advancements">- Economic Advancements: Driving Growth,
                                        Empowering Progress</option>
                                    <option
                                        {{ $leadership->category_of_publication == 'restoring-democracy' ? 'selected' : '' }}
                                        value="restoring-democracy">- Restoring Democracy: Championing People's
                                        Voices, Building Nations</option>
                                    <option
                                        {{ $leadership->category_of_publication == 'social-development' ? 'selected' : '' }}
                                        value="social-development">- Social Development: Transforming Lives,
                                        Creating Equity</option>
                                    <option
                                        {{ $leadership->category_of_publication == 'environmental-vision' ? 'selected' : '' }}
                                        value="environmental-vision">- Environmental Vision: Sustainability Today
                                        for Tomorrow's Prosperity</option>
                                    <option {{ $leadership->category_of_publication == 'other' ? 'selected' : '' }}
                                        value="other">- Other Sectors: Beyond Boundaries, Expanding
                                        Horizons.</option>
                                </select>
                                <label for="tag">Category</label>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div>
            </div>
        </div>
    </div>
@endsection
