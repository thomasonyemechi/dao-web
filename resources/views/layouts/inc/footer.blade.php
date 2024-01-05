    <!-- main footer area -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12 footer-colmun">
                    <div class="logo-widget footer-widget">
                        <div class="footer-logo">
                            <a href="/">
                                <figure> <img src="assets/images/logo/logo1.png" alt=""
                                        style="width: 182px; height: 47px"></figure>
                            </a>
                        </div>
                        <div class="text">
                            <p>
                                
                                where your oral health and comfort are our top priorities.</p>
                        </div>
                        <ul class="list">
                            <li><i class="fa fa-map-marker"></i>
                                <p> {{ env('APP_ADDRESS') }} </p>
                            </li>
                            <li><i class="fa fa-phone"></i>
                                <p>Call Free: <span>{{ env('PHONE_1') }}, {{ env('PHONE_2') }}</span></p>
                            </li>
                            <li><i class="fa fa-envelope"></i>
                                <p> <a href="mail:{{ env('EMAIL') }}">{{ env('EMAIL') }}</a> </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 footer-colmun">
                    <div class="service-widget footer-widget">
                        <div class="footer-title">
                            <h5>our services</h5>
                        </div>
                        <ul class="list">
                            <li><a href="javasript:;">Simple and surgical extractions</a></li>
                            <li><a href="javasript:;">Scaling and polishing of teeth</a></li>
                            <li><a href="javasript:;">Minor oral surgeries</a></li>
                            <li><a href="javasript:;">Affordable Dentures</a></li>
                            <li><a href="javasript:;">orthodontic treatments</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 footer-colmun">
                    <div class="shediul-widget footer-widget">
                        <div class="footer-title">
                            <h5>opening hours</h5>
                        </div>
                        <div class="single-item">
                            <p>Monday - Friday : 8am - 6pm</p>
                        </div>
                        <div class="single-item">
                            <p>Saturday : 8am - 6pm</p>
                        </div>
                        <div class="single-item">
                            <p>Sunday : 2pm - 8pm</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- main footer area end -->

    <!-- footer bottom -->
    <section class="footer-bottom">
        <div class="container">
            <div class="copyright">Copyright © {{ date('Y') }} <a href="#">{{ env('APP_NAME') }}.</a> All
                rights reserved.</div>
            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </section>
