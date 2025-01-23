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
}
