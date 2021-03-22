<?php

use common\helper\HelperFunction;

?>
<div class="portfolio-item">
    <div class="portfolio__img">
        <img src="<?= $model->avatar ?>" alt="<?= $model->name ?>">
    </div>
    <div class="portfolio__content">
        <h4 class="portfolio__title">
            <a href="<?= HelperFunction::Link(BLOG, $model->slug, $archive->slug) ?>">
                <?= $model->name ?>
            </a>
        </h4>
        <p class="portfolio__desc">
            <?= $model->excerpt ?>
        </p>
        <a href="<?= HelperFunction::Link(BLOG, $model->slug, $archive->slug) ?>" class="btn btn__secondary btn__link">
            <span><?= Yii::t('app', 'detail') ?></span>
            <i class="icon-arrow-right"></i>
        </a>
    </div>
</div>

