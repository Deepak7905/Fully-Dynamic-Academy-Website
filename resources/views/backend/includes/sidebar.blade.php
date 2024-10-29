
<div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('admin-assets/assets/images/logo-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('admin-assets/assets/images/logo-dark.png')}}" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('admin-assets/assets/images/logo-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('admin-assets/assets/images/logo-light.png')}}" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('dashboard')}}">
                                <i class="mdi mdi-speedometer"></i> <span data-key="t-widgets">Dashboard</span>
                            </a>
                        </li>
                            
                        </li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                                <i class="mdi mdi-cube-outline"></i> <span data-key="t-base-ui">Banner</span>
                            </a>
                            <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{{ route('banners.create') }}" class="nav-link" data-key="t-alerts">Create Banner</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('banners.index')}}" class="nav-link" data-key="t-badges">Banner List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('banners.inactive') }}" class="nav-link" data-key="t-badges">Inactive Banner</a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                  
                                </div>
                            </div>
                        </li>

                   

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                                <i class="mdi mdi-android-studio"></i> <span data-key="t-icons">Gallery</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarIcons">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('gallery/create')}}" class="nav-link"><span data-key="t-remix">Create Gallery</span> <span class="badge badge-pill bg-info">v3.5</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('gallery')}}" class="nav-link"><span data-key="t-boxicons">Show</span> <span class="badge badge-pill bg-info">v2.1.4</span></a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                                <i class="mdi mdi-map-marker-outline"></i> <span data-key="t-maps">About</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMaps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('about.create') }}" class="nav-link" data-key="t-google">
                                            Create About
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about.index') }}" class="nav-link" data-key="t-vector">
                                           Show about
                                        </a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                                <i class="mdi mdi-share-variant-outline"></i> <span data-key="t-multi-level">Certificate Courses</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMultilevel">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('certification-courses/index') }}" class="nav-link" data-key="t-level-1.1"> All  Certificate Courses
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('certification-courses/create') }}" class="nav-link" data-key="t-level-1.1"> Create  Certificate Courses
                                        </a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#teacher" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="teacher">
                                <i class="mdi mdi-share-variant-outline"></i> <span data-key="t-multi-level">Teacher</span>
                            </a>
                            <div class="collapse menu-dropdown" id="teacher">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('teacher/create')}}" class="nav-link" data-key="t-level-1.1">Create Teacher
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('teacher')}}" class="nav-link" data-key="t-level-1.1"> Show
                                        </a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </li>

                        <!-- testimonial -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#testimonial" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="testimonial">
                                <i class="mdi mdi-sticker-text-outline"></i> <span data-key="t-multi-level">Testimonial</span>
                            </a>
                            <div class="collapse menu-dropdown" id="testimonial">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('testimonials/create')}}" class="nav-link" data-key="t-level-1.1">Create Testimonial
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link" data-key="t-level-1.1"> Show
                                        </a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#enquries" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="enquries">
                                <i class="mdi mdi-sticker-text-outline"></i> <span data-key="t-multi-level">Enquries</span>
                            </a>
                            <div class="collapse menu-dropdown" id="enquries">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('enquiries/pending')}}" class="nav-link" data-key="t-level-1.1">Pending Enquiries
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('enquiries/history')}}" class="nav-link" data-key="t-level-1.1"> History
                                        </a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#map" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="map">
                                <i class="mdi mdi-sticker-text-outline"></i> <span data-key="t-multi-level">map</span>
                            </a>
                            <div class="collapse menu-dropdown" id="map">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('admin/update-map')}}" class="nav-link" data-key="t-level-1.1">Update Map
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#footer" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="footer">
                                <i class="mdi mdi-sticker-text-outline"></i> <span data-key="t-multi-level">Footer</span>
                            </a>
                            <div class="collapse menu-dropdown" id="footer">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('/footer/edit')}}" class="nav-link" data-key="t-level-1.1">Edit Footer
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('social_media/index')}}" class="nav-link" data-key="t-level-1.1">Social Media
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('social_media/create')}}" class="nav-link" data-key="t-level-1.1">Create Social Media
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>