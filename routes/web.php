<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingPlanController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend Routes
Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('pricing-plans/redirect-to-whatsapp/{pricingPlan}',[PricingPlanController::class,'redirectToWhatsApp'])->name('pricing-plans.redirect-whatsapp');
Route::get('blogs', [HomeController::class,'blog'])->name('blog');
Route::get('blogs/{title}/{blog}',[HomeController::class,'details'])->name('blogs.details');
Route::get('about-us', [HomeController::class,'aboutUs'])->name('about-us');

// Backend Routes
Route::group(['prefix'=>'admin','middleware' => ['web']], function () {
    // Signup Routes
    Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signup']);

    // Login Routes
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    // Logout Route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard
    Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');

    // Subscriptions
    Route::get('/subscriptions', [SubscriptionController::class,'index'])->name('subscription.index');

    // Pricing Plans
    Route::resource('pricing-plans', PricingPlanController::class)->except('show');
    Route::get('pricing-plans/{pricingPlan}/delete',[PricingPlanController::class,'destroy'])->name('pricing-plans.destroy');

    //Blogs
    Route::resource('blogs', BlogController::class);
    Route::get('blogs/{blog}/delete',[BlogController::class,'destroy'])->name('blogs.destroy');


    Route::get('/youtube', [PricingPlanController::class,'youtube'])->name('subscription.index');

});
