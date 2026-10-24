@extends('website.master')

@section('main')

<!-- Page Header Start -->
<div class="container-fluid luxeora-page-header">
    <div class="container text-center py-5">

        <p class="luxeora-section-subtitle">
            LUXEORA BEAUTY SALON
        </p>

        <h1 class="luxeora-page-title">
            Our <span>Team.</span>
        </h1>

        <p class="luxeora-page-intro">
            Meet the talented professionals behind the Luxeora
            experience, dedicated to making every visit special.
        </p>

    </div>
</div>
<!-- Page Header End -->


<!-- Team Page Start -->
<div class="container-fluid luxeora-team-page py-5">
    <div class="container py-5">

        <!-- Heading -->
        <div class="text-center luxeora-team-page-heading">

            <p class="luxeora-section-subtitle">
                MEET OUR SPECIALISTS
            </p>

            <h2 class="luxeora-section-title">
                Experts In <span>Beauty & Care.</span>
            </h2>

            <p class="luxeora-team-page-intro">
                Our team combines professional expertise, creativity
                and attention to detail to deliver the Luxeora standard.
            </p>

        </div>


        <!-- Team Members -->
        <div class="row g-4 mt-4">

            <!-- Team Member 1 -->
            <div class="col-lg-3 col-md-6">

                <div class="luxeora-team-page-card">

                    <div class="luxeora-team-page-image">

                        <img src="{{ asset('website/img/team-1.jpg') }}"
                             alt="Lily Taylor">

                        <div class="luxeora-team-page-social">

                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                        </div>

                    </div>

                    <div class="luxeora-team-page-content">

                        <span>HAIR SPECIALIST</span>

                        <h4>Lily Taylor</h4>

                        <p>
                            Hair Styling & Hair Care
                        </p>

                    </div>

                </div>

            </div>


            <!-- Team Member 2 -->
            <div class="col-lg-3 col-md-6">

                <div class="luxeora-team-page-card">

                    <div class="luxeora-team-page-image">

                        <img src="{{ asset('website/img/team-2.jpg') }}"
                             alt="Olivia Smith">

                        <div class="luxeora-team-page-social">

                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                        </div>

                    </div>

                    <div class="luxeora-team-page-content">

                        <span>NAIL DESIGNER</span>

                        <h4>Olivia Smith</h4>

                        <p>
                            Manicure & Nail Art
                        </p>

                    </div>

                </div>

            </div>


            <!-- Team Member 3 -->
            <div class="col-lg-3 col-md-6">

                <div class="luxeora-team-page-card">

                    <div class="luxeora-team-page-image">

                        <img src="{{ asset('website/img/team-3.jpg') }}"
                             alt="Ava Brown">

                        <div class="luxeora-team-page-social">

                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                        </div>

                    </div>

                    <div class="luxeora-team-page-content">

                        <span>BEAUTY SPECIALIST</span>

                        <h4>Ava Brown</h4>

                        <p>
                            Makeup & Beauty Care
                        </p>

                    </div>

                </div>

            </div>


            <!-- Team Member 4 -->
            <div class="col-lg-3 col-md-6">

                <div class="luxeora-team-page-card">

                    <div class="luxeora-team-page-image">

                        <img src="{{ asset('website/img/team-4.jpg') }}"
                             alt="Amelia Jones">

                        <div class="luxeora-team-page-social">

                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                        </div>

                    </div>

                    <div class="luxeora-team-page-content">

                        <span>SPA SPECIALIST</span>

                        <h4>Amelia Jones</h4>

                        <p>
                            Spa & Relaxation
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
<!-- Team Page End -->


<!-- Team Philosophy Start -->
<div class="container-fluid luxeora-team-philosophy">

    <div class="container py-5">

        <div class="row align-items-center g-5">

            <div class="col-lg-7">

                <p class="luxeora-section-subtitle">
                    OUR PHILOSOPHY
                </p>

                <h2>
                    Passion Behind Every
                    <span>Beauty Detail.</span>
                </h2>

                <p>
                    At Luxeora, our specialists believe that every
                    client deserves personalized attention and
                    professional care.
                </p>

                <p>
                    We continuously focus on creativity, quality and
                    customer satisfaction to make every salon visit
                    a memorable experience.
                </p>

            </div>


            <div class="col-lg-5">

                <div class="luxeora-team-quote">

                    <i class="bi bi-quote"></i>

                    <p>
                        “Beauty is an experience, and our team is here
                        to make yours truly memorable.”
                    </p>

                    <span>
                        — Luxeora Beauty Team
                    </span>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- Team Philosophy End -->


<!-- CTA Start -->
<div class="container-fluid luxeora-team-cta">

    <div class="container text-center py-5">

        <p class="luxeora-section-subtitle">
            MEET US AT LUXEORA
        </p>

        <h2>
            Ready To Experience
            <span>Our Care?</span>
        </h2>

        <a href="{{ url('/appointment') }}"
           class="luxeora-team-cta-btn">

            Book Your Appointment

            <i class="bi bi-arrow-right"></i>

        </a>

    </div>

</div>
<!-- CTA End -->

@endsection