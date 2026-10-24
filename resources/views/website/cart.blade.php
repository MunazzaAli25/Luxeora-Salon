@extends('website.master')

@section('main')

<!-- ================= CART HEADER ================= -->

<div class="container-fluid luxeora-cart-header">
    <div class="container text-center py-5">

        <p class="luxeora-section-subtitle">
            LUXEORA BEAUTY SHOP
        </p>

        <h1 class="luxeora-page-title">
            Your <span>Shopping Bag.</span>
        </h1>

        <p class="luxeora-page-intro">
            Review your selected beauty essentials before checkout.
        </p>

    </div>
</div>


<!-- ================= CART SECTION ================= -->

<div class="container-fluid luxeora-cart-page py-5">

    <div class="container py-5">

        <div class="row g-5">

            <!-- ================= CART ITEMS ================= -->

            <div class="col-lg-8">

                <div class="luxeora-cart-box">

                    <div class="luxeora-cart-heading">

                        <div>
                            <p class="luxeora-section-subtitle mb-1">
                                YOUR BAG
                            </p>

                            <h2>
                                Shopping <span>Cart</span>
                            </h2>
                        </div>

                        <span class="luxeora-cart-count">
                            3 Items
                        </span>

                    </div>


                    <!-- PRODUCT 1 -->

                    <div class="luxeora-cart-item">

                        <div class="luxeora-cart-image">

                            <img src="{{ asset('website/img/product-1.jpg') }}"
                                 alt="Luxury Hair Shampoo">

                        </div>


                        <div class="luxeora-cart-info">

                            <p class="luxeora-cart-category">
                                HAIR CARE
                            </p>

                            <h4>
                                Luxury Hair Shampoo
                            </h4>

                            <span>
                                Rs. 1,499
                            </span>

                        </div>


                        <div class="luxeora-cart-quantity">

                            <button>
                                −
                            </button>

                            <span>
                                1
                            </span>

                            <button>
                                +
                            </button>

                        </div>


                        <div class="luxeora-cart-item-total">

                            Rs. 1,499

                        </div>


                        <button class="luxeora-cart-remove">

                            <i class="bi bi-trash3"></i>

                        </button>

                    </div>


                    <!-- PRODUCT 2 -->

                    <div class="luxeora-cart-item">

                        <div class="luxeora-cart-image">

                            <img src="{{ asset('website/img/product-3.jpg') }}"
                                 alt="Glow Face Cream">

                        </div>


                        <div class="luxeora-cart-info">

                            <p class="luxeora-cart-category">
                                SKIN CARE
                            </p>

                            <h4>
                                Glow Face Cream
                            </h4>

                            <span>
                                Rs. 1,699
                            </span>

                        </div>


                        <div class="luxeora-cart-quantity">

                            <button>
                                −
                            </button>

                            <span>
                                1
                            </span>

                            <button>
                                +
                            </button>

                        </div>


                        <div class="luxeora-cart-item-total">

                            Rs. 1,699

                        </div>


                        <button class="luxeora-cart-remove">

                            <i class="bi bi-trash3"></i>

                        </button>

                    </div>


                    <!-- PRODUCT 3 -->

                    <div class="luxeora-cart-item">

                        <div class="luxeora-cart-image">

                            <img src="{{ asset('website/img/product-5.jpg') }}"
                                 alt="Professional Nail Kit">

                        </div>


                        <div class="luxeora-cart-info">

                            <p class="luxeora-cart-category">
                                NAIL CARE
                            </p>

                            <h4>
                                Professional Nail Kit
                            </h4>

                            <span>
                                Rs. 2,499
                            </span>

                        </div>


                        <div class="luxeora-cart-quantity">

                            <button>
                                −
                            </button>

                            <span>
                                1
                            </span>

                            <button>
                                +
                            </button>

                        </div>


                        <div class="luxeora-cart-item-total">

                            Rs. 2,499

                        </div>


                        <button class="luxeora-cart-remove">

                            <i class="bi bi-trash3"></i>

                        </button>

                    </div>


                    <!-- CONTINUE SHOPPING -->

                    <div class="luxeora-cart-footer">

                        <a href="{{ url('/products') }}">
                            <i class="bi bi-arrow-left"></i>
                            Continue Shopping
                        </a>

                    </div>

                </div>

            </div>


            <!-- ================= ORDER SUMMARY ================= -->

            <div class="col-lg-4">

                <div class="luxeora-cart-summary">

                    <p class="luxeora-section-subtitle">
                        ORDER SUMMARY
                    </p>

                    <h2>
                        Cart <span>Total</span>
                    </h2>


                    <div class="luxeora-cart-summary-line">

                        <span>
                            Subtotal
                        </span>

                        <strong>
                            Rs. 5,697
                        </strong>

                    </div>


                    <div class="luxeora-cart-summary-line">

                        <span>
                            Delivery
                        </span>

                        <strong>
                            Rs. 200
                        </strong>

                    </div>


                    <div class="luxeora-cart-summary-total">

                        <span>
                            Total
                        </span>

                        <strong>
                            Rs. 5,897
                        </strong>

                    </div>


                    <a href="#"
                       class="luxeora-cart-checkout-btn">

                        Proceed To Checkout

                        <i class="bi bi-arrow-right"></i>

                    </a>


                    <div class="luxeora-cart-trust">

                        <div>
                            <i class="bi bi-shield-check"></i>
                            Secure Checkout
                        </div>

                        <div>
                            <i class="bi bi-truck"></i>
                            Fast Delivery
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection