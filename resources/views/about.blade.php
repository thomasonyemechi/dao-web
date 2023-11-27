@extends('layouts.app')
@section('page_title')
    About {{ env('APP_NAME') }}
@endsection
@section('page_content')
    <section class="page-title" style="background-image: url(assets/images/home/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h2>About</h2>
                </div>
                <ul class="bread-crumb">
                    <li><a href="/">Home</a></li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12 about-colmun">
                    <div class="about-content">
                        <div class="img-box wow slideInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInLeft;">
                            <figure><img src="assets/images/about/1.jpg" alt=""></figure>
                        </div>
                        <div class="lower-content">
                            <h3>State-of-the-Art <br>
                            Dental Clinic Services</h3>
                            <div class="text"><p>Lorem ipsum dolor sit amet consectetur adipisicin elit sed eiusmod tempor incididunt
                            labore et dolore magna aliqua enim ad minim veniams quis nostrud exercitation uamc
                            aspums nisi ut aliquip ex ea commodo consequat ipsum.</p></div>
                        </div>
                        <div class="author-info">
                            <div class="signature"><figure><img src="images/about/signature.png" alt=""></figure></div>
                            <span>Head Doctor</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8 col-xs-12 about-colmun">
                    <div class="service-area">
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-medical-7"></i></div>
                            <h5><a href="service-details.html">Excellence in Dental Care</a></h5>
                            <div class="text"><p>Abore et dolore magna aliqua enim ad minim veniams quis nost
                            exercitation ullamco aspums nisi ut aliquip.</p></div>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-transport"></i></div>
                            <h5><a href="service-details.html">Caring Surroundings for Patients</a></h5>
                            <div class="text"><p>Abore et dolore magna aliqua enim ad minim veniams quis nost
                            exercitation ullamco aspums nisi ut aliquip.</p></div>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-medical-5"></i></div>
                            <h5><a href="service-details.html">In-Depth Consultations</a></h5>
                            <div class="text"><p>Abore et dolore magna aliqua enim ad minim veniams quis nost
                            exercitation ullamco aspums nisi ut aliquip.</p></div>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-business"></i></div>
                            <h5><a href="service-details.html">Flexible Payment Options</a></h5>
                            <div class="text"><p>Abore et dolore magna aliqua enim ad minim veniams quis nost
                            exercitation ullamco aspums nisi ut aliquip.</p></div>
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



    <section class="faqs-section achievements-section sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 news-achievements">
                    <div class="achievements-content">
                        <div class="section-title left"><h2>Achievements</h2></div>
                        <div class="text"><p>Dolor sit amet consectetur adipisicing elit sed eiusmod tempor labore et dolore
                        magna aliqua enim minim veniams quis nostrud exercitation nisi ut aliquip ex ea
                        commodo magna alique consequat ipsum commodo.</p></div>
                        <div class="award-area centered">
                            <div class="single-item">
                                <figure><img src="assets/images/about/award1.png" alt=""></figure>
                                <div class="text">excellence award <br> year 2019</div>
                            </div>
                            <div class="single-item">
                                <figure><img src="assets/images/about/award2.png" alt=""></figure>
                                <div class="text">best dental clinic <br> award</div>
                            </div>
                            <div class="single-item">
                                <figure><img src="assets/images/about/award3.png" alt=""></figure>
                                <div class="text">best dental services <br> year 2019</div>
                            </div>
                            <div class="single-item">
                                <figure><img src="assets/images/about/award4.png" alt=""></figure>
                                <div class="text">clean dentistry award <br> year 2019</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
