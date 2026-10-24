@extends('website.master')

@section('main')

<!-- ================= PRODUCTS HEADER ================= -->

<div class="container-fluid luxeora-products-header">
    <div class="container text-center py-5">

        <p class="luxeora-section-subtitle">
            LUXEORA BEAUTY SHOP
        </p>

        <h1 class="luxeora-page-title">
            Beauty <span>Essentials.</span>
        </h1>

        <p class="luxeora-page-intro">
            Discover our carefully selected collection of premium beauty
            and salon essentials.
        </p>

    </div>
</div>


<!-- ================= PRODUCTS SECTION ================= -->

<div class="container-fluid luxeora-products-page py-5">

    <div class="container py-5">

        <!-- Categories -->

        <div class="luxeora-product-categories text-center mb-5">

            <button class="luxeora-category-btn active">
                All Products
            </button>

            <button class="luxeora-category-btn">
                Hair Care
            </button>

            <button class="luxeora-category-btn">
                Skin Care
            </button>

            <button class="luxeora-category-btn">
                Nail Care
            </button>

            <button class="luxeora-category-btn">
                Beauty
            </button>

        </div>


        <!-- Products -->

        <div class="row g-4">


            <!-- PRODUCT 1 -->

            <div class="col-lg-3 col-md-6">

                <div class="luxeora-product-card">

                    <div class="luxeora-product-image">

                        <img src="{{ asset('website/img/product-1.jpg') }}"
                             alt="Luxury Hair Shampoo">

                        <span class="luxeora-product-badge">
                            Bestseller
                        </span>

                        <div class="luxeora-product-overlay">

                            <a href="#"
                               class="luxeora-product-view">
                                <i class="bi bi-eye"></i>
                            </a>

                            <button class="luxeora-product-cart">
                                <i class="bi bi-bag-plus"></i>
                            </button>

                        </div>

                    </div>


                    <div class="luxeora-product-content">

                        <p class="luxeora-product-category">
                            Hair Care
                        </p>

                        <h4>
                            Luxury Hair Shampoo
                        </h4>

                        <p class="luxeora-product-description">
                            A nourishing shampoo designed to leave hair
                            smooth, fresh and beautifully soft.
                        </p>

                        <div class="luxeora-product-bottom">

                            <span class="luxeora-product-price">
                                Rs. 1,499
                            </span>

                            <button class="luxeora-add-cart-btn">
                                Add to Cart
                            </button>

                        </div>

                    </div>

                </div>

            </div>


            <!-- PRODUCT 2 -->

            <div class="col-lg-3 col-md-6">

                <div class="luxeora-product-card">

                    <div class="luxeora-product-image">

                        <img src="{{ asset('website/img/product-2.webp') }}"
                             alt="Repair Hair Serum">

                        <span class="luxeora-product-badge">
                            New
                        </span>

                        <div class="luxeora-product-overlay">

                            <a href="#"
                               class="luxeora-product-view">
                                <i class="bi bi-eye"></i>
                            </a>

                            <button class="luxeora-product-cart">
                                <i class="bi bi-bag-plus"></i>
                            </button>

                        </div>

                    </div>


                    <div class="luxeora-product-content">

                        <p class="luxeora-product-category">
                            Hair Care
                        </p>

                        <h4>
                            Repair Hair Serum
                        </h4>

                        <p class="luxeora-product-description">
                            Lightweight serum that helps give hair
                            a smooth and polished finish.
                        </p>

                        <div class="luxeora-product-bottom">

                            <span class="luxeora-product-price">
                                Rs. 1,899
                            </span>

                            <button class="luxeora-add-cart-btn">
                                Add to Cart
                            </button>

                        </div>

                    </div>

                </div>

            </div>


            <!-- PRODUCT 3 -->

            <div class="col-lg-3 col-md-6">

                <div class="luxeora-product-card">

                    <div class="luxeora-product-image">

                        <img src="{{ asset('website/img/product-3.jpg') }}"
                             alt="Glow Face Cream">

                        <div class="luxeora-product-overlay">

                            <a href="#"
                               class="luxeora-product-view">
                                <i class="bi bi-eye"></i>
                            </a>

                            <button class="luxeora-product-cart">
                                <i class="bi bi-bag-plus"></i>
                            </button>

                        </div>

                    </div>


                    <div class="luxeora-product-content">

                        <p class="luxeora-product-category">
                            Skin Care
                        </p>

                        <h4>
                            Glow Face Cream
                        </h4>

                        <p class="luxeora-product-description">
                            A rich daily cream created to keep skin
                            soft, moisturized and radiant.
                        </p>

                        <div class="luxeora-product-bottom">

                            <span class="luxeora-product-price">
                                Rs. 1,699
                            </span>

                            <button class="luxeora-add-cart-btn">
                                Add to Cart
                            </button>

                        </div>

                    </div>

                </div>

            </div>


            <!-- PRODUCT 4 -->

            <div class="col-lg-3 col-md-6">

                <div class="luxeora-product-card">

                    <div class="luxeora-product-image">

                        <img src="{{ asset('website/img/product-4.avif') }}"
                             alt="Hydrating Face Serum">

                        <span class="luxeora-product-badge">
                            Popular
                        </span>

                        <div class="luxeora-product-overlay">

                            <a href="#"
                               class="luxeora-product-view">
                                <i class="bi bi-eye"></i>
                            </a>

                            <button class="luxeora-product-cart">
                                <i class="bi bi-bag-plus"></i>
                            </button>

                        </div>

                    </div>


                    <div class="luxeora-product-content">

                        <p class="luxeora-product-category">
                            Skin Care
                        </p>

                        <h4>
                            Hydrating Face Serum
                        </h4>

                        <p class="luxeora-product-description">
                            A lightweight hydrating serum for a
                            fresh and comfortable skin feel.
                        </p>

                        <div class="luxeora-product-bottom">

                            <span class="luxeora-product-price">
                                Rs. 2,299
                            </span>

                            <button class="luxeora-add-cart-btn">
                                Add to Cart
                            </button>

                        </div>

                    </div>

                </div>

            </div>


            <!-- PRODUCT 5 -->

            <div class="col-lg-3 col-md-6">

                <div class="luxeora-product-card">

                    <div class="luxeora-product-image">

                        <img src="{{ asset('website/img/product-5.jpg') }}"
                             alt="Professional Nail Kit">

                        <div class="luxeora-product-overlay">

                            <a href="#"
                               class="luxeora-product-view">
                                <i class="bi bi-eye"></i>
                            </a>

                            <button class="luxeora-product-cart">
                                <i class="bi bi-bag-plus"></i>
                            </button>

                        </div>

                    </div>


                    <div class="luxeora-product-content">

                        <p class="luxeora-product-category">
                            Nail Care
                        </p>

                        <h4>
                            Professional Nail Kit
                        </h4>

                        <p class="luxeora-product-description">
                            A complete nail care collection for
                            a polished salon-inspired finish.
                        </p>

                        <div class="luxeora-product-bottom">

                            <span class="luxeora-product-price">
                                Rs. 2,499
                            </span>

                            <button class="luxeora-add-cart-btn">
                                Add to Cart
                            </button>

                        </div>

                    </div>

                </div>

            </div>


            <!-- PRODUCT 6 -->

            <div class="col-lg-3 col-md-6">

                <div class="luxeora-product-card">

                    <div class="luxeora-product-image">

                        <img src="{{ asset('website/img/product-6.avif') }}"
                             alt="Luxury Body Lotion">

                        <span class="luxeora-product-badge">
                            Bestseller
                        </span>

                        <div class="luxeora-product-overlay">

                            <a href="#"
                               class="luxeora-product-view">
                                <i class="bi bi-eye"></i>
                            </a>

                            <button class="luxeora-product-cart">
                                <i class="bi bi-bag-plus"></i>
                            </button>

                        </div>

                    </div>


                    <div class="luxeora-product-content">

                        <p class="luxeora-product-category">
                            Beauty
                        </p>

                        <h4>
                            Luxury Body Lotion
                        </h4>

                        <p class="luxeora-product-description">
                            A silky body lotion that keeps skin
                            feeling soft and comfortably moisturized.
                        </p>

                        <div class="luxeora-product-bottom">

                            <span class="luxeora-product-price">
                                Rs. 1,299
                            </span>

                            <button class="luxeora-add-cart-btn">
                                Add to Cart
                            </button>

                        </div>

                    </div>

                </div>

            </div>


            <!-- PRODUCT 7 -->

            <div class="col-lg-3 col-md-6">

                <div class="luxeora-product-card">

                    <div class="luxeora-product-image">

                        <img src="{{ asset('website/img/product-7.webp') }}"
                             alt="Salon Hair Mask">

                        <span class="luxeora-product-badge">
                            New
                        </span>

                        <div class="luxeora-product-overlay">

                            <a href="#"
                               class="luxeora-product-view">
                                <i class="bi bi-eye"></i>
                            </a>

                            <button class="luxeora-product-cart">
                                <i class="bi bi-bag-plus"></i>
                            </button>

                        </div>

                    </div>


                    <div class="luxeora-product-content">

                        <p class="luxeora-product-category">
                            Hair Care
                        </p>

                        <h4>
                            Salon Hair Mask
                        </h4>

                        <p class="luxeora-product-description">
                            A rich conditioning mask for smooth,
                            soft and salon-inspired looking hair.
                        </p>

                        <div class="luxeora-product-bottom">

                            <span class="luxeora-product-price">
                                Rs. 2,099
                            </span>

                            <button class="luxeora-add-cart-btn">
                                Add to Cart
                            </button>

                        </div>

                    </div>

                </div>

            </div>


            <!-- PRODUCT 8 -->

            <div class="col-lg-3 col-md-6">

                <div class="luxeora-product-card">

                    <div class="luxeora-product-image">

                        <img src="{{ asset('website/img/product-8.jpg') }}"
                             alt="Beauty Essentials Set">

                        <span class="luxeora-product-badge">
                            Exclusive
                        </span>

                        <div class="luxeora-product-overlay">

                            <a href="#"
                               class="luxeora-product-view">
                                <i class="bi bi-eye"></i>
                            </a>

                            <button class="luxeora-product-cart">
                                <i class="bi bi-bag-plus"></i>
                            </button>

                        </div>

                    </div>


                    <div class="luxeora-product-content">

                        <p class="luxeora-product-category">
                            Beauty
                        </p>

                        <h4>
                            Beauty Essentials Set
                        </h4>

                        <p class="luxeora-product-description">
                            A premium collection of everyday beauty
                            essentials curated by Luxeora.
                        </p>

                        <div class="luxeora-product-bottom">

                            <span class="luxeora-product-price">
                                Rs. 3,499
                            </span>

                            <button class="luxeora-add-cart-btn">
                                Add to Cart
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- ================= SHOP CTA ================= -->

        <div class="luxeora-products-cta mt-5">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <p class="luxeora-section-subtitle">
                        LUXEORA EXPERIENCE
                    </p>

                    <h2>
                        Beauty that feels <span>luxurious.</span>
                    </h2>

                    <p>
                        Bring the Luxeora salon experience home with
                        our carefully selected beauty essentials.
                    </p>

                </div>

                <div class="col-lg-4 text-lg-end">

                    <a href="{{ url('/appointment') }}"
                       class="luxeora-products-cta-btn">

                        Book A Salon Appointment

                        <i class="bi bi-arrow-right"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection