@extends('layouts.app')
@section('page_title')
    Contact our team
@endsection
@section('page_content')
    <section class="page-title" style="background-image: url(assets/images/home/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h2>Contact</h2>
                </div>
                <ul class="bread-crumb">
                    <li><a href="/">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 contact-colmun">
                    <div class="address-info">
                        <div class="title">Address Info</div>
                        <div class="single-info">
                            <h5>Head Office</h5>
                            <div class="single-item">
                                <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                                <p>{{ env('ADDRESS') }}</p>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="fa fa-phone"></i></div>
                                <p>Call: <span>{{ env('PHONE_1') }} </span></p>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="fa fa-envelope"></i></div>
                                <p>{{ env('EMAIL') }}</p>
                            </div>
                        </div>
                        <div class="single-info">
                            <h5>Alternate Info</h5>
                            <div class="single-item">
                                <div class="icon-box"><i class="fa fa-phone"></i></div>
                                <p>Call Free: <span> {{ env('PHONE_2') }} </span></p>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="fa fa-envelope"></i></div>
                                <p>support@dao-dentals.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 contact-colmun">
                    <div class="opening-hours">
                        <div class="title">Opening Hours</div>
                        <div class="shediul">
                            <div class="single-day">Monday<p>9.00 am - 5.00 pm</p>
                            </div>
                            <div class="single-day">Tuesday<p>9.00 am - 5.00 pm</p>
                            </div>
                            <div class="single-day">Wednesday<p>9.00 am - 5.00 pm</p>
                            </div>
                            <div class="single-day">Thursday<p>9.00 am - 6.00 pm</p>
                            </div>
                            <div class="single-day">Friday<p>9.00 am - 3.00 pm</p>
                            </div>
                            <div class="single-day">Saturday<p>9.00 am - 2.00 pm</p>
                            </div>
                        </div>
                        <div class="text">We are open on all calender &amp; bank holidays.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-area sec-pad">
        <div class="container">
            <div class="contact-title centered">
                <div class="section-title">
                    <h2>send us <span>message</span></h2>
                </div>
                <p>Have a question or need more information? We're here to help! Feel free to send
                    <br>
                    us a message, and our friendly team will get back to you as soon as possible.
                </p>
            </div>
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 contact-colmun">
                    <div class="contact-form-area">
                        <form id="contact-form" name="contact_form" class="default-form" method="post"
                            novalidate="novalidate">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <label>first name</label>
                                    <input type="text" name="form_name" value="" required=""
                                        aria-required="true">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <label>email</label>
                                    <input type="email" name="form_email" value="" required=""
                                        aria-required="true">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <label>telephone no.</label>
                                    <input type="text" name="form_phone" value="" required=""
                                        aria-required="true">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <label>subject</label>
                                    <input type="text" name="form_subject" value="" required=""
                                        aria-required="true">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <label>message</label>
                                    <textarea placeholder="" name="form_message" required="" aria-required="true"></textarea>
                                </div>
                                <div class="form-group centered col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="btn-one style-one" data-loading-text="Please wait..."><i
                                            class="fa fa-arrow-circle-right" aria-hidden="true"></i>send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
