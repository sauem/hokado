<?php
$this->title = 'Products and brief';

?>

<?= $this->render('../parts/page-title', [
    'title' => $this->title,
    'description' => ''
]) ?>
<section class="portfolio-grid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="heading mb-50">
                    <div class="d-flex align-items-center">
                        <div class="divider divider-primary mr-30"></div>
                        <h2 class="heading__subtitle mb-0">
                            <?= Yii::t('app','products') ?>
                        </h2>
                    </div>
                    <h3 class="heading__title mb-0">
                        <?= Yii::t('app','product_items') ?>
                    </h3>
                </div>
            </div><!-- /.col-lg-6 -->
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="portfolio-filter d-flex flex-wrap justify-content-center list-unstyled">
                    <li><a class="filter active" href="#" data-filter="all">ALL</a></li>
                    <li><a class="filter" href="#" data-filter=".filter-Consulting">Công nghiệp</a></li>
                    <li><a class="filter" href="#" data-filter=".filter-Support">Thực phẩm sạch</a></li>
                    <li><a class="filter" href="#" data-filter=".filter-Security">Y tế</a></li>
                    <li><a class="filter" href="#" data-filter=".filter-Software">Điện lực</a></li>
                    <li><a class="filter" href="#" data-filter=".filter-Management">Thủy hải sản</a></li>
                    <li><a class="filter" href="#" data-filter=".filter-Cloud">Đông lạnh</a></li>
                </ul><!-- /.portfolio-filter  -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div id="filtered-items-wrap" class="row">
            <!-- portfolio item #1 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Support">
                <div class="portfolio-item">
                    <div class="portfolio__img">
                        <img src="/usvn/images/portfolio/grid/1.jpg" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__content">
                        <h4 class="portfolio__title"><a href="#">Sản phẩm mẫu</a></h4>
                        <p class="portfolio__desc">We delivered solutions at every step, and moved seamlessly into a more
                            proactive role as a strategic advisor, providing support and guidance across all IT topics.</p>
                        <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                            <span>Chi tiết</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.portfolio-content -->
                </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #2 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Consulting">
                <div class="portfolio-item">
                    <div class="portfolio__img">
                        <img src="/usvn/images/portfolio/grid/2.jpg" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__content">
                        <h4 class="portfolio__title"><a href="#">Sản phẩm mẫu</a></h4>
                        <p class="portfolio__desc">This single, unified platform integrates all operational phases of
                            selling and activation of their wireless services and devices, and serves as the backbone of the
                            operations.</p>
                        <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                            <span>Chi tiết</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.portfolio-content -->
                </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #3 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Security">
                <div class="portfolio-item">
                    <div class="portfolio__img">
                        <img src="/usvn/images/portfolio/grid/3.jpg" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__content">
                        <h4 class="portfolio__title"><a href="#">Sản phẩm mẫu</a></h4>
                        <p class="portfolio__desc">Servers going down on a weekly basis had become the organization’s
                            “normal.” We came on board with the objective of stabilizing the environment, assisting </p>
                        <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                            <span>Chi tiết</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.portfolio-content -->
                </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #4 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Software">
                <div class="portfolio-item">
                    <div class="portfolio__img">
                        <img src="/usvn/images/portfolio/grid/4.jpg" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__content">
                        <h4 class="portfolio__title"><a href="#">Sản phẩm mẫu</a></h4>
                        <p class="portfolio__desc">They needed a robust management solution to organize archive critical
                            documents for client cases, and wanted to determine solutions at every step, and moved </p>
                        <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                            <span>Chi tiết</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.portfolio-content -->
                </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #5 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Management">
                <div class="portfolio-item">
                    <div class="portfolio__img">
                        <img src="/usvn/images/portfolio/grid/5.jpg" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__content">
                        <h4 class="portfolio__title"><a href="#">Sản phẩm mẫu</a></h4>
                        <p class="portfolio__desc">This single, unified platform integrates all operational phases of
                            selling and activation of their wireless services and devices, and serves as the backbone of the
                            operations.</p>
                        <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                            <span>Chi tiết</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.portfolio-content -->
                </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #6 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-Cloud">
                <div class="portfolio-item">
                    <div class="portfolio__img">
                        <img src="/usvn/images/portfolio/grid/6.jpg" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__content">
                        <h4 class="portfolio__title"><a href="#">Sản phẩm mẫu</a></h4>
                        <p class="portfolio__desc">Servers going down on a weekly basis had become the organization’s
                            “normal.” We came on board with the objective of stabilizing the environment, assisting </p>
                        <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                            <span>Chi tiết</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.portfolio-content -->
                </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-12 text-center">
                <nav class="pagination-area">
                    <ul class="pagination justify-content-center mb-0">
                        <li><a class="current" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="icon-arrow-right"></i></a></li>
                    </ul>
                </nav><!-- .pagination-area -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<section class="banner-layout1 pt-90 pb-90 bg-overlay bg-overlay-primary">
    <div class="bg-img"><img src="/usvn/images/banners/5.jpg" alt="background"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-inner d-flex flex-column justify-content-between">
                <div>
                    <div class="heading heading-light">
                        <h3 class="heading__title mb-30">Giải pháp tiền năng cho doanh nghiệp của bạn!</h3>
                        <p class="heading__desc mb-30">We are experienced professionals who understand that It services is
                            changing,
                            and are partners who care about your success. As one of the world's largest IT Service Providers,
                            our
                            deep pool of certified engineers and IT staff are ready to help.
                        </p>
                    </div><!-- /.heading -->
                    <div class="d-flex align-items-center mb-40">
                        <a href="#" class="btn btn__white btn__icon mr-30">
                            <span>Liên hệ</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        <a href="#" class="btn btn__white btn__bordered btn__icon mr-30">
                            <span>Gọi hotline</span>
                            <i class="icon-phone"></i>
                        </a>
                    </div>
                </div>
                <div class="testimonials testimonials-wrapper">
                    <div class="slider-with-navs">
                        <!-- Testimonial #1 -->
                        <div class="testimonial-item">
                            <p class="testimonial__desc color-white">If you’re looking for a rewarding career and the
                                chance to make an
                                impact, you’ve come to the right place. We will transform your business through our techniques!
                            </p>
                            <div class="testimonial__meta">
                                <h4 class="testimonial__meta-title">Ahmed Abdallah</h4>
                                <p class="testimonial__meta-desc">Digital Media Manager</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #2 -->
                        <div class="testimonial-item">
                            <p class="testimonial__desc color-white"> If you’re looking for a rewarding career and the chance to
                                make an impact, you’ve come to the right place. We will transform your business through our
                                techniques! </p>
                            <div class="testimonial__meta">
                                <h4 class="testimonial__meta-title">John Peter</h4>
                                <p class="testimonial__meta-desc">7oroof Inc</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #3 -->
                        <div class="testimonial-item">
                            <p class="testimonial__desc color-white">If you’re looking for a rewarding career and the
                                chance to make an
                                impact, you’ve come to the right place. We will transform your business through our techniques!
                            </p>
                            <div class="testimonial__meta">
                                <h4 class="testimonial__meta-title">Ayman</h4>
                                <p class="testimonial__meta-desc">7oroof Inc</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #2 -->
                        <div class="testimonial-item">
                            <p class="testimonial__desc color-white"> If you’re looking for a rewarding career and the chance to
                                make an impact, you’ve come to the right place. We will transform your business through our
                                techniques! </p>
                            <div class="testimonial__meta">
                                <h4 class="testimonial__meta-title">John Peter</h4>
                                <p class="testimonial__meta-desc">7oroof Inc</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #3 -->
                        <div class="testimonial-item">
                            <p class="testimonial__desc color-white">My project was a simple & small task, but the
                                persistence and
                                determination turned it into an awesome and great project which make me happy .
                            </p>
                            <div class="testimonial__meta">
                                <h4 class="testimonial__meta-title">John Peter</h4>
                                <p class="testimonial__meta-desc">7oroof Inc</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->
                    </div>
                    <div class="slider-nav">
                        <div class="testimonial__thumb">
                            <img src="/usvn/images/testimonials/thumbs/1.png" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                        <div class="testimonial__thumb">
                            <img src="/usvn/images/testimonials/thumbs/2.png" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                        <div class="testimonial__thumb">
                            <img src="/usvn/images/testimonials/thumbs/3.png" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                        <div class="testimonial__thumb">
                            <img src="/usvn/images/testimonials/thumbs/2.png" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                        <div class="testimonial__thumb">
                            <img src="/usvn/images/testimonials/thumbs/3.png" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                    </div><!-- /.slcik-nav -->
                </div>
            </div><!-- /.col-xl-6 -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                <div class="contact-panel">
                    <form class="contact-panel__form" method="post" id="contactForm">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="contact-panel__title mb-20">Yêu cầu sản phẩm</h4>
                                <p class="contact-panel__desc mb-30">Thông tin yêu cầu sản phẩm của bạn sẽ được đội ngũ tư vấn lưu lại hồ sơ chăm sóc khách hàg và bảo mật hoàn toàn</p>
                            </div> <!-- /.col-12 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                                           required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" id="contact-email"
                                           name="contact-email" required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="0">Contact preference</option>
                                        <option value="1">Link to chat</option>
                                        <option value="2">Contact via Email</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="0">Export country </option>
                                        <option value="1">England</option>
                                        <option value="2">Us</option>
                                        <option value="2">Autruslia</option>
                                        <option value="2">Viet Nam</option>
                                    </select>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Time expectation " id="contact-Phone"
                                           name="contact-phone">
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-12">
                                <div class="form-group">
                      <textarea class="form-control" placeholder="Products of interest" id="contact-message"
                                name="contact-message"></textarea>
                                </div>
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-20">
                                    <input type="checkbox" class="custom-control-input" id="acceptTerms">
                                    <label class="custom-control-label" for="acceptTerms">Tôi đồng ý với điều khoản dịch vụ của USVN</label>
                                </div>
                                <button type="submit" class="btn btn__primary btn__xl btn__block">Gưi yêu cầu </button>
                                <div class="contact-result"></div>
                            </div><!-- /.col-12 -->
                        </div><!-- /.row -->
                    </form>
                </div>
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Banner layout 1 -->

