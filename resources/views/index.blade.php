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


    <section class="appointment-section" style="background-image: url(images/home/appointment-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 appointment-colmun">
                    <div class="appointment-content">
                        <div class="title">Request An Appointment</div>
                        <h2>We Offer Care, Attention &
                            Treatment You Deserve</h2>
                        <div class="text">
                            <p class="mb-0">
                                Our commitment goes beyond dentistry – we provide care, attention,
                                and treatment that you truly deserve
                                <br>
                                Experience a level of care that prioritizes your health and leaves you with a smile that
                                reflects the quality of our commitment. Welcome to a dental experience where you are truly
                                valued.
                            </p>
                            <h3>Call us: {{ env('PHONE_1') }}, {{ env('PHONE_2') }} </h3>
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
                            <h2>Services <span>We Offer</span></h2>
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


    <section class="catagories-section" style="background-image: url(assets/images/home/1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12 catagories-colmun">
                    <div class="left-colmun text-right">
                        <div class="single-item">
                            <div class="title">Experienced and Caring Team</div>
                            <div class="text">
                                <p>
                                    Our team of skilled dentists, hygienists, and support staff is dedicated to providing
                                    compassionate care with a focus on your individual needs
                                </p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="title">Patient-Centric Approach</div>
                            <div class="text">
                                <p>
                                    Your comfort and well-being are our top priorities. We take the time to listen, answer
                                    your questions, and tailor our services to meet your unique requirements
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 catagories-colmun">
                    <div class="img-holder wow zoomIn animated">
                        <div class="img-box centered">
                            <figure><img src="assets/images/home/3.png" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 catagories-colmun">
                    <div class="right-colmun">
                        <div class="single-item">
                            <div class="title"> Personalized Treatment Plans</div>
                            <div class="text">
                                <p>Our approach involves creating personalized treatment plans tailored to your specific
                                    goals and concerns, ensuring the best possible outcomes for your oral health.</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="title">State-of-the-Art Facility</div>
                            <div class="text">
                                <p>Our clinic is equipped with cutting-edge technology to provide accurate diagnoses and
                                    effective treatments</p>
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
                    <h2>what <span>patients are saying</span></h2>
                </div>
                <p>Discover what our valued patients have to say about their experiences at {{ env('APP_NAME') }} </p>
            </div>
            <div class="three-column-carousel">
                <div class="single-item">
                    <div class="text">
                        Best dental clinic ever, they're staffs are very friendly, jovial and well trained, they always give
                        the best - My teeth have never felt better, i am grateful for the care
                    </div>
                    <div class="author-info">
                        <div class="author-thumb">
                            <h5>Johnson Folashade</h5>
                            <span>Patient</span>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="text"> The staff was incredibly professional and friendly, making me feel comfortable
                        from the moment I walked in. The dentist’s expertise was evident.</div>
                    <div class="author-info">
                        <div class="author-thumb">
                            <h5>olayinka sururah</h5>
                            <span>Patient</span>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="text">
                        Well competent doctor and their staffs are well trained, DAO DENTAL CLINIC is a place where their
                        equipment are neat and services are very affordable, best place ever
                    </div>
                    <div class="author-info">
                        <div class="author-thumb">
                            <h5>Debby Matt</h5>
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

    <section class="call-section" style="background-image: url(assets/images/home/call-bg.jpg);">
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
                        <div class="text"><a href="#">schedure a same day appointment</a></div>
                        <h5><a href="tel:{{ env('PHONE_2') }}">Call us: {{ env('PHONE_2') }}</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
