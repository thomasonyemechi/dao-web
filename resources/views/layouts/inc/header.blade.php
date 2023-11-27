<header class="main-header">

    <!-- header upper -->
    <div class="header-upper">
        <div class="container">
            <div class="wrapper-box">
                <div>
                    <div class="text">Prioritizing your oral health and overall well-being</div>
                </div>
                <div>
                    <div class="top-right">
                        <div class="location-address"><span class="fa fa-map-marker"></span>{{ env('ADDRESS') }}</div>
                        <a href="#" class="btn-one style-one">book appointment</a>
                    </div> 
                </div>
            </div>               
        </div>
    </div>
    <div class="header-middile">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo-box">
                        <a href="index.html"><img src="assets/images/logo/logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="wrapper-box">
                        <div class="contact-info-two">
                            <div class="info-box">
                                <div class="icon-box"><span class="fa fa-phone"></span></div>
                                <h5>Make a call</h5>
                                <div class="text"><a href="tel:{{ env('PHONE_1') }}" style="color: inherit !important;" >Call us: {{ env('PHONE_1') }}</a></div>
                            </div>
                            <div class="info-box">
                                <div class="icon-box"><span class="fa fa-clock-o"></span></div>
                                <h5>Mon - Sat: 9am to 6pm</h5>
                                <div class="text">Sunday Holiday</div>
                            </div>
                        </div>
                        <ul class="social-icon-one">
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
                
    </div>
    
    <!-- header lower -->     
    <div class="header-lower theme_menu stricky">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="menu-bar">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/services">Service</a></li>
                                    <li><a href="/gallery">Gallery</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>

                                <!-- mobile menu -->
                                <ul class="mobile-menu clearfix">
                                    <li class="current"><a href="index.html">Home</a></li>
                                    <li class="dropdown"><a href="#">About</a>
                                        <ul>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="error.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul> 
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="doctors.html">doctors</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="our-blog.html">Our Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="info-box">
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="https://html.commonsupport.xyz/2019/Medley/blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search...." required="">
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>