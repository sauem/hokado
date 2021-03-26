<?php

use common\helper\HelperFunction;

?>
<aside class="sidebar">
    <div class="widget widget-search">
        <h5 class="widget__title"><?= Yii::t('app', 'search') ?></h5>
        <div class="widget__content">
            <form class="widget__form-search">
                <input type="text" class="form-control" placeholder="Search...">
                <button class="btn" type="submit"><i class="icon-search"></i></button>
            </form>
        </div><!-- /.widget-content -->
    </div><!-- /.widget-search -->
    <?php if (isset($relatedProducts) && !empty($relatedProducts)) {
        ?>
        <div class="widget widget-posts">
            <h5 class="widget__title"><?= Yii::t('app', 'recent_product') ?></h5>
            <div class="widget__content">
                <?php foreach ($relatedProducts as $product) {
                    ?>
                    <div class="widget-post-item d-flex align-items-center">
                        <div class="widget-post__img">
                            <a href="<?= HelperFunction::Link(PRODUCT, $product->slug, HelperFunction::fistArchive($product)) ?>">
                                <img src="<?= $product->avatar ?>" alt="<?= $product->name ?>">
                            </a>
                        </div><!-- /.widget-post-img -->
                        <div class="widget-post__content">
                            <h4 class="widget-post__title text-2">
                                <a href="<?= HelperFunction::Link(PRODUCT, $product->slug, HelperFunction::fistArchive($product)) ?>">
                                    <?= $product->name ?>
                                </a>
                            </h4>
                            <span class="widget-post__date">
                                <?= date('d/m/Y', $product->created_at) ?>
                            </span>
                        </div><!-- /.widget-post-content -->
                    </div>
                    <?php
                } ?>
            </div>
        </div>
        <?php
    } ?>
    <?php if (isset($categories) && !empty($categories)) { ?>
        <div class="widget widget-categories">
            <h5 class="widget__title"><?= Yii::t('app', 'category') ?></h5>
            <div class="widget-content">
                <ul class="list-unstyled">
                    <?php foreach ($categories as $category) { ?>
                        <li>
                            <a href="<?= HelperFunction::Link(ARCHIVE, $category->slug) ?>">
                                <span><?= $category->name ?></span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div><!-- /.widget-content -->
        </div>
    <?php } ?>
    <!--    <div class="widget widget-tags">-->
    <!--        <h5 class="widget__title">Tags</h5>-->
    <!--        <div class="widget-content">-->
    <!--            <ul class="list-unstyled d-flex flex-wrap">-->
    <!--                <li><a href="#">Insights</a></li>-->
    <!--                <li><a href="#">Industry</a></li>-->
    <!--                <li><a href="#">Modern</a></li>-->
    <!--                <li><a href="#">Corporate</a></li>-->
    <!--                <li><a href="#">Business</a></li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </div>-->
</aside>
