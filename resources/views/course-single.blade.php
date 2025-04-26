@extends('layouts.website')

@section('title', 'Course Details')

@section('content')
    <div class="py-12">
        <div class="container mx-auto px-4">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset($course->image ?? 'assets/img/default-course.jpg') }}" alt="{{ $course->title }}"
                    class="course-image">
                    <div class="container py-5">

                        <!-- Course Title -->
                        <h1 class="display-5 fw-bold mb-4">{{ $course->title }}</h1>
                    
                        <!-- Course Description -->
                        <p class="lead text-muted mb-5 border-start ps-3">{{ $course->description }}</p>
                    
                        <!-- Course Details Grid -->
                        <div class="row g-4">
                    
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="border rounded p-4 h-100 bg-light">
                                    <small class="text-muted">Category</small>
                                    <h5 class="mt-2">{{ $course->category }}</h5>
                                </div>
                            </div>
                    
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="border rounded p-4 h-100 bg-light">
                                    <small class="text-muted">Lessons</small>
                                    <h5 class="mt-2">{{ $course->lessons_count }}</h5>
                                </div>
                            </div>
                    
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="border rounded p-4 h-100 bg-light">
                                    <small class="text-muted">Seats</small>
                                    <h5 class="mt-2">{{ $course->seats }}</h5>
                                </div>
                            </div>
                    
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="border rounded p-4 h-100 bg-light">
                                    <small class="text-muted">Price</small>
                                    <h5 class="mt-2">${{ number_format($course->price, 2) }}</h5>
                                </div>
                            </div>
                    
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="border rounded p-4 h-100 bg-light">
                                    <small class="text-muted">Start Date</small>
                                    <h5 class="mt-2">{{ \Carbon\Carbon::parse($course->start_date)->format('M d, Y') }}</h5>
                                </div>
                            </div>
                    
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="border rounded p-4 h-100 bg-light">
                                    <small class="text-muted">End Date</small>
                                    <h5 class="mt-2">{{ \Carbon\Carbon::parse($course->end_date)->format('M d, Y') }}</h5>
                                </div>
                            </div>
                    
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="border rounded p-4 h-100 bg-light">
                                    <small class="text-muted">Rating</small>
                                    <h5 class="mt-2">{{ $course->rating }}</h5>
                                </div>
                            </div>
                    
                        </div>
                    
                    </div>
                    

            </div>
        </div>
    </div>
@endsection
