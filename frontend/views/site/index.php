<?php

/* @var $this yii\web\View */

use common\helper\HelperFunction;

$this->title = HelperFunction::getLanguage() == 'vi' ?
    HelperFunction::setting('site_name') :
    HelperFunction::setting('site_name_en');
?>

<!-- Services Section -->
<?= $this->render('../parts/slider', [
    'sliders' => $sliders
]) ?>
<?php if (!empty($articles)) { ?>
    <section class="portfolio-grid portfolio-grid-carousel pb-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading mb-50">
                        <div class="d-flex align-items-center">
                            <div class="divider divider-primary mr-30"></div>
                            <h2 class="heading__subtitle mb-0"><?= Yii::t('app', 'news') ?></h2>
                        </div>
                        <h3 class="heading__title mb-0"><?= Yii::t('app', 'market_vietnam') ?></h3>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="slick-carousel"
                         data-slick='{"slidesToShow": 3, "slidesToScroll": 2, "arrows": true, "dots": true, "autoplay": true,"autoplaySpeed": 3000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                        <?php foreach ($articles as $k => $article) { ?>
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="<?= $article->avatar ?>" alt="<?= $article->name ?>">
                                </div><!-- /.portfolio-img -->
                                <div class="portfolio__content">
                                    <h4 class="portfolio__title text-2">
                                        <a href="<?= HelperFunction::Link(BLOG, $article->slug, $article->archive->slug) ?>">
                                            <?= \yii\helpers\StringHelper::truncateWords($article->name, 20, '...') ?>
                                        </a>
                                    </h4>
                                    <p class="portfolio__desc text-4"><?= $article->excerpt ?></p>
                                    <a href="<?= HelperFunction::Link(BLOG, $article->slug, $article->archive->slug) ?>"
                                       class="btn btn__secondary btn__link">
                                        <span><?= Yii::t('app', 'read_more') ?></span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.portfolio-content -->
                            </div>
                        <?php } ?>
                    </div><!-- /.carousel -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
<?php } ?>
<section class="about-layout4 pt-50 pb-0">
    <div class="container">
        <div class="row heading">
            <div class="col-12">
                <div class="d-flex align-items-center mb-20">
                    <div class="divider divider-primary mr-30"></div>
                    <h2 class="heading__subtitle mb-0"><?= Yii::t('app', 'about_us') ?></h2>
                </div>
            </div><!-- /.col-12 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
                <h3 class="heading__title mb-40"><?= Yii::t('app', 'company_name') ?></h3>
                <div class="about__img">
                    <img src="/usvn/images/about/2.jpg" alt="about">
                </div><!-- /.about-img -->
                <div class="video__btn-wrapper">
                    <a class="video__btn video__btn-white popup-video"
                       href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                        <div class="video__player">
                            <i class="fa fa-play"></i>
                        </div>
                        <span class="video__btn-title"><?= Yii::t('app', 'video_intro') ?></span>
                    </a>
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
                <?= HelperFunction::setting('about_us', true) ?>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- ========================
    Services Carousel
=========================== -->
<?php if (!empty($products)) { ?>
    <section class="services-layout2 services-carousel pt-130 bg-gray">
        <div class="container">
            <div class="row heading mb-40">
                <div class="col-12">
                    <div class="d-flex align-items-center">
                        <div class="divider divider-primary mr-30"></div>
                        <h2 class="heading__subtitle mb-0"><?= Yii::t('app', 'products') ?></h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h3 class="heading__title"><?= Yii::t('app', 'products_new') ?></h3>
                </div><!-- /col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <p class="heading__desc">Các mặt hàng mới được xuất khẩu nhiều nhất, giá cả và triết khẩu cạnh tranh
                        từ
                        USVN</p>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="slick-carousel"
                         data-slick='{"slidesToShow": 3, "slidesToScroll": 2, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                        <?php foreach ($products as $p => $product) { ?>
                            <div class="service-item">
                                <div class="service__content">
                                    <div class="service__icon">
                                        <img src="<?= $product->avatar?>" />
                                    </div><!-- /.service__icon -->
                                    <h4 class="service__title text-2"><?= $product->name ?></h4>
                                    <p class="service__desc text-3"><?= $product->excerpt ?> </p>
                                    <a href="<?= HelperFunction::Link(PRODUCT, $product->slug, HelperFunction::fistArchive($product)) ?>"
                                       class="btn btn__secondary">
                                        <span><?= Yii::t('app', 'detail') ?></span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.service-content -->
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 btn-wrapper">
                    <a href="/<?= PRODUCT_AND_BRIEF ?>" class="btn btn__secondary btn__bordered btn__icon">
                        <span><?= Yii::t('app', 'product_and_brief') ?></span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
