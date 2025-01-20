<?php

namespace App\Http\Controllers;

use App\Models\PricingPlan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $pricingPlans = PricingPlan::all();
        return view('frontend.home', compact('pricingPlans'));
    }
}
