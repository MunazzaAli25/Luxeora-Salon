@extends('website.master')

@section('main')

<!-- Page Header Start -->
<div class="container-fluid luxeora-page-header">
    <div class="container text-center py-5">

        <p class="luxeora-section-subtitle">
            LUXEORA BEAUTY SALON
        </p>

        <h1 class="luxeora-page-title">
            Contact <span>Us.</span>
        </h1>

        <p class="luxeora-page-intro">
            Have a question or need assistance?
            We would love to hear from you.
        </p>

    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid luxeora-contact-page py-5">

    <div class="container py-5">

        <div class="row g-5">

            <!-- Contact Information -->
            <div class="col-lg-5">

                <div class="luxeora-contact-info">

                    <p class="luxeora-section-subtitle">
                        GET IN TOUCH
                    </p>

                    <h2 class="luxeora-section-title">
                        We'd Love To
                        <span>Hear From You.</span>
                    </h2>

                    <p class="luxeora-contact-intro">
                        Whether you have a question about our services,
                        want to make an appointment or simply want to
                        learn more about Luxeora, our team is here to help.
                    </p>


                    <!-- Address -->
                    <div class="luxeora-contact-info-item">

                        <div class="luxeora-contact-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>

                        <div>
                            <span>OUR LOCATION</span>
                            <h5>Karachi, Pakistan</h5>
                        </div>

                    </div>


                    <!-- Phone -->
                    <div class="luxeora-contact-info-item">

                        <div class="luxeora-contact-icon">
                            <i class="bi bi-telephone"></i>
                        </div>

                        <div>
                            <span>CALL US</span>
                            <h5>+92 300 1234567</h5>
                        </div>

                    </div>


                    <!-- Email -->
                    <div class="luxeora-contact-info-item">

                        <div class="luxeora-contact-icon">
                            <i class="bi bi-envelope"></i>
                        </div>

                        <div>
                            <span>EMAIL US</span>
                            <h5>info@luxeora.com</h5>
                        </div>

                    </div>


                    <!-- Hours -->
                    <div class="luxeora-contact-info-item">

                        <div class="luxeora-contact-icon">
                            <i class="bi bi-clock"></i>
                        </div>

                        <div>
                            <span>OPENING HOURS</span>
                            <h5>Mon - Sat | 10:00 AM - 09:00 PM</h5>
                        </div>

                    </div>


                    <!-- Social -->
                    <div class="luxeora-contact-social">

                        <p>FOLLOW LUXEORA</p>

                        <div>

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
                                <i class="fab fa-youtube"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Contact Form -->
            <div class="col-lg-7">

                <div class="luxeora-contact-form">

                    <div class="luxeora-contact-form-heading">

                        <p>
                            SEND US A MESSAGE
                        </p>

                        <h3>
                            How Can We <span>Help?</span>
                        </h3>

                    </div>


                    <form action="#" method="POST">

                        @csrf

                        <div class="row g-4">

                            <!-- Name -->
                            <div class="col-md-6">

                                <label>
                                    Your Name
                                </label>

                                <input type="text"
                                       name="name"
                                       class="form-control luxeora-contact-control"
                                       placeholder="Enter your name"
                                       required>

                            </div>


                            <!-- Email -->
                            <div class="col-md-6">

                                <label>
                                    Email Address
                                </label>

                                <input type="email"
                                       name="email"
                                       class="form-control luxeora-contact-control"
                                       placeholder="Enter your email"
                                       required>

                            </div>


                            <!-- Phone -->
                            <div class="col-md-6">

                                <label>
                                    Phone Number
                                </label>

                                <input type="tel"
                                       name="phone"
                                       class="form-control luxeora-contact-control"
                                       placeholder="03XX XXXXXXX">

                            </div>


                            <!-- Subject -->
                            <div class="col-md-6">

                                <label>
                                    Subject
                                </label>

                                <input type="text"
                                       name="subject"
                                       class="form-control luxeora-contact-control"
                                       placeholder="Enter subject"
                                       required>

                            </div>


                            <!-- Message -->
                            <div class="col-12">

                                <label>
                                    Your Message
                                </label>

                                <textarea name="message"
                                          rows="6"
                                          class="form-control luxeora-contact-control"
                                          placeholder="Write your message here..."
                                          required></textarea>

                            </div>


                            <!-- Button -->
                            <div class="col-12">

                                <button type="submit"
                                        class="luxeora-contact-btn">

                                    Send Message

                                    <i class="bi bi-arrow-right"></i>

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- Contact End -->


<!-- Map / Visit Section -->
<div class="container-fluid luxeora-contact-location">

    <div class="container py-5">

        <div class="row align-items-center g-4">

            <div class="col-lg-7">

                <div class="luxeora-location-box">

                    <i class="bi bi-geo-alt"></i>

                    <div>
                        <p>VISIT LUXEORA</p>

                        <h3>
                            Your Beauty Destination
                            <span>in Karachi.</span>
                        </h3>

                        <span>
                            Karachi, Pakistan
                        </span>
                    </div>

                </div>

            </div>


            <div class="col-lg-5 text-lg-end">

                <a href="{{ url('/appointment') }}"
                   class="luxeora-contact-appointment-btn">

                    Book An Appointment

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

        </div>

    </div>

</div>
<!-- Location End -->


@endsection