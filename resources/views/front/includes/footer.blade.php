

<footer class="edu-footer footer-lighten bg-image footer-style-1">
    <div class="footer-top">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="edu-footer-widget">
                        <div class="logo">
                            <a href="index-4.html">
                                <img class="logo-light" src="{{ asset('front-assets/assets/logopng.png')}}" alt="Corporate Logo">
                                <img class="logo-dark" src="{{ asset('front-assets/assets/logopng.png')}}" alt="Corporate Logo">
                            </a>
                        </div>
                        <p class="description text-dark"><b> Corporate Headquarter :</b></p>
                        <p>{{ $footer->address ?? 'Default Address' }}</p>
                        <span> <b>GST : </b>09ABFCS8876D1ZT</span>
                        <br>
                        <span> <b>CIN :</b> U72900UP2021PTC144946</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="edu-footer-widget explore-widget">
                        <h4 class="widget-title">COMPANY</h4>
                        <div class="inner">
                            <ul class="footer-link link-hover">
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="term-cond.html">Terms & Conditions</a></li>
                                <li><a href="refund.html">Refund & Cancellation </a></li>
                                <li><a href="Admission-pr.html">Admission</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="edu-footer-widget quick-link-widget">
                        <h4 class="widget-title">USEFUL LINKS</h4>
                        <div class="inner">
                            <ul class="footer-link link-hover">
                                <li><a href="{{ url('about')}}">About Us</a></li>
                                <li><a href="{{ url('team')}}">Our Experts</a></li>
                                <li><a href="{{ url('courses')}}">Courses</a></li>
                                <li><a href="{{ url('gallery')}}">Our Gallery</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="edu-footer-widget">
                        <h4 class="widget-title">Contacts</h4>
                        <div class="inner">
                            <div class="input-group footer-subscription-form">
                                <div class="widget-information">
                                    <ul class="information-list">
                                        <li><span>Call:</span><a href="tel:{{ $footer->phone ?? 'Default Phone' }}">{{ $footer->phone ?? 'Default Phone' }}</a></li>
                                        <li><span>Email:</span><a href="mailto:{{ $footer->email ?? 'default@example.com' }}" target="_blank">{{ $footer->email ?? 'default@example.com' }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="social-share icon-transparent">
            @foreach ($socialMediaLinks as $link)
                @php
                    $classMapping = [
                        'facebook' => 'color-fb',
                        'linkedin' => 'color-linkd',
                        'instagram' => 'color-ig',
                        'twitter' => 'color-twitter',
                        // Add more mappings as needed
                    ];

                    $class = $classMapping[strtolower($link->name)] ?? '';
                @endphp
                <li>
                    <a href="{{ $link->url }}" target="_blank" class="{{ $class }}">
                        <img src="{{ asset('images/social-media/' . $link->logo) }}" alt="{{ $link->name }}" class="bg-primary text-white" width="40">
                    </a>
                </li>
            @endforeach
        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <p>Copyright 2024 All Right Reserved By <a href="#" target="_blank">Softintra Academy</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area  -->