@extends('website.master')

@section('main')

<!-- ================= CHECKOUT HEADER ================= -->

<div class="container-fluid luxeora-checkout-header">
    <div class="container text-center py-5">

        <p class="luxeora-section-subtitle">
            LUXEORA BEAUTY SHOP
        </p>

        <h1 class="luxeora-page-title">
            Complete Your <span>Order.</span>
        </h1>

        <p class="luxeora-page-intro">
            Review your order and complete your details.
        </p>

    </div>
</div>


<!-- ================= CHECKOUT ================= -->

<div class="container-fluid luxeora-checkout-page py-5">

    <div class="container py-5">

        <div class="row g-5">

            <!-- ================= CUSTOMER DETAILS ================= -->

            <div class="col-lg-7">

                <div class="luxeora-checkout-box">

                    <div class="luxeora-checkout-heading">

                        <p class="luxeora-section-subtitle">
                            YOUR INFORMATION
                        </p>

                        <h2>
                            Customer <span>Details</span>
                        </h2>

                    </div>


                    <div class="row g-4">

                        <div class="col-md-6">

                            <label>Full Name</label>

                            <input type="text"
                                   class="luxeora-checkout-input"
                                   placeholder="Your full name">

                        </div>


                        <div class="col-md-6">

                            <label>Phone Number</label>

                            <input type="text"
                                   class="luxeora-checkout-input"
                                   placeholder="+92 300 1234567">

                        </div>


                        <div class="col-12">

                            <label>Email Address</label>

                            <input type="email"
                                   class="luxeora-checkout-input"
                                   placeholder="you@example.com">

                        </div>


                        <div class="col-12">

                            <label>Delivery Address</label>

                            <textarea rows="3"
                                      class="luxeora-checkout-input"
                                      placeholder="Enter your complete address"></textarea>

                        </div>


                        <div class="col-md-6">

                            <label>City</label>

                            <input type="text"
                                   class="luxeora-checkout-input"
                                   placeholder="Karachi">

                        </div>


                        <div class="col-md-6">

                            <label>Postal Code</label>

                            <input type="text"
                                   class="luxeora-checkout-input"
                                   placeholder="Postal code">

                        </div>


                        <div class="col-12">

                            <label>
                                Order Notes
                                <span>(Optional)</span>
                            </label>

                            <textarea rows="3"
                                      class="luxeora-checkout-input"
                                      placeholder="Any special instructions..."></textarea>

                        </div>

                    </div>

                </div>


                <!-- ================= PAYMENT ================= -->

                <div class="luxeora-checkout-box mt-4">

                    <div class="luxeora-checkout-heading">

                        <p class="luxeora-section-subtitle">
                            PAYMENT
                        </p>

                        <h2>
                            Payment <span>Method</span>
                        </h2>

                    </div>


                    <div class="luxeora-payment-option">

                        <label>

                            <input type="radio" checked>

                            <div class="luxeora-payment-content">

                                <div class="luxeora-payment-icon">
                                    <i class="bi bi-cash-stack"></i>
                                </div>

                                <div>

                                    <strong>
                                        Cash on Delivery
                                    </strong>

                                    <p>
                                        Pay when your order arrives.
                                    </p>

                                </div>

                            </div>

                        </label>

                    </div>


                    <div class="luxeora-payment-option">

                        <label>

                            <input type="radio">

                            <div class="luxeora-payment-content">

                                <div class="luxeora-payment-icon">
                                    <i class="bi bi-bank"></i>
                                </div>

                                <div>

                                    <strong>
                                        Bank Transfer
                                    </strong>

                                    <p>
                                        Pay through bank transfer.
                                    </p>

                                </div>

                            </div>

                        </label>

                    </div>

                </div>

            </div>


            <!-- ================= ORDER SUMMARY ================= -->

            <div class="col-lg-5">

                <div class="luxeora-order-summary">

                    <div class="luxeora-checkout-heading">

                        <p class="luxeora-section-subtitle">
                            YOUR BAG
                        </p>

                        <h2>
                            Order <span>Summary</span>
                        </h2>

                    </div>


                    <!-- Product 1 -->

                    <div class="luxeora-checkout-product">

                        <div class="luxeora-checkout-product-image">

                            <img src="{{ asset('website/img/product-1.jpg') }}"
                                 alt="Luxury Hair Shampoo">

                        </div>

                        <div class="luxeora-checkout-product-info">

                            <h5>
                                Luxury Hair Shampoo
                            </h5>

                            <p>
                                Quantity: 1
                            </p>

                        </div>

                        <strong>
                            Rs. 1,499
                        </strong>

                    </div>


                    <!-- Product 2 -->

                    <div class="luxeora-checkout-product">

                        <div class="luxeora-checkout-product-image">

                            <img src="{{ asset('website/img/product-3.jpg') }}"
                                 alt="Glow Face Cream">

                        </div>

                        <div class="luxeora-checkout-product-info">

                            <h5>
                                Glow Face Cream
                            </h5>

                            <p>
                                Quantity: 1
                            </p>

                        </div>

                        <strong>
                            Rs. 1,699
                        </strong>

                    </div>


                    <!-- Price -->

                    <div class="luxeora-summary-lines">

                        <div>

                            <span>
                                Subtotal
                            </span>

                            <strong>
                                Rs. 3,198
                            </strong>

                        </div>


                        <div>

                            <span>
                                Delivery
                            </span>

                            <strong>
                                Rs. 200
                            </strong>

                        </div>


                        <div class="luxeora-summary-total">

                            <span>
                                Total
                            </span>

                            <strong>
                                Rs. 3,398
                            </strong>

                        </div>

                    </div>


                    <button class="luxeora-place-order-btn">
                        Place Order
                        <i class="bi bi-arrow-right"></i>
                    </button>


                    <p class="luxeora-secure-note">

                        <i class="bi bi-shield-check"></i>

                        Secure & trusted checkout

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection