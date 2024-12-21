@extends('layouts.app')
<style>
    @media (max-width: 768px) {
        .carousel-inner .carousel-item>div {
            display: none;
        }

        .carousel-inner .carousel-item>div:first-child {
            display: block;
        }
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-start,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
        /* // transition-duration: 10s; */
    }

    /* display 4 */
    @media (min-width: 768px) {

        .carousel-inner .carousel-item-right.active,
        .carousel-inner .carousel-item-next,
        .carousel-item-next:not(.carousel-item-start) {
            transform: translateX(25%) !important;
        }

        .carousel-inner .carousel-item-left.active,
        .carousel-item-prev:not(.carousel-item-end),
        .active.carousel-item-start,
        .carousel-item-prev:not(.carousel-item-end) {
            transform: translateX(-25%) !important;
        }

        .carousel-item-next.carousel-item-start,
        .active.carousel-item-end {
            transform: translateX(0) !important;
        }

        .carousel-inner .carousel-item-prev,
        .carousel-item-prev:not(.carousel-item-end) {
            transform: translateX(-25%) !important;
        }
    }

    /* 4step */
    .step-circle {
        width: 50px;
        height: 50px;
        line-height: 50px;
        border-radius: 50%;
        font-size: 1.5rem;
        font-weight: bold;
        text-align: center;
        color: #fff;
        margin: 0 auto 10px;
    }

    .step-1 {
        background-color: #fdd9a1;
        /* Light orange */
    }

    .step-2 {
        background-color: #d4ebf9;
        /* Light blue */
    }

    .step-3 {
        background-color: #d5f6d3;
        /* Light green */
    }

    .step-4 {
        background-color: #d8d4f9;
        /* Light purple */
    }

    /* .step-text {
        text-align: center;
    } */

    .custom-flex-4 {
        flex: 4;
        /* Custom flex-grow */
    }

    /* vitamin */
    .product-card {
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
        padding: 15px;
        text-align: center;
        background: #fff;
    }

    .product-card img {
        max-width: 100%;
        height: auto;
    }

    .badge-new {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: #28a745;
        color: #fff;
        padding: 5px 10px;
        border-radius: 3px;
        font-size: 0.8rem;
    }

    .discount {
        color: #dc3545;
        font-size: 0.9rem;
        font-weight: bold;
    }

    .stats-section {
        text-align: center;
        padding: 30px 0;
    }

    .stats-section h2 {
        font-size: 2rem;
        font-weight: bold;
    }

    .stats-section p {
        margin: 0;
        font-size: 1rem;
        color: #6c757d;
    }

    .divider {
        width: 80%;
        height: 2px;
        background-color: #ffa500;
        /* Orange */
        margin: 20px auto;
    }

    .app-link-section {
        text-align: center;
        margin-top: 20px;
    }

    .app-link-section input[type="text"] {
        width: 250px;
    }

    .bg-aliceblue {
        background-color: aliceblue !important;
    }

    div {
        display: block;
        position: relative;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }




    .bbb_viewed {
        padding-top: 51px;
        padding-bottom: 60px;
        background: #eff6fa
    }

    .bbb_main_container {
        background-color: #fff;
        padding: 11px;
    }

    .bbb_viewed_title_container {
        border-bottom: solid 1px #dadada
    }

    .bbb_viewed_title {
        margin-bottom: 16px;
        margin-top: 8px;

    }

    .bbb_viewed_nav_container {
        position: absolute;
        right: -5px;
        bottom: 14px
    }

    .bbb_viewed_nav {
        display: inline-block;
        cursor: pointer
    }

    .bbb_viewed_nav i {
        color: #dadada;
        font-size: 18px;
        padding: 5px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease
    }

    .bbb_viewed_nav:hover i {
        color: #606264
    }

    .bbb_viewed_prev {
        margin-right: 15px
    }

    .bbb_viewed_slider_container {
        padding-top: 13px;
    }

    .bbb_viewed_item {
        width: 100%;
        background: #FFFFFF;
        border-radius: 2px;
        padding-top: 25px;
        padding-bottom: 25px;
        padding-left: 30px;
        padding-right: 30px
    }

    .bbb_viewed_image {
        width: 150px;
        height: 150px;
    }

    .bbb_viewed_image img {
        display: block;
        max-width: 100%
    }

    .bbb_viewed_content {
        width: 100%;
        margin-top: 25px
    }

    .bbb_viewed_price {
        font-size: 16px;
        color: #000000;
        font-weight: 500
    }

    .bbb_viewed_item.discount .bbb_viewed_price {
        color: #df3b3b
    }

    .bbb_viewed_price span {
        position: relative;
        font-size: 12px;
        font-weight: 400;
        color: rgba(0, 0, 0, 0.6);
        margin-left: 8px
    }

    .bbb_viewed_price span::after {
        display: block;
        position: absolute;
        top: 6px;
        left: -2px;
        width: calc(100% + 4px);
        height: 1px;
        background: #8d8d8d;
        content: ''
    }

    .bbb_viewed_name {
        margin-top: 3px
    }

    .bbb_viewed_name a {
        font-size: 14px;
        color: #000000;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease
    }

    .bbb_viewed_name a:hover {
        color: #0e8ce4
    }

    .item_marks {
        position: absolute;
        top: 18px;
        left: 18px
    }

    .item_mark {
        display: none;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        color: #FFFFFF;
        font-size: 10px;
        font-weight: 500;
        line-height: 36px;
        text-align: center
    }

    .item_discount {
        background: #df3b3b;
        margin-right: 5px
    }

    .item_new {
        background: #0e8ce4
    }

    .bbb_viewed_item.discount .item_discount {
        display: inline-block
    }

    .bbb_viewed_item.is_new .item_new {
        display: inline-block
    }

    .owl-carousel {
        display: block !important;
    }

    /* Parallax effect */
    .parallax {
        position: relative;
        background-image: url('img/banner1.jpg');
        /* Replace with your image path */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
    }

    .text-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-align: center;
    }
