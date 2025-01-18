<?php

namespace App\Http\Controllers;

use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingPlanController extends Controller
{
    public function index()
    {
        $pricingPlans = PricingPlan::all();
        return view('backend.pricing_plans.index', compact('pricingPlans'));
    }

    public function create()
    {
        return view('backend.pricing_plans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        PricingPlan::create($request->all());
        return redirect()->route('pricing-plans.index')->with('success', 'Pricing Plan created successfully.');
    }

    public function show(PricingPlan $pricingPlan)
    {
        return view('backend.pricing_plans.show', compact('pricingPlan'));
    }

    public function edit(PricingPlan $pricingPlan)
    {
        return view('backend.pricing_plans.edit', compact('pricingPlan'));
    }

    public function update(Request $request, PricingPlan $pricingPlan)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        $pricingPlan->update($request->all());
        return redirect()->route('pricing-plans.index')->with('success', 'Pricing Plan updated successfully.');
    }

    public function destroy(PricingPlan $pricingPlan)
    {
        $pricingPlan->delete();
        return redirect()->route('pricing-plans.index')->with('success', 'Pricing Plan deleted successfully.');
    }
}
