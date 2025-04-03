@extends('frontend.layouts.app')
@section('title')
    Blog Details
@endsection
@section('content')
        <!-- Start Breadcrumb
        ============================================= -->
        <div class="site-breadcrumb mt-100">
            <div class="container">
                <h2 class="breadcrumb-title">Blog Details</h2>
                <ul class="breadcrumb-menu clearfix">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Blog Details</li>
                </ul>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start Blog Single
		============================================= -->
        <div class="blog-single-area bg pt-50 pb-50">
            <div class="container">
                <div class="blog-single-wpr">
                    <div class="row ps g-5">
                        <div class="col-xl-12">
                            <div class="theme-single blog-single">
                                <div class="theme-pic">
                                    @if ($blog->image)
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                    @endif
                                </div>
                                <div class="theme-info">
                                    <div class="theme-meta">
                                        <div class="theme-meta-left">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-user"></i>
                                                    <a href="#">{{ $blog->author }}</a>
                                                </li>
                                                <li>
                                                    <i class="fas fa-comments"></i>
                                                    10 comments
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="theme-meta-right">
                                            <a href="#" class="shr-btn">
                                                <i class="icofont-share-alt"></i>
                                                Share
                                            </a>
                                        </div>
                                    </div>
                                    <div class="theme-desc">
                                        <h2 class="about-title">
                                            {{ $blog->title }}
                                        </h2>
                                        <p class="mb-30">
                                            {!! $blog->description !!}
                                        </p>

                                        <div class="content-tags">
                                            <h5 class="mb-0">Tags</h5>
                                            <ul>
                                                <li><a href="#" class="tags-link">Theme</a></li>
                                                <li><a href="#" class="tags-link">Business</a></li>
                                                <li><a href="#" class="tags-link">consult</a></li>
                                                <li><a href="#" class="tags-link">Organic</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="single-comments-section blg-single">--}}
{{--                                <h4 class="single-content-title">Comments</h4>--}}
{{--                                <div class="single-commentor">--}}
{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <div class="single-commentor-user">--}}
{{--                                                <img src="assets/img/single/user-1.png" alt="thumb">--}}
{{--                                                <div class="single-commentor-user-bio">--}}
{{--                                                    <div class="single-commentor-user-bio-head">--}}
{{--                                                        <h5> Andrew R. Huskey </h5>--}}
{{--                                                    </div>--}}
{{--                                                    <p>--}}
{{--                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .--}}
{{--                                                    </p>--}}
{{--                                                    <a href="#" class="share d-block">--}}
{{--                                                        Reply<i class="icofont-reply px-2"></i>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <div class="single-commentor-user de-bpd">--}}
{{--                                                <img src="assets/img/single/user-3.png" alt="thumb">--}}
{{--                                                <div class="single-commentor-user-bio">--}}
{{--                                                    <div class="single-commentor-user-bio-head">--}}
{{--                                                        <h5>George A. Liu</h5>--}}
{{--                                                    </div>--}}
{{--                                                    <p>--}}
{{--                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam--}}
{{--                                                    </p>--}}
{{--                                                    <a href="#" class="share d-block">--}}
{{--                                                        Reply<i class="icofont-reply px-2"></i>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <div class="single-commentor-user">--}}
{{--                                                <img src="assets/img/single/user-2.png" alt="thumb">--}}
{{--                                                <div class="single-commentor-user-bio">--}}
{{--                                                    <div class="single-commentor-user-bio-head">--}}
{{--                                                        <h5> Martha M. Muth </h5>--}}
{{--                                                    </div>--}}
{{--                                                    <p>--}}
{{--                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .--}}
{{--                                                    </p>--}}
{{--                                                    <a href="#" class="share d-block">--}}
{{--                                                        Reply<i class="icofont-reply px-2"></i>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="single-comments-section-form">--}}
{{--                                    <h4 class="single-content-title">Leave a Reply</h4>--}}
{{--                                    <form>--}}
{{--                                        <div class="row g-5">--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <input type="text" class="form-control input-style-2" placeholder="Your Name*">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <input type="email" class="form-control input-style-2" placeholder="Your Email*">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-12">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <textarea class="form-control input-style-2" rows="5" placeholder="Your Comment*"></textarea>--}}
{{--                                                </div>--}}
{{--                                                <button type="submit" class="btn-6 mt-30">--}}
{{--                                                    Submit--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Single -->
@endsection
