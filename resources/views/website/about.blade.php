@extends('website.master')

@section('main')

<!-- About Page Header Start -->
<div class="container-fluid luxeora-page-header">
    <div class="container text-center py-5">

        <p class="luxeora-section-subtitle">
            ABOUT LUXEORA
        </p>

        <h1 class="luxeora-page-title">
            Beauty With <span>Elegance.</span>
        </h1>

        <p class="luxeora-page-intro">
            Discover the story behind Luxeora and our passion
            for creating beautiful, relaxing salon experiences.
        </p>

    </div>
</div>
<!-- About Page Header End -->


<!-- About Main Start -->
<div class="container-fluid luxeora-about-page py-5">
    <div class="container py-5">

        <div class="row align-items-center g-5">

            <!-- Image -->
            <div class="col-lg-6">

                <div class="luxeora-about-page-image">

                    <img src="{{ asset('website/img/about.jpg') }}"
                         alt="Luxeora Beauty Salon">

                    <div class="luxeora-about-badge">

                        <strong>10+</strong>

                        <span>
                            Years of<br>
                            Excellence
                        </span>

                    </div>

                </div>

            </div>


            <!-- Content -->
            <div class="col-lg-6">

                <div class="luxeora-about-page-content">

                    <p class="luxeora-section-subtitle">
                        OUR STORY
                    </p>

                    <h2 class="luxeora-section-title">
                        More Than A Salon.
                        <span>An Experience.</span>
                    </h2>

                    <p>
                        Luxeora Beauty Salon was created with one simple
                        vision — to make every beauty appointment feel
                        special, relaxing and luxurious.
                    </p>

                    <p>
                        Our professional team combines modern beauty
                        techniques with personalized care to help every
                        client enjoy a comfortable and memorable salon
                        experience.
                    </p>

                    <p>
                        From hair styling and makeup to skincare, nail
                        care and relaxation treatments, every service
                        is delivered with attention to detail.
                    </p>


                    <!-- Features -->
                    <div class="row g-3 luxeora-about-features">

                        <div class="col-sm-6">

                            <div class="luxeora-about-feature">

                                <i class="bi bi-award"></i>

                                <div>
                                    <h5>Professional Care</h5>
                                    <p>Experienced beauty specialists</p>
                                </div>

                            </div>

                        </div>


                        <div class="col-sm-6">

                            <div class="luxeora-about-feature">

                                <i class="bi bi-gem"></i>

                                <div>
                                    <h5>Premium Experience</h5>
                                    <p>Elegant and relaxing atmosphere</p>
                                </div>

                            </div>

                        </div>


                        <div class="col-sm-6">

                            <div class="luxeora-about-feature">

                                <i class="bi bi-heart"></i>

                                <div>
                                    <h5>Personalized Service</h5>
                                    <p>Care designed around you</p>
                                </div>

                            </div>

                        </div>


                        <div class="col-sm-6">

                            <div class="luxeora-about-feature">

                                <i class="bi bi-stars"></i>

                                <div>
                                    <h5>Quality First</h5>
                                    <p>Attention to every detail</p>
                                </div>

                            </div>

                        </div>

                    </div>


                    <a href="{{ url('/appointment') }}"
                       class="luxeora-about-btn">

                        Book Your Appointment

                        <i class="bi bi-arrow-right"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>
</div>
<!-- About Main End -->


<!-- Why Luxeora Start -->
<div class="container-fluid luxeora-why py-5">

    <div class="container py-5">

        <div class="text-center luxeora-why-heading">

            <p class="luxeora-section-subtitle">
                WHY LUXEORA
            </p>

            <h2 class="luxeora-section-title">
                Where Beauty Meets <span>Comfort.</span>
            </h2>

            <p>
                We believe beauty is not only about how you look,
                but also about how you feel.
            </p>

        </div>


        <div class="row g-4 mt-4">

            <div class="col-lg-4 col-md-6">

                <div class="luxeora-why-card">

                    <div class="luxeora-why-icon">
                        <i class="bi bi-person-check"></i>
                    </div>

                    <h4>Expert Specialists</h4>

                    <p>
                        Our team is dedicated to delivering
                        professional and attentive beauty care.
                    </p>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="luxeora-why-card">

                    <div class="luxeora-why-icon">
                        <i class="bi bi-house-heart"></i>
                    </div>

                    <h4>Relaxing Atmosphere</h4>

                    <p>
                        Enjoy a peaceful salon environment where
                        you can relax and take time for yourself.
                    </p>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="luxeora-why-card">

                    <div class="luxeora-why-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>

                    <h4>Trusted Quality</h4>

                    <p>
                        We focus on quality service, professional
                        standards and customer satisfaction.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- Why Luxeora End -->


<!-- CTA Start -->
<div class="container-fluid luxeora-about-cta">

    <div class="container text-center py-5">

        <p class="luxeora-section-subtitle">
            YOUR BEAUTY JOURNEY STARTS HERE
        </p>

        <h2>
            Ready For Your <span>Luxeora</span> Experience?
        </h2>

        <a href="{{ url('/appointment') }}"
           class="luxeora-cta-btn">

            Book An Appointment

            <i class="bi bi-arrow-right"></i>

        </a>

    </div>

</div>
<!-- CTA End -->

@endsection