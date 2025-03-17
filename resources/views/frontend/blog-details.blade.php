@extends('frontend.layouts.app')
@section('title')
    Blogs
@endsection
@section('content')

    <!-- Start Breadcrumb
		============================================= -->
    <div class="site-breadcrumb de-padding mt-100">
        <div class="container">
            <h2 class="breadcrumb-title">Blog Details</h2>
            <ul class="breadcrumb-menu clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Blog Details</li>
            </ul>
        </div>
    </div>
    <!-- End Breadcrumb -->


    <!-- Start Blog
    ============================================= -->
    <div class="blog-area bg pos-rel">
        <div class="container">
            <div class="row ps g-5">
                <div class="col-xl-10">
                    <div class="blog-page-wpr">
                        <div class="blog-page-single">
                            <div class="blog-pic">
                                @if ($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" >
                                @endif
                            </div>
                            <div class="blog-content">
                                <div class="blog-page-up">
                                    <h3 class="blog-page-title mb-30">
                                        Family months lasted simple set nature vulgar him accusantium
                                    </h3>
                                    <div class="blog-user mb-30">
                                        <div class="blog-user-info">
                                            <img src="{{asset('frontend/assets/img/single/user-1-s.png') }}" alt="thumb">
                                            <div class="blog-user-bio">
                                                <h4>Christian Bale</h4>
                                                <span>Admin</span>
                                            </div>
                                        </div>
                                        <ul class="blog-mta">
                                            <li><i class="fas fa-calendar-alt"></i>30 may 2018</li>
                                            <li><i class="fas fa-comments"></i>23</li>
                                            <li><i class="fas fa-thumbs-up"></i>25</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-text">
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus aspernatur voluptates quasi accusantium minima magni officia dolores possimus in dolorum deserunt quas, qui culpa, praesentium, saepe iste debitis exercitationem! Ipsa!
                                    </p>
                                </div>
                                <div class="red-more mt-30">
                                    <a href="single.html" class="btn-4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
