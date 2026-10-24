@extends('website.master')
@section('main')

<!-- Hero Start -->
<div class="container-fluid p-0 luxeora-hero">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-stretch">

            <!-- Hero Content -->
            <div class="col-lg-6 luxeora-hero-content">
                <div class="luxeora-hero-inner">

                    <p class="luxeora-hero-subtitle animated fadeInDown">
                        BEAUTY • ELEGANCE • CONFIDENCE
                    </p>

                    <h1 class="luxeora-hero-title animated fadeInLeft">
                        Where Beauty<br>
                        Meets <span>Luxury.</span>
                    </h1>

                    <p class="luxeora-hero-text animated fadeInLeft">
                        Welcome to Luxeora, a premium beauty salon where
                        expert care, timeless elegance and personalized
                        beauty experiences come together.
                    </p>

                    <div class="luxeora-hero-buttons animated fadeInUp">

                        <a href="{{ url('/appointment') }}"
                           class="luxeora-hero-btn">
                            Book Your Appointment
                            <i class="bi bi-arrow-right"></i>
                        </a>

                        <a href="{{ url('/service') }}"
                           class="luxeora-hero-link">
                            Explore Services
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                    <!-- Contact Info -->
                    <div class="luxeora-hero-contact animated fadeInUp">

                        <div class="luxeora-contact-item">
                            <i class="fa fa-phone"></i>
                            <div>
                                <small>CALL US</small>
                                <span>+92 300 1234567</span>
                            </div>
                        </div>

                        <div class="luxeora-contact-line"></div>

                        <div class="luxeora-contact-item">
                            <i class="fa fa-envelope"></i>
                            <div>
                                <small>EMAIL US</small>
                                <span>info@luxeora.com</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Hero Image -->
            <div class="col-lg-6 luxeora-hero-image">
                <div class="luxeora-hero-image-overlay"></div>

                <img src="{{ asset('website/img/hero-slider-1.jpg') }}"
                     alt="Luxeora Beauty Salon">

                <div class="luxeora-hero-badge">
                    <span>EST.</span>
                    <strong>2026</strong>
                    <small>LUXEORA</small>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Hero End -->

    <!-- About Start -->
<div class="container-fluid luxeora-about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">

            <!-- About Image -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="luxeora-about-image">
                    <img src="{{ asset('website/img/about.jpg') }}"
                         class="img-fluid"
                         alt="Luxeora Beauty Salon">

                    <div class="luxeora-about-frame"></div>

                    <div class="luxeora-about-experience">
                        <span>YEARS OF</span>
                        <strong>EXCELLENCE</strong>
                        <small>IN BEAUTY & CARE</small>
                    </div>
                </div>
            </div>

            <!-- About Content -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="luxeora-about-content">

                    <p class="luxeora-section-subtitle">
                        ABOUT LUXEORA
                    </p>

                    <h2 class="luxeora-section-title">
                        Beauty Crafted With
                        <span>Elegance.</span>
                    </h2>

                    <p class="luxeora-about-text">
                        At Luxeora, beauty is more than a service — it is
                        an experience. We bring together professional
                        expertise, premium products and personalized care
                        to create a salon experience designed around you.
                    </p>

                    <p class="luxeora-about-text">
                        From hair styling and makeup to nails, skincare
                        and relaxation, our specialists are dedicated to
                        helping every client feel confident and beautifully
                        cared for.
                    </p>

                    <!-- Features -->
                    <div class="row g-3 luxeora-about-features">

                        <div class="col-sm-6">
                            <div class="luxeora-about-feature">
                                <i class="fa fa-check"></i>
                                <div>
                                    <h5>Expert Specialists</h5>
                                    <p>Professionally trained beauty experts</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="luxeora-about-feature">
                                <i class="fa fa-check"></i>
                                <div>
                                    <h5>Premium Products</h5>
                                    <p>Quality products for exceptional care</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="luxeora-about-feature">
                                <i class="fa fa-check"></i>
                                <div>
                                    <h5>Personalized Care</h5>
                                    <p>Services tailored to your needs</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="luxeora-about-feature">
                                <i class="fa fa-check"></i>
                                <div>
                                    <h5>Relaxing Experience</h5>
                                    <p>A calm and luxurious salon atmosphere</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a href="{{ url('/about') }}" class="luxeora-about-btn">
                        Discover Luxeora
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- About End -->


    <!-- Services Start -->
