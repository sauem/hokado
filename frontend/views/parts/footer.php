<?php

use common\helper\HelperFunction;

?>
<footer class="footer footer-light">
    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 footer-widget footer-widget-about">
                    <div class="footer-widget__content">
                        <img width="100" src="<?= HelperFunction::getLogo('footer') ?>" alt="logo" class="mb-30">
                    </div><!-- /.footer-widget__content -->
                    <p><?= HelperFunction::setting('site_description', true) ?></p>
                </div><!-- /.col-xl-3 -->
                <div class="col-sm-6 col-md-4 col-lg-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget__title">Company</h6>
                    <div class="footer-widget__content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="leadership-team.html">Meet Our Team</a></li>
                                <li><a href="blog.html">News & Media</a></li>
                                <li><a href="projects-grid.html">Case Studies</a></li>
                                <li><a href="contact-us.html">Contacts</a></li>
                                <li><a href="#">Investors</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-6 col-md-4 col-lg-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget__title">Solutions</h6>
                    <div class="footer-widget__content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="#">IT Management</a></li>
                                <li><a href="#">Cyber Security</a></li>
                                <li><a href="#">Cloud Computing</a></li>
                                <li><a href="#">IT Consulting</a></li>
                                <li><a href="#">Software Dev</a></li>
                                <li><a href="#">IT Support</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-6 col-md-4 col-lg-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget__title">Resources</h6>
                    <div class="footer-widget__content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="pricing.html">Pricing and plans</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="faqs.html">Help & FAQ</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="#">Site map</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-6 col-md-6 col-lg-3 footer-widget">
                    <h6 class="footer-widget__title">Facebook Fanpage</h6>
                    <div class="footer-widget__content">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=2069666556634206&autoLogAppEvents=1" nonce="klBP5QNE"></script>
                        <div class="fb-page" data-href="https://www.facebook.com/lozapetloveno1/" data-tabs="tin nh&#x1eaf;n, s&#x1ef1; ki&#x1ec7;n" data-width="" data-height="100%" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/lozapetloveno1/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/lozapetloveno1/">Gỗ HUSU - Đồng hồ treo tường và Đèn gỗ</a></blockquote></div>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-primary -->
    <div class="footer-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <div class="footer__copyrights">
                        <span class="fz-14">&copy; 2020 BCE.vn, All Rights Reserved</span>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-2 col-lg-2 text-center">
                    <button id="scrollTopBtn" class="my-2"><i class="icon-arrow-up-2"></i></button>
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-12 col-md-5 col-lg-5 d-flex flex-wrap justify-content-end align-items-center">
                    <ul class="social-icons list-unstyled mb-0 mr-30">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-secondary -->
</footer>
