@extends('dashboard.layouts.mainLayout')

@section('dashboard-content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h3 class="text-center text-primary mb-4">Research & Publications</h3>
        </div>
        <div class="card text-white bg-primary me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h3 text-white">Featured</div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: <span class="fw-bold"> {{ $object_counter[0] }}</span></h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: <span class="fw-bold">
                        {{ $object_total_counter[0] }} </span></p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-publish/featured') }}">See More...</a>
            </div>
        </div>
        <div class="card text-white bg-secondary me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h3 text-white">Newsletters</div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: <span class="fw-bold"> {{ $object_counter[1] }}</span>
                </h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: <span class="fw-bold">
                        {{ $object_total_counter[1] }} </span></p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-publish/newsletters') }}">See More...</a>
            </div>
        </div>
        <div class="card text-white bg-success me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h4 text-white">Conference Proceedings</div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: <span class="fw-bold"> {{ $object_counter[2] }}</span>
                </h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: <span class="fw-bold">
                        {{ $object_total_counter[2] }} </span></p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-publish/conference-proceedings') }}">See More...</a>
            </div>
        </div>
        <div class="card text-white bg-danger me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h4 text-white">Multimedia Resources</div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: <span class="fw-bold"> {{ $object_counter[3] }}</span>
                </h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: <span class="fw-bold">
                        {{ $object_total_counter[3] }} </span></p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-publish/multimedia-resources') }}">See More...</a>
            </div>
        </div>

        <div class="col-12">
            <h3 class="text-center text-primary mb-4">Leadership Legacy</h3>
        </div>

        <div class="card text-white bg-warning me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h5 text-white">Leadership Legacy: A Tradition of Excellence</div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: <span class="fw-bold"> {{ $object_counter[4] }}</span>
                </h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: <span class="fw-bold">
                        {{ $object_total_counter[4] }} </span></p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-leadership/featured') }}">See More...</a>
            </div>
        </div>
        <div class="card text-white bg-info me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h5 text-white">Economic Advancements: Driving Growth, Empowering Progress</div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: <span class="fw-bold"> {{ $object_counter[5] }}</span>
                </h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: <span class="fw-bold">
                        {{ $object_total_counter[5] }} </span></p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-leadership/economic-advancements') }}">See More...</a>
            </div>
        </div>
        <div class="card bg-light me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h5 text-black">Restoring Democracy: Championing People's Voices, Building Nations</div>
            <div class="card-body">
                <h5 class="card-title text-black">Published Books: <span class="fw-bold"> {{ $object_counter[5] }}</span>
                </h5>
                <p class="card-text text-black fst-italic pb-2">Total Book in Archive: <span class="fw-bold">
                        {{ $object_total_counter[5] }} </span></p>
                <a class="text-primary px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-leadership/restoring-democracy') }}">See More...</a>
            </div>
        </div>
        <div class="card text-white bg-dark me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h5 text-white">Social Development: Transforming Lives, Creating Equity </div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: <span class="fw-bold"> {{ $object_counter[6] }}</span>
                </h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: <span class="fw-bold">
                        {{ $object_total_counter[6] }} </span></p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-leadership/social-development') }}">See More...</a>
            </div>
        </div>
        <div class="card text-white bg-success me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h5 text-white">Environmental Vision: Sustainability Today for Tomorrow's Prosperity
            </div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: <span class="fw-bold"> {{ $object_counter[7] }}</span>
                </h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: <span class="fw-bold">
                        {{ $object_total_counter[7] }} </span></p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-leadership/environmental-vision') }}">See More...</a>
            </div>
        </div>
        <div class="card text-white bg-primary me-5 mb-4" style="max-width: 26rem;">
            <div class="card-header h5 text-white">Other sectors: Beyond Boundaries, Expanding Horizons.</div>
            <div class="card-body">
                <h5 class="card-title text-white">Published Books: <span class="fw-bold"> {{ $object_counter[8] }}</span>
                </h5>
                <p class="card-text fst-italic pb-2">Total Book in Archive: <span class="fw-bold">
                        {{ $object_total_counter[8] }} </span></p>
                <a class="text-white px-2 py-1 me-1 mb-1 fst-italic " style="position: absolute; right: 0; bottom: 0;"
                    href="{{ url('/all-leadership/other-sectors') }}">See More...</a>
            </div>
        </div>
    </div>
@endsection
