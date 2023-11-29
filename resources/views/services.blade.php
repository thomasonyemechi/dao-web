@extends('layouts.app')
@section('page_title')
    Our services
@endsection
@section('page_content')
    <section class="page-title" style="background-image: url(assets/images/home/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h2>Services</h2>
                </div>
                <ul class="bread-crumb">
                    <li><a href="/">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="dental-service sec-pad centered">
        <div class="container">
            <div class="service-title">
                <div class="section-title"><h2>Our team is dedicated to provide you<br>
                with the best <span>Dental Services</span></h2></div>
                <p></p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-medical-1"></i></div>
                        <div class="lower-content">
                            <h5><a href="javascript:;">Teeth whitening</a></h5>
                            <div class="text"><p>Are you dreaming of a brighter, whiter smile? Our professional tooth whitening services can make it a reality!</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-medical-2"></i></div>
                        <div class="lower-content">
                            <h5><a href="javascript:;">Teeth fillings</a></h5>
                            <div class="text"><p>Dental fillings at {{env('APP_NAME')}} offer a reliable solution to restore the health and functionality of your teeth</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-molar-inside-a-shield"></i></div>
                        <div class="lower-content">
                            <h5><a href="javascript:;">Simple and surgical extractions</a></h5>
                            <div class="text"><p>Whether you require a simple extraction or a more complex surgical procedure, we provide gentle and effective solutions</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-brush"></i></div>
                        <div class="lower-content">
                            <h5><a href="javascript:;">Scaling and polishing</a></h5>
                            <div class="text"><p>Our scaling and polishing services are designed to keep your teeth and gums in optimal condition.</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-head"></i></div>
                        <div class="lower-content">
                            <h5><a href="javascript:;">Dentures</a></h5>
                            <div class="text"><p>Regain Confidence and Functionality with Expert Denture Solutions - Transform Your Smile with Custom Dentures </p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-medical-4"></i></div>
                        <div class="lower-content">
                            <h5><a href="javascript:;">cosmetic braces</a></h5>
                            <div class="text"><p>we understand the desire for a straighter smile without compromising aesthetics - we offer a discreet and effective solution</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-dental-review"></i></div>
                        <div class="lower-content">
                            <h5><a href="javascript:;">orthodontic treatments</a></h5>
                            <div class="text"><p>we are dedicated to helping you achieve a straighter, more aligned smile through range of expert orthodontic treatments</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-dental-prosthesis"></i></div>
                        <div class="lower-content">
                            <h5><a href="javascript:;">Dental xray investigation</a></h5>
                            <div class="text"><p>we prioritize your oral health by utilizing advanced dental X-ray technology to provide thorough and precise diagnostics</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-medical-3"></i></div>
                        <div class="lower-content">
                            <h5><a href="javascript:;">Crown and Bridge works</a></h5>
                            <div class="text"><p>Regain Functionality and Aesthetics with Precision Dental Restorations - enhance the beauty of your smile</p></div>
                        </div>
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
                        <div class="title">Schedule Your Appointment Today!</div>
                        <h5>Ready to prioritize your oral health? Schedule an appointment with us !</h5>
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
