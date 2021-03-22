<?php
$this->title = $model->name ? $model->name : 'Archive';

use yii\widgets\ListView;

?>
<section class="page-title page-title-layout16 text-center bg-overlay bg-overlay-gradient bg-parallax">
    <div class="bg-img"><img src="/usvn/images/page-titles/12.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pagetitle__heading mb-10">News</h1>
                <nav>
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">News</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="blog-grid">
    <div class="container">
        <div class="row">
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '../parts/_item_product' . ($model->type === 'product' ? '_item_product' : '_item_article'),
                'emptyText' => 'No results.',
                'viewParams' => [
                        'archive' => $model
                ],
                'itemOptions' => [
                    'tag' => 'article',
                    'class' => 'col-sm-6 col-md-6 col-lg-4 mix',
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
