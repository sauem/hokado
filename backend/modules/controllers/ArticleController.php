<?php


namespace backend\modules\controllers;


use common\models\Articles;

class ArticleController extends BaseActiveFilterController
{
    public $modelClass = Articles::class;

}
