<!-- HTML FORM BELOW -->

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
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Share Your Perspective, Make an
            Impact</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary"> Share your Thaught</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- 404 Start -->
<div class="container-fluid bg-light py-2">
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-11 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="w-100">
                    <h4 class="text-primary mb-4">Share Your Perspective, Make an
                        Impact</h4>
                </div>
                <p class="mt-1 mb-4 text-justify">
                    Community engagement fuels progress by bringing diverse perspectives together to shape impactful
                    initiatives. Your feedback— whether about the BNRC, the BNP, or national and international
                    issues—helps identify opportunities, address challenges, and inspire meaningful change. By
                    sharing your insights, you contribute to solutions that drive the collective growth of our
                    country. Together, we can refine ideas, strengthen collaboration, and build a future that
                    reflects the aspirations of generations to come. Submit your thoughts using the form below and
                    join the conversation that makes a difference.
                </p>
            </div>

            <div class="col-lg-10 col-md-11 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="w-100">
                    <h4 class="text-primary mb-4">How We Use Your Input</h4>
                </div>
                <p class="mt-1 mb-4 text-justify">
                    Your contributions play a vital role in shaping policy briefs, research publications, and
                    strategic discussions, ensuring that informed perspectives drive meaningful change. Submissions
                    may be referenced in reports or policy recommendations to support evidence-based
                    decision-making. Rest assured, all shared insights are utilized solely for research and
                    development purposes, maintaining the integrity and focus of BNRC’s mission.
                </p>
            </div>
            <div class="col-lg-10 col-md-11 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="w-100">
                    <h4 class="text-primary mb-4">Confidentiality & Privacy</h4>
                </div>
                <p class="mt-1 mb-4 text-justify">
                    Your privacy is important to us. Any personal details you provide will remain protected and will
                    never be disclosed without your consent. You have the option to submit your thoughts anonymously
                    or
                    choose to have your name credited for recognition. For more details on how we handle your data,
                    please review our Privacy Policy.
                </p>
            </div>

            <div class="col-lg-10 col-md-11 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="w-100">
                    <h4 class="text-primary mb-4">Submission Guidelines</h4>
                </div>
                <p class="mt-1 mb-4 text-justify">
                    When sharing your thoughts, please ensure they are grounded in reliable and well-sourced
                    information to maintain factual accuracy. We encourage a professional and respectful approach to
                    discussions, fostering a constructive exchange of ideas. Additionally, submissions should be
                    policy-oriented, focusing on actionable insights that contribute to national development and
                    meaningful research.
                </p>
            </div>
            <div class="col-lg-10 col-md-11 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="w-100">
                    <h4 class="text-primary mb-4">Terms & Conditions</h4>
                </div>
                <p class="mt-1 mb-4 text-justify">
                    By sharing your insights, you grant BNRC permission to reference them in research publications,
                    policy discussions, and strategic recommendations. All contributions should align with ethical
                    research practices and uphold the principles of national interest, ensuring constructive and
                    meaningful discourse.
                </p>
            </div>

            {{-- <form method="POST" action="{{ route('feedback.send') }}" enctype="multipart/form-data">
                @csrf
                <h4 class="text-primary mb-4">Submit Your Thoughts:</h4>

                <!-- Submission Status Checkboxes -->
                <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                    <h2 class="h6 text-black mb-0 me-3">Select your preferred submission status:</h2>

                    <div class="form-check d-flex align-items-center m-0">
                        <input class="form-check-input me-2" type="checkbox" name="anonymous_check" id="anonymousCheck"
                            onchange="toggleSection('anonymousSection', this)">
                        <label class="form-check-label" for="anonymousCheck">A. Remain anonymous</label>
                    </div>

                    <div class="form-check d-flex align-items-center m-0">
                        <input class="form-check-input me-2" type="checkbox" name="recognized_check"
                            id="recognizedCheck" onchange="toggleSection('recognizedSection', this)">
                        <label class="form-check-label" for="recognizedCheck">B. Be recognized</label>
                    </div>
                </div>

                <!-- Anonymous Section -->
                <div id="anonymousSection" style="display: none;" class="mt-4">
                    <h5>Anonymous Feedback</h5>
                    <div class="mb-3">
                        <textarea name="anonymous_feedback" class="form-control" placeholder="Your feedback..." required></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-control" name="anonymous_file">
                    </div>
                </div>

                <!-- Recognized Section -->
                <div id="recognizedSection" style="display: none;" class="mt-4">
                    <h5>Recognized Feedback</h5>
                    <div class="mb-3">
                        <textarea name="recognized_feedback" class="form-control" placeholder="Your feedback..." required></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-control" name="recognized_file">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="mobile" placeholder="Your Mobile Number"
                            required>
                    </div>
                </div>

                <!-- Terms Checkbox -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="agree_terms" id="agreeTerms" required>
                    <label class="form-check-label" for="agreeTerms">
                        I agree to the <a href="terms.html" target="_blank">terms</a> and <a href="privacy.html"
                            target="_blank">privacy policy</a>.
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="text-center mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form> --}}

            <form method="POST" action="{{ route('feedback.send') }}" enctype="multipart/form-data">
                @csrf

                <div>
                    <input type="checkbox" id="anonymousCheck" name="anonymous_check"
                        onchange="toggleSection('anonymousSection', this)">
                    <label for="anonymousCheck">A. Remain anonymous</label>
                </div>

                <div>
                    <input type="checkbox" id="recognizedCheck" name="recognized_check"
                        onchange="toggleSection('recognizedSection', this)">
                    <label for="recognizedCheck">B. Be recognized</label>
                </div>

                <div id="anonymousSection" style="display:none;">
                    <textarea name="anonymous_feedback" placeholder="Your feedback..."></textarea>
                    <input type="file" name="anonymous_file">
                </div>

                <div id="recognizedSection" style="display:none;">
                    <textarea name="recognized_feedback" placeholder="Your feedback..."></textarea>
                    <input type="file" name="recognized_file">
                    <input type="text" name="name" placeholder="Your Name">
                    <input type="email" name="email" placeholder="Your Email">
                    <input type="text" name="mobile" placeholder="Your Mobile Number">
                </div>

                <div>
                    <input type="checkbox" id="agreeTerms" name="agree_terms" required>
                    <label for="agreeTerms">I agree to the terms and privacy policy.</label>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!-- 404 End -->

<!-- Footer Start -->
@include('layouts.footer')


<script>
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
</script>
</body>

</html>
