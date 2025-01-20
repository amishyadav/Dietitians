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
                    <img src="{{asset('frontend/assets/img/healthy/h2.jpg') }}" class="sec-pic" alt="thumb">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="hero-content">
                                <h2 class="hero-title">
                                    Organic And Healthy Food
                                </h2>
                                <p>
                                    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae  vel illum qui dolorem eum velit esse quam nihil consequatur qui in ea el eum iure reprehenderit
                                </p>
                                <div class="hero-btn">
                                    <a href="contact.html" target="_blank" class="tm-btn-2">
                                        Shop Now
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
                            Our goal Is To Provide Best Organic Products.
                        </h2>
                        <h3>Add Some Organics to your Diet </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem reprehenderit, debitis! Earum obcaecati nostrum temporibus cumque suscipit, autem explicabo ducimus vitae quia et dicta pariatur quae unde corporis porro facilis.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem reprehenderit, debitis! Earum obcaecati nostrum temporibus cumque suscipit, autem explicabo ducimus vitae quia et dicta pariatur quae unde corporis porro facilis.
                        </p>
                        <ul class="about-list">
                            <li>

                                <div class="about-opt">
                                    <img src="{{asset('frontend/assets/img/shape/list-bg.png') }}" class="lst" alt="thumb">
                                    <img src="{{asset('frontend/assets/img/shape/leaves.png') }}" class="leav" alt="thumb">
                                    <div class="about-content">
                                        <h4>100%</h4>
                                        <span>Organic</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="about-opt">
                                    <img src="{{asset('frontend/assets/img/shape/list-bg.png') }}" class="lst" alt="thumb">
                                    <img src="{{asset('frontend/assets/img/shape/leaves.png') }}" class="leav" alt="thumb">
                                    <div class="about-content">
                                        <h4>100%</h4>
                                        <span>Tasty</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="about-opt">
                                    <img src="{{asset('frontend/assets/img/shape/list-bg.png') }}" class="lst" alt="thumb">
                                    <img src="{{asset('frontend/assets/img/shape/leaves.png') }}" class="leav" alt="thumb">
                                    <div class="about-content">
                                        <h4>100%</h4>
                                        <span>Fresh</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
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
            <img src="{{asset('frontend/assets/img/shape/icon-3.png') }}" class="circle-shape round-move" alt="thumb">
            <div class="counter-chm">
                <img src="{{asset('frontend/assets/img/tree/chema3.png') }}" alt="thumb">
            </div>
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
                    <div class="choose-up">
                        <h5 class="hero-sub-title">Why Choose Us?</h5>
                        <h2>
                            We do not buy from the open market & traders.
                        </h2>
                        <p class="mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quas nemo, quis ducimus, repellat quos! consectetur adipisicing elit. Aspernatur quas nemo, quis.Lorem ipsum dolor sit amet, consectetur
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
        <div class="partner-area mb-100">
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
            <div class="price-tree">
                <img src="{{asset('frontend/assets/img/tree/4.png') }}" alt="thumb">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="site-title wh text-center">
                            <h2>Pricing Table</h2>
                            <p class="mb-0">
                                Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pricing-wrapper grid-3">
                    <div class="price-box">
                        <h4 class="price-ribon">Basic</h4>
                        <div class="price-head">
                            <div class="price-head-content">
                                <h3>
                                    <span>$</span>130
                                </h3>
                                <h6>per month</h6>
                            </div>
                        </div>
                        <div class="price-desc">
                            <ul>
                                <li>Business Analyzing</li>
                                <li>24/7 Tech Suport</li>
                                <li>Operational Excellence</li>
                                <li>Knowledge Management</li>
                                <li>Business Idea Ready</li>
                                <li>10 Database</li>
                                <li>Customer Support</li>
                            </ul>
                        </div>
                        <div class="price-bottom">
                            <a href="contact.html" target="_blank" class="tm-btn-2">
                                Shop Now
                                <i class="icofont-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="price-box">
                        <h4 class="price-ribon">Standard</h4>
                        <div class="price-head">
                            <div class="price-head-content">
                                <h3><span>$</span>150</h3>
                                <h6>per month</h6>
                            </div>
                        </div>
                        <div class="price-desc">
                            <ul>
                                <li>Full Business Analyzing</li>
                                <li>24/7 Tech Suport</li>
                                <li>Next Generation Accounting</li>
                                <li>Online Staff Training Sessions</li>
                                <li>Business Idea Ready</li>
                                <li>20 Database</li>
                                <li>Customer Support</li>
                            </ul>
                        </div>
                        <div class="price-bottom">
                            <a href="contact.html" target="_blank" class="tm-btn-2">
                                Shop Now
                                <i class="icofont-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="price-box">
                        <h4 class="price-ribon">Premium</h4>
                        <div class="price-head">
                            <div class="price-head-content">
                                <h3><span>$</span>180</h3>
                                <h6>per month</h6>
                            </div>
                        </div>
                        <div class="price-desc">
                            <ul>
                                <li>Digital Transformation</li>
                                <li>24/7 Tech Suport</li>
                                <li>Supply Chain Optimization</li>
                                <li>E-mail support</li>
                                <li>Business Idea Ready</li>
                                <li>Unlimited Database</li>
                                <li>Customer Support</li>
                            </ul>
                        </div>
                        <div class="price-bottom">
                            <a href="contact.html" target="_blank" class="tm-btn-2">
                                Shop Now
                                <i class="icofont-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
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
    </main>
@endsection
