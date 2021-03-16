<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<!-- Services Section -->
<?= $this->render('../parts/slider', [
    'sliders' => $sliders
]) ?>

<div class="services-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2><span>Các mặt hàng</span> Hỗ trợ xuất khẩu</h2>
        </div>
        <div class="inner-container">
            <div class="row g-0">

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon ti-blackboard"></span>
                        </div>
                        <h5><a href="#">Công nghệ</a></h5>
                        <div class="text">Các mặt hàng áp dụng công nghệ/thiết bị di động</div>
                        <a class="read-more" href="service-detail.html">More <span
                                    class="ti-angle-right"></span></a>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon ti-stats-up"></span>
                        </div>
                        <h5><a href="service-detail.html">Nông sản</a></h5>
                        <div class="text">Platform omnichannel click thought leadership pivot</div>
                        <a class="read-more" href="service-detail.html">More <span
                                    class="ti-angle-right"></span></a>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon ti-shield"></span>
                        </div>
                        <h5><a href="service-detail.html">Bảo hộ lao động</a></h5>
                        <div class="text">Disrupt taste makers help council emerging.</div>
                        <a class="read-more" href="service-detail.html">More <span
                                    class="ti-angle-right"></span></a>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon ti-home"></span>
                        </div>
                        <h5><a href="service-detail.html">Nội thất</a></h5>
                        <div class="text">Mobile ready proprietary dedication intuitive</div>
                        <a class="read-more" href="service-detail.html">More <span
                                    class="ti-angle-right"></span></a>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon ti-stamp"></span>
                        </div>
                        <h5><a href="service-detail.html">Đồ gia dụng</a></h5>
                        <div class="text">Thought leadership pass the clap hackathon wearables.</div>
                        <a class="read-more" href="service-detail.html">More <span
                                    class="ti-angle-right"></span></a>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon ti-money"></span>
                        </div>
                        <h5><a href="service-detail.html">May mặc</a></h5>
                        <div class="text">Disrupt taste makers help council emerging.</div>
                        <a class="read-more" href="service-detail.html">More <span
                                    class="ti-angle-right"></span></a>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon ti-shopping-cart-full"></span>
                        </div>
                        <h5><a href="service-detail.html">Thực phẩm khô</a></h5>
                        <div class="text">Mobile ready proprietary dedication intuitive</div>
                        <a class="read-more" href="service-detail.html">More <span
                                    class="ti-angle-right"></span></a>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon ti-truck"></span>
                        </div>
                        <h5><a href="service-detail.html">Linh kiện</a></h5>
                        <div class="text">Platform omnichannel click thought leadership pivot</div>
                        <a class="read-more" href="service-detail.html">More <span
                                    class="ti-angle-right"></span></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- End Services Section -->


<!-- About Section -->
<div class="about-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row align-items-center clearfix">
                <!-- Image Column -->
                <div class="image-column col-lg-6">
                    <div class="about-image">
                        <div class="about-inner-image">
                            <img src="/theme/images/about/home-about.png" alt="about">
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
                    <div class="about-column">
                        <div class="sec-title">
                            <h2><span>Sứ mệnh</span></h2>
                        </div>
                        <div class="text">
                            <p>Kết nối Quốc tế, đưa Việt Nam tới gần Châu u và bạn bè các nước.</p>
                            <p>Cùng nhau đưa Việt Nam ra biển lớn, thúc đẩy giao thương, giúp nhà sản xuất tiếp cận,
                                xúc tiến thương mại đi các nước.</p>
                            <p>Chung tay chia sẻ những khó khăn cùng cộng đồng.</p>
                        </div>
                        <div class="signature">Daniel <span>Daniel Jr</span></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End About Section -->

<!-- Project Section -->
<div class="testimonial-section style-two">
    <div class="auto-container">
        <div class="inner-container">

            <!-- Sec Title -->
            <div class="sec-title">
                <h2><span>Giá trị cốt lõi</span></h2>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme">

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote icofont-quote-right"></div>
                        <div class="author">Gắn kết<span></span></div>
                        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna
                            akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote icofont-quote-right"></div>
                        <div class="author">Trách nhiệm <span>/ Director at Spotify</span></div>
                        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna
                            akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote icofont-quote-right"></div>
                        <div class="author">Kết nối <span>/ Director at Chobham Manor</span></div>
                        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna
                            akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote icofont-quote-right"></div>
                        <div class="author">Tiếp cận <span>/ Director at Spotify</span></div>
                        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna
                            akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- End Project Section -->

