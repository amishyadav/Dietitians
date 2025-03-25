<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $pricingPlans = PricingPlan::all();
        $blogs = Blog::all();
        return view('frontend.home', compact('pricingPlans','blogs'));
    }

    public function blog() {
        $blogs = Blog::latest()->get();
        return view('frontend.blog', compact('blogs'));
    }


    public function details($title, $blogId) {
        $blog = Blog::findOrFail($blogId);
        return view('frontend.blog-details', compact('blog'));
    }
}
