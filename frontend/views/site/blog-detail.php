<?php

use common\helper\HelperFunction;

$this->title = $model->name;
$this->params['header_type'] = 'light';
?>


<section class="page-title page-title-layout15 text-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <nav>
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= PRODUCT_AND_BRIEF ?>">Archive</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= $model->name ?>
                        </li>
                    </ol>
                </nav>
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<section class="blog blog-single pt-0 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="post-item mb-0">
                    <div class="post__img">
                        <a href="#">
                            <img src="/usvn/images/blog/single/1.jpg" alt="blog image">
                        </a>
                    </div><!-- /.post-img -->
                    <div class="post__content">
                        <div class="post__meta d-inline-flex flex-wrap align-items-center mb-0">
                            <span class="post__meta-date">
                              <i class="icon-calendar-new"></i>  <?= date('d/m/Y', $model->created_at) ?>
                            </span>
                        </div>
                        <h1 class="post__title">
                            <?= $model->name ?>
                        </h1>
                        <div class="post__desc">
                            <?= $model->content ?>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="widget-nav d-flex justify-content-between mb-40">
                    <?php if ($prevPost) {
                        ?>
                        <a href="<?= HelperFunction::Link(BLOG, $prevPost->slug, $prevPost->archive->slug) ?>"
                           class="widget-nav__prev d-flex flex-wrap">
                            <div class="widget-nav__img">
                                <div class="widget-nav__overlay"></div>
                                <img src="<?= $prevPost->avatar ?>" alt="<?= $prevPost->name ?>">
                            </div>
                            <div class="widget-nav__content">
                                <span><?= Yii::t('app', 'prev', ['type' => Yii::t('app', 'article')]) ?></span>
                                <h5 class="fz-16 mb-0 text-2">
                                    <?= $prevPost->name ?>
                                </h5>
                            </div>
                        </a>
                        <?php
                    } ?>
                    <?php if ($nextPost) {
                        ?>
                        <a href="<?= HelperFunction::Link(BLOG, $nextPost->slug,$nextPost->archive->slug) ?>"
                           class="widget-nav__next d-flex flex-wrap">
                            <div class="widget-nav__img">
                                <div class="widget-nav__overlay"></div>
                                <img src="<?= $nextPost->avatar ?>" alt="<?= $nextPost->name ?>">
                            </div>
                            <div class="widget-nav__content">
                                <span><?= Yii::t('app', 'next', ['type' => Yii::t('app', 'product')]) ?></span>
                                <h5 class="fz-16 mb-0 text-2">
                                    <?= $nextPost->name ?>
                                </h5>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <?= $this->render('../parts/sidebar-article', [
                    'categories' => $categories,
                    'relatedPosts' => $relatedPosts
                ]) ?>
            </div>
        </div>
    </div>
</section>
