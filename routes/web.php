<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('services', [PageController::class, 'services'])->name('services');
Route::get('locations', [PageController::class, 'locations'])->name('locations');
Route::get('gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('videos', [PageController::class, 'videos'])->name('videos');
Route::get('testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('blog', [PageController::class, 'blog'])->name('blog');
Route::get('faq', [PageController::class, 'faq'])->name('faq');
Route::get('contact', [PageController::class, 'contact'])->name('contact');

Route::get('blog-details', [PageController::class, 'blog_details'])->name('blog-details');
Route::get('service-details', [PageController::class, 'service_details'])->name('service-details');

