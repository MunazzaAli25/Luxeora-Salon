<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Salone - Beauty Salon Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
<link href="{{ asset('website/img/favicon.ico') }}" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Playfair+Display:wght@500&family=Work+Sans&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="{{ asset('website/lib/animate/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('website/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('website/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{ asset('website/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
<div class="container-fluid luxeora-navbar sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark px-4 px-lg-5 py-3">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="navbar-brand luxeora-logo">
            <img src="{{ asset('website/img/LOGO-1.png') }}"
                 alt="Luxeora Beauty Salon"
                 class="luxeora-navbar-logo">
        </a>

        <!-- Mobile Toggle -->
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <div class="navbar-nav ms-auto align-items-lg-center">

                <a href="{{ url('/') }}" class="nav-item nav-link active">
                    Home
                </a>

                <a href="{{ url('/about') }}" class="nav-item nav-link">
                    About
                </a>

                <a href="{{ url('/service') }}" class="nav-item nav-link">
                    Services
                </a>

                <a href="{{ url('/price') }}" class="nav-item nav-link">
                    Pricing
                </a>

                <!-- Shop -->
                <a href="{{ url('/products') }}" class="nav-item nav-link">
                    Shop
                </a>

                <a href="{{ url('/gallery') }}" class="nav-item nav-link">
                    Gallery
                </a>

                <a href="{{ url('/team') }}" class="nav-item nav-link">
                    Our Team
                </a>

                <a href="{{ url('/contact') }}" class="nav-item nav-link">
                    Contact
                </a>

                <!-- Book Appointment -->
                <a href="{{ url('/appointment') }}"
                    class="btn luxeora-book-btn ms-lg-3">
                    Book Appointment
                </a>

            </div>

        </div>
    </nav>
</div>
<!-- Navbar End -->
    @yield('main')


   <!-- Footer Start -->
<div class="container-fluid luxeora-footer wow fadeIn"
     data-wow-delay="0.1s">

    <div class="container py-5">

        <div class="row g-5">

            <!-- Brand / About -->
            <div class="col-lg-5 col-md-6">

                <a href="{{ url('/') }}"
                   class="luxeora-footer-logo">

                    <span class="luxeora-logo-icon">
                        <i class="bi bi-scissors"></i>
                    </span>

                    <span>LUXEORA</span>

                </a>

                <p class="luxeora-footer-about">
                    Where beauty meets elegance. Experience premium
                    beauty services, professional care and a relaxing
                    salon atmosphere designed just for you.
                </p>


                <!-- Contact -->
                <div class="luxeora-footer-contact">

                    <p>
                        <i class="fa fa-map-marker-alt"></i>
                        Karachi, Pakistan
                    </p>

                    <p>
                        <i class="fa fa-phone-alt"></i>
                        +92 300 1234567
                    </p>

                    <p>
                        <i class="fa fa-envelope"></i>
                        info@luxeora.com
                    </p>

                </div>


                <!-- Social Media -->
                <div class="luxeora-footer-social">

                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>

                </div>

            </div>


            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">

                <h5 class="luxeora-footer-title">
                    QUICK LINKS
                </h5>

                <div class="luxeora-footer-links">

                    <a href="{{ url('/') }}">
                        Home
                    </a>

                    <a href="{{ url('/about') }}">
                        About Us
                    </a>

                    <a href="{{ url('/service') }}">
                        Our Services
                    </a>

                    <a href="{{ url('/appointment') }}">
                        Appointment
                    </a>

                    <a href="{{ url('/contact') }}">
                        Contact Us
                    </a>

                </div>

            </div>


            <!-- Services -->
            <div class="col-lg-2 col-md-6">

                <h5 class="luxeora-footer-title">
                    SERVICES
                </h5>

                <div class="luxeora-footer-links">

                    <a href="{{ url('/service') }}">
                        Hair Styling
                    </a>

                    <a href="{{ url('/service') }}">
                        Makeup
                    </a>

                    <a href="{{ url('/service') }}">
                        Manicure
                    </a>

                    <a href="{{ url('/service') }}">
                        Pedicure
                    </a>

                    <a href="{{ url('/service') }}">
                        Spa & Massage
                    </a>

                </div>

            </div>


            <!-- Newsletter -->
            <div class="col-lg-3 col-md-6">

                <h5 class="luxeora-footer-title">
                    STAY CONNECTED
                </h5>

                <p class="luxeora-newsletter-text">
                    Subscribe for beauty tips, special offers and
                    Luxeora updates.
                </p>

                <div class="luxeora-newsletter">

                    <input type="email"
                           placeholder="Your Email">

                    <button type="button">
                        <i class="fa fa-paper-plane"></i>
                    </button>

                </div>

                <small class="luxeora-newsletter-note">
                    We respect your privacy.
                </small>

            </div>

        </div>

    </div>


    <!-- Copyright -->
    <div class="luxeora-copyright">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6 text-center text-md-start">

                    <p>
                        © {{ date('Y') }}
                        <span>Luxeora Beauty Salon</span>.
                        All Rights Reserved.
                    </p>

                </div>

                <div class="col-md-6 text-center text-md-end">

                    <p>
                        Crafted with
                        <i class="fa fa-heart"></i>
                        for beauty & elegance.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('website/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('website/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('website/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('website/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('website/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('website/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('website/js/main.js') }}"></script>
</body>

</html>