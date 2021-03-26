<?php

use common\helper\HelperFunction;

?>
<div class="post-item">
    <div class="post__img">
        <a href="<?= HelperFunction::Link(BLOG, $model->slug, $model->archive->slug) ?>">
            <img src="<?= $model->avatar ?>" alt="<?= $model->name ?>">
        </a>
    </div><!-- /.post-img -->
    <div class="post__content">
        <span class="post__meta-date"><?= date('d/m/Y', $model->created_at) ?></span>
        <h4 class="post__title text-2">
            <a href="<?= HelperFunction::Link(BLOG, $model->slug, $model->archive->slug) ?>">
                <?= $model->name ?>
            </a>
        </h4>
        <p class="post__desc text-3"><?= $model->excerpt ?></p>
        <a href="<?= HelperFunction::Link(BLOG, $model->slug, $model->archive->slug) ?>"
           class="btn btn__secondary btn__link">
            <span><?= Yii::t('app', 'read_more') ?></span>
            <i class="icon-arrow-right"></i>
        </a>
    </div><!-- /.post-content -->
</div>
