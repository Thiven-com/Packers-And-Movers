<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServicesingleController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\DonationEnquiryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ServiceAreaController;
use App\Http\Controllers\Admin\ServiceEnquiryController;
use App\Http\Controllers\Admin\VideoTestimonialController;
use Illuminate\Support\Facades\Route;





Route::get('login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('login', [AuthController::class, 'login'])->name('admin.loginAction');

Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::get('logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'admin'], function () {
    Route::get('dashboard', [AuthController::class, 'dashboard'])
        ->name('admin.dashboard');

    Route::get('services', [ServiceController::class, 'index'])
        ->name('services.all');

    Route::get('services/create', [ServiceController::class, 'create'])
        ->name('services.create');

    Route::post('services', [ServiceController::class, 'store'])
        ->name('services.store');

    Route::get('services/{id}/edit', [ServiceController::class, 'edit'])
        ->name('services.edit');

    Route::put('services/{id}', [ServiceController::class, 'update'])
        ->name('services.update');
    Route::delete('blogs/{id}', [BlogController::class, 'destroy'])
        ->name('admin.blogs.destroy');


    Route::get('blogs', [BlogController::class, 'index'])
        ->name('admin.blogs.all');

    Route::get('blogs/create', [BlogController::class, 'create'])
        ->name('admin.blogs.create');

    Route::post('blogs', [BlogController::class, 'store'])
        ->name('admin.blogs.store');

    Route::get('blogs/{id}/edit', [BlogController::class, 'edit'])
        ->name('admin.blogs.edit');

    Route::put('blogs/{id}', [BlogController::class, 'update'])
        ->name('admin.blogs.update');



    Route::delete('services/{id}', [ServiceController::class, 'destroy'])
        ->name('services.destroy');


    Route::get('galleries', [GalleryController::class, 'index'])
        ->name('admin.galleries.all');

    Route::get('galleries/create', [GalleryController::class, 'create'])
        ->name('admin.galleries.create');

    Route::post('galleries', [GalleryController::class, 'store'])
        ->name('admin.galleries.store');

    Route::get('galleries/{id}/edit', [GalleryController::class, 'edit'])
        ->name('admin.galleries.edit');

    Route::put('galleries/{id}', [GalleryController::class, 'update'])
        ->name('admin.galleries.update');

    Route::delete('galleries/{id}', [GalleryController::class, 'destroy'])
        ->name('admin.galleries.destroy');


    Route::get('/videotestimonials', [VideoTestimonialController::class, 'index'])
        ->name('videotestimonials.index');

    Route::get('/videotestimonials/create', [VideoTestimonialController::class, 'create'])
        ->name('videotestimonials.create');

    Route::post('/videotestimonials/store', [VideoTestimonialController::class, 'store'])
        ->name('videotestimonials.store');

    Route::get('/videotestimonials/{id}/edit', [VideoTestimonialController::class, 'edit'])
        ->name('videotestimonials.edit');

    Route::post('/videotestimonials/{id}/update', [VideoTestimonialController::class, 'update'])
        ->name('videotestimonials.update');

    Route::delete('/videotestimonials/{id}', [VideoTestimonialController::class, 'destroy'])
        ->name('videotestimonials.destroy');

    Route::get('settings/company', 'SiteSettingController@site')->name('admin.settings.company');
    Route::post('setting/company/update', 'SiteSettingController@company_setting_update')->name('admin.settings.company.update');

    Route::resource('testimonial', TestimonialController::class)->names('admin.testimonial');

    Route::get('/service-enquiries', [ServiceEnquiryController::class, 'index'])
        ->name('admin.service-enquiries.all');

    Route::delete('/service-enquiries/{id}', [ServiceEnquiryController::class, 'destroy'])
        ->name('admin.service-enquiries.destroy');

    Route::get('/serviceareas', [ServiceAreaController::class, 'index'])
        ->name('admin.serviceareas.all');

    Route::post('/serviceareas', [ServiceAreaController::class, 'store'])
        ->name('admin.serviceareas.store');

    Route::put('/serviceareas/{id}', [ServiceAreaController::class, 'update'])
        ->name('admin.serviceareas.update');

    Route::delete('/serviceareas/{id}', [ServiceAreaController::class, 'destroy'])
        ->name('admin.serviceareas.destroy');

    Route::get('/banners', [BannerController::class, 'index'])
        ->name('admin.banners.all');

    Route::post('/banners', [BannerController::class, 'store'])
        ->name('admin.banners.store');
    Route::put('/banners/{id}', [BannerController::class, 'update'])
        ->name('admin.banners.update');

    Route::delete('/banners/{id}', [BannerController::class, 'destroy'])
        ->name('admin.banners.destroy');


    Route::get('/testimonials', [TestimonialController::class, 'index'])
        ->name('testimonials.all');

    Route::get('/testimonials/create', [TestimonialController::class, 'create'])
        ->name('testimonials.create');

    Route::post('/testimonials', [TestimonialController::class, 'store'])
        ->name('testimonials.store');

    Route::get('/testimonials/{id}/edit', [TestimonialController::class, 'edit'])
        ->name('testimonials.edit');

    Route::put('/testimonials/{id}', [TestimonialController::class, 'update'])
        ->name('testimonials.update');

    Route::delete('/testimonials/{id}', [TestimonialController::class, 'destroy'])
        ->name('testimonials.destroy');

    Route::get('/testimonial/approve/{id}', [TestimonialController::class, 'approve'])
        ->name('admin.testimonial.approve');

    Route::get('/testimonial/reject/{id}', [TestimonialController::class, 'reject'])
        ->name('admin.testimonial.reject');

    Route::delete('/admin/testimonial/{id}', [TestimonialController::class, 'destroy'])
        ->name('admin.services.reviews.destroy');


    Route::get('/contacts', [ContactController::class, 'index'])
        ->name('admin.contacts.all');

    Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])
        ->name('contacts.destroy');

    Route::resource('faqs', FaqController::class)->names('admin.faqs');

    Route::get('/contacts', [ContactController::class, 'index'])
        ->name('admin.contacts.all');

    Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])
        ->name('admin.contacts.destroy');

    Route::get('donations', [DonationEnquiryController::class, 'index'])
        ->name('donations.all');

    Route::delete('donations/{id}', [DonationEnquiryController::class, 'destroy'])
        ->name('donations.delete');





});

Route::get('forgot-password', [AuthController::class, 'showForgotForm'])
    ->name('admin.password.request');

Route::post('send-otp', [AuthController::class, 'sendOtp'])
    ->name('admin.password.sendOtp');

Route::get('verify-otp', [AuthController::class, 'showVerifyForm'])
    ->name('admin.password.verifyForm');

Route::post('verify-otp', [AuthController::class, 'verifyOtp'])
    ->name('admin.password.verifyOtp');

Route::post('reset-password-otp', [AuthController::class, 'resetPassword'])
    ->name('admin.password.resetOtp');




// Route::get('/services', [ServiceController::class, 'index'])->name('services.all');

// Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');

// Route::post('/services', [ServiceController::class, 'store'])->name('services.store');

// Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

// Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');

// Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');

// Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

Route::group(['middleware' => 'admin'], function () {

    Route::prefix('servicesingle')->name('admin.servicesingle.')->group(function () {

        Route::get('/', [ServicesingleController::class, 'index'])->name('all');

        Route::post('/store', [ServicesingleController::class, 'store'])->name('store');

        // Route::get('/{id}', [ServicesingleController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [ServicesingleController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ServicesingleController::class, 'update'])->name('update');

        Route::delete('/{id}', [ServicesingleController::class, 'destroy'])->name('destroy');

    });

});


