@extends('layouts.app')
@section('page_title')
    Oral health education,
    teeth whitening,
    teeth fillings,
    SCALING AND POLISHING OF TEETH
@endsection
@section('page_content')
    <section class="main-slider">

        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide" style="background-image:url(assets/images/slider/1.jpg)">
                <div class="container">
                    <div class="content">
                        <div class="banner-title">Revitalize Your Smile, Renew Your Confidence</div>
                        <h1>High Quality Medicines <br>at Lowest Rates</h1>
                        <div class="tp-btn">
                            <a href="#" class="btn-two style-two">make an appointment</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image:url(assets/images/slider/2.jpg)">
                <div class="container">
                    <div class="content">
                        <div class="banner-title">Precision Dentistry for Lasting Impressions</div>
                        <h1>Lasting impressions <br> that goes beyond your smile</h1>
                        <div class="tp-btn">
                            <a href="#" class="btn-two style-two">view services</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="intro-section centered sec-pad">
        <div class="container">
            <div class="intro-title">
                <div class="section-title">
                    <h2>Our team is dedicated to provide you<br />
                        with the best <span>Dental Services</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 intro-colmun">
                    <div class="single-item">
                        <div class="icon-box">
                            <i class="flaticon-pair-of-molars"></i>
                        </div>
                        <div class="single-content">
                            <h5><a href="javasript:;">Affordable Services</a></h5>
                            <div class="text">
                                <p>Dolor sit am consectetur adipisicing elit eiusmod
                                    tempor cididunt laboret mag dolore magna aliquat enim
                                    sed ad minim veniam nostrud.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 intro-colmun">
                    <div class="single-item">
                        <div class="icon-box">
                            <i class="flaticon-medical"></i>
                        </div>
                        <div class="single-content">
                            <h5><a href="javasript:;">25+ Years Experience</a></h5>
                            <div class="text">
                                <p>Dolor sit am consectetur adipisicing elit eiusmod
                                    tempor cididunt laboret mag dolore magna aliquat enim
                                    sed ad minim veniam nostrud.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 intro-colmun">
                    <div class="single-item">
                        <div class="icon-box">
                            <i class="flaticon-credit-card"></i>
                        </div>
                        <div class="single-content">
                            <h5><a href="javasript:;">Flexible Payments</a></h5>
                            <div class="text">
                                <p>Dolor sit am consectetur adipisicing elit eiusmod
                                    tempor cididunt laboret mag dolore magna aliquat enim
                                    sed ad minim veniam nostrud.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="appointment-section" style="background-image: url(images/home/appointment-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 appointment-colmun">
                    <div class="appointment-content">
                        <div class="title">Request An Appointment</div>
                        <h2>We Offers Care, Attention &
                            Treatment You Deserve</h2>
                        <div class="text">
                            <p class="mb-0" >
                                Our commitment goes beyond dentistry – we provide care, attention,
                                and treatment that you truly deserve
                                <br>
                                Experience a level of care that prioritizes your health and leaves you with a smile that
                                reflects the quality of our commitment. Welcome to a dental experience where you are truly
                                valued.
                            </p>
                            <h3>Call us: {{ env('PHONE_1') }} </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 appointment-colmun">
                    <div class="appointment-form">
                        <form action="#" method="post" class="form-area">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <label>first name</label>
                                    <input type="text" name="name" required="">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <label>last name</label>
                                    <input type="text" name="subject" required="">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <label>email address</label>
                                    <input type="email" name="email" required="">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <label>phone no.</label>
                                    <input type="text" name="phone" required="">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <label>message</label>
                                    <textarea name="message" required=""></textarea>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="btn-one style-one">send request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section">
        <div class="container-fullwidth">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="offers-content">
                        <div class="section-title left">
                            <h2>Services <span>We Offers</span></h2>
                        </div>
                        <div class="text">
                            <p>
                                At {{ env('APP_NAME') }}, we prioritize your oral health and overall well-being. Our
                                dedicated team
                                of experienced professionals is committed to providing exceptional dental care in a
                                comfortable and friendly environment.
                            </p>
                            <p>
                                we take pride in our commitment to excellence in dental care. Established with the vision of
                                creating healthy, beautiful smiles,
                                our clinic has been serving the community with passion and expertise.
                            </p>
                        </div>
                        <div class="button">
                            <a href="/services" class="btn-one style-one">view details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="icon-area centered">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                                <div class="single-item">
                                    <div class="icon-box"><a href="javasript:;"><i class="flaticon-medical-1"></i></a>
                                    </div>
                                    <h5><a href="javasript:;">Teeth Cleaning</a></h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                                <div class="single-item">
                                    <div class="icon-box"><a href="javasript:;"><i class="flaticon-medical-2"></i></a>
                                    </div>
                                    <h5><a href="javasript:;">Dental Fillings</a></h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                                <div class="single-item">
                                    <div class="icon-box"><a href="javasript:;"><i
                                                class="flaticon-molar-inside-a-shield"></i></a></div>
                                    <h5><a href="javasript:;">Tooth Extraction</a></h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                                <div class="single-item">
                                    <div class="icon-box"><a href="javasript:;"><i class="flaticon-brush"></i></a></div>
                                    <h5><a href="javasript:;">Teeth Whitening</a></h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                                <div class="single-item">
                                    <div class="icon-box"><a href="javasript:;"><i class="flaticon-head"></i></a></div>
                                    <h5><a href="javasript:;">Family Dentistry</a></h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                                <div class="single-item">
                                    <div class="icon-box"><a href="javasript:;"><i class="flaticon-medical-4"></i></a>
                                    </div>
                                    <h5><a href="javasript:;">Cosmetic Dentistry</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-section sec-pad" style="background-image: url(images/home/feature-bg.jpg);">
        <div class="container">
            <div class="feature-title centered">
                <div class="section-title uppercase">
                    <h2>Featured <span>cases</span></h2>
                </div>
                <p>Dolor sit am consectetur adipisicing elit eiusmod tempor cididunt laboret mag dolore magna aliquat<br />
                    enim sed ad minim veniam nostrud eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12 feature-colmun">
                    <div class="img-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure><img src="assets/images/home/feature.png" alt=""></figure>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8 col-xs-12 feature-colmun">
                    <div class="feature-content">
                        <div class="title">Dental Veneer Treatment</div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo.</p>
                        </div>
                        <ul class="list">
                            <li><i class="flaticon-tooth"></i> Dolore eu fugiat nulla pariatur excepteur</li>
                            <li><i class="flaticon-tooth"></i> Laborum sed ut perspiciatis unde omnis nat</li>
                            <li><i class="flaticon-tooth"></i> Adipisicing elit eiusmod tempor incididunt</li>
                        </ul>
                        <div class="button">
                            <a href="#" class="btn-one style-one">view service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section sec-pad">
        <div class="container">
            <div class="team-title centered">
                <div class="section-title uppercase">
                    <h2>dedicated <span>team</span></h2>
                </div>
                <p>Dolor sit am consectetur adipisicing elit eiusmod tempor cididunt laboret mag dolore magna aliquat<br />
                    enim sed ad minim veniam nostrud eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 team-colmun">
                    <div class="single-item">
                        <div class="img-box">
                            <a href="doctors.html">
                                <figure><img src="images/team/1.jpg" alt=""></figure>
                            </a>
                            <ul class="list centered">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h5><a href="doctors.html">dr. Mark Zerberg</a></h5>
                            <span>Head Doctor</span>
                            <div class="text">
                                <p>Consectetur adipisicing elit eiusmod
                                    tempor cididunt laboret mag.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 team-colmun">
                    <div class="single-item">
                        <div class="img-box">
                            <a href="doctors.html">
                                <figure><img src="images/team/2.jpg" alt=""></figure>
                            </a>
                            <ul class="list centered">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h5><a href="doctors.html">dr. charles kins</a></h5>
                            <span>Dental Care</span>
                            <div class="text">
                                <p>Consectetur adipisicing elit eiusmod
                                    tempor cididunt laboret mag.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 team-colmun">
                    <div class="single-item">
                        <div class="img-box">
                            <a href="doctors.html">
                                <figure><img src="images/team/3.jpg" alt=""></figure>
                            </a>
                            <ul class="list centered">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h5><a href="doctors.html">dr. sophia lauren</a></h5>
                            <span>Tooth Surgeon</span>
                            <div class="text">
                                <p>Consectetur adipisicing elit eiusmod
                                    tempor cididunt laboret mag.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 team-colmun">
                    <div class="single-item">
                        <div class="img-box">
                            <a href="doctors.html">
                                <figure><img src="images/team/4.jpg" alt=""></figure>
                            </a>
                            <ul class="list centered">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h5><a href="doctors.html">dr. John michael</a></h5>
                            <span>X-Ray Specialist</span>
                            <div class="text">
                                <p>Consectetur adipisicing elit eiusmod
                                    tempor cididunt laboret mag.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="catagories-section" style="background-image: url(images/home/1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12 catagories-colmun">
                    <div class="left-colmun text-right">
                        <div class="single-item">
                            <div class="title">Convenient Consultations</div>
                            <div class="text">
                                <p>Dolor sit am consectetur adipisicing elit eiusmod
                                    tempor cididunt laboret mag dolore magna aliquat enim</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="title">Always Focus on Patients</div>
                            <div class="text">
                                <p>Dolor sit am consectetur adipisicing elit eiusmod
                                    tempor cididunt laboret mag dolore magna aliquat enim</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 catagories-colmun">
                    <div class="img-holder wow zoomIn animated">
                        <div class="img-box centered">
                            <figure><img src="images/home/3.png" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 catagories-colmun">
                    <div class="right-colmun">
                        <div class="single-item">
                            <div class="title">Free Dental Exam & X-Rays</div>
                            <div class="text">
                                <p>Dolor sit am consectetur adipisicing elit eiusmod
                                    tempor cididunt laboret mag dolore magna aliquat enim</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="title">Your Smile, Our Passion</div>
                            <div class="text">
                                <p>Dolor sit am consectetur adipisicing elit eiusmod
                                    tempor cididunt laboret mag dolore magna aliquat enim</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-section sec-pad">
        <div class="container">
            <div class="testimonials-title centered">
                <div class="section-title uppercase">
                    <h2>what <span>patient saying</span></h2>
                </div>
                <p>Dolor sit am consectetur adipisicing elit eiusmod tempor cididunt laboret mag dolore magna aliquat<br />
                    enim sed ad minim veniam nostrud eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="three-column-carousel">
                <div class="single-item">
                    <div class="text">Dolor sitam consectetur sed adipisicing
                        eiusmod tempor cididunt laboret mag
                        magn aliquat enim sed minim veniam
                        nostrud lorem ipsum dolor.</div>
                    <div class="author-info">
                        <div class="author-img">
                            <figure><img src="images/testimonial/1.png" alt=""></figure>
                        </div>
                        <div class="author-thumb">
                            <h5>Adrian Faith</h5>
                            <span>Patient</span>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="text">Dolor sitam consectetur sed adipisicing
                        eiusmod tempor cididunt laboret mag
                        magn aliquat enim sed minim veniam
                        nostrud lorem ipsum dolor.</div>
                    <div class="author-info">
                        <div class="author-img">
                            <figure><img src="images/testimonial/2.png" alt=""></figure>
                        </div>
                        <div class="author-thumb">
                            <h5>Emma Olivia</h5>
                            <span>Patient</span>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="text">Dolor sitam consectetur sed adipisicing
                        eiusmod tempor cididunt laboret mag
                        magn aliquat enim sed minim veniam
                        nostrud lorem ipsum dolor.</div>
                    <div class="author-info">
                        <div class="author-img">
                            <figure><img src="images/testimonial/3.png" alt=""></figure>
                        </div>
                        <div class="author-thumb">
                            <h5>Scott Irvine</h5>
                            <span>Patient</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faqs-section news-section sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 faqs-colmun">
                    <div class="faqs-content">
                        <div class="section-title left">
                            <h2>Read <span>FAQ’s</span></h2>
                        </div>
                        <div class="accordion-box">
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn active">
                                    <h5>How often should I visit the dentist for a check-up?</h5>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-plus"></i><i class="minus fa fa-minus"></i>
                                    </div>
                                </div>
                                <div class="acc-content collapsed">
                                    <p>We recommend regular check-ups every six months. However, the frequency may vary
                                        based on your individual oral health needs</p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <h5> Do you treat dental emergencies?</h5>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-plus"></i><i class="minus fa fa-minus"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>Yes, we provide prompt care for dental emergencies. Contact us immediately, and we'll
                                        do our best to schedule you for a same-day appointment.</p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <h5>What cosmetic dentistry services do you offer?</h5>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-plus"></i><i class="minus fa fa-minus"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>Our cosmetic services include teeth whitening, veneers, smile makeovers, and more.
                                        Schedule a consultation to discuss your aesthetic goals.</p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <h5>How can I schedule an appointment?</h5>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-plus"></i><i class="minus fa fa-minus"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>You can schedule an appointment by calling our office or using our online booking
                                        system. We also welcome walk-ins, but appointments are recommended for efficiency.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <p>Could not fine the answer of your question? <a href="/appointment">Ask Our Doctors.</a></p>
                        </div>
                        <div class="button"><a href="/contact" class="btn-one style-one">ask a question</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-section" style="background-image: url(images/home/call-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 call-calmun">
                    <div class="call-content">
                        <div class="img-box">
                            <figure><img src="assets/images/home/call.png" alt=""></figure>
                        </div>
                        <div class="title">Need Emergancy Care? Get Help Now!</div>
                        <h5>Get quick help when you need it the most !</h5>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 call-calmun">
                    <div class="call-us centered">
                        <div class="text"><a href="/appointment">schedure a same day appointment</a></div>
                        <h5><a href="tel:{{ env('PHONE_2') }}">Call us: {{ env('PHONE_2') }}</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
