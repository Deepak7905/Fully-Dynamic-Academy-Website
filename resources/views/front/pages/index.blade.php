@extends('front.main')


@section('content')

<style>
    .testimonial-slide .content p {
    overflow-wrap: break-word; /* Breaks long words to prevent overflow */
}
</style>

<div id="main-wrapper" class="main-wrapper">

    <div class="hero-banner hero-style-1">
        <div class="container">
            <div class="row align-items-center">
                @if($banners->isNotEmpty())
                    @foreach($banners as $banner)
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <h1 class="title" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">
                                    {{ $banner->title }}
                                </h1>
                                <p data-sal-delay="200" data-sal="slide-up" data-sal-duration="1000">
                                    {{ $banner->description }}
                                </p>
                                <div class="banner-btn" data-sal-delay="400" data-sal="slide-up" data-sal-duration="1000">
                                    <a href="{{ $banner->button_url }}" class="edu-btn">
                                        {{ $banner->button_text }}Find Courses <i class="icon-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-thumbnail">
                                <div class="thumbnail" data-sal-delay="500" data-sal="slide-left" data-sal-duration="1000">
                                    <img src="{{ asset('images/banner-images/' . $banner->image) }}" alt="{{ $banner->title }}">
                                </div>
                                <div class="instructor-info" data-sal-delay="600" data-sal="slide-up" data-sal-duration="1000">
                                    <div class="inner">
                                        <h5 class="title">Instructor</h5>
                                        <div class="media">
                                            <div class="thumb">
                                                <img src="{{ asset('front-assets/assets/images/banner/author-1.png') }}"
                                                    alt="Images">
                                            </div>
                                            <div class="content">
                                                <span>200+</span> Instructors
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No banners available.</p>
                @endif
            </div>
        </div>
    </div>
    <div class="features-area-2">
        <div class="container">
            <div class="features-grid-wrap">
                <div class="features-box features-style-2 edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject"
                            src="{{ asset('front-assets/assets/images/animated-svg-icons/online-class.svg')}}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title"><span>10</span>Courses</h5>
                    </div>
                </div>
                <div class="features-box features-style-2 edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject"
                            src="{{ asset('front-assets/assets/images/animated-svg-icons/instructor.svg')}}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title"><span>Top</span>Team</h5>
                    </div>
                </div>
                <div class="features-box features-style-2 edublink-svg-animate">
                    <div class="icon certificate">
                        <img class="svgInject"
                            src="{{ asset('front-assets/assets/images/animated-svg-icons/certificate.svg')}}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title"><span></span>Certificate</h5>
                    </div>
                </div>
                <div class="features-box features-style-2 edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject"
                            src="{{ asset('front-assets/assets/images/animated-svg-icons/user.svg')}}"
                            alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title"><span>50+</span>Members</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="edu-section-gap edu-about-area about-style-4 programming-about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="about-image-gallery">
                        @if($about && $about->image)
                            <div class="main-img-1" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                                <img src="{{ asset('images/about-images/' . $about->image) }}" alt="About Image">
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="about-content p-5 p-md-3 p-lg-0" data-sal-delay="50" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="section-title section-left">
                            <span class="pre-title">{{ $about ? 'About Our Academy' : 'About Us' }}</span>
                            <h4 class="title">{{ $about->heading ?? 'Welcome to Our Academy!' }}</h4>
                            <p>{{ $about->content ?? 'Welcome to our academy! We offer various courses to enhance your skills and knowledge. Our aim is to provide top-notch education and practical experience.' }}
                            </p>
                        </div>
                        <ul class="features-list">
                            <li>ISO Certified and Government Registered</li>
                            <li>Expert Instructors</li>
                            <li>Practical Training with live project experience</li>
                        </ul>
                        <a href="#" class="edu-btn">Know More <i class="icon-4"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="edu-categorie-area categorie-area-6 " style="padding-bottom: 60px; ">
        <div class="container">

            <div class="row g-5">
                <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-6 color-primary edublink-svg-animate">
                        <div class="icon">
                            <i class="icon-9"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Learning Courses</h5>
                            <p>Simple, engaging courses designed for easy and effective learning.</p>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-6 color-extra06">
                        <div class="icon">
                            <img src="{{ asset('front-assets/assets/images/svg-icons/instructor.svg')}}"
                                alt="Image Svg">
                        </div>
                        <div class="content">
                            <h5 class="title">Certification </h5>
                            <p>Specialized certification courses for career skill enhancement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-6 color-extra07">
                        <div class="icon physical-activity">
                            <i class="icon-15"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Expert Instructors</h5>
                            <p>Learn from industry experts dedicated to your educational success.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="edu-categorie-area categorie-area-3 edu-section-gap bg-image home-programming-course" id="categories"
        style="padding-bottom: 70px;">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Courses <span class="color-primary">We Cover</span> At Softintra Academy.</h2>
                <span class="shape-line"><i class="icon-19"></i></span>

            </div>
            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-4">


                <div class="col-4" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra04-style">
                        <div class="icon">
                            <i class="icon-11"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Web Development</h5>
                            </a>
                            <p class="text-dark">Web development includes designing, coding, and maintaining websites,
                                covering front-end development, back-end, databases, user interfaces, and web security.
                            </p>

                        </div>
                    </div>
                </div>



                <div class="col-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra06-style">
                        <div class="icon">
                            <i class="icon-14"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">Digital Marketing</h5>
                            </a>
                            <p class="text-dark">Digital marketing training covers SEO, social media, email marketing,
                                content creation, PPC, analytics, influencer marketing, mobile marketing, and conversion
                                optimization.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="categorie-grid categorie-style-3 color-extra03-style">
                        <div class="icon laptop-icon">
                            <i class="icon-16"></i>
                        </div>
                        <div class="content">
                            <a href="#">
                                <h5 class="title">App Development</h5>
                            </a>
                            <p class="text-dark">App development involves planning, designing, coding, testing, and
                                deploying applications for mobile devices, ensuring functionality, user experience, and
                                security.</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="home-programming-course edu-course-area section-gap-equal bg-white pb-5 mt-5">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center sal-animate" data-sal-delay="100" data-sal="slide-up"
                data-sal-duration="800">
                <h2 class="title">Certification courses
                    on Softintra Academy
                </h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
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
                <!-- 
            <div class="col-xl-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-course course-style-5 course-style-17">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{ asset('front-assets/assets/images/lang/digi.jpg')}}" alt="Course Meta">
                            </a>
                        </div>
                        <div class="content">
                            <span class="pre-title">Basic Course</span>
                            <h6 class="title">
                                <a href="#">Digital marketting</a>
                            </h6>
                            <ul class="course-meta">
                                <li><i class="icon-24 icon-course"></i>4 Weeks</li>
                                <li><i class="icon-25 icon-course"></i>Paid Internship </li>
                            </ul>
                             <div class="read-more-btn">
                                <a class="edu-btn btn-small btn-secondary" href="#">View Course <i class="icon-4"></i></a>
                                  <a class="edu-btn btn-small btn-secondary" href="#">Apply now <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->



                <!-- <div class="col-xl-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-course course-style-5 course-style-17">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{ asset('front-assets/assets/images/lang/lara.jpg')}}" alt="Course Meta">
                            </a>
                        </div>
                        <div class="content">
                            <span class="pre-title">Intermediate Course</span>
                            <h6 class="title">
                                <a href="#">Backend Development</a>
                            </h6>
                            <ul class="course-meta">
                                <li><i class="icon-24 icon-course"></i>8 Weeks</li>
                                <li><i class="icon-25 icon-course"></i>Paid Internship </li>
                            </ul>
                            <div class="read-more-btn">
                                <a class="edu-btn btn-small btn-secondary" href="#">View Course <i class="icon-4"></i></a>
                                  <a class="edu-btn btn-small btn-secondary" href="#">Apply now <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            </div>
            <div class="course-view-all sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
                <a href="#" class="edu-btn">Browse more courses <i class="icon-4"></i></a>
            </div>
        </div>
    </div>

    <div class="edu-team-area team-area-2 edu-section-gap home-programming-course" style="padding-bottom: 60px;">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h3 class="title">Meet Our Experts At Softintra Academy </h3>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <!-- Start Instructor Grid  -->
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
                <!-- End Instructor Grid  -->
                <!-- Start Instructor Grid  -->

                <!-- End Instructor Grid  -->
                <!-- Start Instructor Grid  -->
                <!-- <div class="col-lg-4 col-md-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-team-grid team-style-2">
                    <div class="inner">
                        <div class="thumbnail-wrap">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{ asset('front-assets/assets/images/team/team-07.webp')}}" alt="team images">
                                </a>
                            </div>
                            <ul class="team-share-info">
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Penelope Cruz</a></h5>

                        </div>
                    </div>
                </div>
            </div> -->

            </div>
        </div>
    </div>

    <div class="features-area-1 gap-top-equal" style="padding-bottom: 90px;">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <h3 class="title">Why Choose Softintra Academy </h3>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <div class="col-lg-4" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="features-box color-primary-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front-assets/assets/images/animated-svg-icons/skilled-lecturers-2.svg')}}"
                                alt="animated icon">
                            <!-- <img class="svgInject" src="assets/images/animated-svg-icons/off-campus-programs-2.svg" alt="animated icon"> -->
                        </div>
                        <div class="content">
                            <h5 class="title">Expert Instructors</h5>
                            <p>Learn from seasoned professionals with extensive industry experience, committed to
                                delivering high-quality education and practical insights.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="features-box color-secondary-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front-assets/assets/images/animated-svg-icons/hybrid-distance-programs-2.svg')}}"
                                alt="animated icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Comprehensive Curriculum</h5>
                            <p>Courses in web development, app development, SEO, digital marketing, and more, updated to
                                reflect the latest industry trends.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="features-box color-extra08-style edublink-svg-animate">
                        <div class="icon">
                            <img class="svgInject"
                                src="{{ asset('front-assets/assets/images/animated-svg-icons/certificate-2.svg')}}"
                                alt="animated icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><span>Online</span>Certifications</h5>
                            <p> Engage in real-world projects and practical assignments to apply knowledge and build a
                                strong portfolio</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="testimonial-area-13 section-gap-equal home-programming-course">
        <div class="container edublink-animated-shape">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <h2 class="title">What Our Students Have To Say</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                </div>
            </div>

            <div class="programming-testimonial-activation swiper">
                <div class="swiper-wrapper">
                    @foreach($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="testimonial-slide testimonial-style-2">
                                <div class="content">
                                    <div class="rating-icon">
                                        @for ($i = 0; $i < 5; $i++)
                                            <i class="icon-23"></i>
                                        @endfor
                                    </div>
                                   
                                    <p>{{ $testimonial->description}}</p>
                                    <div class="author-info">
                                        <div class="thumb">
                                            <img src="{{ asset('images/testimonial-images/' . $testimonial->image) }}"
                                                alt="{{ $testimonial->title }}" width="50px">
                                        </div>
                                        <div class="info">
                                            <h5 class="title">{{ $testimonial->title }}</h5>
                                            <span class="subtitle">{{ $testimonial->subtitle }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="swiper-navigation">
                <div class="swiper-btn-prv">
                    <img src="{{ asset('front-assets/assets/images/svg-icons/icon-left.svg')}}" alt="images left">
                </div>
                <div class="swiper-btn-nxt">
                    <img src="{{ asset('front-assets/assets/images/svg-icons/icon-right.svg')}}" alt="images right">
                </div>
            </div>
        </div>
    </div>

    <div class="edu-blog-area blog-area-1 edu-section-gap mb-5" style="padding-bottom:60px">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <h2 class="title">Our Gallery</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <!-- Start Blog Grid  -->
                @foreach($galleries as $gallery)

                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-blog blog-style-1">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="{{ asset('images/gallery/' . $gallery->image) }}"
                                            alt="{{ $gallery->heading }}" style="height: 260px;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- End Blog Grid  -->
                <!-- Start Blog Grid  -->
                <!-- <div class="col-lg-4 col-md-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-blog blog-style-1">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{ asset('front-assets/assets/images/gallery/img-2.jpg')}}" alt="Blog Images">
                            </a>
                        </div>

                    </div>
                </div>
            </div> -->
                <!-- End Blog Grid  -->
                <!-- Start Blog Grid  -->
                <!-- <div class="col-lg-4 col-md-6 col-12" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-blog blog-style-1">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{ asset('front-assets/assets/images/gallery/img-3.jpg')}}" alt="Blog Images">
                            </a>
                        </div>

                    </div>
                </div>
            </div> -->
                <!-- End Blog Grid  -->
            </div>
        </div>

    </div>
    <div class="features-area-9">
        <div class="features-wrapper">
            <div class="feature-wrap">
                <div class="features-track">
                    <img class="features-icon" src="{{ asset('front-assets/assets/images/others/shape-62.png')}}"
                        alt="">
                    <div class="feature-text">Digital Marketing</div>
                    <img class="features-icon" src="{{ asset('front-assets/assets/images/others/shape-62.png')}}"
                        alt="">
                    <div class="feature-text">SEO Services</div>
                    <img class="features-icon" src="{{ asset('front-assets/assets/images/others/shape-62.png')}}"
                        alt="">
                    <div class="feature-text">Frontend Development</div>
                    <img class="features-icon" src="{{ asset('front-assets/assets/images/others/shape-62.png')}}"
                        alt="">
                    <div class="feature-text">Backend Development</div>
                    <img class="features-icon" src="{{ asset('front-assets/assets/images/others/shape-62.png')}}"
                        alt="">
                    <div class="feature-text">App Designing</div>
                    <img class="features-icon" src="{{ asset('front-assets/assets/images/others/shape-62.png')}}"
                        alt="">
                    <div class="feature-text">Digital Marketing</div>
                    <img class="features-icon" src="{{ asset('front-assets/assets/images/others/shape-62.png')}}"
                        alt="">
                    <div class="feature-text">Social Media</div>
                    <img class="features-icon" src="{{ asset('front-assets/assets/images/others/shape-62.png')}}"
                        alt="">
                    <div class="feature-text">Graphic Designing</div>
                    <img class="features-icon" src="{{ asset('front-assets/assets/images/others/shape-62.png')}}"
                        alt="">
                    <div class="feature-text">Frontend Development</div>
                    <img class="features-icon" src="{{ asset('front-assets/assets/images/others/shape-62.png')}}"
                        alt="">
                    <div class="feature-text">Backend Development</div>
                    <img class="features-icon" src="{{ asset('front-assets/assets/images/others/shape-62.png')}}"
                        alt="">
                    <div class="feature-text">App Designing</div>
                    <img class="features-icon" src="{{ asset('front-assets/assets/images/others/shape-62.png')}}"
                        alt="">
                    <div class="feature-text">Digital Marketing</div>
                    <img class="features-icon" src="{{ asset('front-assets/assets/images/others/shape-62.png')}}"
                        alt="">
                    <div class="feature-text">Social Media</div>
                    <img class="features-icon" src="{{ asset('front-assets/assets/images/others/shape-62.png')}}"
                        alt="">
                    <div class="feature-text">Graphic Designing</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection