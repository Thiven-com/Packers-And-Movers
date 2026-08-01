<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\ServiceArea;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use App\Models\VideoTestimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::where('status', 'show')
            ->latest()
            ->take(8)
            ->get();
        $videos = VideoTestimonial::where('status', 1)
            ->orderBy('sort_order')
            ->latest()
            ->take(6)
            ->get();
        $banners = Banner::where('status', 1)
            ->latest()
            ->get();
        $serviceTypes = Service::where('status', 'show')
            ->select('type')
            ->distinct()
            ->orderBy('type')
            ->get();
        $site = SiteSetting::first();
        $faqs = Faq::latest()->take(4)->get();
        $serviceAreas = ServiceArea::latest()->get();
        $galleries = Gallery::latest()->take(8)->get();
        $services = Service::where('status', 'show')->latest()->get();
        return view('website.home', compact('services', 'services', 'serviceAreas', 'galleries', 'videos', 'faqs', 'site', 'banners', 'serviceTypes'));
    }

    public function about()
    {
        $serviceAreas = ServiceArea::latest()->get();
        return view('website.about', compact('serviceAreas'));
    }

    public function services()
    {
        $services = Service::where('status', 'show')->latest()->get();
        return view('website.services', compact('services'));
    }

    public function locations()
    {
        $serviceAreas = ServiceArea::latest()->get();
        return view('website.locations', compact('serviceAreas'));
    }

    public function gallery()
    {
        $galleries = Gallery::latest()->get();
        return view('website.gallery', compact('galleries'));
    }

    public function videos()
    {
        $videos = VideoTestimonial::where('status', 1)
            ->orderBy('sort_order')
            ->latest()
            ->get();
        return view('website.videos', compact('videos'));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::where('status', 'approved')
            ->latest()
            ->get();
        return view('website.testimonials', compact('testimonials'));
    }

    public function blog()
    {
        $blogs = Blog::where('status', 'show')->latest()->paginate(9);
        return view('website.blog', compact('blogs'));
    }

    public function faq()
    {
        $faqs = Faq::latest()->get();

        return view('website.faq', compact('faqs'));
    }

    public function contact()
    {
        return view('website.contact');
    }


    // public function blog_details()
    // {
    //     return view('website.blog-details');
    // }
    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 'show')
            ->firstOrFail();

        $relatedBlogs = Blog::where('status', 'show')
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(6)
            ->get();

        return view('website.blog-details', compact('blog', 'relatedBlogs'));
    }


    // public function service_details()
    // {
    //     return view('website.service-details');
    // }

    public function serviceDetails($slug)
    {
        $service = Service::where('slug', request()->slug)->first();

        return view('website.service-details', compact('service'));
    }


}