<div class="container-fluid luxeora-services py-5">
    <div class="container py-5">

        <!-- Section Heading -->
        <div class="text-center luxeora-services-heading wow fadeIn" data-wow-delay="0.1s">
            <p class="luxeora-section-subtitle">OUR SERVICES</p>

            <h2 class="luxeora-section-title">
                Beauty & Care, <span>Perfected.</span>
            </h2>

            <p class="luxeora-services-intro">
                Discover our carefully curated beauty services, designed
                to make every visit to Luxeora a truly luxurious experience.
            </p>
        </div>

        <!-- Services -->
        <div class="row g-4">

            <!-- Hair -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="luxeora-service-card">

                    <div class="luxeora-service-image">
                        <img src="{{ asset('website/img/haircut.png') }}"
                             alt="Hair Styling">

                        <span class="luxeora-service-number">01</span>
                    </div>

                    <div class="luxeora-service-content">
                        <p class="luxeora-service-category">HAIR CARE</p>

                        <h3>Hair Styling</h3>

                        <p>
                            From elegant cuts to professional styling,
                            our specialists create looks designed for you.
                        </p>

                        <a href="{{ url('/service') }}">
                            Explore Service
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                </div>
            </div>

            <!-- Makeup -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="luxeora-service-card">

                    <div class="luxeora-service-image">
                        <img src="{{ asset('website/img/makeup.png') }}"
                             alt="Professional Makeup">

                        <span class="luxeora-service-number">02</span>
                    </div>

                    <div class="luxeora-service-content">
                        <p class="luxeora-service-category">BEAUTY</p>

                        <h3>Professional Makeup</h3>

                        <p>
                            Enhance your natural beauty with sophisticated
                            makeup looks for every special occasion.
                        </p>

                        <a href="{{ url('/service') }}">
                            Explore Service
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                </div>
            </div>

            <!-- Manicure -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="luxeora-service-card">

                    <div class="luxeora-service-image">
                        <img src="{{ asset('website/img/manicure.png') }}"
                             alt="Manicure">

                        <span class="luxeora-service-number">03</span>
                    </div>

                    <div class="luxeora-service-content">
                        <p class="luxeora-service-category">NAIL CARE</p>

                        <h3>Manicure</h3>

                        <p>
                            Give your hands the care they deserve with
                            our relaxing and detailed manicure services.
                        </p>

                        <a href="{{ url('/service') }}">
                            Explore Service
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                </div>
            </div>

            <!-- Pedicure -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="luxeora-service-card">

                    <div class="luxeora-service-image">
                        <img src="{{ asset('website/img/pedicure.png') }}"
                             alt="Pedicure">

                        <span class="luxeora-service-number">04</span>
                    </div>

                    <div class="luxeora-service-content">
                        <p class="luxeora-service-category">NAIL CARE</p>

                        <h3>Pedicure</h3>

                        <p>
                            Relax and refresh with professional foot care
                            in a calm and comfortable environment.
                        </p>

                        <a href="{{ url('/service') }}">
                            Explore Service
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                </div>
            </div>

            <!-- Massage -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="luxeora-service-card">

                    <div class="luxeora-service-image">
                        <img src="{{ asset('website/img/massage.png') }}"
                             alt="Relaxing Massage">

                        <span class="luxeora-service-number">05</span>
                    </div>

                    <div class="luxeora-service-content">
                        <p class="luxeora-service-category">WELLNESS</p>

                        <h3>Relaxing Massage</h3>

                        <p>
                            Unwind and recharge with a soothing massage
                            experience created for complete relaxation.
                        </p>

                        <a href="{{ url('/service') }}">
                            Explore Service
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                </div>
            </div>

            <!-- Skin Care -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="luxeora-service-card">

                    <div class="luxeora-service-image">
                        <img src="{{ asset('website/img/skin-care.png') }}"
                             alt="Skin Care">

                        <span class="luxeora-service-number">06</span>
                    </div>

                    <div class="luxeora-service-content">
                        <p class="luxeora-service-category">SKIN CARE</p>

                        <h3>Skin Care</h3>

                        <p>
                            Nourish and refresh your skin with personalized
                            treatments using quality beauty products.
                        </p>

                        <a href="{{ url('/service') }}">
                            Explore Service
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                </div>
            </div>

        </div>

        <!-- Bottom CTA -->
        <div class="text-center luxeora-services-cta wow fadeIn" data-wow-delay="0.3s">

            <p>
                Looking for something special?
            </p>

            <a href="{{ url('/appointment') }}" class="luxeora-services-btn">
                Book Your Beauty Experience
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </div>
</div>
<!-- Services End -->


    <!-- Pricing Start -->
