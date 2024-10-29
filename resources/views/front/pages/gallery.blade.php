@extends('front.main')

@section('content')

<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Gallery </h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Our Gallery</li>
            </ul>
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
        </div>
    </div>
</div>

@endsection
