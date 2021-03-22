<?php

use yii\widgets\ListView;

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
                            <?= Yii::t('app', 'products') ?>
                        </h2>
                    </div>
                    <h3 class="heading__title mb-0">
                        <?= Yii::t('app', 'product_items') ?>
                    </h3>
                </div>
            </div><!-- /.col-lg-6 -->
        </div>

        <div id="filtered-items-wrap" class="row">

            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '../parts/_item_product',
                'emptyText' => 'No results.',
                'itemOptions' => [
                    'tag' => 'article',
                    'class' => 'col-sm-6 col-md-6 col-lg-4 mix',
                ],
                'summary' => false,
                'pager' => [
                    'firstPageLabel' => false,
                    'lastPageLabel' => false,
                    'prevPageLabel' => '<i class="icon-arrow-left"></i>',
                    'nextPageLabel' => '<i class="icon-arrow-right"></i>',
                    'maxButtonCount' => 3,
                    'disabledPageCssClass' => 'd-none',
                    'activePageCssClass' => 'current'
                ],
            ])
            ?>
        </div>
    </div>
</section>
<section class="banner-layout1 pt-90 pb-90 bg-overlay bg-overlay-primary">
    <div class="bg-img"><img src="/usvn/images/banners/5.jpg" alt="background"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-inner d-flex flex-column justify-content-between">
                <div>
                    <div class="heading heading-light">
                        <h3 class="heading__title mb-30">Giải pháp tiền năng cho doanh nghiệp của bạn!</h3>
                        <p class="heading__desc mb-30">We are experienced professionals who understand that It services
                            is
                            changing,
                            and are partners who care about your success. As one of the world's largest IT Service
                            Providers,
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
                                impact, you’ve come to the right place. We will transform your business through our
                                techniques!
                            </p>
                            <div class="testimonial__meta">
                                <h4 class="testimonial__meta-title">Ahmed Abdallah</h4>
                                <p class="testimonial__meta-desc">Digital Media Manager</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #2 -->
                        <div class="testimonial-item">
                            <p class="testimonial__desc color-white"> If you’re looking for a rewarding career and the
                                chance to
                                make an impact, you’ve come to the right place. We will transform your business through
                                our
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
                                impact, you’ve come to the right place. We will transform your business through our
                                techniques!
                            </p>
                            <div class="testimonial__meta">
                                <h4 class="testimonial__meta-title">Ayman</h4>
                                <p class="testimonial__meta-desc">7oroof Inc</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #2 -->
                        <div class="testimonial-item">
                            <p class="testimonial__desc color-white"> If you’re looking for a rewarding career and the
                                chance to
                                make an impact, you’ve come to the right place. We will transform your business through
                                our
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
                                <p class="contact-panel__desc mb-30">Thông tin yêu cầu sản phẩm của bạn sẽ được đội ngũ
                                    tư vấn lưu lại hồ sơ chăm sóc khách hàg và bảo mật hoàn toàn</p>
                            </div> <!-- /.col-12 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="contact-name"
                                           name="contact-name"
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
                                        <option value="0">Export country</option>
                                        <option value="1">England</option>
                                        <option value="2">Us</option>
                                        <option value="2">Autruslia</option>
                                        <option value="2">Viet Nam</option>
                                    </select>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Time expectation "
                                           id="contact-Phone"
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
                                    <label class="custom-control-label" for="acceptTerms">Tôi đồng ý với điều khoản dịch
                                        vụ của USVN</label>
                                </div>
                                <button type="submit" class="btn btn__primary btn__xl btn__block">Gưi yêu cầu</button>
                                <div class="contact-result"></div>
                            </div><!-- /.col-12 -->
                        </div><!-- /.row -->
                    </form>
                </div>
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Banner layout 1 -->

