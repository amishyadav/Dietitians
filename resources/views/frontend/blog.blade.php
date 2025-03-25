@extends('frontend.layouts.app')
@section('title')
    Blogs
@endsection
@section('content')
        <!-- Start Breadcrumb
        ============================================= -->
        <div class="site-breadcrumb mt-100">
            <div class="container">
                <h2 class="breadcrumb-title">Blog</h2>
                <ul class="breadcrumb-menu clearfix">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start Blog
		============================================= -->
        <div class="blog-page-area bg pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="blog-page-wpr">
                            @foreach($blogs as $blog)
                            <div class="blog-page-single">
                                <div class="blog-pic">
                                    @if ($blog->image)
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                    @endif
                                </div>
                                <div class="blog-content">
                                    <div class="blog-page-up">
                                        <h3 class="blog-page-title mb-30">
                                            {{ $blog->title }}
                                        </h3>
                                        <div class="blog-user mb-30">
                                            <div class="blog-user-info">
                                                <img src="assets/img/single/user-1-s.png" alt="thumb">
                                                <div class="blog-user-bio">
                                                    <h4>{{ $blog->author }}</h4>
                                                    <span>Admin</span>
                                                </div>
                                            </div>
                                            <ul class="blog-mta">
                                                <li><i class="fas fa-calendar-alt"></i>{{ $blog->created_at }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog-text">
                                        <p class="mb-0">
                                            {!! $blog->description !!}
                                        </p>
                                    </div>
                                    <div class="red-more mt-30">
                                        <a href="{{ route('blogs.details',['title' => $blog->title, 'blog' => $blog]) }}" class="btn-4">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog -->
@endsection
