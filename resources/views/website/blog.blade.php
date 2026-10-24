@extends('website.master')

@section('main')

<!-- Page Header Start -->
<div class="container-fluid luxeora-page-header">
    <div class="container text-center py-5">

        <p class="luxeora-section-subtitle">
            LUXEORA BEAUTY SALON
        </p>

        <h1 class="luxeora-page-title">
            Beauty <span>Journal.</span>
        </h1>

        <p class="luxeora-page-intro">
            Discover beauty tips, salon trends, skincare ideas
            and inspiration from Luxeora.
        </p>

    </div>
</div>
<!-- Page Header End -->


<!-- Blog Start -->
<div class="container-fluid luxeora-blog-page py-5">

    <div class="container py-5">

        <!-- Heading -->
        <div class="text-center luxeora-blog-page-heading">

            <p class="luxeora-section-subtitle">
                FROM OUR JOURNAL
            </p>

            <h2 class="luxeora-section-title">
                Beauty Tips & <span>Inspiration.</span>
            </h2>

            <p class="luxeora-blog-page-intro">
                Stay inspired with useful beauty advice, salon
                trends and simple ways to care for yourself.
            </p>

        </div>


        <!-- Blog Cards -->
        <div class="row g-4 mt-4">

            <!-- Blog 1 -->
            <div class="col-lg-4 col-md-6">

                <article class="luxeora-blog-page-card">

                    <div class="luxeora-blog-page-image">

                        <img src="{{ asset('website/img/blog-1.jpg') }}"
                             alt="Hair Care Tips">

                        <div class="luxeora-blog-date">
                            <strong>15</strong>
                            <span>AUG</span>
                        </div>

                    </div>

                    <div class="luxeora-blog-page-content">

                        <span class="luxeora-blog-category">
                            HAIR CARE
                        </span>

                        <h3>
                            Simple Hair Care Tips
                            For Healthier Looking Hair
                        </h3>

                        <p>
                            Discover simple salon-inspired habits
                            that can help you maintain beautiful
                            and well-cared-for hair.
                        </p>

                        <a href="#">
                            Read Article
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </article>

            </div>


            <!-- Blog 2 -->
            <div class="col-lg-4 col-md-6">

                <article class="luxeora-blog-page-card">

                    <div class="luxeora-blog-page-image">

                        <img src="{{ asset('website/img/blog-2.jpg') }}"
                             alt="Skincare Routine">

                        <div class="luxeora-blog-date">
                            <strong>10</strong>
                            <span>AUG</span>
                        </div>

                    </div>

                    <div class="luxeora-blog-page-content">

                        <span class="luxeora-blog-category">
                            SKIN CARE
                        </span>

                        <h3>
                            Building A Simple
                            Skincare Routine
                        </h3>

                        <p>
                            Learn how to keep your skincare routine
                            simple, consistent and easy to follow.
                        </p>

                        <a href="#">
                            Read Article
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </article>

            </div>


            <!-- Blog 3 -->
            <div class="col-lg-4 col-md-6">

                <article class="luxeora-blog-page-card">

                    <div class="luxeora-blog-page-image">

                        <img src="{{ asset('website/img/blog-3.jpg') }}"
                             alt="Salon Beauty Trends">

                        <div class="luxeora-blog-date">
                            <strong>05</strong>
                            <span>AUG</span>
                        </div>

                    </div>

                    <div class="luxeora-blog-page-content">

                        <span class="luxeora-blog-category">
                            BEAUTY TRENDS
                        </span>

                        <h3>
                            Beauty Trends To
                            Inspire Your Next Look
                        </h3>

                        <p>
                            Explore elegant beauty ideas and
                            salon-inspired looks for your next visit.
                        </p>

                        <a href="#">
                            Read Article
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </article>

            </div>


            <!-- Blog 4 -->
            <div class="col-lg-4 col-md-6">

                <article class="luxeora-blog-page-card">

                    <div class="luxeora-blog-page-image">

                        <img src="{{ asset('website/img/blog-1.jpg') }}"
                             alt="Hair Styling">

                        <div class="luxeora-blog-date">
                            <strong>01</strong>
                            <span>AUG</span>
                        </div>

                    </div>

                    <div class="luxeora-blog-page-content">

                        <span class="luxeora-blog-category">
                            HAIR STYLING
                        </span>

                        <h3>
                            Choosing The Right
                            Style For Your Occasion
                        </h3>

                        <p>
                            Find inspiration for choosing a hairstyle
                            that suits your special occasion.
                        </p>

                        <a href="#">
                            Read Article
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </article>

            </div>


            <!-- Blog 5 -->
            <div class="col-lg-4 col-md-6">

                <article class="luxeora-blog-page-card">

                    <div class="luxeora-blog-page-image">

                        <img src="{{ asset('website/img/blog-2.jpg') }}"
                             alt="Beauty Care">

                        <div class="luxeora-blog-date">
                            <strong>28</strong>
                            <span>JUL</span>
                        </div>

                    </div>

                    <div class="luxeora-blog-page-content">

                        <span class="luxeora-blog-category">
                            BEAUTY CARE
                        </span>

                        <h3>
                            Small Beauty Habits
                            That Make A Difference
                        </h3>

                        <p>
                            A few simple self-care habits can make
                            your regular beauty routine more enjoyable.
                        </p>

                        <a href="#">
                            Read Article
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </article>

            </div>


            <!-- Blog 6 -->
            <div class="col-lg-4 col-md-6">

                <article class="luxeora-blog-page-card">

                    <div class="luxeora-blog-page-image">

                        <img src="{{ asset('website/img/blog-3.jpg') }}"
                             alt="Salon Experience">

                        <div class="luxeora-blog-date">
                            <strong>22</strong>
                            <span>JUL</span>
                        </div>

                    </div>

                    <div class="luxeora-blog-page-content">

                        <span class="luxeora-blog-category">
                            LUXEORA
                        </span>

                        <h3>
                            Why Your Salon Visit
                            Should Feel Special
                        </h3>

                        <p>
                            Discover what makes a relaxing and
                            personalized salon experience different.
                        </p>

                        <a href="#">
                            Read Article
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </article>

            </div>

        </div>

    </div>

</div>
<!-- Blog End -->


<!-- Blog CTA -->
<div class="container-fluid luxeora-blog-cta">

    <div class="container text-center py-5">

        <p class="luxeora-section-subtitle">
            YOUR BEAUTY JOURNEY
        </p>

        <h2>
            Ready For Your
            <span>Luxeora Experience?</span>
        </h2>

        <a href="{{ url('/appointment') }}"
           class="luxeora-blog-cta-btn">

            Book An Appointment

            <i class="bi bi-arrow-right"></i>

        </a>

    </div>

</div>
<!-- Blog CTA End -->

@endsection