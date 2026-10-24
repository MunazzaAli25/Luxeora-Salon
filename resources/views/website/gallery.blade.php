@extends('website.master')

@section('main')

<!-- Page Header Start -->
<div class="container-fluid luxeora-page-header">
    <div class="container text-center py-5">

        <p class="luxeora-section-subtitle">
            LUXEORA BEAUTY SALON
        </p>

        <h1 class="luxeora-page-title">
            Our <span>Gallery.</span>
        </h1>

        <p class="luxeora-page-intro">
            Take a glimpse into the Luxeora experience,
            where beauty, elegance and relaxation come together.
        </p>

    </div>
</div>
<!-- Page Header End -->


<!-- Gallery Page Start -->
<div class="container-fluid luxeora-gallery-page py-5">
    <div class="container py-5">

        <!-- Heading -->
        <div class="text-center luxeora-gallery-page-heading">

            <p class="luxeora-section-subtitle">
                OUR COLLECTION
            </p>

            <h2 class="luxeora-section-title">
                A Glimpse Into <span>Luxeora.</span>
            </h2>

            <p class="luxeora-gallery-page-intro">
                Explore our salon atmosphere, beauty services and
                relaxing moments through the Luxeora gallery.
            </p>

        </div>


        <!-- Gallery Grid -->
        <div class="row g-3 luxeora-gallery-page-grid mt-4">

            <!-- Image 1 Large -->
            <div class="col-lg-6 col-md-12">

                <div class="luxeora-gallery-page-item luxeora-gallery-page-large">

                    <img src="{{ asset('website/img/gallery-1.jpg') }}"
                         alt="Luxeora Salon">

                    <div class="luxeora-gallery-page-overlay">

                        <div>
                            <span>01</span>
                            <h4>Salon Experience</h4>
                            <p>Luxeora Beauty Salon</p>
                        </div>

                        <a href="{{ asset('website/img/gallery-1.jpg') }}"
                           data-lightbox="LuxeoraPageGallery">
                            <i class="fa fa-plus"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Image 2 -->
            <div class="col-lg-3 col-md-6">

                <div class="luxeora-gallery-page-item">

                    <img src="{{ asset('website/img/gallery-2.jpg') }}"
                         alt="Luxeora Beauty">

                    <div class="luxeora-gallery-page-overlay">

                        <div>
                            <span>02</span>
                            <h4>Beauty</h4>
                            <p>Elegant beauty care</p>
                        </div>

                        <a href="{{ asset('website/img/gallery-2.jpg') }}"
                           data-lightbox="LuxeoraPageGallery">
                            <i class="fa fa-plus"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Image 3 -->
            <div class="col-lg-3 col-md-6">

                <div class="luxeora-gallery-page-item">

                    <img src="{{ asset('website/img/gallery-3.jpg') }}"
                         alt="Hair Styling">

                    <div class="luxeora-gallery-page-overlay">

                        <div>
                            <span>03</span>
                            <h4>Hair Styling</h4>
                            <p>Professional styling</p>
                        </div>

                        <a href="{{ asset('website/img/gallery-3.jpg') }}"
                           data-lightbox="LuxeoraPageGallery">
                            <i class="fa fa-plus"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Image 4 -->
            <div class="col-lg-3 col-md-6">

                <div class="luxeora-gallery-page-item">

                    <img src="{{ asset('website/img/gallery-4.jpg') }}"
                         alt="Luxeora Makeup">

                    <div class="luxeora-gallery-page-overlay">

                        <div>
                            <span>04</span>
                            <h4>Makeup</h4>
                            <p>Beauty & elegance</p>
                        </div>

                        <a href="{{ asset('website/img/gallery-4.jpg') }}"
                           data-lightbox="LuxeoraPageGallery">
                            <i class="fa fa-plus"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Image 5 -->
            <div class="col-lg-3 col-md-6">

                <div class="luxeora-gallery-page-item">

                    <img src="{{ asset('website/img/gallery-5.jpg') }}"
                         alt="Nail Care">

                    <div class="luxeora-gallery-page-overlay">

                        <div>
                            <span>05</span>
                            <h4>Nail Care</h4>
                            <p>Manicure & care</p>
                        </div>

                        <a href="{{ asset('website/img/gallery-5.jpg') }}"
                           data-lightbox="LuxeoraPageGallery">
                            <i class="fa fa-plus"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Image 6 Large -->
            <div class="col-lg-6 col-md-12">

                <div class="luxeora-gallery-page-item luxeora-gallery-page-large">

                    <img src="{{ asset('website/img/gallery-6.jpg') }}"
                         alt="Luxeora Spa">

                    <div class="luxeora-gallery-page-overlay">

                        <div>
                            <span>06</span>
                            <h4>Relaxation & Spa</h4>
                            <p>Relax. Refresh. Renew.</p>
                        </div>

                        <a href="{{ asset('website/img/gallery-6.jpg') }}"
                           data-lightbox="LuxeoraPageGallery">
                            <i class="fa fa-plus"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- Gallery CTA -->
        <div class="text-center luxeora-gallery-page-cta">

            <p>
                Love what you see?
            </p>

            <a href="{{ url('/appointment') }}"
               class="luxeora-gallery-page-btn">

                Experience Luxeora

                <i class="bi bi-arrow-right"></i>

            </a>

        </div>

    </div>
</div>
<!-- Gallery Page End -->


<!-- Virtual Salon Tour CTA -->
<div class="container-fluid luxeora-gallery-tour">

    <div class="container py-5 text-center">

        <p class="luxeora-section-subtitle">
            EXPERIENCE LUXEORA
        </p>

        <h2>
            Step Into Our <span>Salon.</span>
        </h2>

        <p>
            Discover the elegance and comfort of the Luxeora salon
            experience.
        </p>

        <a href="{{ url('/appointment') }}"
           class="luxeora-gallery-tour-btn">

            Book Your Visit

            <i class="bi bi-arrow-right"></i>

        </a>

    </div>

</div>
<!-- Virtual Salon Tour CTA End -->

@endsection