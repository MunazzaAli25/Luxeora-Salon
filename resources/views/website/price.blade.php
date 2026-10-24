@extends('website.master')

@section('main')

<!-- Page Header Start -->
<div class="container-fluid luxeora-page-header">
    <div class="container text-center py-5">

        <p class="luxeora-section-subtitle">
            LUXEORA BEAUTY SALON
        </p>

        <h1 class="luxeora-page-title">
            Our <span>Pricing.</span>
        </h1>

        <p class="luxeora-page-intro">
            Choose the beauty package that suits you and enjoy
            professional care with the Luxeora experience.
        </p>

    </div>
</div>
<!-- Page Header End -->


<!-- Pricing Start -->
<div class="container-fluid luxeora-price-page py-5">
    <div class="container py-5">

        <!-- Heading -->
        <div class="text-center luxeora-price-heading">

            <p class="luxeora-section-subtitle">
                BEAUTY PACKAGES
            </p>

            <h2 class="luxeora-section-title">
                Choose Your <span>Perfect Package.</span>
            </h2>

            <p class="luxeora-price-intro">
                Carefully designed packages combining some of our
                most loved beauty and wellness services.
            </p>

        </div>


        <!-- Pricing Cards -->
        <div class="row g-4 justify-content-center mt-4">

            <!-- Classic Glow -->
            <div class="col-lg-4 col-md-6">

                <div class="luxeora-price-card">

                    <div class="luxeora-price-top">

                        <span class="luxeora-price-number">
                            01
                        </span>

                        <p>ESSENTIAL</p>

                        <h3>Classic Glow</h3>

                        <div class="luxeora-price">
                            <small>Rs.</small>2,999
                        </div>

                    </div>


                    <div class="luxeora-price-body">

                        <ul>

                            <li>
                                <i class="bi bi-check2"></i>
                                Hair Styling
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Basic Facial
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Manicure
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Eyebrow Styling
                            </li>

                        </ul>

                        <a href="{{ url('/appointment') }}"
                           class="luxeora-price-btn">
                            Book Package
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Luxe Beauty -->
            <div class="col-lg-4 col-md-6">

                <div class="luxeora-price-card luxeora-price-featured">

                    <div class="luxeora-popular">
                        MOST POPULAR
                    </div>

                    <div class="luxeora-price-top">

                        <span class="luxeora-price-number">
                            02
                        </span>

                        <p>SIGNATURE</p>

                        <h3>Luxe Beauty</h3>

                        <div class="luxeora-price">
                            <small>Rs.</small>5,999
                        </div>

                    </div>


                    <div class="luxeora-price-body">

                        <ul>

                            <li>
                                <i class="bi bi-check2"></i>
                                Premium Hair Styling
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Premium Facial
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Manicure & Pedicure
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Eyebrow & Waxing
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Hair Treatment
                            </li>

                        </ul>

                        <a href="{{ url('/appointment') }}"
                           class="luxeora-price-btn">
                            Book Package
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Royal Luxe -->
            <div class="col-lg-4 col-md-6">

                <div class="luxeora-price-card">

                    <div class="luxeora-price-top">

                        <span class="luxeora-price-number">
                            03
                        </span>

                        <p>LUXURY</p>

                        <h3>Royal Luxe</h3>

                        <div class="luxeora-price">
                            <small>Rs.</small>9,999
                        </div>

                    </div>


                    <div class="luxeora-price-body">

                        <ul>

                            <li>
                                <i class="bi bi-check2"></i>
                                Luxury Hair Styling
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Advanced Facial
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Full Body Spa
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Manicure & Pedicure
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Hair Spa Treatment
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Complete Grooming
                            </li>

                        </ul>

                        <a href="{{ url('/appointment') }}"
                           class="luxeora-price-btn">
                            Book Package
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- Note -->
        <div class="text-center luxeora-price-note">

            <p>
                Looking for a customized experience?
            </p>

            <a href="{{ url('/appointment') }}">
                Contact us for a personalized package
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </div>
</div>
<!-- Pricing End -->


<!-- Pricing CTA -->
<div class="container-fluid luxeora-price-cta">

    <div class="container text-center py-5">

        <p class="luxeora-section-subtitle">
            INVEST IN YOURSELF
        </p>

        <h2>
            Your Beauty. Your <span>Luxeora</span>.
        </h2>

        <a href="{{ url('/appointment') }}"
           class="luxeora-price-cta-btn">

            Book Your Appointment

            <i class="bi bi-arrow-right"></i>

        </a>

    </div>

</div>
<!-- Pricing CTA End -->

@endsection