    <!-- main footer area -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12 footer-colmun">
                    <div class="logo-widget footer-widget">
                        <div class="footer-logo">
                            <a href="index.javasript:;"><figure><img src="assets/images/footer/logo1.png" alt=""></figure></a>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur magna aliqua
                            enim min veniams nostrud nisi duis aliquip consequat
                            ipsum adipisicing elit sed eiusmod tempor.</p>
                        </div>
                        <ul class="list">
                            <li><i class="fa fa-map-marker"></i><p> {{env('APP_ADDRESS')}} </p></li>
                            <li><i class="fa fa-phone"></i><p>Call Free:  <span>{{env('PHONE_1')}}</span></p></li>
                            <li><i class="fa fa-envelope"></i><p> <a href="mail:{{env('EMAIL')}}">{{env('EMAIL')}}</a> </p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12 footer-colmun">
                    <div class="service-widget footer-widget">
                        <div class="footer-title"><h5>our services</h5></div>
                        <ul class="list">
                            <li><a href="javasript:;">Pediatric Dentistry</a></li>
                            <li><a href="javasript:;">Gum Disease</a></li>
                            <li><a href="javasript:;">Tooth Extraction</a></li>
                            <li><a href="javasript:;">Affordable Dentures</a></li>
                            <li><a href="javasript:;">Implants</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12 footer-colmun">
                    <div class="shediul-widget footer-widget">
                        <div class="footer-title"><h5>opening hours</h5></div>
                        <div class="single-item"><p>Monday - Friday : 9.00 - 18.00</p></div>
                        <div class="single-item"><p>Saturday : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 9.00 - 15.00</p></div>
                        <div class="single-item"><p>Sunday : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Emergency Only</p></div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- main footer area end -->

    <!-- footer bottom -->
    <section class="footer-bottom">
        <div class="container">
            <div class="copyright">Copyright © {{date('Y')}} <a href="#">{{ env('APP_NAME') }}.</a> All rights reserved.</div>
            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </section>