@extends('dashboard.layouts.mainLayout')
@section('dashboard-content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card shadow border-0">
                <div class="card-body p-5">
                    <h3 class="text-center text-primary mb-4">Add Book</h3>
                    <form action="{{ url('/add-leadership') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="book_name" name="book_name"
                                        placeholder="Book Name" required>
                                    <label for="book_name">Book Name</label>
                                </div>
                                @if ($errors->has('book_name'))
                                    <span class="alert alert-danger m-0.5 p-0">{{ $errors->first('book_name') }}</span>
                                @endif
                            </div>

                            <!-- User Name -->
                            <div class="col-md-6">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="book_title" name="book_title"
                                        placeholder="Book Title" required>
                                    <label for="book_title">Book Title</label>
                                </div>
                                @if ($errors->has('book_title'))
                                    <span class="alert alert-danger m-0.5 p-0">{{ $errors->first('book_title') }}</span>
                                @endif
                            </div>

                            <!-- Summary -->
                            <div class="col-md-12">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="book_summary" name="book_summary"
                                        placeholder="Book Summary" required>
                                    <label for="book_summary">Book Summary</label>
                                </div>
                                @if ($errors->has('book_summary'))
                                    <span class="alert alert-danger m-0.5 p-0">{{ $errors->first('book_summary') }}</span>
                                @endif
                            </div>

                            <!-- Author -->
                            <div class="col-md-6">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="book_author" name="book_author"
                                        placeholder="Book Author" required>
                                    <label for="book_author">Book Author</label>
                                </div>
                                @if ($errors->has('book_author'))
                                    <span class="alert alert-danger m-0.5 p-0">{{ $errors->first('book_author') }}</span>
                                @endif
                            </div>

                            <!-- Thumbnail -->
                            <div class="col-md-6">
                                <div class="form-floating mb-2">
                                    <input type="file" class="form-control" id="thumbnail" name="thumbnail"
                                        placeholder="Thumbnail" accept="image/" required>
                                    <label for="thumbnail">Thumbnail</label>
                                </div>
                                @if ($errors->has('thumbnail'))
                                    <span class="alert alert-danger m-0.5 p-0">{{ $errors->first('thumbnail') }}</span>
                                @endif
                            </div>

                            <!-- File Link -->
                            <div class="col-md-6">
                                <div class="form-floating mb-2">
                                    <input type="file" class="form-control" id="link" name="link"
                                        placeholder="File Link" required>
                                    <label for="link">File Link</label>
                                </div>
                                @if ($errors->has('link'))
                                    <span class="alert alert-danger m-0.5 p-0">{{ $errors->first('link') }}</span>
                                @endif
                            </div>

                            <!-- Publish Date -->
                            <div class="col-md-6">
                                <div class="form-floating mb-2">
                                    <input type="date" class="form-control" id="publish_date" name="publish_date"
                                        placeholder="Publish Date" value="" required>
                                    <label for="publish_date">Publish Date</label>
                                </div>
                                @if ($errors->has('publish_date'))
                                    <span class="alert alert-danger m-0.5 p-0">{{ $errors->first('publish_date') }}</span>
                                @endif
                            </div>

                            <!-- Category Select -->
                            <div class="col-md-12">
                                <div class="form-floating mb-2">
                                    <select class="form-select" id="tag" name="tag" required>
                                        <option value="economic-advancements">- Economic Advancements: Driving
                                            Growth,Empowering Progress</option>
                                        <option value="restoring-democracy">- Restoring Democracy: Championing People's
                                            Voices, Building Nations</option>
                                        <option value="social-development">- Social Development: Transforming Lives,
                                            Creating Equity</option>
                                        <option value="environmental-vision">- Environmental Vision: Sustainability Today
                                            for Tomorrow's Prosperity</option>
                                        <option value="other-sectors">- Other Sectors: Beyond Boundaries, Expanding
                                            Horizons.</option>
                                    </select>
                                    <label for="topic">topic</label>
                                </div>
                                @if ($errors->has('tag'))
                                    <span class="alert alert-danger m-0.5 p-0">{{ $errors->first('tag') }}</span>
                                @endif
                            </div>
                            <!-- Submit Button -->
                            <div class="col-md-12">
                                <button class="btn btn-primary w-100 py-3 " type="submit">Submit</button>
                            </div>
                        </div> <!-- row -->
                    </form>
                </div> <!-- card-body -->
            </div> <!-- card -->
        </div> <!-- col -->
    </div> <!-- row -->
@endsection