<div class="container-fluid luxeora-pricing py-5">
    <div class="container py-5">

        <!-- Section Heading -->
        <div class="text-center luxeora-pricing-heading wow fadeIn"
             data-wow-delay="0.1s">

            <p class="luxeora-section-subtitle">
                OUR PRICING
            </p>

            <h2 class="luxeora-section-title">
                Beauty Packages, <span>Designed For You.</span>
            </h2>

            <p class="luxeora-pricing-intro">
                Indulge in carefully designed beauty packages that combine
                professional care, premium products and the Luxeora experience.
            </p>

        </div>


        <!-- Pricing Cards -->
        <div class="row g-4 justify-content-center">

            <!-- Essential -->
            <div class="col-lg-4 col-md-6 wow fadeInUp"
                 data-wow-delay="0.1s">

                <div class="luxeora-pricing-card">

                    <div class="luxeora-pricing-top">
                        <span>ESSENTIAL</span>

                        <h3>Classic Glow</h3>

                        <p>
                            A simple beauty refresh for your everyday elegance.
                        </p>
                    </div>

                    <div class="luxeora-price">
                        <small>Rs.</small> 2,999
                    </div>

                    <div class="luxeora-pricing-line"></div>

                    <ul>
                        <li>
                            <i class="fa fa-check"></i>
                            Hair Styling
                        </li>

                        <li>
                            <i class="fa fa-check"></i>
                            Basic Facial
                        </li>

                        <li>
                            <i class="fa fa-check"></i>
                            Manicure
                        </li>

                        <li>
                            <i class="fa fa-check"></i>
                            Eyebrow Styling
                        </li>
                    </ul>

                    <a href="{{ url('/appointment') }}"
                       class="luxeora-pricing-btn">
                        Book Package
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Signature -->
            <div class="col-lg-4 col-md-6 wow fadeInUp"
                 data-wow-delay="0.2s">

                <div class="luxeora-pricing-card luxeora-pricing-featured">

                    <div class="luxeora-popular">
                        MOST POPULAR
                    </div>

                    <div class="luxeora-pricing-top">
                        <span>SIGNATURE</span>

                        <h3>Luxe Beauty</h3>

                        <p>
                            Our signature combination for a complete beauty experience.
                        </p>
                    </div>

                    <div class="luxeora-price">
                        <small>Rs.</small> 5,999
                    </div>

                    <div class="luxeora-pricing-line"></div>

                    <ul>
                        <li>
                            <i class="fa fa-check"></i>
                            Premium Hair Styling
                        </li>

                        <li>
                            <i class="fa fa-check"></i>
                            Premium Facial
                        </li>

                        <li>
                            <i class="fa fa-check"></i>
                            Manicure & Pedicure
                        </li>

                        <li>
                            <i class="fa fa-check"></i>
                            Eyebrow & Waxing
                        </li>

                        <li>
                            <i class="fa fa-check"></i>
                            Hair Treatment
                        </li>
                    </ul>

                    <a href="{{ url('/appointment') }}"
                       class="luxeora-pricing-btn">
                        Book Package
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Luxury -->
            <div class="col-lg-4 col-md-6 wow fadeInUp"
                 data-wow-delay="0.3s">

                <div class="luxeora-pricing-card">

                    <div class="luxeora-pricing-top">
                        <span>LUXURY</span>

                        <h3>Royal Luxe</h3>

                        <p>
                            The ultimate indulgence for a truly luxurious experience.
                        </p>
                    </div>

                    <div class="luxeora-price">
                        <small>Rs.</small> 9,999
                    </div>

                    <div class="luxeora-pricing-line"></div>

                    <ul>
                        <li>
                            <i class="fa fa-check"></i>
                            Luxury Hair Styling
                        </li>

                        <li>
                            <i class="fa fa-check"></i>
                            Advanced Facial
                        </li>

                        <li>
                            <i class="fa fa-check"></i>
                            Full Body Spa
                        </li>

                        <li>
                            <i class="fa fa-check"></i>
                            Manicure & Pedicure
                        </li>

                        <li>
                            <i class="fa fa-check"></i>
                            Hair Spa Treatment
                        </li>

                        <li>
                            <i class="fa fa-check"></i>
                            Complete Grooming
                        </li>
                    </ul>

                    <a href="{{ url('/appointment') }}"
                       class="luxeora-pricing-btn">
                        Book Package
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>


        <!-- Bottom Note -->
        <div class="text-center luxeora-pricing-note wow fadeIn"
             data-wow-delay="0.3s">

            <p>
                Looking for a customized experience?
                <a href="{{ url('/appointment') }}">
                    Talk to our beauty specialists
                    <i class="bi bi-arrow-right"></i>
                </a>
            </p>

        </div>

    </div>