</style>
@section('content')

<!-- hero section start-->
<div class="container-fluid mb-5 mt-3">
    <div class="row">
        <!-- Main Product Highlight -->
        <div class="col-lg-8">
            <div id="productCarousel" class="carousel slide h-100 w-100" data-bs-ride="carousel">
                <div class="carousel-inner h-100 w-100">
                    <div class="carousel-item active h-100 w-100">
                        <div class="card shadow-sm h-100 w-100"
                            style="background-image: url('img/banner1.jpg'); background-size: cover; background-position: center; height: 100%; position: relative; background-repeat: no-repeat;">
                            <!-- <div class="row g-0 h-100">
                                <div class="col-md-6 p-4 text-white d-flex align-items-center">
                                    <div>
                                        <h4 class="text-primary">Aloe Vera</h4>
                                        <h2 class="fw-bold">HAIR OIL</h2>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.
                                        </p>
                                        <button class="btn btn-warning">BUY NOW</button>
                                        <div class="mt-3 d-flex">
                                            <div class="rounded-circle bg-primary me-2"
                                                style="width: 10px; height: 10px;"></div>
                                            <div class="rounded-circle bg-secondary" style="width: 10px; height: 10px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- Add more carousel items here -->
                    <div class="carousel-item h-100 w-100">
                        <div class="card shadow-sm h-100 w-100"
                            style="background-image: url('img/banner1.jpg'); background-size: cover; background-position: center; height: 100%; position: relative; background-repeat: no-repeat;">
                            <!-- <div class="row g-0 h-100">
                                <div class="col-md-6 p-4 text-white d-flex align-items-center">
                                    <div>
                                        <h4 class="text-primary">Aloe Vera</h4>
                                        <h2 class="fw-bold">HAIR OIL</h2>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.
                                        </p>
                                        <button class="btn btn-warning">BUY NOW</button>
                                        <div class="mt-3 d-flex">
                                            <div class="rounded-circle bg-primary me-2"
                                                style="width: 10px; height: 10px;"></div>
                                            <div class="rounded-circle bg-secondary" style="width: 10px; height: 10px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Sidebar Categories -->
        <div class="col-lg-4">
            <div class="card shadow-sm h-50 w-100 mb-2"
                style="background-image: url('https://themewagon.github.io/hairnic/img/shampoo.png'); background-size: contain; background-position: center; height: 100%; position: relative; background-repeat: no-repeat;">
                <!-- <div class="row g-0 h-100">
                    <div class="col-md-6 p-4 text-white d-flex align-items-center"> -->
                <div class="p-3">
                    <h4 class="text-primary">Aloe Vera</h4>
                    <h2 class="fw-bold">HAIR OIL</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.
                    </p>
                    <button class="btn btn-warning">BUY NOW</button>
                </div>
            </div>
            <div class="card shadow-sm h-50 w-100 mt-2"
                style="background-image: url('https://themewagon.github.io/hairnic/img/shampoo-1.png'); background-size: contain; background-position: center; height: 100%; position: relative; background-repeat: no-repeat;">
                <div class="p-3">
                    <h4 class="text-primary">Aloe Vera</h4>
                    <h2 class="fw-bold">HAIR OIL</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.
                    </p>
                    <button class="btn btn-warning">BUY NOW</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero section end-->

