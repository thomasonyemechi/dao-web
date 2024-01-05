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
                        {{-- <a href="#" class="btn-one style-one">book appointment</a> --}}
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
                        <a href="/"><img src="assets/images/logo/logo1.png" alt="" style="width: 182px; height: 47px" ></a>
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
                                <div class="text">Sunday 2pm - 6pm</div>
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
                                    {{-- <li><a href="/gallery">Gallery</a></li> --}}
                                    <li><a href="/contact">Contact</a></li>
                                </ul>

                                <!-- mobile menu -->
                                <ul class="mobile-menu clearfix">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/services">Services</a></li>
                                    {{-- <li><a href="/gallery">Gallery</a></li> --}}
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
           
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>