</div>
<!-- Pricing End -->


    <!-- Gallery Start -->
<div class="container-fluid luxeora-gallery py-5">
    <div class="container py-5">

        <!-- Section Heading -->
        <div class="text-center luxeora-gallery-heading wow fadeIn"
             data-wow-delay="0.1s">

            <p class="luxeora-section-subtitle">
                OUR GALLERY
            </p>

            <h2 class="luxeora-section-title">
                A Glimpse Into <span>Luxeora.</span>
            </h2>

            <p class="luxeora-gallery-intro">
                Step inside our world of beauty, elegance and relaxation.
                Discover the Luxeora experience through our salon moments.
            </p>

        </div>


        <!-- Gallery Grid -->
        <div class="row g-3 luxeora-gallery-grid">

            <!-- Large Image -->
            <div class="col-lg-6 col-md-12 wow fadeInUp"
                 data-wow-delay="0.1s">

                <div class="luxeora-gallery-item luxeora-gallery-large">

                    <img src="{{ asset('website/img/gallery-1.jpg') }}"
                         alt="Luxeora Beauty Salon">

                    <div class="luxeora-gallery-overlay">

                        <div>
                            <span>01</span>
                            <h4>Salon Experience</h4>
                            <p>Luxeora Beauty Salon</p>
                        </div>

                        <a href="{{ asset('website/img/gallery-1.jpg') }}"
                           data-lightbox="LuxeoraGallery">
                            <i class="fa fa-plus"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Image 2 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp"
                 data-wow-delay="0.2s">

                <div class="luxeora-gallery-item">

                    <img src="{{ asset('website/img/gallery-2.jpg') }}"
                         alt="Luxeora Beauty">

                    <div class="luxeora-gallery-overlay">

                        <div>
                            <span>02</span>
                            <h4>Beauty</h4>
                        </div>

                        <a href="{{ asset('website/img/gallery-2.jpg') }}"
                           data-lightbox="LuxeoraGallery">
                            <i class="fa fa-plus"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Image 3 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp"
                 data-wow-delay="0.3s">

                <div class="luxeora-gallery-item">

                    <img src="{{ asset('website/img/gallery-3.jpg') }}"
                         alt="Luxeora Hair Styling">

                    <div class="luxeora-gallery-overlay">

                        <div>
                            <span>03</span>
                            <h4>Hair Styling</h4>
                        </div>

                        <a href="{{ asset('website/img/gallery-3.jpg') }}"
                           data-lightbox="LuxeoraGallery">
                            <i class="fa fa-plus"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Image 4 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp"
                 data-wow-delay="0.4s">

                <div class="luxeora-gallery-item">

                    <img src="{{ asset('website/img/gallery-4.jpg') }}"
                         alt="Luxeora Makeup">

                    <div class="luxeora-gallery-overlay">

                        <div>
                            <span>04</span>
                            <h4>Makeup</h4>
                        </div>

                        <a href="{{ asset('website/img/gallery-4.jpg') }}"
                           data-lightbox="LuxeoraGallery">
                            <i class="fa fa-plus"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Image 5 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp"
                 data-wow-delay="0.5s">

                <div class="luxeora-gallery-item">

                    <img src="{{ asset('website/img/gallery-5.jpg') }}"
                         alt="Luxeora Nail Care">

                    <div class="luxeora-gallery-overlay">

                        <div>
                            <span>05</span>
                            <h4>Nail Care</h4>
                        </div>

                        <a href="{{ asset('website/img/gallery-5.jpg') }}"
                           data-lightbox="LuxeoraGallery">
                            <i class="fa fa-plus"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Large Image -->
            <div class="col-lg-6 col-md-12 wow fadeInUp"
                 data-wow-delay="0.6s">

                <div class="luxeora-gallery-item luxeora-gallery-large">

                    <img src="{{ asset('website/img/gallery-6.jpg') }}"
                         alt="Luxeora Spa">

                    <div class="luxeora-gallery-overlay">

                        <div>
                            <span>06</span>
                            <h4>Relaxation & Spa</h4>
                            <p>Relax. Refresh. Renew.</p>
                        </div>

                        <a href="{{ asset('website/img/gallery-6.jpg') }}"
                           data-lightbox="LuxeoraGallery">
                            <i class="fa fa-plus"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- Gallery CTA -->
        <div class="text-center luxeora-gallery-cta wow fadeIn"
             data-wow-delay="0.3s">

            <p>
                Love what you see?
            </p>

            <a href="{{ url('/appointment') }}"
               class="luxeora-gallery-btn">
                Experience Luxeora
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </div>
</div>
<!-- Gallery End -->


    <!-- Team Start -->
