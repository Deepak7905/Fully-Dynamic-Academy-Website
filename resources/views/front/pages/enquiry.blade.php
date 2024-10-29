@extends('front.main')

@section('content')

<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Enquiry Now</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Enquiry Now</li>
            </ul>
        </div>
    </div>
</div>

<section class="contact-us-area">
    <div class="container">
        <div class="edu-categorie-area categorie-area-6 " style="padding-bottom: 60px; ">
            <div class="container">

                <div class="row g-5">
                    <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="categorie-grid categorie-style-6 color-primary edublink-svg-animate">
                            <div class="icon">
                                <i class="icon-9"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">Phone </h5>
                                <p><a href="tel:+91 93 3638 3030" class="text-muted">+91 93 3638 3030</a></p>
                                <p><a href="tel:+91 73 111 444 23" class="text-muted">+91 73 111 444 23</a></p>

                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="categorie-grid categorie-style-6 color-primary edublink-svg-animate">
                            <div class="icon">
                                <i class="icon-9"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">Email Address </h5>
                                <p><a href="mailto:" class="text-muted">
                                        info@softintra.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="categorie-grid categorie-style-6 color-primary edublink-svg-animate">
                            <div class="icon">
                                <i class="icon-9"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">Address </h5>
                                <p><a href="tel:+91 93 3638 3030" class="text-muted">2nd Floor, KD Tower, Padri Road,
                                        Shahpur, Gorakhpur </a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="offset-xl-2 col-lg-9">
            <div class="contact-form form-style-2">
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="section-title">
                    <h4 class="title">Get In Touch</h4>
                    <p>Fill out this form for booking a consultant advising session.</p>
                </div>
                <form method="POST"
                    action="{{ route('enquiry.store') }}">
                    @csrf
                    <div class="row row--10">
                        <div class="form-group col-12">
                            <input type="text" name="contact-name" id="contact-name" placeholder="Your name"
                                value="{{ old('contact-name') }}">
                            @error('contact-name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <input type="email" name="contact-email" id="contact-email" placeholder="Enter your email"
                                value="{{ old('contact-email') }}">
                            @error('contact-email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <input type="tel" name="contact-phone" id="contact-phone" placeholder="Phone number"
                                value="{{ old('contact-phone') }}">
                            @error('contact-phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <input type="text" name="contact-qualification" id="contact-qualification"
                                placeholder="Qualification" value="{{ old('contact-qualification') }}">
                            @error('contact-qualification')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <input type="text" name="contact-location" id="contact-location" placeholder="Your Location"
                                value="{{ old('contact-location') }}">
                            @error('contact-location')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <textarea name="contact-message" id="contact-message" cols="30" rows="4"
                                placeholder="Your message">{{ old('contact-message') }}</textarea>
                            @error('contact-message')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                        <button class="btn rn-btn edu-btn btn-medium submit-btn" name="submit" type="submit">Submit Message <i class="icon-4"></i></button>
                    </div>
                    </div>

    
                </form>

            </div>
        </div>
    </div>
</section>



<!--=====================================-->
<!--=      Google Map Area Start        =-->
<!--=====================================-->
<div class="google-map-area">
    <div class="mapouter">
        <div class="gmap_canvas">
            @php
                // Retrieve the map URL from the database
                $map = \App\Models\Map::first(); // Retrieve the first map record
                $mapUrl = $map ? $map->map_url : '';
            @endphp
            @if($mapUrl)
                <iframe
                    src="{{ $mapUrl }}"
                    width="100%" height="500" style="border:70;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            @else
                <p>Map URL not set.</p>
            @endif
        </div>
    </div>
</div>




@endsection