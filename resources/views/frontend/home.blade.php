@extends('frontend.layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <main class="main">

        <!-- Start Slider
        ============================================= -->
        <div class="hero-section">
            <div class="hero-single">
                <div class="hero-1">
                    <img  src="{{asset('frontend/assets/img/healthy/round-veg.jpg') }}" class="object-fit-contain" alt="thumb">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-content">
                                <h4 class="main-title text-center">
                                    Nourish Your Body, Energize Your Life
                                </h4>
                                <div class="hero-btn align-self-center">
                                    <a href="#price" class="tm-btn-2">
                                        Get Started Now
                                        <i class="icofont-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider -->

        <!-- Start About
        ============================================= -->
        <div class="about pos-rel de-pt">
            <div class="container">
                <div class="about-wpr grid-2">
                    <div class="about-right">
                        <h2 class="hero-title">
                            Who We Are?
                        </h2>
                        <p>
                            Aarogya was founded with a mission to make healthy eating accessible, enjoyable, and effective. Our team of
                            certified nutritionists and wellness experts combines scientific research with real-world solutions to create diet plans that work for you.
                        </p>
                        <h3>Our Vision</h3>
                        <p>
                            To inspire and empower individuals to lead healthier, happier lives through personalized nutrition.
                        </p>
                        <h3>Our Approach</h3>
                        <p>
                            We believe in sustainable, balanced eating habits.
                            Our plans are designed to fit your lifestyle and help you achieve your goals without compromising on taste or convenience.
                        </p>
                    </div>
                    <div class="about-left">
                        <div class="row g-3">
                            <div class="col-xl-12 col-lg-12">
                                <div class="about-pic">
                                    <img src="{{asset('frontend/assets/img/about/2.jpg') }}" alt="thumb">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="about-pic">
                                    <img src="{{asset('frontend/assets/img/about/1.jpg') }}" alt="thumb">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="about-pic">
                                    <img src="{{asset('frontend/assets/img/about/3.jpg') }}" class="mb-10" alt="thumb">
                                    <img src="{{asset('frontend/assets/img/about/4.jpg') }}" alt="thumb">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4">
                                <div class="about-pic">
                                    <img src="{{asset('frontend/assets/img/about/5.jpg') }}" alt="thumb">
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <div class="about-pic">
                                    <img src="{{asset('frontend/assets/img/about/6.jpg') }}" alt="thumb">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End About -->

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
                            <span class="medium">Activate Products</span>
                        </div>
                    </div>
                    <div class="fun-fact">
                        <div class="fun-icon">
                            <i class="flaticon-user"></i>
                        </div>
                        <div class="fun-desc">
                            <p class="timer" data-count="+" data-to="150" data-speed="3000">950</p>
                            <span class="medium">Per Day Visitors</span>
                        </div>
                    </div>
                    <div class="fun-fact">
                        <div class="fun-icon">
                            <i class="flaticon-employee"></i>
                        </div>
                        <div class="fun-desc">
                            <p class="timer" data-count="+" data-to="630" data-speed="3000">630</p>
                            <span class="medium">Satisfied Clients</span>
                        </div>
                    </div>
                    <div class="fun-fact">
                        <div class="fun-icon">
                            <i class="flaticon-diamond"></i>
                        </div>
                        <div class="fun-desc">
                            <p class="timer" data-count="+" data-to="10" data-speed="3000">10</p>
                            <span class="medium">Award Winning</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Counter -->

        <!-- Start Choose
        ============================================= -->
        <div class="choose-area">
            <div class="choose-wpr grid-2 gap-0">
                <div class="choose-left">
                    <div class="choose-left-pic">
                        <img src="{{asset('frontend/assets/img/choose/choose.jpg') }}" alt="thumb">
                    </div>
                </div>
                <div class="choose-right bg-theme">
                    <div class="text-white">
                        <h2 class="text-white">
                            What Makes Us Your Perfect Partner for a Healthier Life.
                        </h2>
                        <p class="my-5">
                            At Aarogya, we go beyond meal plans to deliver a personalized, expert-backed approach to
                            nutrition that fits your unique lifestyle. With a focus on sustainable results, comprehensive support,
                            and inclusive options for all dietary preferences, we’re committed to helping you achieve your health
                            goals with ease and confidence.
                        </p>
                    </div>
                    <div class="choose-feature grid-2">
                        <div class="choose-box ope-1">
                            <div class="choose-icon">
                                <i class="icofont-money-bag"></i>
                            </div>
                            <div class="choose-desc">
                                <h5 class="mb-0">Return Policy</h5>
                            </div>
                        </div>
                        <div class="choose-box">
                            <div class="choose-icon">
                                <i class="icofont-ssl-security"></i>
                            </div>
                            <div class="choose-desc">
                                <h5 class="mb-0">Secured Payment</h5>
                            </div>
                        </div>
                        <div class="choose-box">
                            <div class="choose-icon">
                                <i class="icofont-delivery-time"></i>
                            </div>
                            <div class="choose-desc">
                                <h5 class="mb-0">On Time Delivery</h5>
                            </div>
                        </div>
                        <div class="choose-box ope-1">
                            <div class="choose-icon">
                                <i class="icofont-live-support"></i>
                            </div>
                            <div class="choose-desc">
                                <h5 class="mb-0">Support 24/7</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Choose -->

        <!-- Start Partner
        ============================================= -->
        <div class="mb-100 mt-100">
            <div class="container">
                <div class="partner-wpr partner-sldr owl-carousel owl-theme">
                    <img src="{{asset('frontend/assets/img/partner/client-1.png') }}" alt="thumb">
                    <img src="{{asset('frontend/assets/img/partner/client-2.png') }}" alt="thumb">
                    <img src="{{asset('frontend/assets/img/partner/client-3.png') }}" alt="thumb">
                    <img src="{{asset('frontend/assets/img/partner/client-4.png') }}" alt="thumb">
                    <img src="{{asset('frontend/assets/img/partner/client-5.png') }}" alt="thumb">
                    <img src="{{asset('frontend/assets/img/partner/client-6.png') }}" alt="thumb">
                    <img src="{{asset('frontend/assets/img/partner/client-7.png') }}" alt="thumb">
                    <img src="{{asset('frontend/assets/img/partner/client-8.png') }}" alt="thumb">
                    <img src="{{asset('frontend/assets/img/partner/client-1.png') }}" alt="thumb">
                </div>
            </div>
        </div>
        <!-- End Partner -->

        <!-- Start Pricing
    ============================================= -->
        <div id="price" class="pricing-area bg-theme pos-rel de-padding mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="site-title wh text-center">
                            <h2>Find Your Fit</h2>
                            <p class="mb-0">
                                Choose from our flexible plans tailored to fit your lifestyle and budget.
                                Whether you're looking for simple guidance or full support, we have the right solution to help you achieve lasting results.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pricing-wrapper grid-3">
                    @foreach($pricingPlans as $pricingPlan)
                    <div class="price-box">
                        <h4 class="price-ribon">{{ $pricingPlan->name }}</h4>
                        <div class="price-head">
                            <div class="price-head-content">
                                <h3>
                                    <span class="bx-font-size">₹</span>{{ $pricingPlan->price }}
                                </h3>
                                <h6>{{ $pricingPlan->duration }}</h6>
                            </div>
                        </div>
                        <div class="price-desc">
                            {!!  $pricingPlan->description  !!}}
                        </div>
                        <div class="price-bottom">
                            <a href="contact.html" target="_blank" class="tm-btn-2">
                                Shop Now
                                <i class="icofont-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Pricing-->

        <!-- Start Countdown
        ============================================= -->

        <!-- End Countdown -->

        <!-- Start Review
        ============================================= -->
        <div class="rev-area de-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="site-title wh text-center">
                            <h2>Client Feedback</h2>
                            <p class="mb-0">
                                Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="rev-wpr">
                    <div class="rev-sldr owl-carousel owl-theme">
                        <div class="rev-content">
                            <div class="rev-icon">
                                <div class="rev-pc">
                                    <img src="{{asset('frontend/assets/img/shape/qoute.png') }}" alt="thumb">
                                </div>
                            </div>
                            <div class="rev-desc">
                                <blockquote>
                                    For 50 years, WWF has been protecting the future of nature. The world's leading WWF works in 100 countries supported million members.
                                </blockquote>
                                <div class="rev-bio">
                                    <div class="rev-pic">
                                        <img src="{{asset('frontend/assets/img/single/user-1-s.png') }}" alt="thumb">
                                    </div>
                                    <div class="rev-txt">
                                        <h4>Devin Hamilton</h4>
                                        <span>Client</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rev-content">
                            <div class="rev-icon">
                                <div class="rev-pc">
                                    <img src="{{asset('frontend/assets/img/shape/qoute.png') }}" alt="thumb">
                                </div>
                            </div>
                            <div class="rev-desc">
                                <blockquote>
                                    For 50 years, WWF has been protecting the future of nature. The world's leading WWF works in 100 countries supported million members.
                                </blockquote>
                                <div class="rev-bio">
                                    <div class="rev-pic">
                                        <img src="{{asset('frontend/assets/img/single/user-2-s.png') }}" alt="thumb">
                                    </div>
                                    <div class="rev-txt">
                                        <h4>Lucille Goodwin</h4>
                                        <span>Client</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rev-content">
                            <div class="rev-icon">
                                <div class="rev-pc">
                                    <img src="{{asset('frontend/assets/img/shape/qoute.png') }}" alt="thumb">
                                </div>
                            </div>
                            <div class="rev-desc">
                                <blockquote>
                                    For 50 years, WWF has been protecting the future of nature. The world's leading WWF works in 100 countries supported million members.
                                </blockquote>
                                <div class="rev-bio">
                                    <div class="rev-pic">
                                        <img src="{{asset('frontend/assets/img/single/user-3-s.png') }}" alt="thumb">
                                    </div>
                                    <div class="rev-txt">
                                        <h4>Ira Crawford</h4>
                                        <span>Client</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Review -->

        <!-- Start Blog