<div class="container-fluid luxeora-team py-5">
    <div class="container py-5">

        <!-- Section Heading -->
        <div class="text-center luxeora-team-heading wow fadeIn"
             data-wow-delay="0.1s">

            <p class="luxeora-section-subtitle">
                MEET OUR TEAM
            </p>

            <h2 class="luxeora-section-title">
                Our Beauty <span>Specialists.</span>
            </h2>

            <p class="luxeora-team-intro">
                Behind every Luxeora experience is a team of passionate
                professionals dedicated to making you look and feel your best.
            </p>

        </div>


        <!-- Team Members -->
        <div class="row g-4">

            <!-- Specialist 01 -->
            <div class="col-md-6 col-lg-3 wow fadeInUp"
                 data-wow-delay="0.1s">

                <div class="luxeora-team-card">

                    <div class="luxeora-team-image">

                        <img src="{{ asset('website/img/team-1.jpg') }}"
                             alt="Luxeora Hair Specialist">

                        <div class="luxeora-team-overlay">

                            <div class="luxeora-team-social">

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

                    </div>

                    <div class="luxeora-team-content">

                        <span>HAIR SPECIALIST</span>

                        <h4>Lily Taylor</h4>

                        <p>
                            Hair Styling & Hair Care
                        </p>

                    </div>

                </div>

            </div>


            <!-- Specialist 02 -->
            <div class="col-md-6 col-lg-3 wow fadeInUp"
                 data-wow-delay="0.2s">

                <div class="luxeora-team-card">

                    <div class="luxeora-team-image">

                        <img src="{{ asset('website/img/team-2.jpg') }}"
                             alt="Luxeora Nail Designer">

                        <div class="luxeora-team-overlay">

                            <div class="luxeora-team-social">

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

                    </div>

                    <div class="luxeora-team-content">

                        <span>NAIL DESIGNER</span>

                        <h4>Olivia Smith</h4>

                        <p>
                            Manicure & Nail Art
                        </p>

                    </div>

                </div>

            </div>


            <!-- Specialist 03 -->
            <div class="col-md-6 col-lg-3 wow fadeInUp"
                 data-wow-delay="0.3s">

                <div class="luxeora-team-card">

                    <div class="luxeora-team-image">

                        <img src="{{ asset('website/img/team-3.jpg') }}"
                             alt="Luxeora Beauty Specialist">

                        <div class="luxeora-team-overlay">

                            <div class="luxeora-team-social">

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

                    </div>

                    <div class="luxeora-team-content">

                        <span>BEAUTY SPECIALIST</span>

                        <h4>Ava Brown</h4>

                        <p>
                            Makeup & Beauty Care
                        </p>

                    </div>

                </div>

            </div>


            <!-- Specialist 04 -->
            <div class="col-md-6 col-lg-3 wow fadeInUp"
                 data-wow-delay="0.4s">

                <div class="luxeora-team-card">

                    <div class="luxeora-team-image">

                        <img src="{{ asset('website/img/team-4.jpg') }}"
                             alt="Luxeora Spa Specialist">

                        <div class="luxeora-team-overlay">

                            <div class="luxeora-team-social">

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

                    </div>

                    <div class="luxeora-team-content">

                        <span>SPA SPECIALIST</span>

                        <h4>Amelia Jones</h4>

                        <p>
                            Spa & Relaxation
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!-- Team CTA -->
        <div class="text-center luxeora-team-cta wow fadeIn"
             data-wow-delay="0.3s">

            <p>
                Experience professional care from our specialists.
            </p>

            <a href="{{ url('/appointment') }}"
               class="luxeora-team-btn">
                Book Your Appointment
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </div>
</div>
<!-- Team End -->

    <!-- Testimonial Start -->