<!-- delivery section start-->
<div id="myCarousel" class="carousel slide container" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body text-white  p-0"
                        style="width: 260px; height: 260px; background-image: url('img/delivery.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <div class="overlay d-flex flex-column justify-content-center align-items-start p-2"
                            style=" height: 100%; width: 100%;">
                            <h5 class="mb-2">Fast Delivery</h5>
                            <p class="mb-0">Some description ore.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-body text-white  p-0"
                        style="width: 260px; height: 260px; background-image: url('img/delivery.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <div class="overlay d-flex flex-column justify-content-center align-items-start p-2"
                            style=" height: 100%; width: 100%;">
                            <h5 class="mb-2">Fast Delivery</h5>
                            <p class="mb-0">Some description ore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body text-white  p-0"
                        style="width: 260px; height: 260px; background-image: url('img/delivery.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <div class="overlay d-flex flex-column justify-content-center align-items-start p-2"
                            style=" height: 100%; width: 100%;">
                            <h5 class="mb-2">Fast Delivery</h5>
                            <p class="mb-0">Some description ore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body text-white  p-0"
                        style="width: 260px; height: 260px; background-image: url('img/delivery.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <div class="overlay d-flex flex-column justify-content-center align-items-start p-2"
                            style=" height: 100%; width: 100%;">
                            <h5 class="mb-2">Fast Delivery</h5>
                            <p class="mb-0">Some description ore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body text-white  p-0"
                        style="width: 260px; height: 260px; background-image: url('img/delivery.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <div class="overlay d-flex flex-column justify-content-center align-items-start p-2"
                            style=" height: 100%; width: 100%;">
                            <h5 class="mb-2">Fast Delivery</h5>
                            <p class="mb-0">Some description ore.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-body text-white  p-0"
                        style="width: 260px; height: 260px; background-image: url('img/delivery.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <div class="overlay d-flex flex-column justify-content-center align-items-start p-2"
                            style=" height: 100%; width: 100%;">
                            <h5 class="mb-2">Fast Delivery</h5>
                            <p class="mb-0">Some description ore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body text-white  p-0"
                        style="width: 260px; height: 260px; background-image: url('img/delivery.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <div class="overlay d-flex flex-column justify-content-center align-items-start p-2"
                            style=" height: 100%; width: 100%;">
                            <h5 class="mb-2">Fast Delivery</h5>
                            <p class="mb-0">Some description ore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body text-white  p-0"
                        style="width: 260px; height: 260px; background-image: url('img/delivery.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <div class="overlay d-flex flex-column justify-content-center align-items-start p-2"
                            style=" height: 100%; width: 100%;">
                            <h5 class="mb-2">Fast Delivery</h5>
                            <p class="mb-0">Some description ore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- delivery section end-->

<!-- service section start-->
<div class="container py-5">
    <div class="row ">
        <!-- Step 1 -->
        <div class="col-12 col-md-3 d-flex">
            <div class="step-circle step-1">1</div>
            <div class="detail custom-flex-4 ps-4">
                <h5 class="step-text">Your Order</h5>
                <p class="step-text">Add products to your cart, enter your details, and confirm.</p>
            </div>
        </div>
        <!-- Step 2 -->
        <div class="col-12 col-md-3 d-flex">
            <div class="step-circle step-2">2</div>
            <div class="detail custom-flex-4 ps-4">
                <h5 class="step-text">Picking Your Order</h5>
                <p class="step-text">Your order is being picked and will be forwarded for packaging.</p>
            </div>

        </div>
        <!-- Step 3 -->
        <div class="col-12 col-md-3 d-flex">
            <div class="step-circle step-3">3</div>
            <div class="detail custom-flex-4 ps-4">
                <h5 class="step-text">Packing Your Order</h5>
                <p class="step-text">We are packing your order and will be out for delivery soon.</p>
            </div>
        </div>
        <!-- Step 4 -->
        <div class="col-12 col-md-3 d-flex">
            <div class="step-circle step-4">4</div>
            <div class="detail custom-flex-4 ps-4">
                <h5 class="step-text">Deliver</h5>
                <p class="step-text">Your order has been prepared and is out for delivery. It will be delivered
                    soon.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- service section end-->