============================================= -->
        <div class="blog-area bg-theme de-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="site-title wh text-center">
                            <h2>Latest News</h2>
                            <p class="mb-0">
                                Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="blog-wpr grid-3">
                    <div class="blog-box">
                        <div class="blog-pic">
                            <img src="assets/img/blog/1.jpg" alt="thumb">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li>
                                        <a href="#">

                                            <i class="icofont-user-alt-4"></i>
                                            Admin
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-heart"></i>
                                            33 likes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-comment"></i>
                                            37 Comments
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-desc">
                                <a href="single.html">
                                    <h4>
                                        departure ourselves very as he peculiar believed
                                    </h4>
                                </a>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ipsum perspiciatis, reiciendis.
                                </p>
                                <div class="price-bottom">
                                    <a href="single.html" class="btn-4">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-box">
                        <div class="blog-pic">
                            <img src="assets/img/blog/2.jpg" alt="thumb">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-user-alt-4"></i>
                                            Admin
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-heart"></i>
                                            33 likes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-comment"></i>
                                            37 Comments
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-desc">
                                <a href="single.html">
                                    <h4>
                                        departure ourselves very as he peculiar believed
                                    </h4>
                                </a>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ipsum perspiciatis, reiciendis.
                                </p>
                                <div class="price-bottom">
                                    <a href="single.html" class="btn-4">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-box">
                        <div class="blog-pic">
                            <img src="assets/img/blog/3.jpg" alt="thumb">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-user-alt-4"></i>
                                            Admin
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-heart"></i>
                                            33 likes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-comment"></i>
                                            37 Comments
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-desc">
                                <a href="single.html">
                                    <h4>
                                        departure ourselves very as he peculiar believed
                                    </h4>
                                </a>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ipsum perspiciatis, reiciendis.
                                </p>
                                <div class="price-bottom">
                                    <a href="single.html" class="btn-4">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog -->
    </main>
@endsection