<div class="container-fluid luxeora-testimonial py-5">
    <div class="container py-5">

        <!-- Section Heading -->
        <div class="text-center luxeora-testimonial-heading wow fadeIn"
             data-wow-delay="0.1s">

            <p class="luxeora-section-subtitle">
                CLIENT EXPERIENCES
            </p>

            <h2 class="luxeora-section-title">
                What Our Clients <span>Say.</span>
            </h2>

            <p class="luxeora-testimonial-intro">
                Every visit is designed to leave you feeling confident,
                refreshed and beautifully cared for.
            </p>

        </div>


        <!-- Testimonials -->
        <div class="owl-carousel luxeora-testimonial-carousel wow fadeIn"
             data-wow-delay="0.2s">

            <!-- Testimonial 01 -->
            <div class="luxeora-testimonial-card">

                <div class="luxeora-testimonial-quote">
                    <i class="fa fa-quote-left"></i>
                </div>

                <div class="luxeora-testimonial-stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>

                <p class="luxeora-testimonial-text">
                    Luxeora gave me such a beautiful salon experience.
                    The staff were professional, welcoming and paid
                    attention to every little detail.
                </p>

                <div class="luxeora-client">

                    <img src="{{ asset('website/img/testimonial-1.jpg') }}"
                         alt="Luxeora Client">

                    <div>
                        <h5>Sarah Ahmed</h5>
                        <span>Regular Client</span>
                    </div>

                </div>

            </div>


            <!-- Testimonial 02 -->
            <div class="luxeora-testimonial-card">

                <div class="luxeora-testimonial-quote">
                    <i class="fa fa-quote-left"></i>
                </div>

                <div class="luxeora-testimonial-stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>

                <p class="luxeora-testimonial-text">
                    I absolutely loved my hair styling experience.
                    Everything felt elegant, relaxing and perfectly
                    organized from start to finish.
                </p>

                <div class="luxeora-client">

                    <img src="{{ asset('website/img/testimonial-2.jpg') }}"
                         alt="Luxeora Client">

                    <div>
                        <h5>Ayesha Khan</h5>
                        <span>Happy Client</span>
                    </div>

                </div>

            </div>


            <!-- Testimonial 03 -->
            <div class="luxeora-testimonial-card">

                <div class="luxeora-testimonial-quote">
                    <i class="fa fa-quote-left"></i>
                </div>

                <div class="luxeora-testimonial-stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>

                <p class="luxeora-testimonial-text">
                    The atmosphere is gorgeous and the service is
                    excellent. My manicure and facial were both
                    wonderful. I will definitely visit again.
                </p>

                <div class="luxeora-client">

                    <img src="{{ asset('website/img/testimonial-3.jpg') }}"
                         alt="Luxeora Client">

                    <div>
                        <h5>Hira Malik</h5>
                        <span>Beauty Client</span>
                    </div>

                </div>

            </div>


            <!-- Testimonial 04 -->
            <div class="luxeora-testimonial-card">

                <div class="luxeora-testimonial-quote">
                    <i class="fa fa-quote-left"></i>
                </div>

                <div class="luxeora-testimonial-stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>

                <p class="luxeora-testimonial-text">
                    A wonderful place for self-care. The specialists
                    were friendly, skilled and made the entire experience
                    feel truly special.
                </p>

                <div class="luxeora-client">

                    <img src="{{ asset('website/img/testimonial-4.jpg') }}"
                         alt="Luxeora Client">

                    <div>
                        <h5>Maria Hassan</h5>
                        <span>Valued Client</span>
                    </div>

                </div>

            </div>

        </div>


        <!-- CTA -->
        <div class="text-center luxeora-testimonial-cta wow fadeIn"
             data-wow-delay="0.3s">

            <p>
                Ready to experience Luxeora?
            </p>

            <a href="{{ url('/appointment') }}"
               class="luxeora-testimonial-btn">
                Book Your Appointment
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </div>
</div>
<!-- Testimonial End -->


    <!-- Blog Start -->
