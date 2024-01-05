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
                        <div class="img-box wow slideInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInLeft;">
                            <figure><img src="assets/images/about/1.jpg" alt=""></figure>
                        </div>
                        <div class="lower-content">
                            <h3>About {{ env('APP_NAME') }} </h3>
                            <div class="text">
                                <p>
                                    Welcome to {{ env('APP_NAME') }}, where your oral health and comfort are our top
                                    priorities.
                                    Established with a passion for delivering exceptional dental care, our clinic is
                                    dedicated to providing a positive and personalized experience for every patient.
                                </p>
                            </div>
                        </div>
                        <div class="author-info">
                            <div class="signature">
                                <figure><img src="images/about/signature.png" alt=""></figure>
                            </div>
                            <span>Head Doctor</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8 col-xs-12 about-colmun">

                    <div class="service-area">
                        <div class="" style="margin-bottom: 10px !important">
                            <h5 class="h5" ><a href="javasript:;" style="font-size: 20px !important" >Our Mission</a></h5>
                            <div class="text">
                                <p>At {{ env('APP_NAME') }}, our mission is to enhance the overall well-being of our
                                    patients by
                                    delivering high-quality, comprehensive dental care. We are committed to:</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-medical-7"></i></div>
                            <h5><a href="javasript:;">Excellence in Dental Care</a></h5>
                            <div class="text">
                                <p>Striving for excellence in every aspect of our practice, from diagnostics to treatment
                                    and patient care.</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-transport"></i></div>
                            <h5><a href="javasript:;">Caring Surroundings for Patients</a></h5>
                            <div class="text">
                                <p>Ensuring a compassionate and understanding environment for our patients, where individual
                                    needs are recognized and addressed.</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><i class="flaticon-medical-5"></i></div>
                            <h5><a href="javasript:;">In-Depth Innovation</a></h5>
                            <div class="text">
                                <p>Embracing the latest advancements in dental technology and treatment methodologies to
                                    provide cutting-edge solutions.</p>
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



    <section class="faqs-section achievements-section sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 news-achievements">
                    <div class="achievements-content">
                        <div class="section-title left">
                            <h2>Achievements</h2>
                        </div>
                        <div class="text">
                            <p>we take pride in our commitment to excellence and continuous improvement. Our achievements
                                reflect our dedication to providing the highest quality dental care to our valued patients.</p>
                        </div>
           
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
