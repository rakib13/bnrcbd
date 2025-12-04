@extends('layouts.main-body')

@section('main-body-content')

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
    <!-- Background Image -->
    <img src="{{ asset('/img/about image3.jpg') }}" alt="BNRC Background" class="w-100" style="height: auto;">

    <!-- Overlay with background color and animation -->
    <div class="position-absolute top-50 start-50 translate-middle text-center px-4 py-3 animated-banner">
         {{-- <h1 class="bnrc-title animate-slide-up">BNRC - Bangladesh Nationalist Research Centre</h1> --}}
        {{-- <h1 class="bnrc-title animate-slide-up"> Research and Analysis for Bangladesh </h1> --}}
        {{-- <p class="bnrc-tagline animate-fade-in delay-1">Empowering Leadership Through Research and Innovation.</p> --}}
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid bg-light about py-3">
    <div class="container py-3">
        <div class="row g-5 align-items-start">
            <!-- Combined Sidebar and Content Container -->
            <div class="col-12 d-flex p-2 position-relative"> <!-- Changed to flex container -->

                <!-- Content Area (now positioned immediately to the right) -->
                <div class="content-area wow fadeInUp" data-wow-delay="0.2s" style="flex: 1; margin-left: 20px;">

                    <!-- CEO................................ -->
                    <div id="researchteam" class="about-item-content bg-white rounded p-3 h-100 section active">
                        <h4 class="text-primary text-center">The Chief Executive Officer (CEO)</h4>
                        <div style="text-align: center; margin: 30px 0;">
                            <img src="{{ asset('img/zabiullah.jpg') }}" alt="Md. Ismail Zabihullah"
                                style="border: 4px solid #ccc; padding: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 100%; height: auto;">
                            <p style="margin-top: 10px; font-style: italic; color: #555; text-align:center;">Mr.
                                Md.
                                Ismail Zabihullah</p>
                        </div>
                        <p> The shining star of Bangladesh Public Administration, Mr. Md. Ismail Zabihullah, is
                            a
                            well-known and well-established name. He has left a signature and footprint of
                            enviable
                            talent throughout his illustrious career. The pride of Lakshmipur district, Mr.
                            Ismail
                            Zabihullah, shines on the national horizon due to his remarkable qualities. A
                            talented
                            individual inspired by patriotism, he is a dedicated soul committed to social
                            service.
                        </p>
                        <section>

                            <p>
                                Md. Ismail Zabihullah was born in 1950 at his maternal grandfather's house in
                                Shantir Hat (Charkadira) Moktarbari under Ramgati Thana of Noakhali District.
                                His
                                father, the renowned educator Late Sujauddin Ahmed, was a teacher at Lakshmipur
                                Samad Academy. The family later settled in Shamserbad village of Lakshmipur
                                Sadar.
                                As the third child of his parents, Ismail Zabihullah gained recognition during
                                his
                                student life as an exceptionally talented individual. He ranked 12th on the
                                merit
                                list in the Comilla Board Secondary Examination in 1965 from Lakshmipur Samad
                                Academy and secured 3rd place in the Higher Secondary Examination from
                                Lakshmipur
                                College in 1967. </p>
                        </section>
                        <section>

                            <p>
                                He completed his Honors in English in 1970 and his Master's degree in 1971 (held
                                in
                                1973) from Dhaka University. Later, he achieved the first rank in the LLB
                                examination from the same institution. Additionally, he pursued higher education
                                at
                                Birmingham University in the USA and the ADB Institute in Japan. A resident
                                student
                                of Mohsin Hall at Dhaka University, he was elected to the hall student council
                                in
                                1967. From his student years, he was actively engaged in various social and
                                cultural
                                activities, including university debate competitions. During this time, under
                                his
                                editorship, commemorative memoirs were published on February 11 and other
                                national
                                days.</p>

                        </section>
                        <section>

                            <p>
                                He, alongside Professor Nani Gopal Ghosh, co-founded notable art, literary, and
                                cultural organizations such as 'Kakli' and 'Tridhara' in Lakshmipur district.
                                'Tridhara' played a unique role in the literary and cultural life of northern
                                Lakshmipur district during the independence era. The organization also
                                established a
                                children's school named 'Tridhara Shiksha Niketan,' the first heterogeneous
                                kindergarten in Lakshmipur district, which illuminated the path of education for
                                many years. Mr. Zabihullah and 'Tridhara' became synonymous at the time. In
                                addition, he contributed significantly to the literary and cultural sphere,
                                collaborating with personalities such as Ramendu Majumdar, Chowdhury Khorsheed
                                Alam,
                                and Nani Gopal Ghosh.</p>
                        </section>

                        <section>
                            <p>
                                Mr. Zabihullah began his career in 1973 as a professor in the English Department
                                of
                                Chaumuhani College. During this time, he also worked as a part-time lecturer at
                                Chandraganj Kofiluddin College and later served as an English lecturer at
                                Noakhali
                                Government College until 1976. As an educator, he earned immense popularity for
                                his
                                dedication and ability to inspire students. Many of his students went on to
                                achieve
                                higher education and hold esteemed positions in various sectors of society.
                            </p>
                        </section>

                        <section>
                            <p>
                                In 1977, he joined the Bangladesh Civil Service as an Assistant Commissioner,
                                marking the beginning of a distinguished career in public administration. For
                                five
                                consecutive years, he worked in the office of the Deputy Commissioner of
                                Chittagong.
                                Throughout his career, he held numerous important and prestigious roles, both
                                nationally and internationally. Retiring in 2008 as Secretary to the Government
                                of
                                Bangladesh, he left a legacy characterized by extraordinary talent, skill, and a
                                profound dedication to public service.
                            </p>
                        </section>

                        <section>
                            <p>
                                During his tenure as the Metropolitan Magistrate of Dhaka, he earned widespread
                                acclaim among aspiring professionals and lawyers. He served as Magistrate in
                                Dhaka's
                                Special Tribunal and as a Judge in the Special Martial Law Court. Additionally,
                                he
                                held the position of Private Secretary to ministers in various portfolios,
                                including
                                Communications, Home Affairs, Local Government, and Health. He also served as
                                Upazila Nirbahi Officer in Bhuapur, Tangail, and as Deputy Commissioner in
                                Faridpur,
                                leaving behind a legacy of efficiency, creativity, and thoughtfulness.
                            </p>
                        </section>

                        <section>
                            <p>
                                He contributed significantly to women's education during his tenure as Project
                                Director of the European Union-sponsored 'Promote' project. He also served as
                                Secretary to the Ministry of Shipping, Economic Relations Department (ERD),
                                Ministry
                                of Communications, and as Secretary to the President of Bangladesh. Beyond his
                                civil
                                service career, he held pivotal positions, including Chairman of Krishi Bank,
                                Director of Bangladesh Bank, and Chairman of ICDDRB in Mohakhali.
                            </p>
                        </section>

                        <section>
                            <p>
                                Md. Zabihullah is currently serving in a number of prestigious and impactful
                                positions, alongside his role as the CEO at the BNRC. His leadership and
                                expertise
                                are reflected in these significant roles, contributing to various sectors of
                                society:
                            <p>
                            <ol>
                                <li>Member, BNP Chairperson Begum Khaleda Zia's Advisory Council.</li>
                                <li>Member, BNP Chairperson's Foreign Affairs Advisory Committee.</li>
                                <li>Editor, Road to Democracy.</li>
                                <li>President, English Department Alumni Society, University of Dhaka.</li>
                                <li>Advocate, Bangladesh Supreme Court.</li>
                                <li>Member, Eastern University Board of Trustees.</li>
                                <li>President, Ad-hoc Committee, Viqarunnisa School and College.</li>
                                <li>President, Ad-hoc Committee, Tejgaon Women's College.</li>
                            </ol>
                            </p>

                            </p>
                        </section>

                        <section>
                            <h2>Research Fellows</h2>
                            <p class="bnrc-text">
                                At BNRC, we take pride in our distinguished team of highly educated and
                                experienced
                                professionals from a diverse range of sectors. Our experts bring specialized
                                knowledge in economics, education, social development, security, health,
                                communication, law, and more, ensuring comprehensive, evidence-based research
                                that supports strategic policy formulation.<br><br>
                                Our team members serve in various capacities, from Executive Director of
                                Research(Research Lead) to senior research analysts and executives, each playing
                                a crucialrole in shaping BNRC's research direction and policy recommendations.
                                Their expertise enables BNRC to conduct rigorous investigations, deep analyses,
                                and meaningful assessments that address party and national priorities, global
                                challenges, and governance strategies.<br><br>
                                BNRC remains committed to producing high-quality, realistic, and research-backed
                                recommendations that guide
                                decision-makers, policymakers, and stakeholders toward sustainable solutions for
                                Bangladesh’s development. With intellectual rigor, strategic foresight, and
                                collaboration, our experts c ontribute to shaping progressive policies,
                                impactful
                                programs, and transformative initiatives that drive national and socio-economic
                                growth.<br><br>
                                Through their extensive experience, academic excellence, and professional
                                dedication, BNRC continues to stand as a pillar of knowledge, research, and
                                innovation, ensuring that every recommendation is rooted in facts, aligned with
                                global best practices, and tailored to the nation's unique context and party
                                needs.
                            </p>
                        </section>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection
