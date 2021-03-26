<?php

use yii\helpers\ArrayHelper;
use common\helper\HelperFunction;

$archives = $model->archives;
$firstArchive = array_shift($archives);
$firstArchive = $firstArchive->archive->slug;
?>
<div class="portfolio-item">
    <div class="portfolio__img">
        <img src="<?= $model->avatar ?>" alt="<?= $model->name ?>">
    </div>
    <div class="portfolio__content">
        <h4 class="portfolio__title text-2">
            <a href="<?= HelperFunction::Link(PRODUCT, $model->slug, $firstArchive) ?>">
                <?= $model->name ?>
            </a>
        </h4>
        <p class="portfolio__desc text-3">
            <?= $model->excerpt ?>
        </p>
        <a href="<?= HelperFunction::Link(PRODUCT, $model->slug, $firstArchive) ?>"
           class="btn btn__secondary btn__link">
            <span><?= Yii::t('app', 'detail') ?></span>
            <i class="icon-arrow-right"></i>
        </a>
    </div>
</div>
