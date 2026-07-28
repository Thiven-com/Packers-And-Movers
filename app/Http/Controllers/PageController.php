<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('website.home');
    }

    public function about()
    {
        return view('website.about');
    }

      public function services()
    {
        return view('website.services');
    }

      public function locations()
    {
        return view('website.locations');
    }

      public function gallery()
    {
        return view('website.gallery');
    }

      public function videos()
    {
        return view('website.videos');
    }

      public function testimonials()
    {
        return view('website.testimonials');
    }

      public function blog()
    {
        return view('website.blog');
    }

      public function faq()
    {
        return view('website.faq');
    }

      public function contact()
    {
        return view('website.contact');
    }

   

    
}