<div class="container-fluid luxeora-blog py-5">
    <div class="container py-5">

        <!-- Section Heading -->
        <div class="text-center luxeora-blog-heading wow fadeIn"
             data-wow-delay="0.1s">

            <p class="luxeora-section-subtitle">
                FROM OUR JOURNAL
            </p>

            <h2 class="luxeora-section-title">
                Beauty & <span>Wellness.</span>
            </h2>

            <p class="luxeora-blog-intro">
                Discover useful beauty tips, salon inspiration and
                wellness ideas from the Luxeora team.
            </p>

        </div>


        <!-- Blog Cards -->
        <div class="row g-4">

            <!-- Blog 01 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp"
                 data-wow-delay="0.1s">

                <div class="luxeora-blog-card">

                    <div class="luxeora-blog-image">

                        <img src="{{ asset('website/img/blog-1.jpg') }}"
                             alt="Hair Care Tips">

                        <div class="luxeora-blog-date">
                            <span>15</span>
                            <small>AUG</small>
                        </div>

                    </div>

                    <div class="luxeora-blog-content">

                        <div class="luxeora-blog-meta">
                            <span>
                                <i class="fa fa-user"></i>
                                Luxeora
                            </span>

                            <span>
                                <i class="fa fa-tag"></i>
                                Hair Care
                            </span>
                        </div>

                        <h4>
                            Simple Hair Care Tips For Healthier Looking Hair
                        </h4>

                        <p>
                            Learn simple salon-inspired habits that can
                            help keep your hair looking fresh and cared for.
                        </p>

                        <a href="{{ url('/blog') }}"
                           class="luxeora-blog-link">
                            Read More
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Blog 02 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp"
                 data-wow-delay="0.2s">

                <div class="luxeora-blog-card">

                    <div class="luxeora-blog-image">

                        <img src="{{ asset('website/img/blog-2.jpg') }}"
                             alt="Skincare Routine">

                        <div class="luxeora-blog-date">
                            <span>10</span>
                            <small>AUG</small>
                        </div>

                    </div>

                    <div class="luxeora-blog-content">

                        <div class="luxeora-blog-meta">
                            <span>
                                <i class="fa fa-user"></i>
                                Luxeora
                            </span>

                            <span>
                                <i class="fa fa-tag"></i>
                                Skincare
                            </span>
                        </div>

                        <h4>
                            Build A Simple Self-Care Skincare Routine
                        </h4>

                        <p>
                            A simple guide to making skincare and self-care
                            a relaxing part of your everyday routine.
                        </p>

                        <a href="{{ url('/blog') }}"
                           class="luxeora-blog-link">
                            Read More
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Blog 03 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp"
                 data-wow-delay="0.3s">

                <div class="luxeora-blog-card">

                    <div class="luxeora-blog-image">

                        <img src="{{ asset('website/img/blog-3.jpg') }}"
                             alt="Salon Beauty Experience">

                        <div class="luxeora-blog-date">
                            <span>05</span>
                            <small>AUG</small>
                        </div>

                    </div>

                    <div class="luxeora-blog-content">

                        <div class="luxeora-blog-meta">
                            <span>
                                <i class="fa fa-user"></i>
                                Luxeora
                            </span>

                            <span>
                                <i class="fa fa-tag"></i>
                                Wellness
                            </span>
                        </div>

                        <h4>
                            Why Taking Time For Yourself Really Matters
                        </h4>

                        <p>
                            Discover how a little time dedicated to relaxation
                            can make your salon visit even more enjoyable.
                        </p>

                        <a href="{{ url('/blog') }}"
                           class="luxeora-blog-link">
                            Read More
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- Blog CTA -->
        <div class="text-center luxeora-blog-cta wow fadeIn"
             data-wow-delay="0.3s">

            <a href="{{ url('/blog') }}"
               class="luxeora-blog-btn">
                Explore All Articles
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </div>
</div>
<!-- Blog End -->

@endsection