<!-- parallax section start-->
<!-- <section class="parallax">
        <div class="text-content">
            <h1 class="display-3">Your Title Here</h1>
            <p class="lead">This is a description or some additional content on the image.</p>
            <a href="#your-link" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </section> -->


<!-- parallax section end-->

<!-- card corosel section start-->
<div class="bbb_viewed">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="bbb_main_container">
                    <div class="bbb_viewed_title_container">
                        <h3 class="bbb_viewed_title">Vitamis & Minerals</h3>
                        <div class="bbb_viewed_nav_container">
                            <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="bbb_viewed_slider_container d-flex" style="overflow: hidden;">
                        <!-- <div class="owl-carousel owl-theme bbb_viewed_slider"> -->
                        <div class="owl-item" style="background:#c9c9de;">
                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center"
                                style="background:#c9c9de;">
                                <div class="bbb_viewed_image d-flex justify-content-center align-items-center"><img
                                        src="https://themewagon.github.io/hairnic/img/shampoo-1.png" class="h-100"
                                        alt=""></div>

                            </div>
                        </div>
                        <div class="owl-item">
                            <div
                                class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image d-flex justify-content-center align-items-center"><img
                                        src="https://themewagon.github.io/hairnic/img/product-1.png" alt=""
                                        class="h-100"></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹30079</div>
                                    <div class="bbb_viewed_name text-decoration-none"><a href="#">XYZ</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div
                                class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image d-flex justify-content-center align-items-center"><img
                                        src="https://themewagon.github.io/hairnic/img/product-2.png" alt=""
                                        class="h-100"></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹22250</div>
                                    <div class="bbb_viewed_name text-decoration-none"><a href="#">ABC</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div
                                class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image d-flex justify-content-center align-items-center"><img
                                        src="https://themewagon.github.io/hairnic/img/product-1.png" alt=""
                                        class="h-100"></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹1379</div>
                                    <div class="bbb_viewed_name text-decoration-none"><a href="#">conditioner</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div
                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image d-flex justify-content-center align-items-center"><img
                                        src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924361/21HmjI5eVcL.jpg"
                                        alt="" class="h-100"></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹225<span>₹300</span></div>
                                    <div class="bbb_viewed_name text-decoration-none"><a href="#">shampoo</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div
                                class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image d-flex justify-content-center align-items-center"><img
                                        src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924241/8fbb415a2ab2a4de55bb0c8da73c4172--ps.jpg"
                                        alt="" class="h-100"></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₹13275</div>
                                    <div class="bbb_viewed_name text-decoration-none"><a href="#">XYZ</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- card corosel section end-->

<!-- form section start-->
<div class="container">
    <!-- Statistics Section -->
    <div class="stats-section">
        <h4>INDIA'S LARGEST HEALTHCARE PLATFORM</h4>
        <div class="row text-center mt-4">
            <div class="col-12 col-md-4">
                <h2>120M+</h2>
                <p class="fw-normal">Visitors</p>
            </div>
            <div class="col-12 col-md-4">
                <h2>20M+</h2>
                <p class="fw-normal">Orders Delivered</p>
            </div>
            <div class="col-12 col-md-4">
                <h2>1000+</h2>
                <p class="fw-normal">Cities</p>
            </div>
        </div>
        <div class="divider"></div>
    </div>

    <!-- App Link Section -->
    <div class="app-link-section d-flex justify-content-center align-items-center">
        <p class="px-3 fw-bold">Get the link to download App</p>
        <form class="d-flex justify-content-center align-items-center px-3">
            <input type="text" class="form-control me-2 border-0 bg-aliceblue" placeholder="Enter Phone Number">
            <button type="submit" class="btn btn-orange text-white rounded-pill p-2"
                style="background-color: #ffa500;">SEND
                LINK</button>
        </form>
    </div>
</div>
<!-- form section end-->
@endsection
<script>
    // var myCarousel = document.querySelector('#myCarousel')
    // var carousel = new bootstrap.Carousel(myCarousel, {
    //   interval: 100000
    // })

    $('.carousel .carousel-item').each(function () {
        var minPerSlide = 4;
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < minPerSlide; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            nav: true
        });
    });

</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>