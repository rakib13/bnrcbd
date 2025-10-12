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
        {{-- <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Share Your Perspective, Make an
            Impact</h4> --}}
        <img src="{{ asset('/img/shareyourthoughts.jpg') }}" alt="BNRC Background" class="w-100" style="height: auto;">
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary"> Share your Thaught</li> --}}
        </ol>
        {{-- </div> --}}
    </div>
    <!-- Header End -->

    <!-- 404 Start -->
    <div class="container-fluid bg-light py-2">
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="container my-5">
                    <div class="container my-5">
                        <div class="row g-4 justify-content-center">

                            <!-- Section Card -->
                            <div class="col-lg-10 col-md-11 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="info-card p-4 rounded-4 shadow-sm h-100">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-box me-3">
                                            <i class="fas fa-comments text-primary"></i>
                                        </div>
                                        <h4 class="text-primary mb-0">Share Your Perspective, Make an Impact</h4>
                                    </div>
                                    <p class="custom-text text-justify">
                                        Community engagement fuels progress by bringing diverse perspectives together to
                                        shape impactful initiatives. Your feedback—whether about the BNRC, the BNP, or
                                        national and international issues—helps identify opportunities, address challenges,
                                        and inspire meaningful change. By sharing your insights, you contribute to solutions
                                        that drive the collective growth of our country. Together, we can refine ideas,
                                        strengthen collaboration, and build a future that reflects the aspirations of
                                        generations to come. Submit your thoughts using the form below and join the
                                        conversation that makes a difference.
                                    </p>
                                </div>
                            </div>

                            <!-- Section Card -->
                            <div class="col-lg-10 col-md-11 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="info-card p-4 rounded-4 shadow-sm h-100">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-box me-3">
                                            <i class="fas fa-lightbulb text-warning"></i>
                                        </div>
                                        <h4 class="text-primary mb-0">How We Use Your Input</h4>
                                    </div>
                                    <p class="custom-text text-justify">
                                        Your contributions play a vital role in shaping policy briefs, research
                                        publications, and strategic discussions, ensuring that informed perspectives drive
                                        meaningful change. Submissions may be referenced in reports or policy
                                        recommendations to support evidence-based decision-making. Rest assured, all shared
                                        insights are utilized solely for research and development purposes, maintaining the
                                        integrity and focus of BNRC’s mission.
                                </div>
                            </div>

                            <!-- Section Card -->
                            <div class="col-lg-10 col-md-11 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="info-card p-4 rounded-4 shadow-sm h-100">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-box me-3">
                                            <i class="fas fa-shield-alt text-success"></i>
                                        </div>
                                        <h4 class="text-primary mb-0">Confidentiality & Privacy</h4>
                                    </div>
                                    <p class="custom-text text-justify">
                                        Your privacy is important to us. Any personal details you provide will remain
                                        protected and will never be disclosed without your consent. You have the option to
                                        submit your thoughts anonymously or choose to have your name credited for
                                        recognition. For more details on how we handle your data, please review our Privacy
                                        Policy.
                                    </p>
                                </div>
                            </div>

                            <!-- Section Card -->
                            <div class="col-lg-10 col-md-11 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="info-card p-4 rounded-4 shadow-sm h-100">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-box me-3">
                                            <i class="fas fa-book-open text-info"></i>
                                        </div>
                                        <h4 class="text-primary mb-0">Submission Guidelines</h4>
                                    </div>
                                    <p class="custom-text text-justify">
                                        When sharing your thoughts, please ensure they are grounded in reliable and
                                        well-sourced information to maintain factual accuracy. We encourage a professional
                                        and respectful approach to discussions, fostering a constructive exchange of ideas.
                                        Additionally, submissions should be policy-oriented, focusing on actionable insights
                                        that contribute to national development and meaningful research.
                                    </p>
                                </div>
                            </div>

                            <!-- Section Card -->
                            <div class="col-lg-10 col-md-11 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="info-card p-4 rounded-4 shadow-sm h-100">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-box me-3">
                                            <i class="fas fa-file-contract text-danger"></i>
                                        </div>
                                        <h4 class="text-primary mb-0">Terms & Conditions</h4>
                                    </div>
                                    <p class="custom-text text-justify">
                                        By sharing your insights, you grant BNRC permission to reference them in research
                                        publications, policy discussions, and strategic recommendations. All contributions
                                        should align with ethical research practices and uphold the principles of national
                                        interest, ensuring constructive and meaningful discourse.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <form method="POST" action="{{ route('feedback.send') }}" enctype="multipart/form-data"
                        class="feedback-form">
                        @csrf
                        <div class="card shadow-lg border-0 rounded-4 p-4">
                            <h3 class="text-primary fw-bold mb-4 text-center">💬 Submit Your Thoughts</h3>

                            <!-- Submission Status -->
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                                <h6 class="text-dark fw-semibold mb-0 me-3">Choose Submission Type:</h6>

                                <div class="form-check d-flex align-items-center m-0">
                                    <input class="form-check-input me-2" type="checkbox" name="anonymous_check"
                                        id="anonymousCheck" onchange="toggleSection('anonymousSection', this)">
                                    <label class="form-check-label fw-medium" for="anonymousCheck">Remain Anonymous</label>
                                </div>

                                <div class="form-check d-flex align-items-center m-0">
                                    <input class="form-check-input me-2" type="checkbox" name="recognized_check"
                                        id="recognizedCheck" onchange="toggleSection('recognizedSection', this)">
                                    <label class="form-check-label fw-medium" for="recognizedCheck">Be Recognized</label>
                                </div>
                            </div>

                            <!-- Anonymous Section -->
                            <div id="anonymousSection" style="display:none;" class="p-3 bg-light rounded-3 border mb-4">
                                <h5 class="text-muted fw-bold mb-3">Anonymous Feedback ✨</h5>
                                <textarea name="anonymous_feedback" class="form-control mb-3" rows="4"
                                    placeholder="Write your feedback here..."></textarea>
                                <input type="file" class="form-control">
                            </div>

                            <!-- Recognized Section -->
                            <div id="recognizedSection" style="display:none;" class="p-3 bg-light rounded-3 border mb-4">
                                <h5 class="text-muted fw-bold mb-3">Recognized Feedback 👤</h5>
                                <textarea name="recognized_feedback" class="form-control mb-3" rows="4"
                                    placeholder="Write your feedback here..."></textarea>
                                <input type="file" class="form-control mb-3">
                                <input type="text" class="form-control mb-3" name="name" placeholder="Your Name">
                                <input type="email" class="form-control mb-3" name="email" placeholder="Your Email">
                                <input type="text" class="form-control mb-3" name="mobile"
                                    placeholder="Your Mobile Number">
                            </div>

                            <!-- Terms -->
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" name="agree_terms" id="agreeTerms"
                                    required>
                                <label class="form-check-label small" for="agreeTerms">
                                    I agree to the <a href="terms.html" class="text-decoration-none">terms</a> &
                                    <a href="privacy.html" class="text-decoration-none">privacy policy</a>.
                                </label>
                            </div>

                            <!-- Submit -->
                            <div class="text-center">
                                <button type="submit"
                                    class="btn btn-primary px-5 py-2 rounded-pill shadow-sm">Submit</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- 404 End -->

    <script>
        function toggleSection(sectionId, checkbox) {
            const anonymousCheck = document.getElementById('anonymousCheck');
            const recognizedCheck = document.getElementById('recognizedCheck');

            // Hide both sections
            document.getElementById('anonymousSection').style.display = 'none';
            document.getElementById('recognizedSection').style.display = 'none';

            // Remove required attributes from all fields
            document.querySelectorAll('#anonymousSection [required], #recognizedSection [required]').forEach(el => {
                el.removeAttribute('required');
            });

            // Show and add required only for the active section
            if (checkbox.id === 'anonymousCheck') {
                recognizedCheck.checked = false;
                if (checkbox.checked) {
                    document.getElementById('anonymousSection').style.display = 'block';
                    document.querySelectorAll('#anonymousSection textarea, #anonymousSection input').forEach(el => {
                        el.setAttribute('required', true);
                    });
                }
            }

            if (checkbox.id === 'recognizedCheck') {
                anonymousCheck.checked = false;
                if (checkbox.checked) {
                    document.getElementById('recognizedSection').style.display = 'block';
                    document.querySelectorAll('#recognizedSection textarea, #recognizedSection input').forEach(el => {
                        el.setAttribute('required', true);
                    });
                }
            }
        }
    </script>

    <!-- <script>
        function toggleSection(sectionId, checkbox) {
            const anonymousCheck = document.getElementById('anonymousCheck');
            const recognizedCheck = document.getElementById('recognizedCheck');

            document.getElementById('anonymousSection').style.display = 'none';
            document.getElementById('recognizedSection').style.display = 'none';

            if (checkbox.id === 'anonymousCheck') {
                recognizedCheck.checked = false;
                if (checkbox.checked) {
                    document.getElementById('anonymousSection').style.display = 'block';
                }
            }

            if (checkbox.id === 'recognizedCheck') {
                anonymousCheck.checked = false;
                if (checkbox.checked) {
                    document.getElementById('recognizedSection').style.display = 'block';
                }
            }
        }
    </script> -->
    <script src="https://kit.fontawesome.com/yourkit.js" crossorigin="anonymous"></script>
@endsection
