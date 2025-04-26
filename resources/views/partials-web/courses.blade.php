<div class="course-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Our Courses</span>
                    <h2 class="site-title">Let's Check Our <span>Courses</span></h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of
                        a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($courses as $course)
                <div class="col-md-6 col-lg-4">
                    <div class="course-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="course-img">
                            <span class="course-tag"><i class="far fa-bookmark"></i> {{ $course->category }}</span>
                            {{-- <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" /> --}}
                            <img src="{{ asset($course->image) }}" alt="{{ $course->title }}" />
                            {{-- <img src="{{ asset('assets/img/course/01.jpg') }}" alt="{{ $course->title }}"> --}}
                            <a href="{{ route('courses.index', $course->id) }}" class="btn"><i class="far fa-link"></i></a>
                        </div>
                        <div class="course-content">
                            <div class="course-meta">
                                <span class="course-meta-left"><i class="far fa-book"></i> {{ $course->lessons_count }} Lessons</span>
                                <div class="course-rating">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="{{ $i <= $course->rating ? 'fas' : 'far' }} fa-star"></i>
                                    @endfor
                                    <span>({{ number_format($course->rating, 1) }})</span>
                                </div>
                            </div>
                            <h4 class="course-title">
                                <a href="{{ route('courses.index', $course->id) }}">{{ $course->title }}</a>
                            </h4>
                            <p class="course-text">
                                {{ Str::limit($course->description, 100) }}
                            </p>
                            <div class="course-bottom">
                                <div class="course-bottom-left">
                                    <span><i class="far fa-users"></i>{{ $course->seats }} Seats</span>
                                    <span><i class="far fa-clock"></i>{{ $course->duration }}</span>
                                </div>
                                <span class="course-price">${{ number_format($course->price, 2) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>