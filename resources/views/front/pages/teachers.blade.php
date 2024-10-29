@extends('front.main')

@section('content')

<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Our Expert</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Our Expert</li>
            </ul>
        </div>
    </div>
</div>

<div class="edu-team-area team-area-2 edu-section-gap home-programming-course bg-white" style="padding-bottom: 60px;">
    <div class="container">
        <div class="row g-5">
            @foreach($teachers as $teacher)
                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-2">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('images/teacher-images/' . $teacher->image) }}"
                                            alt="{{ $teacher->name }}" style="height: 265px;">
                                    </a>
                                </div>
                                <ul class="team-share-info">
                                    <!-- Add social media links if needed -->
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">{{ $teacher->name }}</a></h5>
                                <p>{{ $teacher->post }}</p>
                                <p>Experience: {{ $teacher->experience }} years</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
