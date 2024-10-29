

@extends('front.main')

@section('content')

<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Courses</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Courses</li>
            </ul>
        </div>
    </div>
</div>


<div class="home-programming-course edu-course-area section-gap-equal bg-white  mt-0" style="padding-bottom:70px">
    <div class="container edublink-animated-shape">
        
       <div class="row g-5">
            <!-- Start Single Course  -->
          


            @foreach($courses as $course)
                    <div class="col-xl-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-course course-style-5 course-style-17">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('images/certification-courses/' . $course->image) }}"
                                            alt="Course Meta" class="img-fluid" style="height: 220px;">
                                    </a>
                                </div>
                                <div class="content">
                                    <span
                                        class="pre-title">{{ $course->status == 'paid' ? 'Paid Internship' : 'Unpaid Internship' }}</span>
                                    <h6 class="title">
                                        <a href="#">{{ $course->heading }}</a>
                                    </h6>
                                    <ul class="course-meta">
                                        <li><i class="icon-24 icon-course"></i>{{ $course->time }} Weeks</li>
                                        <li><i class="icon-25 icon-course"></i>{{ ucfirst($course->status) }}</li>
                                    </ul>
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-small btn-secondary" href="#">View Course <i
                                                class="icon-4"></i></a>
                                        <a class="edu-btn btn-small btn-secondary" href="{{ $course->apply_url }}"
                                            target="_blank">Apply now <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
       
    </div>
</div>

@endsection