<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $events = Event::all();
        // $testimonials = Testimonial::all();
        // $faqs = Faq::all();

        return view('home', compact('courses'));
    }
}
