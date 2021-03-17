<?php

use common\helper\HelperFunction;

?>

<header class="header header-transparent">
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">

            <a class="navbar-brand" href="/">
                <img width="80" src="<?= HelperFunction::getLogo('header') ?>" class="logo-light" alt="logo">
                <img width="80" src="<?= HelperFunction::getLogo('header') ?>" class="logo-dark" alt="logo">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav m-auto">
                    <li class="nav__item">
                        <a href="/" class="nav__item-link">Trang chủ</a>
                    </li>
                    <li class="nav__item">
                        <a href="product-and-brief-request.html" class="nav__item-link">Sản phẩm & Yêu cầu đặt
                            hàng</a>
                    </li>
                    <li class="nav__item">
                        <a href="guideline.html" class="nav__item-link">Hướng dẫn</a>
                    </li>
                    <li class="nav__item">
                        <a href="blog.html" class="nav__item-link">Tin tức</a>
                    </li>
                    <!--              <li class="nav__item  has-dropdown">-->
                    <!--                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Company</a>-->
                    <!--                <ul class="dropdown-menu">-->
                    <!--                  <li class="nav__item">-->
                    <!--                    <a href="about-us.html" class="nav__item-link">About Us</a>-->
                    <!--                  </li>&lt;!&ndash; /.nav-item &ndash;&gt;-->
                    <!--                  <li class="nav__item">-->
                    <!--                    <a href="why-us.html" class="nav__item-link">Why Choose Us</a>-->
                    <!--                  </li>&lt;!&ndash; /.nav-item &ndash;&gt;-->
                    <!--                  <li class="nav__item">-->
                    <!--                    <a href="leadership-team.html" class="nav__item-link">Leadership Team</a>-->
                    <!--                  </li>&lt;!&ndash; /.nav-item &ndash;&gt;-->
                    <!--                  <li class="nav__item">-->
                    <!--                    <a href="awards.html" class="nav__item-link">Award & Recognition</a>-->
                    <!--                  </li>&lt;!&ndash; /.nav-item &ndash;&gt;-->
                    <!--                  <li class="nav__item">-->
                    <!--                    <a href="pricing.html" class="nav__item-link">Pricing & Plans</a>-->
                    <!--                  </li>&lt;!&ndash; /.nav-item &ndash;&gt;-->
                    <!--                  <li class="nav__item">-->
                    <!--                    <a href="faqs.html" class="nav__item-link">Help & FAQs</a>-->
                    <!--                  </li> &lt;!&ndash; /.nav-item &ndash;&gt;-->
                    <!--                  <li class="nav__item">-->
                    <!--                    <a href="careers.html" class="nav__item-link">Careers</a>-->
                    <!--                  </li>&lt;!&ndash; /.nav-item &ndash;&gt;-->
                    <!--                </ul>&lt;!&ndash; /.dropdown-menu &ndash;&gt;-->
                    <!--              </li>-->
                    <li class="nav__item">
                        <a href="contact-us.html" class="nav__item-link">Liên hệ</a>
                    </li><!-- /.nav-item -->
                </ul>
                <ul class="navbar-actions list-unstyled mb-0 d-flex align-items-center">
                    <li class="nav__item language has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">
                            <img src="/usvn/images/flags/<?= HelperFunction::Language('vi-VN') ? 'vi.svg' : 'en.svg' ?>"/>
                            <span class="ml-1"></span><?= HelperFunction::Language('vi-VN') ? 'VI' : 'EN' ?> </a>
                        <ul class="dropdown-menu">
                            <li class="nav__item">
                                <a onclick="switchLanguage('<?= LANG_VI?>')" href="javascript:void(0)" class="nav__item-link">
                                    <img width="24" src="/usvn/images/flags/vi.svg"/> VN</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="javascript:void(0)" onclick="switchLanguage('<?= LANG_EN?>')" class="nav__item-link">
                                    <img width="24" src="/usvn/images/flags/en.svg"/> English</a>
                            </li><!-- /.nav-item -->
                        </ul><!-- /.dropdown-menu -->
                    </li>
                    <li>
                        <a href="tel: <?= HelperFunction::setting('hotline_1') ?>"
                           class="action__btn">
                            <i class="icon-phone"></i><span><?= HelperFunction::setting('hotline_1', false) ?></span>
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <!-- /.navbar-actions -->
        </div><!-- /.container -->
    </nav><!-- /.navabr -->
</header>
