@extends('dashboard.layouts.mainLayout')

@section('dashboard-content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h3 class="text-center text-primary mb-4">Research & Publications</h3>
        </div>
        <div class="card text-white bg-primary me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h3 text-white">Featured</div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: 04</h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: 50</p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-book/featured') }}">See More...</a>
            </div>
        </div>
        <div class="card text-white bg-secondary me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h3 text-white">Newsletters</div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: 04</h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: 50</p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-book/newsletters') }}">See More...</a>
            </div>
        </div>
        <div class="card text-white bg-success me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h4 text-white">Conference Proceedings</div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: 04</h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: 50</p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-book/conference-proceedings') }}">See More...</a>
            </div>
        </div>
        <div class="card text-white bg-danger me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h4 text-white">Multimedia Resources</div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: 04</h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: 50</p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-book/multimedia-resources') }}">See More...</a>
            </div>
        </div>

        <div class="col-12">
            <h3 class="text-center text-primary mb-4">Leadership Legacy</h3>
        </div>

        <div class="card text-white bg-warning me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h5 text-white">Leadership Legacy: A Tradition of Excellence</div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: 04</h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: 50</p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-book/leadership-legacy') }}">See More...</a>
            </div>
        </div>
        <div class="card text-white bg-info me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h5 text-white">Economic Advancements: Driving Growth, Empowering Progress</div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: 04</h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: 50</p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-book/economic-advancements') }}">See More...</a>
            </div>
        </div>
        <div class="card bg-light me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h5 text-black">Restoring Democracy: Championing People's Voices, Building Nations</div>
            <div class="card-body">
                <h5 class="card-title text-black">Published Books: 04</h5>
                <p class="card-text text-black fst-italic pb-2">Total Book in Archive: 50</p>
                <a class="text-primary px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-book/restoring-democracy') }}">See More...</a>
            </div>
        </div>
        <div class="card text-white bg-dark me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h5 text-white">Social Development: Transforming Lives, Creating Equity </div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: 04</h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: 50</p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-book/social-development') }}">See More...</a>
            </div>
        </div>
        <div class="card text-white bg-success me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h5 text-white">Environmental Vision: Sustainability Today for Tomorrow's Prosperity</div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: 04</h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: 50</p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-book/environmental-vision') }}">See More...</a>
            </div>
        </div>
        <div class="card text-white bg-primary me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h5 text-white">Other sectors: Beyond Boundaries, Expanding Horizons.</div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: 04</h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: 50</p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-book/other-sectors') }}">See More...</a>
            </div>
        </div>
    </div>
@endsection
