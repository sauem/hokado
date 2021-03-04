<?php

namespace backend\modules\controllers;

use common\helper\HelperFunction;
use common\models\Archives;
use yii\web\Controller;

/**
 * Default controller for the `api` module
 */
class DefaultController extends BaseActiveController
{
    public $modelClass = Archives::class;

}
