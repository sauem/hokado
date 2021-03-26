<?php
$this->title = $model->name ? $model->name : 'Archive';

use yii\widgets\ListView;

?>


<?= $this->render('../parts/page-title', [
    'title' => $this->title,
    'description' => ''
]) ?>
<section class="portfolio-grid">
    <div class="container">
        <!--        <div class="row">-->
        <!--            <div class="col-sm-12 col-md-12 col-lg-6">-->
        <!--                <div class="heading mb-50">-->
        <!--                    <div class="d-flex align-items-center">-->
        <!--                        <div class="divider divider-primary mr-30"></div>-->
        <!--                        <h2 class="heading__subtitle mb-0">-->
        <!--                            --><? //= Yii::t('app', 'products') ?>
        <!--                        </h2>-->
        <!--                    </div>-->
        <!--                    <h3 class="heading__title mb-0">-->
        <!--                        --><? //= Yii::t('app', 'product_items') ?>
        <!--                    </h3>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->

        <div id="filtered-items-wrap" class="row">

            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '../parts/' . ($model->type === 'product' ? '_item_product' : '_item_article'),
                'emptyText' => 'No results.',
                'viewParams' => [
                    'archive' => $model
                ],
                'options' => ['class' => 'row'],
                'itemOptions' => [
                    'tag' => 'article',
                    'class' => 'col-12 col-md-4 mix',
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
