@extends('website.master')

@section('main')

<!-- Page Header Start -->
<div class="container-fluid luxeora-page-header">
    <div class="container text-center py-5">

        <p class="luxeora-section-subtitle">
            LUXEORA BEAUTY SALON
        </p>

        <h1 class="luxeora-page-title">
            Our <span>Services.</span>
        </h1>

        <p class="luxeora-page-intro">
            Discover professional beauty and wellness services
            designed to make every visit a luxurious experience.
        </p>

    </div>
</div>
<!-- Page Header End -->


<!-- Services Start -->
<div class="container-fluid luxeora-service-page py-5">
    <div class="container py-5">

        <div class="text-center luxeora-service-heading">

            <p class="luxeora-section-subtitle">
                WHAT WE OFFER
            </p>

            <h2 class="luxeora-section-title">
                Beauty Care, <span>Perfected.</span>
            </h2>

            <p class="luxeora-service-intro">
                From hair styling to relaxing spa treatments,
                our specialists provide professional care with
                attention to every detail.
            </p>

        </div>


        <div class="row g-4 mt-4">

            <!-- Hair Styling -->
            <div class="col-lg-4 col-md-6">

                <div class="luxeora-service-page-card">

                    <div class="luxeora-service-page-image">

                        <img src="{{ asset('website/img/haircut.png') }}"
                             alt="Hair Styling">

                        <span>01</span>

                    </div>

                    <div class="luxeora-service-page-content">

                        <h4>Hair Styling</h4>

                        <p>
                            Professional hair styling, cutting,
                            blow-drying and elegant salon looks
                            tailored to your style.
                        </p>

                        <a href="{{ url('/appointment') }}">
                            Book Service
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Makeup -->
            <div class="col-lg-4 col-md-6">

                <div class="luxeora-service-page-card">

                    <div class="luxeora-service-page-image">

                        <img src="{{ asset('website/img/makeup.png') }}"
                             alt="Professional Makeup">

                        <span>02</span>

                    </div>

                    <div class="luxeora-service-page-content">

                        <h4>Professional Makeup</h4>

                        <p>
                            Elegant makeup services for parties,
                            events and special occasions.
                        </p>

                        <a href="{{ url('/appointment') }}">
                            Book Service
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Manicure -->
            <div class="col-lg-4 col-md-6">

                <div class="luxeora-service-page-card">

                    <div class="luxeora-service-page-image">

                        <img src="{{ asset('website/img/manicure.png') }}"
                             alt="Manicure">

                        <span>03</span>

                    </div>

                    <div class="luxeora-service-page-content">

                        <h4>Manicure</h4>

                        <p>
                            Complete nail care with professional
                            manicure treatments for clean and
                            polished hands.
                        </p>

                        <a href="{{ url('/appointment') }}">
                            Book Service
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Pedicure -->
            <div class="col-lg-4 col-md-6">

                <div class="luxeora-service-page-card">

                    <div class="luxeora-service-page-image">

                        <img src="{{ asset('website/img/pedicure.png') }}"
                             alt="Pedicure">

                        <span>04</span>

                    </div>

                    <div class="luxeora-service-page-content">

                        <h4>Pedicure</h4>

                        <p>
                            Relaxing pedicure treatments focused on
                            comfort, cleanliness and beautiful results.
                        </p>

                        <a href="{{ url('/appointment') }}">
                            Book Service
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Spa & Massage -->
            <div class="col-lg-4 col-md-6">

                <div class="luxeora-service-page-card">

                    <div class="luxeora-service-page-image">

                        <img src="{{ asset('website/img/massage.png') }}"
                             alt="Spa and Massage">

                        <span>05</span>

                    </div>

                    <div class="luxeora-service-page-content">

                        <h4>Spa & Massage</h4>

                        <p>
                            Take a moment to relax with calming
                            spa and massage treatments in a peaceful
                            salon environment.
                        </p>

                        <a href="{{ url('/appointment') }}">
                            Book Service
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Skin Care -->
            <div class="col-lg-4 col-md-6">

                <div class="luxeora-service-page-card">

                    <div class="luxeora-service-page-image">

                        <img src="{{ asset('website/img/skin-care.png') }}"
                             alt="Skin Care">

                        <span>06</span>

                    </div>

                    <div class="luxeora-service-page-content">

                        <h4>Skin Care</h4>

                        <p>
                            Refreshing facial and skincare treatments
                            designed to leave your skin feeling fresh
                            and cared for.
                        </p>

                        <a href="{{ url('/appointment') }}">
                            Book Service
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
<!-- Services End -->


<!-- CTA Start -->
<div class="container-fluid luxeora-service-cta">

    <div class="container py-5 text-center">

        <p class="luxeora-section-subtitle">
            READY FOR YOUR LUXEORA EXPERIENCE?
        </p>

        <h2>
            Let Us Take Care Of <span>You.</span>
        </h2>

        <a href="{{ url('/appointment') }}"
           class="luxeora-cta-btn">

            Book Your Appointment

            <i class="bi bi-arrow-right"></i>

        </a>

    </div>

</div>
<!-- CTA End -->

@endsection