<!-- Reputation Section Two -->
<div class="reputation-section-two style-two">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Form Column -->
            <div class="form-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="form-boxed">
                        <h5>THAM GIA CHI HỘI</h5>

                        <div class="consult-form">
                            <form method="post"
                                  action="https://htmldemo.hasthemes.com/consultix/consultix/donate.html">

                                <!--Form Group-->
                                <div class="form-group">
                                    <label>Họ và tên</label>
                                    <input type="text" name="name" value="" placeholder="Nguyen Van A" required>
                                </div>
                                <!--Form Group-->
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" name="phone" value="" placeholder="034xxxxxx"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" placeholder="demo@gmail.com"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label>Lời nhắn</label>
                                    <textarea name="message" placeholder="lời nhắn của bạn...."></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">
                                        <span class="txt">GỬI YÊU CẦU</span></button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2><span>Lịch hoạt động</span></h2>
                    </div>
                    <div class="blocks-outer">

                        <!-- Reputation Block -->
                        <div class="reputation-block">
                            <div class="inner-box">
                                <h5>Gặp gỡ</h5>
                                <div class="text">
                                    <p>Họp mặt thường kì vào sáng thứ 6 hàng tuần, Từ 09h00 - 12h00</p>
                                </div>
                            </div>
                        </div>

                        <!-- Reputation Block -->
                        <div class="reputation-block">
                            <div class="inner-box">
                                <h5>Thăm quan & kết nối</h5>
                                <div class="text ">
                                    <p>Thăm quan và học hỏi các doanh nghiệp lớn</p>
                                    <p>Tham gia các hội thảo, phiên họp liên quan đến kinh tế vĩ mô của chính phủ,
                                        Doanh nghiêp</p>
                                    <p>Xúc tiến thương mại; giới thiệu sản phẩm thông qua hoạt động Hội Chợ</p>
                                </div>
                            </div>
                        </div>

                        <!-- Reputation Block -->
                        <div class="reputation-block">
                            <div class="inner-box">
                                <h5>Experts About Business</h5>
                                <div class="text">Create multiple discussions to keep all relevant conversations
                                    <br> together, all in one place with Arado
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Reputation Section -->

<!-- Blog Section -->
<div class="blog-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">Tin tức</div>
            <h2><span>Thị trường </span>Quốc tế</h2>
        </div>
        <div class="inner-container">
            <div class="clearfix row g-0">
                <!-- Column -->
                <div class="column col-lg-8 col-md-12 col-sm-12">

                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="clearfix">
                                <!-- Image Column -->
                                <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image">
                                            <a href="blog-detail.html"><img src="/theme/images/resource/news-1.jpg"
                                                                            alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content Column -->
                                <div class="content-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-column">
                                        <div class="arrow-one"></div>
                                        <div class="title">business</div>
                                        <h4><a href="blog-detail.html">Problems About <br> Social Insurance For <br>
                                                Truck Drivers</a></h4>
                                        <div class="post-date">Decmber 14th, 2020 by <span>Admin</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="clearfix row g-0">
                                <!-- Content Column -->
                                <div class="content-column col-lg-6 col-md-6 col-sm-12 order-lg-1 order-2">
                                    <div class="inner-column">
                                        <div class="arrow-two"></div>
                                        <div class="title">bank & finance</div>
                                        <h4><a href="blog-detail.html">Payment Online - <br> Things That You Know To
                                                <br> Project Your Money</a></h4>
                                        <div class="post-date">Decmber 14th, 2020 by <span>Admin</span></div>
                                    </div>
                                </div>
                                <!-- Image Column -->
                                <div class="image-column col-lg-6 col-md-6 col-sm-12 order-lg-2 order-1">
                                    <div class="inner-column">
                                        <div class="image">
                                            <a href="blog-detail.html"><img src="/theme/images/resource/news-2.jpg"
                                                                            alt=""/></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Column -->
                <div class="column col-lg-4 col-md-12 col-sm-12">
                    <!-- News Block Two -->
                    <div class="news-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <a href="blog-detail.html"><img src="/theme/images/resource/news-3.jpg" alt=""/></a>
                                <div class="arrow"></div>
                            </div>
                            <div class="lower-content">
                                <div class="title">tips & tricks</div>
                                <h4><a href="blog-detail.html">5 Secrets To <br> Coaching Your Employees <br> To
                                        Greatness</a></h4>
                                <div class="post-date">Decmber 14th, 2020 by <span>Admin</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Blog Section -->
