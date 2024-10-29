

@extends('front.main')

@section('content')

<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">About Us</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ul>
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
                    @else
                        <!-- Optional: Display a default image or a placeholder -->
                        <div class="main-img-1" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
                            <img src="{{ asset('images/about-images/default.jpg') }}" alt="Default About Image">
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="about-content p-5 p-md-3 p-lg-0" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                    <div class="section-title section-left">
                        <span class="pre-title">{{ $about ? 'About Our Academy' : 'About Us' }}</span>
                        <h4 class="title">{{ $about->heading ?? 'Welcome to Our Academy!' }}</h4>
                        <p>{{ $about->content ?? 'Welcome to our academy! We offer various courses to enhance your skills and knowledge. Our aim is to provide top-notch education and practical experience.' }}</p>
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

<div class="edu-categorie-area categorie-area-6 " style="padding-bottom: 40px; ">
    <div class="container">

        <div class="row g-5">
            <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                <div class="categorie-grid categorie-style-6 color-primary edublink-svg-animate">
                    <div class="icon">
                        <i class="icon-9"></i>
                    </div>
                    <div class="content">
                        <h5 class="title"> Learning Courses</h5>
                        <p>Simple, engaging courses designed for easy and effective learning.</p>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <div class="categorie-grid categorie-style-6 color-extra06">
                    <div class="icon">
                        <img src="{{ asset('front-assets/assets/images/svg-icons/instructor.svg')}}" alt="Image Svg">
                    </div>
                    <div class="content">
                        <h5 class="title">Certification Courses</h5>
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


<div class="features-area-1 gap-top-equal" style="padding-bottom: 60px;">
    <div class="container">
        <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <h3 class="title">Why Choose Softintra Academy </h3>
            <span class="shape-line"><i class="icon-19"></i></span>
        </div>
        <div class="row g-5">
            <div class="col-lg-4" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                <div class="features-box color-primary-style edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="{{ asset('front-assets/assets/images/animated-svg-icons/skilled-lecturers-2.svg')}}" alt="animated icon">
                        <!-- <img class="svgInject" src="assets/images/animated-svg-icons/off-campus-programs-2.svg" alt="animated icon"> -->
                    </div>
                    <div class="content">
                        <h5 class="title">Expert Instructors</h5>
                        <p>Learn from seasoned professionals with extensive industry experience, committed to delivering high-quality education and practical insights.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                <div class="features-box color-secondary-style edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="{{ asset('front-assets/assets/images/animated-svg-icons/hybrid-distance-programs-2.svg')}}" alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Comprehensive Curriculum</h5>
                        <p>Courses in web development, app development, SEO, digital marketing, and more, updated to reflect the latest industry trends.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="features-box color-extra08-style edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="{{ asset('front-assets/assets/images/animated-svg-icons/certificate-2.svg')}}" alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title"><span>Online</span>Certifications</h5>
                        <p> Engage in real-world projects and practical assignments to apply knowledge and build a strong portfolio</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="features-box color-extra05-style edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="{{ asset('front-assets/assets/images/animated-svg-icons/user-2.svg')}}" alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">ISO Certified </h5>
                        <p>Modern campus with the latest technology and resources, fostering a creative and  learning environment.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="features-box color-extra05-style edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="{{ asset('front-assets/assets/images/animated-svg-icons/user-2.svg')}}" alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Flexible Learning Options</h5>
                        <p>Choose from in-person classes, online learning, or a hybrid approach to fit your schedule and learning style.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="features-box color-extra05-style edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="{{ asset('front-assets/assets/images/animated-svg-icons/user-2.svg')}}" alt="animated icon">
                    </div>
                    <div class="content">
                        <h5 class="title">Industry Partnerships </h5>
                        <p>Strong partnerships with leading tech companies, offering internships and exposure to real-world projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection