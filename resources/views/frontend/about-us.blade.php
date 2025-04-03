@extends('frontend.layouts.app')
@section('title')
    About Us
@endsection
@section('content')
        <!-- Start Breadcrumb
        ============================================= -->
        <div class="site-breadcrumb mt-100">
            <div class="container">
                <h2 class="breadcrumb-title">About Us</h2>
                <ul class="breadcrumb-menu clearfix">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start About Us
        ============================================= -->
        <div class="about-2-area de-padding">
            <div class="container">
                <div class="about-2-wpr grid-2">
                    <div class="about-2-left">
                        <h5 class="hero-sub-title">
                            About Us
                        </h5>
                        <h2 class="hero-title">
                            We are Provide Best Organic Products.
                        </h2>
                        <div class="about-2-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, necessitatibus explicabo adipisci sed, sunt officiis facilis delectus earum omnis quidem qui perferendis totam impedit aut libero, voluptatibus nisi non at!
                            </p>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam natus itaque modi. Maxime fugit cupiditate dignissimos id voluptates ducimus in.
                            </p>
                        </div>
                        <a href="shop.html" class="tm-btn-2">
                            Shop Now
                            <i class="icofont-long-arrow-right"></i>
                        </a>
                    </div>
                    <div class="about-2-right">
                        <div class="cate-2-left-pic pos-rel">
                            <img src="{{asset('frontend/assets/img/about/2.jpg') }}"  alt="thumb">
                            <img src="{{asset('frontend/assets/img/about/1.jpg') }}" alt="thumb">
                            <div class="cate-exp">
                                <h3>
                                    we providing Best Services For <span>20</span> Years
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Us -->

        <!-- Start Video Intro
        ============================================= -->
        <div class="vidz-area">
            <div class="de-pb">
                <div class="container">
                    <div class="vidz-wpr">
                        <img src="assets/img/bg/vidz.jpg" alt="thumb">
                        <div class="pl">
                            <a href="https://youtu.be/mZXetb1TPEg" class="item popup-youtube play-bt">
                                <i class="icofont-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Video Intro -->

        <!-- Start Counter
    ============================================= -->
        <div class="counter-area de-padding">
            <div class="container">
                <div class="counter-wpr grid-4 gap-0 counter-1 bg-theme pd-60">
                    <div class="fun-fact">
                        <div class="fun-icon">
                            <i class="flaticon-coins"></i>
                        </div>
                        <div class="fun-desc">
                            <p class="timer" data-count="+" data-to="200" data-speed="3000">120</p>
                            <span class="medium">Personalized Diet Plans Delivered</span>
                        </div>
                    </div>
                    <div class="fun-fact">
                        <div class="fun-icon">
                            <i class="flaticon-user"></i>
                        </div>
                        <div class="fun-desc">
                            <p class="timer" data-count="+" data-to="150" data-speed="3000">950</p>
                            <span class="medium">Active Users</span>
                        </div>
                    </div>
                    <div class="fun-fact">
                        <div class="fun-icon">
                            <i class="flaticon-employee"></i>
                        </div>
                        <div class="fun-desc">
                            <p class="timer" data-count="+" data-to="630" data-speed="3000">630</p>
                            <span class="medium">Happy & Satisfied Customers</span>
                        </div>
                    </div>
                    <div class="fun-fact">
                        <div class="fun-icon">
                            <i class="flaticon-diamond"></i>
                        </div>
                        <div class="fun-desc">
                            <p class="timer" data-count="+" data-to="10" data-speed="3000">10</p>
                            <span class="medium">Years of Expertise in Nutrition</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Counter -->
@endsection
