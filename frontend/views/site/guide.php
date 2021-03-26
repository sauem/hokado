<?php

use common\helper\HelperFunction;
use yii\widgets\ListView;

$this->title = 'Guideline';
?>

<?= $this->render('../parts/page-title', [
    'title' => $this->title,
    'description' => ''
]) ?>
<!-- ========================
    Services Layout 1
=========================== -->
<section class="services-layout1 bg-gray pt-130 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-50">
                    <h2 class="heading__subtitle">Hướng dẫn đặt hàng</h2>
                    <h3 class="heading__title">Các mẹo và thủ tục <br>đặt hàng xuất khẩu.</h3>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->

        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '../parts/_item_guide',
            'emptyText' => 'No results.',
            'options' => [
                'class' => 'row'
            ],
            'itemOptions' => [
                'tag' => 'article',
                'class' => 'col-12 col-md-4',
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
</section>
<?php if (isset($products) && !empty($products)) {
    ?>
    <section class="portfolio-carousel">
        <div class="container">
            <div class="row mb-70">
                <div class="col-sm-12 col-md-7">
                    <div class="heading">
                        <div class="d-flex align-items-center">
                            <div class="divider divider-primary mr-30"></div>
                            <h2 class="heading__subtitle mb-0"><?= Yii::t('app', 'products') ?></h2>
                        </div>
                        <h3 class="heading__title mb-0">Các mặt hàng xuất khẩu tốt <br>tại thị trường Việt Nam</h3>
                    </div>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-5">
                    <p class="heading__desc mb-10">SmartData been helping organizations and Providers through the World
                        to
                        manage their IT with our unique approach to technology management and consultancy
                        solutions. </p>
                    <a href="/<?= CONTACT ?>" class="btn btn__primary btn__icon mt-20 mr-20">
                        <span>Liên hệ chúng tôi</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <a href="/<?= PRODUCT_AND_BRIEF ?>" class="btn btn__secondary btn__link btn__icon mt-20">
                        <span>Yêu cầu sản phẩm</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-carousel-wrapper">
                        <div class="slick-carousel"
                             data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 768, "settings": {"slidesToShow": 1}}, {"breakpoint": 570, "settings": {"slidesToShow": 1}}]}'>
                            <?php foreach ($products as $product) { ?>
                                <div class="portfolio-item">
                                    <div class="portfolio__img">
                                        <img src="<?= $product->avatar ?>" alt="<?= $product->name ?>">
                                        <div class="portfolio__hover">
                                            <a class="portfolio__icon"
                                               href="<?= HelperFunction::Link(PRODUCT, $product->slug, HelperFunction::fistArchive($product)) ?>">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div><!-- /.portfolio__hover-->
                                    </div><!-- /.portfolio-img -->
                                    <div class="portfolio__content">
                                        <h4 class="portfolio__title text-1">
                                            <a href="<?= HelperFunction::Link(PRODUCT, $product->slug, HelperFunction::fistArchive($product)) ?>">
                                                <?= $product->name ?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <?php
} ?>
