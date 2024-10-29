<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\About;
use App\Models\CertificationCourse;
use App\Models\Teacher;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Footer;
use App\Models\SocialMedia;
use App\Models\Visitor;









class FrontController extends Controller
{


    
    // public function __construct()
    // {
    //     $this->middleware(\App\Http\Middleware\CleanUpVisitors::class);
    // }

   // Show banners on the front page
  
     public function index()
     {

          // Track visitor activity
          $ip = request()->ip();
          $visitor = Visitor::where('ip_address', $ip)
                            ->where('visited_at', '>=', now()->subMinutes(5))
                            ->first();
  
          if ($visitor) {
              $visitor->visited_at = now();
              $visitor->save();
          } else {
              Visitor::create(['ip_address' => $ip, 'visited_at' => now()]);
          }
 
         // Fetch data for the front page
         $banners = Banner::where('active', true)->take(1)->get();
         $about = About::first();
         $courses = CertificationCourse::take(6)->get(); // Fetch only 6 courses
         $teachers = Teacher::take(3)->get(); // Fetch only 3 teachers
         $galleries = Gallery::all(); // Fetch all gallery items
         $testimonials = Testimonial::all();
         $footer = Footer::first(); // Fetch the footer data
         $socialMediaLinks = SocialMedia::all();
 
         return view('front.pages.index', compact(
             'banners',
             'about',
             'courses', 
             'teachers',
             'galleries',
             'testimonials',
             'footer',
             'socialMediaLinks'
         ));
     }
 
     // This method is now redundant, you can remove it
     public function showBanner()
     {
         $banners = Banner::where('active', true)->take(1)->get();
         return view('front.pages.index', compact('banners'));
     }
 
     // Show about page
     public function about()
     {
         $about = About::first();
         return view('front.pages.about', compact('about'));
     }
 
     // Show courses
     public function courses()
     {
         $courses = CertificationCourse::take(9)->get();
         return view('front.pages.course', compact('courses'));
     }
 
     // Show teachers
     public function teachers()
     {
         $teachers = Teacher::take(9)->get();
         return view('front.pages.teachers', compact('teachers'));
     }
 
     // Show gallery
     public function gallery()
     {
         $galleries = Gallery::all();
         return view('front.pages.gallery', compact('galleries'));
     }


 
}
