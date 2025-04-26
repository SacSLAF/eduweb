<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Event;

class AdminController extends Controller
{
    public function dashboard()
    {
        $coursesCount = Course::count();
        $eventsCount = Event::count();
        return view('admin.dashboard', compact('coursesCount'));
    }

    public function courses()
    {
        return view('admin.courses.index');
    }

    public function events()
    {
        return view('admin.events.index');
    }
}
