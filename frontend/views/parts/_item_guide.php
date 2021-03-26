<?php

use common\helper\HelperFunction;

?>
<div class="service-item">
    <div class="service__content">
        <h4 class="service__title text-2"><?= $model->name ?></h4>
        <p class="service__desc text-5">
            <?= $model->excerpt ?>
        </p>
        <a href="<?= HelperFunction::Link(BLOG, $model->slug, $model->archive->slug) ?>" class="btn btn__secondary">
            <span><?= Yii::t('app', 'read_more') ?></span>
            <i class="icon-arrow-right"></i>
        </a>
    </div><!-- /.service__content -->
    <div class="service__img">
        <img src="<?= $model->avatar ?>" alt="<?= $model->name ?>" class="w-100">
    </div><!-- /.service__img -->
</div>
